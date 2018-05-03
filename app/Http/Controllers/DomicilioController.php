<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domicilio;
use App\Models\Desaparecido;

class DomicilioController extends Controller
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
        $telefonos[] = array('tipoTel' => $request->input('tipoTel'),
                            'telefono' => $request->input('telefonos'),
                            'ext' => $request->input('ext')
                    );
        

        $domicilio = Domicilio::create([
            'idDesaparecido'    => $request->input('idDesaparecido'),
            'tipoDireccion'     => $request->input('tipoDireccion'),
            'calle'             => $request->input('calle'),
            'numExterno'        => $request->input('numExterno'),
            'numInterno'        => $request->input('numInterno'),
            'idestado'          => $request->input('idEstado'),
            'idMunicipio'       => $request->input('idMunicipio'),
            'idLocalidad'       => $request->input('idLocalidad'),
            'idColonia'         => $request->input('idColonia'),
            'idCodigoPostal'    => $request->input('idCodigoPostal'),
            'telefono'          => json_encode($telefonos)
        ]);

        $estatus = ($domicilio) ? true : false ;
        return response()->json($estatus);
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

        $ladas          = \App\Models\CatNacionalidad::all()->pluck('lada','id');
        $estados        = \App\Models\CatEstado::all()->pluck('nombre','id');       
        $municipios     = array();
        $localidades    = array();
        $colonias       = array();
        $codigos        = array();
        $tiposDireccion = array('PERSONAL' => 'PERSONAL',
                                'TRABAJO' => 'TRABAJO',
                                'FAMILIAR' => 'FAMILIAR');
        $tiposTelefonos = array('PERSONAL' => 'PERSONAL',
                                'TRABAJO' => 'TRABAJO',
                                'CELULAR' => 'CELULAR');

        return view('domicilios.index', compact('desaparecido',
                                                'estados',
                                                'municipios',
                                                'localidades',
                                                'colonias',
                                                'codigos',
                                                'tiposDireccion',
                                                'tiposTelefonos',
                                                'ladas'
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
        
    $telefonos[] = array('telefono' => $request->input('telefonos'),
                            'ext' => $request->input('ext')
                    );
        
         
           $domicilios->tipoDireccion= $request->input('tipoDireccion');
            $domicilios->calle             = $request->input('calle');
            $domicilios->numExterno        = $request->input('numExterno');
            $domicilios->numInterno        = $request->input('numInterno');
            $domicilios->idestado          = $request->input('idEstado');
            $domicilios->idMunicipio       = $request->input('idMunicipio');
            $domicilios->idLocalidad       = $request->input('idLocalidad');
            $domicilios->idColonia         = $request->input('idColonia');
            $domicilios->idCodigoPostal    = $request->input('idCodigoPostal');
            $domicilios->telefono          = json_encode($telefonos);
        
        
//		
//			$accesorio->tipo = $request->input('accesoriosObjetos');
//			$accesorio->material = $request->input('accesorioMaterial');
//			$accesorio->color = $request->input('accesorioColor');
//			$accesorio->otroColor = $request->input('accesorioColorOtro');
//			$accesorio->marcaOrigen = $request->input('accesorioMarcaOrigen');

		$domicilios->save();
		//$colorPrenda = CatColores::find($prenda->color);
		return response()->json($domicilios);
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
