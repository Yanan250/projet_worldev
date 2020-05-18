<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $guarded = [];

    public function trajets()
    {
        return $this->hasMany('App\Trajet');
    }
}
