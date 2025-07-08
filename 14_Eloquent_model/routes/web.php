<?php

use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

Route::get("/", function() {
    return view("welcome");
});
