<?php

use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/form","input");
Route::post("input",[InputController::class,"handelForm"]);
