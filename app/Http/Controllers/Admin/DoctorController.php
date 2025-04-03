<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorRecord;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::orderBy('id','desc')->get();

        return view('admin.doctor.list',compact('doctors'));
    }

    public function create(){

        return view('admin.doctor.create');
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required',
            'contact_no' => 'required',
            'gender' => 'required'
        ]);

        // Doctor Info
        $doctor = New Doctor;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->address = $request->address;
        $doctor->gender = $request->gender;
        $doctor->age = $request->age;
        $doctor->contact_no = $request->contact_no;
        $doctor->qualification = $request->qualification;
        $doctor->save();

        $doc_id = $doctor->id;

       
        // Doctor Record
        $doctor_record = new DoctorRecord;
        $doctor_record->doc_id = $doc_id;
        $doctor_record->type = $request->type;
        $doctor_record->lab_doc_share= $request->lab_share;
        $doctor_record->opd_rate = $request->opd_rate;
        $doctor_record->opd_hosp_share = $request->hospital_share;
        $doctor_record->opd_doc_share = $request->consultant_share;
        $doctor_record->status = 1;
        $doctor_record->save();


        return redirect('/doctor/list')->with('success','Add Record Successfuly');
    }

    public function edit($id){
        $doctor = Doctor::find($id);

        $results = DoctorRecord::where('doc_id',$id)->get();

        // dd($results);

        if(empty($doctor)){
            return redirect()->back()->with('error','Doctor not found.');
        }
        return view('admin.doctor.edit',compact('doctor', 'results'));
    }

    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'contact_no' => 'required',
            'gender' => 'required'
        ]);
        
        $id = $request->id;

        Doctor::where('id',$id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact_no' => $request->contact_no,
            'age' => $request->age,
            'gender' => $request->gender
        ]);

        return redirect('/doctor/list')->with('success','Update Record Successfuly');
    }

    public function delete($id)
    {
        $test = Doctor::where('id',$id)->delete();
        // dd($test);
        return redirect('/doctor/list')->with('success','Remove Successfuly.');
    }
}


