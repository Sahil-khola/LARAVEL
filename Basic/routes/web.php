<?php

use Illuminate\Support\Facades\Route;

Route::get("/" ,function ()  {
  return view("home");
});
Route::get("Name/{name}" ,function ($name)  {
    return view("Name",["name"=>$name]);
  
});

Route::get("/About", function () {
    return view("About");
});

// Route::view("About","home");