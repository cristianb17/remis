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
        $reservasSinAsignacion = Reserva::where('estado', '=', '0')->Where('auto', '=', '0')->get()->sortByDesc("diaHoraViaje")->take(5);
        $reservasConAsignacion = Reserva::where('estado', '=', '0')->Where('auto', '!=', '0')->get()->sortByDesc("diaHoraViaje")->take(6);
        
       $autos = DB::table('autos')
       ->join('chofers', 'chofers.auto_id', '=', 'autos.id')->where('chofers.estado', '=', '1')->get();
       
       foreach ($autos as $auto) {
           $auto->ultimoDestino;
           $auto->horaUltimoDestino;
           $auto->tipoUltimoDestino;
       }
           
       $reservasFinalizadasAutosActivos = Reserva::where('estado', '=', '1')->Where('auto', '!=', '0')->get()->sortByDesc("diaHoraViaje")->take(6);
       
       return View::make('home')->with('reservas', $reservasSinAsignacion)->with('reservasAsignadas', $reservasConAsignacion)->with('autos', $autos);
    }
 
}
