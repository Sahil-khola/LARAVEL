<?php

use App\Http\Controllers\ModelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Usercontroller as ControllersUsercontroller;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckCountry;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::view("/home","home")->middleware(CheckAge::class);
// Route::view("/about","about")->middleware(CheckAge::class,CheckCountry::class);

// Route::middleware("check1")->group(function(){
// Route::view("/home","home");
// Route::view("/about","about");
// });

// Route::view("/home","home");
// Route::post("/user",[Usercontroller::class,"handelform"]);

// Route::controller(controlername::class)->group(function(){

// });


// Route::view("/home/about/data","home")->name("fu");

// Route::prefix("home")->group(function(){

// })

// Route::view("/about/{name}","about");
// Route::get("/about/{name}",function($name){
//     return view("about",["name"=>"$name"]);
// });

// Route::get("/about",[Usercontroller::class,"handel"]);

Route::get("/model",[ModelController::class,"handelDb"]);