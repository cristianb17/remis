<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class GestionReservaController extends Controller
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
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
        ]);
    }
    
    public function ingresarReserva()
    {
       return view("reservas/reserva");
        
    }
    
    public function editarReserva(Request $request)
    {
        $reserva = Reserva::find($request['id']);
        return View::make('reservas/editar')->with('reserva', $reserva);
        
    }
    
    public function crearReserva(Request $request)
    {   $reserva = new Reserva();
        $reserva->diaHoraViaje = $request['diaHoraViaje'];
        $reserva->avisoDespachador= $request['avisoDespachador'];
        $reserva->desde= $request['desde'];
        $reserva->hasta= $request['hasta'];
        $reserva->numero= $request['numero'];
        $reserva->piso= $request['piso'];
        $reserva->depto= $request['depto'];
        $reserva->precioEstimado= $request['precioEstimado'];
        $reserva->tipo= $request['tipo'];
        $reserva->desdeEstimado= $request['desdeEstimado'];
        $reserva->hastaEstimado= $request['hastaEstimado'];
        $reserva->observaciones= $request['observaciones'];
        $reserva->lunes= $request['lunes'];
        $reserva->martes= $request['martes'];
        $reserva->miercoles= $request['miercoles'];
        $reserva->jueves= $request['jueves'];
        $reserva->viernes= $request['viernes'];
        $reserva->sabado= $request['sabado'];
        $reserva->domingo= $request['domingo'];
        
        $reserva->desdeRepeticion= $request['desdeRepeticion'];
        $reserva->hastaRepeticion= $request['hastaRepeticion'];
        $reserva->repetir= $request['repetir'];
        $reserva->minutoPreaviso= $request['minutoPreaviso'];
        $reserva->save();
        
        $reserva = Reserva::all();
        return View::make('home')->with('reservas', $reserva);
    }
    
    public function actualizarReserva(Request $request)
    {   
        $reserva = Reserva::find($request['id']);
        $reserva->diaHoraViaje = $request['diaHoraViaje'];
        $reserva->avisoDespachador= $request['avisoDespachador'];
        $reserva->desde= $request['desde'];
        $reserva->hasta= $request['hasta'];
        $reserva->numero= $request['numero'];
        $reserva->piso= $request['piso'];
        $reserva->depto= $request['depto'];
        $reserva->precioEstimado= $request['precioEstimado'];
        $reserva->tipo= $request['tipo'];
        $reserva->desdeEstimado= $request['desdeEstimado'];
        $reserva->hastaEstimado= $request['hastaEstimado'];
        $reserva->observaciones= $request['observaciones'];
        $reserva->lunes= $request['lunes'];
        $reserva->martes= $request['martes'];
        $reserva->miercoles= $request['miercoles'];
        $reserva->jueves= $request['jueves'];
        $reserva->viernes= $request['viernes'];
        $reserva->sabado= $request['sabado'];
        $reserva->domingo= $request['domingo'];
        
        $reserva->desdeRepeticion= $request['desdeRepeticion'];
        $reserva->hastaRepeticion= $request['hastaRepeticion'];
        $reserva->repetir= $request['repetir'];
        $reserva->minutoPreaviso= $request['minutoPreaviso'];
        $reserva->save();
    
        $reserva = Reserva::all();
        return View::make('home')->with('reservas', $reserva);
    }
    
    public function listarReservas()
    {
        $reservas = Reserva::all();
        return View::make('home')->with('reservas', $reservas);
        
    }
    
    public function eliminarReserva(Request $request)
    {
        $reserva = Reserva::find($request['id']);
        $reserva->delete();
        $reserva = Reserva::all();
        return View::make('home')->with('reservas', $reserva);
        
    }
    
    public function verReserva(Request $request)
    {
        $reserva = Reserva::find($request['id']);
        return View::make('reservas.ver')->with('reserva', $reserva);
        
    }
    
    public function buscarReserva(Request $request)
    {
        
        if($request['dato'] == ''){
            $reservas = Reserva::all();
            return View::make('home')->with('reservas', $reservas);
        }
        $reservas = Reserva::where('desde', $request['dato'])->orWhere('hasta', 'like', $request['dato'])->get();
        return View::make('home')->with('reservas', $reservas);
        
    }
}
