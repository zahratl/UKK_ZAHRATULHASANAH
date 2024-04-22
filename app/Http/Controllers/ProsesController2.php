<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $a=$request->angka1;
        $b=$request->angka2;
        $hasil2=$a+$b;

        $op=$request->op;

        if($op=='+'){
            $hasil2=$a+$b;
        }elseif($op=='-'){
            $hasil2=$a-$b;
        }elseif($op=='x'){
            $hasil2=$a*$b;
        }elseif($op=='/'){
            if ($b !=0) {
                $hasil2 =$a / $b;
            } else {
                $hasil2 = ($op == 'Bagi' && $b != 0) ? $a /$b : "Tidak dapat melakukan pembagian dengan angka 0.";
            }
    }else{
        $hasil2="";

        return view('kalkulator.index2');

    }
    return view('kalkulator.hasil2', compact('hasil2'));
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
