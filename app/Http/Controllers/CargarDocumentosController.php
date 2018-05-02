<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
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



//DE AQUI EN ADELANTE APARECERAN LO REFERENTE A LA CREACION DE LOS WORDS

 	public function crearDocumento( Request $request)
	    {
	    	//dd("ya entre men");
	    	
	    	$nombreDestinatario = "Alejandro Fernandez";
	    	$fechaHoy = new Carbon();
	    	$numCarpeta = "FETA/344/SDF";
	    	$numOficio ="123";
	    	$anio="2018";
	    	$articulos = "Ingresar aqui los articulos según sea el caso";
	    	$nombreDesaparecido = "Berenice Contreras";
	    	$lugarVisto ="Parque Juarez ";
	    	$fechaVisto =new Carbon();
	    	$horaVisto = "3:00 p.m.";
	    	$descripcionVehiculo= " Tsuru II color rojo";
	    	$nombreFiscal = "Avelardo Rodriguez";
	    	$numFiscal = "455";
	    	$numDistrito = "XI" ;
	    	$distrito = "VI";



	    	$phpWord = new \PhpOffice\PhpWord\TemplateProcessor('oficios-plantillas/transitoysecretariadecomunicacionesytransporte-direcciongeneraldetransitodelestado.docx');

	    	$phpWord->setValue('nombreDestinatario',$nombreDestinatario);
	    	$phpWord->setValue('fechaHoy',	$fechaHoy);
	    	$phpWord->setValue('numCarpeta', $numCarpeta );
	    	$phpWord->setValue('numOficio', $numOficio );
	    	$phpWord->setValue('anio',	$anio);
	    	$phpWord->setValue('articulos',$articulos);
	    	$phpWord->setValue('nombreDesaparecido', $nombreDesaparecido );
	    	$phpWord->setValue('lugarVisto',	$lugarVisto );
	    	$phpWord->setValue('fechaVisto', 	$fechaVisto );
	    	$phpWord->setValue('horaVisto', 	$horaVisto );
	    	$phpWord->setValue('descripcionVehiculo',	$descripcionVehiculo);
	    	$phpWord->setValue('nombreFiscal', $nombreFiscal );
	    	$phpWord->setValue('numFiscal',$numFiscal);
	    	$phpWord->setValue('numDistrito', $numDistrito);
	    	$phpWord->setValue('distrito', $distrito);			


			$phpWord->saveAs('../storage/oficios/direcciongeneraldetransitodelestado'.'.docx');
			$nombreArchivo =('direcciongeneraldetransitodelestado'.'.docx');
			return response()->json($nombreArchivo);
			

 	}

}
