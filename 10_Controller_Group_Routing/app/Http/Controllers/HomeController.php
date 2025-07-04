<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getName(){
        return "Sahil Khola";
    }
    function phoneNumber(){
        return 9625210114;
    }
    function getEmail(){
        return "sahilkhola@gmail.com";
    }
    
    function userName($name){
       return view("home",["name"=>"$name"]);
    }
}
