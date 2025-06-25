<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About/{name}', function ($name) {
    echo $name;
    return view("About");
});

// Route::get("/home", function(){
//     return view("home");
// });

// Route::view("/home","home");