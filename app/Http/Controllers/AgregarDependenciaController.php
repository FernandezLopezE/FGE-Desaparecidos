<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatDestinatarios;
use App\Models\CatDependencias;


class AgregarDependenciaController extends Controller
{
   public function show(){ 

           // $combo =CatCorreosExternos::all()->pluck('nombre','id');
        

           // $cedula = \App\Models\Cedula::find(1);
           
            //$cedula = \App\Models\Cedula::find($id);
           // $correosExternos        = CatCorreosExternos::all();
//   		$hojas = array( '1' => '1',
//						'2' => '2',
//						'3' => '3',
//						'4' => '4',
//						'5' => '5',
//						'6' => '6'); 
         $dependencias      = \App\Models\CatDependencias::all()->pluck('nombre','id');
         $documentos        = \App\Models\CatDocumentosCorreos::all()->pluck('nombre','id');
            return view('emails.form_dependencias_destinatarios',compact( 
                                                                        'dependencias',
                                                                        'documentos'
                                                                        ));
            
     
                
        
    }

    public function store_destinatario(Request $request)
	{
		//dd($request->toArray());
			$destinatario = CatDestinatarios::create([

				'nombre' 			=> $request->input('nombre'),
			    'cargo'				=> $request->input('cargo'),
		        'id_dependencia'	=> $request->input('dependencia'),	
			]);

		return response()->json($destinatario);
		
	}
     public function store_dependencia(Request $request)
	{
		//dd($request->toArray());
			$dependencia = CatDependencias::create([
				'nombre' 			=> $request->input('nombre'),
			    'correo'				=> $request->input('correo'),
		        'documento'	=> $request->input('doc'),

			]);

		return response()->json($dependencia);
		
	}
    
    public function update_dependencia(Request $request){
		$dependencia = CatDependencias::find($request->input('idDependencia'));
		
			$dependencia->nombre = $request->input('nombre');
			$dependencia->correo = $request->input('correo');
			$dependencia->documento = $request->input('doc');

		$dependencia->save();
		//$colorPrenda = CatColores::find($prenda->color);
		return response()->json($dependencia);
	}
    
    public function update_destinatario(Request $request){
		$destinatario = CatDestinatarios::find($request->input('idDestinatario'));
		
			$destinatario->nombre = $request->input('nombre');
			$destinatario->cargo = $request->input('cargo');
			$destinatario->id_dependencia = $request->input('dependencia');

		$destinatario->save();
		//$colorPrenda = CatColores::find($prenda->color);
		return response()->json($destinatario);
	}
}
