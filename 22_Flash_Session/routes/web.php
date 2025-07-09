<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/login","logIn");
Route::post("login",[LoginController::class,"logIn"]);

Route::view("profile","profile");