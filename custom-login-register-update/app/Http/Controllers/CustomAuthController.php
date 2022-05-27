<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Hash;
use Session;
class CustomAuthController extends Controller
{
   
    public function index(){
        return view('index');
    }
   public function StudentPersonal(){
    return view('/student_personal');
   }
   public function TechnicalWork(){
    return view('/technical_work');
   }
   public function AssessmentWork(){
    return view('/assessment_work');
    }
    public function AdminLogin(){
        return view('auth.admin.admin_login');
    }
    public function addAdmin(){
        return view('auth.admin.addadmin');
    }
    public function StudentDetails(){
        $students = '';
        $students = DB::table('users')->get();
        return view('student_details',['students'=>$students]);
    }
    public function AdminDashboard(){
        $students = '';
        $students = DB::table('users')->get();
        // dd($students);
     return view('admindashboard',['students'=>$students]);
    }
    public function ViewStudents(){
        return view('/students_view');
    }
  
    public function login(){
        return view("auth.user.login");
    }
    public function registration(){
        return view("auth.user.registration");
    }
    public function registerUser(Request $request)
    {
     $request->validate([
        'roll'      =>'required|numeric|digits_between:6,15|unique:users,roll',
        'phone'     =>'required|numeric|digits:10|unique:users,phone',
        'password'  =>'required|min:6|max:12'
     ]);
     $user = new User();
     $user->roll = $request->roll;
     $user->phone = $request->phone;
     $user->password = Hash::make($request->password);
     $result = $user->save();
     if($result){
         return back()->with('success','You have Registered Successfully')->redirect('auth.user.login');
        
     }
     else{
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
 public function AdminAdd(Request $request)
    {
     $request->validate([
        'username'      =>'required|unique:admins,username',
        'password'      =>'required|min:6|max:12'
     ]);
     $adminuser = new Admin();
     $adminuser->username = $request->username;
     $adminuser->password = Hash::make($request->password);
     $adminresult = $adminuser->save();
     if($adminresult){
         return back()->with('success','Admin Added Successfully');
     }
     else{
        return back()->with('fail','something wrong');
     }
     
    }
    public function loginAdmin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:6|max:12'
         ]);
         $useradmin = Admin::where('username','=',$request->username)->first();
        //  $useradmin = $request->only('username', 'password');
         if($useradmin){
            if(Hash::check($request->password,$useradmin->password)){
                $request->session()->put('ADMloginId',$useradmin->id);
                return redirect('admin-dashboard');
           }else{
            return back()->with('fail','Password is not match'); 
           }
         }
        
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId'));
           Session::pull('loginId');
           return redirect('login');
        }
        public function adminLogout(){
            if(Session::has('ADMloginId'));
               Session::pull('ADMloginId');
               return redirect('/login-admin');
            }
    }

