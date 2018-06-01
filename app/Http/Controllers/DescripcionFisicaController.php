<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desaparecido;
use App\Models\CedulaPartesCuerpo;
use App\Models\PivotSubPartiCuerpo;
use App\Models\PivotSubModiCuerpo;
use App\Http\Requests\DescripcionFisicaRequest;
class DescripcionFisicaController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DescripcionFisicaRequest $request)
    {
        //
    //try {
         $desaparecido = Desaparecido::find($request['idExtraviado']);
         //dd($desaparecido);
         $desaparecido->estatura = $request['estatura'];
         $desaparecido->peso = $request['peso'];
         $desaparecido->idComplexion = $request['complexion'];
         $desaparecido->idColorPiel = $request['colorPiel'];

         $desaparecido->save();
         return response()->json($desaparecido);

         //cedula_partes_cuerpo;
         /*$parteCuerpo = new CedulaPartesCuerpo();

         $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
         $parteCuerpo->idPartesCuerpo = $request['parteCuerpo'];
         $parteCuerpo->lado = $request['lado'];
         $parteCuerpo->idColoresCuerpo = $request['colorP'];
         $parteCuerpo->otraParticularidad =$request['otraParticularidad'];
         $parteCuerpo->otraModificacion =$request['otraModificacion'];
         $parteCuerpo->otroColor =$request['otroColor'];
         $parteCuerpo->observaciones = $request['observaciones'];

         $parteCuerpo->save();

         //particularidades
         
         $particularidad = $request['particularidad'];

         $longitud = count($particularidad);

         for($i=0; $i<$longitud; $i++){
            /*echo $parteCuerpo->id;
            echo "<br>";
            echo $particularidad[$i];
            echo "<br>";*/
         /*   $particularidades = new PivotSubPartiCuerpo();
            $particularidades->idCedulaPartesCuerpo = $parteCuerpo->id;
            $particularidades->idSubParticularidades = $particularidad[$i];

            $particularidades->save();
         }

         //modificaciones

         $modificacion = $request['modificacion'];

         $longitud = count($modificacion);

         for($i=0; $i<$longitud; $i++){
            $modificaciones = new PivotSubModiCuerpo();
            $modificaciones->idCedulaPartesCuerpo = $parteCuerpo->id;
            $modificaciones->idSubModificaciones = $modificacion[$i];

            $modificaciones->save();
         }         

         //return response()->json([ 'response'=>'success', 'data'=>$desaparecido ]);
        return response()->json($desaparecido);
     /*} catch (Exception $e) {
         return response()->json([  'errors'=> [ ['mensaje' => $e->getMessage()] ] ]);
     }*/
        
        
    }


    //Store para cara
    public function storeCara(Request $request){
        //consulta ceja
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoC'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo->tenia = $request['infocejas'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoC'];
            $parteCuerpo->idTipoCuerpo = $request['tipoCeja'];
            $parteCuerpo->otraParticularidad =$request['otraPartiCeja'];
            $parteCuerpo->otraModificacion =$request['otraModiCeja'];
            $parteCuerpo->otroTipoCuerpo =$request['otroTipoCeja'];
            $parteCuerpo->observaciones = $request['observacionesCejas'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC  = (is_null($request['idPartiCeja'])) ? array() : $request['idPartiCeja'] ;
            //$particularidadC = $request['idPartiCeja'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC  = (is_null($request['idModiCeja'])) ? array() : $request['idModiCeja'] ;
             //$modificacionC = $request['idModiCeja'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //ceja
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo->tenia = $request['infocejas'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoC'];
            $parteCuerpo->idTipoCuerpo = $request['tipoCeja'];
            $parteCuerpo->otraParticularidad =$request['otraPartiCeja'];
            $parteCuerpo->otraModificacion =$request['otraModiCeja'];
            $parteCuerpo->otroTipoCuerpo =$request['otroTipoCeja'];
            $parteCuerpo->observaciones = $request['observacionesCejas'];

            $parteCuerpo->save();

            //particularidades ceja
            $particularidadC  = (is_null($request['idPartiCeja'])) ? array() : $request['idPartiCeja'] ;
            //$particularidadC = $request['idPartiCeja'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones ceja
             $modificacionC  = (is_null($request['idModiCeja'])) ? array() : $request['idModiCeja'] ;
             //$modificacionC = $request['idModiCeja'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }


        //consulta ojos
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoO'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            
            $parteCuerpo->tenia = $request['infoOjos'];
            $parteCuerpo->idColoresCuerpo = $request['colorOjos'];
            $parteCuerpo->otroColor = $request['otroColorOjo'];
            $parteCuerpo->idTamanoCuerpo = $request['tamanoOjos'];
            $parteCuerpo->otraParticularidad =$request['otraPartOjo'];
            $parteCuerpo->observaciones = $request['observacionesOjos'];
            $parteCuerpo->otraModificacion =$request['otraModOjo'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoO'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC  = (is_null($request['idPartiOjos'])) ? array() : $request['idPartiOjos'] ;
            //$particularidadC = $request['idPartiOjos'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC  = (is_null($request['idModiOjos'])) ? array() : $request['idModiOjos'] ;
             //$modificacionC = $request['idModiOjos'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //ceja
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->tenia = $request['infoOjos'];
            $parteCuerpo->idColoresCuerpo = $request['colorOjos'];
            $parteCuerpo->otroColor = $request['otroColorOjo'];
            $parteCuerpo->idTamanoCuerpo = $request['tamanoOjos'];
            $parteCuerpo->otraParticularidad =$request['otraPartOjo'];
            $parteCuerpo->observaciones = $request['observacionesOjos'];
            $parteCuerpo->otraModificacion =$request['otraModOjo'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoO'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades ceja
            $particularidadC  = (is_null($request['idPartiOjos'])) ? array() : $request['idPartiOjos'] ;
            //$particularidadC = $request['idPartiOjos'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones ceja
             $modificacionC = (is_null($request['idModiOjos'])) ? array() : $request['idModiOjos'] ;
             //$modificacionC = $request['idModiOjos'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }

        //consulta nariz
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoN'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo->tenia = $request['infoNariz'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoN'];
            $parteCuerpo->idTipoCuerpo = $request['tipoNariz'];
            $parteCuerpo->otraParticularidad =$request['otraPartNariz'];
            $parteCuerpo->otraModificacion =$request['otraModiNariz'];
            $parteCuerpo->otroTipoCuerpo =$request['otroTipNar'];
            $parteCuerpo->observaciones = $request['observacionesNariz'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC  = (is_null($request['idPartiNariz'])) ? array() : $request['idPartiNariz'] ;
            //$particularidadC = $request['idPartiNariz'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC  = (is_null($request['idModiNariz'])) ? array() : $request['idModiNariz'] ;
             //$modificacionC = $request['idModiNariz'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //nariz
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo->tenia = $request['infoNariz'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoN'];
            $parteCuerpo->idTipoCuerpo = $request['tipoNariz'];
            $parteCuerpo->otraParticularidad =$request['otraPartNariz'];
            $parteCuerpo->otraModificacion =$request['otraModiNariz'];
            $parteCuerpo->otroTipoCuerpo =$request['otroTipNar'];
            $parteCuerpo->observaciones = $request['observacionesNariz'];

            $parteCuerpo->save();

            //particularidades ceja
            $particularidadC  = (is_null($request['idPartiNariz'])) ? array() : $request['idPartiNariz'] ;
            //$particularidadC = $request['idPartiNariz'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones ceja
             $modificacionC  = (is_null($request['idModiNariz'])) ? array() : $request['idModiNariz'] ;
             //$modificacionC = $request['idModiNariz'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }

        //consulta boca
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoB'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            
            $parteCuerpo->tenia = $request['infoBoca'];
            $parteCuerpo->idTamanoCuerpo = $request['tamanoBoca'];
            $parteCuerpo->otraParticularidad =$request['otraPartBoca'];
            $parteCuerpo->observaciones = $request['observacionesBoca'];
            $parteCuerpo->otraModificacion =$request['otraModiBoca'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoB'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC  = (is_null($request['idPartiBoca'])) ? array() : $request['idPartiBoca'] ;
            //$particularidadC = $request['idPartiBoca'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC = (is_null($request['idModiBoca'])) ? array() : $request['idModiBoca'] ;
             //$modificacionC = $request['idModiBoca'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //boca
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->tenia = $request['infoBoca'];
            $parteCuerpo->idTamanoCuerpo = $request['tamanoBoca'];
            $parteCuerpo->otraParticularidad =$request['otraPartBoca'];
            $parteCuerpo->observaciones = $request['observacionesBoca'];
            $parteCuerpo->otraModificacion =$request['otraModiBoca'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoB'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades boca
            $particularidadC  = (is_null($request['idPartiBoca'])) ? array() : $request['idPartiBoca'] ;
            //$particularidadC = $request['idPartiBoca'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones boca
             $modificacionC = (is_null($request['idModiBoca'])) ? array() : $request['idModiBoca'] ;
             //$modificacionC = $request['idModiBoca'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }

        //consulta orejas
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoOre'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            
            $parteCuerpo->tenia = $request['infoOrejas'];
            $parteCuerpo->idTipoCuerpo = $request['tipoOreja'];
            $parteCuerpo->otroTipoCuerpo =$request['otroTipoOreja'];
            $parteCuerpo->otraParticularidad =$request['otraPartOreja'];
            $parteCuerpo->observaciones = $request['observacionesOreja'];
            $parteCuerpo->otraModificacion =$request['otraModOreja'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoOre'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC= (is_null($request['idPartiOreja'])) ? array() : $request['idPartiOreja'] ;
            //$particularidadC = $request['idPartiOreja'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC= (is_null($request['idModiOreja'])) ? array() : $request['idModiOreja'] ;
             //$modificacionC = $request['idModiOreja'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //orejas
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->tenia = $request['infoOrejas'];
            $parteCuerpo->idTipoCuerpo = $request['tipoOreja'];
            $parteCuerpo->otroTipoCuerpo =$request['otroTipoOreja'];
            $parteCuerpo->otraParticularidad =$request['otraPartOreja'];
            $parteCuerpo->observaciones = $request['observacionesOreja'];
            $parteCuerpo->otraModificacion =$request['otraModOreja'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoOre'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades orejas
            $particularidadC= (is_null($request['idPartiOreja'])) ? array() : $request['idPartiOreja'] ;
            //$particularidadC = $request['idPartiOreja'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones orejas
             $modificacionC= (is_null($request['idModiOreja'])) ? array() : $request['idModiOreja'] ;
             //$modificacionC = $request['idModiOreja'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }


        //consulta frente
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoF'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            
            $parteCuerpo->tenia = $request['infoFrente'];
            $parteCuerpo->otraParticularidad =$request['otraPartFrente'];
            $parteCuerpo->observaciones = $request['observacionesFrente'];
            $parteCuerpo->otraModificacion =$request['otraModFrente'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoF'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC= (is_null($request['idPartiFrente'])) ? array() : $request['idPartiFrente'] ;
            //$particularidadC = $request['idPartiFrente'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC= (is_null($request['idModiFrente'])) ? array() : $request['idModiFrente'] ;
             //$modificacionC = $request['idModiFrente'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //frente
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->tenia = $request['infoFrente'];
            $parteCuerpo->otraParticularidad =$request['otraPartFrente'];
            $parteCuerpo->observaciones = $request['observacionesFrente'];
            $parteCuerpo->otraModificacion =$request['otraModFrente'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoF'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades orejas
            $particularidadC= (is_null($request['idPartiFrente'])) ? array() : $request['idPartiFrente'] ;
            //$particularidadC = $request['idPartiFrente'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones orejas
             $modificacionC= (is_null($request['idModiFrente'])) ? array() : $request['idModiFrente'] ;
             //$modificacionC = $request['idModiFrente'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }


        //consulta mejillas
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoM'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            
            $parteCuerpo->tenia = $request['infoMejillas'];
            $parteCuerpo->otraParticularidad =$request['otraPartMejilla'];
            $parteCuerpo->observaciones = $request['observacionesMejilla'];
            $parteCuerpo->otraModificacion =$request['otraModMejilla'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoM'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC= (is_null($request['idPartiMejillas'])) ? array() : $request['idPartiMejillas'] ;
            //$particularidadC = $request['idPartiMejillas'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC= (is_null($request['idModiMejillas'])) ? array() : $request['idModiMejillas'] ;
             //$modificacionC = $request['idModiMejillas'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //mejilla
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->tenia = $request['infoMejillas'];
            $parteCuerpo->otraParticularidad =$request['otraPartMejilla'];
            $parteCuerpo->observaciones = $request['observacionesMejilla'];
            $parteCuerpo->otraModificacion =$request['otraModMejilla'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoM'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades mejilla
            $particularidadC= (is_null($request['idPartiMejillas'])) ? array() : $request['idPartiMejillas'] ;
            //$particularidadC = $request['idPartiMejillas'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones mejilla
             $modificacionC= (is_null($request['idModiMejillas'])) ? array() : $request['idModiMejillas'] ;
             //$modificacionC = $request['idModiMejillas'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }

        //consulta menton
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoMenton'])
                        ->get();
        
        $aux = count($query->toArray());

        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            
            $parteCuerpo->tenia = $request['infoMenton'];
            $parteCuerpo->otraParticularidad =$request['otraPartMenton'];
            $parteCuerpo->observaciones = $request['observacionesMenton'];
            $parteCuerpo->otraModificacion =$request['otraModMenton'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoMenton'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC= (is_null($request['idPartiMenton'])) ? array() : $request['idPartiMenton'] ;
            //$particularidadC = $request['idPartiMenton'];
            $longitud = count($particularidadC);

            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];
                        $partiCabello->save();
                    }
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
            }

            //modificaciones
             $modificacionC= (is_null($request['idModiMenton'])) ? array() : $request['idModiMenton'] ;
             //$modificacionC = $request['idModiMenton'];
             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];
                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }
        }else{
            //frente
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->tenia = $request['infoMenton'];
            $parteCuerpo->otraParticularidad =$request['otraPartMenton'];
            $parteCuerpo->observaciones = $request['observacionesMenton'];
            $parteCuerpo->otraModificacion =$request['otraModMenton'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoMenton'];
            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];

            $parteCuerpo->save();

            //particularidades orejas
            $particularidadC= (is_null($request['idPartiMenton'])) ? array() : $request['idPartiMenton'] ;
            //$particularidadC = $request['idPartiMenton'];
            $longitud = count($particularidadC);
            for($i=0; $i<$longitud; $i++){
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];
                $partiCabello->save();
            }

             //modificaciones orejas
             $modificacionC= (is_null($request['idModiMenton'])) ? array() : $request['idModiMenton'] ;
             //$modificacionC = $request['idModiMenton'];
             $longitud = count($modificacionC);
             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];
                $modiCabello->save();
             }         
        }

        return response()->json($parteCuerpo);
    }


    //Store para cabello,barba, bigote y patilla
    public function storeVelloFacial(Request $request){

        //consulta
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoC'])
                        ->get();
        
        $aux = count($query->toArray());
        //dd($query->toArray());


        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo->tenia = $request['tieneCabello'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoC'];
            $parteCuerpo->idTamanoCuerpo = $request['tamanoCabello'];
            $parteCuerpo->idTipoCuerpo = $request['tipoCabello'];
            $parteCuerpo->idColoresCuerpo = $request['colorCabello'];
            $parteCuerpo->otraParticularidad =$request['otraPartiC'];
            $parteCuerpo->otraModificacion =$request['otraModiC'];
            $parteCuerpo->otroColor =$request['otroColorC'];
            $parteCuerpo->observaciones = $request['observacionesCabello'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC = $request['partiCabello'];


            $longitud = count($particularidadC);



            if($longitud !=0){
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
                for($i=0; $i<$longitud; $i++){
                
                        $partiCabello = new PivotSubPartiCuerpo();
                        $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                        $partiCabello->idSubParticularidades = $particularidadC[$i];

                        $partiCabello->save();
                    }
               
            }else{
                \DB::table('pivot_subparti_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
               
            }

            

            //modificaciones

             $modificacionC = $request['modiCabello'];

             $longitud = count($modificacionC);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiCabello =  new PivotSubModiCuerpo();
                    $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                    $modiCabello->idSubModificaciones = $modificacionC[$i];

                    $modiCabello->save();
                 }         
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo->id)->delete();
             }


        }else{
            //CABELLO
            $parteCuerpo = new CedulaPartesCuerpo();

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo->tenia = $request['tieneCabello'];
            $parteCuerpo->idPartesCuerpo = $request['parteCuerpoC'];
            $parteCuerpo->idTamanoCuerpo = $request['tamanoCabello'];
            $parteCuerpo->idTipoCuerpo = $request['tipoCabello'];
            $parteCuerpo->idColoresCuerpo = $request['colorCabello'];
            $parteCuerpo->otraParticularidad =$request['otraPartiC'];
            $parteCuerpo->otraModificacion =$request['otraModiC'];
            $parteCuerpo->otroColor =$request['otroColorC'];
            $parteCuerpo->observaciones = $request['observacionesCabello'];

            $parteCuerpo->save();

            //particularidades
            $particularidadC = $request['partiCabello'];

            $longitud = count($particularidadC);

            for($i=0; $i<$longitud; $i++){
                
                $partiCabello = new PivotSubPartiCuerpo();
                $partiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $partiCabello->idSubParticularidades = $particularidadC[$i];

                $partiCabello->save();
            }

             //modificaciones

             $modificacionC = $request['modiCabello'];

             $longitud = count($modificacionC);

             for($i=0; $i<$longitud; $i++){
                $modiCabello = new PivotSubModiCuerpo();
                $modiCabello->idCedulaPartesCuerpo = $parteCuerpo->id;
                $modiCabello->idSubModificaciones = $modificacionC[$i];

                $modiCabello->save();
             }         

        }
        


        //consulta
        $query1 = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoBa'])
                        ->get();
        
        $aux2 = count($query1->toArray());
        //dd($query->toArray());


        if($aux2 != 0){
            //barba
            $parteCuerpo2 = CedulaPartesCuerpo::find($query1->toArray()[0]->id);

            $parteCuerpo2->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo2->tenia = $request['tieneBarba'];
            $parteCuerpo2->idPartesCuerpo = $request['parteCuerpoBa'];
            $parteCuerpo2->idTipoCuerpo = $request['tipoBarba'];
            $parteCuerpo2->idColoresCuerpo = $request['colorBarba'];
            $parteCuerpo2->otraParticularidad =$request['otraPartiBa'];
            $parteCuerpo2->otraModificacion =$request['otraModiBa'];
            $parteCuerpo2->otroColor =$request['otroColorBa'];
            $parteCuerpo2->observaciones = $request['observacionesBarba'];

            $parteCuerpo2->save();

            //modificaciones

             $modificacionBa = $request['modiBarba'];

             $longitud = count($modificacionBa);

             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo2->id)->delete();
                 for($i=0; $i<$longitud; $i++){
                    $modiBarba = new PivotSubModiCuerpo();
                    $modiBarba->idCedulaPartesCuerpo = $parteCuerpo2->id;
                    $modiBarba->idSubModificaciones = $modificacionBa[$i];

                    $modiBarba->save();
                 }
                 }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo2->id)->delete();
             }
        }else{
             //barba
            $parteCuerpo2 = new CedulaPartesCuerpo();

            $parteCuerpo2->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo2->tenia = $request['tieneBarba'];
            $parteCuerpo2->idPartesCuerpo = $request['parteCuerpoBa'];
            $parteCuerpo2->idTipoCuerpo = $request['tipoBarba'];
            $parteCuerpo2->idColoresCuerpo = $request['colorBarba'];
            $parteCuerpo2->otraParticularidad =$request['otraPartiBa'];
            $parteCuerpo2->otraModificacion =$request['otraModiBa'];
            $parteCuerpo2->otroColor =$request['otroColorBa'];
            $parteCuerpo2->observaciones = $request['observacionesBarba'];

            $parteCuerpo2->save();

            //modificaciones

             $modificacionBa = $request['modiBarba'];

             $longitud = count($modificacionBa);
             

                 for($i=0; $i<$longitud; $i++){
                    $modiBarba = new PivotSubModiCuerpo();
                    $modiBarba->idCedulaPartesCuerpo = $parteCuerpo2->id;
                    $modiBarba->idSubModificaciones = $modificacionBa[$i];

                    $modiBarba->save();
                 }
             
        }


       //consulta
        $query2 = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoBi'])
                        ->get();
        
        $aux3 = count($query2->toArray());;
        //dd($query->toArray());


        if($aux3 != 0){
             //bigote
            $parteCuerpo3 = CedulaPartesCuerpo::find($query2->toArray()[0]->id);

            $parteCuerpo3->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo3->tenia = $request['tieneBigote'];
            $parteCuerpo3->idPartesCuerpo = $request['parteCuerpoBi'];
            $parteCuerpo3->idTipoCuerpo = $request['tipoBigote'];
            $parteCuerpo3->idColoresCuerpo = $request['colorBigote'];
            $parteCuerpo3->otraParticularidad =$request['otraPartiBi'];
            $parteCuerpo3->otraModificacion =$request['otraModiBi'];
            $parteCuerpo3->otroColor =$request['otroColorBi'];
            $parteCuerpo3->observaciones = $request['observacionesBigote'];

            $parteCuerpo3->save();

            //modificaciones

             $modificacionBi = $request['modiBigote'];

             $longitud = count($modificacionBi);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo3->id)->delete();

                 for($i=0; $i<$longitud; $i++){
                    $modiBigote = new PivotSubModiCuerpo();
                    $modiBigote->idCedulaPartesCuerpo = $parteCuerpo3->id;
                    $modiBigote->idSubModificaciones = $modificacionBi[$i];

                    $modiBigote->save();
                 }     
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo3->id)->delete();
             }
        }else{
             //bigote
            $parteCuerpo3 = new CedulaPartesCuerpo();

            $parteCuerpo3->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo3->tenia = $request['tieneBigote'];
            $parteCuerpo3->idPartesCuerpo = $request['parteCuerpoBi'];
            $parteCuerpo3->idTipoCuerpo = $request['tipoBigote'];
            $parteCuerpo3->idColoresCuerpo = $request['colorBigote'];
            $parteCuerpo3->otraParticularidad =$request['otraPartiBi'];
            $parteCuerpo3->otraModificacion =$request['otraModiBi'];
            $parteCuerpo3->otroColor =$request['otroColorBi'];
            $parteCuerpo3->observaciones = $request['observacionesBigote'];

            $parteCuerpo3->save();

            //modificaciones

             $modificacionBi = $request['modiBigote'];

             $longitud = count($modificacionBi);

             for($i=0; $i<$longitud; $i++){
                $modiBigote = new PivotSubModiCuerpo();
                $modiBigote->idCedulaPartesCuerpo = $parteCuerpo3->id;
                $modiBigote->idSubModificaciones = $modificacionBi[$i];

                $modiBigote->save();
             }         
        }

       
        //consulta
        $query3 = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoPa'])
                        ->get();
        
        $aux4 = count($query2->toArray());;
        //dd($query->toArray());


        if($aux4 != 0){
             //patilla
            $parteCuerpo4 = CedulaPartesCuerpo::find($query3->toArray()[0]->id);

            $parteCuerpo4->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo4->tenia = $request['tienePatilla'];
            $parteCuerpo4->idPartesCuerpo = $request['parteCuerpoPa'];
            $parteCuerpo4->idTipoCuerpo = $request['tipoPatilla'];
            $parteCuerpo4->idColoresCuerpo = $request['colorPatilla'];
            $parteCuerpo4->otraModificacion =$request['otraModiP'];
            $parteCuerpo4->otroColor =$request['otroColorP'];
            $parteCuerpo4->observaciones = $request['observacionesPatilla'];

            $parteCuerpo4->save();

            //modificaciones

             $modificacionP = $request['modiPatilla'];

             $longitud = count($modificacionP);
             if($longitud !=0){
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo4->id)->delete();
                 for($i=0; $i<$longitud; $i++){
                    $modiPatilla = new PivotSubModiCuerpo();
                    $modiPatilla->idCedulaPartesCuerpo = $parteCuerpo4->id;
                    $modiPatilla->idSubModificaciones = $modificacionP[$i];

                    $modiPatilla->save();
                 } 
             }else{
                \DB::table('pivot_submodi_cuerpo')->where('idCedulaPartesCuerpo', $parteCuerpo4->id)->delete();
             }
        }else{
            //patilla
            $parteCuerpo4 = new CedulaPartesCuerpo();

            $parteCuerpo4->idPersonaDesaparecida = $request['idExtraviado'];
            $parteCuerpo4->tenia = $request['tienePatilla'];
            $parteCuerpo4->idPartesCuerpo = $request['parteCuerpoPa'];
            $parteCuerpo4->idTipoCuerpo = $request['tipoPatilla'];
            $parteCuerpo4->idColoresCuerpo = $request['colorPatilla'];
            $parteCuerpo4->otraModificacion =$request['otraModiP'];
            $parteCuerpo4->otroColor =$request['otroColorP'];
            $parteCuerpo4->observaciones = $request['observacionesPatilla'];

            $parteCuerpo4->save();

            //modificaciones

             $modificacionP = $request['modiPatilla'];

             $longitud = count($modificacionP);

             for($i=0; $i<$longitud; $i++){
                $modiPatilla = new PivotSubModiCuerpo();
                $modiPatilla->idCedulaPartesCuerpo = $parteCuerpo4->id;
                $modiPatilla->idSubModificaciones = $modificacionP[$i];

                $modiPatilla->save();
             }         
        }

        
         return response()->json($particularidadC);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idDesaparecido)
    {
        //
        $desaparecido = Desaparecido::find($idDesaparecido);
        //dd($desaparecido->toArray());
        $ids = array(1,6,11,13,15,16,20,23,24,34,35,36,37);
        //ids para cejas
        $idCejas = array(73,6,7);
        $cejasParte = \App\Models\CatPartesCuerpo::whereIn('id',$idCejas)->orderBy('nombre')->pluck('nombre','id');
         $tipoCeja = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','6')->pluck('nombre','id');

        //ids para ojos
        $idOjos = array(37,36,74);
        $ojosParte = \App\Models\CatPartesCuerpo::whereIn('id',$idOjos)->orderBy('nombre')->pluck('nombre','id');

        //ids para boca
        $idBoca = array(72,19,20);
        $bocaParte = \App\Models\CatPartesCuerpo::whereIn('id',$idBoca)->orderBy('nombre')->pluck('nombre','id');

        //ids para orejas
        $idOrejas = array(34,35,77);
        $orejasParte = \App\Models\CatPartesCuerpo::whereIn('id',$idOrejas)->orderBy('nombre')->pluck('nombre','id');

        //ids para mejillas
        $idMejillas = array(23,75,76);
        $mejillasParte = \App\Models\CatPartesCuerpo::whereIn('id',$idMejillas)->orderBy('nombre')->pluck('nombre','id');

        //ids para pechos
        $idPechos = array(42,43,78);
        $pechosParte = \App\Models\CatPartesCuerpo::whereIn('id',$idPechos)->orderBy('nombre')->pluck('nombre','id');
       

        $partesCuerpo = \App\Models\CatPartesCuerpo::whereIn('id',$ids)->pluck('nombre','id');
        $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
        $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');
        $coloresCuerpo = \App\Models\CatColoresCuerpo::all()->pluck('nombre','id');
        $subParticularidades = \App\Models\CatParticularidadesCuerpo::all()->pluck('nombre','id');
        $subModificaciones = \App\Models\CatModificacionesCuerpo::all()->pluck('nombre','id');
        //Datos para cabello
        $tipoCabello = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','55')->pluck('nombre','id');
        $tamanoCabello = \App\Models\CatTamanoCuerpo::where('idPartesCuerpo','55')->pluck('nombre','id');
        $coloresCabello = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','55')->pluck('nombre','id');
        $partiCabello = \App\Models\CatParticularidadesCuerpo::where('idPartesCuerpo','1')->pluck('nombre','id');
        $modiCabello = \App\Models\CatModificacionesCuerpo::where('idPartesCuerpo','1')->pluck('nombre','id');

        //Datos Barba
        $tipoBarba = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','56')->pluck('nombre','id');
        
        $coloresBarba = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','56')->pluck('nombre','id');
        $partiBarba = \App\Models\CatParticularidadesCuerpo::where('idPartesCuerpo','16')->pluck('nombre','id');
        $modiBarba = \App\Models\CatModificacionesCuerpo::where('idPartesCuerpo','16')->pluck('nombre','id');

        //Datos Bigote
        $tipoBigote = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','57')->pluck('nombre','id');
        
        $coloresBigote = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','57')->pluck('nombre','id');
        $partiBigote = \App\Models\CatParticularidadesCuerpo::where('idPartesCuerpo','12')->pluck('nombre','id');
        $modiBigote = \App\Models\CatModificacionesCuerpo::where('idPartesCuerpo','12')->pluck('nombre','id');

        //Datos Patilla
        $tipoPatilla = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','58')->pluck('nombre','id');
        
        $coloresPatilla = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','58')->pluck('nombre','id');
        $partiPatilla = \App\Models\CatParticularidadesCuerpo::where('idPartesCuerpo','9')->pluck('nombre','id');
        $modiPatilla = \App\Models\CatModificacionesCuerpo::where('idPartesCuerpo','9')->pluck('nombre','id');

        if ($desaparecido->estatura != null) {
            $aux = true;
        }else{
            $aux = false;
        }

         //consulta cabello
        $cedulaPartesCuerpo = CedulaPartesCuerpo::where('idPersonaDesaparecida',$idDesaparecido)->get();
        $showCabello = false;
         
        for ( $i =0; $i <count($cedulaPartesCuerpo); $i++) {
            if($showCabello != true){
              if($cedulaPartesCuerpo[$i]->idPartesCuerpo >= 55 && $cedulaPartesCuerpo[$i]->idPartesCuerpo <= 58 ){
                $showCabello = true;
              }else{
                $showCabello = false;
              }
              /*$("#detallesV").toggle();
              $("#datosCabello").toggle();
              $("#btnEditarC").hide();*/
            }else{
              //
              /*$("#datosCabello").hide();
              $("#btnEditarC").show();
              $("#detallesV").show();*/
            }
            
        }
        


        return view('descripcionfisica.form_descripcion_fisica',
            [
                'desaparecido' => $desaparecido,
                'complexiones' => $complexiones,
                'coloresPiel' => $coloresPiel,
                'partesCuerpo' => $partesCuerpo,
                'tipoCabello' => $tipoCabello,
                'tamanoCabello' => $tamanoCabello,
                'coloresCabello' => $coloresCabello,
                'partiCabello' => $partiCabello,
                'modiCabello' => $modiCabello,
                'tipoBarba' => $tipoBarba,
                'coloresBarba' => $coloresBarba,
                'partiBarba' => $partiBarba,
                'modiBarba' => $modiBarba,
                'tipoBigote' => $tipoBigote,
                'coloresBigote' => $coloresBigote,
                'partiBigote' => $partiBigote,
                'modiBigote' => $modiBigote,
                'tipoPatilla' => $tipoPatilla,
                'coloresPatilla' => $coloresPatilla,
                'partiPatilla' => $partiPatilla,
                'modiPatilla' => $modiPatilla,
                'aux' => $aux,
                'cejasParte' => $cejasParte,
                'tipoCeja' => $tipoCeja,
                'ojosParte' => $ojosParte,
                'bocaParte' => $bocaParte,
                'orejasParte' => $orejasParte,
                'mejillasParte' => $mejillasParte,
                'pechosParte' => $pechosParte,
                'showCabello' => $showCabello
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteVelloFacial($idExtraviado){
         //consulta cabello
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',55)
                        ->get();
        
        $aux = count($query->toArray());;
        //dd($query->toArray());

        //dd($query->toArray()[3]);

        for($i=0; $i<$aux; $i++){
            $particularidades = PivotSubPartiCuerpo::where('idCedulaPartesCuerpo',$query->toArray()[$i]->id);
            $particularidades->delete();

            $modificaciones = PivotSubModiCuerpo::where('idCedulaPartesCuerpo',$query->toArray()[$i]->id);
            $modificaciones->delete();
        }

        \DB::table('cedula_partes_cuerpo')->where('idPersonaDesaparecida',$idExtraviado)->where('idPartesCuerpo',55)->delete();

         //consulta barba
        $query1 = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',56)
                        ->get();
        
        $aux1 = count($query1->toArray());;
        //dd($query->toArray());

        //dd($query->toArray()[3]);

        for($i=0; $i<$aux1; $i++){
            $particularidades = PivotSubPartiCuerpo::where('idCedulaPartesCuerpo',$query1->toArray()[$i]->id);
            $particularidades->delete();

            $modificaciones = PivotSubModiCuerpo::where('idCedulaPartesCuerpo',$query1->toArray()[$i]->id);
            $modificaciones->delete();
        }

        \DB::table('cedula_partes_cuerpo')->where('idPersonaDesaparecida',$idExtraviado)->where('idPartesCuerpo',56)->delete();

         //consulta bigote
        $query2 = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',57)
                        ->get();
        
        $aux2 = count($query2->toArray());;
        //dd($query->toArray());

        //dd($query->toArray()[3]);

        for($i=0; $i<$aux2; $i++){
            $particularidades = PivotSubPartiCuerpo::where('idCedulaPartesCuerpo',$query2->toArray()[$i]->id);
            $particularidades->delete();

            $modificaciones = PivotSubModiCuerpo::where('idCedulaPartesCuerpo',$query2->toArray()[$i]->id);
            $modificaciones->delete();
        }

        \DB::table('cedula_partes_cuerpo')->where('idPersonaDesaparecida',$idExtraviado)->where('idPartesCuerpo',57)->delete();

         //consulta patilla
        $query3 = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',58)
                        ->get();
        
        $aux3 = count($query3->toArray());;
        //dd($query->toArray());

        //dd($query->toArray()[3]);

        for($i=0; $i<$aux3; $i++){
            $particularidades = PivotSubPartiCuerpo::where('idCedulaPartesCuerpo',$query3->toArray()[$i]->id);
            $particularidades->delete();

            $modificaciones = PivotSubModiCuerpo::where('idCedulaPartesCuerpo',$query3->toArray()[$i]->id);
            $modificaciones->delete();
        }

        \DB::table('cedula_partes_cuerpo')->where('idPersonaDesaparecida',$idExtraviado)->where('idPartesCuerpo',58)->delete();



    }

    public function getParticularidades($idParteCuerpo){
         $particularidades = \DB::table('cat_partes_cuerpo as cpartes')
                            ->join('cat_particularidades_cuerpo as cparti','cpartes.id','=','cparti.idPartesCuerpo' )
                            ->join('cat_sub_particularidades as csubp','cparti.id','=','csubp.idParticularidadesCuerpo')
                            ->select('csubp.nombre as nombre','csubp.id as id')
                            ->where('cparti.idPartesCuerpo',$idParteCuerpo)
                            ->get();
            return response()->json($particularidades);
    }

    public function getModificaciones($idParteCuerpo){
         $modificaciones = \DB::table('cat_partes_cuerpo as cpartes')
                            ->join('cat_modificaciones_cuerpo as cmodi','cpartes.id','=','cmodi.idPartesCuerpo' )
                            ->join('cat_sub_modificaciones as csubm','cmodi.id','=','csubm.idModificacionesCuerpo')
                            ->select('csubm.nombre as nombre','csubm.id as id')
                            ->where('cmodi.idPartesCuerpo',$idParteCuerpo)
                            ->get();
            return response()->json($modificaciones);
    }

    public function getColoresCuerpo($idParteCuerpo){
        $coloresCuerpo = \DB::table('cat_partes_cuerpo as cpartes')
                            ->join('cat_colores_cuerpo as ccuerpo','cpartes.id','=','ccuerpo.idPartesCuerpo' )
                            ->select('ccuerpo.nombre as nombre','ccuerpo.id as id')
                            ->where('ccuerpo.idPartesCuerpo',$idParteCuerpo)
                            ->get();

            return response()->json($coloresCuerpo);
    }

    public function getCabello($idExtraviado){

        $partesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->leftjoin('cat_tamano_cuerpo as tamaCuerpo','tamaCuerpo.id','=','cpc.idTamanoCuerpo')
                        ->leftjoin('cat_tipos_cuerpo as tipoCuerpo','tipoCuerpo.id','=','cpc.idTipoCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.tenia',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'cpc.idColoresCuerpo',
                                'cpc.idTamanoCuerpo',
                                'cpc.idTipoCuerpo',
                                'tamaCuerpo.nombre as tamano',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',55)
                        ->get();

        /*foreach ($partesCuerpo as $parte) {
            # code...
            $particularidades = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_subparti_cuerpo as pspc','cpc.id','=','pspc.idCedulaPartesCuerpo')
                                ->join('cat_sub_particularidades as csp','csp.id','=','pspc.idSubParticularidades')
                                ->select('csp.nombre')
                                ->where('cpc.idPartesCuerpo',$parte->idPartesCuerpo)
                                ->get();
            echo $particularidades;
            echo "<br>";

            $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre')
                                ->where('cpc.idPartesCuerpo',$parte->idPartesCuerpo)
                                ->get();
            echo $modificaciones;
            echo "<br>";
        }
        */
        //return response()->json($particularidades);

        $i = 0;
        foreach ($partesCuerpo as $value) {

             $particularidades = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_subparti_cuerpo as pspc','cpc.id','=','pspc.idCedulaPartesCuerpo')
                                ->join('cat_sub_particularidades as csp','csp.id','=','pspc.idSubParticularidades')
                                ->select('csp.nombre as particularidad',
                                         'csp.id as idParticularidad')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('pspc.idCedulaPartesCuerpo',$value->id)
                                ->get();

            $longitud = count($particularidades);
            $nParticularidad = '';
            $idParti  = array();
            for($j=0;$j < $longitud; $j++){
                $nParticularidad = $particularidades[$j]->particularidad.', '.$nParticularidad  ;
                array_push($idParti , $particularidades[$j]->idParticularidad);
                
            }

            /* echo $particularidades;
            echo "<br>";*/

             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion',
                                        'csm.id as idModificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
            /*echo $modificaciones;
            echo "<br>";*/

            
            $nModificaciones = '';
            $idModi = array();
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
                array_push($idModi, $modificaciones[$x]->idModificacion);
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'tenia' => $value->tenia,
                                'color' => $value->colorCuerpo,
                                'tamano' => $value->tamano,
                                'tipo' => $value->tipo,
                                'particularidades' => trim($nParticularidad,', '),
                                'modificaciones' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones,
                                'idColor' => $value->idColoresCuerpo,
                                'idTamano' => $value->idTamanoCuerpo,
                                'idTipo' => $value->idTipoCuerpo,
                                'idParti' => $idParti,
                                'idModi' => $idModi

                                 ); 
            /*print_r( $cuerpo[$i]);
            echo "<br>";*/
            $i++;
            $nParticularidad = '';
            $nModificaciones = '';

        }

        return response()->json($cuerpo);        
    }

    public function getBarba($idExtraviado){

        $partesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->leftjoin('cat_tipos_cuerpo as tipoCuerpo','tipoCuerpo.id','=','cpc.idTipoCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.tenia',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'cpc.idColoresCuerpo',
                                'cpc.idTipoCuerpo',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',56)
                        ->get();

        $i = 0;
        foreach ($partesCuerpo as $value) {


             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion',
                                        'csm.id as idModificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
           
            $nModificaciones = '';
            $idModi = array();
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
                array_push($idModi, $modificaciones[$x]->idModificacion);
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'tenia' => $value->tenia,
                                'color' => $value->colorCuerpo,
                                'tipo' => $value->tipo,
                                'estilo' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones,
                                'idColor' => $value->idColoresCuerpo,
                                'idTipo' => $value->idTipoCuerpo,
                                'idModi' => $idModi

                                 ); 
        
            $i++;
            $nModificaciones = '';
        }

        return response()->json($cuerpo);        
    }

    public function getBigote($idExtraviado){

        $partesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->leftjoin('cat_tipos_cuerpo as tipoCuerpo','tipoCuerpo.id','=','cpc.idTipoCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.tenia',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'cpc.idColoresCuerpo',
                                'cpc.idTipoCuerpo',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',57)
                        ->get();

        $i = 0;
        foreach ($partesCuerpo as $value) {


             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion',
                                        'csm.id as idModificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
           
            $nModificaciones = '';
            $idModi = array();
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
                array_push($idModi, $modificaciones[$x]->idModificacion);
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'tenia' => $value->tenia,
                                'color' => $value->colorCuerpo,
                                'tipo' => $value->tipo,
                                'estilo' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones,
                                'idColor' => $value->idColoresCuerpo,
                                'idTipo' => $value->idTipoCuerpo,
                                'idModi' => $idModi

                                 ); 
        
            $i++;
            $nModificaciones = '';
        }

        return response()->json($cuerpo);        
    }

    public function getPatilla($idExtraviado){

        $partesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->leftjoin('cat_tipos_cuerpo as tipoCuerpo','tipoCuerpo.id','=','cpc.idTipoCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.tenia',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'cpc.idColoresCuerpo',
                                'cpc.idTipoCuerpo',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',58)
                        ->get();

        $i = 0;
        foreach ($partesCuerpo as $value) {


             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion',
                                        'csm.id as idModificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
           
            $nModificaciones = '';
            $idModi = array();
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
                array_push($idModi, $modificaciones[$x]->idModificacion);
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'tenia' => $value->tenia,
                                'color' => $value->colorCuerpo,
                                'tipo' => $value->tipo,
                                'estilo' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones,
                                'idColor' => $value->idColoresCuerpo,
                                'idTipo' => $value->idTipoCuerpo,
                                'idModi' => $idModi

                                 ); 
        
            $i++;
            $nModificaciones = '';
        }

        return response()->json($cuerpo);        
    }

    public function getdatosfisicos($idExtraviado){
        
        $datosfisicos = \DB::table('desaparecidos_personas as dp')
            ->join('cat_complexion as cc','cc.id','=','dp.idComplexion')
            ->join('cat_color_piel as ccp','ccp.id','=','dp.idColorPiel')
            ->select('dp.estatura',
                                'dp.peso',
                                'cc.nombre as complexion',
                                'ccp.nombre as piel',
                                'dp.idComplexion',
                                'dp.idColorPiel')
            ->where('dp.id',$idExtraviado)
            ->get();
        
        return response()->json($datosfisicos);
    }

    public function getTipoCuerpo($idParteCuerpo){
        
        $tipos = \DB::table('cat_tipos_cuerpo')
            ->where('idPartesCuerpo',$idParteCuerpo)
            ->get();
        
        return response()->json($tipos);
    }

    public function getTamanoCuerpo($idParteCuerpo){
        
        $tamano = \DB::table('cat_tamano_cuerpo')
            ->where('idPartesCuerpo',$idParteCuerpo)
            ->get();
        
        return response()->json($tamano);
    }


     public function getRostro($idExtraviado){

        $partesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->leftjoin('cat_tamano_cuerpo as tamaCuerpo','tamaCuerpo.id','=','cpc.idTamanoCuerpo')
                        ->leftjoin('cat_tipos_cuerpo as tipoCuerpo','tipoCuerpo.id','=','cpc.idTipoCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.tenia',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'cpc.idColoresCuerpo',
                                'cpc.idTamanoCuerpo',
                                'cpc.idTipoCuerpo',
                                'tamaCuerpo.nombre as tamano',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->whereIn('cpc.idPartesCuerpo', array(73, 6, 7, 36, 37, 74, 31, 72,19,20,77,34,35,16,75,76,23,24))
                        /*->where('cpc.idPartesCuerpo',73)
                        ->orwhere('cpc.idPartesCuerpo',6)
                        ->orwhere('cpc.idPartesCuerpo',7)
                        ->orwhere('cpc.idPartesCuerpo',36)
                        ->orwhere('cpc.idPartesCuerpo',37)
                        ->orwhere('cpc.idPartesCuerpo',74)
                        ->orwhere('cpc.idPartesCuerpo',31)
                        ->orwhere('cpc.idPartesCuerpo',72)
                        ->orwhere('cpc.idPartesCuerpo',19)
                        ->orwhere('cpc.idPartesCuerpo',20)
                        ->orwhere('cpc.idPartesCuerpo',77)
                        ->orwhere('cpc.idPartesCuerpo',34)
                        ->orwhere('cpc.idPartesCuerpo',35)
                        ->orwhere('cpc.idPartesCuerpo',16)
                        ->orwhere('cpc.idPartesCuerpo',75)
                        ->orwhere('cpc.idPartesCuerpo',76)
                        ->orwhere('cpc.idPartesCuerpo',23)
                        ->orwhere('cpc.idPartesCuerpo',24)*/
                        ->get();

        /*foreach ($partesCuerpo as $parte) {
            # code...
            $particularidades = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_subparti_cuerpo as pspc','cpc.id','=','pspc.idCedulaPartesCuerpo')
                                ->join('cat_sub_particularidades as csp','csp.id','=','pspc.idSubParticularidades')
                                ->select('csp.nombre')
                                ->where('cpc.idPartesCuerpo',$parte->idPartesCuerpo)
                                ->get();
            echo $particularidades;
            echo "<br>";

            $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre')
                                ->where('cpc.idPartesCuerpo',$parte->idPartesCuerpo)
                                ->get();
            echo $modificaciones;
            echo "<br>";
        }
        */
        //return response()->json($particularidades);

        $i = 0;
        foreach ($partesCuerpo as $value) {

             $particularidades = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_subparti_cuerpo as pspc','cpc.id','=','pspc.idCedulaPartesCuerpo')
                                ->join('cat_sub_particularidades as csp','csp.id','=','pspc.idSubParticularidades')
                                ->select('csp.nombre as particularidad',
                                         'csp.id as idParticularidad')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('pspc.idCedulaPartesCuerpo',$value->id)
                                ->get();

            $longitud = count($particularidades);
            $nParticularidad = '';
            $idParti  = array();
            for($j=0;$j < $longitud; $j++){
                $nParticularidad = $particularidades[$j]->particularidad.', '.$nParticularidad  ;
                array_push($idParti , $particularidades[$j]->idParticularidad);
                
            }

            /* echo $particularidades;
            echo "<br>";*/

             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion',
                                        'csm.id as idModificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
            /*echo $modificaciones;
            echo "<br>";*/

            
            $nModificaciones = '';
            $idModi = array();
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
                array_push($idModi, $modificaciones[$x]->idModificacion);
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'tenia' => $value->tenia,
                                'color' => $value->colorCuerpo,
                                'tamano' => $value->tamano,
                                'tipo' => $value->tipo,
                                'particularidades' => trim($nParticularidad,', '),
                                'modificaciones' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones,
                                'idColor' => $value->idColoresCuerpo,
                                'idTamano' => $value->idTamanoCuerpo,
                                'idTipo' => $value->idTipoCuerpo,
                                'idParti' => $idParti,
                                'idModi' => $idModi

                                 ); 
            /*print_r( $cuerpo[$i]);
            echo "<br>";*/
            $i++;
            $nParticularidad = '';
            $nModificaciones = '';

        }
        return response()->json($cuerpo);        
    }

    


}
