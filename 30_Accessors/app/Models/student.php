<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    function getNameAttribute($val) {
        return ucfirst($val);
    }
    function getEmailAttribute($val) {
        return ucfirst($val);
    }

    function getPhoneAttribute($val) {
        return "+91".($val);
    }
}
