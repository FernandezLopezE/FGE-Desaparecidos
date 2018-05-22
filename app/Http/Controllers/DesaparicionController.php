<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cedula;
use App\Models\Persona;
use App\Models\Desaparecido;
use App\Models\Domicilio;

class DesaparicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a+ new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       
       
        //persona
        $nombres = ($request['nombres']);
        $primerAp = ($request['primerAp']);
        $segundoAp = ($request['segundoAp']);
        //cedula
        $idParentesco = ($request['idParentesco']);
        $otroParentesco = ($request['otroParentesco']);
        $vehiculoPlacas = ($request['vehiculoPlacas']);
        $vehiculoDescripcion = ($request['vehiculoDescripcion']);
        $descripcion = ($request['descripcion']);
        $desaparicionFecha = ($request['desaparicionFecha']);
        $desaparicionHora = ($request['desaparicionHora']);        
        $referencia = ($request['referencia']);
        //domicilio
        $tipoDireccion = ($request['tipoDireccion']);
        $calle            = ($request['calle']);
        $numExterno = ($request['numExterno']);
        $idEstado = ($request['idEstado']);
        $idMunicipio = ($request['idMunicipio']);
        $idLocalidad = ($request['idLocalidad']);
        $idColonia = ($request['idColonia']);
        $idCodigoPostal = ($request['idCodigoPostal']);
       
        //comodin
        $idDesaparecido = ($request['idDesaparecido']);

     

        $persona = Persona::create([
            'nombres'           => $nombres,
            'primerAp'          => $primerAp,
            'segundoAp'         => $segundoAp,
        ]);
 
        $desaparecido = Cedula::create([
            'idPersonaAvisto'   => $persona->id,
            'idParentescoAvisto'=>$idParentesco,
           'otroParentescoAvisto' =>$otroParentesco,
           'vehiculoPlacas' =>$vehiculoPlacas ,
           'vehiculoDescripcion'  => $vehiculoDescripcion,
           'desaparicionObservaciones'=> $descripcion, 
            'desaparicionFecha'=>$desaparicionFecha ,
           'desaparicionHora' =>$desaparicionHora  ,     
            'desaparicionRef'=>$referencia ,
        ]);
        
        $domicilio = Domicilio::create([
          'tipoDireccion'  =>$tipoDireccion,
           'calle' =>$calle          ,
           'numExterno' =>$numExterno ,
           'idEstado' =>$idEstado ,
           'idMunicipio' =>$idMunicipio,
            'idLocalidad'=>$idLocalidad,
            'idColonia'=>$idColonia,
          'idCodigoPostal' => $idCodigoPostal,
          'idDesaparecido' =>$idDesaparecido,

        ]);


        $data = array('nombres' => $nombres,
                        'primerAp' => $primerAp,
                        'segundoAp' => $segundoAp,
                       );
        
       // return response()->json($data);
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $desaparecido = \App\Models\Desaparecido::find($id);

            //esto es para la vista de historial dental y radiografias
        
        /*$meses = array(
            '1' => 'ENERO',
            '2' => 'FEBRERO',
            '3' => 'MARZO',
            '4' => 'ABRIL',
            '5' => 'MAYO',
            '6' => 'JUNIO',
            '7' => 'JULIO',
            '8' => 'AGOSTO',
            '9' => 'SEPTIEMBRE',
            '10' => 'OCTUBRE',
            '11' => 'NOVIEMBRE',
            '12' => 'DICIEMBRE');*/
        $estados            = \App\Models\CatEstado::all()->pluck('nombre','id');
        $municipios         = \App\Models\CatMunicipio::limit(10)->pluck('nombre','id');
        $localidades        = \App\Models\CatLocalidad::limit(10)->pluck('nombre','id');
        $colonias           = \App\Models\CatColonia::limit(10)->pluck('nombre','id');
        $codigos            = \App\Models\CatColonia::limit(10)->pluck('codigoPostal','id');
        $parentescos = \App\Models\CatParentesco::all()->pluck('nombre','id');
        return view('desaparicion.index',[
            'desaparecido' =>   $desaparecido,
            'estados'      =>   $estados,
            'municipios'   =>   $municipios,
            'localidades'  =>   $localidades,
            'colonias'     =>   $colonias,
            'codigos'      =>   $codigos,
            'parentescos' => $parentescos,
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
        dd("hello");
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
