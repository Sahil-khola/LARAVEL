<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/home","form");
Route::post("/home",[UserController::class,"handelForm"]);
