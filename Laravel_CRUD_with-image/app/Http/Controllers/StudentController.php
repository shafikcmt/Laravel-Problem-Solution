<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent(){
        return view('add-student');
    }
    public function storeStudent(Request $request){
        $name = $request->name;       
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student = new Student();
        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('add-student','Student record Added Successfully !');
    }
    public function Student(){
        $students = Student::all();
        return view('all-student',compact('students'));
    }
    public function editStudent($id){
        $student  = Student::find($id);
        return view('edit-student',compact('student'));
    }

    public function updateStudent(Request $request){
        $name = $request->name;       
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $student =  Student::find($request->id);
        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('update-student','Student Updated successfully');

    }
    public function deleteStudent($id){
        $student = Student::find($id);
        unlink(public_path('images').'/'.$student->profileimage);
        $student->delete();
        return back()->with('student_deleted','Student rocord Deleted Successfully !');
    }
}
