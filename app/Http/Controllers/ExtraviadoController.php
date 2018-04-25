<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExtraviadoRequest;

class ExtraviadoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($id)
	{
		$datos = \App\Models\Desaparecido::where('idCedula', $id)
											->where('tipoPersona', 'DESAPARECIDA')
											->get();

		if (count($datos)) {
			return redirect()->action(
				'ExtraviadoController@show', ['id' => $id]
			);
		} else {

			$cedula = \App\Models\Cedula::find($id);

			$desaparecido = \App\Models\Desaparecido::join('persona', 'desaparecidos_personas.idPersona', '=', 'persona.id')
											->where('idCedula', $id)
											->where('tipoPersona', 'DESAPARECIDA')
											->get()
											->toArray();

			$sexos = array('N' => 'SELECCIONE UN GENERO', 'H' => 'MASCULINO', 'M' => 'FEMENINO');
			$escolaridades      = \App\Models\CatEscolaridad::all()->pluck('nombre','id');
			$ocupaciones        = \App\Models\CatOcupacion::all()->pluck('nombre','id');
			$identificaciones   = \App\Models\CatDocumento::all()->pluck('nombre','id');
			$edoscivil          = \App\Models\CatEstadoCivil::all()->pluck('nombre','id');

			$desaparecido = new \App\Models\Desaparecido();
			$parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
			$nacionalidades     = \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
			$ladas = \App\Models\CatNacionalidad::all()->pluck('lada','id');
			$documentos     = \App\Models\CatDocumento::all()->pluck('nombre', 'id');
			$estados            = \App\Models\CatEstado::all()->pluck('nombre','id');       
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

			$informantes = \App\Models\Desaparecido::where('tipoPersona', 'INFORMANTE')->get();

			return view('desaparecido.index',compact(
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
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ExtraviadoRequest $request)
	{

		$persona = \App\Models\Persona::create([
			'nombres'           => $request->input('nombres'),
			'primerAp'          => $request->input('primerAp'),
			'segundoAp'         => $request->input('segundoAp'),
			'fechaNacimiento'   => $request->input('fechaNacimiento'),
			'sexo'              => $request->input('sexo'),
			'idNacionalidad'    => $request->input('idNacionalidad'),
			'curp'              => $request->input('curp'),
			'idEstadoOrigen'    => $request->input('idEstadoOrigen'),
		]);
			
		$embarazo       = ($request->input('sexo')=='M') ? $request->input('embarazo') : 'NO';
		$numGestacion   = ($request->input('embarazo') == 'SI') ? $request->input('numGestacion') : null;
		$tipoGestacion  = ($request->input('embarazo') == 'SI') ? $request->input('tipoGestacion') : null;
		$rumoresBebe    = ($request->input('embarazo') == 'SI') ? $request->input('rumoresBebe') : 'NO';
		$pormenores     = ($request->input('rumoresBebe') == 'SI') ? $request->input('pormenores') : null;
					
				
		$desaparecido = \App\Models\Desaparecido::create([
			'idCedula'                  => $request->input('idCedula'),
			'idPersona'                 => $persona->id,
			'apodo'                     => $request->input('apodo'),
			'edadAparente'              => $request->input('edadAparente'),
			'edadExtravio'              => $request->input('edadExtravio'),
			'embarazo'                  => $embarazo,
			'numGestacion'              => $numGestacion,
			'tipoGestacion'             => $tipoGestacion,
			'rumoresBebe'               => $rumoresBebe,
			'pormenores'                => $pormenores,
			'antecedentesJudiciales'    => $request->input('antecedentesJudiciales'),
			'otroDocIdentidad'          => $request->input('otroDocIdentidad'),
			'numDocIdentidad'           => $request->input('numDocIdentidad'),
			'idEdocivil'                => $request->input('idEdocivil'),
			'idOcupacion'               => $request->input('idOcupacion'),
			'idEscolaridad'             => $request->input('idEscolaridad'),
			'idDocumentoIdentidad'      => $request->input('idDocumentoIdentidad'),
			'tipoPersona'               => 'DESAPARECIDA',
		]);

		return redirect()->action(
			'ExtraviadoController@show', ['id' => $desaparecido->idCedula]
		);
		

				
		/*$nombres = $request->input('familiaresNombres');
		$primerAp = $request->input('familiaresPrimerAp');
		$segundoAp = $request->input('familiaresSegundoAp');
		$fechaNacimiento = $request->input('familiaresFechaNacimiento');
		$familiaresEdad= $request->input('familiaresEdad');
		$i = 0;
		foreach ($request->input('parentesco') as $value) {
			if (!is_null($nombres[$i])) {
				$familia = Familiar::create([
					'idParentesco'      => '3',
					'nombres'           => $nombres[$i],
					'primerAp'          => $primerAp[$i],
					'segundoAp'         => $segundoAp[$i],
					'fechaNacimiento'   => $fechaNacimiento[$i],
					'edad'              => $familiaresEdad[$i],
					'idDesaparecido'    => $desaparecido->id,
				]);
			}
			$i++;
		}*/

		/*return redirect()->action(
			'DesaparecidoController@show_desaparecido_domicilio',
				['idCedula' => $desaparecido->idCedula, 'idDesaparecido' => $desaparecido->id]
		);*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$datos = \App\Models\Desaparecido::where('idCedula', $id)
											->where('tipoPersona', 'DESAPARECIDA')
											->limit(1)
											->get();
		
		$desaparecido = \App\Models\Desaparecido::find($datos[0]->id);

		return view('desaparecido.show',compact('desaparecido'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$desaparecido = \App\Models\Desaparecido::find($id);

		$sexos = array('H' => 'MASCULINO', 'M' => 'FEMENINO');
		$escolaridades      = \App\Models\CatEscolaridad::all()->pluck('nombre','id');
		$ocupaciones        = \App\Models\CatOcupacion::all()->pluck('nombre','id');
		$identificaciones   = \App\Models\CatDocumento::all()->pluck('nombre','id');
		$edoscivil          = \App\Models\CatEstadoCivil::all()->pluck('nombre','id');

		$parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
		$nacionalidades     = \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
		$ladas = \App\Models\CatNacionalidad::all()->pluck('lada','id');
		$documentos     = \App\Models\CatDocumento::all()->pluck('nombre', 'id');
		$estados            = \App\Models\CatEstado::all()->pluck('nombre','id');       
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

		$informantes = \App\Models\Desaparecido::where('tipoPersona', 'INFORMANTE')->get();

		return view('desaparecido.edit',compact(
											'desaparecido',									
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
}
