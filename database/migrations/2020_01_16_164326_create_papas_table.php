<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cedula_papa')->unique();
            $table->string('nombre_papa');
            $table->string('apellido_papa');
            $table->string('trabajo_de_papa');
            $table->string('telefono_papa');
            $table->date('FN_papa')->nullable();
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
        Schema::dropIfExists('papas');
    }
}
