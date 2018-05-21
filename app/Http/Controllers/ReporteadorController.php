<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteadorController extends Controller
{
    //
       public function show(){ 


         //$dependencias      = \App\Models\CatDependencias::all()->pluck('nombre','id');
         //$documentos        = \App\Models\CatDocumentosCorreos::all()->pluck('nombre','id');
           $estados           = \App\Models\CatEstado::all()->pluck('nombre','id');
           //$municipios        = \App\Models\CatMunicipio::all()->pluck('nombre','id');
           $municipios        = \App\Models\CatMunicipio::where('idEstado', 30)->get()->pluck('nombre','id');
           $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
           $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');
            return view('reporteador.index',compact(                                           
											'estados',
                                            'municipios',
                                            'complexiones',
                                            'coloresPiel'
										));
            
     
                
        
    }
}
