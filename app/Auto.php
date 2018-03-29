<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function chofer()
    {
        return $this->belongsTo('App\Chofer');
    }
    
    public  $fillable = [
        'id', 'marca','modelo','ano', 'color','patente', 'chofer',
        'propietario', 'domicilio','localidad', 'tel1','tel2', 'altaAgencia'
        , 'vencPoliza', 'vencGNC', 'vencPagoSeg', 'vencHabAuto', 'gasolero'
        , 'aire', 'odometro', 'radio', 'odometroDatosFac', 'radioDatosFact', 'celular'
        , 'lavadero', 'alquiler', 'previsionMultas', 'estado', 'ultimoDestino', 'horaUltimoDestino', 'tipoUltimoDestino'
        
    ];
}
