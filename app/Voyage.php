<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    public function trajets()
    {
        return $this->belongsToMany('App\Trajet');
    }
}
