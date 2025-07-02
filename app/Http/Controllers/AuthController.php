<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ShowLoginForm(){
                return view('Auth.login');

    }
    public function ShowSignupForm(){
        return view('Auth.signup');
    }
    public function Login(){
        
    }
    public function signup(Request $request){
        print_r($request->all());
    }
    public function logout(){
        
    }
}
