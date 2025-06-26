<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/Name",[UserController::class,"getName"]);
Route::get("/Know/{name}",[UserController::class,"knowName"]);
Route::get("/Open",[UserController::class,"OpenView"]);