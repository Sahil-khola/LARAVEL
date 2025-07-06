<?php

use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/home","home");