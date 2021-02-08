<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check()){
            // dd(Auth::user());
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

    public function showLoginForm(){
        return view('admin.formLogin');
    }
    public function login(Request $request){
        // var_dump($request->all());
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(["E-mail inválido!"]);
        }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        }
        
        return redirect()->back()->withInput()->withErrors(["Dados informados não conferem!"]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin');
    }
}
