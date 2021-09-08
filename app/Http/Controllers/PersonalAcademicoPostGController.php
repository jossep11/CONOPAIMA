<?php

namespace App\Http\Controllers;

use App\Models\PersonalAcademicoPostGrado;
use App\Models\PersonalAdm_ObreroPostGrado;
use Illuminate\Http\Request;

class PersonalAcademicoPostGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PersonalAcademicoPostGrado = PersonalAcademicoPostGrado::all();
        $PersonalAdm_ObreroPostgrado= PersonalAdm_ObreroPostGrado::all();
       return view('ESTADISTICA.RecursosHumanos.Postgrado.PostGradoLayout')->with('PersonalAcademicoPostGrado', $PersonalAcademicoPostGrado)
       ->with('PersonalAdm_ObreroPostgrado', $PersonalAdm_ObreroPostgrado);
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
        
        $PersonalAcademicoPostGrado= new PersonalAcademicoPostGrado();
        $PersonalAcademicoPostGrado->InputCod_InstitucionAcademico=$request->InputCod_InstitucionAcademico;
        $PersonalAcademicoPostGrado->pais_p_academicoAcademico=$request->pais_p_academicoAcademico;
        $PersonalAcademicoPostGrado->Fecha_de_Ingreso=$request->Fecha_de_Ingreso;
        $PersonalAcademicoPostGrado->Categoria=$request->Categoria;
        $PersonalAcademicoPostGrado->Documento_IDAcademico=$request->Documento_IDAcademico;
        $PersonalAcademicoPostGrado->NroCedulaA_O=$request->NroCedulaA_O;
        $PersonalAcademicoPostGrado->TiempoDedicacion=$request->TiempoDedicacion;
        $PersonalAcademicoPostGrado->TituloAcademico=$request->TituloAcademico;
        $PersonalAcademicoPostGrado->ProfesionAcademico=$request->ProfesionAcademico;
        $PersonalAcademicoPostGrado->Adscripcion=$request->Adscripcion;
        $PersonalAcademicoPostGrado->NombresAcademico=$request->NombresAcademico;
        $PersonalAcademicoPostGrado->ApellidosA_O=$request->ApellidosA_O;
        $PersonalAcademicoPostGrado->Sexo_PersonalAcademico=$request->Sexo_PersonalAcademico;
        $PersonalAcademicoPostGrado->FNacimientoAcademico=$request->FNacimientoAcademico;
        $PersonalAcademicoPostGrado->Comentarios=$request->Comentarios;
        $PersonalAcademicoPostGrado->CondicionLaboralAcademico=$request->CondicionLaboralAcademico;
        
        $PersonalAcademicoPostGrado->save();
        return response()->json($PersonalAcademicoPostGrado);
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
        $PersonalAcademicoPostGrado= PersonalAcademicoPostGrado::find($id);
        $PersonalAcademicoPostGrado->InputCod_InstitucionAcademico=$request->get('EditInputCod_InstitucionAcademico');
        $PersonalAcademicoPostGrado->pais_p_academicoAcademico=$request->get('Editpais_p_academicoAcademico');
        $PersonalAcademicoPostGrado->Fecha_de_Ingreso=$request->get('EditFecha_de_Ingreso');
        $PersonalAcademicoPostGrado->Categoria=$request->get('EditCategoria');
        $PersonalAcademicoPostGrado->Documento_IDAcademico=$request->get('EditDocumento_IDAcademico');
        $PersonalAcademicoPostGrado->NroCedulaA_O=$request->get('EditNroCedulaA_O');
        $PersonalAcademicoPostGrado->TiempoDedicacion=$request->get('EditTiempoDedicacion');
        $PersonalAcademicoPostGrado->TituloAcademico=$request->get('EditTituloAcademico');
        $PersonalAcademicoPostGrado->ProfesionAcademico=$request->get('EditProfesionAcademico');
        $PersonalAcademicoPostGrado->Adscripcion=$request->get('EditAdscripcion');
        $PersonalAcademicoPostGrado->NombresAcademico=$request->get('EditNombresAcademico');
        $PersonalAcademicoPostGrado->ApellidosA_O=$request->get('EditApellidosA_O');
        $PersonalAcademicoPostGrado->Sexo_PersonalAcademico=$request->get('EditSexo_PersonalAcademico');
        $PersonalAcademicoPostGrado->FNacimientoAcademico=$request->get('EditFNacimientoAcademico');
        $PersonalAcademicoPostGrado->Comentarios=$request->get('EditComentarios');
        $PersonalAcademicoPostGrado->CondicionLaboralAcademico=$request->get('EditCondicionLaboralAcademico');
        $PersonalAcademicoPostGrado->save();
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
        $PersonalAcademico = PersonalAcademicoPostGrado::find($id);
        $PersonalAcademico->delete();
        return redirect('/registro_p_postgrado');
    }
}
