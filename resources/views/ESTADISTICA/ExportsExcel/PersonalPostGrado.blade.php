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
                {{-- Descargado por: {{ $user = auth()->user()->name }} --}}
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
        <th colspan="17"  style="text-align: center;  height: 40px; vertical-align: center;"><strong> Personal Académico de Postgrado </strong></th>
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
        <th colspan="3" style="text-align: center">Nivel de Instrucción</th>

        <th colspan="3" style="text-align: center">Tiempo de Dedicación</th>
        <th colspan="3" style="text-align: center">Categoría</th>
        <th colspan="3" style="text-align: center">Capacitación</th>
        <th colspan="3" style="text-align: center">Comentarios</th>
        <th colspan="3" style="text-align: center">Adscripción</th>


    </tr>

    @foreach ($PersonalAcademico as $DatoResponsable)
<tr>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->InputCod_InstitucionAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->pais_p_academicoAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Documento_IDAcademico}}</td>

    <td colspan="3" style="text-align: center">{{$DatoResponsable->NroCedulaA_O}}</td>

    <td colspan="3" style="text-align: center">{{$DatoResponsable->ApellidosA_O}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->NombresAcademico}}</td>

    <td colspan="3" style="text-align: center">{{$DatoResponsable->Sexo_PersonalAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->FNacimientoAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Fecha_de_Ingreso}}</td>


    <td colspan="3" style="text-align: center">{{$DatoResponsable->CondicionLaboralAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->TituloAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->TiempoDedicacion}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Categoria}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->TituloAcademico}}</td>
    <td colspan="3" style="text-align: center">{{$DatoResponsable->Comentarios}}</td>
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
    <th colspan="3" style="text-align: center">Capacitación</th>
    <th colspan="3" style="text-align: center">Comentarios</th>


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
<td colspan="3" style="text-align: center">{{$DatoResponsable->Fecha_de_Ingreso}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->CondicionLaboralA_O}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->DependenciaAdministrativa}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->TipoPersonal}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->NivelInstruccionEduc}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->Capacitacion}}</td>
<td colspan="3" style="text-align: center">{{$DatoResponsable->Comentarios}}</td>
</tr>
@endforeach
  



    </tbody>
</table>