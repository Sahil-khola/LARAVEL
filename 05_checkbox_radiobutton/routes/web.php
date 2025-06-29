<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/user","user-form");
Route::post("Adduser",[UserController::class,"handelForm"]);