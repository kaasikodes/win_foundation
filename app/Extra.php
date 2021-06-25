<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = [];
    public function page()
    {
        return $this->belongsTo('App\Page');
    }

}
