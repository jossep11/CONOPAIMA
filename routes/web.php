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

//EVALUACION CONTROLLERS
use App\Http\Controllers\BandejaEntrada;

//Login de prueba
use App\Http\Controllers\LoginController;
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

//Login de prueba
Route::resource('login', LoginController::class)->middleware('guest');

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
Route::get('/Reporte_Pregrado', [PersonalAcademicoPreController::class, 'export'])->name('export.x');
//Excel Report Personal Academico y Obrero POSTGRADO
Route::get('/Reporte_Postgrado', [PersonalAdmObreroPostGController::class, 'export2'])->name('export.post');
//-----------------------------------------------------------------------------------------------


//3)EVALUACION ROUTES-----------------------------------------------------------------------------
//ADMIN analysis matrix Insertion
Route::resource('matriz_analisis_admin', 'App\Http\Controllers\MatrizAnalisisAdminController'); /* ->middleware('role:Admin') */ //First admin route

//ADMIN Inbox
Route::resource('bandeja_entrada', BandejaEntrada::class);/* ->middleware('role:Administrador') */ //Second admin route

//Users, make matrix
Route::resource('formarmatriz', 'App\Http\Controllers\MatrizAnalisisEnviar');/* ->middleware('role:Usuario') */ //first user route

//Routes of Data Insertion
Route::resource('fortaleza', 'App\Http\Controllers\FortalezaController');
Route::resource('oportunidades', 'App\Http\Controllers\OportunidadesController');
Route::resource('amenazas', 'App\Http\Controllers\AmezanasController');
Route::resource('debilidades', 'App\Http\Controllers\DebilidadesController');

//------------------------------------------------------------------------------------------------
Route::get('/', function () {
    return view('POA.POALayout');
});
