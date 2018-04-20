<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    

    public function store (Request $request){

    	Mail::send('emails.contact', $request->all(), function($msj){
    			$msj->subject('Correo de contacto');
    			$msj->to('alejandro.f.toledo@gmail.com');

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
