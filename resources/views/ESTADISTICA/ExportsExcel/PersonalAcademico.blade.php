<table>
    <thead>
    <tr>
        <th><img src="{{ public_path().'/logounellez.jpg' }}" /></th>
        <th  colspan="16" style="text-align: center">
    <strong>
        ESTADÍSTICA
    </strong>
        </th>
        <th>
            <strong>
               {{-- 
                Descargado por: {{ $user = auth()->user()->name }}comment --}}
            </strong>
        </th>
     
    </tr>
    </thead>
    
    <tbody>
        <tr>
           
            <td></td>
            <td></td>
            <td></td>
        </tr>

{{-- comment --}}

    <tr>
        <th colspan="17"  style="text-align: center;  height: 40px; vertical-align: center;"><strong> Personal Académico de Pregrado </strong></th>
        <td></td>
    </tr>

    <tr>


        <th colspan="3" style="text-align: center">Codígo de la Institucaón</th>
        <th colspan="3" style="text-align: center">Pais</th>
        <th colspan="3" style="text-align: center">Documento de Identificación</th>
        <th colspan="3" style="text-align: center">Número de Cédula/Pasaporte</th>
        <th colspan="3" style="text-align: center">Apellidos</th>
        <th colspan="3" style="text-align: center">Nombres</th>
        <th colspan="3" style="text-align: center">Sexo</th>
        <th colspan="3" style="text-align: center">Fecha de Nacimiento</th>
        <th colspan="3" style="text-align: center">Fecha de Ingreso</th>
        <th colspan="3" style="text-align: center">Condición Laboral</th>
        <th colspan="3" style="text-align: center">Categoría</th>
        <th colspan="3" style="text-align: center">Categoría Inicial</th>
        <th colspan="3" style="text-align: center">Tiempo de Dedicación</th>
        <th colspan="3" style="text-align: center">Título Académico</th>
        <th colspan="3" style="text-align: center">Profesión</th>
        <th colspan="3" style="text-align: center">Adscripción</th>


    </tr>

    @foreach ($PersonalAcademico as $DatoResponsable)
<tr>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Institucion_code}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Pais}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Documento_De_Identificacion}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->CI}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Apellidos}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Nombres}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Sexo}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Fecha_Nacimiento}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Fecha_Ingreso}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Condicion_Laboral}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Categoria}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Categoria_Inicial}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Tiempo_Dedicacion}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->TituloAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Profesion}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Adscripcion}}</td>
</tr>
    @endforeach
    {{-- comment --}}





  {{-- personal obrero --}}

  <tr>
    <th colspan="17"  style="text-align: center;  height: 40px; vertical-align: center;"><strong> Personal Administrativo y Obrero de Pregrado</strong></th>
    <td></td>
</tr>

<tr>


    <th colspan="3" style="text-align: center">Codígo de la Institucaón</th>
    <th colspan="3" style="text-align: center">Pais</th>
    <th colspan="3" style="text-align: center">Documento de Identificación</th>
    <th colspan="3" style="text-align: center">Número de Cédula/Pasaporte</th>
    <th colspan="3" style="text-align: center">Apellidos</th>
    <th colspan="3" style="text-align: center">Nombres</th>
    <th colspan="3" style="text-align: center">Sexo</th>
    <th colspan="3" style="text-align: center">Fecha de Nacimiento</th>
    <th colspan="3" style="text-align: center">Fecha de Ingreso</th>
    <th colspan="3" style="text-align: center">Condición Laboral</th>
    <th colspan="3" style="text-align: center">Nombre de la Dependencia Adm</th>
    <th colspan="3" style="text-align: center">Tipo de Personal</th>
    <th colspan="3" style="text-align: center">Nivel de Instrucción Educativa</th>
    <th colspan="3" style="text-align: center">Profesión</th>
    <th colspan="3" style="text-align: center">Ocupación</th>
    <th colspan="3" style="text-align: center">Capacitación</th>


</tr>

@foreach ($PersonalPersonalAdm_Obrero as $DatoResponsable)
<tr>
<td colspan="3" style="text-align: center">{{$DatoResponsable->InputCod_InstitucionA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->pais_p_academicoA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->Documento_IDA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->NroCedulaA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->NombresA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->ApellidosA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->Sexo_PersonalA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->FNacimientoA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->FIngresoA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->ConLaboralA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->DAministrativaA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->TipoPersonalA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->NivelIEducativaA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->ProfesionA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->OcupacionA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->CapacitacionA_O}}</td>
</tr>
@endforeach
  



    </tbody>
</table>