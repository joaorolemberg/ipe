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



Route::get('/', ['as'=>'principal',function(){
    return redirect('/homepage');
}]);

Route::get('/homepage', ['as'=>'home','uses'  => 'homepageController@telaHome']);
Route::put('/homepage', ['as'=>'home','uses'  => 'pacienteController@buscaProntuario']);

Route::get('/buscarPacientes', ['as'=>'buscar',function(){

    return (view('buscasPaciente'));

}]);
Route::put('/buscarPacientes', ['as'=>'buscar','uses'  => 'pacienteController@buscaProntuario']);
Route::post('/buscarPacientes', ['as'=>'home','uses'  => 'pacienteController@buscaGeral']);

Route::get('/confirmar', ['as'=>'confirmar','uses'  => 'pacienteController@confirmacao']);
Route::put('/confirmar', ['as'=>'confirmar','uses'  => 'pacienteController@buscaProntuario']);
Route::post('/confirmar', ['as'=>'confirmar','uses'  => 'pacienteController@consultaTotal']);