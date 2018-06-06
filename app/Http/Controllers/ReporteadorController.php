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
           $estados           = \App\Models\CatEstado::all()->pluck('nombre','id');
           //$municipios        = \App\Models\CatMunicipio::all()->pluck('nombre','id');
           $municipios        = \App\Models\CatMunicipio::where('idEstado', 30)->get()->pluck('nombre','id');
           $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
           $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');
           $tipoCabello = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','2')->pluck('nombre','id');
           $tipoBarba = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','3')->pluck('nombre','id');
           $tipoBigote = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','4')->pluck('nombre','id');
           $tipoPatilla= \App\Models\CatTiposCuerpo::where('idPartesCuerpo','5')->pluck('nombre','id');
           $tipoLabios = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','14')->pluck('nombre','id');
           $tamanoCabello = \App\Models\CatTamanoCuerpo::where('idPartesCuerpo','2')->pluck('nombre','id');
           $tamanoOjos = \App\Models\CatTamanoCuerpo::where('idPartesCuerpo','9')->pluck('nombre','id');
           $coloresCuerpo = \App\Models\CatColoresCuerpo::all()->pluck('nombre','id');
           $coloresCabello = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','2')->pluck('nombre','id');
           $coloresBarba = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','3')->pluck('nombre','id');
           $coloresBigote = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','4')->pluck('nombre','id');
           $coloresPatilla = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','5')->pluck('nombre','id');
           $coloresOjos = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','9')->pluck('nombre','id');
           
           $modificaciones = \App\Models\CatModificacionesCuerpo::where('nombre','!=','LUNARES')->where('nombre','!=','LARGA')->where('nombre','!=','DEPILADA')->where('nombre','!=','CERRADA')->where('nombre','!=','ALACIADO')->where('nombre','!=','OTRO')
               ->where('nombre','!=','SIN INFORMACIÓN')->where('nombre','!=','RASURADA/DEPILADA')->where('nombre','!=','RASURADA')->groupby('nombre')->distinct()->pluck('nombre','nombre');
           
           $particularidades = \App\Models\CatParticularidadesCuerpo::where('nombre','!=','CORTAS')->where('nombre','!=','OTRO')
               ->where('nombre','!=','SIN INFORMACIÓN')->where('nombre','!=','LARGAS')->groupby('nombre')->distinct()->pluck('nombre','nombre');
            
           $generos = array('H' => 'MASCULINO',
								 'M' => 'FEMENINO');
           $tiposFiltros = array('A1' => 'UBICACIÓN',
								'A2' => 'DATOS GENERALES DEL DESAPARACIDO',
								'A3' => 'CABELLO',
                                'A4' => 'BARBA, BIGOTE Y PATILLA',                              
                                'A5' => 'LABIOS Y OJOS',                                
                                'A6' => 'MODIFICACIONES Y PARTICULARIDADES');
           
           return view('reporteador.index',compact( 
                                            'nacionalidades',
                                            'estados',
                                            'municipios',
                                            'complexiones',
                                            'coloresPiel',
                                            'tipoCabello',
                                            'tipoBarba',
                                            'tipoBigote',
                                            'tipoPatilla',
                                            'tipoLabios',
                                            'tamanoCabello',
                                            'tamanoOjos',
                                            'coloresCabello',
                                            'coloresBarba',
                                            'coloresBigote',
                                            'coloresPatilla',
                                            'coloresOjos',
                                            'modificaciones',
                                            'particularidades',
                                            'tiposFiltros',
                                            'generos'
                    ));
            
     
                
        
    }
}
