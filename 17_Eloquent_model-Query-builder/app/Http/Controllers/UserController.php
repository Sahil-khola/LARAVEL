<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\student;

class UserController extends Controller
{
    function queries()
    {

        $data = student::all();
        // $data = student::get();

        // $data = student::where("ID","4")->get();
        // $data = student::find(1);
        // $data = [$data];

        // $data = student::insert([
        //    "Name"=>"Tanisq",
        //    "Email"=>"taniq@gmail.com"
        // ]);

        //  $data = student::where("ID","14")->delete();

        //  $data = student::where("ID","5")->update(["Name"=>"bhupati"]);





        return view("home", ["users" => $data]);
    }
}
