<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeritasController extends Controller
{
    public function index()
    {
        return view('veritas.index');
    }
}
