<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();;
            $table->string('apellido')->nullable();;
            $table->integer('documento')->unique();
            $table->string('domicilio')->nullable();;
            $table->string('localidad')->nullable();;
            $table->string('cp')->nullable();
            $table->string('piso')->nullable();
            $table->string('depto')->nullable();
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();;
            $table->string('telefono3')->nullable();;
            $table->string('telefono4')->nullable();;
            $table->string('telefono5')->nullable();;
            $table->string('destino')->nullable();;
            $table->string('viajes')->nullable();;
            $table->string('importe')->nullable();;
            $table->string('precio')->nullable();;
            $table->string('descuento')->nullable();
            $table->integer('tipo_id');
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
        Schema::dropIfExists('clientes');
    }
}
