<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function formHandle(Request $request){
        $request->validate([
            "name"=>"required | uppercase",
            "email"=>"required",
            "password"=>"required",
        ],[
            "name.required"=>"plz enter name",
            "name.uppercase"=>"must be uppercase",

        ]);
       return $request;
    }
}
