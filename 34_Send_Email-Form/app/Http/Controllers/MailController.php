<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function mailSend(Request $request) {
        $to = $request->to;
        $subject = $request->subject;
        $msg = $request->msg;
        Mail::to($to)->send(new UserMail($msg,$subject));
        return"send email....";
    }
}
