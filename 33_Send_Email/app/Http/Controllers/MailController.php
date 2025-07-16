<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendMail() {
        $to = "sahilkhola7202@gmail.com";
        $msg = "hey My Name is Sahil Khola and I am a web developer";
        $subject ="Khola pvt";
        
        Mail::to($to)->send(new UserMail($msg,$subject));
    }
}
