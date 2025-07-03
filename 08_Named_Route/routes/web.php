<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/home/{name}",function($name){
//     return view("home",["name"=>"$name"]);
// });

// // Route::view("about/{name}","about");
// Route::get("about/{name}",[UserController::class,"about"]);

Route::view("home/profile/user/{name}","contact")->name("direct");
Route::get("show",[UserController::class,"show"]);

Route::view("user/sahil/khola/{name}","home")->name("user");
Route::get("user/sahil/khola",[UserController::class,"user"]);

