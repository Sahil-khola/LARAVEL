<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ModelController extends Controller
{
    function handelDb(){
        $data =  \App\Models\student::all();
        return view("model",["data"=>$data]);
    }
}
