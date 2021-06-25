<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function messages ()
    {
        # code...
        return $this->hasMany('App\Message');
    }
    public function donations ()
    {
        # code...
        return $this->hasMany('App\Donation');
    }

    public function data ()
    {
        # code...
        return $this->hasOne('App\Data');
    }

    public function ppvolunteer ()
    {
        # code...
        return $this->hasOne('App\PPVolunteer');
    }
}
