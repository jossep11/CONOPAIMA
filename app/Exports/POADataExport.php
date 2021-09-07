<?php

namespace App\Exports;

use App\Models\POA_Data;
use App\Models\DatosResponsablesProyecto;
use App\Models\ObjetivoGeneralProyecto;
use App\Models\ResumenMatriculaIngresoPostGrado;
use App\Models\ResumenMatriculaIngresoPreGrado;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class POADataExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

        public function view(): View{
            return view('POA.Proyecto1.ExportExcel.Proyecto1_Excel', [
                'Users'=> User::get(),
                'ObjetivoGeneral'=> ObjetivoGeneralProyecto::get(),
                'DatosResponsable'=> DatosResponsablesProyecto::get(),
                'ResumenMatriculaPregrado'=> ResumenMatriculaIngresoPreGrado::get(),
                'ResumenMatriculaPostgrado'=> ResumenMatriculaIngresoPostGrado::get(),    
            ]);
            
        }
    
}
