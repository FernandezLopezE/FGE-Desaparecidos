<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cedula;
use App\Models\Persona;
use App\Models\Desaparecido;
use App\Models\Domicilio;

use App\Models\CatDialecto;


use App\Models\Familiar;
use App\Models\Documento;
use App\Models\Antecedente;
//use App\Models\Domicilio;
use App\Models\Contacto;
use App\Models\Prenda;
use App\Models\Accesorio;
use App\Models\CatSenasParticulares;
use App\Models\CatSenasParticularesUbicaciones;
use Carbon\Carbon;
use App\images\TiposCalzados;
use DB;


use App\Http\Requests\CreateDesaparecidoRequest;

class DesaparecidoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{		
		return view('desaparecidos.listado_cedulas'); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create_entrevista()
	{
		//$desaparecido = new Desaparecido();
		$cedula = new Cedula();

		$dialectos = \App\Models\CatDialecto::all()->pluck('nombre','id');


		return view('desaparecidos.form_cedula',compact(
												'cedula',
												'dialectos'						
												));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

	public function store_cedula(Request $request)
	{
		//dd($request->toArray());
		$cedula = Cedula::create([
			'entrevistadorNombres' 			=> $request->input('entrevistadorNombres'),
			'entrevistadorPrimerAp' 		=> $request->input('entrevistadorPrimerAp'),
			'entrevistadorSegundoAp'		=> $request->input('entrevistadorSegundoAp'),
			'entrevistadorCargo'			=> $request->input('entrevistadorCargo'),

			'interpreteNombres' 			=> $request->input('interpreteNombres'),
			'interpretePrimerAp' 			=> $request->input('interpretePrimerAp'),
			'interpreteSegundoAp'			=> $request->input('interpreteSegundoAp'),
			'interpreteOrganizacion'		=> $request->input('interpreteOrganizacion'),
			'otroDialecto'					=> $request->input('otroDialecto'),

			'entrevistadorPrimeraVez'		=> $request->input('entrevistadorPrimeraVez'),
			'fechaVisita'					=> $request->input('fechaVisita'),		

			'idDialecto' 					=> $request->input('otroIdioma'),

		]);

		return redirect()->action(
			'DesaparecidoController@show_informante', ['id' => $cedula->id]
		);


	}

	public function show_informante($idCedula)
	{
		$cedula = Cedula::find($idCedula);
		
		$desaparecido = Desaparecido::join('persona', 'desaparecidos_personas.idPersona', '=', 'persona.id')
										->where('idCedula', $idCedula)
										->where('tipoPersona', 'DESAPARECIDA')
										->get()
										->toArray();

		$sexos = array('H' => 'MASCULINO', 'M' => 'FEMENINO');
		$escolaridades		= \App\Models\CatEscolaridad::all()->pluck('nombre','id');
		$ocupaciones	 	= \App\Models\CatOcupacion::all()->pluck('nombre','id');
		$identificaciones	= \App\Models\CatDocumento::all()->pluck('nombre','id');
		$edoscivil 			= \App\Models\CatEstadoCivil::all()->pluck('nombre','id');

		$desaparecido = new Desaparecido();
		$parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
		$nacionalidades 	= \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
		$ladas = \App\Models\CatNacionalidad::all()->pluck('lada','id');
		$documentos 	= \App\Models\CatDocumento::all()->pluck('nombre', 'id');
		$estados 			= \App\Models\CatEstado::all()->pluck('nombre','id');		
		$municipios = array();
		$localidades = array();
		$colonias = array();
		$codigos = array();
		$tiposDireccion = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'FAMILIAR' => 'FAMILIAR');

		$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'CELULAR' => 'CELULAR');			

		$informantes = Desaparecido::where('tipoPersona', 'INFORMANTE')->get();

