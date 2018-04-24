<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntecedenteController extends Controller
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$antecedentes = \App\Models\Antecedente::create([
			'fecha'					=> $request->input('mesAnio'),
			'idDelito'				=> $request->input('idDelito'),
			'idCentroReclusion'		=> $request->input('idCentroReclusion'),
			'observaciones'			=> $request->input('observaciones'),
			'idDesaparecido'		=> $request->input('idDesaparecido'),
		]);

		$estatus = ($antecedentes) ? true : false ;
        return response()->json($estatus);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$desaparecido = \App\Models\Desaparecido::find($id);
		$delitos    = \App\Models\CatDelito::all()->pluck('nombre','id');
		$centros    = \App\Models\CatCentroReclusion::all()->pluck('nombre','id');

		return view('antecedentes.index',compact('desaparecido','delitos', 'centros'));
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
