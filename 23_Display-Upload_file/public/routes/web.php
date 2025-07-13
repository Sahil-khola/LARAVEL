<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("form","form");
// Route::view("display","display")
Route::post("form",[UserController::class,"formHandel"]);
