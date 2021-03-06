<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DatosDentista;
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
    public function store(DatosDentista $request)
    {


        //dd($request->toArray());
        $dentadura = new Dentadura();

        $dentadura->idTamanoDiente = $request['dienteTamano'];
        $dentadura->nombres = $request['nombres'];
        $dentadura->primerAp = $request['primerAp'];
        $dentadura->segundoAp = $request['segundoAp'];
        $dentadura->empresa = $request['empresa'];
        $dentadura->telefono = $request['telefono'];
        $dentadura->direccion = $request['direccion'];

        $trata = array();
        if ($request->input('tratamiento') == null) {
            $valor = 'SIN_INFORMACION';
            array_push($trata,$valor);
        }else{
            foreach ($request->input('tratamiento') as $index => $value) {
                array_push($trata,$value);
            }
        }
        
        $dentadura->tratamientos = json_encode($trata);

        $enferme = array();
        if ($request->input('enfermedad') == null) {
            $valor = 'SIN_INFORMACION';
            array_push($enferme,$valor);
        }else{
            foreach ($request->input('enfermedad') as $index => $value) {
                array_push($enferme,$value);
            }
        }

        $dentadura->enfermedades = json_encode($enferme);
        
        $malhabitos = array();
        if ($request->input('malhabitos') == null) {
            $valor = 'SIN_INFORMACION';
            array_push($malhabitos,$valor);
        }else{
            foreach ($request->input('malhabitos') as $index => $value) {
                array_push($malhabitos,$value);
            }
        }
        
        $dentadura->arraymaloshabitos = json_encode($malhabitos);
        
        $dentadura->describeHabito = $request['especifiqhabito'];
        $dentadura->idTipoPerfil = $request['valorPerfil'];
        $dentadura->idTipoMordida = $request['valormordida'];
        $dentadura->idTipoSonrisa = $request['valorsonrisa'];
        $dentadura->dentaCompleta = $request['dentaCompleta'];
        $dentadura->idDesaparecido = $request['idDesaparecido'];

        $dentadura->save();

        return response()->json($dentadura);
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
            // $tamanoDiente = \DB::table('cat_tamano_diente')
            //             ->select('nombreTamano')
            //             ->where('cat_tamano_diente.id',$tamaDiente)
            //             ->get();
            
             $denta = \App\Models\Dentadura::find($dentadura[0]->id);

             $dentavalor = $dentadura[0]->id;
             $edad = explode(" ",$desaparecido->edadExtravio);

             $dientesPerdidos = \DB::table('pivot_diente_perdido as pdp')
                        ->join('cat_dientes as cd', 'pdp.idDiente', '=', 'cd.id')
                        ->select('cd.id','cd.nombreDiente','pdp.causaPerdida')
                        ->where('pdp.idDentadura',$dentavalor)
                        ->get();

            //$dientesPerdido = json_encode($dientesPerdidos);

            //dd($dientesPerdidos);

            // dd($denta->cattiposonrisa->nombreTipoSonrisa);
            return view('datosdentales.show_datosDentales',compact([
                'desaparecido',
                'denta',
                'dientesPerdidos',
                'edad', 'dentadura']
            ));
        }else{
            $edad = explode(" ",$desaparecido->edadExtravio);
            $dienteTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
            $images = (Anexos::where('idDesaparecido', $id)->where('tipoAnexo', 'antecedentesdentales')->get());
            return view('datosdentales.form_datos_dentales',[
                        'dienteTamano' => $dienteTamano,
                        'desaparecido' => $desaparecido,
                        'edadExtraviado' => $edad,
                        'images' => $images,
                        'dentadura' => $dentadura
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
        $desaparecido = \App\Models\Desaparecido::find($id);
        $idDesaparecido = $id;

        $dentadura = \DB::table('desaparecido_dentadura as ddp')
                        ->where('ddp.idDesaparecido',$idDesaparecido)
                        ->get();
        $denta = \App\Models\Dentadura::find($dentadura[0]->id);

        $idperfil = $denta->idTipoPerfil;
        $nombrePerfil = \DB::table('cat_tipo_perfil')
                    ->select('id','nombrePerfil')
                    ->where('cat_tipo_perfil.id',$idperfil)
                    ->get();

        

        $idmordida = $denta->idTipoMordida;
        $nombreMordida = \DB::table('cat_tipo_mordida')
                    ->select('id','nombreTipoMordida')
                    ->where('cat_tipo_mordida.id',$idmordida)
                    ->get();

        $idsonrisa = $denta->idTipoSonrisa;
        $nombreSonrisa = \DB::table('cat_tipo_sonrisa')
                    ->select('id','nombreTipoSonrisa')
                    ->where('cat_tipo_sonrisa.id',$idsonrisa)
                    ->get();

        $dentavalor = $dentadura[0]->id;
        $dientesPerdidos = \DB::table('pivot_diente_perdido as pdp')
                        ->join('cat_dientes as cd', 'pdp.idDiente', '=', 'cd.id')
                        ->select('cd.id','cd.nombreDiente','pdp.causaPerdida')
                        ->where('pdp.idDentadura',$dentavalor)
                        ->get();


        $edad = explode(" ",$desaparecido->edadExtravio);
        $dienteTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        $images = (Anexos::where('idDesaparecido', $id)->where('tipoAnexo', 'antecedentesdentales')->get());
        //$edad = explode(" ",$desaparecido->edadExtravio);
         return view('datosdentales.edit_datosDentales',[
            'dienteTamano' => $dienteTamano,
            'desaparecido' => $desaparecido,
            'edadExtraviado' => $edad,
            'images' => $images,
            'denta' => $denta,
            'nombrePerfil' => $nombrePerfil,
            'nombreMordida' => $nombreMordida,
            'nombreSonrisa' => $nombreSonrisa,
            'dientesPerdidos' => $dientesPerdidos,
            'dentadura' => $dentadura
         ]);




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
        if ($request->input('tratamiento') == null) {
            $valor = 'SIN_INFORMACION';
            array_push($trata,$valor);
        }else{
            foreach ($request->input('tratamiento') as $index => $value) {
                array_push($trata,$value);
            }
        }

        $dentadura->tratamientos = json_encode($trata);

        $enferme = array();
        if ($request->input('enfermedad') == null) {
            $valor = 'SIN_INFORMACION';
            array_push($enferme,$valor);
        }else{
            foreach ($request->input('enfermedad') as $index => $value) {
                array_push($enferme,$value);
            }
        }

        $dentadura->enfermedades = json_encode($enferme);

       $malhabitos = array();
        if ($request->input('malhabitos') == null) {
            $valor = 'SIN_INFORMACION';
            array_push($malhabitos,$valor);
        }else{
            foreach ($request->input('malhabitos') as $index => $value) {
                array_push($malhabitos,$value);
            }
        }

        $dentadura->arraymaloshabitos = json_encode($malhabitos);
        
        $dentadura->describeHabito = $request['especifiqhabito'];
        $dentadura->idTipoPerfil = $request['valorPerfil'];
        $dentadura->idTipoMordida = $request['valormordida'];
        $dentadura->idTipoSonrisa = $request['valorsonrisa'];
        $dentadura->dentaCompleta = $request['dentaCompleta'];
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
        
        $dientesP = \DB::table('pivot_diente_perdido')->where('idDentadura',$id)->delete();

        return response()->json("success");

        /*Anexos::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    */
    }
}
