<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('especie')->unique();
            $table->string('raza');
            $table->string('sexo');
            $table->integer('edad');
            $table->integer('idCliente');
            $table->foreign('idCliente')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('estado');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascota');
    }
}
