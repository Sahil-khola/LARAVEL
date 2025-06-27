<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getName(){
       echo "hey my name is sahil khola";
    }
    function knowName($name){
    //    echo " my name is {$name}";
     return view("Admin.AdminLogin",["name"=>$name]);
    }
    
    function OpenView(){
        return view("OpenView");
        // return view("Admin.AdminLogin");
    }

    function subview(){
        return view("View");
    }
}
