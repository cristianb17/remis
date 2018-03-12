<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $fillable = [
        'nombre', 'apellido', 'razonSocial', 'documento','domicilio', 'piso', 'depto', 'localidad','cp', 'descuento', 'destino', 'viajes', 'importes', 
        'telefono1', 'telefono2','telefono3','telefono4','telefono5', 'fechaAlta'
    ];
}
