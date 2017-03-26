<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
