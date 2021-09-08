<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_academicos', function (Blueprint $table) {
            $table->id();
            $table->integer('Institucion_code');
            $table->string('Pais');
            $table->string('Documento_De_Identificacion');
            $table->string('CI');
            $table->string('Apellidos');
            $table->string('Nombres');
            $table->string('Sexo');
            $table->string('Fecha_Nacimiento');
            $table->string('Fecha_Ingreso');
            $table->string('Condicion_Laboral');
            $table->string('Categoria');
            $table->string('Categoria_Inicial');
            $table->string('Tiempo_Dedicacion');
            $table->string('TituloAcademico');
            $table->string('Profesion');
            $table->string('Adscripcion');
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
        Schema::dropIfExists('personal_academicos');
    }
}
