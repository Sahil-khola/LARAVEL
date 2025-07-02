<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/",function () {
    return view("home");
});

Route::view("form","form");
Route::post("aser",[FormController::class,"formHandle"]);
