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

			$sexos = array('H' => 'MASCULINO', 'M' => 'FEMENINO');
			$escolaridades      = \App\Models\CatEscolaridad::all()->pluck('nombre','id');
            $redes              = \App\Models\CatRedesSociales::all()->pluck('nombre','nombre');
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
            $tiposContacto = array('TELEFONO' => 'TELEFONO',
									'CORREO' => 'CORREO ELECTRÓNICO',
									'REDSOCIAL' => 'RED SOCIAL');

			$tiposTelefonos = array('PERSONAL' => 'PERSONAL',
									'TRABAJO' => 'TRABAJO',
									'CELULAR' => 'CELULAR');            

			$informantes = \App\Models\Desaparecido::where('tipoPersona', 'INFORMANTE')->get();

			return view('desaparecido.index',compact(
												'desaparecido',
												'cedula',
												'sexos',
												'escolaridades',
                                                'redes',                
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
                                                'tiposContacto',
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
	public function store(Request $request)
	{


	
        $tipoContacto = $request->input('tipoContacto');
        
        if ($tipoContacto == 'TELEFONO'){
            
       	$tipo_telefono = $request->input('tipoTel');
		$lada = $request->input('lada');
		$ext = $request->input('ext');
		foreach ($request->input('telefono') as $index => $value) {
			$telefonos[] = array('tipoTel' => $tipo_telefono[$index],
								'lada' => $lada[$index],
								'telefono' => $value,
								'ext' => $ext[$index]
						);
		}
        
		$contactos = \App\Models\Contacto::create([
            
            'idDesaparecido' 		=> $request->input('idDesaparecido'),
			'tipoContacto'		=> $request->input('tipoContacto'),
			'datos'          	=> json_encode($telefonos),	
            
		

//			'idDesaparecido' 		=> $request->input('idDesaparecido'),
//			'correoElectronico'		=> $request->input('correoElectronico'),
//			'telefono'          	=> json_encode($telefonos),		 
//			 'redesSociales'		=> json_encode(array(
//			 									'redesSociales' => $request->input('redesSociales'))),

		]);
             }else{
            if ($tipoContacto == 'CORREO'){
            	$contactos = \App\Models\Contacto::create([
            
            'idDesaparecido' 		=> $request->input('idDesaparecido'),
			'tipoContacto'		=> $request->input('tipoContacto'),
			'datos'          	=> json_encode($request->input('correoElectronico')),	
            
		]);
        } else{
               if ($tipoContacto == 'REDSOCIAL'){
            	$contactos = \App\Models\Contacto::create([
            
            'idDesaparecido' 		=> $request->input('idDesaparecido'),
			'tipoContacto'		    => $request->input('tipoContacto'),
			'datos'          	    => json_encode(array( 'RED SOCIAL' => $request->input('redesSociales'), 'NOMBRE DE USUARIO' =>$request->input('nombreUsuario') )),	
            
		]);
        } 
            }
            
        }
       

		return response()->json($contactos);
		

		// 	'fecha'					=> $request->input('mesAnio'),
		// 	'idDelito'				=> $request->input('idDelito'),
		// 	'idCentroReclusion'		=> $request->input('idCentroReclusion'),
		// 	'observaciones'			=> $request->input('observaciones'),
		// 	'idDesaparecido'		=> $request->input('idDesaparecido'),
		// ]);

		// $estatus = ($antecedentes) ? true : false ;
  //       return response()->json($estatus);
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

		
		$contactos = Contacto::find($idDesaparecido);
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
