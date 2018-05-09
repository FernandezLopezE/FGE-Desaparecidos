<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familiar;
use App\Http\Requests\FamiliarRequest;

class FamiliarController extends Controller
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
    public function store(FamiliarRequest $request)
    {        
        $familiar = Familiar::create([
            'nombres'               => $request->input('nombres'),
            'primerAp'              => $request->input('primerAp'),
            'segundoAp'             => $request->input('segundoAp'),
            'fechaNacimiento'       => $request->input('fechaNacimiento'),
            'edad'                  => $request->input('edad'),
            'idParentesco'          => $request->input('idParentesco'),
            'idDesaparecido'        => $request->input('idDesaparecido'),
        ]);

        $estatus = ($familiar) ? true : false ;
        return response()->json($estatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desaparecido = \App\Models\Desaparecido::find($id);
        $parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
        
        return view('familiares.index', compact('desaparecido', 'parentescos'));
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
    public function update(FamiliarRequest $request, $id)
    {
        
        $familiar = Familiar::find($id)->update([
            'nombres'               => $request->input('nombres'),
            'primerAp'              => $request->input('primerAp'),
            'segundoAp'             => $request->input('segundoAp'),
            'fechaNacimiento'       => $request->input('fechaNacimiento'),
            'edad'                  => $request->input('edad'),
            'idParentesco'          => $request->input('idParentesco'),
        ]);

        return response()->json($familiar);
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
