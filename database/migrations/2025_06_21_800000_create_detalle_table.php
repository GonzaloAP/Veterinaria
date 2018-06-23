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
            $table->increments('id');
            $table->integer('idficha')->unsigned();
            $table->integer('idservicio')->unsigned();              
            $table->boolean('estado');          
            $table->foreign('idficha')->references('id')->on('fichaatencion')->onDelete('cascade')->onUpdate('cascade');                    
            $table->foreign('idservicio')->references('id')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('detalle');
    }
}
