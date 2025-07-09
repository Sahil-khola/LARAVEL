<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function formHandel(Request $req) {
        $path = $req->file("file")->store("images","public");
        // $path = $req->file("file")->storeAs("public", $req->file("file")->getClientOriginalName());
        $fileName = explode("/", $path)[1];
        // echo $fileName;
        return view("display",["path"=>$fileName]);
    }
}

