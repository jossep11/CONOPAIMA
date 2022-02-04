@extends('ESTADISTICA.RecursosHumanos.layout')

@section('css')

@endsection

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="barra">
            <h1 id="" class="IdentificadorIndex">Recusos humanos-Postgrado</h1>  
            <a href="/Reporte_Postgrado" class="barra generalxls"><i class="fas fa-file-excel"></i> <div>Generar XLSX</div></a>  
            <!-- Button trigger modal -->            
            </div>
        </div>
      
        <div class="accordion accordion-secondary">
           
            {{-- Personal Academico --}}
            @include('ESTADISTICA.RecursosHumanos.Postgrado.P_Academico_POSTGRADO')

           {{-- Personal administrativo y obrero --}}
           @include('ESTADISTICA.RecursosHumanos.Postgrado.P_Administrativo_Obrero_PostGrado')
           
        </div>


    </div>
</div>


@endsection