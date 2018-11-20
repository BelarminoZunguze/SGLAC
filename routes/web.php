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

Route::get('/', function () {
    return view('index');
});
//Route::get('/', function () {
 //   return view('paciente');
//});
//Route::get('/analise/pagina1/','AnaliseController@index')->name('analise');
//Route::get('/novo/paciente/','AnaliseController@novopaciente')->name('novoExame');
Route::resource('paciente', 'PacienteController');
Route::resource('exameRequisitados', 'ExameRequisitadoController');

//Route::resource('/resultados', 'ResultadosController');



