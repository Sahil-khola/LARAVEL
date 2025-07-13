<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getForm(Request $ress)
    {

       $student = new student();
    //    $student = student::all();
       $student->name = $ress->name;
       $student->email = $ress->email;
       $student->phonenumber = $ress->phone;
       $student->save();
       if ($student) {
        echo "add new user complete";
       } else {
        echo "task failed";
       }
    // return $student;
    }
}
