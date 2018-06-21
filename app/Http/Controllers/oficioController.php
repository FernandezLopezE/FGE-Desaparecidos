<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Oficio;
use App\Models\Aoficio;
use App\Models\Intentos;
use DB;
use Carbon\Carbon;

class OficioController extends Controller
{
    public function oficios(Request $request){
        $templates = DB::table('oficios')
        ->where('nombre', $request->tipo)
        ->get();
        return response()->json($templates);
    }

    public function getToken() { 
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30); 
    }
    
    public function saveOficio(Request $request){      
            $oficio = new Oficio();
            $oficio->html = $request->html;
            $oficio->token = $request->token;
            $oficio->fiscal = /*Auth::user()->id*/1;
            $oficio->idOficio = $request->id_oficio;
            $oficio->idTabla = $request->id_tabla;
            if($oficio->save()){
                return 1;
            }
            else{
                return 0;
            }
        
    }

    public function intentos(Request $request){
        $intento = new Intentos();
        $intento->html = $request->html;
        $intento->fiscal = /*Auth::user()->id*/1;
        $intento->idOficio = $request->id_oficio;
        $intento->idTabla = $request->id_tabla;
        if($intento->save()){
            return 1;
        }
        else{
            return 0;
        }
    }

    /*Cambiar sistema por el que corresponda y la unidad por la que tenga asiganada el usuario logueado */
    public function getOficios(){
        $oficios = Aoficio::where('unidad',1)
        ->select('id','nombre')
        ->get();
        return view('oficios.oficios', compact('oficios')); 
    }

    public function getOficio(Request $request){
        $oficio = DB::table('oficios')
        ->where('id', $request->id)
        ->get();
        return response()->json($oficio);
    }

    /*Cambiar sistema por el que corresponda y la unidad por la que tenga asiganada el usuario logueado */
    public function addOficio(Request $request){
        $oficio = new Aoficio();
        $oficio->nombre = $request->nombre;
        $oficio->encabezado = $request->encabezado;
        $oficio->contenido = $request->contenido;
        $oficio->pie = $request->pie;
        $oficio->unidad = 1;
        if($oficio->save()){
            $data = array('id' => $oficio->id, 'nombre' => $request->nombre);
            return response()->json($data);
        }
        else{
            return 0;
        }
    }

    public function updateOficio(Request $request){
        $oficio = Aoficio::find($request->id);
        $oficio->nombre = $request->nombre;
        $oficio->contenido = $request->contenido;
        $oficio->encabezado = $request->encabezado;
        $oficio->pie = $request->pie;
        if($oficio->save()){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function oficioprueba($id){
       /* $doc="";
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
            return response()->json($data);*/
    }
}
