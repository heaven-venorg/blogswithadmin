<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard.home');
        } else {
            return view('auth.login');
        }
    }

    public function actionLogin(Request $request)
    {

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard.home');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect()->route('action.login');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}