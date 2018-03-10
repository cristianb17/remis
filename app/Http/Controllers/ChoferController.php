<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Chofer;

class ChoferController extends Controller
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

    public function crearChofer()
    {
        return view('choferes/chofer');
    }
    
    public function guardarChofer(Request $request)
    {
        $chofer = new Chofer();
        $chofer->nombre = $request['nombre'];
        $chofer->apellido= $request['apellido'];
        $chofer->documento= $request['documento'];
        $chofer->domicilio= $request['domicilio'];
        $chofer->localidad= $request['localidad'];
        $chofer->cp= $request['cp'];
        $chofer->telefono= $request['telefono'];
        $chofer->fechaNacimiento = $request['fechaNacimiento'];
        $chofer->celular= $request['celular'];
        $chofer->vencimientoRegistro= $request['vencimientoRegistro'];
        $chofer->ingresoAgencia= $request['ingresoAgencia'];
        $chofer->previsionMulta= $request['previsionMulta'];
        $chofer->saldoCuentaCorriente= $request['saldoCuentaCorriente'];
        
        $chofer->save();
        return view('home');
        
    }
}
