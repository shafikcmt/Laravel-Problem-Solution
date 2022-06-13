<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function allUser(){
        $users = DB::table('users')->orderBy('id','DESC')->paginate(20);
       
        return view('users',compact('users'));
    }
    public function testUser(){
        $users = DB::table('users')->where('name','Yesenia Brakus')->first();
        // $users = DB::table('users')->where('name','Yesenia Brakus')->value('email');
        // $users = DB::table('users')->find(4);
        return view('test',compact('users'));
    }
    public function editUser($id){
       $users = DB::table('users')->find($id);
       return view('users-edit',compact('users'));
    }
    public function addUser(){
        return view('create-user');

    }
    public function createUser(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('create-user','User Inserted !');
    }
    public function updateUser(Request $request){
        DB::table('users')
        ->where('id',$request->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('update-user','User Updated !');
    }
    public function deleteUser($id){
        DB::table('users')->where('id',$id)->delete();
        return back()->with('delete-user','User Deleted');
    }
}
