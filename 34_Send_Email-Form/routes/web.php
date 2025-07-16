<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("mail-send",[MailController::class,"mailSend"]);
Route::view("send-mail","send-mail");