<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/",function(){
  return view("Welcome");
});


Route::get("Name/{name}" ,function ($name)  {
    return view("Name",["name"=>$name]);
  
});

Route::get("/About", function () {
    return view("About");
});


Route::get("/home", function(){
  return view("home");
}
);

// route::redirect("/About","/Home");**
// Route::view("home","about");

Route::get("/User",[UserController::class,"getName"]);
Route::get("/Name/{name}",[UserController::class,"UserName"]);


Route::get("/Admin",[UserController::class,"AdminLogin"]);

