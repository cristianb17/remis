<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
use App\Chofer;
use App\Auto;

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

    public function listarChoferes()
    {
        $choferes = Chofer::all();
        return View::make('choferes/listarChoferes')->with('choferes', $choferes);

    }
    
    public function editarChofer(Request $request)
    {
        $autos = Auto::all();
        $chofer = Chofer::find($request['id']);
        return View::make('choferes/editar')->with('chofer', $chofer)->with('autos', $autos);
        
    }
    
    public function crearChofer()
    {
        $autos = Auto::all();
        return View::make('choferes/chofer')->with('autos', $autos);
        
    }
    
    public function guardarChofer(Request $request)
    {      
        $validator  = $request->validate([
            'documento'  => 'required|unique:chofers'
        ]);
            
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
        $chofer->auto_id= $request['auto'];
        
        $chofer->estado= '0';
        
        $chofer->save();
        $choferes = Chofer::all();
        return View::make('choferes/listarChoferes')->with('choferes', $choferes);
    }
    
    public function eliminarChofer(Request $request)
    {
        $chofer = Chofer::find($request['id']);
        $chofer->delete();
        $choferes = Chofer::all();
        return View::make('choferes/listarChoferes')->with('choferes', $choferes);
        
    }
    
    public function verChofer(Request $request)
    {
        $chofer = Chofer::find($request['id']);
        return View::make('choferes/ver')->with('chofer', $chofer);
        
    }
    
    public function buscarChofer(Request $request)
    {
        if($request['dato'] == ''){
            $choferes = Chofer::all();
            return View::make('choferes/listarChoferes')->with('choferes', $choferes);
        }
        $choferes = Chofer::where('apellido', $request['dato'])->orWhere('documento', 'like', $request['dato'])
        ->orWhere('nombre', 'like', $request['dato'])->get();
        
        return View::make('choferes/listarChoferes')->with('choferes', $choferes);
        
    }
    
    
    public function actualizarChofer(Request $request)
    {        
        $validator  = $request->validate([
            'documento' => 'unique:chofers,documento,'.$request->id
        ]);
        
        $chofer = Chofer::find($request['id']);
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
        $chofer->auto_id= $request['auto'];
        
        $chofer->save();
        $choferes = Chofer::all();
        return View::make('choferes/listarChoferes')->with('choferes', $choferes);
    }
    
    public function activarChofer(Request $request)
    {
        $chofer = Chofer::find($request['id']);
        if($chofer->estado == 0)
            $chofer->estado = '1';
        else 
            $chofer->estado = '0';
            
        $chofer->save();
        $choferes = Chofer::all();
        return View::make('choferes/listarChoferes')->with('choferes', $choferes);
    }
}
