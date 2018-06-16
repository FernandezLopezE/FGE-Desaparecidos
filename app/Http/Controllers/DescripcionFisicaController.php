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

    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idDesaparecido)
    {
        $desaparecido = Desaparecido::find($idDesaparecido);
        $todasPartes    = \App\Models\CatPartesCuerpo::where('partePadre', '0')->get();
        $activasPartes = \App\Models\CedulaPartesCuerpo::where('idPersonaDesaparecida', $idDesaparecido)->with('catpartescuerpo')->get();
        $partesSeleccionadas = \DB::table('cedula_partes_cuerpo AS ce')
                        ->leftJoin('cat_partes_cuerpo AS cu', 'ce.idPartesCuerpo', '=', 'cu.id')
                        ->leftJoin('cat_partes_cuerpo AS pa', 'cu.partePadre', '=', 'pa.id')
                        ->leftJoin('cat_tamano_cuerpo AS ta', 'ce.idTamanoCuerpo', '=', 'ta.id')
                        ->leftJoin('cat_tipos_cuerpo AS ti', 'ce.idTipoCuerpo', '=', 'ti.id')
                        ->leftJoin('cat_colores_cuerpo AS co', 'ce.idColoresCuerpo', '=', 'co.id')
                        ->where('idPersonaDesaparecida', $idDesaparecido)
                        ->select('ce.id as idParteCuerpo','pa.id as idPadre', 'pa.nombre as partep','cu.id as idParteh' ,'cu.nombre as parteh',
                        'ta.nombre as tamano', 'ti.nombre as tipo', 'co.nombre as color', 'ce.posicion', 'ce.observaciones', 'ce.imagen', 'cu.reglas', 'ce.otroTipo', 'ce.otroColor')
                        ->get();
        
        $dataPartes = array();
        $partePadre = null;
        
        //dd($activasPartes);
         foreach ($partesSeleccionadas as $parte) {
            //dd($parte->idParteh);
            $otras=$this->get_otros($parte->idParteh, $idDesaparecido, $parte->idParteCuerpo);
            $modificaciones = $this->get_modificaciones($parte->idParteCuerpo);
            $modifi = array();
            foreach ($modificaciones as $value) {
                if($value->nombre == 'OTRO'){
                    $modifi[] = $otras[0]->otraModificacion;
                }else{
                    $modifi[] = $value->nombre;    
                }
                
            }
            
            //dd($otras);
            $particularidades = $this->get_particularidades($parte->idParteCuerpo);
            $parti = array();
            foreach ($particularidades as $value) {               
                if($value->nombre == 'OTRO'){
                    $parti[] = $otras[0]->otraParticularidad;
                }else{
                    $parti[] = $value->nombre;    
                }
                
            }
            $parte->modificaciones = $modifi;
            $parte->particularidades = $parti;
           

            if ($parte->idPadre != $partePadre) {
                $dataPartes[$parte->partep] = array('idPadre' => $parte->idPadre);
                $partePadre = $parte->idPadre;
            }
            $dataPartes[$parte->partep]['hijos'][] = $parte;
            //$dataPartes[$parte->partep]['otras'][] = json_encode($otras); 
        }
        //dd($dataPartes);
        $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
        $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');

        if ($desaparecido->estatura != null) {
            $aux = true;
        }else{
            $aux = false;
        }

        //consulta cabello
        $cedulaPartesCuerpo = CedulaPartesCuerpo::where('idPersonaDesaparecida',$idDesaparecido)->get();
        $showCabello = false;
        //dd($dataPartes);
        return view('descripcionfisica.form_descripcion_fisica',
            [
                'desaparecido' => $desaparecido,
                'complexiones' => $complexiones,
                'coloresPiel' => $coloresPiel,
                'todasPartes' => $todasPartes,
                'dataPartes' => $dataPartes,
                'aux' => $aux,
                'showCabello' => $showCabello,
                'partesSeleccionadas' => $partesSeleccionadas
            ]);
    }

    public function get_modificaciones($idParteCuerpo)
    {
        $modificaciones = \DB::table('pivot_submodi_cuerpo AS pi')
                            ->leftJoin('cat_modificaciones_cuerpo AS mo', 'pi.idModificaciones', '=', 'mo.id')
                            ->where('pi.idCedulaPartesCuerpo', $idParteCuerpo)
                            ->select('mo.nombre')
                            ->get();

        return $modificaciones;
    }

    public function get_particularidades($idParteCuerpo)
    {
        $particularidades = \DB::table('pivot_subparti_cuerpo AS pi')
                            ->leftJoin('cat_particularidades_cuerpo AS mo', 'pi.idParticularidades', '=', 'mo.id')
                            ->where('pi.idCedulaPartesCuerpo', $idParteCuerpo)
                            ->select('mo.nombre')
                            ->get();

        return $particularidades;
    }

    public function get_otros($idParteCuerpo, $idPersonaDesaparecida, $idCedulaPartesCuerpo)
    {
        $otros = \DB::table('cedula_partes_cuerpo AS ce')
                            ->where('ce.idPartesCuerpo', $idParteCuerpo)
                            ->where('ce.idPersonaDesaparecida', $idPersonaDesaparecida)
                            ->where('ce.id', $idCedulaPartesCuerpo)
                            ->select('ce.otraParticularidad','ce.otraModificacion','ce.otroTipo','ce.otroColor')
                            ->get();

        return $otros;
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

}
