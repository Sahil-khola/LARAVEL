<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getName(){
        // echo "Sahil khola";
        return view("Welcome");
    }

    function UserName($name){
        // echo "This is Admin Name {$name}";
       return view("UserName",["name"=>$name]);
    }
     
     function AdminLogin(){
        return view("Admin.AdminlogIn");
    }
};
