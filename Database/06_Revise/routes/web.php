<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view("/","welcome");

Route::view("form","form");
// Route::view("display","display");
Route::post("insert",[UserController::class,"InserData"]);
Route::get("display",[UserController::class,"displayData"]);
Route::get("delete/{id}",[UserController::class,"deleteData"]);
Route::get("edit/{id}",[UserController::class,"editData"]);

Route::put("update/{id}",[UserController::class,"update"]);
Route::post("search",[UserController::class,"search"]);
Route::post("search",[UserController::class,"deleteMultiple"]);