		return view('desaparecidos.form_informante',compact(
											'desaparecido',
											'cedula',
											'sexos',
											'escolaridades',
											'ocupaciones',
											'identificaciones',
											'edoscivil',
											'dialectos',
											'parentescos',
											'nacionalidades',
											'ladas',
											'documentos',
											'estados',
											'municipios',
											'localidades',
											'colonias',
											'informantes',
											'codigos',
											'tiposDireccion',
											'tiposTelefonos'
										));			
	}

	public function store_informante(Request $request)
	{	
		$informante = (is_null($request->input('informante'))) ? 0 : 1 ;
		$autorizado = (is_null($request->input('notificaciones'))) ? 0 : 1 ;

		$persona = Persona::create([
			'nombres' 			=> $request->input('nombre'),
			'primerAp' 			=> $request->input('primerAp'),
			'segundoAp' 		=> $request->input('segundoAp'),
			'idNacionalidad' 	=> $request->input('nacionalidad'),
		]);



		$desaparecido = Desaparecido::create([
			'idPersona' 			=> $persona->id,
			'idCedula'				=> $request->input('idCedula'),
			'idParentesco'			=> $request->input('idParentesco'),
			'idDocumentoIdentidad'	=> $request->input('idDocumentoIdentidad'),	
			'otroDocIdentidad'		=> $request->input('otroDocumento'),
			'numDocIdentidad'		=> $request->input('numDocIdentidad'),
			'correoElectronico'		=> $request->input('correoElectronico'),
			'informante'			=> $informante,
			'notificaciones'		=> $autorizado,
			'tipoPersona'			=> 'INFORMANTE',
		]);

		
		 $domicilio= Domicilio::create([
			'idDesaparecido' 	=> $desaparecido->id,
			'tipoDireccion'		=> $request->input('tipoDirec'),
			'calle'				=> $request->input('calle'),
			'numExterno'		=> $request->input('numExt'),
			'numInterno'		=> $request->input('numInt'),
			'idestado'			=> $request->input('estado'),
			'idMunicipio'		=> $request->input('municipio'),
			'idLocalidad'		=> $request->input('localidad'),
			'idColonia'			=> $request->input('colonia'),
			'idCodigoPostal'	=> $request->input('cp'),
			/*'telefono'			=> json_encode(array(
								'0' =>  Array
					            (
									 'tipoTel' => 'PERSONAL',
									 'lada' => '222',
									 'telefono' => '2223',
									 'ext' => '343'
					            ),
					            '1' =>  Array
					            (
									 'tipoTel' => 'PERSONAL',
									 'lada' => '222',
									 'telefono' => '2223',
									 'ext' => '343'
					            )*/
			/*'telefono'			=> json_encode(array(
							        array('tipoTel' => $request->input('tipoTel')),
							        array('lada' => $request->input('lada')),
							        array('telefono' => $request->input('telefono')),
							        array('ext' => $request->input('ext'))
							    )),	*/							

			'telefono'			=> json_encode(array('tipoTel' => $request->input('tipoTel'),
												 'lada' => $request->input('lada'),
												 'telefono' => $request->input('telefono'),
												 'ext' => $request->input('ext'))),
													 
		
		]);

		$data = array('nombres' => $desaparecido->persona->nombres,
						'primerAp' => $desaparecido->persona->primerAp,
						'segundoAp' => $desaparecido->persona->segundoAp,
						'informante' => $desaparecido->informante,
						'notificaciones' => $desaparecido->notificaciones, );
		
		return response()->json($data);

		//return response()->json($request->toArray());
	}

	public function show_desaparecido($idCedula)
	{
		$cedula = Cedula::find($idCedula);

		$desaparecido = new Desaparecido;		

		$option = array(
			'0' => 'NO',
			'1' => 'SI');
		$meses = array(
			'1' => 'ENERO',
			'2' => 'FEBRERO',
			'3' => 'MARZO',
			'4' => 'ABRIL',
			'5' => 'MAYO',
			'6' => 'JUNIO',
			'7' => 'JULIO',
			'8' => 'AGOSTO',
			'9' => 'SEPTIEMBRE',
			'10' => 'OCTUBRE',
			'11' => 'NOVIEMBRE',
			'12' => 'DICIEMBRE');

		$dialectos = array(
			'ESPAÑOL' => 'ESPAÑOL',
			'NÁHUATL' => 'NÁHUATL',
			'CHOL' => 'CHOL', 
			'TOTONACA' => 'TOTONACA', 
			'MAZATECO' => 'MAZATECO', 
			'MIXTECO' => 'MIXTECO', 
			'ZAPOTECO' => 'ZAPOTECO', 
			'OTOMÍ' => 'OTOMÍ', 
			'TZOTZIL' => 'TZOTZIL', 
			'TZELTAL' => 'TZELTAL', 
			'MAYA' => 'MAYA',
			'OTRO' => 'OTRO');

		$vestimenta= array(
			'CIVIL' => 'CIVIL', 
			'FORMAL' => 'FORMAL',
			'INFORMAL' => 'INFORMAL',
			'DEPORTIVO' => 'DEPORTIVO',
			'UNIFORME' => 'UNIFORME',
			'MARINA' => 'MARINA',
			'ESCOLAR' => 'ESCOLAR',
			'BEBE' => 'BEBÉ',
			'SIN INFORMACION' => 'SIN INFORMACION'
		);
		$accesoriosObjetos= array(
			'ANTEOJOS' => 'ANTEOJOS', 
			'BASTON' => 'BASTÓN',
			'ANILLOS' => 'ANILLOS',
			'MEDALLAS' => 'MEDALLAS',
			'CREDENCIALES' => 'CREDENCIALES',
			'CINTURON' => 'CINTURÓN',
			'RELOJ' => 'RELOJ',
			'COLLARES' => 'COLLARES',
			'PULSERAS' => 'PULSERAS',
			'CELULAR' => 'CELULAR', 
			'SOMBRERO' => 'SOMBRERO',
			'BOLSA' => 'BOLSA',
			'CADENAS' => 'CADENAS',
			'CARTERA' => 'CARTERA',
			'TARJETADECREDITO' => 'TARJETA DE CREDITO',
			'OTRO' => 'OTRO'			
		);
		
		$tiposDireccion = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'FAMILIAR' => 'FAMILIAR');

		$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'CELULAR' => 'CELULAR');

		$anios = array('2000' => '2000', '2001' => '2001');
		$sexos = array('N' => 'SELECCIONE UN GENERO', 'H' => 'MASCULINO', 'M' => 'FEMENINO');
		
		$tiposDireccion = array('PERSONAL' => 'PERSONAL', 'TRABAJO' => 'TRABAJO');
		$parentescos = array('MADRE' => 'MADRE', 'PADRE' => 'PADRE', 'HIJO' => 'HIJO', 'OTRO' => 'OTRO');

		$escolaridades		= \App\Models\CatEscolaridad::all()->pluck('nombre','id');
		$ocupaciones	 	= \App\Models\CatOcupacion::all()->pluck('nombre','id');
		$nacionalidades 	= \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
		$estados 			= \App\Models\CatEstado::all()->pluck('nombre','id');
		$municipios 		= \App\Models\CatMunicipio::limit(10)->pluck('nombre','id');
		$localidades 		= \App\Models\CatLocalidad::limit(10)->pluck('nombre','id');
		$colonias 			= \App\Models\CatColonia::limit(10)->pluck('nombre','id');
		$codigos 			= \App\Models\CatColonia::limit(10)->pluck('codigoPostal','id');
		$tiposCalzados		= \App\Models\CatTiposCalzados::all()->pluck('nombre','id');
		$marcasCalzados		= \App\Models\CatMarcasCalzados::all()->pluck('nombre','id');
		$identificaciones	= \App\Models\CatDocumento::all()->pluck('nombre','id');

		$delitos 			= \App\Models\CatDelito::all()->pluck('nombre','id');
		$centros 			= \App\Models\CatCentroReclusion::all()->pluck('nombre','id');		
		$edoscivil 			= \App\Models\CatEstadoCivil::all()->pluck('nombre','id');

		return view('desaparecidos.form_persona_desaparecida',
					[						
						'identificaciones' => $identificaciones,
						'cedula' => $cedula,
						'desaparecido' => $desaparecido,
						'option' => $option,
						'meses' => $meses,
						'anios' => $anios,
						'escolaridades' => $escolaridades,
						'ocupaciones' => $ocupaciones,
						'nacionalidades' => $nacionalidades,						
						'delitos' => $delitos,
						'centros' => $centros,
						'estados' => $estados,
						'tiposCalzados' => $tiposCalzados,
						'marcasCalzados' => $marcasCalzados,
						'municipios' => $municipios,
						'localidades' => $localidades,
						'colonias' => $localidades,
						'codigos' => $codigos,
						'sexos' => $sexos,
						'vestimenta'=>$vestimenta,
						'accesoriosObjetos'=>$accesoriosObjetos,
						'edoscivil' => $edoscivil,
						'tiposDireccion' => $tiposDireccion,
						'parentescos' => $parentescos,
						'dialectos' =>$dialectos,
						'tiposTelefonos' =>$tiposTelefonos
					]);
	}

	public function store_desaparecido(Request $request) {

		
		
		$persona = Persona::create([
					'nombres' 			=> $request->input('nombres'),
					'primerAp' 			=> $request->input('primerAp'),
					'segundoAp'			=> $request->input('segundoAp'),
					'fechaNacimiento'	=> $request->input('fechaNacimiento'),
					'sexo' 				=> $request->input('sexo'),
					'idNacionalidad'	=> $request->input('idNacionalidad'),
					'curp'				=> $request->input('curp'),
					'idEstadoOrigen'	=> $request->input('idEstadoOrigen'),
				]);
	
			$embarazo		= ($request->input('sexo')=='M') ? $request->input('embarazo') : 'NO';
			$numGestacion	= ($request->input('embarazo') == 'SI') ? $request->input('numGestacion') : null;
			$tipoGestacion	= ($request->input('embarazo') == 'SI') ? $request->input('tipoGestacion') : null;
			$rumoresBebe	= ($request->input('embarazo') == 'SI') ? $request->input('rumoresBebe') : 'NO';
			$pormenores		= ($request->input('rumoresBebe') == 'SI') ? $request->input('pormenores') : null;
			
		
		$desaparecido = Desaparecido::create([
			'idCedula'					=> $request->input('idCedula'),
			'idPersona' 				=> $persona->id,
			'apodo' 					=> $request->input('apodo'),
			'edadAparente' 				=> $request->input('edadAparente'),
			'edadExtravio' 				=> $request->input('edadExtravio'),
			'embarazo' 					=> $embarazo,
			'numGestacion' 				=> $numGestacion,
			'tipoGestacion' 			=> $tipoGestacion,
			'rumoresBebe' 				=> $rumoresBebe,
			'pormenores' 				=> $pormenores,
			'antecedentesJudiciales' 	=> $request->input('antecedentesJudiciales'),
			'otroDocIdentidad' 			=> $request->input('otroDocIdentidad'),
			'numDocIdentidad'			=> $request->input('numDocIdentidad'),
			'idEdocivil' 				=> $request->input('idEdocivil'),
			'idOcupacion' 				=> $request->input('idOcupacion'),
			'idEscolaridad' 			=> $request->input('idEscolaridad'),
			'idDocumentoIdentidad'		=> $request->input('idDocumentoIdentidad'),
			'tipoPersona'				=> 'DESAPARECIDA',
		]);


		
		$nombres = $request->input('familiaresNombres');
		$primerAp = $request->input('familiaresPrimerAp');
		$segundoAp = $request->input('familiaresSegundoAp');
		$fechaNacimiento = $request->input('familiaresFechaNacimiento');
		$familiaresEdad= $request->input('familiaresEdad');
		$i = 0;
		foreach ($request->input('parentesco') as $value) {
			if (!is_null($nombres[$i])) {
				$familia = Familiar::create([
					'idParentesco'		=> '3',
					'nombres' 			=> $nombres[$i],
					'primerAp' 			=> $primerAp[$i],
					'segundoAp' 		=> $segundoAp[$i],
					'fechaNacimiento' 	=> $fechaNacimiento[$i],
					'edad' 				=> $familiaresEdad[$i],
					'idDesaparecido' 	=> $desaparecido->id,
				]);
			}
			$i++;
		}

		return redirect()->action(
			'DesaparecidoController@show_desaparecido_domicilio',
				['idCedula' => $desaparecido->idCedula, 'idDesaparecido' => $desaparecido->id]
		);

	}
	public function show_desaparecido_domicilio($idCedula, $idDesaparecido)
	{
		$cedula = Cedula::find($idCedula);
		$desaparecido = Desaparecido::find($idDesaparecido);
		

		$anios = array('2000' => '2000', '2001' => '2001');		
		
		$tiposDireccion = array('PERSONAL' => 'PERSONAL', 'TRABAJO' => 'TRABAJO');

		$parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');

		$escolaridades		= \App\Models\CatEscolaridad::all()->pluck('nombre','id');
		$ocupaciones	 	= \App\Models\CatOcupacion::all()->pluck('nombre','id');
		$nacionalidades 	= \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
		$ladas 				= \App\Models\CatNacionalidad::all()->pluck('lada','id');
		$documentos 		= \App\Models\CatDocumento::all()->pluck('nombre', 'id');
		$estados 			= \App\Models\CatEstado::all()->pluck('nombre','id');		
		$municipios = array();
		$localidades = array();
		$colonias = array();
		$codigos = array();
		$tiposDireccion = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'FAMILIAR' => 'FAMILIAR');

		$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'CELULAR' => 'CELULAR');

		$identificaciones	= \App\Models\CatDocumento::all()->pluck('nombre','id');
		$delitos 			= \App\Models\CatDelito::all()->pluck('nombre','id');
		$centros 			= \App\Models\CatCentroReclusion::all()->pluck('nombre','id');		
		$edoscivil 			= \App\Models\CatEstadoCivil::all()->pluck('nombre','id');
		return view('desaparecidos.form_desaparecido_domicilio',
					compact('cedula',
								'desaparecido',
								'parentescos',
								'tiposDireccion',
								'estados',
								'municipios',
								'localidades',
								'colonias',
								'codigos',
								'nacionalidades',
								'tiposTelefonos'
							));		
	}

	public function show_desaparecido_contacto($idCedula, $idDesaparecido)
	{
		$cedula = Cedula::find($idCedula);
		$desaparecido = Desaparecido::find($idDesaparecido);
		

		//$ladas 				= \App\Models\CatNacionalidad::all()->pluck('lada','id');
		

		$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'CELULAR' => 'CELULAR');

	
		return view('desaparecidos.form_desaparecido_domicilio',
					compact('cedula',
								'desaparecido',
								'tiposTelefonos'
							));		
	}

	public function store_desaparecido_familiar(Request $request){

		$familia = Familiar::create([
			'idParentesco'		=> $request->input('idParentesco'),
			'nombres' 			=> $request->input('nombre'),
			'primerAp' 			=> $request->input('primerAp'),
			'segundoAp' 		=> $request->input('segundoAp'),
			'fechaNacimiento' 	=> $request->input('fechaNacimiento'),
			'edad' 				=> $request->input('edad'),
			'idDesaparecido' 	=> $request->input('idParentesco'),
		]);

		return response()->json($familia);

	}
	public function  store_desaparecido_contacto(Request $request){

		$contacto = Contacto::create([
			'idDesaparecido' 		=> $request->input('idDesaparecido'),
			'correoElectronico'		=> $request->input('correoElectronico'),
			'telefono'				=> json_encode(array('tipoTel' => $request->input('tipoTel'),
												 'lada' => $request->input('lada'),
												 'telefono' => $request->input('telefono'),
												 'ext' => $request->input('ext'))),
													 
			 'redesSociales'		=> json_encode(array('redesSociales' => $request->input('redesSociales'))),

		]);

		return response()->json($contacto);

	}

	public function store_desaparecido_domicilio(Request $request)
	{
		dd($request);
		$domicilio = Domicilio::create([

			'idDesaparecido' 	=> $request->input('idDesaparecido'),
			'tipoDireccion'		=> $request->input('tipoDireccion'),
			'calle'				=> $request->input('calle'),
			'numExterno'		=> $request->input('numExt'),
			'numInterno'		=> $request->input('numInt'),
			'idEstado'			=> $request->input('idEstado'),
			'idMunicipio'		=> $request->input('idMunicipio'),
			'idLocalidad'		=> $request->input('idLocalidad'),
			'idColonia'			=> $request->input('idColonia'),
			'idCodigoPostal'	=> $request->input('idCodigoPostal'),
			'telefono'			=> json_encode(array('tipoTel' => $request->input('tipoTel'),
												 'lada' => $request->input('lada'),
												 'telefono' => $request->input('telefono'),
												 'ext' => $request->input('ext'))),
		]);

		return response()->json($domicilio);

	}

		public function show_vestimenta($idCedula)
		{
		$desaparecido = \App\Models\Desaparecido::find($idCedula);
		
		
		$cedula = Cedula::find($desaparecido->idCedula);


		$vestimenta	= \App\Models\CatVestimenta::all()->pluck('nombre','id');
		$accesoriosObjetos	= \App\Models\CatAccesorioObjeto::all()->pluck('nombre','id');
		$tiposCalzados		= \App\Models\CatTiposCalzados::all()->pluck('nombre','id');
		$marcasCalzados		= \App\Models\CatMarcasCalzados::all()->pluck('nombre','id');
		$colores = \App\Models\CatCalzadoColor::all()->pluck('nombre','id');
		return view('desaparecidos.secciones.seccion3_datos_vestimenta',
					['vestimenta' => $vestimenta,
					 'tiposCalzados' => $tiposCalzados,
					 'marcasCalzados' => $marcasCalzados, 
					 'accesoriosObjetos' => $accesoriosObjetos, 
					 'colores' =>$colores, 
					 'id' => $cedula->id,
					 'desaparecido' => $desaparecido
					 ]);
		/*return view('desaparecidos.form_desaparicion',
			[
				'parentescos' => $parentescos,
				'estados' => $estados,
				'municipios' => $municipios,				
				'localidades' => $localidades,
				'colonias' => $localidades,
				'codigos' => $codigos,
				'vestimenta' => $vestimenta,
				'tiposCalzados' => $tiposCalzados,
				'marcasCalzados' => $marcasCalzados, 
				'accesoriosObjetos' => $accesoriosObjetos, 
				'colores' =>$colores,
			]);		*/
	}
	public function store_vestimenta(Request $request)
	{
		//dd($request->toArray());
		$cedula = Cedula::find($request->input('idCedula'));
		$color = $request->input('prendaColor');
		if($color == 15){
			$prenda = Prenda::create([
				'tipo' => $request->input('nombrePrenda'),
				'material' => $request->input('prendaMaterial'),
				'color' => $request->input('prendaColor'),
				'otroColor' => $request->input('otroColor'),
				'dibujoBordadoFranja' => $request->input('prendaDibujoBordadoFranjas'),
				'marcaOrigen' => $request->input('prendaMarcaOrigen'),
				'talla' => $request->input('prendaTalla'),
				'idCedula' => $request->input('idCedula'),
			]);
		}else{
			$prenda = Prenda::create([
				'tipo' => $request->input('nombrePrenda'),
				'material' => $request->input('prendaMaterial'),
				'color' => $request->input('prendaColor'),
				'otroColor' => "",
				'dibujoBordadoFranja' => $request->input('prendaDibujoBordadoFranjas'),
				'marcaOrigen' => $request->input('prendaMarcaOrigen'),
				'talla' => $request->input('prendaTalla'),
				'idCedula' => $request->input('idCedula'),
			]);
		}
		return response()->json($prenda);
		
	}
	public function update_vestimenta(Request $request){
		$prenda = Prenda::find($request->input('idPrenda'));
		$color = $request->input('prendaColor');
		if($color == 15){
			$prenda->tipo = $request->input('nombrePrenda');
			$prenda->material = $request->input('prendaMaterial');
			$prenda->color = $request->input('prendaColor');
			$prenda->otroColor = $request->input('otroColor');
			$prenda->dibujoBordadoFranja = $request->input('prendaDibujoBordadoFranjas');
			$prenda->marcaOrigen = $request->input('prendaMarcaOrigen');
			$prenda->talla = $request->input('prendaTalla');
		}else{
			$prenda->tipo = $request->input('nombrePrenda');
			$prenda->material = $request->input('prendaMaterial');
			$prenda->color = $request->input('prendaColor');
			$prenda->otroColor = "";
			$prenda->dibujoBordadoFranja = $request->input('prendaDibujoBordadoFranjas');
			$prenda->marcaOrigen = $request->input('prendaMarcaOrigen');
			$prenda->talla = $request->input('prendaTalla');
			
		}
		$prenda->save();
		//$colorPrenda = CatColores::find($prenda->color);
		return response()->json($prenda);
	}
	public function update_calzado(Request $request)
	{
	
		$cedula = Cedula::find($request->input('idCedula'));
		//dd($cedula);
		if($request->input('idTipo') != 8){
			$otroC = "";
		}else{
			$otroC = $request->input('otroCalzado');
		}
		if($request->input('idColor') != 15){
			$otroColorC = "";
		}else{
			$otroColorC = $request->input('otroColorCalzado');
		}
		if($request->input('idMarca') != 26){
			$otraM = "";
		}else{
			$otraM = $request->input('otraMarca');
		}
		
		if($request->input('idTipo') == 1){
			$cedula->idCalzadotipo = 1;
			$cedula->idCalzadocolor = 1;
			$cedula->idCalzadomarca = 1;
			$cedula->calzadoTalla = "";
			$cedula->modeloCalzado = "";
			//$cedula->otroColorCalzado = $request->input('otroColorCalzado');
			//$cedula->idVestimenta = $request->input('prendaTipo');
			$cedula->otroColorCalzado = $otroColorC;
			$cedula->otraMarca = $otraM;
			$cedula->otroCalzado = $otroC;
		}else{
			$cedula->idCalzadotipo = $request->input('idTipo');
			$cedula->idCalzadocolor = $request->input('idColor');
			$cedula->idCalzadomarca = $request->input('idMarca');
			$cedula->calzadoTalla = $request->input('calzadoTalla');
			$cedula->modeloCalzado = $request->input('modeloCalzado');
			//$cedula->otroColorCalzado = $request->input('otroColorCalzado');
			//$cedula->idVestimenta = $request->input('prendaTipo');
			$cedula->otroColorCalzado = $otroColorC;
			$cedula->otraMarca = $otraM;
			$cedula->otroCalzado = $otroC;
		}
		//$cedula->calzadoTalla = $request->input('calzadoTalla');
			
			
		
		//$cedula->observacionesDesaparicion = $request->input('descripcionVestimenta');
		//$cedula->objetos = json_encode($request->input('accesoriosObjetos'));
		$cedula->save();
		return response()->json($cedula);
		
	}
    
    	public function store_accesorios(Request $request)
	{
		//dd($request->toArray());
		$cedula = Cedula::find($request->input('idCedula'));
		$color = $request->input('accesorioColor');
		if($color == 15){
			$accesorio = Accesorio::create([
            'tipo' => $request->input('accesoriosObjetos'),
			'material' => $request->input('accesorioMaterial'),
			'color' => $request->input('accesorioColor'),
			'otroColor' => $request->input('accesorioColorOtro'),
			'marcaOrigen' => $request->input('accesorioMarcaOrigen'),
            'idCedula' => $request->input('idCedula'),
			]);
		}else{
			$accesorio = Accesorio::create([
            'tipo' => $request->input('accesoriosObjetos'),
			'material' => $request->input('accesorioMaterial'),
			'color' => $request->input('accesorioColor'),
			'otroColor' => "",
			'marcaOrigen' => $request->input('accesorioMarcaOrigen'),
            'idCedula' => $request->input('idCedula'),
			]);
		}
		return response()->json($accesorio);
		
	}
    
	public function update_accesorios(Request $request){
        
        
        $accesorio = Accesorio::find($request->input('idAccesorio'));
		$color = $request->input('accesorioColor');
		if($color == 15){
			$accesorio->tipo = $request->input('accesoriosObjetos');
			$accesorio->material = $request->input('accesorioMaterial');
			$accesorio->color = $request->input('accesorioColor');
			$accesorio->otroColor = $request->input('accesorioColorOtro');
			$accesorio->marcaOrigen = $request->input('accesorioMarcaOrigen');
		}else{
			$accesorio->tipo = $request->input('accesoriosObjetos');
			$accesorio->material = $request->input('accesorioMaterial');
			$accesorio->color = $request->input('accesorioColor');
			$accesorio->otroColor = "";
			$accesorio->marcaOrigen = $request->input('accesorioMarcaOrigen');	
		}
		$accesorio->save();
		//$colorPrenda = CatColores::find($prenda->color);
		return response()->json($accesorio);

//		$cedula = Cedula::find($request->input('idCedula'));
//		$cedula->objetos = json_encode($request->input('accesoriosObjetos'));
//		$cedula->observacionesDesaparicion = $request->input('descripcionVestimenta');
//		$cedula->save();
//		return response()->json($cedula);
		
	}
	

	public function store(Request $request)
	{		



		
		
		
		/*$persona = Persona::create([
						'nombres' 			=> $request->input('nombres'),
						'primerAp' 			=> $request->input('primerAp'),
						'segundoAp'			=> $request->input('segundoAp'),
						'fechaNacimiento'	=> $request->input('fechaNacimiento'),
						'sexo' 				=> $request->input('sexo'),
						'idNacionalidad'	=> $request->input('idNacionalidad'),
					]);

		$fecha = Carbon::parse($request->input('fechaNacimiento'));
		$edad = Carbon::createFromDate($fecha->year, $fecha->day, $fecha->month)->diff(Carbon::now())->format('%y años, %m meses y %d dias');
		
		if($request->input('sexo')=='FEMENINO'){
			$desaparecido = Desaparecido::create([
							'idPersona' 				=> $persona->id,
							'apodo' 					=> $request->input('apodo'),
							'edadAparente' 				=> $request->input('edadAparente'),
							'edadExtravio' 				=> $edad,
							'embarazo' 					=> $request->input('embarazo'),
							'gestacionSemanas' 			=> $request->input('gestacionSemanas'),
							'gestacionMeses' 			=> $request->input('gestacionMeses'),
							'rumoresBebe' 				=> $request->input('rumoresBebe'),
							'pormenores' 				=> $request->input('pormenores'),
							'antecedentesJudiciales' 	=> $request->input('antecedentesJudiciales'),
							'idEdocivil' 				=> $request->input('idEdocivil'),
							'idOcupacion' 				=> $request->input('idOcupacion'),
							'idEscolaridad' 			=> $request->input('idEscolaridad'),
						]);
		}else{
			$desaparecido = Desaparecido::create([
							'idPersona' 				=> $persona->id,
							'apodo' 					=> $request->input('apodo'),
							'edadAparente' 				=> $request->input('edadAparente'),
							'edadExtravio' 				=> $edad,
							'antecedentesJudiciales' 	=> $request->input('antecedentesJudiciales'),
							'idEdocivil' 				=> $request->input('idEdocivil'),
							'idOcupacion' 				=> $request->input('idOcupacion'),
							'idEscolaridad' 			=> $request->input('idEscolaridad'),
						]);
		}

		$documento = Documento::create([
						'idDesaparecido' 		=> $desaparecido->id,
						'identificacion' 		=> $request->input('identificacion'),
						'otraIdentificacion' 	=> $request->input('otraIdentificacion'),
						'numIdentificacion' 	=> $request->input('numIdentificacion'),
					]);


		
		$parentesco = $request->input('parentesco');
		$nombres = $request->input('familiaresNombres');
		$primerAp = $request->input('familiaresPrimerAp');
		$segundoAp = $request->input('familiaresSegundoAp');
		$familiaresEdad= $request->input('familiaresEdad');
		$i = 0;
		foreach ($request->input('parentesco') as $value) {
			if (!is_null($nombres[$i])) {
				$familia = Familiar::create([
					'parentesco' 		=> $parentesco[$i],
					'nombres' 			=> $nombres[$i],
					'primerAp' 			=> $primerAp[$i],
					'segundoAp' 		=> $segundoAp[$i],
					'edad' 				=> $familiaresEdad[$i],
					'idDesaparecido' 	=> $desaparecido->id,
				]);
			}
			$i++;
		}
		


		$mes = $request->input('mes');
		$anio = $request->input('anio');
		$observaciones = $request->input('observaciones');
		$idDelito = $request->input('idDelito');
		$idCentroReclusion = $request->input('idCentroReclusion');
		
		$i = 0;
		foreach ($request->input('idDelito') as $value) {
			$familia = Antecedente::create([
				'mes' 					=> $mes[$i],
				'anio' 					=> $anio[$i],
				'observaciones' 		=> $observaciones[$i],
				'idDelito' 				=> $idDelito[$i],
				'idCentroReclusion' 	=> $idCentroReclusion[$i],
				'idDesaparecido' 	=> $desaparecido->id,
			]);
			$i++;

		}

		$tipoDireccion = $request->input('tipoDireccion');
		$calle = $request->input('calle');
		$numExterno = $request->input('numExterno');
		$numInterno = $request->input('numInterno');
		$telefono = $request->input('telefono');
		$idEstado = $request->input('idEstado');
		$idMunicipio = $request->input('idMunicipio');
		$idLocalidad = $request->input('idLocalidad');
		$idColonia = $request->input('idColonia');
		$idCodigoPostal = $request->input('idCodigoPostal');

		$i = 0;
		foreach ($request->input('tipoDireccion') as $value) {
			if (!is_null($calle[$i])) {
				$domicilio = Domicilio::create([
					'tipoDireccion' 		=> $tipoDireccion[$i],
					'calle' 				=> $calle[$i],
					'numExterno' 			=> $numExterno[$i],
					'numInterno' 			=> $numInterno[$i],
					'telefono' 				=> $telefono[$i],
					'idEstado'	 			=> $idEstado[$i],
					'idMunicipio' 			=> $idMunicipio[$i],
					'idLocalidad' 			=> $idLocalidad[$i],
					'idColonia' 			=> $idColonia[$i],
					'idCodigoPostal'		=> $idCodigoPostal[$i],
					'idDesaparecido' 		=> $desaparecido->id,
				]);
			}
			$i++;
		}

		return $this->show($desaparecido->id);*/


		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$desaparecido = Desaparecido::find($id);

		//dd($desaparecido->documentos);
		
		/*$anios = array();
			for(int $i=1970; $i<=2018; $i++){
			$anios = array($i=>$i);
		}
		dd($anios);*/
		//dd($desaparecido->persona->nombres);
		return view('desaparecidos.show',['desaparecido' => $desaparecido]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getEdad(Request $request, $fechaNacimiento){
		
		if($request->ajax()){

			$fecha = Carbon::parse($fechaNacimiento);
			$edad2 = Carbon::createFromDate($fecha->year, $fecha->month,$fecha->day)->diff(Carbon::now())->format('%y años, %m meses y %d dias');
			return response()->json($edad2);
		
		}
	}

	public function getPersona (Request $request)
	{ 
		Session::push('personas', $request->toArray());

		return response()->json(Session::get('personas'));
		//print_r(Session::get('personas'));
		//dd(Session::get('personas'));        
		/*Session::push('personas', ['nombre' => 'Ruben', 'paterno' => 'Ochoa']);
		Session::push('personas', ['nombre' => 'Eduardo', 'paterno' => 'Colin']);

		$idToDelete = 2;
		$products = session()->pull('personas', []); // Second argument is a default value
		foreach ($products as $key => $value) {
			if ($key == $idToDelete) {
				unset($products[$key]);
			}
		}
	
		Session::push('productos', $products);

		print_r(Session::get('productos'));*/
		//dd(Session::get('cart'));
	}

	public function show_senas_particulares($idCedula){
        $cedula = Cedula::find($idCedula);
        $senasParticulares = \App\Models\CatSenasParticulares::all()->pluck('nombre','id');
        $senasParticularesUbica = \App\Models\CatSenasParticularesUbicaciones::all()->pluck('nombre','id');
        $nombreTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        
        return view('desaparecidos.form_senas_particulares', [                        
                        'senasParticulares' => $senasParticulares,
                        'senasParticularesUbica' => $senasParticularesUbica,
                        'cedula' => $cedula,
                        'nombreTamano' => $nombreTamano
                    ]);
    }

    public function store_senas(Request $request)
    {
        //dd($request->toArray())
        
        DB::table('cedula_cat_senas')-> insert([
                'idCatsenas' => $request->input('senaP'),
                'cantidad' => $request->input('cantidad'),
                'idCatsenasParticulares' => $request->input('ubicacion'),
                'caracteristicas' => $request->input('caracteristicas'),
                'idCedula' => $request->input('idCedula'),
            ]);
            return response()->json('se inserto');
    }

    public function show_datos_dentales(){
        //$cedula = Cedula::find($idCedula);
        $dienteTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        //$senasParticularesUbica = \App\Models\CatSenasParticularesUbicaciones::all()->pluck('nombre','id');
        //$nombreTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        
        /*return view('desaparecidos.form_senas_particulares', [                        
                        'senasParticulares' => $senasParticulares,
                        'senasParticularesUbica' => $senasParticularesUbica,
                        'cedula' => $cedula,
                        'nombreTamano' => $nombreTamano
                    ]);*/
        return view('desaparecidos.form_datos_dentales',[
        			'dienteTamano' => $dienteTamano
        		]);
    }
}