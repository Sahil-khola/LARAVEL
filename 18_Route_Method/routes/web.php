<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view("/home","home");
Route::get("/home",[Usercontroller::class,"getName"]);
Route::post("/home",[Usercontroller::class,"post"]);
Route::put("/home",[Usercontroller::class,"put"]);
Route::delete("/home",[Usercontroller::class,"delete"]);
Route::view("/user","home");