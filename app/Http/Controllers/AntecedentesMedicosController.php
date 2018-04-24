<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desaparecido;

class AntecedentesMedicosController extends Controller
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
    public function show($idExtraviado)
    {
        //
        $desaparecido = Desaparecido::find($idExtraviado);

        $enfermedades = \App\Models\CatEnfermedades::all()->pluck('nombre','id');
        $iQuirurgicas = \App\Models\CatIntervencionesQuirurgicas::all()->pluck('nombre','id');
        $adicciones = \App\Models\CatAdicciones::all()->pluck('nombre','id');
        $implantes = \App\Models\CatImplantes::all()->pluck('nombre','id');


        return view('antecedentesmedicos.form_antecedentes_medicos',
            [
                'desaparecido' => $desaparecido,
                'enfermedades' => $enfermedades,
                'iQuirurgicas' => $iQuirurgicas,
                'adicciones' => $adicciones,
                'implantes' => $implantes,
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
}
