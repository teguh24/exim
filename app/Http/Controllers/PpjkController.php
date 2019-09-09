<?php

namespace App\Http\Controllers;

use App\ppjk;
use Illuminate\Http\Request;

class PpjkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ppjk::all();
        return view('ppjk.home',compact('data'));
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
        ppjk::create(\Request::all());
        return redirect('ppjk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ppjk  $ppjk
     * @return \Illuminate\Http\Response
     */
    public function show(ppjk $ppjk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ppjk  $ppjk
     * @return \Illuminate\Http\Response
     */
    public function edit(ppjk $ppjk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ppjk  $ppjk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ppjk $ppjk)
    {
        ppjk::FindorFail($ppjk->id)->update(\Request::all());
        return redirect('ppjk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ppjk  $ppjk
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppjk $ppjk)
    {
        ppjk::destroy($ppjk->id);
        return redirect('ppjk');
    }
}
