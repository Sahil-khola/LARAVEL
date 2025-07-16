<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("OneToOne",[UserController::class,"OneToOne"]);
Route::get("OneToMany",[UserController::class,"OneToMany"]);
Route::get("ManyToOne",[UserController::class,"ManyToOne"]);