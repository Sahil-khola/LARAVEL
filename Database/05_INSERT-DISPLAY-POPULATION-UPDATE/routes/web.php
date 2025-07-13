<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("form","form");

Route::controller(UserController::class)->group(function(){

Route::post("form-data","inserData");
Route::get("display","display");
Route::get("delete/{id}","delete");
Route::get("edit/{id}","edit");
Route::put("edit-list/{id}","update");
Route::get("search","search");
Route::get("search","deleteMultiple");

});