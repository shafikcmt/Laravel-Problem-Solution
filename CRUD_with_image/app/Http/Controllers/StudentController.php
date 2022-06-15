<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent(){
        return view('add-student');
    }
    public function createStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $photo = $request->file('image');
        $photoName = time().'.'.$photo->extension();
        $photo->move(public_path('images'),$photoName);
      
        $students = new Student();
        $students->name = $name;
        $students->email = $email;
        $students->phone = $phone;
        $students->photo = $photoName;
        $students->save();
        return back()->with('add-student','Students Add Successfully !');

    }
    public function allStudent(){
        $students = Student::all();
        return view('all-student',compact('students'));
    }
    public function editStudent($id){
        $students = Student::find($id);
        return view('edit-student',compact('students'));
    }
    public function updateStudent(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'image' =>'required',
            
        ]);
        $students = Student::find($request->id);
        unlink(public_path('images').'/'.$students->photo);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $photo = $request->file('image');
        $photoName = time().'.'.$photo->extension();
        $photo->move(public_path('images'),$photoName);
      
        
        $students->name = $name;
        $students->email = $email;
        $students->phone = $phone;
        $students->photo = $photoName;
        $students->save();
        return back()->with('update-student','Students Update Successfully !');
    }
    public function deleteStudent($id){
        $students = Student::find($id);
        unlink(public_path('images').'/'.$students->photo);
        $students->delete();
        return back()->with('student_deleted','Student rocord Deleted Successfully !');

    }
}
