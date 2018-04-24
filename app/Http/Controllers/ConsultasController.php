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

    public function jsonAntecedentes(Request $request, $idDesaparecido)
    {
        $desaparecidos = \App\Models\Antecedente::where('idDesaparecido', $idDesaparecido)->get();

        return response()->json($desaparecidos);
    }

    public function jsonFamiliares(Request $request, $idDesaparecido)
    {
        $familiares = \App\Models\Familiar::where('idDesaparecido', $idDesaparecido)->get();

        return response()->json($familiares);

    }

    public function jsonContactosPersona(Request $request, $idDesaparecido)
    {
        $contacto = \App\Models\Contacto::where('idDesaparecido', $idDesaparecido)->get();

        return response()->json($contacto);

    }
    public function jsonDomiciliosPersona(Request $request, $idDesaparecido)
    {
        $domicilios = \App\Models\Domicilio::where('idDesaparecido', $idDesaparecido)->get();

        return response()->json($domicilios);

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

    public function jsonMunicipios(Request $request, $idEstado)
    {
        $municipios = \App\Models\CatMunicipio::where('idEstado',$idEstado)->get();

        return response()->json($municipios);
    }

    public function jsonLocalidades(Request $request, $idMunicipio)
    {
        $localidades = \App\Models\CatLocalidad::where('idMunicipio',$idMunicipio)->get();

        return response()->json($localidades);
    }

    public function jsonColonias(Request $request, $idMunicipio)
    {
        $colonias = \App\Models\CatColonia::where('idMunicipio',$idMunicipio)->get();

        return response()->json($colonias);
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

  public function jsonPrendas(Request $request, $idCedula)
    {
        $prendas =  \DB::table('desaparecidos_prendas AS dp')
                ->join('cat_colores AS cc', 'dp.color', '=', 'cc.id')
                ->select('dp.id as id',
                        'dp.tipo as tipo',
                        'dp.material as material',
                        'dp.dibujoBordadoFranja as dibujo',
                        'dp.color as pColor',
                        'dp.otroColor as otroC',
                        'dp.marcaOrigen as marca',
                        'dp.talla as talla',
                        'cc.nombre as color')
                ->where('idCedula', $idCedula)
                ->get();
            return response()->json($prendas);
    }
    public function jsonCalzado(Request $request, $idCedula)
    {
        $prendas =  \DB::table('desaparecidos_cedula_investigacion AS dc')
                ->join('cat_calzado_tipo AS ct', 'dc.idCalzadotipo', '=', 'ct.id')
                ->join('cat_calzado_marca AS cm', 'dc.idCalzadomarca', '=', 'cm.id')
                ->join('cat_colores AS cc', 'dc.idCalzadocolor', '=', 'cc.id')
                ->select('dc.modeloCalzado as modelo',
                    'dc.calzadoTalla as talla',
                    'dc.idCalzadotipo as cTipo',
                    'dc.otroCalzado as oCalzado',
                    'dc.idCalzadocolor as cColor',
                    'dc.otroColorCalzado as ocCalzado',
                    'dc.idCalzadomarca as cMarca',
                    'dc.otraMarca as oMarca',
                    'dc.calzadoTalla as talla',
                    'ct.nombre as nombretipo',
                    'cm.nombre as nombremarca',
                    'cc.nombre as nombrecolor')
                ->where('dc.id', $idCedula)
                ->get();
            return response()->json($prendas);
    }
}
