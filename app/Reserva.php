<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $fillable = [
        'diaHoraViaje', 'avisoDespachador', 'desde', 'hasta','numero', 'piso', 'depto', 'precioEstimado', 'desdeEstimado', 'hastaEstimado', 'minutoPreaviso', 'tipo','observaciones', 'repetir',
        'repeticionDeViaje', 'desdeRepeticion', 'hastaRepeticion', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo', 'estado'
    ];
}
