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
Route::post('exame/requisitado/','ExameRequisitadoController@search')->name('exameRequisitados.search');
Route::resource('paciente', 'PacienteController');
Route::resource('exameRequisitados', 'ExameRequisitadoController');
//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

//Route::resource('/resultados', 'ResultadosController');



