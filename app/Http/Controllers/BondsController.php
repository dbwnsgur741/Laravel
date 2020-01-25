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

    public function store(Request $request)
    {
      $bond = Bond::create([
          'investment' => request('investment'),
          'investment_name' => request('investment_name'),
          'i_id' => request('i_id'),
          'price' => request('price'),
          'p_goal' => request('p_goal'),
          'c_date' => request('c_date'),
          'c_date2' => request('c_date2'),
          'c_date3' => request('c_date3'),
          'agreement' => request('agreement'),
          'goal_in' => request('goal_in'),
          'goal_out' => request('goal_out'),
          'c_date4' => request('c_date4'),
          'invest_date' => request('invest_date'),
          '_price' => request('_price'),
          'p_price' => request('p_price'),
          '_price2' => request('_price2'),
          't_price' => request('t_price'),
          'contract' => request('contract'),
          'c_date5' => request('c_date5'),
          '_price3' => request('_price3'),
          'confirm1' => request('confirm1'),
          'confirm2' => request('confirm2'),
          'confirm3' => request('confirm3'),
          'confirm4' => request('confirm4'),
          'confirm5' => request('confirm5'),
          'law_office' => request('law_office'),
          'etc' => request('etc'),
          'address' => request('address'),
          'phone' => request('phone'),
          'birth' => request('birth'),
          'email' => request('email'),
      ]);

        return redirect('/bonds');
    }
}
