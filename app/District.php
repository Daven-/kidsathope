<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //

    public function schools()
    {
        return $this->hasMany('App\School');
    }
}