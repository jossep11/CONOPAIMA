<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAcademicoPostGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_academico_post_grados', function (Blueprint $table) {
            $table->id();
            $table->string('InputCod_InstitucionAcademico');
            $table->string('pais_p_academicoAcademico');
            $table->string('Fecha_de_Ingreso');
            $table->string('Categoria');
            $table->string('Documento_IDAcademico');
            $table->string('NroCedulaA_O');
            $table->string('TiempoDedicacion');
            $table->string('TituloAcademico');
            $table->string('ProfesionAcademico');
            $table->string('Adscripcion');
            $table->string('NombresAcademico');
            $table->string('ApellidosA_O');
            $table->string('Sexo_PersonalAcademico');
            $table->string('FNacimientoAcademico');
            $table->string('Comentarios');
            $table->string('CondicionLaboralAcademico');
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
        Schema::dropIfExists('personal_academico_post_grados');
    }
}
