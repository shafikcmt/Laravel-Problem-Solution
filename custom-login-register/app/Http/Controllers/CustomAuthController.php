<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
     $request->validate([
        'roll'=>'required|roll|unique:users',
        'phone'=>'required|phone|unique:users',
        'password'=>'required|min:5|max:12'
     ]);
     $user = new User();
     $user->roll = $request->roll;
     $user->phone = $request->phone;
     $user->password = $request->password;
     $result = $user->save();
    }
} 
