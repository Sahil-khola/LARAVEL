<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
  function setNameAttribute($val) {
    return $this->attributes['name'] = strtoupper($val);
  }
  function getNameAttribute($val) {
    return $val = ucfirst($val);
  }
  function getEmailAttribute($val) {
    return $val = ucfirst($val);
  }
}
