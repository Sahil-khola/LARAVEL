<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("users",[UserController::class,"dbName"]);
Route::view("/home","home");
Route::post("form",[UserController::class,"getForm"]);