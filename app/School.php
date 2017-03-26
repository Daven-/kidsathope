<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function staff()
    {
        return $this->belongsToMany('App\Staff');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }
}
