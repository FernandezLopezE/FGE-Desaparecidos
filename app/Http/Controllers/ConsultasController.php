<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Models\CatDiente;

class ConsultasController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	public function jsonCedulas(Request $request)
	{
        \DB::statement('SET @rownum = 0');
       $cedulas = \DB::table('desaparecidos_cedula_investigacion as c')
                            ->leftJoin('desaparecidos_personas as d', 'c.id', '=',\DB::raw('d.idCedula AND d.tipoPersona = "DESAPARECIDA"'))
                            ->leftJoin('persona as p', 'd.idPersona', '=', 'p.id')
                            ->leftJoin('cat_nacionalidad as n', 'p.idNacionalidad', '=', 'n.id')

                            
                            ->select('c.id','c.idDialecto', 'c.carpeta', 'c.idCarpeta', \DB::raw('DATE_FORMAT(c.created_at, "%d/%m/%Y %H:%m") as created_at'), 'p.nombres', \DB::raw('ifnull(p.primerAp,"")as primerAp') , \DB::raw('ifnull(p.segundoAp,"") as segundoAp'), 'p.sexo','n.nombre as nacionalidad', 'd.apodo', 'd.edadExtravio',\DB::raw('@rownum := @rownum + 1 AS rownum'))
                            //->orderByRaw('rownum','CONCAT(p.nombres, " ", ifnull(p.primerAp,"")," ",ifnull( p.segundoAp,""))')
                            ->orderBy('created_at', 'desc')
                            ->get();

		return response()->json($cedulas);
	}
 
    public function jsonDesaparecidosPersona(Request $request)
	{
        $nacionalidad = $request->input('nacionalidad');
        $estados = $request->input('estados');
        $municipios = $request->input('municipios');
        $cPiel = $request->input('cPiel');
        $complexion = $request->input('complexion'); 
        $modif = $request->input('modif');
        $partic = $request->input('partic');
        $genero = $request->input('genero');
        $fechaRep1 = $request->input('fechaRep1');
        $fechaRep2 = $request->input('fechaRep2');
        //-o-o-o-o-o-o-o-o-PESO-o-o-o-o-o-o-o-o-o-o-o-o
        if ($request->input('peso1') == '') {
            $peso1=0;
        }else{
            $peso1 = $request->input('peso1');
        }
        if ($request->input('peso2') == '') {
            $peso2=600;
        }else{
            $peso2 = $request->input('peso2');
        }
        //-o-o-o-o-o-o-o-o-ESTATURA-o-o-o-o-o-o-o-o-o-o-o-o
        if ($request->input('estatura1') == '') {
            $estatura1=0;
        }else{
            $estatura1 = $request->input('estatura1');
        }
        if ($request->input('estatura2') == '') {
            $estatura2=400;
        }else{
            $estatura2 = $request->input('estatura2');
        }
        //-o-o-o-o-o-o-o-o-EDAD-o-o-o-o-o-o-o-o-o-o-o-o
        if ($request->input('rg') == '') {
            $rg=0;
        }else{
            $rg = $request->input('rg');

        }
        if ($request->input('rg2') == '') {
            $rg2=150;
        }else{
            $rg2 = $request->input('rg2');

        }
        //-o-o-o-o-o-o-oFECHA DESAPARICIONo-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-
        if ($request->input('fechaDes1') == '') {
            $desaparicionFecha1='1900-01-01';
        }else{
            $fechaDes1 = $request->input('fechaDes1');
            $desaparicionFecha1 = Carbon::createFromFormat('d/m/Y',$fechaDes1)->format('Y-m-d');
        }
        if ($request->input('fechaDes2') == '') {
            $desaparicionFecha2=Carbon::now();
        }else{
            $fechaDes2 = $request->input('fechaDes2');
            $desaparicionFecha2 = Carbon::createFromFormat('d/m/Y',$fechaDes2)->format('Y-m-d');

        }
        //-o-o-o-o-o-FECHA REPORTEo-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-
         if ($request->input('fechaRep1') == '') {
            $reporteFecha1='1900-01-01';
             
        }else{
            $fechaRep1 = $request->input('fechaRep1');
            $reporteFecha1 = Carbon::createFromFormat('d/m/Y',$fechaRep1)->format('Y-m-d');
        }
        if ($request->input('fechaRep2') == '') {
            $reporteFecha2=Carbon::now();
        }else{
            $fechaRep2 = $request->input('fechaRep2');
            $reporteFecha2 = Carbon::createFromFormat('d/m/Y',$fechaRep2)->format('Y-m-d');
        }    
    
    \DB::statement('SET @rownum = 0');
    $desaparecidos = \DB::table('desaparecidos_personas as des')                           
    ->leftjoin('persona as p', 'des.idPersona', '=', 'p.id')
    ->leftjoin('desaparecidos_cedula_investigacion AS dci', 'dci.id', '=', 'des.idCedula')
    ->leftjoin('desaparecidos_domicilios as dd', 'dd.idDesaparecido', '=', 'des.id', 'and', 'dd.tipoDireccion', '=', 'LUGAR DE AVISTAMIENTO')
    ->leftjoin('cat_estado AS ce', 'dd.idEstado', '=', 'ce.id') 
    ->leftjoin('Cat_complexion AS cc', 'des.idComplexion', '=', 'cc.id')
    ->leftjoin('Cat_color_piel AS ccp', 'des.idColorPiel', '=', 'ccp.id')
    ->leftjoin('cat_municipio AS cm', 'dd.idMunicipio', '=', 'cm.id', 'and', 'cm.idEstado', '=', 'dd.idEstado')
    ->leftjoin('cat_nacionalidad AS cn', 'p.idNacionalidad', '=', 'cn.id')
    ->leftjoin('cedula_partes_cuerpo as cpc', 'cpc.idPersonaDesaparecida', '=', 'des.id')
    ->leftjoin('cat_partes_cuerpo as cpartes', 'cpc.idPartesCuerpo', '=', 'cPartes.id')
    ->leftjoin('cat_tipos_cuerpo as ctc', 'cpc.idTipoCuerpo', '=', 'ctc.id' , 'and', 'ctc.idPartesCuerpo', '=', 'cpc.idPartesCuerpo')
    ->leftjoin('pivot_submodi_cuerpo as psubm', 'psubm.idCedulaPartesCuerpo', '=', 'cpc.id')
    ->leftjoin('cat_modificaciones_cuerpo as cat_mc', 'cat_mc.id', '=', 'psubm.idModificaciones')
    ->leftjoin('pivot_subparti_cuerpo as psubp','psubp.idCedulaPartesCuerpo','=','cpc.id')
    ->leftjoin('cat_particularidades_cuerpo as cparti','cparti.id','=','psubp.idParticularidades')
  

    ->select('des.id as id', \DB::raw('CONCAT(p.nombres, " ", ifnull(p.primerAp,"")," ",ifnull( p.segundoAp,""))AS nombre'), 'p.sexo as sexo',\DB::raw('DATE_FORMAT(substr(dci.desaparicionFecha, 1,10), "%d/%m/%Y") as fecha'),'des.apodo as apodo',\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED) as edad'),'des.estatura as estatura','des.peso as peso','cc.id as idComplexion','cc.nombre as complexion','ccp.id as idCPiel','ccp.nombre as cPiel','ce.id as idEstado','ce.nombre as estado','cm.id as idMuni','cm.nombre as municipio',
                     'cn.nombre as nacionalidad',\DB::raw('DATE_FORMAT(dci.fechaVisita,"%d/%m/%Y")  as fechaReporte'), 'dci.desaparicionObservaciones as hechos','des.fotoDesaparecido as foto',\DB::raw('@rownum := @rownum + 1 AS rownum'))

            //{->where('des.edadExtravio', 'like', "$rg%")
                            //->where('des.edadExtravio', 'like', "$rg2%")
                            //->whereBetween('des.edadExtravio', [$rg, $rg2])}
                            ->where('tipoPersona','DESAPARECIDA')
                            ->where('tipoDireccion','LUGAR DE AVISTAMIENTO')
                            ->where( function ($q_nacionalidad) use ($nacionalidad) {
                               if ($nacionalidad == ['1']) {                                      
                                        $q_nacionalidad->whereIn('p.idNacionalidad', $nacionalidad);
                                     }else if($nacionalidad == ['2']) {
                                      $nacionalidad = '1';
                                        $q_nacionalidad->where('p.idNacionalidad','!=', $nacionalidad);
                                     }
                            })
                            ->when($genero, function ($q_genero) use ($genero) {
                                return $q_genero->whereIn('p.sexo', $genero);
                            })
                            //->where('p.sexo',$masc)
                            ->whereBetween(\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED)'), [$rg, $rg2])
                            ->whereBetween(\DB::raw('CAST(des.estatura AS SIGNED)'), [$estatura1, $estatura2])
                            ->whereBetween(\DB::raw('CAST(des.peso AS SIGNED)'), [$peso1, $peso2])
                            ->whereBetween('dci.desaparicionFecha', [$desaparicionFecha1, $desaparicionFecha2])
                            ->whereBetween('dci.fechaVisita', [$reporteFecha1, $reporteFecha2])
                            ->when($estados, function ($q_estado) use ($estados) {
                                return $q_estado->whereIn('dd.idEstado', $estados);
                            })
                            ->when($municipios, function ($q_municipio) use ($municipios) {
                                return $q_municipio->whereIn('dd.idMunicipio', $municipios);
                            })
                            ->when($cPiel, function ($q_cPiel) use ($cPiel) {
                                return $q_cPiel->whereIn('des.idColorPiel', $cPiel);
                            })
                            ->when($complexion, function ($q_complexion) use ($complexion) {
                                return $q_complexion->whereIn('des.idComplexion', $complexion);
                            }) 
                            ->when($modif, function ($q_modif) use ($modif) {
                                return $q_modif->whereIn('cat_mc.nombre', $modif); 
                           
                            })
                            ->when($partic, function ($q_partic) use ($partic) {
                                return $q_partic->whereIn('cparti.nombre', $partic); })

                            //->where('des.edadExtravio', 'like', "$rg2%")
                            ->distinct()
                            ->get();

 //dd($desaparecidos);
                        
        $i = 0;
        $count = count($desaparecidos);
        if($count > 0){
            foreach ($desaparecidos as $value) {                   
             $partesCuerpoRostro = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->leftjoin('cat_tamano_cuerpo as tamaCuerpo','tamaCuerpo.id','=','cpc.idTamanoCuerpo')
                        ->leftjoin('cat_tipos_cuerpo as tipoCuerpo','tipoCuerpo.id','=','cpc.idTipoCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.idColoresCuerpo',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otroColor',
                                'cpc.idTamanoCuerpo',
                                'tamaCuerpo.nombre as tamano',
                                'cpc.idTipoCuerpo',
                                'tipoCuerpo.nombre as tipo',
                                'cpc.otroTipo',
                                'cpc.posicion')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->whereIn('cpc.idPartesCuerpo',[2,3,4,5,9,14])//2->CABELLO, 3->BARBA, 4->BIGOTE, 5->PATILLA, 9->OJOS, 14->LABIOS
                        ->get();


            //echo $partesCuerpo;
            $longitud = count($partesCuerpoRostro);
            $nCabello = '';$nVelloFacial   = ''; $nOjos = ''; $nLabios = ''; $lado='';
            for($j=0;$j < $longitud; $j++){
                if($partesCuerpoRostro[$j]->idPartesCuerpo == 2 ){
                    if($partesCuerpoRostro[$j]->otroTipo != '' ) {
                        $nCabello = '<i> '.$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->otroTipo.', '.$partesCuerpoRostro[$j]->tamano;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nCabello = $nCabello.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nCabello = $nCabello.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                    else{
                        $nCabello = '<i> '.$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo.', '.$partesCuerpoRostro[$j]->tamano;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nCabello = $nCabello.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nCabello = $nCabello.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 3){
                    if($partesCuerpoRostro[$j]->otroTipo != '' ) {
                        $nVelloFacial = '<i> '.$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->otroTipo;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                    else{
                        $nVelloFacial = '<i> '.$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 4 ){
                    if($partesCuerpoRostro[$j]->otroTipo != '' ) {
                        $nVelloFacial = $nVelloFacial.' <i><br>'.
                                        $partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->otroTipo;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                    else{
                        $nVelloFacial = $nVelloFacial.' <i><br>'.
                                        $partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 5 ){
                    if($partesCuerpoRostro[$j]->otroTipo != '' ) {
                        $nVelloFacial = $nVelloFacial.' <i><br>'.
                                        $partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->otroTipo;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                    else{
                        $nVelloFacial = $nVelloFacial.' <i><br>'.
                                        $partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo;
                        if($partesCuerpoRostro[$j]->otroColor != '' )
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nVelloFacial = $nVelloFacial.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 9){
                    if(str_contains($partesCuerpoRostro[$j]->posicion,'AMBOS'))
                    {
                        if($partesCuerpoRostro[$j]->otroColor != '' ) 
                            $nOjos = '<i>'. str_replace("(AS)"," ",$partesCuerpoRostro[$j]->posicion).' '.$partesCuerpoRostro[$j]->nombreCuerpo.'S:</i> '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->otroColor;
                        else
                            $nOjos = '<i>'.str_replace("(AS)"," ",$partesCuerpoRostro[$j]->posicion).' '.$partesCuerpoRostro[$j]->nombreCuerpo.'S:</i> '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    }else{//izquierdo o derecho
                         if($partesCuerpoRostro[$j]->otroColor != '') {
                            if(str_contains($partesCuerpoRostro[$j]->posicion,'IZQUIERD'))
                             $nOjos = '<i>'.$partesCuerpoRostro[$j]->nombreCuerpo.' '.str_replace("(A)","",$partesCuerpoRostro[$j]->posicion).':</i> '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->otroColor;
                            else
                                $nOjos = $nOjos.' <i>'.$partesCuerpoRostro[$j]->nombreCuerpo.' '.str_replace("(A)","",$partesCuerpoRostro[$j]->posicion).':</i> '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->otroColor;
                        }else{
                            if(str_contains($partesCuerpoRostro[$j]->posicion,'IZQUIERD'))
                                $nOjos = '<i>'.$partesCuerpoRostro[$j]->nombreCuerpo.' '.str_replace("(A)","",$partesCuerpoRostro[$j]->posicion).':</i> '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                            else
                                $nOjos = $nOjos.' <i>'.$partesCuerpoRostro[$j]->nombreCuerpo.' '.str_replace("(A)","",$partesCuerpoRostro[$j]->posicion).':</i> '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                            }
                    }                   
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 14){
                    if(str_contains($partesCuerpoRostro[$j]->posicion,'AMBOS')){
                        if($partesCuerpoRostro[$j]->otroTipo != '' ) 
                            $nLabios = '<i>'.str_replace("(AS)"," ",$partesCuerpoRostro[$j]->posicion).' '.$partesCuerpoRostro[$j]->nombreCuerpo.':</i> '.$partesCuerpoRostro[$j]->otroTipo;
                        else
                            $nLabios = '<i>'.str_replace("(AS)"," ",$partesCuerpoRostro[$j]->posicion).' '.$partesCuerpoRostro[$j]->nombreCuerpo.':</i> '.$partesCuerpoRostro[$j]->tipo;

                    }else{
                        if($partesCuerpoRostro[$j]->otroTipo != '' ) {
                            if(str_contains($partesCuerpoRostro[$j]->posicion,'IZQUIERD'))
                                $nLabios = '<i>'.str_replace("S"," ",$partesCuerpoRostro[$j]->nombreCuerpo).str_replace("(A)",": ",$partesCuerpoRostro[$j]->posicion).'</i> '.$partesCuerpoRostro[$j]->otroTipo;
                            else
                                $nLabios = $nLabios.' <i>'.str_replace("S"," ",$partesCuerpoRostro[$j]->nombreCuerpo).str_replace("(A)",": ",$partesCuerpoRostro[$j]->posicion).'</i> '.$partesCuerpoRostro[$j]->tipo;
                        }

                    }
                  
                }
            }

   // se agrega consulta para particularidades y modificaciones
            $caracteristicasCuerpoP = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('pivot_subparti_cuerpo as psubp','psubp.idCedulaPartesCuerpo','=','cpc.id')
                        ->leftjoin('cat_particularidades_cuerpo as cparti','cparti.id','=','psubp.idParticularidades')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'catpc.partePadre',
                                'cpc.posicion',
                                'cparti.nombre as particularidades',
                                'cpc.otraParticularidad')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->groupBy('cpc.idPartesCuerpo','catpc.nombre', 'catpc.partePadre', 'cpc.posicion','cparti.nombre', 'cpc.otraParticularidad')
                        ->get();

            $longitud = count($caracteristicasCuerpoP);
            $nParticularidades = '';
            $parte_cuerpo = ''; $cuerpoPosicion = '';
            for($j=0;$j < $longitud; $j++){
            if(str_contains($caracteristicasCuerpoP[$j]->posicion,'APLICA')){
                if($caracteristicasCuerpoP[$j]->partePadre == 68 || $caracteristicasCuerpoP[$j]->partePadre == 23 || $caracteristicasCuerpoP[$j]->partePadre == 49)
                        $cuerpoPosicion = $caracteristicasCuerpoP[$j]->nombreCuerpo.' IZQUIERDO';
                else if($caracteristicasCuerpoP[$j]->partePadre == 69 || $caracteristicasCuerpoP[$j]->partePadre == 33 || $caracteristicasCuerpoP[$j]->partePadre == 58)
                        $cuerpoPosicion = $caracteristicasCuerpoP[$j]->nombreCuerpo.' DERECHO';
                else if($caracteristicasCuerpoP[$j]->partePadre == 44)
                        $cuerpoPosicion = $caracteristicasCuerpoP[$j]->nombreCuerpo.' IZQUIERDA';
                else if($caracteristicasCuerpoP[$j]->partePadre == 53)
                        $cuerpoPosicion = $caracteristicasCuerpoP[$j]->nombreCuerpo.' DERECHA'; 
                    else
                        $cuerpoPosicion = $caracteristicasCuerpoP[$j]->nombreCuerpo;
            }
            else if(str_contains($caracteristicasCuerpoP[$j]->posicion,'AMBOS'))
                $cuerpoPosicion = $caracteristicasCuerpoP[$j]->posicion.' '.$caracteristicasCuerpoP[$j]->nombreCuerpo;
            else
                $cuerpoPosicion = $caracteristicasCuerpoP[$j]->nombreCuerpo.' '.$caracteristicasCuerpoP[$j]->posicion;

            //empieza a concatenar las particularidades
            if($caracteristicasCuerpoP[$j]->particularidades !=''){
                if($cuerpoPosicion == $parte_cuerpo)
                { 
                    if($caracteristicasCuerpoP[$j]->particularidades != 'OTRO')
                        $nParticularidades = $nParticularidades.', '.$caracteristicasCuerpoP[$j]->particularidades;
                    else
                        $nParticularidades = $nParticularidades.', '.$caracteristicasCuerpoP[$j]->otraParticularidad;
                }
                else{
                    $parte_cuerpo = $cuerpoPosicion; 
                    if($nParticularidades != '')
                        $nParticularidades = $nParticularidades.'<br><i>'.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoP[$j]->particularidades;
                    else
                    {
                        if($caracteristicasCuerpoP[$j]->particularidades == 'OTRO')
                            $nParticularidades = '<i> '.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoP[$j]->otraParticularidad.' ';
                        else
                            $nParticularidades = '<i> '.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoP[$j]->particularidades.' ';//primera vez
                    }

                }
            }        

            }
               

            $caracteristicasCuerpoM = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                         ->leftjoin('pivot_submodi_cuerpo as psubm','psubm.idCedulaPartesCuerpo','=','cpc.id')
                         ->leftjoin('cat_modificaciones_cuerpo as cmodi','cmodi.id','=','psubm.idModificaciones')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'catpc.partePadre',
                                'cpc.posicion',
                                'cmodi.nombre as modificaciones',
                                'cpc.otraModificacion')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->groupBy('cpc.idPartesCuerpo','catpc.nombre', 'cpc.posicion', 'catpc.partePadre',
                                'cmodi.nombre', 'cpc.otraModificacion')
                        ->get();
            $longitud = count($caracteristicasCuerpoM);
            $nModificaciones = '';
            $nObservaciones = '';
            $parte_cuerpo = '';
            for($j=0;$j < $longitud; $j++){
            if(str_contains($caracteristicasCuerpoM[$j]->posicion,'APLICA')){
                if($caracteristicasCuerpoM[$j]->partePadre == 68 || $caracteristicasCuerpoM[$j]->partePadre == 23 || $caracteristicasCuerpoM[$j]->partePadre == 49)
                        $cuerpoPosicion = $caracteristicasCuerpoM[$j]->nombreCuerpo.' IZQUIERDO';
                else if($caracteristicasCuerpoM[$j]->partePadre == 69 || $caracteristicasCuerpoM[$j]->partePadre == 33 || $caracteristicasCuerpoM[$j]->partePadre == 58)
                        $cuerpoPosicion = $caracteristicasCuerpoM[$j]->nombreCuerpo.' DERECHO';
                else if($caracteristicasCuerpoM[$j]->partePadre == 44)
                        $cuerpoPosicion = $caracteristicasCuerpoM[$j]->nombreCuerpo.' IZQUIERDA';
                else if($caracteristicasCuerpoM[$j]->partePadre == 53)
                        $cuerpoPosicion = $caracteristicasCuerpoM[$j]->nombreCuerpo.' DERECHA'; 
                    else
                        $cuerpoPosicion = $caracteristicasCuerpoM[$j]->nombreCuerpo;
            }
            else if(str_contains($caracteristicasCuerpoM[$j]->posicion,'AMBOS')) 
                $cuerpoPosicion = $caracteristicasCuerpoM[$j]->posicion.' '.$caracteristicasCuerpoM[$j]->nombreCuerpo;
            else   
                $cuerpoPosicion = $caracteristicasCuerpoM[$j]->nombreCuerpo.' '.$caracteristicasCuerpoM[$j]->posicion;
            if($caracteristicasCuerpoM[$j]->modificaciones !=''){
                if($cuerpoPosicion == $parte_cuerpo)
                { 
                    if($caracteristicasCuerpoM[$j]->modificaciones != 'OTRO')
                        $nModificaciones = $nModificaciones.', '.$caracteristicasCuerpoM[$j]->modificaciones;
                    else
                        $nModificaciones = $nModificaciones.', '.$caracteristicasCuerpoM[$j]->otraModificacion;
                }
                else{
                    $parte_cuerpo = $cuerpoPosicion;
                    if($nModificaciones != '')
                        $nModificaciones = $nModificaciones.'<br><i>'.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoM[$j]->modificaciones;
                    else{
                         if($caracteristicasCuerpoM[$j]->modificaciones == 'OTRO')
                            $nModificaciones = '<i> '.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoM[$j]->otraModificacion.' ';
                        else
                        $nModificaciones = '<i> '.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoM[$j]->modificaciones.' ';//primera vez
                    }

                }
            }    

            }//del for

            $observacionesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'catpc.partePadre',
                                'cpc.posicion',
                                'cpc.observaciones')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->groupBy('cpc.idPartesCuerpo','catpc.nombre', 'cpc.posicion', 'catpc.partePadre',
                                'cpc.observaciones')
                        ->get();

            $longitud = count($observacionesCuerpo);
            $nObservaciones = '';
            $parte_cuerpo = '';
            for($j=0;$j < $longitud; $j++){
            if(str_contains($observacionesCuerpo[$j]->posicion,'APLICA')){
                if($observacionesCuerpo[$j]->partePadre == 68 || $observacionesCuerpo[$j]->partePadre == 23 || $observacionesCuerpo[$j]->partePadre == 49)
                        $cuerpoPosicion = $observacionesCuerpo[$j]->nombreCuerpo.' IZQUIERDO';
                else if($observacionesCuerpo[$j]->partePadre == 69 || $observacionesCuerpo[$j]->partePadre == 33 || $observacionesCuerpo[$j]->partePadre == 58)
                        $cuerpoPosicion = $observacionesCuerpo[$j]->nombreCuerpo.' DERECHO';
                else if($observacionesCuerpo[$j]->partePadre == 44)
                        $cuerpoPosicion = $observacionesCuerpo[$j]->nombreCuerpo.' IZQUIERDA';
                else if($observacionesCuerpo[$j]->partePadre == 53)
                        $cuerpoPosicion = $observacionesCuerpo[$j]->nombreCuerpo.' DERECHA'; 
                    else
                        $cuerpoPosicion = $observacionesCuerpo[$j]->nombreCuerpo;
            }
            else if(str_contains($observacionesCuerpo[$j]->posicion,'AMBOS')) 
                $cuerpoPosicion = $observacionesCuerpo[$j]->posicion.' '.$observacionesCuerpo[$j]->nombreCuerpo;
            else   
                $cuerpoPosicion = $observacionesCuerpo[$j]->nombreCuerpo.' '.$observacionesCuerpo[$j]->posicion;
            if($observacionesCuerpo[$j]->observaciones !=''){
                if($cuerpoPosicion == $parte_cuerpo)
                { 
                    $nObservaciones = $nObservaciones.','.$observacionesCuerpo[$j]->observaciones;
                }
                else{
                    $parte_cuerpo = $cuerpoPosicion;
                    if($nObservaciones != '')
                        $nObservaciones = $nObservaciones.'<br><i>'.$parte_cuerpo.'</i>: '.$observacionesCuerpo[$j]->observaciones;
                    else
                        $nObservaciones = '<i> '.$parte_cuerpo.'</i>: '.$observacionesCuerpo[$j]->observaciones.' ';//primera vez

                }
            }    

            }//del for

                
 
           $registros[$i] = array('rownum'=> $value->rownum,
                                'id' => $value->id,
                                'nombre' => $value->nombre,
                                'fecha' => $value->fecha,
                                'sexo' => $value->sexo,
                                'apodo' => $value->apodo,
                                'edad' => $value->edad,
                                'estatura' => $value->estatura,
                                'peso' => $value->peso,
                                'complexion' => $value->complexion,
                                'cPiel' => $value->cPiel,
                                'estado' => $value->estado,
                                'municipio' => $value->municipio,
                                'nacionalidad' => $value->nacionalidad,
                                'fechaReporte' => $value->fechaReporte,
                                'hechos' => $value->hechos,
                                'cabello' => $nCabello,
                                'velloFacial' => $nVelloFacial,
                                'ojos' => $nOjos,
                                'labios' => $nLabios,
                                'modificaciones' =>trim($nModificaciones,', '),
                                'particularidades' =>trim($nParticularidades,', '),
                                'observaciones' =>trim($nObservaciones,', '),
                                'foto' => $value->foto
                                ); 

                 $i++;
            }
        //$desaparecidos = $desaparecidos->unique('idPersonaDesaparecida');
        //dd($reporteFecha1);
       // dd($partesCuerpo->toArray());
          return response()->json($registros);
        }
        else
        {
           return response()->json($desaparecidos); 
        }
	}

	public function jsonInformantes(Request $request, $idCedula)
	{
		$informantes =  \DB::table('desaparecidos_personas')
			->join('persona', 'desaparecidos_personas.idPersona', '=', 'persona.id')
			->join('desaparecidos_domicilios', 'desaparecidos_domicilios.idDesaparecido', '=', 'desaparecidos_personas.id')
			->where('idCedula', $idCedula)
			->where('tipoPersona','INFORMANTE')
			->get();

		return response()->json($informantes);

	}

	public function jsonAntecedentes(Request $request, $idDesaparecido)
	{
		$desaparecidos = \App\Models\Antecedente::where('idDesaparecido', $idDesaparecido)->get();

		return response()->json($desaparecidos);
	}

	public function jsonFamiliares(Request $request, $idDesaparecido)
	{
		$familiares = \App\Models\Familiar::where('idDesaparecido', $idDesaparecido)->with('parentesco')->get();

		return response()->json($familiares);

    }

    public function jsonContactosPersona(Request $request, $idDesaparecido)
    {
        $contacto = \App\Models\Contacto::where('idDesaparecido', $idDesaparecido)->get();

        return response()->json($contacto);

    }
  
	public function jsonDomicilios(Request $request, $idDesaparecido)
	{
//		$domicilios = \App\Models\Domicilio::where('idDesaparecido', $idDesaparecido)->get();

        $domicilios =  \DB::table('desaparecidos_domicilios AS dd')
            ->join('cat_estado AS ce', 'dd.idEstado', '=', 'ce.id')
            ->join('cat_municipio AS cm', 'dd.idMunicipio', '=', 'cm.id')
            ->join('cat_localidad AS cl', 'dd.idLocalidad', '=', 'cl.id')
            ->join('cat_colonia AS cc', 'dd.idColonia', '=', 'cc.id')
            ->select('dd.id as id',
                     'dd.tipoDireccion as tipoD',
                     'dd.calle as calle',
                     'dd.numExterno as nExt',
                     'dd.numInterno as nInt',
                     'dd.telefono as telefono',
                     'ce.id as idEstado',
                     'ce.nombre as estado',
                     'cm.id as idMunicipio',
                     'cm.nombre as municipio',
                     'cl.id as idLocalidad',
                     'cl.nombre as localidad',
                     'cc.id as idColonia',
                     'cc.nombre as colonia',
                     'cc.codigoPostal as cp')
            ->where('idDesaparecido', $idDesaparecido)
            ->where('tipoDireccion','!=', 'LUGAR DE AVISTAMIENTO')
                ->get();        
		return response()->json($domicilios);
        
        
        
        
        
        
//        $prendas =  \DB::table('desaparecidos_prendas AS dp')
//                ->join('cat_colores AS cc', 'dp.color', '=', 'cc.id')
//                ->select('dp.id as id',
//                        'dp.tipo as tipo',
//                        'dp.material as material',
//                        'dp.dibujoBordadoFranja as dibujo',
//                        'dp.color as pColor',
//                        'dp.otroColor as otroC',
//                        'dp.marcaOrigen as marca',
//                        'dp.talla as talla',
//                        'cc.nombre as color')
//                ->where('idCedula', $idCedula)
//                ->get();
//            return response()->json($prendas);

	}

	public function jsonParentescos(Request $request)
	{
		$parentescos = \App\Models\CatParentesco::all();

		return response()->json($parentescos);
	}

	public function jsonNacionalidades(Request $request)
	{
		$nacionalidades = \App\Models\CatNacionalidad::all();

		return response()->json($nacionalidades);
	}

	public function jsonDocumentosIdentidad(Request $request)
	{
		$documentos = \App\Models\CatDocumento::all();

		return response()->json($documentos);
	}

	public function jsonTiposDomicilios(Request $request)
	{
		$domicilios[] = array('id' => 'PERSONAL', 'nombre' => 'PERSONAL');
		$domicilios[] = array('id' => 'TRABAJO', 'nombre' => 'TRABAJO');
		$domicilios[] = array('id' => 'FAMILIAR', 'nombre' => 'FAMILIAR');

		return response()->json($domicilios);
	}

	public function jsonEstados(Request $request)
	{
		$estados = \App\Models\CatEstado::all();

		return response()->json($estados);
	}

	/*public function jsonMunicipios(Request $request, $idEstado)
	{
		$municipios = \App\Models\CatMunicipio::where('idEstado',$idEstado)->get();

		return response()->json($municipios);
	}

	public function jsonLocalidades(Request $request, $idMunicipio)
	{
		$localidades = \App\Models\CatLocalidad::where('idMunicipio',$idMunicipio)->get();

		return response()->json($localidades);
	}

	public function jsonColonias(Request $request, $idMunicipio)
	{
		$colonias = \App\Models\CatColonia::where('idMunicipio',$idMunicipio)->get();

		return response()->json($colonias);
	}*/

	public function jsonTiposTelefonos(Request $request)
	{
		$telefonos[] = array('id' => 'CASA', 'nombre' => 'CASA');
		$telefonos[] = array('id' => 'TRABAJO', 'nombre' => 'TRABAJO');
		$telefonos[] = array('id' => 'PERSONAL', 'nombre' => 'PERSONAL');

		return response()->json($telefonos);        
	}

	public function jsonLadas(Request $request)
	{
		$ladas = \App\Models\CatNacionalidad::all();

		return response()->json($ladas);
		
	}

  public function jsonPrendas(Request $request, $idCedula)

    {
        $prendas =  \DB::table('desaparecidos_prendas AS dp')
                ->join('cat_colores AS cc', 'dp.color', '=', 'cc.id')
                ->select('dp.id as id',
                        'dp.tipo as tipo',
                        'dp.material as material',
                        'dp.dibujoBordadoFranja as dibujo',
                        'dp.color as pColor',
                        'dp.otroColor as otroC',
                        'dp.marcaOrigen as marca',
                        'dp.talla as talla',
                        'cc.nombre as color')
                ->where('idCedula', $idCedula)
                ->get();
            return response()->json($prendas);
    }
    
    public function jsonAccesorios(Request $request, $idCedula)

    {
        $accesorios =  \DB::table('desaparecidos_accesorios AS dp')
                ->join('cat_colores AS cc', 'dp.color', '=', 'cc.id')
                ->select('dp.id as id',
                        'dp.tipo as tipo',
                        'dp.material as material',
                        'dp.color as pColor',
                        'dp.otroColor as otroC',
                        'dp.marcaOrigen as marca',
                        'cc.nombre as color')
                ->where('idCedula', $idCedula)
                ->get();
            return response()->json($accesorios);
    }
    
    public function jsonCalzado(Request $request, $idCedula)
    {
        $prendas =  \DB::table('desaparecidos_cedula_investigacion AS dc')
                ->join('cat_calzado_tipo AS ct', 'dc.idCalzadotipo', '=', 'ct.id')
                ->join('cat_calzado_marca AS cm', 'dc.idCalzadomarca', '=', 'cm.id')
                ->join('cat_colores AS cc', 'dc.idCalzadocolor', '=', 'cc.id')
                ->select('dc.modeloCalzado as modelo',
                    'dc.calzadoTalla as talla',
                    'dc.idCalzadotipo as cTipo',
                    'dc.otroCalzado as oCalzado',
                    'dc.idCalzadocolor as cColor',
                    'dc.otroColorCalzado as ocCalzado',
                    'dc.idCalzadomarca as cMarca',
                    'dc.otraMarca as oMarca',
                    'dc.calzadoTalla as talla',
                    'ct.nombre as nombretipo',
                    'cm.nombre as nombremarca',
                    'cc.nombre as nombrecolor')
                ->where('dc.id', $idCedula)
                ->get();
            return response()->json($prendas);
    }
    
    public function jsonBoletin( Request $request,$idCedula)
    {
        //dd("ya entre men");
        $datosBoletin =  \DB::table('desaparecidos_personas AS dp')
                ->join('persona AS persona', 'dp.idPersona', '=', 'persona.id')
                ->join('desaparecidos_cedula_investigacion AS ced', 'dp.idCedula' , '=' , 'ced.id')
                ->select('dp.id as id',
                         'dp.apodo as apodo',
                         'dp.edadAparente as edadAparente',
                         'dp.edadExtravio as edadExtravio',
                         'persona.nombres as nombres',
                         'persona.primerAp as primerAp',
                         'persona.segundoAp as segundoAp',
                         'persona.sexo as sexo',
                         'ced.estatura as estatura',
                         'ced.peso as peso')
                ->where('idCedula', $idCedula)
                ->get();
            return response()->json($datosBoletin);
    }


	public function jsonMunicipios(Request $request, $id){
		//if($request->ajax()){
			$municipios = \App\Models\CatMunicipio::municipios($id);
			return response()->json($municipios);
		//}
	}

	public function jsonLocalidades(Request $request, $id){
		//if($request->ajax()){
			$localidades = \App\Models\CatLocalidad::localidades($id);
			return response()->json($localidades);
		//}
	}

	public function jsonColonias(Request $request, $id){
		//if($request->ajax()){
			$colonias = \App\Models\CatColonia::where('idMunicipio',$id)->orderBy('nombre')->get();
			return response()->json($colonias);
		//}
	}

	public function jsonCodigos(Request $request, $id){
		//if($request->ajax()){
			$codigos = \App\Models\CatColonia::select(\DB::raw('codigoPostal, max(id) as id'))
												->where('idMunicipio', $id)
												->groupBy('codigoPostal')
												->get();
			return response()->json($codigos);
		//}
	}

	public function jsonCodigos2(Request $request, $id){
		//if($request->ajax()){
			$codigos = \App\Models\CatColonia::select(\DB::raw('codigoPostal, max(id) as id'))
												->where('id', $id)
												->groupBy('codigoPostal')
												->get();
			return response()->json($codigos);
		//}
	}

	public function getEdad(Request $request, $fechaNacimiento){
		
		if($request->ajax()){

			$fecha = Carbon::parse($fechaNacimiento);
			$edad2 = Carbon::createFromDate($fecha->year, $fecha->month,$fecha->day)->diff(Carbon::now())->format('%y años, %m meses y %d dias');
			return response()->json($edad2);
		
		}
	}

    public function jsonSenas(Request $request, $idCedula)
    {
        $senas =  \DB::table('cedula_cat_senas AS ccs')
            ->join('cat_senas_particulares AS csp', 'ccs.idCatsenas', '=', 'csp.id')
            ->join('cat_senas_particulares_ubicaciones AS cspu', 'ccs.idCatsenasParticulares', '=', 'cspu.id')
            ->select('csp.nombre as nombreSena',
                    'cspu.nombre as nombreUbicacion',
                    'cantidad',
                    'caracteristicas')
            ->where('idCedula', 1)
            ->get();

        return response()->json($senas);
    }
    
    public function jsonDependecias(Request $request)

    {
        $dependencias =  \DB::table('cat_dependencias AS cd')
                ->join('cat_documentos AS cdoc', 'cd.documento', '=', 'cdoc.id')
                ->select('cd.id as id',
                        'cd.nombre as nombre',
                        'cd.correo as correo',
                        'cd.documento as dDocumento',
                         'cdoc.nombre as documento')
                //->where('idCedula', $idCedula)
                ->get();
            return response()->json($dependencias);
    }
    
    public function jsonDestinatarios(Request $request)

    {
        $destinatarios =  \DB::table('cat_destinatarios AS cd')
                ->join('cat_dependencias AS cdep', 'cd.id_dependencia', '=', 'cdep.id')
                ->select('cd.id as id',
                        'cd.nombre as nombre',
                        'cd.cargo as cargo',
                        'cd.id_dependencia as dDependencia',
                         'cdep.nombre as dependencia')
                //->where('idCedula', $idCedula)
                ->get();
            return response()->json($destinatarios);
    }

    public function jsonDep(Request $request)//me consulta el nombre del documento

    {

    	$idDep  =($request['idDependencia']);

    	//dd($idDep);

    	 $dDocumento=  \DB::table('cat_dependencias AS cd')
                ->join('cat_documentos AS cdoc', 'cd.documento', '=', 'cdoc.id')
                ->select(
                        'cd.documento as dDocumento',
                         'cdoc.nombre as documento')
                ->where('cd.id', $idDep)
                ->get();
            return response()->json($dDocumento);
    }

    public function jsonDes(Request $request)
    {

    	$idDep  =($request['idDependencia']);

    	//dd($idDep);

        $destinatarios =  \DB::table('cat_destinatarios AS cd')
                ->join('cat_dependencias AS cdep', 'cd.id_dependencia', '=', 'cdep.id')
                ->select('cd.id as id',
                        'cd.nombre as nombre',
                        'cd.cargo as cargo',
                        'cd.id_dependencia as dDependencia',
                         'cdep.nombre as dependencia')
                ->where('cd.id_dependencia', $idDep)
                ->get();
            return response()->json($destinatarios);
    }

    public function jsonCatPrendas(Request $request, $idVestimenta)
    {
        $prendas = \App\Models\CatPrenda::where('idVestimenta',$idVestimenta)->get();

        return response()->json($prendas);
    }

    public function jsonCatColores(Request $request)
    {
        $colores = \App\Models\CatColores::all();

        return response()->json($colores);
    }

    public function jsonVestimentas(Request $request, $idDesaparecido)
    {
        $prendas = \App\Models\Prenda::where('idDesaparecido', $idDesaparecido)
                                        ->with('vestimenta')
                                        ->with('prenda')
                                        ->with('marca')
                                        ->with('color')
                                        ->get();
        
        return response()->json($prendas);
    }

    public function json_partes_cuerpo(Request $request, $parte_cuerpo = null)
    {
        $data['partes']  = \App\Models\CatPartesCuerpo::where('partePadre', $parte_cuerpo)->get();
        $data['padre']  = \App\Models\CatPartesCuerpo::find($parte_cuerpo);
        
        return response()->json($data);
    }

    public function json_cabecera_partes($parte_cuerpo = null){
        $data['hijo'] = \App\Models\CatPartesCuerpo::find($parte_cuerpo);

        $data['padre'] = \DB::table('cat_partes_cuerpo AS pa')
                    ->where('pa.id',$data['hijo']->partePadre)
                    ->select('pa.nombre as partep')
                    ->get();

        return response()->json($data);
    }

    public function json_subparte_cuerpo(Request $request, $parte_cuerpo = null)
    {
        $data['parte']              = \App\Models\CatPartesCuerpo::find($parte_cuerpo);
        $data['tipos']              = \App\Models\CatTiposCuerpo::where('idPartesCuerpo', $parte_cuerpo)->get();
        $data['tamanos']            = \App\Models\CatTamanoCuerpo::where('idPartesCuerpo', $parte_cuerpo)->get();
        $data['colores']            = \App\Models\CatColoresCuerpo::where('idPartesCuerpo', $parte_cuerpo)->get();
        $data['particularidades']   = \App\Models\CatParticularidadesCuerpo::where('idPartesCuerpo', $parte_cuerpo)->get();
        $data['modificaciones']     = \App\Models\CatModificacionesCuerpo::where('idPartesCuerpo', $parte_cuerpo)->get();

        return response()->json($data);
    }


    public function json_cat_partes_cuerpo($idDesaparecido=null, $idParteCuerpo)
    {
        /*$partesCuerpo    = \App\Models\CatPartesCuerpo::where('partePadre', '0')->get();
        $activasPartes  = \App\Models\CedulaPartesCuerpo::where('idPersonaDesaparecida', 2)
                                                        ->get();*/
        $partes = \DB::table('cedula_partes_cuerpo AS ce')
                    ->leftJoin('cat_partes_cuerpo AS cu', 'ce.idPartesCuerpo', '=', 'cu.id')
                    ->leftJoin('cat_partes_cuerpo AS pa', 'cu.partePadre', '=', 'pa.id')
                    ->leftJoin('cat_tamano_cuerpo AS ta', 'ce.idPartesCuerpo', '=', 'ta.id')
                    ->leftJoin('cat_tipos_cuerpo AS ti', 'ce.idTipoCuerpo', '=', 'ti.id')
                    ->leftJoin('cat_colores_cuerpo AS co', 'ce.idColoresCuerpo', '=', 'co.id')
                    ->where('ce.idPersonaDesaparecida', $idDesaparecido)
                    ->where('ce.idPartesCuerpo', $idParteCuerpo)
                    ->select('ce.id as idParteCuerpo','pa.nombre as partep', 'cu.nombre as parteh',
                    'ce.idTamanoCuerpo as tamano', 'ce.idTipoCuerpo as tipo', 'ce.idColoresCuerpo as color', 'ce.posicion as posicion', 'ce.observaciones as observaciones','ce.imagen as imagen','ce.otraParticularidad as otraP', 'ce.otraModificacion as otraM', 'ce.otroTipo as otroTi', 'ce.otroColor as otroColor')
                    ->get();

        foreach ($partes as $parte) {
            $modificaciones = $this->get_modificaciones($parte->idParteCuerpo);
            $modifi = array();
            foreach ($modificaciones as $value) {               
                $modifi[] = $value->id;
            }

            $particularidades = $this->get_particularidades($parte->idParteCuerpo);
            $parti = array();
            foreach ($particularidades as $value) {               
                $parti[] = $value->id;
            }

            $cuerpo = [
                        'idtamano' => $parte->tamano,
                        'idtipo' =>$parte->tipo,
                        'idcolor' => $parte->color,
                        'posicion' => $parte->posicion,
                        'observaciones' => $parte->observaciones,
                        'rutaimagen' => $parte->imagen,
                        'particularidades' => $parti,
                        'modificaciones' => $modifi,
                        'otraP' => $parte->otraP,
                        'otraM' => $parte->otraM,
                        'otroTi' => $parte->otroTi,
                        'otroColor' => $parte->otroColor,
                        'idCedulaParteCuerpo' => $parte->idParteCuerpo
                    ];
        }

        

        return response()->json($cuerpo);
    }

    public function get_modificaciones($idParteCuerpo)
    {
        $modificaciones = \DB::table('pivot_submodi_cuerpo AS pi')
                            ->leftJoin('cat_modificaciones_cuerpo AS mo', 'pi.idModificaciones', '=', 'mo.id')
                            ->where('pi.idCedulaPartesCuerpo', $idParteCuerpo)
                            ->select('mo.id')
                            ->get();

        return $modificaciones;
    }

    public function get_particularidades($idParteCuerpo)
    {
        $particularidades = \DB::table('pivot_subparti_cuerpo AS pi')
                            ->leftJoin('cat_particularidades_cuerpo AS mo', 'pi.idParticularidades', '=', 'mo.id')
                            ->where('pi.idCedulaPartesCuerpo', $idParteCuerpo)
                            ->select('mo.id')
                            ->get();

        return $particularidades;
    }

    public function json_diente($id)
    {
        $data = \App\Models\CatDiente::where('id', $id)->get();
        return response()->json($data);
    }

    public function jsonOficioDependencia(Request $request)
    {
         $oficiosDepen = \DB::table('pivot_oficio_dependencia as pod')
                        ->join('cat_documentos as cd', 'pod.idOficio', '=', 'cd.id')
                        ->join('cat_dependencias as cde', 'pod.idDependencia', '=', 'cde.id')
                        ->join('cat_encargado as ce', 'pod.idEncargado', '=', 'ce.id')
                        ->select('cd.nombre as oficio','cde.nombre as dependencia',
                        \DB::raw('CONCAT(ce.nombres, " ", ce.primerAp," ", ce.segundoAp," ") AS nombre'))
                        ->get();

        return response()->json($oficiosDepen);
    }
}