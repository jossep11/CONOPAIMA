@extends('ESTADISTICA.RecursosHumanos.layout')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1 id="" class="IdentificadorIndex">Recusos humanos-Pregrado</h1>  
            <a href="/Reporte_Pregrado" class="barra generalxls"><i class="fas fa-file-excel"></i> <div>Generar XLSX</div></a>  
            <!-- Button trigger modal -->            
            </div>
        </div>
      
        <div class="accordion accordion-secondary">
           
            {{-- Personal Academico --}}
            @include('ESTADISTICA.RecursosHumanos.Pregrado.PersonalAcademicoCollapse')

           {{-- Personal administrativo y obrero --}}
           @include('ESTADISTICA.RecursosHumanos.Pregrado.PersonalAyOCollapse')
           
        </div>


    </div>
</div>


@endsection