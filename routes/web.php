<?php

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('export')->group(function () {
    Route::get('/','ExportController@index' )->name('export');
    Route::get('/download','ExportController@download' )->name('export.download');
    Route::get('/dividirExcel','ExportController@dividirExcel' )->name('export.dividirExcel');
});

Route::prefix('mesa-calidad')->group(function () {
    Route::get('/tiempos','MesaCalidadController@tiempos' )->name('mesa_calidad.tiempos');
    Route::get('/resumen','MesaCalidadController@resumen' )->name('mesa_calidad.resumen');
    Route::get('/reasignaciones','MesaCalidadController@reasignaciones' )->name('mesa_calidad.reasignaciones');
    Route::get('/rangos','MesaCalidadController@rangos' )->name('mesa_calidad.rangos');
    Route::get('/usuarios','MesaCalidadController@users' )->name('mesa_calidad.users');
    Route::get('/exportables','MesaCalidadController@export' )->name('mesa_calidad.export');
});

Route::prefix('gestor-combustible')->group(function () {
    Route::get('/estaciones-base','GestorConbustibleController@estacionesBase' )->name('gestor_combustible.estaciones_base');
});
Route::prefix('crear-bitacoras')->group(function () {
    Route::get('/bitacora','BitacorasController@formulario' )->name('bitacoras.formulario_bitacoras');
});


Route::prefix('monitoreo-netcool')->group(function () {
    session(['module' => 'monitoreo_netcool']);
    Route::get('/','MonitoreNetCoolController@index' )->name('monitoreNetcool.index');
    Route::get('/dashboard','MonitoreNetCoolController@index' )->name('monitoreNetcool.index');

    Route::post('/importar-alarmas','MonitoreNetCoolController@import' )->name('monitoreNetcool.import');
    Route::get('/info-dashboard','MonitoreNetCoolController@import' )->name('monitoreNetcool.infoDashboard');
});

Route::prefix('bo-tx')->group(function () {
    Route::get('/dashboard','BoTxWmController@index' )->name('boTx.index');
    Route::get('/tareas-abiertas','BoTxWmController@tareasAbiertas' )->name('boTx.tareasAbiertas');
    Route::get('/sitios-reincidentes','BoTxWmController@sitiosReincidentes' )->name('boTx.sitiosReincidentes');
    Route::get('/sitios-excluidos','BoTxWmController@sitiosExcluidos' )->name('boTx.sitiosExcluidos');
    Route::get('/usuarios-grupos','BoTxWmController@usuariosGrupos' )->name('boTx.usuariosGrupos');
    Route::get('/exportables','BoTxWmController@export' )->name('boTx.export');


    Route::get('/info-dashboard','BoTxWmController@getDashboardInfo' )->name('BoTx.infoDash');
    Route::get('/tmp','BoTxWmController@listarTareas' )->name('BoTx.tmp');
});

