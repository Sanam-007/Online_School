<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Student;
use Session;

class AdminController extends Controller
{
   //*ADMIN DASHBOARD*
   public function admindashboard(){
        
    $id = Session::get('id');
    $admin= Admin::find($id);
   //echo $admin->name;
    return view ('admin.admin',compact('admin'));
} 
   




}
