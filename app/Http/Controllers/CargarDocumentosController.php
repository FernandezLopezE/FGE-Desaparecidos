<?php

namespace App\Http\Controllers;
//require __DIR__.'/vendor/autoload.php';
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use PhpOffice\PhpWord\IOFactory;
use \PhpOffice\PhpWord\Settings;

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

		//prueba de conversion pdf

				// Make sure you have `dompdf/dompdf` in your composer dependencies.
				Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
				// Any writable directory here. It will be ignored.
				Settings::setPdfRendererPath('.');

				$phpWordPDF = IOFactory::load('../storage/oficios/direcciongeneraldetransitodelestado.docx', 'Word2007');
				$phpWordPDF ->save('../storage/oficios/direcciongeneraldetransitodelestado.pdf', 'PDF');


			$nombreArchivo =('direcciongeneraldetransitodelestado'.'.docx');
			return response()->json($nombreArchivo);
			

 	}

 	 public function create()
    {        

          /*  $datos = \App\Models\Desaparecido::where('idCedula', $id)
                                            ->where('tipoPersona', 'DESAPARECIDA')
                                            ->limit(1)
                                            ->get();*/
        
        //$desaparecido = \App\Models\Desaparecido::find($datos[0]->id);
        $view = view('plantillas.form_72_solicitud_imei'/*, compact('desaparecido')*/)->render();
        $pdf =\App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);
        
        
        $pdf->setPaper([0, 0, 1424, 864], 'landscape');

        return $pdf->stream('formato_'.time().'.pdf');

        //return view('desaparecido.show',compact('desaparecido'));

        //dd($desaparecido);
        //$h = $request['nombre'];
        //return response()->json($h);

        //return $id;
                //dd("Aqui toy");
       // $pdf->stream('boletin');
 // $pdf = PDF::loadView(['text'=>'desaparecidos.boletin'], $request->all());
       // dd("ya entre aqui");
            //return $pdf->download('MiVistaContact.pdf');
         
           
    }



}


