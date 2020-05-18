<?php

namespace App\Http\Controllers;


use DB;

class TrajetController extends Controller
{
    public function index()
    {
        $last = DB::table('voyages')->latest('id')->first();
        return view('trajet.index', compact('last'));
    }
}
