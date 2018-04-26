<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VestimentaController extends Controller
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
		//
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

		$vestimenta         = \App\Models\CatVestimenta::all()->pluck('nombre','id');
		$accesoriosObjetos  = \App\Models\CatAccesorioObjeto::all()->pluck('nombre','id');
		$tiposCalzados      = \App\Models\CatTiposCalzados::all()->pluck('nombre','id');
		$marcasCalzados     = \App\Models\CatMarcasCalzados::all()->pluck('nombre','id');
		$colores            = \App\Models\CatCalzadoColor::all()->pluck('nombre','id');

		return view('vestimenta.index',
					['vestimenta' 			=> $vestimenta,
						'tiposCalzados' 	=> $tiposCalzados,
						'marcasCalzados' 	=> $marcasCalzados, 
						'accesoriosObjetos' => $accesoriosObjetos, 
						'colores' 			=> $colores, 
						'desaparecido' 		=> $desaparecido,
					 ]);
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
