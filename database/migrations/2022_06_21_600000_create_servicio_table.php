<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('precio');
            $table->integer('precioTotal');
            $table->integer('idPersonal');
            $table->boolean('estado');          
            $table->foreign('idPersonal')->references('id')->on('personal')->onDelete('cascade')->onUpdate('cascade');                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
