<?php

namespace App\Http\Controllers;


use App\Exports;
use App\Exports\Postgradoo;
use App\Models\PersonalAdm_ObreroPostGrado;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PersonalAdmObreroPostGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $personalAdmObrero=new PersonalAdm_ObreroPostGrado();
        $personalAdmObrero->InputCod_InstitucionA_O=$request->InputCod_InstitucionAcademico;
        $personalAdmObrero->pais_p_academicoA_O=$request->pais_p_academicoAcademico;
        $personalAdmObrero->Documento_IDA_O=$request->Documento_IDAcademico;
        $personalAdmObrero->NroCedulaA_O=$request->NroCedulaA_O;
        $personalAdmObrero->ApellidosA_O=$request->ApellidosA_O;
        $personalAdmObrero->NombresA_O=$request->NombresAcademico;
        $personalAdmObrero->Sexo_PersonalA_O=$request->Sexo_PersonalAcademico;
        $personalAdmObrero->FNacimientoA_O=$request->FNacimientoAcademico;
        $personalAdmObrero->Fecha_de_Ingreso=$request->Fecha_de_Ingreso;
        $personalAdmObrero->CondicionLaboralA_O=$request->CondicionLaboralAcademico;
        $personalAdmObrero->DependenciaAdministrativa=$request->DependenciaAdministrativa;
        $personalAdmObrero->TipoPersonal=$request->TipoPersonal;
        $personalAdmObrero->NivelInstruccionEduc=$request->NivelInstruccionEduc;
        $personalAdmObrero->Capacitacion=$request->Capacitacion;
        $personalAdmObrero->Comentarios=$request->Comentarios;
        $personalAdmObrero->save();
        
        return response()->json($personalAdmObrero);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $PersonalObreroYAdmin= PersonalAdm_ObreroPostGrado::find($id);
        $PersonalObreroYAdmin->InputCod_InstitucionA_O=$request->get('Edit_InputCod_InstitucionAcademicoPost');
        $PersonalObreroYAdmin->pais_p_academicoA_O=$request->get('Edit_pais_p_academicoAcademicoPost');
        $PersonalObreroYAdmin->Documento_IDA_O=$request->get('Edit_Documento_IDAcademicoPost');
        $PersonalObreroYAdmin->NroCedulaA_O=$request->get('Edit_NroCedulaA_OPost');
        $PersonalObreroYAdmin->ApellidosA_O=$request->get('Edit_NombresAcademicoPost');
        $PersonalObreroYAdmin->NombresA_O=$request->get('Edit_ApellidosA_OPost');
        $PersonalObreroYAdmin->Sexo_PersonalA_O=$request->get('Edit_Sexo_PersonalAcademicoPost');
        $PersonalObreroYAdmin->FNacimientoA_O=$request->get('Edit_FNacimientoAcademicoPost');
        $PersonalObreroYAdmin->Fecha_de_Ingreso=$request->get('Edit_Fecha_de_IngresoPost');
        $PersonalObreroYAdmin->CondicionLaboralA_O=$request->get('Edit_CondicionLaboralAcademicoPost');
        $PersonalObreroYAdmin->DependenciaAdministrativa=$request->get('Edit_DependenciaAdministrativaA_OPost');
        $PersonalObreroYAdmin->TipoPersonal=$request->get('Edit_TipoPersonalA_OPost');
        $PersonalObreroYAdmin->NivelInstruccionEduc=$request->get('Edit_NivelInstruccionEducA_OPost');
        $PersonalObreroYAdmin->Capacitacion=$request->get('Edit_CapacitacionA_OPost');
        $PersonalObreroYAdmin->Comentarios=$request->get('Edit_ComentariosPost');
        $PersonalObreroYAdmin->save();
        return redirect('/registro_p_postgrado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PersonalAdm_ObreroPost = PersonalAdm_ObreroPostGrado::find($id);
        $PersonalAdm_ObreroPost->delete();
        return redirect('/registro_p_postgrado');
        
    }

    public function export2()  
    {
        
      //  return Excel::download(new Postgradoo, 'Personal_Postgrado.xlsx');
    }

}
