<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    public function voyages()
    {
        return $this->belongsToMany('App\Voyage');
    }
}
