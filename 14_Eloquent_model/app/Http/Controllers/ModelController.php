<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
    function handelModel(){
        // $users = \App\Models\student::all();
        $users = student::all();
        $data = new student;
        echo " <h1> {$data->getName()} </h1>";
        // echo $data->getName();
        return view("home",["users"=>$users]);
        // return $users;
    }
}
