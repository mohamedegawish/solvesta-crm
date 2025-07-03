<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ShowLoginForm(){
                return view('Auth.login');

    }
    public function ShowSignupForm(){
        return view('Auth.signup');
    }
    public function Login(LoginRequest $request){
        $credentails=$request->only('email','password');
        if(auth()->attempt($credentails)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email'=>'Write Correct Email to Login . '
        ])->withInput();
    }
    public function signup(SignupRequest $request){
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->company = $request->input('company');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = $request->input('password');
        $user->save();

        auth()->login($user);
        return redirect('/')->with('success', 'User registered successfully!');
    }
    public function logout(){
        Auth()->logout();
        return redirect('/');
    }
}
