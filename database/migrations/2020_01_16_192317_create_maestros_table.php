<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('cedula_maestro'); 
            $table->string('nombre_maestro');
            $table->string('apellido_maestro');
            $table->string('cargo');
            $table->date('fecha_nacimiento_maestro');
            $table->string('telefono_maestro');
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
        Schema::dropIfExists('maestros');
    }
}
