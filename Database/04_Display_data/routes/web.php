<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("home","home");
Route::get("user",[UserController::class,"displyData"]);
Route::get("delete/{id}",[UserController::class,"delete"]);
Route::get("edit/{id}",[UserController::class,"edit"]);
Route::put("edit-list/{id}",[UserController::class,"editList"]);
