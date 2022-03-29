<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $students = '';
        $students = DB::table('student_table')->get();
        
        return view('student',['students'=>$students]);
    }
}
