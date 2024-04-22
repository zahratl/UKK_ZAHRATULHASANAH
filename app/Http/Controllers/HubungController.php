<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungController extends Controller
{
    //
    public function index()
    {
        //
        return view('kalkulator.index');
    }

    public function kalkulator1()
    {
        //
        return view('kalkulator.inputangka');
    }

    public function kalkulator2()
    {
        //
        return view('kalkulator.kalkulator2');
    }

    public function kalkulatorjs()
    {
        //
        return view('kalkulator.kalkulatorjs');
    }
}
