<?php

namespace App\Exports;

use App\Models\PersonalAcademico;
use App\Models\PersonalAdm_Obrero;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RecursosHumanos_Pregrado implements FromView
{

    public function view(): View{
        return view('ESTADISTICA.ExportsExcel.PersonalAcademico', [
            'PersonalAcademico'=> PersonalAcademico::get(),
            'PersonalPersonalAdm_Obrero'=> PersonalAdm_Obrero::get(),
            
            

        ]);
        
    }
   
}
