<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function dbName(){
        $users = DB::select("select * from users");
        return view("/home",["users"=>$users]);
    }
}
