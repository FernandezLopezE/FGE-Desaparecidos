<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoletinController extends Controller
{
    
    public function show($id)
    {        

    	dd("ya entre");
    	//$h = $request['nombre'];
    	//return response()->json($h);
    	 $html = view('pdf.index',array('QRCode'=>$img_b64,'Folio'=>$folio))->render();
 			require_once("DomPdf/dompdf_config.inc.php");

 				 $mpdf->WriteHTML($html);

				$dompdf = new DOMPDF();
				$dompdf->load_html(['text'=>'desaparecidos.boletin'], $request->all());
				$dompdf->render();
				$dompdf->stream("sample.pdf");

           

	       // $pdf = PDF::loadView(['text'=>'desaparecidos.boletin'], $request->all());
	        dd("ya entre aqui");
	        //return $pdf->download('MiVistaContact.pdf');
	         return $pdf->stream('pdf');
	       
    }

	
}
