<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cedula;
use App\Models\Persona;
use App\Models\Desaparecido;
use App\Models\Domicilio;
use Carbon\Carbon;

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
        $idDesaparecido = ($request['idDesaparecido']);
       
         $datos2= \DB::table('desaparecidos_personas AS dp')    
                ->select('dp.idCedula as idCedula')
                ->where('dp.id', $idDesaparecido)
                ->get();
        $idCedula = ($datos2[0] ->idCedula);
       // $desaparecido = \App\Models\Desaparecido::find($datos2[0]->id);
       
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
        //$desaparicionHora = ($request['desaparicionHora']);
        $referencia = ($request['referencia']);
        //domicilio
      //  $desaparicionFecha = Carbon::createFromFormat('d/m/Y', $desaparicionFecha)->format('Y-m-d');         
        $tipoDireccion = ($request['tipoDireccion']);
        $calle            = ($request['calle']);
        $numExterno = ($request['numExterno']);
        $idEstado = ($request['idEstado']);
        $idMunicipio = ($request['idMunicipio']);
        $idLocalidad = ($request['idLocalidad']);
        $idColonia = ($request['idColonia']);
        $idCodigoPostal = ($request['idCodigoPostal']);     

        
 
        $desaparecido = Cedula::find($idCedula)->update([
           'otroParentescoAvisto' =>$otroParentesco,
           'vehiculoPlacas' =>$vehiculoPlacas ,
           'vehiculoDescripcion'  => $vehiculoDescripcion,
           'desaparicionObservaciones'=> $descripcion, 
            'desaparicionFecha'=>$desaparicionFecha ,
          // 'desaparicionHora' =>$desaparicionHora  ,     
            'desaparicionRef'=>$referencia ,
            'nombresAvisto' =>$nombres,
            'primerApAvisto' =>$primerAp,
            'segundoApAvisto' =>$segundoAp,
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
         $desaparecido = \App\Models\Desaparecido::find($id);

         $idDesaparecido = ($id);
        
         $datos2= \DB::table('desaparecidos_personas AS dp')    
                ->select('dp.idCedula as idCedula')
                ->where('dp.id', $idDesaparecido)
                ->get();
        $idCedula = ($datos2[0] ->idCedula);
        $desapaRef= \DB::table('desaparecidos_cedula_investigacion AS dci')    
                ->select('dci.desaparicionRef as desaparicionRef')
                ->where('dci.id', $idCedula)
                ->get();
       // dd(is_null($desapaRef[0] ->desaparicionRef));
        if(is_null($desapaRef[0] ->desaparicionRef)){
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
        else{

            $desaparicionFecha = $desaparecido->cedula->desaparicionFecha;
            $desaparicionHora = Carbon::parse($desaparicionFecha)->format('H:i');
            $desaparicionFecha = Carbon::parse($desaparicionFecha)->format('Y-m-d');
            $desaparicionObservaciones = $desaparecido->cedula->desaparicionObservaciones;
            $desaparicionRef = $desaparecido->cedula->desaparicionRef;
            $nombresAvisto= $desaparecido->cedula->nombresAvisto;
            $primerApAvisto =$desaparecido->cedula->primerApAvisto;
            $segundoApAvisto =$desaparecido->cedula->segundoApAvisto;
            $vehiculoDescripcion = $desaparecido->cedula->vehiculoDescripcion;
            $vehiculoPlacas = $desaparecido->cedula->vehiculoPlacas;
            //se consulta el valor de parentesco
            $p =  $desaparecido->cedula->idParentescoAvisto;
            if ($p == 14){
                $parentesco = $desaparecido->cedula->otroParentescoAvisto;                
            }
            else{
                $consultaParent= \DB::table('cat_parentesco AS dci')    
                ->where('dci.id', $p)
                ->get();                
                $parentesco = $consultaParent[0]->nombre;                    
             }
            $domicilio = \App\Models\Domicilio::find($id);
            //AQUI CONSULTO EL DOMICILIO ULTIMO QUE FUE VISTO LA PERSONA DESAPARECIDA
            $domicilio =  \DB::table('desaparecidos_domicilios AS dd')
            ->join('cat_estado AS ce', 'dd.idEstado', '=', 'ce.id')
            ->join('cat_municipio AS cm', 'dd.idMunicipio', '=', 'cm.id')
            ->join('cat_localidad AS cl', 'dd.idLocalidad', '=', 'cl.id')
            ->join('cat_colonia AS cc', 'dd.idColonia', '=', 'cc.id')
            ->select('dd.id as id',
                     'dd.tipoDireccion as tipoD',
                     'dd.calle as calle',
                     'dd.numExterno as nExt',
                     'dd.numInterno as nInt',
                     'dd.telefono as telefono',
                     'ce.id as idEstado',
                     'ce.nombre as estado',
                     'cm.id as idMunicipio',
                     'cm.nombre as municipio',
                     'cl.id as idLocalidad',
                     'cl.nombre as localidad',
                     'cc.id as idColonia',
                     'cc.nombre as colonia',
                     'cc.codigoPostal as cp')
            ->where('idDesaparecido', $idDesaparecido)->where('dd.tipoDireccion', 'LUGAR DE AVISTAMIENTO')->limit(1)
                ->get(); 
                //AQUI TERMINA LA CONSULTA       
          /* 
            $calle = $domicilios[0]->calle;
            $numExterno = $domicilios[0]->nExt;
            $estado = $domicilios[0]->estado;
            $municipio = $domicilios[0]->municipio;
            $localidad = $domicilios[0]->localidad;
            $colonia =$domicilios[0]->colonia;
            $codigoPostal $domicilios[0]->cp;*/

            $datosDesaparicionArreglo =  array (
                'desaparicionFecha'=>     $desaparicionFecha,
                'desaparicionHora'=>     $desaparicionHora,
                'desaparicionObservaciones'=>     $desaparicionObservaciones,
                'desaparicionRef'=>     $desaparicionRef,
                //'nombrePersonaAvisto'=>     $nombrePersonaAvisto,
                'vehiculoDescripcion'=>     $vehiculoDescripcion,
                'vehiculoPlacas' =>     $vehiculoPlacas,
                'parentesco' =>     $parentesco,
                'domicilio' =>     $domicilio,

            );
                $datosDesaparicion = (object) $datosDesaparicionArreglo;

                return view('desaparicion.show_desaparicion',compact([
                    'datosDesaparicion',
                    'desaparecido',
                    'desaparecido']
                    ));

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
