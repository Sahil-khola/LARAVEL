<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getName(){
        return "get Route called";
    }
    function post(){
        return "post Route called";
    }
    function put(){
        return "put Route called";
    }
    function delete(){
        return "delete Route called";
    }
  
}
