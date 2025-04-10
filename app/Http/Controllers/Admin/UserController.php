<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {

        return view('admin.users.signup');
    }

    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = $request->user_type;
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect('/');
    }

    public function edit($id)
    {

        if (!$id) {
            return redirect()->back();
        }
        $remark = User::where('id', $id)->first();
        if (empty($remark)) {
            return redirect('remark/list')->with('error', 'Record Not Found');
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

        User::where('id', $id)->delete();

        return redirect('/user/list')->with('success', 'Remove Successfuly.');
    }

    public function activate($id)
    {
        if (!$id || $id == null) {
            return redirect()->back();
        }
        User::where('id', $id)
            ->update([
                'status' => 1
            ]);

        return redirect('/user/list')->with('success', 'Activate User');
    }

    public function deactivate($id)
    {
        if (!$id || $id == null) {
            return redirect()->back();
        }
        User::where('id', $id)
            ->update([
                'status' => 0
            ]);

        return redirect('/user/list')->with('success', 'Deactivate User');
    }
}
