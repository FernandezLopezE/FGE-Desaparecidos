<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaparicionController extends Controller
{
  public function show($id){
	
		 $desaparecido = \App\Models\Desaparecido::find($id);

			//esto es para la vista de historial dental y radiografias
		
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


		return view('desaparicion.index',[
			'desaparecido' => $desaparecido
			
			]);		
	}// end del show

}
