<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function list() {
        return student::all();
    }
    function save(){
        $student = new student();
        $student->name="neeraj";
        $student->email="neeraj@gmail.com";
        $student->password="1234";
        $student->save();
        if ($student->save()) {
            echo"task Complete";
        } else {
            echo"task Failed";
        }
        
    }
}
