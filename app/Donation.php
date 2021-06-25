<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function person ()
    {
        # code...
        return $this->belongsTo('App\Person');
    }
}
