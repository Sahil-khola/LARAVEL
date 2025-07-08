<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function ( ) {
    return view('welcome');
});


// Route::get("user",[UserController::class,"get"]);
// Route::post("user",[UserController::class,"post"]);
// Route::put("user",[UserController::class,"put"]);
// Route::delete("user",[UserController::class,"delete"]);

// Route::any("user",[UserController::class,"AnyFun"]);
// Route::match(["post","get"],"user",[UserController::class,"group1"]);
// Route::match(["put","delete"],"user",[UserController::class,"group2"]);


// Route::view("/home","home");

