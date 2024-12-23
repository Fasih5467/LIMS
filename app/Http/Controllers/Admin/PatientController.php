<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\LabTest;
use App\Models\PatientRecord;
use App\Models\PatientPayRecord;
use App\Models\TestFormat;
use App\Models\Result;
use App\Models\LabTestCategory;

use Illuminate\Http\Request;
use PDF;

use Dompdf\Dompdf;
use Dompdf\Options;

use function Laravel\Prompts\select;

class PatientController extends Controller
{
    public function index()
    {
        // $patients = Patient::Join('lab_tests as t','patients.test_id','=','t.id')
        // ->select('t.name as test_name','t.id as test_id','patients.*')->get();
        $patients = Patient::get();
        return view('admin.patient.list', compact('patients'));
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
                return redirect('/patient/create')->with([
                    'not found' => 'Patient Not Found',
                    'contact' => $contact,
                ]);
            }
            return redirect('/patient/create')->with([
                'patients' => $patients,
                'contact' => $contact,
            ]);
        } else {

            //    dd($request->refBy);
            $request->validate([
                // 'name' => 'required',
                'age' => 'required|max:3',
                'gender' => 'required',
            ]);

            $patientId = $request->id;

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


            // dd($newPatientId);
            if ($request->selectedTests != null) {

                // Patient Pay Records
                $patient_pay = new PatientPayRecord;
                $patient_pay->patient_id = $patientId;
                $patient_pay->total_amount = $request->totAmount;
                $patient_pay->net_amount = $request->netAmount;
                $patient_pay->dis_amount = $request->disAmount;
                $patient_pay->dis_type = $request->dis_type;
                $patient_pay->recevied_amount = $request->recAmount;
                $patient_pay->balance_amount = $request->balAmount;
                $patient_pay->save();

                foreach ($request->selectedTests as $selectedTest) {
                    $patient_record = new PatientRecord;
                    $patient_record->patient_id = $patientId;
                    $patient_record->test_id = $selectedTest;
                    $patient_record->ref_by_id = $request->refBy;
                    $patient_record->save();
                }
                $limit = count($request->selectedTests);
                // $selectedValues = [];
                // foreach ($request->selectedTests as $id) {
                //     $result = LabTest::select('id', 'name', 'price')->where('id', $id)->first();
                //     array_push($selectedValues, $result);
                // };
                $selectedValues = PatientRecord::join('lab_tests as lt', 'patient_records.test_id', '=', 'lt.id')
                    ->select('lt.*', 'patient_records.*')
                    ->where('patient_records.patient_id', $patientId)
                    ->orderBy('patient_records.id', 'desc')
                    ->limit($limit)
                    ->get();
                // dd($record);
                $patient_info = Patient::join('patient_pay_records as ppr','patients.id','=','ppr.patient_id')
                ->select('ppr.id as ppr_id','ppr.*','patients.*')->where('ppr.patient_id',$patientId)->orderByDesc('ppr.id')->first();
                dd($patient_info);
                $array = $request;
                return view('admin.patient.slip', compact('array', 'selectedValues'));
            }

            return redirect('/patient/list');
        }

        // dd($request);
        // return view('admin.patient.list');
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

    public function show_patient_test($patient_id)
    {
        // dd('ss');

        $patient_tests = PatientRecord::join('lab_tests', 'lab_tests.id', 'patient_records.test_id')
            ->select('lab_tests.name as test_name', 'patient_records.*')
            ->where('patient_records.patient_id', $patient_id)
            ->get();
        return view('admin.patient.show_patient_test', compact('patient_tests', 'patient_id'));
    }

    public function get_test_format($id)
    {
        // dd($patient_id);
        $patient_record = PatientRecord::where('id', $id)->first();
        if (!$patient_record) {
            return redirect()->back();
        }
        $patient_id = $patient_record->patient_id;
        $test_id = $patient_record->test_id;
        $test_format = TestFormat::where('test_id', $test_id)->get();
        if (empty($test_format)) {
            return redirect()->back();
        }
        return view('admin.patient.test_format', compact('test_format', 'patient_id', 'id'));
    }

    public function patient_result_store(Request $request)
    {
        // dd($request->all());
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

        $patient_record->is_result = 'yes';
        $patient_record->save();

        return redirect('/patient/list');
    }






    public function generatePDF($id)
    {

        // dd($id);

        $patient_record = PatientRecord::where('id', $id)->first();

        if (!$patient_record) {
            return redirect('/patient/list');
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
        ->orderBy('test_format.id', 'asc')
        ->get();


           
        $data['patient_info'] = \DB::table('patient_records as pr')
        ->join('patients as p', 'pr.patient_id', '=', 'p.id')
        ->join('lab_tests as lt', 'pr.test_id', '=', 'lt.id')
        ->join('lab_test_categories as ltc', 'lt.category_id', '=', 'ltc.id')
        ->join('doctors as d', 'd.id', '=', 'pr.ref_by_id')
        ->select('p.name as patient_name', 'lt.name as lab_test_name', 'ltc.name as category_name','p.*','d.name as doctor_name')
        ->where('pr.patient_id', $patient_id)
        ->where('pr.test_id', $patient_test_id)
        ->where('pr.id', $id)
        ->first();
            // dd($data['patient_info']);

        if (empty($data['test_result'])) {
            return redirect()->back();
        }

        if(!$data['patient_info']){
            return redirect()->back();
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
}
