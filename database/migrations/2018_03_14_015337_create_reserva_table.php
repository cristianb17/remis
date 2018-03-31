<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('diaHoraViaje')->nullable();
            $table->string('avisoDespachador')->nullable();;
            $table->string('desde')->nullable();;
            $table->string('hasta')->nullable();;
            $table->string('numero')->nullable();;
            $table->string('piso')->nullable();;
            $table->string('depto')->nullable();;
            $table->string('precioEstimado')->nullable();;
            $table->string('desdeEstimado')->nullable();;
            $table->string('hastaEstimado')->nullable();
            $table->string('minutoPreaviso')->nullable();
            
            $table->string('tipo')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('repetir')->nullable();
            $table->string('repeticionDeViaje')->nullable();
            $table->string('desdeRepeticion')->nullable();
            $table->string('hastaRepeticion')->nullable();
            $table->string('lunes')->nullable();
            $table->string('martes')->nullable();
            $table->string('miercoles')->nullable();
            $table->string('jueves')->nullable();
            $table->string('viernes')->nullable();
            $table->string('sabado')->nullable();
            $table->string('domingo')->nullable();
            
            $table->boolean('estado')->nullable();
            $table->float('montoReal')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
