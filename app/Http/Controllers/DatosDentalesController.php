<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentadura;
use App\Models\Anexos;

class DatosDentalesController extends Controller
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

        $dentadura = new Dentadura();

        $dentadura->idTamanoDiente = $request['dienteTamano'];
        //$dentadura->dienteCompleto = $request['dienteCompleto'];
        $dentadura->asistioDentista = $request['atencionOdonto'];
        $dentadura->tieneInfoDentista = $request['infoDentista'];
        $dentadura->nombres = $request['nombres'];
        $dentadura->primerAp = $request['primerAp'];
        $dentadura->segundoAp = $request['segundoAp'];
        $dentadura->empresa = $request['empresa'];
        $dentadura->telefono = $request['telefono'];
        $dentadura->direccion = $request['direccion'];

        $trata = array();
        foreach ($request->input('tratamiento') as $index => $value) {
                array_push($trata,$value);
        }
        
        // foreach ($trata as $key => $value) {
        //     if ($value == "true") {
        //         echo "hola";
        //     }
        // }
        //$dentaduratrata = json_encode($trata);
        $dentadura->tratamientos = json_encode($trata);

        $dentadura->perdiodiente = $request['perdiodiente'];
        $dentadura->higieneBucal = $request['higieneBucal'];
        $dentadura->describeHigBucal = $request['describahb'];
        $dentadura->caries = $request['tieneCaries'];
        $dentadura->describeCaries = $request['DescribaCaries'];
        $dentadura->abcesos = $request['nombreAbceso'];
        $dentadura->describeAbcesos = $request['describeAbceso'];

        $enferme = array();
        foreach ($request->input('enfermedad') as $index => $value) {
            array_push($enferme,$value);
            // if ($value == 'true') {
            //     array_push($enferme,$value);
            // }
        }
        $dentadura->enfermedades = json_encode($enferme);

        $dentadura->malosHabitos = $request['malosHabitos'];

        $malhabitos = array();
        foreach ($request->input('malhabitos') as $index => $value) {
            array_push($malhabitos,$value);
        }
        $dentadura->arraymaloshabitos = json_encode($malhabitos);
        $dentadura->describeHabito = $request['especifiqhabito'];
        $dentadura->idTipoPerfil = $request['valorPerfil'];
        $dentadura->idTipoMordida = $request['valormordida'];
        $dentadura->idTipoSonrisa = $request['valorsonrisa'];
        $dentadura->idDesaparecido = $request['idDesaparecido'];

        $dentadura->save();
        //dd($datoDental);
        //\DB::table('desaparecido_dentadura')->insert($datoDental);
        return response()->json('successful');
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
        $edad = explode(" ",$desaparecido->edadExtravio);
        $dienteTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        $images = (Anexos::where('idDesaparecido', $id)->where('tipoAnexo', 'antecedentesdentales')->get());
        return view('datosdentales.form_datos_dentales',[
                    'dienteTamano' => $dienteTamano,
                    'desaparecido' => $desaparecido,
                    'edadExtraviado' => $edad,
                    'images' => $images
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
        Anexos::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
