<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desaparecido;
use App\Models\AntecedentesMedicos;
use App\Models\PivotEnfermedadesMedicas;
use App\Models\PivotIntervencionesMedicas;
use App\Models\PivotAdicciones;
use App\Models\PivotImplantesMedicos;
use App\Models\Anexos;
class AntecedentesMedicosController extends Controller
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
        //
        $desaparecido = Desaparecido::find($request['idExtraviado']);

        // antecedentes medicos
        $antecedentesMedicos = new AntecedentesMedicos();

        $antecedentesMedicos->idPersonaDesaparecida = $request['idExtraviado'];
        $antecedentesMedicos->medicamentosToma = $request['medicamentosToma'];
        $antecedentesMedicos->otraEnfermedad =$request['otraEnfermedad'];
        $antecedentesMedicos->otraIQ =$request['otraIQ'];
        $antecedentesMedicos->otraAdiccion =$request['otraAdiccion'];
        $antecedentesMedicos->otroImplante =$request['otroImplante'];
        $antecedentesMedicos->observaciones = $request['observaciones'];

        $antecedentesMedicos->save();
        //

        //enfermedades         
        $enfermedad = $request['enfermedad'];

        $longitud = count($enfermedad);

        for($i=0; $i<$longitud; $i++){
            /*echo $antecedentesMedicos->id;
            echo "<br>";
            echo $enfermedad[$i];
            echo "<br>";*/
            $enfermedades = new PivotEnfermedadesMedicas();
            $enfermedades->idAntecedentesMedicos = $antecedentesMedicos->id;
            $enfermedades->idEnfermedades = $enfermedad[$i];

            $enfermedades->save();
         }

         //intervenciones quirurgicas        
         $intervencionQ = $request['intevencionQ'];

         $longitud = count($intervencionQ);

         for($i=0; $i<$longitud; $i++){
            $interQuirugicas = new PivotIntervencionesMedicas();
            $interQuirugicas->idAntecedentesMedicos = $antecedentesMedicos->id;
            $interQuirugicas->idIntervencionesQuirurgicas = $intervencionQ[$i];

            $interQuirugicas->save();
         }

         //adicciones         
         $adiccion = $request['adiccion'];

         $longitud = count($adiccion);

         for($i=0; $i<$longitud; $i++){
            $adicciones = new PivotAdicciones();
            $adicciones->idAntecedentesMedicos = $antecedentesMedicos->id;
            $adicciones->idAdicciones = $adiccion[$i];

            $adicciones->save();
         }

        //implantes       
         $implante = $request['implante'];

         $longitud = count($implante);

         for($i=0; $i<$longitud; $i++){
            $implantes = new PivotImplantesMedicos();
            $implantes->idAntecedentesMedicos = $antecedentesMedicos->id;
            $implantes->idImplantes = $implante[$i];

            $implantes->save();
         }

        return response()->json($desaparecido);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idExtraviado)
    {
        
        
        
        //$antecedentesM = \App\Models\AntecedentesMedicos::find($idExtraviado);
        //dd($antecedentesM);
        $desaparecido = \App\Models\Desaparecido::find($idExtraviado);
        $idDesaparecido = ($idExtraviado);
        //dd($desaparecido->toArray());
        $anteMedi = \App\Models\AntecedentesMedicos::where('idPersonaDesaparecida', $idExtraviado)->limit(1)->get();
        //dd($anteMedi->toArray());
        $datos2= \DB::table('desaparecidos_personas AS dp')
                    ->select('dp.idPersona as idCedula')
                    ->where('dp.idPersona', $idDesaparecido)
                    ->get();
                

        //dd($datos2->toArray());
        $idCedula = ($datos2[0] ->idCedula);
        
        $observaciones= \DB::table('antecedentes_medicos AS anmi')->select('anmi.observaciones as observaciones')->where('anmi.idPersonaDesaparecida', $idCedula)->get();
        //dd($observaciones);
        //dd($observaciones->toArray());
        if(empty($observaciones[0] ->observaciones)){
            $images = (Anexos::where('idDesaparecido', $idExtraviado)->where('tipoAnexo', 'antecedentesMedicos')->get());
            $enfermedades = \App\Models\CatEnfermedades::all()->pluck('nombre','id');
            $iQuirurgicas = \App\Models\CatIntervencionesQuirurgicas::all()->pluck('nombre','id');
            $adicciones = \App\Models\CatAdicciones::all()->pluck('nombre','id');
            $implantes = \App\Models\CatImplantes::all()->pluck('nombre','id');

            return view('antecedentesmedicos.form_antecedentes_medicos',
            [
                'desaparecido' => $desaparecido,
                'enfermedades' => $enfermedades,
                'iQuirurgicas' => $iQuirurgicas,
                'adicciones' => $adicciones,
                'implantes' => $implantes,
                'images' => $images,
                
            ]);
        }else{
            $images = (Anexos::where('idDesaparecido', $idExtraviado)->where('tipoAnexo', 'antecedentesMedicos')->get());
            $enfermedades = \App\Models\CatEnfermedades::all()->pluck('nombre','id');
            $iQuirurgicas = \App\Models\CatIntervencionesQuirurgicas::all()->pluck('nombre','id');
            $adicciones = \App\Models\CatAdicciones::all()->pluck('nombre','id');
            $implantes = \App\Models\CatImplantes::all()->pluck('nombre','id');
            //dd($desaparecido->antecedentesMedicos->toArray());

            //$observaciones=$anteMedi->observaciones;
            return view('antecedentesmedicos.show_antecedentes_medicos',
            [
                'desaparecido' => $desaparecido,
                'enfermedades' => $enfermedades,
                'iQuirurgicas' => $iQuirurgicas,
                'adicciones' => $adicciones,
                'implantes' => $implantes,
                'images' => $images,
                //'observaciones' => $observaciones,
            ]);
        }

        /*
        $images = (Anexos::where('idDesaparecido', $idExtraviado)->where('tipoAnexo', 'antecedentesMedicos')->get());

        //return view('image-gallery',compact('images'));

        $desaparecido = Desaparecido::find($idExtraviado);

        $enfermedades = \App\Models\CatEnfermedades::all()->pluck('nombre','id');
        $iQuirurgicas = \App\Models\CatIntervencionesQuirurgicas::all()->pluck('nombre','id');
        $adicciones = \App\Models\CatAdicciones::all()->pluck('nombre','id');
        $implantes = \App\Models\CatImplantes::all()->pluck('nombre','id');

        //dd($desaparecido->antecedentesMedicos->toArray());
        return view('antecedentesmedicos.show_antecedentes_medicos',
        [
            'desaparecido' => $desaparecido,
            'enfermedades' => $enfermedades,
            'iQuirurgicas' => $iQuirurgicas,
            'adicciones' => $adicciones,
            'implantes' => $implantes,
            'images' => $images,
        ]);*/
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
    /*public function destroy($id)
    {
        //
    }

   /* public function store_imagen(Request $request)
        {
            
               
            $imageName = request()->file->getClientOriginalName();
            request()->file->move(public_path('upload'), $imageName);
            dd($request->toArray());
        
            
            return response()->json(['uploaded' => '/upload/'.$imageName]);
    }*/
    public function imagen(Request $request)
        {
       
    }
    public function store_path(Request $request)
        {  

        dd($request->toArray());

    
        }

    public function destroy($id)
        {
            Anexos::find($id)->delete();
            return back()
                ->with('success','Image removed successfully.');    
        }
}
