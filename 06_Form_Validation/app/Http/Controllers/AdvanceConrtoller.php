<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceConrtoller extends Controller
{
    function advanceValidate(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "city"=>"required",
        ]);
        return $request;
    }
}
