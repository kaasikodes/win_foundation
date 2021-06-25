<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}
