<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
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
        // 'roll'=>'required|roll|unique:users',
        'roll'=>'required',
        // 'phone'=>'required|phone|unique:users',
        'phone'=>'required',
        'password'=>'required|min:6|max:12'
     ]);
     $user = new User();
     $user->roll = $request->roll;
     $user->phone = $request->phone;
     $user->password = Hash::make($request->password);
     $result = $user->save();
     if($result){
         return back()->with('success','You have Registered Successfully');
     }else{
        return back()->with('fail','something wrong');
     }
    }
    public function loginUser(Request $request){
        $request->validate([
            'roll'=>'required',
            'password'=>'required|min:6|max:12'
         ]);
         $user = User::where('roll','=',$request->roll)->first();
         if($user){
           if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
           }else{
            return back()->with('fail','Password is not match');
           }
         }
         else{
            return back()->with('fail','This roll number is not Registered ');
         }
    }
    public function dashboard(){
        return view('dashboard');
    }
} 
