<?php

use App\Http\Controllers\InputController;
use App\View\Components\input;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/user","form");
Route::post("Adduser",[InputController::class,"handelForm"]);