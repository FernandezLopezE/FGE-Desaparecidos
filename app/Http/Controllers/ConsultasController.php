<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

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
		//$cedulas = \DB::table('desaparecidos_cedula_investigacion')::all();
        $cedulas = \DB::table('desaparecidos_cedula_investigacion as c')
                            ->leftJoin('desaparecidos_personas as d', 'c.id', '=',\DB::raw('d.idCedula AND d.tipoPersona = "DESAPARECIDA"'))
                            ->leftJoin('persona as p', 'd.idPersona', '=', 'p.id')
                            ->leftJoin('cat_nacionalidad as n', 'p.idNacionalidad', '=', 'n.id')
                            //->where('d.tipoPersona','DESAPARECIDA')
                            ->select('c.id','c.idDialecto', 'c.carpeta', 'c.idCarpeta', \DB::raw('DATE_FORMAT(c.created_at, "%d/%m/%Y %H:%m") as created_at'), 'p.nombres', 'p.primerAp', 'p.segundoAp', 'p.sexo','n.nombre as nacionalidad', 'd.apodo', 'd.edadExtravio')
                            ->get();

		return response()->json($cedulas);
	}
    
    public function jsonDesaparecidosPersonaTodos(Request $request)
	{

        $estados = $request->input('estados');
        $masc = $request->input('masc');
        $fem = $request->input('fem');
        $rg = $request->input('rg');
        $rg2 = $request->input('rg2');

        $desaparecidos = \DB::table('desaparecidos_personas as des')
                                        
                            ->leftjoin('persona as p', 'des.id', '=', 'p.id')
                            
                            ->leftjoin('desaparecidos_cedula_investigacion AS dci', 'dci.id', '=', 'des.idCedula')
                            ->leftjoin('cat_estado AS ce', 'dci.idEstadoDesaparicion', '=', 'ce.id')
                            ->leftjoin('cat_municipio AS cm', 'dci.idMunicipioDesa', '=', 'cm.id', 'and', 'cm.idEstado', '=', 'dci.idEstadoDesaparicion')
                            ->leftjoin('cat_nacionalidad AS cn', 'p.idNacionalidad', '=', 'cn.id')

            ->select('des.id as id', \DB::raw('CONCAT(p.nombres, " ", ifnull(p.primerAp,"")," ",ifnull( p.segundoAp,""))AS nombre'), 'p.sexo as sexo',\DB::raw('substr(dci.desaparicionFecha, 1,10) as fecha'),'des.apodo as apodo',\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED) as edad'),'ce.id as idEstado','ce.nombre as estado','cm.id as idMuni','cm.nombre as municipio','cn.nombre as nacionalidad')
            
                            ->where('tipoPersona','DESAPARECIDA')
                            ->get();

		return response()->json($desaparecidos);
	}
    public function jsonDesaparecidosPersona(Request $request)
	{
		//{$cedulas = \DB::table('desaparecidos_cedula_investigacion')::all();
//        
//         $subs = \DB::table('desaparecidos_personas as desap')
//
//            ->select (\DB::raw('substr(desap.edadExtravio, 1,3)'))
//             ->where('tipoPersona','DESAPARECIDA')
//             ->get();
//        dd($subs);
//         $edad = \DB::table('desaparecidos_personas as desa')
//
//            ->select (\DB::raw('CAST ('$subs' AS SIGNED) '))
//             ->where('tipoPersona','DESAPARECIDA')
//             ->get();
        //$estados = "uno,dos,tres,cuatro,cinco";
        //$array = explode(",", $estados);}  
        // dd($request->ToArray());
        //$estados = Input::get('estados');
        $estados = $request->input('estados');
        $municipios = $request->input('municipios');
        $cPiel = $request->input('cPiel');
        $complexion = $request->input('complexion'); 
        $tipoCabello = $request->input('tipoCabello');
        $tamanoCabello = $request->input('tamanoCabello');
        $colorCabello = $request->input('colorCabello');
        $tipoBarba = $request->input('tipoBarba');
        $colorBarba = $request->input('colorBarba');        
        $tipoBigote = $request->input('tipoBigote');
        $colorBigote = $request->input('colorBigote');
        $tipoPatilla = $request->input('tipoPatilla');
        $colorPatilla = $request->input('colorPatilla');
        $tamanoOjos = $request->input('tamanoOjos');
        $colorOjos = $request->input('colorOjos');
        $tipoLabio = $request->input('tipoLabio');
        $modif = $request->input('modif');
        
        $masc = $request->input('masc');
        $fem = $request->input('fem');
        //$sexo = $request->input('sexo');
        
        //dd($tamanoCabello);
        
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
        //-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-

        
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
        //-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-
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
        //{-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-
//        {//dd($estados);
//        $consulta = \DB::table('persona')
//            ->whereIn('idEstadoOrigen', $estados)
//             ->get();
//        dd($consulta->toArray());}
        
//  {      $subQuery = \DB::table('desaparecidos_personas as dp')
//        ->leftjoin('cedula_partes_cuerpo as cpc', 'cpc.idPersonaDesaparecida', '=', 'dp.id')    
//         ->leftjoin('cat_tipos_cuerpo as ctc', 'cpc.idTipoCuerpo', '=', 'ctc.id' , 'and', 'ctc.idPartesCuerpo', '=', 'cpc.idPartesCuerpo')   
//        ->select(\DB::raw('ctc.nombre as tipocab'))
//        ->whereRaw('tipoPersona','DESAPARECIDA')
//        ->whereRaw('ctc.idPartesCuerpo', 55)
//        ->whereRaw('ctc.nombre', 'LACIO'); 
        
//        DB::table('branch_tbl')
//->select('branch_tbl.id','branch_tbl.branchname',
//    DB::raw("(" . $subQuery->toSql() . ") as 'total expenses'")
//)
            
//            select  ctc.nombre from desaparecidos_personas as dp  
//join (cat_tipos_cuerpo as ctc) join (cedula_partes_cuerpo as cpc) 
//where dp.tipoPersona = 'DESAPARECIDA' and ctc.id = cpc.idTipoCuerpo and
//dp.id = cpc.idPersonaDesaparecida and ctc.idPartesCuerpo = 56
//}        
        
        
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
  
    
//                           { ->leftJoin('cat_nacionalidad as n', 'p.idNacionalidad', '=', 'n.id')
                            //->where('d.tipoPersona','DESAPARECIDA')
//            ->join('cat_estado AS ce', 'dd.idEstado', '=', 'ce.id')
//             'ce.id as idEstado',
//                     'ce.nombre as estado',
                       
                        //DB::raw('substr(id, 1, 4) as id')}
            ->select('des.id as id', \DB::raw('CONCAT(p.nombres, " ", ifnull(p.primerAp,"")," ",ifnull( p.segundoAp,""))AS nombre'), 'p.sexo as sexo',\DB::raw('substr(dci.desaparicionFecha, 1,10) as fecha'),'des.apodo as apodo',\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED) as edad'),'des.estatura as estatura','des.peso as peso','cc.id as idComplexion','cc.nombre as complexion','ccp.id as idCPiel','ccp.nombre as cPiel','ce.id as idEstado','ce.nombre as estado','cm.id as idMuni','cm.nombre as municipio',
                     'cn.nombre as nacionalidad','dci.fechaVisita as fechaReporte', 'dci.desaparicionObservaciones as hechos')
            //{->where('des.edadExtravio', 'like', "$rg%")
                            //->where('des.edadExtravio', 'like', "$rg2%")
                            //->whereBetween('des.edadExtravio', [$rg, $rg2])}
                            
                            ->where('tipoPersona','DESAPARECIDA')
                            ->where('tipoDireccion','LUGAR DE AVISTAMIENTO')
                            ->where('p.sexo',$masc)
                            ->whereBetween(\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED)'), [$rg, $rg2])
                            ->whereBetween(\DB::raw('CAST(des.estatura AS SIGNED)'), [$estatura1, $estatura2])
                            ->whereBetween(\DB::raw('CAST(des.peso AS SIGNED)'), [$peso1, $peso2])
                            ->whereBetween('dci.desaparicionFecha', [$desaparicionFecha1, $desaparicionFecha2])
                            ->whereBetween('dci.fechaVisita', [$reporteFecha1, $reporteFecha2])
                            ->when($estados, function ($q) use ($estados) {
                                return $q->whereIn('ce.id', $estados);
                            })
                            ->when($municipios, function ($q) use ($municipios) {
                                return $q->whereIn('cm.id', $municipios);
                            })
                            ->when($cPiel, function ($q) use ($cPiel) {
                                return $q->whereIn('des.idColorPiel', $cPiel);
                            })
                            ->when($complexion, function ($q) use ($complexion) {
                                return $q->whereIn('des.idComplexion', $complexion);
                            })
                            ->when($tipoCabello, function ($q) use ($tipoCabello) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoCabello);
                            })
                            ->when($tipoBarba, function ($q) use ($tipoBarba) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoBarba);
                            })
                            ->when($tamanoCabello, function ($q) use ($tamanoCabello) {
                                return $q->whereIn('cpc.idTamanoCuerpo', $tamanoCabello);
                            })
                            ->when($colorCabello, function ($q) use ($colorCabello) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorCabello);
                            })
                            ->when($colorBarba, function ($q) use ($colorBarba) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorBarba);
                            })
                             ->when($tamanoOjos, function ($q) use ($tamanoOjos) {
                                return $q->whereIn('cpc.idTamanoCuerpo', $tamanoOjos);
                            })
                            ->when($colorOjos, function ($q) use ($colorOjos) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorOjos);
                            })
                            ->when($tipoLabio, function ($q) use ($tipoLabio) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoLabio);
                            })                            
                            ->when($colorBigote, function ($q) use ($colorBigote) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorBigote); })
                            ->when($tipoBigote, function ($q) use ($tipoBigote) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoBigote); })
                            ->when($colorPatilla, function ($q) use ($colorPatilla) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorPatilla); })
                            ->when($tipoPatilla, function ($q) use ($tipoPatilla) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoPatilla); })
                            ->when($tipoPatilla, function ($q) use ($tipoPatilla) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoPatilla); })
                            ->when($modif, function ($q) use ($modif) {
                                return $q->whereIn('cat_mc.nombre', $modif); })
                            
                            ->orWhere('p.sexo', $fem) 
                            ->where('tipoPersona','DESAPARECIDA')
                            ->where('tipoDireccion','LUGAR DE AVISTAMIENTO')
                            ->whereBetween(\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED)'), [$rg, $rg2])
                            ->whereBetween(\DB::raw('CAST(des.estatura AS SIGNED)'), [$estatura1, $estatura2])
                            ->whereBetween(\DB::raw('CAST(des.peso AS SIGNED)'), [$peso1, $peso2])
                            ->whereBetween('dci.desaparicionFecha', [$desaparicionFecha1, $desaparicionFecha2])
                            ->whereBetween('dci.fechaVisita', [$reporteFecha1, $reporteFecha2])
                            ->when($estados, function ($q) use ($estados) {
                                return $q->whereIn('ce.id', $estados);
                            })
                            ->when($municipios, function ($q) use ($municipios) {
                                return $q->whereIn('cm.id', $municipios);
                            })
                            ->when($cPiel, function ($q) use ($cPiel) {
                                return $q->whereIn('des.idColorPiel', $cPiel);
                            })
                            ->when($complexion, function ($q) use ($complexion) {
                                return $q->whereIn('des.idComplexion', $complexion);
                            })
                            ->when($tipoCabello, function ($q) use ($tipoCabello) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoCabello);
                            })
                            ->when($tipoBarba, function ($q) use ($tipoBarba) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoBarba);
                            })
                             ->when($tamanoCabello, function ($q) use ($tamanoCabello) {
                                return $q->whereIn('cpc.idTamanoCuerpo', $tamanoCabello);
                            })
                            ->when($colorCabello, function ($q) use ($colorCabello) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorCabello);
                            })
                            ->when($colorBarba, function ($q) use ($colorBarba) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorBarba);
                            })
                             ->when($tamanoOjos, function ($q) use ($tamanoOjos) {
                                return $q->whereIn('cpc.idTamanoCuerpo', $tamanoOjos);
                            })
                            ->when($colorOjos, function ($q) use ($colorOjos) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorOjos);
                            })
                            ->when($tipoLabio, function ($q) use ($tipoLabio) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoLabio);
                            })
                            ->when($colorBigote, function ($q) use ($colorBigote) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorBigote); })
                            ->when($tipoBigote, function ($q) use ($tipoBigote) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoBigote); })
                            ->when($colorPatilla, function ($q) use ($colorPatilla) {
                                return $q->whereIn('cpc.idColoresCuerpo', $colorPatilla); })
                            ->when($tipoPatilla, function ($q) use ($tipoPatilla) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoPatilla); })
                            ->when($modif, function ($q) use ($modif) {
                                return $q->whereIn('cat_mc.nombre', $modif); })

                            //->where('des.edadExtravio', 'like', "$rg2%")
                            ->distinct()
                            ->get();

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
                                'cpc.idTamanoCuerpo',
                                'tamaCuerpo.nombre as tamano',
                                'cpc.idTipoCuerpo',
                                'tipoCuerpo.nombre as tipo',
                                'cpc.observaciones')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->whereIn('cpc.idPartesCuerpo',[2,3,4,5,9,14])//2->CABELLO, 3->BARBA, 4->BIGOTE, 5->PATILLA, 9->OJOS, 14->LABIOS
                        ->get();


            //echo $partesCuerpo;

            $longitud = count($partesCuerpoRostro);
            $nCabello = '';$nVelloFacial   = ''; $nOjos = ''; $nLabios = '';
            //$idParti  = array();
            for($j=0;$j < $longitud; $j++){
                if($partesCuerpoRostro[$j]->idPartesCuerpo == 2 ){ 
                     $nCabello = '<i> '.$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo.', '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                    //array_push($idParti , $particularidades[$j]->idParticularidad); 
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 3){
                    $nVelloFacial = ' <i>'.$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 4 ){
                   $nVelloFacial = $nVelloFacial.' <i><br>' .$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 5 ){
                    $nVelloFacial = $nVelloFacial.' <i><br>' .$partesCuerpoRostro[$j]->nombreCuerpo.'</i>: '.$partesCuerpoRostro[$j]->tipo.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 9){
                     $nOjos = $partesCuerpoRostro[$j]->nombreCuerpo.': '.$partesCuerpoRostro[$j]->tamano.', '.$partesCuerpoRostro[$j]->colorCuerpo;
                }else if($partesCuerpoRostro[$j]->idPartesCuerpo == 14){
                     $nLabios = $partesCuerpoRostro[$j]->nombreCuerpo.': '.$partesCuerpoRostro[$j]->tipo;
                 }
            }


   // se agrega consulta para particularidades y modificaciones
            $caracteristicasCuerpoP = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('pivot_subparti_cuerpo as psubp','psubp.idCedulaPartesCuerpo','=','cpc.id')
                        ->leftjoin('cat_particularidades_cuerpo as cparti','cparti.id','=','psubp.idParticularidades')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cparti.nombre as particularidades')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->groupBy('cpc.idPartesCuerpo','catpc.nombre', 'cparti.nombre')
                        ->get();

            $longitud = count($caracteristicasCuerpoP);
            $nParticularidades = '';
            $parte_cuerpo = '';
            for($j=0;$j < $longitud; $j++){
            if($caracteristicasCuerpoP[$j]->particularidades !=''){
                if($caracteristicasCuerpoP[$j]->nombreCuerpo == $parte_cuerpo)
                { 
                    $nParticularidades = $nParticularidades.','.$caracteristicasCuerpoP[$j]->particularidades;
                }
                else{
                    $parte_cuerpo = $caracteristicasCuerpoP[$j]->nombreCuerpo;
                    if($nParticularidades != '')
                        $nParticularidades = $nParticularidades.'<br><i>'.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoP[$j]->particularidades;
                    else
                        $nParticularidades = '<i> '.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoP[$j]->particularidades.' ';//primera vez

                }
            }        

            }
               


            $caracteristicasCuerpoM = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                         ->leftjoin('pivot_submodi_cuerpo as psubm','psubm.idCedulaPartesCuerpo','=','cpc.id')
                         ->leftjoin('cat_modificaciones_cuerpo as cmodi','cmodi.id','=','psubm.idModificaciones')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cmodi.nombre as modificaciones',
                                'cpc.observaciones')
                        ->where('cpc.idPersonaDesaparecida',$value->id)
                        ->groupBy('cpc.idPartesCuerpo','catpc.nombre', 
                                'cmodi.nombre',
                                'cpc.observaciones')
                        ->get();
            $longitud = count($caracteristicasCuerpoM);
            $nModificaciones = '';
            $parte_cuerpo = '';
            for($j=0;$j < $longitud; $j++){
            if($caracteristicasCuerpoM[$j]->modificaciones !=''){
                if($caracteristicasCuerpoM[$j]->nombreCuerpo == $parte_cuerpo)
                { 
                    $nModificaciones = $nModificaciones.','.$caracteristicasCuerpoM[$j]->modificaciones;
                }
                else{
                    $parte_cuerpo = $caracteristicasCuerpoM[$j]->nombreCuerpo;
                    if($nModificaciones != '')
                        $nModificaciones = $nModificaciones.'<br><i>'.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoM[$j]->modificaciones;
                    else
                        $nModificaciones = '<i> '.$parte_cuerpo.'</i>: '.$caracteristicasCuerpoM[$j]->modificaciones.' ';//primera vez

                }
            }        

            }//del for

                
 
           $registros[$i] = array('id' => $value->id,
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
                                'particularidades' =>trim($nParticularidades,', ')
                                  
                                /*'color' => $partesCuerpo->colorCuerpo,
                                'tamano' => $partesCuerpo->tamano,
                                'tipo' => $partesCuerpo->tipo*/                              
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
}
