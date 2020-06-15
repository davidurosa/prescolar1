<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('codigo_estudiante');
            $table->string('nombre_estudiante');
            $table->string('apellido_estudiante');
            $table->Integer('targeta_de_vacunacion');
            $table->string('lugar_de_nacimiento');
            $table->double('peso', 8, 2);
            $table->string('talla');
            $table->date('fecha_nacimiento_estudiante');
            $table->string('sexo_estudiante');
            $table->unsignedBigInteger('id_encargado');
            $table->foreign('id_encargado')->references('id')->on('encargados');
            $table->unsignedBigInteger('id_transporte');
            $table->foreign('id_transporte')->references('id')->on('trasportes');
            $table->unsignedBigInteger('id_papa');
            $table->foreign('id_papa')->references('id')->on('papas');
            $table->unsignedBigInteger('id_mama');
            $table->foreign('id_mama')->references('id')->on('madres');
            $table->unsignedBigInteger('id_seccion');
            $table->foreign('id_seccion')->references('id')->on('seccions');
            $table->string ('direccion_estudiante');
            $table->string('tipo_sangre');
            $table->string('alergias');
            $table->string('operaciones');
            $table->string('discapacidad');
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
        Schema::dropIfExists('estudiantes');
    }
}
