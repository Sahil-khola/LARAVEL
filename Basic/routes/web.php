<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/Home" ,function ()  {
  return view("home");
});

Route::get("Name/{name}" ,function ($name)  {
    return view("Name",["name"=>$name]);
  
});

Route::get("/About", function () {
    return view("About");
});

route::redirect("/About","/Home");

// Route::view("home","about");

