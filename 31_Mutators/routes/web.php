<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("show",[UserController::class,"show"]);
Route::get("showAll",[UserController::class,"showAll"]);