<?php

namespace App\Http\Controllers;

use App\currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=currency::all();
        return view('currency.home',compact('data'));
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
        currency::create(\Request::all());
        \Session::flash('message', 'Sukses Simpan Data!');
        return redirect('currency');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, currency $currency)
    {
        currency::FindorFail($currency->id)->update(\Request::all());
        return redirect('currency');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(currency $currency)
    {        
        currency::destroy($currency->id);
        \Session::flash('message', 'Sukses Hapus Data!');
        return redirect('currency');
    }
}
