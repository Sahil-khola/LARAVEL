<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function queries()
    {
        // $user = DB::select("select * from students");
        // $user = DB::table("students")->get();
        // $user = DB::table("students")->where("name","Sahil")->get();

        //   $user =  DB::table("students")->insert([
        //         "Name"=>"Sourav",
        //         "email"=>"sourav@gmail.com"
        //     ]);

        // $user = DB::table("students")->get();
        // $user = DB::table("students")->where("ID", "9")->delete();
        $user = DB::table("students")->where("ID" , "13")->update([
            "Name"=>"bhupati",
            "email"=>"bhupati@gmail.com",
        ]);
        $user = DB::table("students")->get();

        return view("home", ["user" => $user]);
    }
}
