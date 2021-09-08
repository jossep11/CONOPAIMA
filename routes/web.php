<?php

use Illuminate\Support\Facades\Route;
//POA CONTROLLERS
use App\Http\Controllers\Proyecto1Controller;
use App\Http\Controllers\ObjetivoGeneralProyecto;
use App\Http\Controllers\Datos_Responsables_UserController;
use App\Http\Controllers\ResumenM_I_P_EPreGrado_InstitutoController;
use App\Http\Controllers\ResumenM_I_P_EPostGrado_InstitutoController;

//ESTADISTICA CONTROLLERS
use App\Http\Controllers\PersonalAcademicoPreController;
use App\Http\Controllers\PersonalAdministratObreroPreController;
use App\Http\Controllers\PersonalAcademicoPostGController;
use App\Http\Controllers\PersonalAdmObreroPostGController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Jossep Paredes->jossep11

//1) POA ROUTES------------------------------------------------------------------------------------
Route::resource('proyecto', Proyecto1Controller::class); //Principal POA Route 
Route::resource('ResponsablePro', Datos_Responsables_UserController::class);
Route::resource('ResumenMatriculaPostGrado', ResumenM_I_P_EPostGrado_InstitutoController::class);
Route::resource('ResumenMatriculaPreGrado', ResumenM_I_P_EPreGrado_InstitutoController::class);
Route::resource('ObjetivoGeneral', ObjetivoGeneralProyecto::class);
//export excel POA
Route::get('/reporte_xlsx', [Proyecto1Controller::class, 'export'])->name('export.x');
//POA END--------------------------------------------------------------------------------------




//2) ESTADISTICA ROUTES-----------------------------------------------------------------------------
Route::resource('pa_pregrado', PersonalAcademicoPreController::class);//First ROUTE
Route::resource('pao_pregrado', PersonalAdministratObreroPreController::class);

//Passing date to the crud through ajax-> PreGrado
Route::post('/addingpersonalacademico', [PersonalAcademicoPreController::class, 'store'])->name('add.PersonalAcademicoPregrado');
Route::post('/addingpao_pregrado', [PersonalAdministratObreroPreController::class, 'store'])->name('add.PaoPregrado');

//POSTGRADO
Route::resource('registro_p_postgrado', PersonalAcademicoPostGController::class);//Second ROUTE
Route::resource('registro_paobrero_postgrado', PersonalAdmObreroPostGController::class);

//Passing date to the crud through ajax-> PostGrado
Route::post('/addingpersonalacademicopostg', [PersonalAcademicoPostGController::class, 'store'])->name('add.PersonalAcademicoPostGrado');
Route::post('/addinadmpost', [PersonalAdmObreroPostGController::class, 'store'])->name('add.admpost');

//Excel Report Personal academico y obrero PREGRADO
//Route::get('/Reporte_Pregrado', [PersonalAcademicoPreController::class, 'export'])->name('export.x');
//Excel Report Personal Academico y Obrero POSTGRADO
//Route::get('/Reporte_Postgrado', [PersonalAdmObreroPostGController::class, 'export2'])->name('export.post');
//-----------------------------------------------------------------------------------------------



Route::get('/', function () {
    return view('POA.POALayout');
});
