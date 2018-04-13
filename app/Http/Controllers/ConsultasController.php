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
            ->join('desaparecidos_domicilios', 'desaparecidos_domicilios.idDesaparecido', '=', 'desaparecidos_personas.id')
            ->where('idCedula', $idCedula)
            ->where('tipoPersona','INFORMANTE')
            ->get();

        return response()->json($informantes);

    }

    public function jsonParentescos(Request $request)
    {
        $parentescos = \App\Models\CatParentesco::all();

        return response()->json($parentescos);
    }

    public function jsonNacionalidades(Request $request)
    {
        $nacionalidades = \App\Models\CatNacionalidad::all();

        return response()->json($nacionalidades);
    }

    public function jsonDocumentosIdentidad(Request $request)
    {
        $documentos = \App\Models\CatDocumento::all();

        return response()->json($documentos);
    }

    public function jsonTiposDomicilios(Request $request)
    {
        $domicilios[] = array('id' => 'PERSONAL', 'nombre' => 'PERSONAL');
        $domicilios[] = array('id' => 'TRABAJO', 'nombre' => 'TRABAJO');
        $domicilios[] = array('id' => 'FAMILIAR', 'nombre' => 'FAMILIAR');

        return response()->json($domicilios);
    }

    public function jsonEstados(Request $request)
    {
        $estados = \App\Models\CatEstado::all();

        return response()->json($estados);
    }

    public function jsonTiposTelefonos(Request $request)
    {
        $telefonos[] = array('id' => 'CASA', 'nombre' => 'CASA');
        $telefonos[] = array('id' => 'TRABAJO', 'nombre' => 'TRABAJO');
        $telefonos[] = array('id' => 'PERSONAL', 'nombre' => 'PERSONAL');

        return response()->json($telefonos);        
    }

    public function jsonLadas(Request $request)
    {
        $ladas = \App\Models\CatNacionalidad::all();

        return response()->json($ladas);
        
    }
}
