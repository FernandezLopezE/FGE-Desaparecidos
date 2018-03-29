<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\CatMunicipio;
use App\Models\CatColonia;
use App\Models\CatEstado;
use App\Models\CatLocalidad;
use App\Models\Domicilio;



class DomiciliosController extends Controller
{
    public function index(){
    	$estados = CatEstado::pluck('nombre','id');
    	//$codigos= CatColonia::pluck('codigoPostal','id');
    	//$municipios = CatMunicipio::pluck('nombre','id');
    	//$localidades= CatLocalidad::pluck('nombre','id');
    	//$colonias= CatColonia::pluck('nombre','id');

    	/*$codigos = array();
        $municipios = array();
        $localidades = array();
        $colonias = array();
    	

    	return view('desaparecidos/index',compact('estados', 'codigos', 'municipios','localidades','colonias'));*/
  		
  		
    }

    public function create()
    {

    	
    }
    // select para obtener los catálogos de select dínámicos 

    public function getMunicipios(Request $request, $id){
        if($request->ajax()){
            $municipios = CatMunicipio::municipios($id);
            return response()->json($municipios);
        }
    }

    public function getLocalidades(Request $request, $id){
        if($request->ajax()){
            $localidades = CatLocalidad::localidades($id);
            return response()->json($localidades);
        }
    }

    public function getColonias(Request $request, $cp){
        if($request->ajax()){
            $colonias = CatColonia::colonias($cp);
            return response()->json($colonias);
        }
    }

    public function getColonias2(Request $request, $id){
        if($request->ajax()){
            $colonias = CatColonia::colonias2($id);
            return response()->json($colonias);
        }
    }

    public function getCodigos(Request $request, $id){
        if($request->ajax()){
            $codigos = CatColonia::codigos($id);
            return response()->json($codigos);
        }
    }

    public function getCodigos2(Request $request, $id){
        if($request->ajax()){
            $codigos = CatColonia::codigos2($id);
            return response()->json($codigos);
        }
    }

//aqui sigue la llave de clase
}
