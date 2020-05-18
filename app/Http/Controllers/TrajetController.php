<?php

namespace App\Http\Controllers;


use App\Voyage;

class TrajetController extends Controller
{
    public function index()
    {
        $voyages = Voyage::first()->get();

        return view('trajet.index', compact('voyages'));
    }
}
