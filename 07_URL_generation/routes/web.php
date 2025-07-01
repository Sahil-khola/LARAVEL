<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("home", "home");
Route::view("about", "about");
Route::view("contact", "contact");
Route::view("user", "contact");