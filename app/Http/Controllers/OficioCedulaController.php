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
        //$data = $this->json_oficio1($id);
        /*$oficio2 = $this->json_oficio2($id);
        $oficio3 = $this->json_oficio3($id);
        $oficio4 = $this->json_oficio4($id);*/
        $doc="";
        $resolucion ="NO";
        $fotoExtra = "NO";
        $carpeta = "SI";
        $actaNac = "SI";

        //---Obtener desaparecido---
        $datosDesaparecido = $this->obtenerDatosPersona($id,'DESAPARECIDA');
        //---Obtener informante---
        $datosInformante = $this->obtenerDatosPersona($id,'INFORMANTE');
        //---Obtener domiciolio informante---
        $datosDomicilioInformante = $this->obtenerDireccion($datosInformante[0]->idDesa,'PERSONAL');
        //---Obtener domiciolio desaparecido---
        $datosDomicilioDesaparecido = $this->obtenerDireccion($datosDesaparecido[0]->idDesa,'PERSONAL');
        //---Obtener domiciolio desaparecido---
        $datosDomicilioUltimo = $this->obtenerDireccion($datosDesaparecido[0]->idDesa,'LUGAR DE AVISTAMIENTO');

        $datosCabello = $this->obtenerCabelloOjos($datosDesaparecido[0]->idDesa,2);

        $datosOjo = $this->obtenerCabelloOjos($datosDesaparecido[0]->idDesa,9);

        $dataPartes = $this->obtenerSenasParticulares($datosDesaparecido[0]->idDesa);
        
        //dd($dataPartes);
        if($datosDesaparecido[0]->documentoI == null || $datosDesaparecido[0]->documentoI == 'NO ESPECIFICADO' ){
            $doc = 'NO';
        }else{
            $doc = 'SÍ';
        }
        if($datosDesaparecido[0]->documentoI == 'ACTA DE NACIMIENTO'){
            $actaNac = 'SÍ';
        }else{
            $actaNac = 'NO';
        }

        if($datosDesaparecido[0]->foto == null){
            $fotoExtra = 'NO';
        }else{
            $fotoExtra = 'SÍ';
        }

        if($datosDesaparecido[0]->genero == 'H'){
            $datosDesaparecido[0]->genero = 'MASCULINO';
        }else{
            $datosDesaparecido[0]->genero = 'FEMENINO';
        }
        if($datosInformante[0]->genero == 'H'){
            $datosInformante[0]->genero = 'MASCULINO';
        }else{
            $datosInformante[0]->genero = 'FEMENINO';
        }

        $data = array(
            'entrevistador' => $datosInformante[0]->entrevistador,
            'cargo' => $datosInformante[0]->cargo,
            'informante' => $datosInformante[0]->nombreInformante,
            'edadInfo' => $datosInformante[0]->edadExtravio,
            'generoInfo' => $datosInformante[0]->genero,
            'estadoCivilInfo' => $datosInformante[0]->estadoCivil,
            'domicilioInfo' => $datosDomicilioInformante[0]->direccion ?? "SIN INFORMACIÓN",
            'parentescoInfo' => $datosInformante[0]->parentesco,
            'docIdentiInfo' => $doc,
            'nomDocIdentiInfo' => $datosInformante[0]->documentoI,
            'actaNac' => $actaNac,
            'carpeta' => $carpeta,
            'fotoExtra' => $fotoExtra,
            'resolucion' => $resolucion,
            'fechaReg' => strtoupper($datosDesaparecido[0]->fechaRegistro),
            'edadExtravioDesa' => $datosDesaparecido[0]->edadExtravio,//edad desaparecido
            'hora' => $datosDesaparecido[0]->horaRegistro,
            'numCarpeta' => $datosDesaparecido[0]->numCarpeta,//oficio2
            'fechaHora' => strtoupper($datosDesaparecido[0]->fechaRegistro." A LAS ".$datosDesaparecido[0]->horaRegistro." HORAS"),
            'nombreDesa' => $datosDesaparecido[0]->nombreInformante,
            'generoDesa' => $datosDesaparecido[0]->genero,
            'estadoCivilDesa' => $datosDesaparecido[0]->estadoCivil,
            'domicilioDesa' => $datosDomicilioDesaparecido[0]->direccion ?? "SIN INFORMACIÓN",
            'escolaridadDesa' => $datosDesaparecido[0]->escolaridad,
            'ocupacionDesa' => $datosDesaparecido[0]->ocupacion,
            'lugarExtravio' => $datosDomicilioUltimo[0]->direccion ?? "SIN INFORMACIÓN",
            'observacionDesa' => $datosDesaparecido[0]->observacionDesa,
            'apodoDesa' => $datosDesaparecido[0]->apodo,
            'estaturaDesa' => $datosDesaparecido[0]->estatura,
            'colorPiel' => $datosDesaparecido[0]->colorPiel,
            'fechaNacimiento' => $datosDesaparecido[0]->fechaNacimiento,
            'fechaDesaparicion' => $datosDesaparecido[0]->fechaExtravio,
            'fotoDesaparecido' => $datosDesaparecido[0]->foto,
            'tipoCabello' => $datosCabello[0]->tipo ?? "SIN INFORMACIÓN",
            'colorCabello' => $datosCabello[0]->color ?? "SIN INFORMACIÓN",
            'tipoOjos' => $datosOjo[0]->tamano ?? "SIN INFORMACIÓN",
            'colorOjos' =>$datosOjo[0]->color ?? "SIN INFORMACIÓN"

            );
        //dd($datosDomicilio);
        //dd($desaparecido->partescuerpo->toArray());
        $view = view('plantillas.cedulaMediaAfiliacion.oficioGeneral', compact('desaparecido','data','dataPartes','oficio3','oficio4'))->render();
        $pdf =\App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);
        
        
        $pdf->setPaper('carta');
        //return view('plantillas.cedulaMediaAfiliacion.oficioGeneral');
        return $pdf->stream('formato_'.time().'.pdf',array('Attachment'=>0));
    }


    /*public function json_oficio1($id){
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
         //dd($data);
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
                    //dd($desaparecido);

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

    public function json_oficio4($id){
        $desaparecido = \DB::table('desaparecidos_cedula_investigacion AS dci')
                    ->join('desaparecidos_personas AS dperson','dci.id','=','dperson.idCedula')
                    ->join('persona AS person','person.id','=','dperson.idPersona')
                    ->leftJoin('desaparecidos_domicilios AS domicilios', 'dperson.id', '=', 'domicilios.idDesaparecido')
                    ->leftJoin('cat_documento_identidad AS docIden', 'dperson.idDocumentoIdentidad', '=', 'docIden.id')
                    ->leftJoin('cat_estado_civil AS edoCivil','dperson.idEdocivil','=','edoCivil.id')
                    ->select(
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
                        \DB::raw('CONCAT(dci.entrevistadorNombres," ", dci.entrevistadorPrimerAp," ",dci.entrevistadorSegundoAp) AS entrevistador'),
                        \DB::raw('TIME(dci.created_at) AS horaReg')                            
                        )
                    ->where('dperson.idCedula',$id)
                    ->where('dperson.tipoPersona','DESAPARECIDA')
                    ->limit(1)
                    ->get();
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
            'fotoExtra' => $desaparecido[0]->foto,
            'observa' => $desaparecido[0]->observacionDesa, 
            'entrevistador' => $desaparecido[0]->entrevistador
        );

         return $data;

    } */
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

    public function obtenerDatosPersona($idCedula, $tipoPersona){

        \DB::statement('SET lc_time_names = "es_ES"');
        $desaparecido = \DB::table('desaparecidos_cedula_investigacion AS dci')
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
                    ->leftJoin('cat_escolaridad AS escolaridad','dperson.idEscolaridad','=','escolaridad.id')
                    ->leftJoin('cat_ocupacion AS ocupacion','dperson.idOcupacion','=','ocupacion.id')
                    ->leftJoin('cat_color_piel AS colorP','dperson.idColorPiel','=','colorP.id')
                    ->selectRaw('CONCAT(dci.entrevistadorNombres," ", dci.entrevistadorPrimerAp," ",dci.entrevistadorSegundoAp) AS entrevistador,
                                dci.entrevistadorCargo AS cargo,
                                dci.carpeta AS numCarpeta,
                                DATE_FORMAT(dci.created_at," %d DE %M DE %Y") AS fechaRegistro,
                                TIME(dci.created_at) AS horaRegistro,
                                dci.desaparicionObservaciones as observacionDesa,
                                CONCAT(person.nombres," ",person.primerAp," ",person.segundoAp) AS nombreInformante,
                                dperson.tipoPersona AS tipoPersona,
                                parentesco.nombre AS parentesco,
                                UPPER(dperson.edadExtravio) AS edadExtravio,
                                dperson.fotoDesaparecido AS foto,
                                CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","COLONIA ",colonia.nombre,", LOCALIDAD ",localidad.nombre,", MUNICIPIO DE ",municipio.nombre,", ",estado.nombre) AS direccion,
                                docIden.nombre AS documentoI,
                                edoCivil.nombre AS estadoCivil,
                                person.sexo AS genero,
                                escolaridad.nombre AS escolaridad,
                                ocupacion.nombre AS ocupacion,
                                dperson.id AS idDesa,
                                dperson.estatura AS estatura,
                                colorP.nombre AS colorPiel,
                                dperson.apodo AS apodo,
                                DATE_FORMAT(person.fechaNacimiento," %d DE %M DE %Y") AS fechaNacimiento,
                                DATE_FORMAT(dci.desaparicionFecha," %d DE %M DE %Y") AS fechaExtravio')
                    ->where('dperson.idCedula',$idCedula)
                    ->where('dperson.tipoPersona',$tipoPersona)
                    ->get();

        return $desaparecido;
    }

    public function obtenerDireccion($idPersona, $tipoDireccion){

        $lugar = \DB::table('desaparecidos_domicilios AS domicilios')
                ->Join('cat_colonia AS colonia', 'domicilios.idColonia', '=', 'colonia.id')
                ->Join('cat_localidad AS localidad', 'domicilios.idLocalidad', '=', 'localidad.id')
                ->Join('cat_municipio AS municipio', 'domicilios.idMunicipio', '=', 'municipio.id')
                ->Join('cat_estado AS estado', 'domicilios.idEstado', '=', 'estado.id')
                ->select(
                        \DB::raw('CONCAT(domicilios.calle,", #",domicilios.numExterno,", ","EN LA COLONIA ",colonia.nombre,", DE LA LOCALIDAD ",localidad.nombre,", EN EL MUNICIPIO DE ",municipio.nombre,", ",estado.nombre,", ","CON CÓDIGO POSTAL ",colonia.codigoPostal) AS direccion'))
                    ->where('domicilios.idDesaparecido',$idPersona)
                    ->where('domicilios.tipoDireccion',$tipoDireccion)
                    
                    ->get();

        return $lugar;

    }

    public function obtenerCabelloOjos($idDesaparecido,$idParteCuerpo){
        $parte = \DB::table('cedula_partes_cuerpo AS cpc')
                ->Join('cat_partes_cuerpo AS partesC', 'cpc.idPartesCuerpo', '=', 'partesC.id')
                ->leftJoin('cat_tamano_cuerpo AS taC', 'cpc.idTamanoCuerpo', '=', 'taC.id')
                ->leftJoin('cat_tipos_cuerpo AS tiC', 'cpc.idTipoCuerpo', '=', 'tiC.id')
                ->leftJoin('cat_colores_cuerpo AS coloresC', 'cpc.idColoresCuerpo', '=', 'coloresC.id')
                ->selectRaw('cpc.observaciones,
                            partesC.nombre AS parteCuerpo,
                            tac.nombre AS tamano,
                            tic.nombre AS tipo,
                            coloresC.nombre AS color')
                    ->where('cpc.idPersonaDesaparecida',$idDesaparecido)
                    ->where('cpc.idPartesCuerpo',$idParteCuerpo)
                    
                    ->get();

        return $parte;
    }

    public function obtenerSenasParticulares($idDesaparecido){
        $partesSeleccionadas = \DB::table('cedula_partes_cuerpo AS ce')
                        ->leftJoin('cat_partes_cuerpo AS cu', 'ce.idPartesCuerpo', '=', 'cu.id')
                        ->leftJoin('cat_partes_cuerpo AS pa', 'cu.partePadre', '=', 'pa.id')
                        ->leftJoin('cat_tamano_cuerpo AS ta', 'ce.idTamanoCuerpo', '=', 'ta.id')
                        ->leftJoin('cat_tipos_cuerpo AS ti', 'ce.idTipoCuerpo', '=', 'ti.id')
                        ->leftJoin('cat_colores_cuerpo AS co', 'ce.idColoresCuerpo', '=', 'co.id')
                        ->where('idPersonaDesaparecida', $idDesaparecido)
                        ->select('ce.id as idParteCuerpo','pa.id as idPadre', 'pa.nombre as partep','cu.id as idParteh' ,'cu.nombre as parteh',
                        'ta.nombre as tamano', 'ti.nombre as tipo', 'co.nombre as color', 'ce.posicion', 'ce.observaciones', 'ce.imagen', 'cu.reglas', 'ce.otroTipo', 'ce.otroColor')
                        ->get();

        $dataPartes = array();
        $partePadre = null;
        
        //dd($activasPartes);
         foreach ($partesSeleccionadas as $parte) {
            //dd($parte->idParteh);
            $otras=$this->get_otros($parte->idParteh, $idDesaparecido, $parte->idParteCuerpo);
            $modificaciones = $this->get_modificaciones($parte->idParteCuerpo);
            $modifi = array();
            foreach ($modificaciones as $value) {
                if($value->nombre == 'OTRO'){
                    $modifi[] = $otras[0]->otraModificacion;
                }else{
                    $modifi[] = $value->nombre;    
                }
                
            }
            
            //dd($otras);
            $particularidades = $this->get_particularidades($parte->idParteCuerpo);
            $parti = array();
            foreach ($particularidades as $value) {               
                if($value->nombre == 'OTRO'){
                    $parti[] = $otras[0]->otraParticularidad;
                }else{
                    $parti[] = $value->nombre;    
                }
                
            }
            $parte->modificaciones = $modifi;
            $parte->particularidades = $parti;
           

            if ($parte->idPadre != $partePadre) {
                $dataPartes[$parte->partep] = array('idPadre' => $parte->idPadre);
                $partePadre = $parte->idPadre;
            }
            $dataPartes[$parte->partep]['hijos'][] = $parte;
            //$dataPartes[$parte->partep]['otras'][] = json_encode($otras); 
        }

        return $dataPartes;
    }

    public function get_modificaciones($idParteCuerpo)
    {
        $modificaciones = \DB::table('pivot_submodi_cuerpo AS pi')
                            ->leftJoin('cat_modificaciones_cuerpo AS mo', 'pi.idModificaciones', '=', 'mo.id')
                            ->where('pi.idCedulaPartesCuerpo', $idParteCuerpo)
                            ->select('mo.nombre')
                            ->get();

        return $modificaciones;
    }

    public function get_particularidades($idParteCuerpo)
    {
        $particularidades = \DB::table('pivot_subparti_cuerpo AS pi')
                            ->leftJoin('cat_particularidades_cuerpo AS mo', 'pi.idParticularidades', '=', 'mo.id')
                            ->where('pi.idCedulaPartesCuerpo', $idParteCuerpo)
                            ->select('mo.nombre')
                            ->get();

        return $particularidades;
    }

    public function get_otros($idParteCuerpo, $idPersonaDesaparecida, $idCedulaPartesCuerpo)
    {
        $otros = \DB::table('cedula_partes_cuerpo AS ce')
                            ->where('ce.idPartesCuerpo', $idParteCuerpo)
                            ->where('ce.idPersonaDesaparecida', $idPersonaDesaparecida)
                            ->where('ce.id', $idCedulaPartesCuerpo)
                            ->select('ce.otraParticularidad','ce.otraModificacion','ce.otroTipo','ce.otroColor')
                            ->get();

        return $otros;
    }
}
