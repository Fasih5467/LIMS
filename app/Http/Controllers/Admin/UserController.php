<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $remarks = User::orderBy('id', 'DESC')->get();
        return view('admin.remark.list', compact('remarks'));
    }

    public function create()
    {

        return view('admin.users.signup');
    }

    public function store(Request $request)
    {

        // dd($request->remark);
        $request->validate([
            'remark' => 'required',
        ]);

        $remark = new User;
        $remark->name = $request->remark;
        $remark->save();


        return redirect('remark/list')->with('success', 'Add Record Successfuly');
    }

    public function edit($id)
    {

        if (!$id) {
            return redirect()->back();
        }
        $remark =User::where('id', $id)->first();
        if(empty($remark)){
            return redirect('remark/list')->with('error','Record Not Found');
        }
        return view('admin.remark.edit', compact('remark'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'remark' => 'required',
        ]);

       User::where('id', $request->id)
            ->update([
                'name' => $request->remark
            ]);

        return redirect('/remark/list')->with('success', 'Update Record Successfuly');
    }

    public function delete($id)
    {
        if (!$id) {
            return redirect()->back();
        }

       User::where('id',$id)->delete();

        return redirect('/remark/list')->with('success', 'Remove Successfuly.');
    }
}
