<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    function handelForm(Request $request){
     echo "the user name :$request->name";
     echo "<br>";
     echo "the city name :$request->city";
     echo "<br>";
     echo "the email adress :$request->email";
    }
}
