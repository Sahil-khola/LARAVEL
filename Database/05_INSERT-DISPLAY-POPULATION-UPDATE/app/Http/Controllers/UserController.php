<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function inserData(Request $request)  {
        $student =  new student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phoneNumber = $request->phoneNumber;
        $student->save();
        return redirect("form");
    }

    function display() {
        $student = student::paginate(5);
        return view('display',["data"=>$student]);
    }

    function delete($id) {
        $student = student::destroy($id);
        return redirect("display");
        
    }

    function edit($id) {
        $student = student::find($id);
        return view('edit',["data"=>$student]);
    }

    function update(Request $request,$id) {
        
        $student = student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phoneNumber = $request->phoneNumber;
        $student->save();
        return redirect("display");
    }

    function search(Request $request) {
        $student = student::where("name","like","%".$request->search."%")->get();
        return view("display",["data"=>$student]);
    }
    function deleteMultiple(Request $res) {
       $student =  student::destroy($res->ids);
        if($student){
             return redirect("display");
        }
    }

}

