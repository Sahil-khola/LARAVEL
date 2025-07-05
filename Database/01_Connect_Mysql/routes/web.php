<?php

use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/user",[DatabaseController::class,"dbName"]);