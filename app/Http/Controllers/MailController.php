<?php

namespace App\Http\Controllers;

//use Dompdf\Dompdf;
//use Mpdf\Mpdf;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Desaparecido;

class MailController extends Controller
{
    
		//esta funcion envia correo electronico  a partir de una vista
    public function store (Request $request){
    	
    	$file = $request->file('file');
    	echo ($file);
    	Mail::send('emails.contact', $request->all(), function($msj) use ($file , $asunto){
    			$msj->subject($asunto);
    			$msj->to('alejandro.f.toledo@gmail.com');
    			$msj->attach($file);
    	});
    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/desaparecido/correo');
    }
    
    	//este genera un documento, apartir de una vista
   /* public function pdf(Request $request)
    {        
    	$h = $request['nombre'];
    	//return response()->json($h);
 		dd("ya entre aqui");

           

	        $pdf = PDF::loadView('emails.contact', $request->all());

	        //return $pdf->download('MiVistaContact.pdf');
	         return $pdf->stream('pdf');
	       
    }*/
	public function generar_boletin(Request $request)
    {   
    	$id = $request['idPersona'];

    //	$id = $idPersona;
    	


    	
    	$desaparecido = Desaparecido::find($id);

    	$view = view('desaparecidos.boletin', compact('desaparecido'))->render();
    	//return $view;
    	$pdf =\App::make('dompdf.wrapper');

    	$pdf -> loadHTML($view);
    	//return $id;
   	    		//dd("Aqui toy");
        $pdf->stream('boletin');
		
        	return "ya men";
/*
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
	         return $pdf->stream('pdf');*/
	       
    }

	public function send()
		{
			Mail::send(['text'=>'emails.contact'],['name','Lex'], function($message){
				$message->to('alejandro.f.toledo@gmail.com', 'Para ti men')->subjeCt('Este es un test');
				$message->from('alejandro.f.toledo@gmail.com');
			});
		}
	public function show_boletin()
	{
		return view('desaparecidos.boletin');
	}

}
