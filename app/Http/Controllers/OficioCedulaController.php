<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OficioCedulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \DB::table('desaparecidos_cedula_investigacion AS dci')
                    ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                    ->join('persona AS person','person.id','=','dperson.idPersona')
                    ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                    ->leftJoin('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                    ->leftJoin('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                    ->leftJoin('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                    ->leftJoin('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                    ->leftJoin('cat_parentesco AS parentesco', 'dperson.idParentesco', '=', 'parentesco.id')
                    ->leftJoin('cat_documento_identidad AS docIden', 'dperson.idDocumentoIdentidad', '=', 'docIden.id')
                    ->select(\DB::raw('CONCAT(dci.entrevistadorNombres," ", dci.entrevistadorPrimerAp," ",dci.entrevistadorSegundoAp) AS entrevistador'),
                        'dci.entrevistadorCargo AS cargo',
                        'dci.carpeta AS numCarpeta',
                        \DB::raw('DATE(dci.created_at) AS fechaRegistro'),
                        'dci.desaparicionObservaciones as observacionDesa',
                        \DB::raw('CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS informante'),
                        'dperson.tipoPersona AS tipoPersona',
                        'parentesco.nombre AS parentesco',
                        'dperson.edadExtravio AS edadExtravio',
                        'dperson.fotoDesaparecido AS foto',
                        'domicilios.calle AS calle',
                        'domicilios.numExterno AS numeroExt',
                        'domicilios.numInterno AS numeroInt',
                        'colonia.nombre AS colonia',
                        'localidad.nombre AS localidad',
                        'municipio.nombre AS municipio',
                        'estado.nombre AS estado',
                        'docIden.nombre AS documentoI'                            
                        )
                    ->get();

        return response()->json( $this->json_oficio1());
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
        //
        /*$datos = \App\Models\Desaparecido::where('idCedula', $id)
                                            ->where('tipoPersona', 'DESAPARECIDA')
                                            ->limit(1)
                                            ->get();
        
        $desaparecido = \App\Models\Desaparecido::find($datos[0]->id);
        //dd($desaparecido->partescuerpo->toArray());
        $view = view('plantillas.cedulaMediaAfiliacion.oficioGeneral', compact('desaparecido'))->render();
        $pdf =\App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);
        
        
        $pdf->setPaper('carta');*/
        return view('plantillas.cedulaMediaAfiliacion.oficioGeneral');
        //return $pdf->stream('formato_'.time().'.pdf');
    }


    public function json_oficio1(){
        $doc="";
        $resolucion ="NO";
        $fotoExtra = "NO";
        $carpeta = "SI";
        $actaNac = "SI";
        $informante = \DB::table('desaparecidos_cedula_investigacion AS dci')
                    ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                    ->join('persona AS person','person.id','=','dperson.idPersona')
                    ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                    ->leftJoin('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                    ->leftJoin('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                    ->leftJoin('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                    ->leftJoin('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                    ->leftJoin('cat_parentesco AS parentesco', 'dperson.idParentesco', '=', 'parentesco.id')
                    ->leftJoin('cat_documento_identidad AS docIden', 'dperson.idDocumentoIdentidad', '=', 'docIden.id')
                    ->select(\DB::raw('CONCAT(dci.entrevistadorNombres," ", dci.entrevistadorPrimerAp," ",dci.entrevistadorSegundoAp) AS entrevistador'),
                        'dci.entrevistadorCargo AS cargo',
                        'dci.carpeta AS numCarpeta',
                        \DB::raw('DATE(dci.created_at) AS fechaRegistro'),
                        'dci.desaparicionObservaciones as observacionDesa',
                        \DB::raw('CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS informante'),
                        'dperson.tipoPersona AS tipoPersona',
                        'parentesco.nombre AS parentesco',
                        'person.sexo AS genero',
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion'),
                        'docIden.nombre AS documentoI'                            
                        )
                    ->where('dperson.idCedula',$id)
                    ->where('dperson.tipoPersona','INFORMANTE')
                    ->limit(1)
                    ->get();


        $desaparecido = \DB::table('desaparecidos_cedula_investigacion AS dci')
                    ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                    ->join('persona AS person','person.id','=','dperson.idPersona')
                    ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                    ->leftJoin('cat_documento_identidad AS docIden', 'dperson.idDocumentoIdentidad', '=', 'docIden.id')
                    ->select(
                        'dci.carpeta AS numCarpeta',
                        \DB::raw('DATE_FORMAT(dci.created_at," %d DE %M DE %Y") AS fechaRegistro'),
                        'dci.desaparicionObservaciones as observacionDesa',
                        \DB::raw('CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS informante'),
                        'dperson.tipoPersona AS tipoPersona',
                        'dperson.edadExtravio AS edadExtravio',
                        'dperson.fotoDesaparecido AS foto',
                        'docIden.nombre AS documentoI',
                        \DB::raw('TIME(dci.created_at) AS horaReg')                            
                        )
                    ->where('dperson.idCedula',$id)
                    ->where('dperson.tipoPersona','DESAPARECIDA')
                    ->limit(1)
                    ->get();

                    //dd($desaparecido);


                    if($informante[0]->documentoI == null || $informante[0]->documentoI == 'NO ESPECIFICADO' ){
                        $doc = 'NO';
                    }else{
                        $doc = 'SÍ';
                    }
                    if($desaparecido[0]->documentoI == 'ACTA DE NACIMIENTO'){
                        $actaNac = 'SÍ';
                    }else{
                        $actaNac = 'NO';
                    }

                    if($desaparecido[0]->foto == null){
                        $fotoExtra = 'NO';
                    }else{
                        $fotoExtra = 'SÍ';
                    }
        //return $informante;
         $data = array(
            'entrevistador' => $informante[0]->entrevistador,
            'cargo' => $informante[0]->cargo,
            'informante' => $informante[0]->informante,
            'direccion' => $informante[0]->direccion,
            'parentesco' => $informante[0]->parentesco,
            'docIdenti' => $doc,
            'actaNac' => $actaNac,
            'carpeta' => $carpeta,
            'fotoExtra' => $fotoExtra,
            'resolucion' => $resolucion,
            'fechaReg' => $desaparecido[0]->fechaRegistro,
            'edadExtra' => strtoupper($desaparecido[0]->edadExtravio),
            'hora' => $desaparecido[0]->horaReg
            );
            return response()->json($data);
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
