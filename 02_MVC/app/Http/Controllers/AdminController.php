<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    // function Welcome(){
    //     if (View::exists("welcomdon")) {
    //                 return view("welcodonme");

    //     } else {
    //         echo "No view";
    //     }
        
    // }
    // function Userlogin($name){
    //     return view("user.login",["user"=>$name]);
    // }

    function Blade(){
        $name = "tinku";
        $students = ["Sourav","tinku","rinku","neeraj","Sahil"];
        return view("home",["name"=>$name,"students"=>$students]);
    }
};
