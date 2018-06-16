<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteadorController extends Controller
{
    //
       public function show(){ 


      //$dependencias      = \App\Models\CatDependencias::all()->pluck('nombre','id');
         //$documentos        = \App\Models\CatDocumentosCorreos::all()->pluck('nombre','id');
           $nacionalidades 	= array('1' => 'MEXICANA',
								 '2' => 'EXTRANJERO');
           $estados            = \App\Models\CatEstado::all()->pluck('nombre','id');

		   $municipios = array();
           $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
           $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');
 
           $modificaciones = \App\Models\CatModificacionesCuerpo::where('nombre','!=','LUNARES')->where('nombre','!=','LARGA')->where('nombre','!=','DEPILADA')->where('nombre','!=','CERRADA')->where('nombre','!=','ALACIADO')->where('nombre','!=','OTRO')
               ->where('nombre','!=','SIN INFORMACIÓN')->where('nombre','!=','RASURADA/DEPILADA')->where('nombre','!=','RASURADA')->groupby('nombre')->distinct()->pluck('nombre','nombre');
           
           $particularidades = \App\Models\CatParticularidadesCuerpo::where('nombre','!=','CORTAS')->where('nombre','!=','OTRO')
               ->where('nombre','!=','SIN INFORMACIÓN')->where('nombre','!=','LARGAS')->where('nombre','!=','CORTE TIPO ESCOLAR')->where('nombre','!=','CORTE TIPO MILITAR')->where('nombre','!=','CORTE TIPO MOHICANO')->groupby('nombre')->distinct()->pluck('nombre','nombre');
            
           $generos = array('H' => 'MASCULINO',
								 'M' => 'FEMENINO');
           $tiposFiltros = array('A1' => 'UBICACIÓN DE LA DESAPARICIÓN',
								'A2' => 'DESCRIPCIÓN FÍSICA',								                                
                                'A3' => 'MODIFICACIONES Y PARTICULARIDADES DEL CUERPO');
           
           return view('reporteador.index',compact( 
                                            'nacionalidades',
                                            'estados',
                                            'municipios',
                                            'complexiones',
                                            'coloresPiel',                                            
                                            'modificaciones',
                                            'particularidades',
                                            'tiposFiltros',
                                            'generos'
                    ));
            
     
                
        
    }
}
