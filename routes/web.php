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

Route::get('/', 'InicioController@index');

	Route::resource('cedula','CedulaController');

	Route::resource('informante','InformanteController');

	Route::get('extraviado/create/{idCedula}', 'ExtraviadoController@create')
		->name('extraviado.create_desaparecido');
	Route::resource('extraviado','ExtraviadoController');

	Route::resource('familiar','FamiliarController');

	Route::resource('domicilios','DomicilioController');

	Route::resource('antecedentes','AntecedenteController');

	Route::resource('contactos','ContactoController');

	Route::resource('vestimentas','VestimentaController');


	Route::resource('senas_particulares','SenasParticularesController');

	Route::resource('datos_dentales','DatosDentalesController');

    
    Route::resource('dependencia_destinatario','AgregarDependenciaController');

	Route::resource('datos_dentales_dientes_perdidos','DatosDentalesDientesPerdidosController');




Route::get('consultas/get_cedulas', 'ConsultasController@jsonCedulas');
Route::get('consultas/get_informantes/{idCedula}', 'ConsultasController@jsonInformantes')
	->name('consultas.get_informantes');
Route::get('consultas/get_familiares/{idDesaparecido}', 'ConsultasController@jsonFamiliares')
	->name('consultas.get_familiares');
Route::get('consultas/get_domicilios/{idDesaparecido}', 'ConsultasController@jsonDomicilios')
	->name('consultas.get_domicilios');
Route::get('consultas/get_contactos/{idDesaparecido}', 'ConsultasController@jsonContactosPersona')
	->name('consultas.get_contactos');
Route::get('consultas/get_antecedentes/{idDesaparecido}', 'ConsultasController@jsonAntecedentes')
	->name('consultas.get_antecedentes');

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

Route::get('consultas/get_dependencias', 'ConsultasController@jsonDependecias')
	->name('consultas.get_dependencias');
Route::get('consultas/get_destinatarios', 'ConsultasController@jsonDestinatarios')
	->name('consultas.get_destinatarios');


// Mostrando codigos postales que pertenecen a un municipio.
Route::get('consultas/codigos/{idMunicipio}', 'ConsultasController@jsonCodigos');
// Mostrando codigos postales que pertenecen a un municipio cuando hay un cambio en colonias.
Route::get('consultas/codigos2/{idColonia}', 'ConsultasController@jsonCodigos2');
// Calcula la edad años meses dias al día actual.
Route::get('consultas/edad/{fecha_nacimiento}', 'ConsultasController@getEdad');



Route::get('consultas/get_senas', 'ConsultasController@jsonSenas')
	->name('consultas.get_senas');	

Route::resource('consultas','ConsultasController');

// Consultar todas la cedulas de investigación.

//Rutas alejandro
Route::get('/desaparecido/generarboletin/{idCedula}', 'ConsultasController@jsonBoletin')
	->name('consultas.get_boletin');

Route::get('/desaparecido/generarboletinPDF', 'MailController@generar_boletin');

Route::post('/desaparecido/generarboletinPDF/{idCedula}/{idPersona}', 'MailController@generar_boletin');
//Route::get('/desaparecido/generarboletinPDF/', 'MailController@generar_boletin');
//boletin controller
Route::resource('boletin','BoletinController');
//MailController
Route::resource ('mail','MailController');
Route::get ('enviar','MailController@store');
//Cargar las imagenes
Route::resource('image-view','CargarDocumentosController');
Route::post('image-view','CargarDocumentosController@store');
//ruta a controlador MailController para envio de correo
Route::post('/enviar_correo','MailController@store');





//ladas
Route::get('lada/{id}', 'LadaController@getLadas');
Route::resource('/lada','LadaController');


//Rutas Ruben
	//mis rutas
Route::get('/desaparecido/vestimenta/{idCedula}', 'DesaparecidoController@show_vestimenta')
	->name('desaparecido.show_vestimenta');

Route::get('consultas/get_prendas/{idCedula}', 'ConsultasController@jsonPrendas')
	->name('consultas.get_prendas');
Route::get('consultas/get_accesorios/{idCedula}', 'ConsultasController@jsonAccesorios')
	->name('consultas.get_accesorios');
