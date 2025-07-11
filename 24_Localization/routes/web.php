<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix("home")->group(function(){
//     Route::view("about","about");
// });

Route::get("about/{lang}",function($lang){
    App::setLocale($lang);
    return view("about");
});
// Route::view("home","home");