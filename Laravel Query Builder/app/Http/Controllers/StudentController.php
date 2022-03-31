<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $students = '';
        $students1 = '';
        $students2 = '';
        $students = DB::table('student_table')->get();
        $students1 = DB::table('student_table')->first();
        $students2 = DB::table('student_table')->where('name','Md Shafiqul Islam')->first();
//        dd($students1);
        return view('student',['students'=>$students,'students1'=>$students1,'students2'=>$students2]);
    }
}
