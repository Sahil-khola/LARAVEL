<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get("/get",[productController::class,"get"]);
Route::post("/post",[productController::class,"post"]);
Route::put("/put",[productController::class,"put"]);
Route::put("/delete",[productController::class,"delete"]);

Route::resource("user",UserController::class);
