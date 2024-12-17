<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\LabTest;
use App\Models\LabTestCategory;
use Illuminate\Http\Request;
use PhpParser\Node\Param;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::Join('lab_tests as t','patients.test_id','=','t.id')
        ->select('t.name as test_name','t.id as test_id','patients.*')->get();

        return view('admin.patient.list',compact('patients'));
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
                'name' => 'required',
                'age' => 'required|max:3',
                'gender' => 'required',
                'refBy' => 'required',
                'selectedTests' => 'required|array',
            ]);

            foreach($request->selectedTests as $selectedValue){
                $patient = new Patient;
                $patient->name = $request->name;
                $patient->age = $request->age;
                $patient->gender = $request->gender;
                $patient->contact = $request->contact;
                $patient->ref_by_id = $request->refBy;
                $patient->test_id = $selectedValue;
                $patient->save();

            }
            $selectedValues = [];
            foreach($request->selectedTests as $id){
                   $result = LabTest::select('id','name','price')->where('id',$id)->first();
                   array_push($selectedValues,$result);
            };
            // dd($selectedValues);
            // $array = $request;
            // return view('admin.patient.slip',compact('array','selectedValues'));
        }

        // dd($request);
        // return view('admin.patient.list');
    }

    public function edit()
    {
        $patients = Patient::get();
        return view('admin.patient.edit');
    }

    public function update(Request $request)
    {
        $request->validate([]);
        // return view('admin.patient.list');
    }

    public function delete($id)
    {
        Patient::whereget('id', $id)->delete();
        return view('admin.patient.list');
    }
}
