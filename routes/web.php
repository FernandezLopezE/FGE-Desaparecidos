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
Route::get('consultas/get_familiares/{idDesaparecido}', 'ConsultasController@jsonFamiliares')
	->name('consultas.get_familiares');
Route::get('consultas/get_domicilios/{idDesaparecido}', 'ConsultasController@jsonDomiciliosPersona')
	->name('consultas.get_domicilios');
Route::get('consultas/get_parentescos', 'ConsultasController@jsonParentescos')
	->name('consultas.get_parentescos');
Route::get('consultas/get_nacionalidades', 'ConsultasController@jsonNacionalidades')
	->name('consultas.get_nacionalidades');
Route::get('consultas/get_documentos_identidad', 'ConsultasController@jsonDocumentosIdentidad')
	->name('consultas.get_documentos_identidad');
Route::get('consultas/get_tipos_domicilios', 'ConsultasController@jsonTiposDomicilios')
	->name('consultas.get_tipos_domicilios');
Route::get('consultas/get_estados', 'ConsultasController@jsonEstados')
	->name('consultas.get_estados');
Route::get('consultas/get_municipios/{idEstado}', 'ConsultasController@jsonMunicipios')
	->name('consultas.get_municipios');
Route::get('consultas/get_localidades/{idMunicipio}', 'ConsultasController@jsonLocalidades')
	->name('consultas.get_localidades');
Route::get('consultas/get_colonias/{idMunicipio}', 'ConsultasController@jsonColonias')
	->name('consultas.get_colonias');
Route::get('consultas/get_tipos_telefonos', 'ConsultasController@jsonTiposTelefonos')
	->name('consultas.get_tipos_telefonos');
Route::get('consultas/get_ladas', 'ConsultasController@jsonLadas')
	->name('consultas.get_ladas');
Route::resource('consultas','ConsultasController');

Route::get('lada/{id}', 'LadaController@getLadas');
Route::resource('/lada','LadaController');


//Rutas Ruben
	//mis rutas
Route::get('/desaparecido/vestimenta/{idCedula}', 'DesaparecidoController@show_vestimenta');
Route::get('consultas/get_prendas/{idCedula}', 'ConsultasController@jsonPrendas')
	->name('consultas.get_prendas');
Route::get('consultas/get_calzado/{idCedula}', 'ConsultasController@jsonCalzado')
	->name('consultas.get_calzado');	
//fin de mis rutas
Route::post('/desaparecido/store_vestimenta', 'DesaparecidoController@store_vestimenta')
	->name('desaparecido.store_vestimenta');
Route::post('/desaparecido/update_calzado', 'DesaparecidoController@update_calzado')
	->name('desaparecido.update_calzado');
Route::post('/desaparecido/update_accesorios', 'DesaparecidoController@update_accesorios')
	->name('desaparecido.update_accesorios');	
Route::post('/desaparecido/update_vestimenta', 'DesaparecidoController@update_vestimenta')
	->name('desaparecido.update_vestimenta');
//fin de mis rutas




Route::get('/desaparecido/edad/{fecha_nacimiento}', 'DesaparecidoController@getEdad');



Route::get('/desaparecido/desaparecido_domicilio/{idCedula}', 'DesaparecidoController@show_desaparecido_domicilio');



Route::post('/desaparecido/getpersona', 'DesaparecidoController@getPersona')
	->name('desaparecido.getpersona');

Route::post('/desaparecido/store_cedula', 'DesaparecidoController@store_cedula')
	->name('desaparecido.store_cedula');

Route::post('/desaparecido/store_desaparecido_domicilio', 'DesaparecidoController@store_desaparecido_domicilio')
	->name('desaparecido.store_desaparecido_domicilio');

Route::post('/desaparecido/store_desaparecido_familiar', 'DesaparecidoController@store_desaparecido_familiar')
	->name('desaparecido.store_desaparecido_familiar');

// Mostrar formulario de la persona desaparecida domicilio.
Route::get('/desaparecido/persona_desaparecida_domicilio/{idCedula}/{idPersona}', 'DesaparecidoController@show_desaparecido_domicilio');

// Guardando los datos de la persona desaparecida.
Route::post('/desaparecido/store_desaparecido', 'DesaparecidoController@store_desaparecido')
	->name('desaparecido.store_desaparecido');

// Mostrar formulario de la persona desaparecida.
Route::get('/desaparecido/persona_desaparecida/{idCedula}', 'DesaparecidoController@show_desaparecido');	
// Guardar informante
Route::post('/desaparecido/store_informante', 'DesaparecidoController@store_informante')
	->name('desaparecido.store_informante');
// Mostrar formulario del informante	
Route::get('/desaparecido/informante/{idCedula}', 'DesaparecidoController@show_informante');
Route::resource('/desaparecido','DesaparecidoController');

Route::resource('domicilio','DomiciliosController');
Route::get('codigos/{id}', 'DomiciliosController@getCodigos');
Route::get('municipio/{id}', 'DomiciliosController@getMunicipios');
Route::get('localidades/{id}', 'DomiciliosController@getLocalidades');
Route::get('colonias2/{id}', 'DomiciliosController@getColonias2');
Route::get('colonias/{id}', 'DomiciliosController@getColonias');
Route::get('codigos2/{id}', 'DomiciliosController@getCodigos2');




