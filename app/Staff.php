<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //

    public function school()
    {
        return $this->belongsToMany('App\School');
    }

    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
}
