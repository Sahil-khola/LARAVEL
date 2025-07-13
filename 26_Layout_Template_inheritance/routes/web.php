<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');

});

Route::view('home', 'home');

Route::view('login', 'login');