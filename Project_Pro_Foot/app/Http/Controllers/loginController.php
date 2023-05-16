<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function get_route(){
        return view('login');
    }
    function logout(){
        Auth::logout();
        return to_route('route_login');
    }

    function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           // $request->session()->regenerate();
 
            return redirect()->intended('/home/page');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

    

