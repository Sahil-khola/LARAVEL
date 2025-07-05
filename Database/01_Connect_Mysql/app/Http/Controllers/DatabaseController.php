<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    function dbName(){
        return DB::select("select * from students");
        // return DB::select("select * from users");
    }
}
