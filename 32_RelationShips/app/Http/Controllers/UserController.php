<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function OneToOne() {
        return seller::find(1)->productData;
    }    
    function OneToMany() {
        return seller::find(1)->productData1;
    }    
    function ManyToOne() {
        return seller::with("productData2")->get();
    }    
}
