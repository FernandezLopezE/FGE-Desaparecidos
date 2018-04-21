<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desaparecido;
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
    public function store(Request $request)
    {
        //
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

        $partesCuerpo = \App\Models\CatPartesCuerpo::all()->pluck('nombre','id');
        $complexiones = \App\Models\CatComplexion::all()->pluck('nombre','id');
        $coloresPiel = \App\Models\CatColorPiel::all()->pluck('nombre','id');
        $subParticularidades = \App\Models\CatSubParticularidades::all()->pluck('nombre','id');
        $subModificaciones = \App\Models\CatSubModificaciones::all()->pluck('nombre','id');


        return view('descripcionfisica.form_descripcion_fisica',
            [
                'desaparecido' => $desaparecido,
                'complexiones' => $complexiones,
                'coloresPiel' => $coloresPiel,
                'particularidades' => $subParticularidades,
                'modificaciones' => $subModificaciones,
                'partesCuerpo' => $partesCuerpo,
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

    public function getParticularidades($idParteCuepo){
         $particularidades = \DB::table('cat_partes_cuerpo as cpartes')
                            ->join('cat_particularidades_cuerpo as cparti','cpartes.id','=','cparti.idPartesCuerpo' )
                            ->join('cat_sub_particularidades as csubp','cparti.id','=','csubp.idParticularidadesCuerpo')
                            ->select('csubp.nombre as nombre','csubp.id as id')
                            ->where('cparti.idPartesCuerpo',$idParteCuepo)
                            ->get();
            return response()->json($particularidades);
    }

    public function getModificaciones($idParteCuepo){
         $modificaciones = \DB::table('cat_partes_cuerpo as cpartes')
                            ->join('cat_modificaciones_cuerpo as cmodi','cpartes.id','=','cmodi.idPartesCuerpo' )
                            ->join('cat_sub_modificaciones as csubm','cmodi.id','=','csubm.idModificacionesCuerpo')
                            ->select('csubm.nombre as nombre','csubm.id as id')
                            ->where('cmodi.idPartesCuerpo',$idParteCuepo)
                            ->get();
            return response()->json($modificaciones);
    }
}
