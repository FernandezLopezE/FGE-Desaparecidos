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

//Route::get('/', function () {

  // return view('desaparecidos.pruebas');
//});

Route::get('/', function () {
    return view('inicio');

});

Route::get('/', 'NacionalidadController@find')->name('nacion');

//Route::get('/', 'EscolaridadController@Escolarfind')->name('escolar');

Route::resource('/desaparecido','DesaparecidoController');


//Route::post('/documento/store','DesaparecidoController@store');
