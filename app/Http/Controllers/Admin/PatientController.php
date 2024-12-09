<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\LabTest;
use App\Models\LabTestCategory;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::get();
        return view('admin.patient.list');
    }

    public function create()
    {
        $labTests = LabTest::Join('lab_test_categories as c', 'lab_tests.category_id', '=', 'c.id')
            ->select('c.name as category_name', 'c.id as category_id', 'lab_tests.*')
            ->get();

        $categories = LabTestCategory::get();
        // $patients = Patient::get();
        return view('admin.patient.create', compact('labTests', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact'=>'required|min:11|max:13',
            // 'testValue' => 'required|array',
        ]);
        // dd($request);
        $contact = $request->contact;
        if ($contact && $request->name && $request->age && $request->gender) {
           dd($request);
        } else {

            $patients = Patient::where('contact', $request->contact)->get();
            if ($patients->isEmpty()) {
                return redirect('/patient/create')->with([
                    'error'=>'Patient Not Found',
                    'contact'=>$contact,
                ]);
            } 
            

            return redirect('/patient/create')->with([
                'patients'=> $patients,
                'contact'=>$contact,
            ]);
        }
        // $request->validate([

        // ]);
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
