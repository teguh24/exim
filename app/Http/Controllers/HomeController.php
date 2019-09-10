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
        ->join('pib.tblkemasan','pib.tblkemasan.KDEDI','pib.tblpibkms.JnKemas')
        ->join('pib.tblnegara','pib.tblnegara.KdEdi','pib.tblpibhdr.PasokNeg')
        ->where('pib.tblpibdok.DokKd',705)
        ->orWhere('pib.tblpibdok.DokKd',740)
        ->orWhere('pib.tblpibdok.DokKd',704)
        ->groupBy('pib.tblpibhdr.CAR')        
        ->get();    
        return view('tema2.index',compact('data'));
    }
    public function api()
    {
        $data=\DB::table('pib.tblpibdtl')       
        ->join('pib.tblpibhdr','pib.tblpibhdr.CAR','pib.tblpibdtl.CAR')
        ->whereBetween('pib.tblpibhdr.PibTg',['2019/08/01','2019/08/31'])
        ->get();    
        return view('tema2.api',compact('data'));
    }
    public function besi()
    {
        $data=\DB::table('pib.tblpibdtl')       
        ->join('pib.tblpibhdr','pib.tblpibhdr.CAR','pib.tblpibdtl.CAR')
        ->whereBetween('pib.tblpibhdr.PibTg',['2019/08/01','2019/08/31'])
        ->where('pib.tblpibdtl.NoHs','like','%73%')
        ->get();    
        return view('tema2.besi',compact('data'));
    }
}
