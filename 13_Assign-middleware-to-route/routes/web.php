<?php

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::view("/home","home")->middleware("check1");

// Route::middleware("check1")->group(function(){
// Route::view("/about","about");
// Route::view("/contact","about");
// Route::view("/help","about");
// });

// Route::view("/home","home")->middleware(AgeCheck::class,CountryCheck::class);
// Route::view("/about","about");

