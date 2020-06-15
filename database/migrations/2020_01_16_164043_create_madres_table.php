<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cedula_mama')->unique();
            $table->string('nombre_mama');
            $table->date('FN_mama')->nullable();
            $table->string('apellido_mama');
            $table->string('trabajo_de_mama');
            $table->string('telefono_mama');
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
        Schema::dropIfExists('madres');
    }
}
