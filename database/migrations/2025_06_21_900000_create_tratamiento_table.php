<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->date('fechar');            
            $table->integer('plazo');
            $table->integer('iddetalle')->unsigned();
            $table->boolean('estado');
            $table->foreign('iddetalle')->references('id')->on('detalle')->onDelete('cascade')->onUpdate('cascade');                               
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
        Schema::dropIfExists('tratamiento');
    }
}
