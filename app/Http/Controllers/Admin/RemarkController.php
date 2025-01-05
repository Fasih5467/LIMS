<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Remark;
use Illuminate\Http\Request;

class RemarkController extends Controller
{
    public function index()
    {
        $remarks = Remark::orderBy('id', 'DESC')->get();
        return view('admin.remark.list', compact('remarks'));
    }

    public function create()
    {

        return view('admin.remark.create');
    }

    public function store(Request $request)
    {

        // dd($request->remark);
        $request->validate([
            'remark' => 'required',
        ]);

        $remark = new Remark;
        $remark->name = $request->remark;
        $remark->save();


        return redirect('remark/list')->with('success', 'Add Record Successfuly');
    }

    public function edit($id)
    {

        if (!$id) {
            return redirect()->back();
        }
        $remark = Remark::where('id', $id)->first();
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

        Remark::where('id', $request->id)
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

        Remark::where('id',$id)->delete();

        return redirect('/remark/list')->with('success', 'Remove Successfuly.');
    }
}
