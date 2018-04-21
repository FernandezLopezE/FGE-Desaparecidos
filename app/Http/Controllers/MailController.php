<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Barryvdh\DomPDF\Facade as PDF;

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
    public function pdf(Request $request)
    {        
    	$h = $request['nombre'];
    	//return response()->json($h);
 		dd("ya entre aqui");

           

	        $pdf = PDF::loadView('emails.contact', $request->all());

	        //return $pdf->download('MiVistaContact.pdf');
	         return $pdf->stream('pdf');
	       
    }
	

	public function send()
		{
			Mail::send(['text'=>'emails.contact'],['name','Lex'], function($message){
				$message->to('alejandro.f.toledo@gmail.com', 'Para ti men')->subjeCt('Este es un test');
				$message->from('alejandro.f.toledo@gmail.com');
			});
		}

}
