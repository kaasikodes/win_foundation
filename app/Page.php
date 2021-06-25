<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    public function budgets()
    {
        return $this->hasMany('App\Budget');
    }
    public function extra()
    {
        return $this->hasOne('App\Extra');
    }
}
