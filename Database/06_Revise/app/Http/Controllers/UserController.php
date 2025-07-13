<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class UserController extends Controller
{
    function InserData(Request $request) {
        $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phoneNumber = $request->phoneNumber;
        $student->save();
        return redirect("display");
    }
    function displayData() {
        // $student =  student::all();
        $student =  student::paginate(4);
        return view("display",["data"=>$student]);
    }
    function deleteData($id) {
        $student = student::destroy($id);
        return redirect("display");
    }
    function editData($id) {
        $student = student::find($id);
        return view("edit",["data"=>$student]);
    }
    function update(Request $request ,$id ) {
        $student = student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phoneNumber = $request->phoneNumber;
        $student->save();
        return redirect("display");
    }
    function search(Request $request) {
        $student = student::where("name","like","%$request->search%")->paginate(4);
        return view("display",["data"=>$student]);

    }
    function deleteMultiple(Request $request) {
        student::destroy($request->ids);
        return redirect("display");
    }
}
