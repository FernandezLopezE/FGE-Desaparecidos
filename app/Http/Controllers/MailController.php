<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    

    public function store (Request $request){
    	$asunto = $request->input('name');
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

public function send()
{
	Mail::send(['text'=>'emails.contact'],['name','Lex'], function($message){
		$message->to('alejandro.f.toledo@gmail.com', 'Para ti men')->subjeCt('Este es un test');
		$message->from('alejandro.f.toledo@gmail.com');
	});
}

}
