<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{

    function get()
    {
        return product::all();
    }


    function put(Request $req)
    {
        $product = product::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->seller_id = $req->seller_id;
        $product->save();
        if ($product->save()) {
            return ["result" => "Data Added Complete"];
        } else {
            return ["result" => "Task Failde"];
        }
    }
    function delete(Request $req)
    {
        $product = product::destroy($req->id);
        if ($product) {
            return ["result" => "data delete"];
        } else {
            return ["result" => "Task Failed"];
        }
    }



    function post(Request $req)
    {
        $rules = array(
            "name"=>"required"
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $product = new product();
        $product->name = $req->name;
        $product->price = $req->price;
        $product->seller_id = $req->seller_id;
        $product->save();
        if ($product->save()) {
            return ["result" => "Data Added Complete"];
        } else {
            return ["result" => "Task Failde"];
        }
    }
}
