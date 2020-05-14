<?php

namespace App\Http\Controllers;


use App\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function create()
    {
        $voyage = new Voyage();
        return view('voyage.index', compact('voyage'));
    }

    public function store(Voyage $voyage, Request $request)
    {
        $voyage->ville_depart = $request->input('select_depart');
        $voyage->ville_arrivee = $request->input('select_arrivee');
        $voyage->date_voyage = $request->date_voyage;

        $voyage->save();
        return redirect('trajet');
    }


    public function about()
    {
        return view('voyage.about');
    }

    public function contact()
    {
        return view('voyage.contact');
    }

    public function gallery()
    {
        return view('voyage.gallery');
    }

    public function trajet()
    {
        return view('voyage.trajet');
    }

}
