<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\import;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=import::join('pib.tblpibkms','pib.tblpibkms.CAR','pib.tblpibhdr.CAR')
        ->join('pib.tblpibdok','pib.tblpibdok.CAR','pib.tblpibhdr.CAR')
        ->where('pib.tblpibdok.DokKd',705)
        ->orWhere('pib.tblpibdok.DokKd',740)
        ->orWhere('pib.tblpibdok.DokKd',704)        
        ->get();    
        return view('tema2.index',compact('data'));
    }
}
