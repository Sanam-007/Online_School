<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Session;

class TeacherController extends Controller
{
    public function teacherdashboard(){
        
        $id = Session::get('id');
        $stu= Teacher::find($id);
       //echo $admin->name;
        return view ('teacher.teacher',compact('teacher'));
   } 
}
