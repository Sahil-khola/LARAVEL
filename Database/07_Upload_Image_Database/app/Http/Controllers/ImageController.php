<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    function upload(Request $request) {
       $path =  $request->file("file")->store("images","public");
       $pathArr = explode("/",$path)[1];
       $img = new image();
       $img->path = $pathArr;
       $img->save();
       if ($img->save()) {
        return redirect("display");       
       } 
      
    }

    function display() {
        $images = image::all();
        return view("display",["images"=>$images]);
    }
}
