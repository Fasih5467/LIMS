<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->only('email', 'password');
        $credentials['status'] = '1';

        $user = User::where('status', '0')
            ->get();



        if (count($user) == 1) {
            return redirect()->back()->withErrors(['error' => 'Please Contact Support...!']);
        }
        if (Auth::attempt($credentials)) {
            $user = Auth::User();
            $request->session()->regenerate();
            if ($user->user_type == 1) {
                return redirect('/patient/');
            } else if ($user->user_type == 2) {
                return route('lead.list');
            }
        } else {
        }
    }
}
