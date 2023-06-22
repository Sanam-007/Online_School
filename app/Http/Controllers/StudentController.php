<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;

class StudentController extends Controller
{
    //*student DASHBOARD*
    public function studentdashboard(){
        
        $id = Session::get('id');
        $stu= Student::find($id);
       //echo $admin->name;
        return view ('student.student',compact('student'));
   } 
}
