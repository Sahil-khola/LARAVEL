<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function get(){
        return "get route called";
    }
    function post(){
        return "post route called";
    }
    function put(){
        return "put route called";
    }
    function delete(){
        return "delete route called";
    }
    function AnyFun(){
        return "Any route called";
    }
    function group1(){
        return "post or get route called";
    }
    function group2(){
        return "put or delete route called";
    }
}
