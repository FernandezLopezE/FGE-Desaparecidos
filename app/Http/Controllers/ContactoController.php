<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacto;
use App\Models\Desaparecido;

class ContactoController extends Controller
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
		$desaparecido = \App\Models\Desaparecido::find($id);

		$redes 		= \App\Models\CatRedesSociales::all()->pluck('nombre','nombre');
		$ladas 		= \App\Models\CatNacionalidad::all()->pluck('lada','id');

		$tiposDireccion = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'FAMILIAR' => 'FAMILIAR');
        $tiposContacto = array('TELEFONO' => 'TELEFONO',
								'CORREO' => 'CORREO ELECTRÓNICO',
								'REDSOCIAL' => 'RED SOCIAL');

		$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'CELULAR' => 'CELULAR');            

		return view('desaparecido.index',compact(
												'desaparecido',							
                                                'redes',												
												'ladas',												
												'tiposDireccion',
                                                'tiposContacto',
												'tiposTelefonos'                
											));
	}
		
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{	
        $tipoContacto = $request->input('tipoContacto');
        
        if ($tipoContacto == 'TELEFONO'){            
			$tipo_telefono = $request->input('tipoTel');
			$lada = $request->input('lada');
			$ext = $request->input('ext');
			foreach ($request->input('telefono') as $index => $value) {
				$telefonos = array('tipoContacto' => $tipoContacto,
									'tipoTel' => $tipo_telefono[$index],
									'lada' => $lada[$index],
									'telefono' => $value,
									'ext' => $ext[$index]
							);
			}
        
			$contactos = \App\Models\Contacto::create([	            
	            'idDesaparecido' 	=> $request->input('idDesaparecido'),
				'tipoContacto'		=> $request->input('tipoContacto'),
				'datos'          	=> json_encode($telefonos),	

			]);
		}else {
            if ($tipoContacto == 'CORREO'){
            	$contactos = \App\Models\Contacto::create([            
					'idDesaparecido' 	=> $request->input('idDesaparecido'),
					'tipoContacto'		=> $request->input('tipoContacto'),
					'datos'          	=> json_encode(['tipoContacto' => $tipoContacto, 'correo' => $request->input('correoElectronico')]),	
            
				]);
	        } else {
				if ($tipoContacto == 'REDSOCIAL'){
	            	$contactos = \App\Models\Contacto::create([            
	            		'idDesaparecido'	=> $request->input('idDesaparecido'),
						'tipoContacto' 		=> $request->input('tipoContacto'),
						'datos'				=> json_encode(array(
															'tipoContacto' => $tipoContacto,
															'red_social' => $request->input('redesSociales'),
															'nick' =>$request->input('nombreUsuario')
															)),            
					]);
	        	} 
			}            
        }

		return response()->json($contactos);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function show($idDesaparecido)
	{
		$desaparecido = \App\Models\Desaparecido::find($idDesaparecido);		
        $redes     = \App\Models\CatRedesSociales::all()->pluck('nombre','nombre');
        
		//$ladas 				= \App\Models\CatNacionalidad::all()->pluck('lada','id');	

		$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
								'TRABAJO' => 'TRABAJO',
								'CELULAR' => 'CELULAR');
        $tiposContacto = array(     'SELECCIONE' => 'SELECCIONE UN TIPO',
                                    'TELEFONO' => 'TELEFONO',
									'CORREO' => 'CORREO ELECTRÓNICO',
									'REDSOCIAL' => 'RED SOCIAL');
	
		return view('contactos.index',
					compact('cedula',
								'desaparecido',
                                'tiposContacto',
                                'redes',
								'tiposTelefonos'                            
							));		
	}

	// public function show($id)
	// {
	// 	$desaparecido = \App\Models\Desaparecido::find($id);
	// 	$delitos    = \App\Models\CatDelito::all()->pluck('nombre','id');
	// 	$centros    = \App\Models\CatCentroReclusion::all()->pluck('nombre','id');

	// 	return view('antecedentes.index',compact('desaparecido','delitos', 'centros'));
	// }

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
		$desaparecido = Desaparecido::find($id);
		$contactos = Contacto::find($desaparecido->contactos[0]['id']);
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
