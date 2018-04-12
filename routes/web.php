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
    return view('inicio');

});

Route::get('consultas/get_informantes/{idCedula}', 'ConsultasController@jsonInformantes')
	->name('consultas.get_informantes');
Route::resource('consultas','ConsultasController');


Route::get('/consulta/informantes/{idCedula}', 'DesaparecidoController@jsonInformantes')
	->name('consulta.get_informantes');

Route::get('/desaparecido/edad/{fecha_nacimiento}', 'DesaparecidoController@getEdad');
Route::get('/desaparecido/informante/{idCedula}', 'DesaparecidoController@show_informante');

Route::get('/desaparecido/desaparecido', 'DesaparecidoController@show_desaparecido');
Route::get('/desaparecido/vestimenta', 'DesaparecidoController@show_vestimenta');


Route::post('/desaparecido/getpersona', 'DesaparecidoController@getPersona')
	->name('desaparecido.getpersona');

Route::post('/desaparecido/store_cedula', 'DesaparecidoController@store_cedula')
	->name('desaparecido.store_cedula');

Route::post('/desaparecido/store_informante', 'DesaparecidoController@store_informante')
	->name('desaparecido.store_informante');

Route::resource('/desaparecido','DesaparecidoController');

Route::resource('domicilio','DomiciliosController');
Route::get('codigos/{id}', 'DomiciliosController@getCodigos');
Route::get('municipio/{id}', 'DomiciliosController@getMunicipios');
Route::get('localidades/{id}', 'DomiciliosController@getLocalidades');
Route::get('colonias2/{id}', 'DomiciliosController@getColonias2');
Route::get('colonias/{id}', 'DomiciliosController@getColonias');
Route::get('codigos2/{id}', 'DomiciliosController@getCodigos2');




