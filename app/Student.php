<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function people()
    {
        return $this->hasMany('App\Person');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
