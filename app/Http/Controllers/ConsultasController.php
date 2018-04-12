<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultasController extends Controller
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

    public function jsonInformantes(Request $request, $idCedula)
    {
        $informantes =  \DB::table('desaparecidos_personas')
            ->join('persona', 'desaparecidos_personas.idPersona', '=', 'persona.id')
            ->where('idCedula', $idCedula)
            ->get();

        return response()->json($informantes);

    }

}
