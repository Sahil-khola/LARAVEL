<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("login",[AuthController::class,"login"]);
Route::post("signup",[AuthController::class,"signup"]);

Route::middleware('auth:sanctum')->group(function () {
    
});