<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public function Person ()
    {
        # code...
        return $this->belongTo('App\Person');
    }
}