Route::get('consultas/get_calzado/{idCedula}', 'ConsultasController@jsonCalzado')
	->name('consultas.get_calzado');	

Route::post('/desaparecido/store_vestimenta', 'DesaparecidoController@store_vestimenta')
	->name('desaparecido.store_vestimenta');

Route::post('/desaparecido/update_calzado', 'DesaparecidoController@update_calzado')
	->name('desaparecido.update_calzado');

Route::post('/domicilio/update', 'DomicilioController@update')
	->name('domicilio.update');


Route::post('/desaparecido/store_accesorios', 'DesaparecidoController@store_accesorios')
	->name('desaparecido.store_accesorios');

Route::post('/desaparecido/update_accesorios', 'DesaparecidoController@update_accesorios')
	->name('desaparecido.update_accesorios');

Route::post('/desaparecido/update_vestimenta', 'DesaparecidoController@update_vestimenta')
	->name('desaparecido.update_vestimenta');

//Rutas para descripcion fisica

Route::get('/descripcionfisica/get_coloresCuerpo/{idParteCuerpo}', 'DescripcionFisicaController@getColoresCuerpo')
	->name('descripcionfisica.get_coloresCuerpo');
Route::get('/descripcionfisica/get_particularidades/{idParteCuerpo}', 'DescripcionFisicaController@getParticularidades')
	->name('descripcionfisica.get_particularidades');
Route::get('/descripcionfisica/get_modificaciones/{idParteCuerpo}', 'DescripcionFisicaController@getModificaciones')
	->name('descripcionfisica.get_modificaciones');

Route::get('/descripcionfisica/get_partes/{idExtraviado}', 'DescripcionFisicaController@getPartesCuerpo')
	->name('descripcionfisica.get_partes');
	

Route::get('/descripcionfisica/descripcionf/{idPersonaDesaparecida}', 'DescripcionFisicaController@show')
	->name('descripcionfisica.show');

Route::post('/descripcionfisica/store', 'DescripcionFisicaController@store')
	->name('descripcionfisica.store');
Route::post('/descripcionfisica/storeVelloFacial', 'DescripcionFisicaController@storeVelloFacial')->name('descripcionfisica.storeVelloFacial');
Route::resource('/descripcionfisica','DescripcionFisicaController');
//fin de mis rutas

//Rutas para antedecedentes medicos
Route::get('/antecedentesmedicos/antecedentesm/{idPersonaDesaparecida}', 'AntecedentesMedicosController@show')
	->name('antecedentesmedicos.show');
Route::post('/antecedentesmedicos/store', 'AntecedentesMedicosController@store');
Route::resource('/antecedentesmedicos','AntecedentesMedicosController');

//mostrar vista de señas particulares 

Route::get('consultas/get_senas/{idCedula}', 'ConsultasController@jsonSenas')
	->name('consultas.get_senas');

//mostrar la vista de datos dentales
Route::get('/datos_dentales/{idDesaparecido}','DatosDentalesController@show_datos_dentales')
	->name('datos_dentales.show');
Route::post('/datos_dentales/store_datos_dentales', 'DatosDentalesController@store_datos_dentales')
	->name('datos_dentales.store_datos_dentales');


//la siguiente es una ruta para crear el pdf


Route::post('/mail/pdf', 'MailController@pdf')
	->name('mail.pdf');

//Rutas para antedecedentes medicos
Route::get('/antecedentesmedicos/antecedentesm/{idPersonaDesaparecida}', 'AntecedentesMedicosController@show')
	->name('antecedentesmedicos.show');
Route::post('/antecedentesmedicos/store', 'AntecedentesMedicosController@store');
Route::resource('/antecedentesmedicos','AntecedentesMedicosController');

Route::get('/email/{idCedula}', 'MailController@show')->name('mail.show');
// Rutas de la dependencias

Route::resource('/dependencias','MailController');
Route::get('/get_dependencias', 'MailController@getDependencias')
	->name('dependencias.get_dependencias');

Route::get('/envio_documentos', 'MailController@show');

Route::get('/generarDocs', 'CargarDocumentosController@crearDocumento')
	->name('generarDocs.crearDocumentos');

	//esta es la ruta .

