<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get("home",function(){
//     return view("home");
// });


// Route::view("/login","user.login");


// Route::get("/Name",[UserController::class,"getName"]);
// Route::get("/Know/{name}",[UserController::class,"knowName"]);
// Route::get("/Open",[UserController::class,"OpenView"]);
// Route::get("/user-home",[AdminController::class,"Welcome"]);
// Route::get("user-login/{name}",[AdminController::class,"Userlogin"]);

Route::get("/home",[AdminController::class,"Blade"]);