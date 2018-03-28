<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::where('estado', '=', '0')->get()->sortByDesc("diaHoraViaje")->take(5);
       $autos = DB::table('autos')
       ->join('chofers', 'chofers.auto_id', '=', 'autos.id')->where('chofers.estado', '=', '1')->get();
        return View::make('home')->with('reservas', $reservas)->with('autos', $autos);
    }
 
}
