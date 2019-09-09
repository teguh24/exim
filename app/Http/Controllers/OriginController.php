<?php

namespace App\Http\Controllers;

use App\origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=origin::all();
        return view('origin.home',compact('data'));
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
        origin::create(\Request::all());
        return redirect('origin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function show(origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function edit(origin $origin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, origin $origin)
    {
        origin::FindOrFail($origin->id)->update(\Request::all());
        return redirect('origin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function destroy(origin $origin)
    {
        origin::destroy($origin->id);
        return redirect('origin');
    }
}
