<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class UserController extends Controller
{
    function index(product $key) {
        return $key;
    }
    function blade() {
        return Blade::render('
            <h1>Hello {{ $name }} </h1>
            <p>Count to ten: @for ($i = 1; $i <= 10; $i++) {{ $i }} @endfor</p>
        ', ['name' => 'Sahil']);
    }
}
