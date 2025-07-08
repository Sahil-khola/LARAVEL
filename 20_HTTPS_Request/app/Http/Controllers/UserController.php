<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function handelForm(Request $request)
    {
        // $request->validate([
        //     "name"=>"required",
        //     "email"=>"required",
        //     "password"=>"required",
        // ],[
        //     "name.required" => "plz enter name",
        // ]);
        //   return $request;
        // echo "the request path is " .$request->path();
        // echo "<br>the request path is " .$request->method();
        // echo "<br>the request path is " .$request->uri();
        // echo "<br>the request path is " .$request->name;
        // echo "<br>the request path is " .$request->password;
        // echo "<br>the request path is " .$request->email;

    if ($request->isMethod("POST")) {
        echo"code execute for post request";
    }else {
        echo"eror";
    }
    
    }
}
