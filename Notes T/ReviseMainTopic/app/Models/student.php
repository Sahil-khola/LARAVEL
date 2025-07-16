<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getEmailAttribute($val){
        return ucfirst($val);
    }
    function setNameAttribute($val){
        return $this->attributes["name"]=ucfirst($val);
    }
    function setEmailAttribute($val){
        return $this->attributes["email"]=ucfirst($val);
    }
}
