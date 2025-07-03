<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("student")->group(function () {
    Route::view("/home", "home");
    Route::get("/show", [HomeController::class, "show"]);
    Route::get("/save", [HomeController::class, "Save"]);
});
