<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\LabManagement;
use App\Models\Patient;
use App\Models\LabTest;
use App\Models\PatientRecord;
use App\Models\PatientPayRecord;
use App\Models\TestFormat;
use App\Models\Result;
use App\Models\LabTestCategory;
use App\Models\Remark;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use PDF;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\select;

class PatientController extends Controller
{
    public function index()
    {
        // $patients = Patient::Join('lab_tests as t','patients.test_id','=','t.id')
        // ->select('t.name as test_name','t.id as test_id','patients.*')->get();
        // $patients = Patient::orderBy('id','desc')->get();

        $tests = Patient::join('patient_records as pr', 'pr.patient_id', 'patients.id')
            ->select('patients.id as p_id', 'patients.name as patient_name', 'pr.*')
            ->orderBy('pr.id', 'desc')
            ->get();

        if ($tests->isEmpty()) {
            return redirect()->back()->with('error', 'Tests not found')->withInput();
        }
        // dd($tests);
        return view('admin.patient.list', compact('tests'));
    }

    public function create()
    {
        $labTests = LabTest::Join('lab_test_categories as c', 'lab_tests.category_id', '=', 'c.id')
            ->select('c.name as category_name', 'c.id as category_id', 'lab_tests.*')
            ->get();

        $categories = LabTestCategory::get();



        $doctors = Doctor::get();
        // $patients = Patient::get();
        return view('admin.patient.create', compact('labTests', 'categories', 'doctors'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'contact' => 'required|min:11|max:13',
        ]);

        $contact = $request->contact;
        if ($contact && !$request->name && !$request->age && !$request->gender) {
            // Check Patient Exist
            $patients = Patient::where('contact', $request->contact)->get();
            if ($patients->isEmpty()) {
                return redirect('/patient/')->with([
                    'not found' => 'Patient Not Found',
                    'contact' => $contact,
                ]);
            }
            return redirect('/patient/')->with([
                'patients' => $patients,
                'contact' => $contact,
            ]);
        } else {

            $request->validate([
                'name' => 'required',
                'age' => 'required|max:3',
                'gender' => 'required',
            ]);

            $patientId = $request->id;
            $created_test = '';

            // New Patient Save In DB  
            if ($request->id == null) {

                $patient = new Patient;
                $patient->name = $request->name;
                $patient->age = $request->age;
                $patient->gender = $request->gender;
                $patient->contact = $request->contact;
                $patient->save();

                // Get the ID of the newly created patient
                $patientId = $patient->id;
            }

            if ($request->selectedTests == null) {
                return redirect('/patient/list');
            }


            // Patient Pay Records
            $patient_pay = new PatientPayRecord;
            $patient_pay->user_id = Auth::user()->id;
            $patient_pay->patient_id = $patientId;
            $patient_pay->total_amount = $request->totalAmount;
            $patient_pay->net_amount = $request->netAmount;
            $patient_pay->dis_amount = $request->disAmount ?? null;
            $patient_pay->dis_type = $request->dis_type;
            $patient_pay->recevied_amount = $request->recAmount ?? null;
            $patient_pay->balance_amount = $request->balAmount ?? null;
            $patient_pay->save();

            // Get the ID of the newly created patient
            $slip_id = $patient_pay->id;


            foreach ($request->selectedTests as $index => $selectedTest) {

                for ($x = 0; $x < $request->quantity[$index]; $x++) {
                    $patient_record = new PatientRecord;
                    $patient_record->user_id = Auth::user()->id;
                    $patient_record->patient_id = $patientId;
                    $patient_record->test_id = $selectedTest;
                    $patient_record->is_result = 'no';
                    $patient_record->test_price = $request->price[$index] ?? null;
                    $patient_record->test_name = $request->test_name[$index] ?? null;
                    $patient_record->quantity = 1;
                    $patient_record->ref_by_id =  is_numeric($request->refBy) ? $request->refBy : null;
                    $patient_record->save();

                    $created_test = Carbon::parse($patient_record->created_at)->format('y-m-d H:i:s');
                }
            }

            // $limit = count($request->selectedTests);

            $selectedValues =  DB::table('patient_records')
                ->select(DB::raw('COUNT(test_name) AS test_quantity, test_price, test_name, ref_by_id'))
                ->where('patient_id', $patientId)
                ->where('created_at', $created_test)
                ->groupBy('test_name', 'test_price', 'ref_by_id')
                ->orderBy('id', 'DESC')
                ->get();


            // dd($selectedValues);

            $id = $selectedValues[0]->ref_by_id;
            $ref_by = Doctor::where('id', $id)->first();

            $patient_info = Patient::join('patient_pay_records as ppr', 'patients.id', '=', 'ppr.patient_id')
                ->select('ppr.id as ppr_id', 'ppr.*', 'patients.*')->where('ppr.patient_id', $patientId)->orderByDesc('ppr.id')->first();

            return  redirect('patient/slip/00' . $slip_id);

            // return view('admin.patient.slip', compact('ref_by', 'selectedValues', 'patient_info'));
        }
    }

