<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;

class UserController extends Controller
{
  function about($name){
    return view("about",["name"=>"$name"]);
  }


  function show($name){
    // return redirect()->to("home/profile/user");
    return to_route("direct",["name"=>"$name"]);
  }

function user($name){
    return to_route("user",["name"=>"$name"]);
}

}
