<?php

namespace App\Exports;


use App\Models\PersonalAcademicoPostGrado;
use App\Models\PersonalAdm_ObreroPostGrado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RecursosHumanos_Postgrado implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View{
        return view('ESTADISTICA.ExportsExcel.PersonalPostGrado', [
            'PersonalAcademico'=> PersonalAcademicoPostGrado::get(),
            'PersonalPersonalAdm_Obrero'=> PersonalAdm_ObreroPostGrado::get(),
            
            

        ]);
        
    }
}
