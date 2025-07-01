<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceConrtoller extends Controller
{
    function advanceValidate(Request $request){
        $request->validate([
            "name"=>"required | min:3 ",
            "email"=>"required",
            "city"=>"required|uppercase",
        ],[
            "name.required"=>"Plz Enter your Name",
            "name.min"=>"the name atlest 3 word",
            "name.array"=>"Plz Enter your Name in array form" ,
            "email.required"=>"plz enter valid email",
            "city.upercase"=>"plz enter city name is uppercase"
        ]);
        return $request;
    }
}
