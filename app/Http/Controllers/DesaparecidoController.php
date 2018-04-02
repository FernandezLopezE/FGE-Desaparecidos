<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Desaparecido;
use App\Models\Familiar;
use App\Models\Documento;
use App\Models\Antecedente;
use App\Models\Domicilio;

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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$desaparecido = new Desaparecido();

		$identificacion = array(
			'IFE' => 'IFE',
			'Cartilla SM' => 'Cartilla SM',
			'Licencia' => 'Licencia',
			'Tarjetón' => 'Tarjetón',
			'Cartilla' => 'Cartilla',
			'Pasaporte' => 'Pasaporte',
			'Otro(especifique)' => 'Otro(especifique)');
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

		$anios = array('2000' => '2000', '2001' => '2001');
		$sexos = array('MASCULINO' => 'MASCULINO', 'FEMENINO' => 'FEMENINO');
		$tiposDireccion = array('PERSONAL' => 'PERSONAL', 'TRABAJO' => 'TRABAJO');
		$parentescos = array('MADRE' => 'MADRE', 'PADRE' => 'PADRE', 'HIJO' => 'HIJO');

		$escolaridades		= \App\Models\CatEscolaridad::all()->pluck('nombre','id');
		$ocupaciones	 	= \App\Models\CatOcupacion::all()->pluck('nombre','id');
		$nacionalidades 	= \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
		$estados 			= \App\Models\CatEstado::all()->pluck('nombre','id');
		$municipios 		= \App\Models\CatMunicipio::limit(10)->pluck('nombre','id');
		$localidades 		= \App\Models\CatLocalidad::limit(10)->pluck('nombre','id');
		$colonias 			= \App\Models\CatColonia::limit(10)->pluck('nombre','id');
		$codigos 			= \App\Models\CatColonia::limit(10)->pluck('codigoPostal','id');
		/*$municipios 		= array();
		$localidades 		= array();
		$colonias 			= array();
		$codigos 			= array();*/
		$delitos 			= \App\Models\CatDelito::all()->pluck('nombre','id');
		$centros 			= \App\Models\CatCentroReclusion::all()->pluck('nombre','id');		
		$edoscivil 			= \App\Models\CatEstadoCivil::all()->pluck('nombre','id');

		return view('desaparecidos.form',
					[
						'identificacion' => $identificacion,
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
						'municipios' => $municipios,
						'localidades' => $localidades,
						'colonias' => $localidades,
						'codigos' => $codigos,
						'sexos' => $sexos,
						'edoscivil' => $edoscivil,
						'tiposDireccion' => $tiposDireccion,
						'parentescos' => $parentescos
					]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CreateDesaparecidoRequest $request)
	{

		//dd(empty($request->input('familiaresNombres')));	
		
		$persona = Persona::create([
						'nombres' 			=> $request->input('nombres'),
						'primerAp' 			=> $request->input('primerAp'),
						'segundoAp'			=> $request->input('segundoAp'),
						'fechaNacimiento'	=> $request->input('fechaNacimiento'),
						'sexo' 				=> $request->input('sexo'),
						'idNacionalidad'	=> $request->input('idNacionalidad'),
					]);

		$desaparecido = Desaparecido::create([
						'idPersona' 				=> $persona->id,
						'apodo' 					=> $request->input('apodo'),
						'edadAparente' 				=> $request->input('edadAparente'),
						'edadExtravio' 				=> $request->input('edadExtravio'),
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

		return $this->show($desaparecido->id);


		
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
}
