<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desaparecido;
use App\Models\Documento;
use App\Models\Antecedente;
use App\Models\Domicilio;
use App\Http\Requests\DesaparecidoDomicilio;
use App\Http\Requests\DesaparecidoRequest;

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
			'1' => 'SI',
			'0' => 'NO');
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

		$escolaridades		= \App\Models\CatEscolaridad::all()->pluck('nombre','id');
		$ocupaciones	 	= \App\Models\CatOcupacion::all()->pluck('nombre','id');
		$nacionalidades 	= \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
		$municipios 		= \App\Models\CatMunicipio::all()->pluck('nombre','id');
		$localidades 		= \App\Models\CatLocalidad::all()->pluck('nombre','id');
		$colonias 			= \App\Models\CatColonia::all()->pluck('nombre','id'); 
		$delitos 			= \App\Models\CatDelito::all()->pluck('nombre','id');
		$centros 			= \App\Models\CatCentroReclusion::all()->pluck('nombre','id');
		$estados 			= \App\Models\CatEstado::all()->pluck('nombre','id');
		$codigos 			= \App\Models\CatEstadoCivil::all()->pluck('codigoPostal','id');
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
						'edoscivil' => $edoscivil
					]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(DesaparecidoRequest $request)
	{

	   /* //Desaparecidos
		$desaparecido = new Desaparecido();

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
		$domicilio = new Domicilio();

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
*/
		//Documentos identidad
		$identificacion = new Documento();
		

		$identificacion->identificacion = $request->input('identificacion');
		$identificacion->otraIdentificacion = $request->input('otroId');
		$identificacion->noIdentificacion = $request->input('noId');
		$identificacion->idPersonaDesaparecidos = $request->input('idPersona');

		//dd($identificacion);

		$identificacion->save();

	   /* //Antecedentes

		$antecedente = new Antecedente();

		$antecedente->antecedentes = $request->input('antecendentes');
		$antecedente->mes = $request->input('mes');
		$antecedente->anio = $request->input('anio');
		$antecedente->observaciones = $request->input('observaciones');
		$antecedente->idPersonaDesaparecidos = $request->input('idPersona');
		$antecedente->idDelito = $request->input('idDelito');
		$antecedente->idCentroReclusion = $request->input('idCentro');

		$antecendente->save();

*/

		return ("Hecho");
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
