<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChofersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chofers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('documento')->unique();
            $table->string('domicilio');
            $table->string('localidad');
            $table->string('cp');
            $table->string('telefono');
            $table->date('fechaNacimiento');
            $table->string('celular');
            $table->date('vencimientoRegistro');
            $table->date('ingresoAgencia');
            $table->string('previsionMulta');
            $table->string('saldoCuentaCorriente');
            $table->rememberToken();
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
        Schema::dropIfExists('chofer');
    }
}
