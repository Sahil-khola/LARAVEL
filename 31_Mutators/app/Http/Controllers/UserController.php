<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function show() {
    $student = new student();
    $student->name = "Rahul";
    $student->email = "oTgQF@example.com";
    $student->password = "123456";

    $student->save();
    if($student) {
        echo "Data Inserted";
    }
   }

function showAll() {
    $student = student::all();
    return $student;
}
};
