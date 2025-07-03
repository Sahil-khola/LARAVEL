<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show(){
        return "show student list";
    }
    function save(){
        return "Add new user";
    }
}
