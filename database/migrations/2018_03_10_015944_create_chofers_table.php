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
            $table->string('nombre')->nullable();;
            $table->string('apellido')->nullable();;
            $table->integer('documento')->unique();
            $table->string('domicilio')->nullable();;
            $table->string('localidad')->nullable();;
            $table->string('cp')->nullable();;
            $table->string('telefono')->nullable();;
            $table->date('fechaNacimiento')->nullable();;
            $table->string('celular')->nullable();;
            $table->date('vencimientoRegistro')->nullable();;
            $table->date('ingresoAgencia')->nullable();;
            $table->string('previsionMulta')->nullable();;
            $table->string('saldoCuentaCorriente')->nullable();;
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
