<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
   function get_route(){
        return view ('signup');
   }

   function store(Request $request){

        $request->validate([
            'firstname'=> 'required|string|max:250',
            'lastname'=> 'required|string|max:250',
            'email'=> 'required|string|max:250|unique:users',
            'password'=> 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);
        $user->save();
        
        return redirect()->route('route_login');
   }
}
