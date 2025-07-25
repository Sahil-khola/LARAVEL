<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("list",[UserController::class,"list"]);
Route::get("save",[UserController::class,"save"]);