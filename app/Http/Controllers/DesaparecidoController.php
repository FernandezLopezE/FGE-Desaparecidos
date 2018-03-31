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
		$municipios 		= array();
		$localidades 		= array();
		$colonias 			= array();
		$codigos 			= array();
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

		dd($request->toArray());	
		
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
			$familia = Familiar::create([
				'parentesco' 		=> $parentesco[$i],
				'nombres' 			=> $nombres[$i],
				'primerAp' 			=> $primerAp[$i],
				'segundoAp' 		=> $segundoAp[$i],
				'edad' 				=> $familiaresEdad[$i],
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
			$i++;
		}


		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
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
		$desaparecido = Desaparecido::find($id);

		$domicilio = Domicilio::where('idPersona','=',$desaparecido->id);

		$documento = Documento::where('idPersonaDesaparecida','=',$desaparecido->id);

		$antecedente = Antecedente::where('idPersona','=',$desaparecido->id);

		return view('documentos.edit',['desaparecido' => $desaparecido, 'domicilio' => $domicilio, 'documento' => $documento, 'antecedente' => $antecendente]);
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
		//Desaparecidos
		$desaparecido = Desaparecido::find($id);

		$desaparecido->nombre = $request->input('nombre');
		$desaparecido->apellidoPaterno = $request->input('apellidoPaterno');
		$desaparecido->apellidoMaterno = $request->input('apellidoMaterno');
		$desaparecido->apodo = $request->input('apodo');
		$desaparecido->edadAparente = $request->input('edadAparente');
		$desaparecido->id_nacionalidad = $request->input('id_nacionalidad');
		$desaparecido->fechaNacimiento = $request->input('fechaNacimiento');
		$desaparecido->id_edoCivil = $request->input('id_edoCivil');
		$desaparecido->genero = $request->input('genero');
		$desaparecido->embarazo = $request->input('embarazo');
		$desaparecido->periodoGestacion = $request->input('periodoGestacion');
		$desaparecido->rumores = $request->input('rumores');
		$desaparecido->pormenores = $request->input('pormenores');
		$desaparecido->escolaridad = $request->input('escolaridad');
		$desaparecido->ocupacion = $request->input('ocupacion');

		$desaparecido->save();

		//Domicilios
		$domicilio = Domicilio::where('idPersona','=',$desaparecido->id);

		$domicilio->tipoDireccion = $request->input('tipoDireccion');
		$domicilio->idMunicipio = $request->input('idMunicipio');
		$domicilio->idLocalidad = $request->input('idLocalidad');
		$domicilio->idColonia = $request->input('idColonia');
		$domicilio->calle = $request->input('calle');

		$domicilio->numExterno = $request->input('numExterno');
		$domicilio->numInterno = $request->input('numInterno');
		$domicilio->telefono = $request->input('telefono');

		$domicilio->idPersona = $request->input('idPersona');

		$domicilio->save();



		//Documentos identidad
		$identificacion =  Documento::where('idPersonaDesaparecidos','=',$desaparecido->id);

		$identificacion->identificacion = $request->input('identificacion');
		$identificacion->otraIdentificacion = $request->input('otroId');
		$identificacion->noIdentificacion = $request->input('noId');
		$identificacion->idPersonaDesaparecidos = $request->input('idPersona');

		$identificacion->save();

		//Antecedentes

		$antecedente = Antecedente::where('idPersona','=',$desaparecido->id);

		$antecedente->antecedentes = $request->input('antecendentes');
		$antecedente->mes = $request->input('mes');
		$antecedente->anio = $request->input('anio');
		$antecedente->observaciones = $request->input('observaciones');
		$antecedente->idPersonaDesaparecidos = $request->input('idPersona');
		$antecedente->idDelito = $request->input('idDelito');
		$antecedente->idCentroReclusion = $request->input('idCentro');

		$antecendente->save();

		return ('Update Hecho');

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
