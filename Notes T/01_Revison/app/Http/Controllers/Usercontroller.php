<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    // function handelMiddle(){
    //     return view("/home");
    // }
    function handelform(Request $request){
        // echo $request->name;
        // echo $request->email;
        // echo $request->password;
        $request->validate([
            "name" => "required |uppercase ",
            "email" => "required",
            "password" => "required",
        ],[
            "name.uppercase"=>"must be capital word"
        ]);
        return $request;
    }
}
