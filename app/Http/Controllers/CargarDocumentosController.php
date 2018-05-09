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

 	 public function create(Request $request)

    {        

    	
    		$id = '1';
            $datos = \App\Models\Desaparecido::where('idCedula', $id)
                                            ->where('tipoPersona', 'DESAPARECIDA')
                                            ->limit(1)
                                            ->get();
           
	        $desaparecido = \App\Models\Desaparecido::find($datos[0]->id);
	       
	      
	        $estado = "Veracruz";
	        $municipio  = "Xalapa";
	        $localidad = "Xalapa";
	        $referenciaLugar = "Lazaro cardenas, Plaza Cryztal";



	        $fechaHoy = new Carbon();//entra en todos los documentos
	        $hora =Carbon::parse($fechaHoy)->format('H:i');
	        dd($hora);

       		$anio =Carbon::parse($fechaHoy)->format('Y');//estas variables se ocupan en la carpeta Inv. hace referencia al año actual y mes actual
        	$mes =Carbon::parse($fechaHoy)->format('m');
         	
      		//Variables que entran en cada uno de los documentos
    		$desaparecidoNombre  = $desaparecido->persona->nombres  ." ". $desaparecido->persona->primerAp. " ". $desaparecido->persona->segundoAp;
    		$numCarpeta = "FEADPD/ZCX/".$id."/".$anio."-".$mes;
    		$numOficio = $id;
    		$vehiculoDescjripcion =($request['vehiculoDescripcion']);
    		$fiscalNombre  = $desaparecido->cedula->entrevistadorNombres  ." ". $desaparecido->cedula->entrevistadorPrimerAp. " ". $desaparecido->cedula->entrevistadorSegundoAp;
    		$fiscalCargo = $desaparecido->cedula->entrevistadorCargo;
    		$desaparecidoLugar = $referenciaLugar.", ".$localidad.", ".$municipio.", ". $estado;
    		

    		dd($desaparecidoLugar);
    	
    		
	    	
	    	//$numCarpeta = "FETA/344/SDF";
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


          /*  $datos = \App\Models\Desaparecido::where('idCedula', $id)
                                            ->where('tipoPersona', 'DESAPARECIDA')
                                            ->limit(1)
                                            ->get();*/
        
        //$desaparecido = \App\Models\Desaparecido::find($datos[0]->id);
       // $view = view('plantillas.form_24_albergues'/*, compact('desaparecido')*/)->render();
        /*$pdf =\App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);    
        $pdf->setPaper([0, 0, 1424, 864], 'landscape');
       	$pdf->stream('formato_'.time().'.pdf');
      	$output = $pdf->output();
      	//cada que se crea en esta ruta este PDF se remplaza por el existente por lo que no  satura el servidor con archivos. solo se ocupa uno a la vez
      	file_put_contents('pdftemporal.pdf', $output);
        return $pdf->stream('formato_'.time().'.pdf',array('Attachment'=>0));*/
        

    	//METODOS PARA GENERAR LOS PDFS, se hacen en funcion del nombre del documento que reciba en el Request
	    	$view = view($nombreDocumento, compact('datos'))->render();
	        $pdf =\App::make('dompdf.wrapper');
	        $pdf -> loadHTML($view); 
	        $pdf->setPaper([0, 0, 1424, 864], 'landscape');
	        //cada que se crea en esta ruta este PDF se remplaza por el existente por lo que no  satura el servidor con archivos. solo se ocupa uno a la vez
	        file_put_contents($nombreDocumento.'.pdf', $output);
	        return $nombreDocumento.'.pdf';
    }//acaba el create





}//llave de clase


