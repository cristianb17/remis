<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Http\Request;

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
        return view('autos/auto');
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
        return view('home');
    }
    
}
