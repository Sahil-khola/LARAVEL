<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(HomeController::class)->group(function(){

Route::get("/name", "getName");
Route::get("/phone","phoneNumber");
Route::get("/email/{name}",  "getEmail");

Route::get("/home/{name}","userName");
});
