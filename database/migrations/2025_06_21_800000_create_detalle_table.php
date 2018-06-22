<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->integer('idFicha');
            $table->integer('idServicio');
            $table->primary(['idFicha','idServicio']);            
            $table->boolean('estado');          
            $table->foreign('idFicha')->references('id')->on('fichaatencion')->onDelete('cascade')->onUpdate('cascade');                    
            $table->foreign('idServicio')->references('id')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle');
    }
}
