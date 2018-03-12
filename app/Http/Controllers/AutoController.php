<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Chofer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use CairoException;
use ErrorException;

class AutoController extends Controller
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
    
    public function crearAuto()
    {
        $chofer = Chofer::all();
        return View::make('autos/auto')->with('choferes', $chofer);
    }
    
    public function listarAutos()
    {
        $autos = Auto::all();
        return View::make('autos/listarAutos')->with('autos', $autos);
        
    }
    
    public function verAuto(Request $request)
    {
        $autos = Auto::find($request['id']);
        return View::make('autos/ver')->with('auto', $autos);
        
    }
    
    public function editarAuto(Request $request)
    {
        $chofer = Chofer::all();
        $auto = Auto::find($request['id']);
        return View::make('autos/editar')->with('auto', $auto) ->with('choferes', $chofer);
        
    }
    
    public function actualizarAuto(Request $request)
    {
        $auto = Auto::find($request['id']);
        $auto->coche = $request['coche'];
        $auto->marca = $request['marca'];
        $auto->modelo = $request['modelo'];
        $auto->ano = $request['ano'];
        $auto->color = $request['color'];
        $auto->patente = $request['patente'];
        $auto->chofer = $request['chofer'];
        $auto->propietario = $request['propietario'];
        $auto->domicilio = $request['domicilio'];
        $auto->localidad = $request['localidad'];
        $auto->tel1 = $request['tel1'];
        $auto->tel2 = $request['tel2'];
        $auto->altaAgencia = $request['altaAgencia'];
        $auto->vencPoliza = $request['vencPoliza'];
        $auto->vencGNC = $request['vencGNC'];
        $auto->vencPagoSeg = $request['vencPagoSeg'];
        $auto->vencHabAuto = $request['vencHabAuto'];
        $auto->gasolero = $request['gasolero'];
        $auto->aire = $request['aire'];
        $auto->odometro = $request['odometro'];
        $auto->radio = $request['radio'];
        $auto->odometroDatosFac = $request['odometroDatosFac'];
        $auto->radioDatosFact = $request['radioDatosFact'];
        $auto->celular = $request['celular'];
        $auto->lavadero = $request['lavadero'];
        $auto->alquiler = $request['alquiler'];
        $auto->previsionMultas = $request['previsionMultas'];
        
        $auto->save();
        
        $autos = Auto::all();
        return View::make('autos/listarAutos')->with('autos', $autos);
    }
    
    public function eliminarAuto(Request $request)
    {
        $auto = Auto::find($request['id']);
        $auto->delete();
        $autos = Auto::all();
        return View::make('autos/listarAutos')->with('autos', $autos);
       
    }

    public function guardarAuto(Request $request)
    {
        $auto = new Auto();
        $auto->coche = $request['coche'];
        $auto->marca = $request['marca'];
        $auto->modelo = $request['modelo'];
        $auto->ano = $request['ano'];
        $auto->color = $request['color'];
        $auto->patente = $request['patente'];
        $auto->chofer = $request['chofer'];
        $auto->propietario = $request['propietario'];
        $auto->domicilio = $request['domicilio'];
        $auto->localidad = $request['localidad'];
        $auto->tel1 = $request['tel1'];
        $auto->tel2 = $request['tel2'];
        $auto->altaAgencia = $request['altaAgencia'];
        $auto->vencPoliza = $request['vencPoliza'];
        $auto->vencGNC = $request['vencGNC'];
        $auto->vencPagoSeg = $request['vencPagoSeg'];
        $auto->vencHabAuto = $request['vencHabAuto'];
        $auto->gasolero = $request['gasolero'];
        $auto->aire = $request['aire'];
        $auto->odometro = $request['odometro'];
        $auto->radio = $request['radio'];
        $auto->odometroDatosFac = $request['odometroDatosFac'];
        $auto->radioDatosFact = $request['radioDatosFact'];
        $auto->celular = $request['celular'];
        $auto->lavadero = $request['lavadero'];
        $auto->alquiler = $request['alquiler'];
        $auto->previsionMultas = $request['previsionMultas'];
        
        $auto->save();
        $autos = Auto::all();
        return View::make('autos/listarAutos')->with('autos', $autos);
    }
    
}
