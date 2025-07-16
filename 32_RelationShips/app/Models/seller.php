<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    function productData(){
        return $this->hasOne("App\Models\product");
    }
    function productData1(){
        return $this->hasMany("App\Models\product");
    }
    function productData2(){
        return $this->hasMany("App\Models\product");
    }
}
