<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteadorController extends Controller
{
    //
       public function show(){ 


         //$dependencias      = \App\Models\CatDependencias::all()->pluck('nombre','id');
         //$documentos        = \App\Models\CatDocumentosCorreos::all()->pluck('nombre','id');
           $estados            = \App\Models\CatEstado::all()->pluck('nombre','id');
            return view('reporteador.index',compact(                                           
											'estados'
										));
            
     
                
        
    }
}
