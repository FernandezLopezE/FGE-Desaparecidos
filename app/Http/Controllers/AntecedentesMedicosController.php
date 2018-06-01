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
    public function show($idExtraviado, Request $request)
    {
        //
           $d  = AntecedentesMedicos::all()->where ('idPersonaDesaparecida',$idExtraviado);
        //dd($d);   
      $d = ($d->toArray());


            /* COSAS A ENVIAR A LA VISTA  */
       $images = (Anexos::where('idDesaparecido', $idExtraviado)->where('tipoAnexo', 'antecedentesMedicos')->get());
       $desaparecido = Desaparecido::find($idExtraviado);
        
       if(empty($d)){
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
                
       }
       else{
        $primerValor = array_values($d)[0];//accedo al primer valor del arreglo que trae el objeto.
       //dd($primerValor['id']);
        $idAntecedentes = ($primerValor['id']);        
        //$idAntecedentes = ($d[3]['id']);//se jala el id de la tabla antecedentesMedicos, que es la que la relaciona todas las demás
     // dd($idAntecedentes);
        $consultaEnfermedades  = PivotEnfermedadesMedicas::all()->where ('idAntecedentesMedicos',$idAntecedentes);
        $idAM = AntecedentesMedicos::find($idAntecedentes);
        /*dd($consultaEnfermedades);         
          dd($idAntecedentes);
          dd($idAM->toArray());*/
           /******************************************************************/
           /*SE LLENA LA VARIABLE CON LA LISTA DE ENFERMEDADES ESPECIFICADAS */
           /******************************************************************/
            $consultaEn =\DB::table('pivot_enfermedades_medicas AS pem')
                                ->join('cat_enfermedades AS ce', 'pem.idEnfermedades', '=', 'ce.id')
                                ->select(   'ce.id as id',
                                            'ce.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaEnArray=($consultaEn->toArray());

            //$consultaEn = (object)$consultaEn;
            //dd($consultaEnArray[0]->nombre);
           // dd(count($consultaEnArray));
            $enfermedadesString="";
            for($i=0; $i<(count($consultaEnArray)); $i++){
                if($i==(count($consultaEnArray))-1){//checa si el se imprimira la ultima palabra, para ya no anexarle ","
                        $enfermedadesString = $enfermedadesString.($consultaEnArray[$i]->nombre);
                }
                else{
                $enfermedadesString = $enfermedadesString.($consultaEnArray[$i]->nombre).', ';
                }//Hace una Cadena, con las enfermedades.
                //dd($enfermedadesString);
            }
            if(empty($enfermedadesString)){
                $enfermedadesString = $enfermedadesString.$idAM->otraEnfermedad;//si no seleccionaron nada en combo solo muestra lo deOTRO
            }else{
                $enfermedadesString = $enfermedadesString.', '.$idAM->otraEnfermedad;
            }

           //($enfermedadesString);//enfermedadesString es la cadena final que se envia a la vista



           /******************************************************************/
           /*SE LLENA LA VARIABLE CON LA LISTA DE ADICCIONES   ESPECIFICADAS */
           /******************************************************************/

           $consultaAd =\DB::table('pivot_adicciones AS pa')
                                ->join('cat_adicciones AS ca', 'pa.idAdicciones', '=', 'ca.id')
                                ->select(   'ca.id as id',
                                            'ca.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaAdArray=($consultaAd->toArray());
           // dd($idAntecedentes);

            //$consultaEn = (object)$consultaEn;
            //dd($consultaEnArray[0]->nombre);
           // dd(count($consultaEnArray));
            $adiccionesString="";
            for($i=0; $i<(count($consultaAdArray)); $i++){
                if($i==(count($consultaAdArray))-1){//checa si el se imprimira la ultima palabra, para ya no anexarle ","
                        $adiccionesString = $adiccionesString.($consultaAdArray[$i]->nombre);
                }
                else{
                $adiccionesString = $adiccionesString.($consultaAdArray[$i]->nombre).', ';
                }//Hace una Cadena, con las enfermedades.
                //dd($adiccionesString);
            }
            if(empty($adiccionesString)){
                $adiccionesString = $adiccionesString.$idAM->otraAdiccion;//si no seleccionaron nada en combo solo muestra lo deOTRO
            }else{
                $adiccionesString = $adiccionesString.', '.$idAM->otraAdiccion;
            }

           //dd($adiccionesString);//ESTA ES LA CADENA FINAL (adiccionesString)

            /******************************************************************/
           /*SE LLENA LA VARIABLE CON LA LISTA DE INTERVENCIONES QUIRURJICAS  ESPECIFICADAS */
           /******************************************************************/

           $consultaIq =\DB::table('pivot_intervenciones_medicas AS piqm')
                                ->join('cat_intervenciones_quirurgicas AS ciq', 'piqm.idIntervencionesQuirurgicas', '=', 'ciq.id')
                                ->select(   'ciq.id as id',
                                            'ciq.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaIqArray=($consultaIq->toArray());
           // dd($idAntecedentes);

            //$consultaEn = (object)$consultaEn;
            //dd($consultaEnArray[0]->nombre);
           // dd(count($consultaEnArray));
            $iqString="";
            for($i=0; $i<(count($consultaIqArray)); $i++){
                if($i==(count($consultaIqArray))-1){//checa si el se imprimira la ultima palabra, para ya no anexarle ","
                        $iqString = $iqString.($consultaIqArray[$i]->nombre);
                }
                else{
                $iqString = $iqString.($consultaIqArray[$i]->nombre).', ';
                }//Hace una Cadena, con las enfermedades.
                //dd($iqString);
            }
            if(empty($iqString)){
                $iqString = $iqString.$idAM->otraIQ;//si no seleccionaron nada en combo solo muestra lo deOTRO
            }else{
                $iqString = $iqString.', '.$idAM->otraIQ;
            }

           //dd($iqString);//ESTA ES LA CADENA FINAL (iqString)

            /*****************************************************************/
           /*SE LLENA LA VARIABLE CON LA LISTA DE IMPLANTES    ESPECIFICADOS */
           /******************************************************************/

           $consultaImp =\DB::table('pivot_implantes_medicos AS pim')
                                ->join('cat_implantes AS ci', 'pim.idImplantes', '=', 'ci.id')
                                ->select(   'ci.id as id',
                                            'ci.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaImpArray=($consultaImp->toArray());
           // dd($idAntecedentes);

            //$consultaEn = (object)$consultaEn;
            //dd($consultaEnArray[0]->nombre);
           // dd(count($consultaEnArray));
            $implantesString="";
            for($i=0; $i<(count($consultaImpArray)); $i++){
                if($i==(count($consultaImpArray))-1){//checa si el se imprimira la ultima palabra, para ya no anexarle ","
                        $implantesString = $implantesString.($consultaImpArray[$i]->nombre);
                }
                else{
                $implantesString = $implantesString.($consultaImpArray[$i]->nombre).', ';
                }//Hace una Cadena, con las enfermedades.
                //dd($implantesString);
            }
            if(empty($implantesString)){
                $implantesString = $implantesString.$idAM->otroImplante;//si no seleccionaron nada en combo solo muestra lo deOTRO
            }else{
                $implantesString = $implantesString.', '.$idAM->otroImplante;
            }

           //dd($implantesString);//ESTA ES LA CADENA FINAL (implantesString)
             /******************************************************************/
            /*  IDENTIFICA SI ALGUNA VARIABLE VIENE VACIA, LE PONE POR DEFAULT "SIN /*INFORMACIÓN"                                                    */
            /******************************************************************/
            $observaciones = $idAM->observaciones;
            $medicamentosToma = $idAM->medicamentosToma;

            if (empty($enfermedadesString)){
                $enfermedadesString= "SIN INFORMACIÓN";
            }
            if (empty($adiccionesString)){
                $adiccionesString= "SIN INFORMACIÓN";
            }
            if (empty($iqString)){
                $iqString= "SIN INFORMACIÓN";
            }
            if (empty($implantesString)){
                $implantesString= "SIN INFORMACIÓN";
            }
            if (empty($observaciones)){
                $observaciones= "SIN INFORMACIÓN";
            }
            if (empty($medicamentosToma)){
                $medicamentosToma= "SIN INFORMACIÓN";
            }



            /******************************************************************/
            /*RETURN PARA LLEVAR TODOS LOS DATOS OBTENIDOS A LA VISTA         */
            /******************************************************************/


           return view('antecedentesmedicos.show_antecedentes_medicos',
                    [
                        'desaparecido' => $desaparecido,
                        'images' => $images,
                        'idAm' => $idAM,
                        'enfermedades' => $enfermedadesString,
                        'adicciones' => $adiccionesString,
                        'iq' =>$iqString,
                        'implantes' => $implantesString,
                        'observaciones' =>$observaciones,
                        'medicamentosToma' =>$medicamentosToma,
                    ]);
       }//CIERRA LA LLAVE DEL ELSE PARA ACCEDER A LA VISTA DE SHOW

      
    




      //    IMAGENES
   
        //return view('image-gallery',compact('images'));

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d  = AntecedentesMedicos::all()->where ('idPersonaDesaparecida',$id);
        //dd($d);   
        $d = ($d->toArray());


            /* COSAS A ENVIAR A LA VISTA  */
           $images = (Anexos::where('idDesaparecido', $id)->where('tipoAnexo', 'antecedentesMedicos')->get());
           $desaparecido = Desaparecido::find($id);
            
      
                $enfermedades = \App\Models\CatEnfermedades::all()->pluck('nombre','id');
                $iQuirurgicas = \App\Models\CatIntervencionesQuirurgicas::all()->pluck('nombre','id');
                $adicciones = \App\Models\CatAdicciones::all()->pluck('nombre','id');
                $implantes = \App\Models\CatImplantes::all()->pluck('nombre','id');


            $primerValor = array_values($d)[0];//accedo al primer valor del arreglo que trae el objeto.
            $idAntecedentes = ($primerValor['id']);               
            $consultaEnfermedades  = PivotEnfermedadesMedicas::all()->where ('idAntecedentesMedicos',$idAntecedentes);
            $idAM = AntecedentesMedicos::find($idAntecedentes);

        // CONSULTA A TABLA PIVOTE DE ENFERMEDADES MÉDICAS
             $consultaEn =\DB::table('pivot_enfermedades_medicas AS pem')
                                ->join('cat_enfermedades AS ce', 'pem.idEnfermedades', '=', 'ce.id')
                                ->select(   'ce.id as id',
                                            'ce.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaEnArray=($consultaEn->toArray());
            $longitudEn = count($consultaEnArray);
            $mConsultaEnfermedades ="";
            $idConsultaEnfermedades = array();
            for($x=0;$x < $longitudEn; $x++){
                $mConsultaEnfermedades = $consultaEnArray[$x]->nombre.', '.$mConsultaEnfermedades;
                array_push($idConsultaEnfermedades, $consultaEnArray[$x]->id);
            }
            //dd($mConsultaEnfermedades);
            //dd($idConsultaEnfermedades);

        // CONSULTA A TABLA PIVOTE DE ADICCIONES
            $consultaAd =\DB::table('pivot_adicciones AS pa')
                                ->join('cat_adicciones AS ca', 'pa.idAdicciones', '=', 'ca.id')
                                ->select(   'ca.id as id',
                                            'ca.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaAdArray=($consultaAd->toArray());
            $longitudAd = count($consultaAdArray);
            $mConsultaAdicciones ="";
            $idConsultaAdicciones = array();
            for($x=0;$x < $longitudAd; $x++){
                $mConsultaAdicciones = $consultaAdArray[$x]->nombre.', '.$mConsultaAdicciones;
                array_push($idConsultaAdicciones, $consultaAdArray[$x]->id);
            }
            //dd($mConsultaAdicciones);
            //dd($idConsultaAdicciones);
        // CONSULTA A TABLA PIVOTE DE INTERVENCIONES QUIRURGICAS
            $consultaIq =\DB::table('pivot_intervenciones_medicas AS piqm')
                                ->join('cat_intervenciones_quirurgicas AS ciq', 'piqm.idIntervencionesQuirurgicas', '=', 'ciq.id')
                                ->select(   'ciq.id as id',
                                            'ciq.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaIqArray=($consultaIq->toArray());
            $longitudIq = count($consultaIqArray);
            $mConsultaIQ ="";
            $idConsultaIQ = array();
            for($x=0;$x < $longitudIq; $x++){
                $mConsultaIQ = $consultaIqArray[$x]->nombre.', '.$mConsultaIQ;
                array_push($idConsultaIQ, $consultaIqArray[$x]->id);
            }
            //dd($mConsultaIQ);
            //dd($idConsultaIQ);
        // CONSULTA A TABLA PIVOTE DE IMPLANTES 
            $consultaImp =\DB::table('pivot_implantes_medicos AS pim')
                                ->join('cat_implantes AS ci', 'pim.idImplantes', '=', 'ci.id')
                                ->select(   'ci.id as id',
                                            'ci.nombre as nombre')
                                ->where('idAntecedentesMedicos', $idAntecedentes)
                                ->get();
            $consultaImpArray=($consultaImp->toArray());
            $longitudIm = count($consultaImpArray);
            $mConsultaIM ="";
            $idConsultaIM = array();
            for($x=0;$x < $longitudIm; $x++){
                $mConsultaIM = $consultaImpArray[$x]->nombre.', '.$mConsultaIM;
                array_push($idConsultaIM, $consultaImpArray[$x]->id);
            }
            //dd($mConsultaIM);
            //dd($idConsultaIM);
           // $idConsultaEnfermedades = (object) $idConsultaEnfermedades;
            $combos = array(
                    'idConsultaEnfermedades'=> $idConsultaEnfermedades,
                    'idConsultaAdicciones'=> $idConsultaAdicciones,
                    'idConsultaIQ'=> $idConsultaIQ,
                    'idConsultaIM'=> $idConsultaIM,
            );
            //dd($combos);
            $combosObj = (object)$combos;

                return view('antecedentesmedicos.edit_antecedentes_medicos',
                    [
                        'desaparecido' => $desaparecido,
                        'enfermedades' => $enfermedades,
                        'iQuirurgicas' => $iQuirurgicas,
                        'adicciones' => $adicciones,
                        'implantes' => $implantes,
                        'images' => $images,
                        'mConsultaEnfermedades' => $mConsultaEnfermedades,
                        'idConsultaEnfermedades'=> $idConsultaEnfermedades,
                        'mConsultaAdicciones'=> $mConsultaAdicciones,
                        'idConsultaAdicciones'=> $idConsultaAdicciones,
                        'mConsultaIQ'=> $mConsultaIQ,
                        'idConsultaIQ'=> $idConsultaIQ,
                        'mConsultaIM'=> $mConsultaIM,
                        'idConsultaIM'=> $idConsultaIM,
                        'combos' => $combosObj,
                        'idAM' => $idAM,

                    ]);
                
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
        
            $id=($request['idExtraviado']);
         $d  = AntecedentesMedicos::all()->where ('idPersonaDesaparecida',$id);
         
          
        $d = ($d->toArray());
        $desaparecido = Desaparecido::find($id);

         $primerValor = array_values($d)[0];//accedo al primer valor del arreglo que trae el objeto.
        $idAntecedentes = ($primerValor['id']);               
        $idAM = AntecedentesMedicos::find($idAntecedentes);
        //dd($idAM); 

        
        // $desaparecido = Desaparecido::find($request['idExtraviado']);

        // antecedentes medicos
        $antecedentesMedicos = new AntecedentesMedicos();

       $idPersonaDesaparecida = $request['idExtraviado'];
       $medicamentosToma = $request['medicamentosToma'];
       $otraEnfermedad =$request['otraEnfermedad'];
       //
       $otraIQ =$request['otraIQ'];
       $otraAdiccion =$request['otraAdiccion'];
       $otroImplante =$request['otroImplante'];
       $observaciones = $request['observaciones'];
//dd($otraEnfermedad);
        //$antecedentesMedicos->save();
        $amedicos= AntecedentesMedicos::find($idAntecedentes)->update([

                'idPersonaDesaparecida' => $idPersonaDesaparecida,
                'medicamentosToma' => $medicamentosToma,
                'otraEnfermedad' => $otraEnfermedad,
                'otraIQ' => $otraIQ,
                'otraAdiccion' => $otraAdiccion,
                'otroImplante' => $otroImplante,
                'observaciones' => $observaciones ,
        ]);
        $deleteEn =\DB::table('pivot_enfermedades_medicas')->where('idAntecedentesMedicos', $idAntecedentes)->delete() ;
        $deleteEn =\DB::table('pivot_adicciones')->where('idAntecedentesMedicos', $idAntecedentes)->delete() ;
        $deleteEn =\DB::table('pivot_intervenciones_medicas')->where('idAntecedentesMedicos', $idAntecedentes)->delete() ;
        $deleteEn =\DB::table('pivot_implantes_medicos')->where('idAntecedentesMedicos', $idAntecedentes)->delete() ;
       // Cedula::find($idCedula)->update;
        //enfermedades         
       

        $enfermedad = $request['enfermedad'];

        $longitud = count($enfermedad);

        for($i=0; $i<$longitud; $i++){
            /*echo $antecedentesMedicos->id;
            echo "<br>";
            echo $enfermedad[$i];
            echo "<br>";*/
            $enfermedades = new PivotEnfermedadesMedicas();
            $enfermedades->idAntecedentesMedicos = $idAntecedentes;
            $enfermedades->idEnfermedades = $enfermedad[$i];

            $enfermedades->save();
         }

         //intervenciones quirurgicas        
         $intervencionQ = $request['intevencionQ'];

         $longitud = count($intervencionQ);

         for($i=0; $i<$longitud; $i++){
            $interQuirugicas = new PivotIntervencionesMedicas();
            $interQuirugicas->idAntecedentesMedicos = $idAntecedentes;
            $interQuirugicas->idIntervencionesQuirurgicas = $intervencionQ[$i];

            $interQuirugicas->save();
         }

         //adicciones         
         $adiccion = $request['adiccion'];

         $longitud = count($adiccion);

         for($i=0; $i<$longitud; $i++){
            $adicciones = new PivotAdicciones();
            $adicciones->idAntecedentesMedicos = $idAntecedentes;
            $adicciones->idAdicciones = $adiccion[$i];

            $adicciones->save();
         }

        //implantes       
         $implante = $request['implante'];

         $longitud = count($implante);

         for($i=0; $i<$longitud; $i++){
            $implantes = new PivotImplantesMedicos();
            $implantes->idAntecedentesMedicos = $idAntecedentes;
            $implantes->idImplantes = $implante[$i];

            $implantes->save();
         }

        return response()->json($desaparecido);
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
