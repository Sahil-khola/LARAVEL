<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/",function () {
    return view("welcome");
});

// Route::get("about/{name}",[UserController::class,"getName"]);

// Route::get("/{name}",function($name){
//     return view("home",["name"=>"$name"]);
// });


Route::view("home/profile/user","home")->name("hpu");
Route::view("about/user/{name}","home")->name("user");
Route::get("show",[UserController::class,"show"]);
// Route::get("user",[UserController::class,"user"]);