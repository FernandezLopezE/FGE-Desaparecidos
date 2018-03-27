<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desaparecido;

class DesaparecidoController extends Controller
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
        $identificacion = array(
            'ife' => 'IFE',
            'cartillaSm' => 'Cartilla SM',
            'licencia' => 'Licencia',
            'tarjeton' => 'Tarjetón',
            'cartilla' => 'Cartilla',
            'pasaporte' => 'Pasaporte',
            'otro' => 'Otro(especifique)'
        );

        $persona= Desaparecido::find('1');

        return view('documentos.documento',['identificacion' => $identificacion, 'persona' => $persona]);
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
        $identificacion = new Documento();

        $identificacion->identificacion = $request->input('identificacion');
        $identificacion->otraIdentificacion = $request->input('otroId');
        $identificacion->noIdentificacion = $request->input('noIdentificacion');
        $identificacion->idPersonaDesaparecida = $request->input('idPesona');

        $identificacion->save();


        return ("Hecho");
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
        $persona = Desaparecido::find($id);

        $documento = Documento::where('idPersonaDesaparecida','=',$persona->id);

        return view('documentos.edit',['documento' => $documento]);
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
        $identificacion =  Documento::find($id);

        $identificacion->identificacion = $request->input('identificacion');
        $identificacion->otraIdentificacion = $request->input('otroId');
        $identificacion->noIdentificacion = $request->input('noIdentificacion');
        $identificacion->idPersonaDesaparecida = $request->input('idPesona');

        $identificacion->save();

        return ('Update Hecho');

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
