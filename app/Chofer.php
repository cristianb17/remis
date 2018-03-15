<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model {}
{
    $fillable = [
         'nombre', 'apellido','documento','domicilio', 'localidad','cp', 'telefono',
         'fechaNacimiento', 'celular','vencimientoRegistro', 'ingresoAgencia','previsionMulta', 'saldoCuentaCorriente', 'estado'
    ];

}
