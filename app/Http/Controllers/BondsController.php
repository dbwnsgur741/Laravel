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
//        $this->validate($request, [
//            'investment' => 'required',
//            'investment_name' => 'required',
//            'i_id'=>'required',
//            'price'=>'required',
//            'p_goal'=>'required',
//            'c_date'=>'required',
//            'c_date2'=>'required',
//            'c_date3'=>'required',
//            'agreement'=>'required',
//            'goal_in'=>'required',
//            'goal_out'=>'required',
//            'c_date4'=>'required',
//            'invest_date'=>'required',
//            '_price'=>'required',
//            'p_price'=>'required',
//            '_price2'=>'required',
//            't_price'=>'required',
//            'c_date5'=>'required',
//            '_price3'=>'required',
//            'law_office'=>'required',
//            'etc'=>'required',
//            'address'=>'required',
//            'phone'=>'required',
//            'birth'=>'required',
//            'email'=>'required',
//        ]);

      $bond = Bond::create([
          'investment' => $request->input('investment',' '),
          'investment_name' =>$request->input('investment',' '),
          'i_id' => $request->input('i_id',' '),
          'price' => $request->input('price',' '),
          'p_goal' => $request->input('p_goal',' '),
          'c_date' => $request->input('c_date',' '),
          'c_date2' => $request->input('c_date2',' '),
          'c_date3' => $request->input('c_date3',' '),
          'agreement' =>  $request->input('agreement',' '),
          'goal_in' =>  $request->input('goal_in',' '),
          'goal_out' =>  $request->input('goal_out',' '),
          'c_date4' =>  $request->input('c_date4',' '),
          'invest_date' =>  $request->input('invest_date',' '),
          'm_price' =>  $request->input('m_price',' '),
          'p_price' =>  $request->input('p_price',' '),
          'm_price2' =>  $request->input('m_price2',' '),
          't_price' =>  $request->input('t_price',' '),
          'contract' => request('contract'),
          'c_date5' =>  $request->input('c_date5',' '),
          'm_price3' =>  $request->input('m_price3',' '),
          'confirm1' => request('confirm1'),
          'confirm2' => request('confirm2'),
          'confirm3' => request('confirm3'),
          'confirm4' => request('confirm4'),
          'confirm5' => request('confirm5'),
          'law_office' =>  $request->input('law_office',' '),
          'etc' =>  $request->input('etc',' '),
          'address' =>  $request->input('address',' '),
          'phone' =>  $request->input('phone',' '),
          'birth' =>  $request->input('birth',' '),
          'email' =>  $request->input('email',' '),
      ]);

        return redirect('/bonds');
    }

    public function edit(Bond $bond)
    {
        $bonds = Bond::latest()->get();
        
        return view('veritas.edit')->with([
            'bond'=>$bond,
            'bonds'=>$bonds
        ]);
    }
}
