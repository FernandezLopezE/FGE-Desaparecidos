<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosDentalesController extends Controller
{
    public function show_datos_dentales(){
        $dienteTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        return view('desaparecidos.form_datos_dentales',[
        			'dienteTamano' => $dienteTamano
        		]);
    }
}
