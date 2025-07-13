<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    function displyData() {
        $data = student::all();
        return view("home", ["data" => $data]);
    }

    function delete($id) {
        $isDelete = student::destroy($id);

        if ($isDelete) {
            return redirect('user');
        } else {
            echo "Failed";
        }
    }

    function edit($id) {
        $data = student::find($id);
        return view("edit",["data"=>$data]);
    }
  
    function editList(Request $ress , $id) {
        $student = student::find($id);
        $student->name = $ress->name;
        $student->email = $ress->email;
        $student->phoneNumber = $ress->phoneNumber;
        if ($student->save()) {
            return redirect("user");
        } else {
            echo "Failed Operation";
        }
        
    }
  
}
