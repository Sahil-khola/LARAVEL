<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

$info = "hey, My name is sahil khola";
// $info=Str::ucFirst($info);
// $info=Str::camel($info);

// $info=Str::of($info)->ucfirst()->camel();
// echo($info);


Route::get("product/{key}",[UserController::class,"index"]);
Route::get("blade",[UserController::class,"blade"]);