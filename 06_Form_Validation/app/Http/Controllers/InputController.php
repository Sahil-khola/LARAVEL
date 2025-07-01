<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    function handelForm(Request $Request){

       $Request->validate([
        "userName"=>"required | min:2",
        "email"=>"required | email",
        "password" => [
            "required",
            "min:5"
        ],
        "skills"=>"required",
        "gender"=>"required",
       ]);

return $Request;
        // echo "Name : $Request->userName<br>";
        // echo "Email : $Request->email<br>";
        // echo "Password : $Request->password<br>";
        // echo "the skills : " .implode(",",$Request["skills"]);


    }
}
