<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAdmObreroPostGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_adm__obrero_post_grados', function (Blueprint $table) {
            $table->string('InputCod_InstitucionA_O');
            $table->string('pais_p_academicoA_O');
            $table->string('Documento_IDA_O');
            $table->string('NroCedulaA_O');
            $table->string('ApellidosA_O');
            $table->string('NombresA_O');
            $table->string('Sexo_PersonalA_O');
            $table->string('FNacimientoA_O');
            $table->string('Fecha_de_Ingreso');
            $table->string('CondicionLaboralA_O');
            $table->string('DependenciaAdministrativa');
            $table->string('TipoPersonal');
            $table->string('NivelInstruccionEduc');
            $table->string('Capacitacion');
            $table->string('Comentarios');
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
        Schema::dropIfExists('personal_adm__obrero_post_grados');
    }
}
