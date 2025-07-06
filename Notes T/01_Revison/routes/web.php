<?php

use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckCountry;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::view("/home","home")->middleware(CheckAge::class);
// Route::view("/about","about")->middleware(CheckAge::class,CheckCountry::class);

Route::middleware("check1")->group(function(){
Route::view("/home","home");
Route::view("/about","about");
});