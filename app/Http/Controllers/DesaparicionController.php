<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaparicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
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
    public function show($id)
    {
         $desaparecido = \App\Models\Desaparecido::find($id);

            //esto es para la vista de historial dental y radiografias
        
        /*$meses = array(
            '1' => 'ENERO',
            '2' => 'FEBRERO',
            '3' => 'MARZO',
            '4' => 'ABRIL',
            '5' => 'MAYO',
            '6' => 'JUNIO',
            '7' => 'JULIO',
            '8' => 'AGOSTO',
            '9' => 'SEPTIEMBRE',
            '10' => 'OCTUBRE',
            '11' => 'NOVIEMBRE',
            '12' => 'DICIEMBRE');*/
        $estados            = \App\Models\CatEstado::all()->pluck('nombre','id');
        $municipios         = \App\Models\CatMunicipio::limit(10)->pluck('nombre','id');
        $localidades        = \App\Models\CatLocalidad::limit(10)->pluck('nombre','id');
        $colonias           = \App\Models\CatColonia::limit(10)->pluck('nombre','id');
        $codigos            = \App\Models\CatColonia::limit(10)->pluck('codigoPostal','id');
        $parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
        return view('desaparicion.index',[
            'desaparecido' =>   $desaparecido,
            'estados'      =>   $estados,
            'municipios'   =>   $municipios,
            'localidades'  =>   $localidades,
            'colonias'     =>   $colonias,
            'codigos'      =>   $codigos,
            'parentescos' => $parentescos,
            ]);     
    }    }

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
