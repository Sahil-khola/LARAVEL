<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function logIn(Request $res) {
        // echo "Name : $res->name <br>";
        // echo "Password : $res->password <br>";
        $res->session()->put("name",$res->name);
        $res->session()->put("password",$res->password);
        echo session("name");
       return redirect("profile");
    }
    function logOut(Request $res){
        $res->session()->pull("name");
        return redirect("profile");
    }
}
