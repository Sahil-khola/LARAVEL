<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function handelHttp(){
        $respose = Http::get("https://jsonplaceholder.typicode.com/users/1");
        $body = $respose->body();
      return view('home',["data"=>json_decode($body)]);
    }
}
