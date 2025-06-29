<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function handelForm(Request $Request){
    //   return $Request;
    echo "the city : $Request->city";
    echo "<br/>";
    echo "the Age : $Request->Age";
    echo "<br/>";

    echo "the Gender : $Request->gender";
    echo "<br/>";

    echo "the skills : " .implode(",",$Request["skills"]);
    echo "<br/>";

    print_r($Request->skills);
    }
}
