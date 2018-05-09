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

         //cedula_partes_cuerpo;
         $parteCuerpo = new CedulaPartesCuerpo();

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
            $particularidades = new PivotSubPartiCuerpo();
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

    public function getPartesCuerpo($idExtraviado){

        $partesCuerpo = \DB::table('cedula_partes_cuerpo as cpc')
                        ->leftjoin('cat_partes_cuerpo as catpc','catpc.id','=','cpc.idPartesCuerpo')
                        ->leftjoin('cat_colores_cuerpo as catcolores','catcolores.id','=','cpc.idColoresCuerpo')
                        ->select('cpc.idPartesCuerpo',
                                'catpc.nombre as nombreCuerpo',
                                'cpc.lado',
                                'cpc.observaciones',
                                'catcolores.nombre as colorCuerpo',
                                'cpc.otraParticularidad',
                                'cpc.otraModificacion',
                                'cpc.otroColor',
                                'cpc.id')
                        ->where('cpc.idPersonaDesaparecida',$idExtraviado)
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
}
