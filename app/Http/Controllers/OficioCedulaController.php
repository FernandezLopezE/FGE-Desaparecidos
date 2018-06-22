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
        /*$data = \DB::table('desaparecidos_cedula_investigacion AS dci')
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

        return response()->json( $this->json_oficio1());*/
        $data = $this->json_oficio1(1);

        return view('plantillas.cedulaMediaAfiliacion.solicitud',['data' => $data]);
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
        $datos = \App\Models\Desaparecido::where('idCedula', $id)
                                            ->where('tipoPersona', 'DESAPARECIDA')
                                            ->limit(1)
                                            ->get();
        
        $desaparecido = \App\Models\Desaparecido::find($datos[0]->id);
        $data = $this->json_oficio1($id);
        $oficio2 = $this->json_oficio2($id);
        $oficio3 = $this->json_oficio3($id);
        //dd($desaparecido->partescuerpo->toArray());
        $view = view('plantillas.cedulaMediaAfiliacion.oficioGeneral', compact('desaparecido','data','oficio2','oficio3'))->render();
        $pdf =\App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);
        
        
        $pdf->setPaper('carta');
        //return view('plantillas.cedulaMediaAfiliacion.oficioGeneral');
        return $pdf->stream('formato_'.time().'.pdf',array('Attachment'=>0));
    }


    public function json_oficio1($id){
        $doc="";
        $resolucion ="NO";
        $fotoExtra = "NO";
        $carpeta = "SI";
        $actaNac = "SI";
        \DB::statement('SET lc_time_names = "es_ES"');
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
                        \DB::raw('UPPER(dperson.edadExtravio) AS edadExtravio'),
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
            'fechaReg' => strtoupper($desaparecido[0]->fechaRegistro),
            'edadExtra' => $desaparecido[0]->edadExtravio,
            'hora' => $desaparecido[0]->horaReg
            );
            //return response()->json($data);
         return $data;
    }

    public function json_oficio2($id){
        \DB::statement('SET lc_time_names = "es_ES"');
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
                    ->leftJoin('cat_estado_civil AS edoCivil','dperson.idEdocivil','=','edoCivil.id')
                    ->select(
                        'dci.desaparicionObservaciones as observacionDesa',
                        \DB::raw('CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS informante'),
                        'dperson.tipoPersona AS tipoPersona',
                        'parentesco.nombre AS parentesco',
                        'person.sexo AS genero',
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion'),
                        'edoCivil.nombre AS estadoC',
                        \DB::raw('UPPER(dperson.edadExtravio) AS edadExtravio'),
                        'docIden.nombre AS documentoI'                            
                        )
                    ->where('dperson.idCedula',$id)
                    ->where('dperson.tipoPersona','INFORMANTE')
                    ->limit(1)
                    ->get();

        $desaparecido = \DB::table('desaparecidos_cedula_investigacion AS dci')
                    ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                    ->leftJoin('persona AS person','person.id','=','dperson.idPersona')
                    ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                    ->leftJoin('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                    ->leftJoin('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                    ->leftJoin('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                    ->leftJoin('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                    ->leftJoin('cat_parentesco AS parentesco', 'dperson.idParentesco', '=', 'parentesco.id')
                    ->leftJoin('cat_documento_identidad AS docIden', 'dperson.idDocumentoIdentidad', '=', 'docIden.id')
                    ->leftJoin('cat_estado_civil AS edoCivil','dperson.idEdocivil','=','edoCivil.id')
                    ->leftJoin('cat_escolaridad AS escolaridad','dperson.idEscolaridad','=','escolaridad.id')
                    ->leftJoin('cat_ocupacion AS ocupacion','dperson.idOcupacion','=','ocupacion.id')
                    ->select(\DB::raw('CONCAT(dci.entrevistadorNombres," ", dci.entrevistadorPrimerAp," ",dci.entrevistadorSegundoAp) AS entrevistador'),
                        'dci.carpeta AS numCarpeta',
                        \DB::raw('DATE_FORMAT(dci.created_at," %d DE %M DE %Y") AS fechaRegistro'),
                        'dci.desaparicionObservaciones as observacionDesa',
                        \DB::raw('CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS desaparecido'),
                        'dperson.tipoPersona AS tipoPersona',
                        \DB::raw('UPPER(dperson.edadExtravio) AS edadExtravio'),
                        'dperson.fotoDesaparecido AS foto',
                        'docIden.nombre AS documentoI',
                        'person.sexo AS genero',
                        'edoCivil.nombre AS estadoC',
                        'escolaridad.nombre AS escolari',
                        'ocupacion.nombre AS ocupa',
                        'dperson.id AS idDesa',
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion'),
                        \DB::raw('TIME(dci.created_at) AS horaReg')                            
                        )
                    ->where('dperson.idCedula',$id)
                    ->where('dperson.tipoPersona','DESAPARECIDA')
                    ->where('domicilios.tipoDireccion','!=','LUGAR DE AVISTAMIENTO')
                    ->limit(1)
                    ->get();


        $lugar = \DB::table('desaparecidos_domicilios AS domicilios')
                ->Join('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                ->Join('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                ->Join('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                ->Join('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                ->select(
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion')                       )
                    ->where('domicilios.idDesaparecido',$desaparecido[0]->idDesa)
                    ->where('domicilios.tipoDireccion','LUGAR DE AVISTAMIENTO')
                    
                    ->get();
        //dd($lugar);
        if($desaparecido[0]->genero == 'H'){
            $desaparecido[0]->genero = 'MASCULINO';
        }else{
            $desaparecido[0]->genero = 'FEMENINO';
        }
        if($informante[0]->genero == 'H'){
            $informante[0]->genero = 'MASCULINO';
        }else{
            $informante[0]->genero = 'FEMENINO';
        }
        //return $informante;
         $data = array(
            'nombreInfo' => $informante[0]->informante,
            'edadInfo' => $informante[0]->edadExtravio,
            'generoInfo' => $informante[0]->genero,
            'estadoCivilInfo' => $informante[0]->estadoC,
            'parentescoInfo' => $informante[0]->parentesco,
            'domicilioInfo' => $informante[0]->direccion,
            'observacionDesa' => $informante[0]->observacionDesa,
            'fechaHora' => strtoupper($desaparecido[0]->fechaRegistro." A LAS ".$desaparecido[0]->horaReg." HORAS"),
            'carpeta' => $desaparecido[0]->numCarpeta,
            'nombreDesa' => $desaparecido[0]->desaparecido,
            'edadDesa' => $desaparecido[0]->edadExtravio,
            'generoDesa' => $desaparecido[0]->genero,
            'estadoCivilDesa' => $desaparecido[0]->estadoC,
            'domicilioDesa' => $desaparecido[0]->direccion,
            'escolaridadDesa' => $desaparecido[0]->escolari,
            'ocupacionDesa' => $desaparecido[0]->ocupa, 
            'lugarExtravio' => $lugar[0]->direccion,
            'entrevistador' => $desaparecido[0]->entrevistador
            );
         //dd($data);
            //return response()->json($data);
         return $data;
    }

    public function json_oficio3($id){
        \DB::statement('SET lc_time_names = "es_ES"');
        $desaparecido = \DB::table('desaparecidos_cedula_investigacion AS dci')
                    ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                    ->leftJoin('persona AS person','person.id','=','dperson.idPersona')
                    ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                    ->leftJoin('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                    ->leftJoin('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                    ->leftJoin('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                    ->leftJoin('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                    ->leftJoin('cat_parentesco AS parentesco', 'dperson.idParentesco', '=', 'parentesco.id')
                    ->leftJoin('cat_documento_identidad AS docIden', 'dperson.idDocumentoIdentidad', '=', 'docIden.id')
                    ->leftJoin('cat_estado_civil AS edoCivil','dperson.idEdocivil','=','edoCivil.id')
                    ->leftJoin('cat_escolaridad AS escolaridad','dperson.idEscolaridad','=','escolaridad.id')
                    ->leftJoin('cat_ocupacion AS ocupacion','dperson.idOcupacion','=','ocupacion.id')
                    ->leftJoin('cat_color_piel AS colorP','dperson.idColorPiel','=','colorP.id')
                    ->select('dci.desaparicionObservaciones as observacionDesa',
                        'dci.carpeta AS numCarpeta',
                        \DB::raw('DATE_FORMAT(dci.created_at," %d DE %M DE %Y") AS fechaRegistro'),
                        'dci.desaparicionObservaciones as observacionDesa',
                        \DB::raw('CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS desaparecido'),
                        'dperson.tipoPersona AS tipoPersona',
                        \DB::raw('UPPER(dperson.edadExtravio) AS edadExtravio'),
                        'dperson.fotoDesaparecido AS foto',
                        'docIden.nombre AS documentoI',
                        'person.sexo AS genero',
                        'edoCivil.nombre AS estadoC',
                        'escolaridad.nombre AS escolari',
                        'ocupacion.nombre AS ocupa',
                        'dperson.id AS idDesa',
                        'dperson.estatura AS estatura',
                        'colorP.nombre AS colorPiel',
                        'dperson.apodo AS apodo',
                        \DB::raw('DATE_FORMAT(person.fechaNacimiento," %d DE %M DE %Y") AS fechaNac'),
                        \DB::raw('DATE_FORMAT(dci.desaparicionFecha," %d DE %M DE %Y") AS fechaExtravio'),
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion'),
                        \DB::raw('CONCAT(dci.entrevistadorNombres," ", dci.entrevistadorPrimerAp," ",dci.entrevistadorSegundoAp) AS entrevistador'),
                        \DB::raw('TIME(dci.created_at) AS horaReg')                            
                        )
                    ->where('dperson.idCedula',$id)
                    ->where('dperson.tipoPersona','DESAPARECIDA')
                    ->where('domicilios.tipoDireccion','!=','LUGAR DE AVISTAMIENTO')
                    ->limit(1)
                    ->get();

        $lugar = \DB::table('desaparecidos_cedula_investigacion AS dci')
                ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                ->join('persona AS person','person.id','=','dperson.idPersona')
                ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                ->leftJoin('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                ->leftJoin('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                ->leftJoin('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                ->leftJoin('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                ->select(
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion')                       )
                    ->where('domicilios.idDesaparecido',$desaparecido[0]->idDesa)
                    ->where('domicilios.tipoDireccion','LUGAR DE AVISTAMIENTO')
                    ->limit(1)
                    ->get();
        $fotoExtra = "NO";
        if($desaparecido[0]->foto == null){
            $fotoExtra = 'NO';
        }else{
            $fotoExtra = 'SÍ';
        }
        if($desaparecido[0]->genero == 'H'){
            $desaparecido[0]->genero = 'MASCULINO';
        }else{
            $desaparecido[0]->genero = 'FEMENINO';
        }

        $data = array(
            'nombreDesa' => $desaparecido[0]->desaparecido,
            'edadDesa' => $desaparecido[0]->edadExtravio,
            'generoDesa' => $desaparecido[0]->genero,
            'estadoCivilDesa' => $desaparecido[0]->estadoC,
            'estaturaDesa' => $desaparecido[0]->estatura,
            'colorPiel' => $desaparecido[0]->colorPiel,
            'fechaNacimi' => strtoupper($desaparecido[0]->fechaNac),
            'fotoExtra' => $fotoExtra,
            'observa' => $desaparecido[0]->observacionDesa, 
            'lugarExtravio' => $lugar[0]->direccion,
            'apodo' => $desaparecido[0]->apodo,
            'entrevistador' => $desaparecido[0]->entrevistador,
            'fechaDesaparicion' => $desaparecido[0]->fechaExtravio
        );

         return $data;
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
