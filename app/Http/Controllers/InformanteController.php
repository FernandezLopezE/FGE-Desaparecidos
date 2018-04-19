<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cedula;
use App\Models\Persona;
use App\Models\Desaparecido;
use App\Models\Domicilio;

class InformanteController extends Controller
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
        


        $informante = (is_null($request->input('informante'))) ? 0 : 1 ;
        $autorizado = (is_null($request->input('notificaciones'))) ? 0 : 1 ;

        $persona = Persona::create([
            'nombres'           => $request->input('nombre'),
            'primerAp'          => $request->input('primerAp'),
            'segundoAp'         => $request->input('segundoAp'),
            'idNacionalidad'    => $request->input('nacionalidad'),
        ]);

        $desaparecido = Desaparecido::create([
            'idPersona'             => $persona->id,
            'idCedula'              => $request->input('idCedula'),
            'idParentesco'          => $request->input('idParentesco'),
            'idDocumentoIdentidad'  => $request->input('idDocumentoIdentidad'), 
            'otroDocIdentidad'      => $request->input('otroDocIdentidad'),
            'numDocIdentidad'       => $request->input('numDocIdentidad'),
            'correoElectronico'     => $request->input('correoElectronico'),
            'informante'            => $informante,
            'notificaciones'        => $autorizado,
            'tipoPersona'           => 'INFORMANTE',
        ]);
        
        $domicilio = Domicilio::create([
            'idDesaparecido'    => $desaparecido->id,
            'tipoDireccion'     => $request->input('tipoDirec'),
            'calle'             => $request->input('calle'),
            'numExterno'        => $request->input('numExt'),
            'numInterno'        => $request->input('numInt'),
            'idestado'          => $request->input('estado'),
            'idMunicipio'       => $request->input('municipio'),
            'idLocalidad'       => $request->input('localidad'),
            'idColonia'         => $request->input('colonia'),
            'idCodigoPostal'    => $request->input('cp'),
            'telefono'          => json_encode(array('tipoTel' => 'PERSONAL',
                                     'lada' => $request->input('lada'),
                                     'telefono' => $request->input('telefono'),
                                     'ext' => $request->input('ext'))),
        ]);

        $data = array('nombres' => $desaparecido->persona->nombres,
                        'primerAp' => $desaparecido->persona->primerAp,
                        'segundoAp' => $desaparecido->persona->segundoAp,
                        'informante' => $desaparecido->informante,
                        'notificaciones' => $desaparecido->notificaciones, );
        
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cedula = \App\Models\Cedula::find($id);

        $sexos = array('MASCULINO' => 'MASCULINO', 'FEMENINO' => 'FEMENINO');
        $escolaridades      = \App\Models\CatEscolaridad::all()->pluck('nombre','id');
        $ocupaciones        = \App\Models\CatOcupacion::all()->pluck('nombre','id');
        $identificaciones   = \App\Models\CatDocumento::all()->pluck('nombre','id');
        $edoscivil          = \App\Models\CatEstadoCivil::all()->pluck('nombre','id');
        
        $parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
        $nacionalidades     = \App\Models\CatNacionalidad::all()->pluck('nombre', 'id');
        $ladas = \App\Models\CatNacionalidad::all()->pluck('lada','id');
        $documentos     = \App\Models\CatDocumento::all()->pluck('nombre', 'id');
        $estados            = \App\Models\CatEstado::all()->pluck('nombre','id');       
        $municipios = array();
        $localidades = array();
        $colonias = array();
        $codigos = array();
        $tiposDireccion = array('PERSONAL' => 'PERSONAL',
                                'TRABAJO' => 'TRABAJO',
                                'FAMILIAR' => 'FAMILIAR');

        $tiposTelefonos = array('PERSONAL' => 'PERSONAL',
                                'TRABAJO' => 'TRABAJO',
                                'CELULAR' => 'CELULAR');            

        $informantes = \App\Models\Desaparecido::where('tipoPersona', 'INFORMANTE')->get();

        return view('informante.index',compact(                                           
                                            'cedula',
                                            'sexos',
                                            'escolaridades',
                                            'ocupaciones',
                                            'identificaciones',
                                            'edoscivil',
                                            'dialectos',
                                            'parentescos',
                                            'nacionalidades',
                                            'ladas',
                                            'documentos',
                                            'estados',
                                            'municipios',
                                            'localidades',
                                            'colonias',
                                            'informantes',
                                            'codigos',
                                            'tiposDireccion',
                                            'tiposTelefonos'
                                        )); 
        
        
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
        
       $desaparecido = Desaparecido::find($id);
       $domicilios = Domicilio::find($desaparecido->domicilios[0]['id']);
       
       $noDomicilio = $desaparecido->domicilios[0]['id'];
       

        $informante = (is_null($request->input('informante'))) ? 0 : 1 ;
        $autorizado = (is_null($request->input('notificaciones'))) ? 0 : 1 ;

        $persona = Persona::find($desaparecido->persona->id)->update([
            'nombres'           => $request->input('nombre'),
            'primerAp'          => $request->input('primerAp'),
            'segundoAp'         => $request->input('segundoAp'),
            'idNacionalidad'    => $request->input('nacionalidad'),
        ]);


        $desaparecido = Desaparecido::find($desaparecido->id)->update([
            'idParentesco'          => $request->input('idParentesco'),
            'idDocumentoIdentidad'  => $request->input('idDocumentoIdentidad'),
            'otroDocIdentidad'      => $request->input('otroDocIdentidad'),
            'numDocIdentidad'       => $request->input('numDocIdentidad'),
            'correoElectronico'     => $request->input('correoElectronico'),
            'informante'            => $informante,
            'notificaciones'        => $autorizado,
            'tipoPersona'           => 'INFORMANTE',
        ]);

        $domicilio = \App\Models\Domicilio::find($noDomicilio)->update([
            'tipoDireccion'     => $request->input('tipoDirec'),
            'calle'             => $request->input('calle'),
            'numExterno'        => $request->input('numExt'),
            'numInterno'        => $request->input('numInt'),
            'idestado'          => $request->input('estado'),
            'idMunicipio'       => $request->input('municipio'),
            'idLocalidad'       => $request->input('localidad'),
            'idColonia'         => $request->input('colonia'),
            'idCodigoPostal'    => $request->input('cp'),
            'telefono'          => json_encode(array('tipoTel' => 'PERSONAL',
                                     'lada' => $request->input('lada'),
                                     'telefono' => $request->input('telefono'),
                                     'ext' => $request->input('ext'))),
        ]);
        
        if ($desaparecido) {
                    $desaparecido = Desaparecido::find($id);                    
                    $data = array('nombres' => $desaparecido->persona->nombres,
                        'primerAp' => $desaparecido->persona->primerAp,
                        'segundoAp' => $desaparecido->persona->segundoAp,
                        'informante' => $desaparecido->informante,
                        'notificaciones' => $desaparecido->notificaciones );
            
        }

        return response()->json($data);


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
