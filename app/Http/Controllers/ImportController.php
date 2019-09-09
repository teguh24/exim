<?php

namespace App\Http\Controllers;

use App\import;
use App\currency;
use App\supplier;
use App\origin;
use App\ppjk;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=import::all();
        $currency=currency::all();
        $supplier=supplier::all();
        $origin=origin::all();
        $ppjk=ppjk::all();                       
        return view('import.home',compact('data','currency','supplier','origin','ppjk'));
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
        import::create(\Request::all());
        return redirect('import');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\import  $import
     * @return \Illuminate\Http\Response
     */
    public function show(import $import)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\import  $import
     * @return \Illuminate\Http\Response
     */
    public function edit(import $import)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\import  $import
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, import $import)
    {
        import::FindorFail($import->id)->update(\Request::all());
        return redirect('import');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\import  $import
     * @return \Illuminate\Http\Response
     */
    public function destroy(import $import)
    {
        import::destroy($import->id);
        return redirect('import');
    }
}
