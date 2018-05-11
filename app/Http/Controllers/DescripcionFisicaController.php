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

    //Store para cabello,barba, bigote y patilla
    public function storeVelloFacial(Request $request){

        //consulta
        $query = \DB::table('cedula_partes_cuerpo as cpc')
                        ->where('cpc.idPersonaDesaparecida',$request['idExtraviado'])
                        ->where('cpc.idPartesCuerpo',$request['parteCuerpoC'])
                        ->get();
        
        $aux = count($query->toArray());;
        //dd($query->toArray());


        if($aux != 0){
            $parteCuerpo =  CedulaPartesCuerpo::find($query->toArray()[0]->id);

            $parteCuerpo->idPersonaDesaparecida = $request['idExtraviado'];
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
        
        $aux2 = count($query1->toArray());;
        //dd($query->toArray());


        if($aux2 != 0){
            //barba
            $parteCuerpo2 = CedulaPartesCuerpo::find($query1->toArray()[0]->id);

            $parteCuerpo2->idPersonaDesaparecida = $request['idExtraviado'];
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
        $ids = array(1,6,11,13,15,16,20,23,24,34,35,36,37);
        $partesCuerpo = \App\Models\CatPartesCuerpo::whereIn('id',$ids)->pluck('nombre','id');
        $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
        $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');
        $coloresCuerpo = \App\Models\CatColoresCuerpo::all()->pluck('nombre','id');
        $subParticularidades = \App\Models\CatSubParticularidades::all()->pluck('nombre','id');
        $subModificaciones = \App\Models\CatSubModificaciones::all()->pluck('nombre','id');
        //Datos para cabello
        $tipoCabello = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','55')->pluck('nombre','id');
        $tamanoCabello = \App\Models\CatTamanoCuerpo::where('idPartesCuerpo','55')->pluck('nombre','id');
        $coloresCabello = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','55')->pluck('nombre','id');
        $partiCabello = \App\Models\CatSubParticularidades::where('idParticularidadesCuerpo','1')->pluck('nombre','id');
        $modiCabello = \App\Models\CatSubModificaciones::where('idModificacionesCuerpo','1')->pluck('nombre','id');

        //Datos Barba
        $tipoBarba = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','56')->pluck('nombre','id');
        
        $coloresBarba = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','56')->pluck('nombre','id');
        $partiBarba = \App\Models\CatSubParticularidades::where('idParticularidadesCuerpo','16')->pluck('nombre','id');
        $modiBarba = \App\Models\CatSubModificaciones::where('idModificacionesCuerpo','16')->pluck('nombre','id');

        //Datos Bigote
        $tipoBigote = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','57')->pluck('nombre','id');
        
        $coloresBigote = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','57')->pluck('nombre','id');
        $partiBigote = \App\Models\CatSubParticularidades::where('idParticularidadesCuerpo','12')->pluck('nombre','id');
        $modiBigote = \App\Models\CatSubModificaciones::where('idModificacionesCuerpo','12')->pluck('nombre','id');

        //Datos Patilla
        $tipoPatilla = \App\Models\CatTiposCuerpo::where('idPartesCuerpo','58')->pluck('nombre','id');
        
        $coloresPatilla = \App\Models\CatColoresCuerpo::where('idPartesCuerpo','58')->pluck('nombre','id');
        $partiPatilla = \App\Models\CatSubParticularidades::where('idParticularidadesCuerpo','9')->pluck('nombre','id');
        $modiPatilla = \App\Models\CatSubModificaciones::where('idModificacionesCuerpo','9')->pluck('nombre','id');



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
                                'cpc.lado',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
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
                                ->select('csp.nombre as particularidad')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('pspc.idCedulaPartesCuerpo',$value->id)
                                ->get();

            $longitud = count($particularidades);
            $nParticularidad = '';
            for($j=0;$j < $longitud; $j++){
                $nParticularidad = $particularidades[$j]->particularidad.', '.$nParticularidad  ;
                
            }

            /* echo $particularidades;
            echo "<br>";*/

             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
            /*echo $modificaciones;
            echo "<br>";*/

            
            $nModificaciones = '';
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'lado' => $value->lado,
                                'color' => $value->colorCuerpo,
                                'tamano' => $value->tamano,
                                'tipo' => $value->tipo,
                                'particularidades' => trim($nParticularidad,', '),
                                'modificaciones' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones

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
                                'cpc.lado',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',56)
                        ->get();

        $i = 0;
        foreach ($partesCuerpo as $value) {


             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
           
            $nModificaciones = '';
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'lado' => $value->lado,
                                'color' => $value->colorCuerpo,
                                'tipo' => $value->tipo,
                                'estilo' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones

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
                                'cpc.lado',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',57)
                        ->get();

        $i = 0;
        foreach ($partesCuerpo as $value) {


             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
           
            $nModificaciones = '';
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'lado' => $value->lado,
                                'color' => $value->colorCuerpo,
                                'tipo' => $value->tipo,
                                'estilo' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones

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
                                'cpc.lado',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id',
                                'tipoCuerpo.nombre as tipo')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
                        ->where('cpc.idPartesCuerpo',58)
                        ->get();

        $i = 0;
        foreach ($partesCuerpo as $value) {


             $modificaciones = \DB::table('cedula_partes_cuerpo as cpc')
                                ->join('pivot_submodi_cuerpo as psmc','cpc.id','=','psmc.idCedulaPartesCuerpo')
                                ->join('cat_sub_modificaciones as csm','csm.id','=','psmc.idSubModificaciones')
                                ->select('csm.nombre as modificacion')
                                ->where('cpc.idPartesCuerpo',$value->idPartesCuerpo)
                                ->where('psmc.idCedulaPartesCuerpo',$value->id)
                                ->get();
           
            $nModificaciones = '';
            
            $longitud2 = count($modificaciones);
            for($x=0;$x < $longitud2; $x++){
                $nModificaciones = $modificaciones[$x]->modificacion.', '.$nModificaciones;
            }

            $cuerpo[$i] = array('id_cuerpo' => $value->idPartesCuerpo,
                                'nombre' => $value->nombreCuerpo,
                                'lado' => $value->lado,
                                'color' => $value->colorCuerpo,
                                'tipo' => $value->tipo,
                                'estilo' => trim($nModificaciones,', '),
                                'otraParticularidad' => $value->otraParticularidad,
                                'otraModificacion' => $value->otraModificacion,
                                'otroColor' => $value->otroColor,
                                'observaciones' => $value->observaciones

                                 ); 
        
            $i++;
            $nModificaciones = '';
        }

        return response()->json($cuerpo);        
    }
}
