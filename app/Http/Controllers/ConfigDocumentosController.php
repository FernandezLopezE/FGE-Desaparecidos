<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PivotOficioDependenciaEncargado;
use DB;

class ConfigDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficios = \App\Models\CatOficios::all()->pluck('nombre','id');
        $dependencias = \App\Models\CatDependencias::all()->pluck('nombre','id');
        $encargados = DB::table('cat_encargado AS ce')->select(\DB::raw('CONCAT(ce.nombres," ", ce.primerAp," ",ce.segundoAp) AS nombrecompleto'),'id')->pluck('nombrecompleto','id');
        
        return view('configuraciones.configDocumentos',[
                        'oficios' => $oficios,
                        'dependencias' => $dependencias,
                        'encargados' => $encargados,
                    ]);
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
        $pivoteOficios = new PivotOficioDependenciaEncargado();

        $pivoteOficios->idOficio = $request['oficio'];
        $pivoteOficios->idDependencia = $request['depen'];
        $pivoteOficios->idEncargado = $request['encar'];

        $pivoteOficios->save();

        return response()->json($pivoteOficios);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
