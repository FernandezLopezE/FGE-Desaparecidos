<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargarDocumentosController extends Controller
{
    

    public function show(){
		//$idCedula = $id;
		//$cedula = \App\Models\Cedula::find($idCedula);

			//esto es para la vista de historial dental y radiografias
		$option = array(
			'0' => 'SIN INFORMACION',
			'1' => 'SI');
		/*$meses = array(
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
			'12' => 'DICIEMBRE');*/


		return view('cargardocumentos.historialdental_radiografia',[
			//'id' => $cedula->id,
			'option' =>$option
			]);		
	}
	public function store(Request $request)
	    {
	    	$imageName = request()->file->getClientOriginalName();
	        request()->file->move(public_path('upload'), $imageName);
	        
	    	return response()->json(['uploaded' => '/upload/'.$imageName]);
 	}

}
