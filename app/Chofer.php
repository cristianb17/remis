<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model {}
{
    
     function auto()
    {
        return $this->hasOne('App\Autos');
    }
    
    $fillable = [
        'nombre', 'apellido', 'auto_id','documento','domicilio', 'localidad','cp', 'telefono',
         'fechaNacimiento', 'celular','vencimientoRegistro', 'ingresoAgencia','previsionMulta', 'saldoCuentaCorriente', 'estado'
    ];

}
