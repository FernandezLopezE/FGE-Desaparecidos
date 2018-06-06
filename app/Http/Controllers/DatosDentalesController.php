<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentadura;
use App\Models\Desaparecido;
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
        
        $dentadura->tratamientos = json_encode($trata);

        $enferme = array();
        foreach ($request->input('enfermedad') as $index => $value) {
            array_push($enferme,$value);
        }
        $dentadura->enfermedades = json_encode($enferme);
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
        $idDesaparecido = $id;

        $dentadura = \DB::table('desaparecido_dentadura as ddp')
                        ->where('ddp.idDesaparecido',$idDesaparecido)
                        ->get();

        //dd($dentadura->toArray());
        //$idDentadura = ($dentadura[0] ->id);

        if (count($dentadura)) {
            //echo $dentadura;
            $tamaDiente = $dentadura[0]->idTamanoDiente;
            $tamanoDiente = \DB::table('cat_tamano_diente')
                        ->select('nombreTamano')
                        ->where('cat_tamano_diente.id',$tamaDiente)
                        ->get();

             $datosDentalesArreglo =  (object) array (
                'tamanoDiente' => $tamanoDiente,
            );
            
             $denta = \App\Models\Dentadura::find($dentadura[0]->id);

            // dd($denta->cattiposonrisa->nombreTipoSonrisa);
             


            return view('datosdentales.show_datosDentales',compact([
                'desaparecido',
                'denta']
            ));
        }else{
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
    public function update(Request $request)
    {
        $dentadura = \App\Models\Dentadura::where('idDesaparecido',$request['idDesaparecido'])->first();;
        
        $dentadura->idTamanoDiente = $request['dienteTamano'];
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

        $dentadura->tratamientos = json_encode($trata);

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

        return response()->json("successfully");
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
