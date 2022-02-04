<?php

namespace App\Http\Controllers;

use App\Models\PersonalAdm_Obrero;
use Illuminate\Http\Request;

class PersonalAdministratObreroPreController extends Controller
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
        $PersonalAdm_Obrero= new PersonalAdm_Obrero();
        $PersonalAdm_Obrero->InputCod_InstitucionA_O=$request->InputCod_InstitucionA_O;
        $PersonalAdm_Obrero->pais_p_academicoA_O=$request->pais_p_academicoA_O;
        $PersonalAdm_Obrero->Documento_IDA_O=$request->Documento_IDA_O;
        $PersonalAdm_Obrero->NroCedulaA_O=$request->NroCedulaA_O;
        $PersonalAdm_Obrero->NombresA_O=$request->NombresA_O;
        $PersonalAdm_Obrero->ApellidosA_O=$request->ApellidosA_O;
        $PersonalAdm_Obrero->Sexo_PersonalA_O=$request->Sexo_PersonalA_O;
        $PersonalAdm_Obrero->FNacimientoA_O=$request->FNacimientoA_O;
        $PersonalAdm_Obrero->FIngresoA_O=$request->FIngresoA_O;
        $PersonalAdm_Obrero->ConLaboralA_O=$request->ConLaboralA_O;
        $PersonalAdm_Obrero->DAministrativaA_O=$request->DAministrativaA_O;
        $PersonalAdm_Obrero->TipoPersonalA_O=$request->TipoPersonalA_O;
        $PersonalAdm_Obrero->NivelIEducativaA_O=$request->NivelIEducativaA_O;
        $PersonalAdm_Obrero->ProfesionA_O=$request->ProfesionA_O;
        $PersonalAdm_Obrero->OcupacionA_O=$request->OcupacionA_O;
        $PersonalAdm_Obrero->CapacitacionA_O=$request->CapacitacionA_O;
        
        $PersonalAdm_Obrero->save();
        return response()->json($PersonalAdm_Obrero);
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
        $PersonalAdm_Obrero = PersonalAdm_Obrero::find($id);
        $PersonalAdm_Obrero->InputCod_InstitucionA_O=$request->UpdateInputCod_InstitucionA_O;
        $PersonalAdm_Obrero->pais_p_academicoA_O=$request->Updatepais_p_academicoA_O;
        $PersonalAdm_Obrero->Documento_IDA_O=$request->UpdateDocumento_IDA_O;
        $PersonalAdm_Obrero->NroCedulaA_O=$request->UpdateNroCedulaA_O;
        $PersonalAdm_Obrero->NombresA_O=$request->UpdateNombresA_O;
        $PersonalAdm_Obrero->ApellidosA_O=$request->UpdateApellidosA_O;
        $PersonalAdm_Obrero->Sexo_PersonalA_O=$request->UpdateSexo_PersonalA_O;
        $PersonalAdm_Obrero->FNacimientoA_O=$request->UpdateFNacimientoA_O;
        $PersonalAdm_Obrero->FIngresoA_O=$request->UpdateFIngresoA_O;
        $PersonalAdm_Obrero->ConLaboralA_O=$request->UpdateConLaboralA_O;
        $PersonalAdm_Obrero->DAministrativaA_O=$request->UpdateDAministrativaA_O;
        $PersonalAdm_Obrero->TipoPersonalA_O=$request->UpdateTipoPersonalA_O;
        $PersonalAdm_Obrero->NivelIEducativaA_O=$request->UpdateNivelIEducativaA_O;
        $PersonalAdm_Obrero->ProfesionA_O=$request->UpdateProfesionA_O;
        $PersonalAdm_Obrero->OcupacionA_O=$request->UpdateOcupacionA_O;
        $PersonalAdm_Obrero->CapacitacionA_O=$request->UpdateCapacitacionA_O;

        $PersonalAdm_Obrero->save();
        return redirect('/pa_pregrado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PersonalAdm_Obrero = PersonalAdm_Obrero::find($id);
        $PersonalAdm_Obrero->delete();
        return redirect('/pa_pregrado');
        
    }
}
