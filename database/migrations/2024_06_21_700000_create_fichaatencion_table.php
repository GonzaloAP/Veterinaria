<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaAtencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichaatencion', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('idestado')->unsigned();          
            $table->integer('idmascota')->unsigned();
            $table->boolean('estado');          
            $table->foreign('idestado')->references('id')->on('estado')->onDelete('cascade')->onUpdate('cascade');                    
            $table->foreign('idmascota')->references('id')->on('mascota')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('fichaatencion');
    }
}
