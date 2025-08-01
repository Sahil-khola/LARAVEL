<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("test", function () {
    return [
        "Name"=>"Sahil",
        "Age"=>21,
        "City"=>"Gurugram",
        "State"=>"Haryana",
    ];
});