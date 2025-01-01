<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LabManagement;
use Illuminate\Http\Request;

class LabManagementController extends Controller
{
    public function index(){
        $labManagements = LabManagement::orderBy('id','DESC')->get();

        return view('admin.management.list',compact('labManagements'));
    }

    public function create(){

        return view('admin.management.create');
    }

    public function store(Request $request){

        // $request->validate([
        //     'name'=>'required',
        //     'contact' => 'required',
        //     'gender' => 'required'
        // ]);

        $labManagement = New LabManagement;
        $labManagement->name = $request->name;
        $labManagement->email = $request->email;
        $labManagement->qualification = $request->qualification;
        $labManagement->gender = $request->gender;
        $labManagement->age = $request->age;
        $labManagement->contact = $request->contact;
        $labManagement->type = $request->type;
        $labManagement->save();

        return redirect('/lab/management/list')->with('success','Add Record Successfuly');
    }

    public function edit($id){
        $labManagement = LabManagement::find($id);
        return view('admin.management.edit',compact('labManagement'));
    }

    public function update(Request $request){

        // dd($request);
        // $request->validate([
        //     'name'=>'required',
        //     'contact_no' => 'required',
        //     'gender' => 'required'
        // ]);
        
        $id = $request->id;

        LabManagement::where('id',$id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'qualification' => $request->qualification,
            'contact' => $request->contact,
            'age' => $request->age,
            'gender' => $request->gender,
            'type' => $request->type,

        ]);

        return redirect('/lab/management/list')->with('success','Update Record Successfuly');
    }

    public function delete($id)
    {
        $test = LabManagement::where('id',$id)->delete();
        return redirect('/lab/management/list')->with('success','Remove Successfuly.');
    }
}