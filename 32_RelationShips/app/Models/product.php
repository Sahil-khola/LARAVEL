<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    function productData2() {
        return $this->belongsTo("App\Models\seller");
    }
}
