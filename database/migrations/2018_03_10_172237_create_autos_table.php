<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('marca')->nullable();;
            $table->string('modelo')->nullable();;
            $table->string('ano')->nullable();;
            $table->string('color')->nullable();;
            $table->string('patente')->nullable();;
            $table->string('chofer')->nullable();;
            $table->string('propietario')->nullable();;
            $table->string('domicilio')->nullable();;
            $table->string('localidad')->nullable();;
            $table->string('tel1')->nullable();;
            $table->string('tel2')->nullable();;
            $table->date('altaAgencia')->nullable();;
            $table->date('vencPoliza')->nullable();
            $table->date('vencGNC')->nullable();
            $table->date('vencPagoSeg')->nullable();
            $table->date('vencHabAuto')->nullable();
            $table->boolean('gasolero');
            $table->boolean('aire');
            $table->boolean('odometro');
            $table->boolean('radio');
            $table->boolean('odometroDatosFac');
            $table->boolean('radioDatosFact');
            $table->boolean('celular');
            $table->boolean('lavadero');
            $table->boolean('alquiler');
            $table->boolean('previsionMultas');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    public  $fillable = [
        'coche', 'marca','modelo','ano', 'color','patente', 'chofer',
        'propietario', 'domicilio','localidad', 'tel1','tel2', 'altaAgencia'
        , 'vencPoliza', 'vencGNC', 'vencPagoSeg', 'vencHabAuto', 'gasolero'
        , 'aire', 'odometro', 'radio', 'odometroDatosFac', 'radioDatosFact', 'celular'
        , 'lavadero', 'alquiler', 'previsionMultas'
        
    ];
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
