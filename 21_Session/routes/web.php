<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("logIn",[UserController::class,"logIn"]);
Route::view("/form","form");
Route::view("profile","profile");

Route::get("logOut",[UserController::class,"logOut"]);