    // public function edit()
    // {
    //     $patients = Patient::get();
    //     return view('admin.patient.edit');
    // }

    // public function update(Request $request)
    // {
    //     $request->validate([]);
    //     // return view('admin.patient.list');
    // }

    public function delete($id)
    {
        Patient::where('id', $id)->delete();

        return redirect('/patient/list')->with('success', 'Remove Successfuly.');;
    }


    public function slip($num)
    {
        $data['num'] = $num;

        $id = trim($num,"0");

        $setting = Setting::orderBy('id','DESC')->first();
        if(empty($setting)){
            return redirect()->back()->with('error','Company information not found')->withInput();
        }
        $data['setting'] = $setting;

        $data['patient_info'] = Patient::join('patient_pay_records as ppr', 'patients.id', '=', 'ppr.patient_id')
            ->select('ppr.id as ppr_id', 'ppr.*', 'patients.name', 'patients.age')->where('ppr.id', $id)->orderByDesc('ppr.id')->first();

        if (empty($data['patient_info'])) {
            return redirect()->back()->with('error', 'Patient Information not found')->withInput();
        }

        $patientId = $data['patient_info']->patient_id;
        $created_test = Carbon::parse($data['patient_info']->created_at)->format('y-m-d H:i:s');

        $data['selectedTests'] =  DB::table('patient_records')
            ->select(DB::raw('COUNT(test_name) AS test_quantity, test_price, test_name, ref_by_id'))
            ->where('patient_id', $patientId)
            ->where('created_at', $created_test)
            ->groupBy('test_name', 'test_price', 'ref_by_id')
            ->orderBy('id', 'DESC')
            ->get();

        if ($data['selectedTests']->isEmpty()) {
            return redirect()->back()->with('error', 'Selected Tests not found')->withInput();
        }

        $refId = $data['selectedTests'][0]->ref_by_id;
        $data['ref_by'] = Doctor::where('id', $refId)->first();

        if (empty($data['ref_by'])) {
            return redirect()->back()->with('error', 'Refference Doctor not found')->withInput();
        }

        $pdf = $this->generatePdfSlip($data);
        $pdfContent = $pdf->output();
        return response($pdfContent, 200)->header('Content-Type', 'application/pdf');
    }


    private function generatePdfSlip($data)
    {

        // dd($data);
        $pdfView = view('slip.pdf_template', $data);
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($pdfView->render());
        $dompdf->render();

        return $dompdf;
    }

    public function show_patient_test($patient_id)
    {

        $patient_tests = PatientRecord::join('lab_tests', 'lab_tests.id', 'patient_records.test_id')
            ->select('lab_tests.name as test_name', 'patient_records.*')
            ->where('patient_records.patient_id', $patient_id)
            ->get();
        return view('admin.patient.show_patient_test', compact('patient_tests', 'patient_id'));
    }

    public function get_test_format($id)
    {
        $remarks = Remark::orderBy('id', 'DESC')->get();
        if ($remarks->isEmpty()) {
            return redirect()->back()->with('error', 'Record not found!');
        }

        $patient_record = PatientRecord::where('id', $id)->first();
        if (!$patient_record) {
            return redirect()->back()->with('error', 'Record not found!');
        }
        $patient_id = $patient_record->patient_id;
        $test_id = $patient_record->test_id;
        $test_format = TestFormat::where('test_id', $test_id)->get();
        if ($test_format->isEmpty()) {
            return redirect()->back()->with('error', 'Test Format not avaliable!');
        }
        return view('admin.patient.test_format', compact('test_format', 'patient_id', 'id', 'remarks'));
    }

