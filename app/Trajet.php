<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{


    protected $fillable = ['ville_depart', 'ville_arrivee', 'date_voyage'];

    public function voyages()
    {
        return $this->belongsTo('App\Voyage');
    }
}
