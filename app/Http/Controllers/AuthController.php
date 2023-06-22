<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view('login'); 
    }
    public function Signup(){
        return view('signup'); 
    }

    public function Loginstore(Request $request){
         $email=$request->email;
        echo "done";
         $password=$request->password;
       
          $admin=Admin::where('email','=',$email)
              ->where('password','=',$password)
              ->first();
          if(!$admin){
             $student=Teacher::where('email','=',$email)
             ->where('password','=',$password)
             ->first();
             if(!$student){
                 return redirect()->back()->with('err_msg','Invalid msg');
                 $teacher=Teacher::where('email','=',$email)
                 ->where('password','=',$password)
                 ->first();
                 if(!$teacher){
                     return redirect()->back()->with('err_msg','Invalid msg');
                  }  
                  else{
                     $request->session()->put('email',$teacher->email);
                     $request->session()->put('role','teacher');
                     $request->session()->put('id',$teacher->id);
                      return redirect()->to('teacher') ;
                  }
              }  
              else{
                 $request->session()->put('email',$student->email);
                 $request->session()->put('role','student');
                 $request->session()->put('id',$student->id);
                  return redirect()->to('student') ;
              }
             

          }  
          
          else{
             $request->session()->put('email',$admin->email);
             $request->session()->put('role','admin');
             $request->session()->put('id',$admin->id);
              return redirect()->to('admin') ;
                                               
          } 
    }
        
    
    
    
    public function logout(){
            Session::forget('email');
            Session::forget('role');
            return redirect('login');
    }
    

}
