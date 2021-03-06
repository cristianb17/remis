<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Tipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ClienteController extends Controller
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
    
    public function listarClientes()
    {
        $clientes = Clientes::all();
        return View::make('clientes/listarClientes')->with('clientes', $clientes);
    }
    
    public function eliminarCliente(Request $request)
    {
        $cliente = Clientes::find($request['id']);
        $cliente->delete();
        $clientes = Clientes::all();
        return View::make('clientes/listarClientes')->with('clientes', $clientes);
    }
    
    public function crearCliente()
    {
        $tipos = Tipos::all();
        return View::make('clientes/cliente')->with('tipos', $tipos);
        
    }
    
    public function editarCliente(Request $request)
    {
        $tipos = Tipos::all();
        $cliente = Clientes::find($request['id']);
        return View::make('clientes/editar')->with('cliente', $cliente)->with('tipos', $tipos);
    }
    
    public function ver(Request $request)
    {
        $cliente = Clientes::find($request['id']);
        return View::make('clientes/ver')->with('cliente', $cliente);
        
    }
    
    public function guardarCliente(Request $request)
    {
        $cliente = new Clientes();
        $cliente->nombre = $request['nombre'];
        $cliente->apellido= $request['apellido'];
        $cliente->documento= $request['documento'];
        $cliente->domicilio= $request['domicilio'];
        $cliente->localidad= $request['localidad'];
        $cliente->cp= $request['cp'];
        $cliente->piso= $request['piso'];
        $cliente->depto= $request['depto'];
        $cliente->destino= $request['destino'];
        $cliente->viajes= $request['viajes'];
        $cliente->importe= $request['importe'];
        $cliente->precio= $request['precio'];
        $cliente->descuento= $request['descuento'];
        $cliente->telefono1= $request['tel1'];
        $cliente->telefono2= $request['tel2'];
        $cliente->telefono3= $request['tel3'];
        $cliente->telefono4= $request['tel4'];
        $cliente->telefono5= $request['tel5'];
        $cliente->tipo_id= $request['tipos'];//clientes
        
        $cliente->save();
        $clientes = Clientes::all();
        return View::make('clientes/listarClientes')->with('clientes', $clientes);
    }
    
    public function actualizarCliente(Request $request)
    {
     
        $cliente = Clientes::find($request['id']);
        $cliente->nombre = $request['nombre'];
        $cliente->apellido= $request['apellido'];
        $cliente->documento= $request['documento'];
        $cliente->domicilio= $request['domicilio'];
        $cliente->localidad= $request['localidad'];
        $cliente->cp= $request['cp'];
        $cliente->piso= $request['piso'];
        $cliente->depto= $request['depto'];
        $cliente->destino= $request['destino'];
        $cliente->viajes= $request['viajes'];
        $cliente->importe= $request['importe'];
        $cliente->precio= $request['precio'];
        $cliente->descuento= $request['descuento'];
        $cliente->telefono1= $request['tel1'];
        $cliente->telefono2= $request['tel2'];
        $cliente->telefono3= $request['tel3'];
        $cliente->telefono4= $request['tel4'];
        $cliente->telefono5= $request['tel5'];
        $cliente->tipo_id= $request['tipos'];
        $cliente->save();
        $clientes = Clientes::all();
        return View::make('clientes/listarClientes')->with('clientes', $clientes);
    }
    
    public function buscarCliente(Request $request)
    {
        
        if($request['dato'] == ''){
            $clientes = Clientes::all();
            return View::make('clientes/listarClientes')->with('clientes', $clientes);
        }
        $clientes = Clientes::where('apellido', $request['dato'])->orWhere('documento', 'like', $request['dato'])
        ->orWhere('nombre', 'like', $request['dato'])->get();
        return View::make('clientes/listarClientes')->with('clientes', $clientes);
        
    }
    
}