Route::get('/index_agregar_dependencias', 'AgregarDependenciaController@show')->name('dependencias.destinatarios');
Route::post('/index_agregar_dependencias/store_destinatario', 'AgregarDependenciaController@store_destinatario')
	->name('index_agregar_dependencias.store_destinatario');
Route::post('/index_agregar_dependencias/store_dependencia', 'AgregarDependenciaController@store_dependencia')
	->name('index_agregar_dependencias.store_dependencia');
Route::post('/index_agregar_dependencias/update_dependencia', 'AgregarDependenciaController@update_dependencia')
	->name('index_agregar_dependencias.update_dependencia');
Route::post('/index_agregar_dependencias/update_destinatario', 'AgregarDependenciaController@update_destinatario')
	->name('index_agregar_dependencias.update_destinatario');



/*
// Consultar todas la cedulas de investigación.
Route::get('/desaparecido/edad/{fecha_nacimiento}', 'DesaparecidoController@getEdad');
//la siguiente ruta es la ruta de la vista correo
Route::get('/desaparecido/correo/{idCedula}/{idPersona}', 'DesaparecidoController@show_correo');
Route::get('/desaparecido/boletin', 'MailController@show_boletin');

Route::get('/desaparecido/desaparecido_domicilio/{idCedula}', 'DesaparecidoController@show_desaparecido_domicilio');


Route::get('/desaparecido/desaparecido_contacto/{idCedula}', 'DesaparecidoController@show_desaparecido_contacto');



Route::post('/desaparecido/getpersona', 'DesaparecidoController@getPersona')
	->name('desaparecido.getpersona');

Route::post('/desaparecido/store_cedula', 'DesaparecidoController@store_cedula')
	->name('desaparecido.store_cedula');

Route::post('/desaparecido/store_desaparecido_domicilio', 'DesaparecidoController@store_desaparecido_domicilio')
	->name('desaparecido.store_desaparecido_domicilio');

Route::post('/desaparecido/store_desaparecido_contacto', 'DesaparecidoController@store_desaparecido_contacto')
	->name('desaparecido.store_desaparecido_contacto');

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
//mostrar vista de señas particulares 
Route::get('/desaparecido/senas_particulares/{idCedula}','DesaparecidoController@show_senas_particulares');
Route::post('/desaparecido/store_senas', 'DesaparecidoController@store_senas')
	->name('desaparecido.store_senas');
Route::get('consultas/get_senas/{idCedula}', 'ConsultasController@jsonSenas')
	->name('consultas.get_senas');

//mostrar la vista de datos dentales
Route::get('/desaparecido/datos_dentales','DesaparecidoController@show_datos_dentales');
Route::post('/desaparecido/store_datos_dentales', 'DesaparecidoController@store_sdatos_dentales')
	->name('desaparecido.store_datos_dentales');

Route::resource('/desaparecido','DesaparecidoController');


/*Route::resource('domicilio','DomiciliosController');
Route::get('codigos/{id}', 'DomiciliosController@getCodigos');
Route::get('municipio/{id}', 'DomiciliosController@getMunicipios');
Route::get('localidades/{id}', 'DomiciliosController@getLocalidades');
Route::get('colonias2/{id}', 'DomiciliosController@getColonias2');
Route::get('colonias/{id}', 'DomiciliosController@getColonias');
Route::get('codigos2/{id}', 'DomiciliosController@getCodigos2');*/

//Route::resource('boletin', 'BoletinController@show');


Route::get('/guardarDocumento','CargarDocumentosController@create')
	->name('guardarDocumento.create');
//Obtiene el nombre del documento
Route::get('/get_dep','ConsultasController@jsonDep')
	->name('get_DepDes.jsonDep');
//Obtiene los destinatarios de la dependencia elegida
Route::get('/get_des','ConsultasController@jsonDes')
	->name('get_DepDes.jsonDes');
//envio el nombre de los documentos al controlador para que este se encargue de enviar  los correos correspondientess
Route::get('/envioDocumentos','MailController@envioDocumentos');

//Anexos
Route::get('/anexos','AnexosController@show');
	




