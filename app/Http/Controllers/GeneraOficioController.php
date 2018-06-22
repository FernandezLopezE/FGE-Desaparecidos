<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class GeneraOficioController extends Controller
{
	public function export($type){

		if ($type == "pdf") {
            $view = view('plantillas.form_24_hospitales')->render();;
            //$view = view('plantillas.form_24_punto_revision');
	 	    $pdf =\App::make('dompdf.wrapper');
	 	    $pdf ->loadHTML($view);
	 	   
	 		$pdf->setPaper('oficio');

	 		return $pdf->stream('formato_'.time().'.pdf');
        }
	}
}