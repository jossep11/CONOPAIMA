<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAdmObrerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_adm__obreros', function (Blueprint $table) {
            $table->id();
            $table->string('InputCod_InstitucionA_O');
            $table->string('pais_p_academicoA_O');
            $table->string('Documento_IDA_O');
            $table->string('NroCedulaA_O');
            $table->string('NombresA_O');
            $table->string('ApellidosA_O');
            $table->string('Sexo_PersonalA_O');
            $table->string('FNacimientoA_O');
            $table->string('FIngresoA_O');
            $table->string('ConLaboralA_O');
            $table->string('DAministrativaA_O');
            $table->string('TipoPersonalA_O');
            $table->string('NivelIEducativaA_O');
            $table->string('ProfesionA_O');
            $table->string('OcupacionA_O');
            $table->string('CapacitacionA_O');
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
        Schema::dropIfExists('personal_adm__obreros');
    }
}
