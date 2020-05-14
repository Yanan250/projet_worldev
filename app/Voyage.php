<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $fillable = ['ville_depart', 'ville_arrivee', 'date_voyage'];
}
