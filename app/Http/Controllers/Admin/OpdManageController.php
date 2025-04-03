<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\OpdPatientRecord;
use App\Models\Patient;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OpdManageController extends Controller
{
    public function create()
    {
        $doctors = Doctor::join('doctor_records as doc_r', 'doctors.id', '=', 'doc_r.doc_id')
            ->select('doctors.id', 'doctors.name', 'doc_r.opd_rate')
            ->where('doc_r.type', 1)
            ->where('doc_r.status', 1)
            ->get();

        return view('admin.opd_manage.create', compact('doctors'));
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
                return redirect('/opd/')->with([
                    'not found' => 'Patient Not Found',
                    'contact' => $contact,
                ]);
            }
            return redirect('/opd/')->with([
                'patients' => $patients,
                'contact' => $contact,
            ]);
        } else {

            $patientId = $request->id;

            // New Patient Save In DB  
            if ($request->id == null) {

                $patient = new Patient;
                $patient->name = $request->name;
                $patient->age = $request->age;
                $patient->age_type = $request->age_type;
                $patient->gender = $request->gender;
                $patient->contact = $request->contact;
                $patient->save();

                // Get the ID of the newly created patient
                $patientId = $patient->id;
            } else {

                // Edit Patient
                Patient::where('id', $request->id)
                    ->update([
                        'name' => $request->name,
                        'age' => $request->age,
                        'age_type' => $request->age_type,
                        'gender' => $request->gender,
                    ]);
            }

            // Record Save
            $opd_patient = new OpdPatientRecord;
            $opd_patient->user_id = Auth::user()->id;
            $opd_patient->patient_id = $patientId;
            $opd_patient->doc_id = $request->selectDoctor;
            $opd_patient->doc_fee = $request->docFee;
            $opd_patient->dis_amount = $request->disAmount;
            $opd_patient->rec_amount = $request->recAmount;
            $opd_patient->save();

            $id = $opd_patient->id;

            return redirect('/opd/slip/' . $id);
        }
    }

    public function slip($id)
    {
        $opdRecord = DB::table('opd_patient_records as opr')
            ->join('patients as p', 'opr.patient_id', '=', 'p.id')
            ->join('doctors as d', 'opr.doc_id', '=', 'd.id')
            ->where('opr.id', $id)
            ->select([
                'opr.id',
                'opr.created_at',
                'opr.dis_amount',
                'opr.doc_fee',
                'opr.doc_id',
                'opr.rec_amount',
                'p.name as patient_name',
                'p.age',
                'p.age_type',
                'p.contact',
                'd.name as doctor_name'
            ])
            ->first();

        $token = OpdPatientRecord::where('doc_id', $opdRecord->doc_id)
            ->whereDate('created_at', now())
            ->count();

        $setting = Setting::where('type', 2)->first();

        $header = '';

        return view('slip.opd_slip', compact('opdRecord', 'setting', 'header' , 'token'));
    }

    public function token_no($id)
    {

        // $users = User::all(); // Sabhi users ko fetch karna
        $count = OpdPatientRecord::where('doc_id', $id)
            ->whereDate('created_at', now())
            ->count();

        $count += 1;

        return response()->json($count); // JSON response return karna
    }
}