    public function patient_result_store(Request $request)
    {
        // Step 1: Validate the input array
        $validatedData = $request->validate([
            'results' => 'required|array', // Ensure 'results' is an array and required
            'results.*' => 'nullable|string', // Each value can be null or a string
        ]);

        // Step 2: Check if any index in the array is empty
        $results = $validatedData['results'];
        foreach ($results as $index => $value) {
            if (is_null($value) || trim($value) === '') {
                return redirect()->back()->with('error', "All fields are required")->withInput();
            }
        }


        $patient_id = $request->patient_id;
        $patient_record_id = $request->patient_record_id;
        $keys_id = $request->keys;
        $results = $request->results;

        foreach ($keys_id as $index => $key_id) {
            $result = new Result;
            $result->test_format_id = $key_id;
            $result->result = $results[$index];
            $result->patient_id = $patient_id;
            $result->patient_record_id = $patient_record_id;
            $result->save();
        }

        $patient_record = PatientRecord::where('id', $patient_record_id)->first();
        if (!$patient_record) {
            return;
        }

        $signatures = LabManagement::select('name', 'type', 'qualification')
            ->where('status', 1)
            ->get();

        if ($signatures->isEmpty()) {
            return redirect()->back()->with('error', 'Signature not applied')->withInput();;
        }

        $patient_record->signature = $signatures->toArray();
        $patient_record->remark = $request->remark;
        $patient_record->is_result = 'yes';
        $patient_record->save();

        return redirect('/patient/list');
    }






    public function generatePDF($id, $header)
    {

        $data['header'] = $header;

        $patient_record = PatientRecord::where('id', $id)->first();

        if (!$patient_record) {
            return redirect('/patient/list')->with('error', 'Record not found');
        }
        $patient_id = $patient_record->patient_id;
        $patient_test_id = $patient_record->test_id;


        $data['test_result'] = TestFormat::leftJoin('result as r', function ($join) use ($patient_id, $id) {
            $join->on('test_format.id', '=', 'r.test_format_id')
                ->where('r.patient_id', $patient_id)
                ->where('r.patient_record_id', $id);
        })
            ->where('test_format.test_id',  $patient_test_id)
            ->select('test_format.id', 'test_format.key', 'test_format.unit', 'test_format.value', 'test_format.type', 'r.result')
            ->orderBy('test_format.order', 'asc')
            ->get();



        $data['patient_info'] = \DB::table('patient_records as pr')
            ->join('patients as p', 'pr.patient_id', '=', 'p.id')
            ->join('lab_tests as lt', 'pr.test_id', '=', 'lt.id')
            ->join('lab_test_categories as ltc', 'lt.category_id', '=', 'ltc.id')
            ->join('doctors as d', 'd.id', '=', 'pr.ref_by_id')
            ->select('p.name as patient_name', 'lt.name as lab_test_name', 'ltc.name as category_name', 'p.*', 'd.name as doctor_name', 'pr.remark', 'pr.signature')
            ->where('pr.patient_id', $patient_id)
            ->where('pr.test_id', $patient_test_id)
            ->where('pr.id', $id)
            ->first();

        // Signatures
        $signatures = json_decode($data['patient_info']->signature);

        // Get Laboratory Info
        $setting = Setting::first();
        $data['setting'] = $setting;

        $data['signatures'] = $signatures;

        if (empty($data['signatures'])) {
            return redirect()->back()->with('error', 'Signature is empty');
        }

        if ($data['test_result']->isEmpty()) {
            return redirect()->back()->with('error', 'Result not found');
        }

        if (empty($data['patient_info'])) {
            return redirect()->back()->with('error', 'Patient information not found');
        }

        $pdf = $this->generatePdfFormat($data);
        $pdfContent = $pdf->output();
        return response($pdfContent, 200)->header('Content-Type', 'application/pdf');
    }

    private function generatePdfFormat($data)
    {

        $pdfView = view('test.pdf_template', $data);
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($pdfView->render());
        $dompdf->render();

        return $dompdf;
    }

    public function updateStatus($id)
    {

        $reciviedPatientResult = PatientRecord::where('id', $id)->update(['status' => 'Received']);
        if (!$reciviedPatientResult) {
            return redirect('/patient/list')->with('error', 'Record not update');
        }
        return redirect('/patient/list')->with('success', 'Record Updated');
    }
}
