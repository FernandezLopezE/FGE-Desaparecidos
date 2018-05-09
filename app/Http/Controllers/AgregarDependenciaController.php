<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatDestinatarios;

class AgregarDependenciaController extends Controller
{
   public function show(){ 

           // $combo =CatCorreosExternos::all()->pluck('nombre','id');
        

           // $cedula = \App\Models\Cedula::find(1);
           
            //$cedula = \App\Models\Cedula::find($id);
           // $correosExternos        = CatCorreosExternos::all();
   		$hojas = array( '1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
						'6' => '6'); 
         $dependencias      = \App\Models\CatDependencias::all()->pluck('nombre','id');
            return view('emails.form_dependencias_destinatarios',compact( 
                                                                        'dependencias',
                                                                        'hojas'
                                                                        ));
            
     
                
        
    }

    public function store_destinatario(Request $request)
	{
		//dd($request->toArray());
		



			$destinatario = CatDestinatarios::create([

				'nombre' 			=> $request->input('correo'),
			    'hoja'				=> $request->input('hoja'),
		        'id_dependencia'	=> $request->input('dependencia'),


				
			]);

		return response()->json($destinatario);
		
	}
}
