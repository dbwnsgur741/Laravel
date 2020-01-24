<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bond;

class BondsController extends Controller
{
    public function index() // index layout
    {
        $bonds = Bond::latest()->get();

        return view('veritas.bond')->with([
            'bonds' => $bonds
        ]);
    }

    public function create() // create layout
    {
        $bonds = Bond::latest()->get();

        return view('veritas.create')->with([
            'bonds' => $bonds
        ]);
    }
}
