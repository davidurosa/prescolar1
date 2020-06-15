<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trasportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cedula_transporte');
            $table->string('nombre_transporte');
            $table->string('apellido_transporte');
            $table->string('telefono_transporte');
            $table->string('direcion_transporte');
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
        Schema::dropIfExists('trasportes');
    }
}
