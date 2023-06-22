<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('landing');
});
// Route::get('/login', function () {
//     return view('loginn');
// });

// Route::get('/',[AuthController::class,'login']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/signup',[AuthController::class,'Signup']);
Route::post('/loginstore',[AuthController::class,'Loginstore']);


Route::middleware(['IsLoggedIn','IsStudent'])->group(function(){
    Route::get('/student',[StudentController::class,'studentdashboard']);
});

Route::middleware(['IsLoggedIn','IsTeacher'])->group(function(){
    Route::get('/teacher',[TeacherController::class,'teacherdashboard']);
});


Route::middleware(['IsLoggedIn','IsAdmin'])->group(function(){
    Route::get('/admin',[AdminController::class,'admindashboard']);

});
