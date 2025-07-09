<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function logIn(Request $req)
    {
    //    $req->session()->flash("message","Log In Sucessfully");
    //    $req->session()->flash("name","Sahil Khola");
    
        // return redirect("profile");
        return redirect("login");
    }
}
