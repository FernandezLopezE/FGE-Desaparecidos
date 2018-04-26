<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Cedula;
use App\Models\Persona;
use App\Models\Desaparecido;
use App\Models\CatSenasParticulares;
use App\Models\CatSenasParticularesUbicaciones;
use DB;

class SenasParticularesController extends Controller
{
    public function show_senas_particulares($idCedula)
    {
        $cedula = Cedula::find($idCedula);
        $senasParticulares = \App\Models\CatSenasParticulares::all()->pluck('nombre','id');
        $senasParticularesUbica = \App\Models\CatSenasParticularesUbicaciones::all()->pluck('nombre','id');
        $nombreTamano = \App\Models\CatTamanoDiente::all()->pluck('nombreTamano','id');
        
        return view('desaparecidos.form_senas_particulares', [                        
                        'senasParticulares' => $senasParticulares,
                        'senasParticularesUbica' => $senasParticularesUbica,
                        'cedula' => $cedula,
                        'nombreTamano' => $nombreTamano
                    ]);
    }

    public function store_senas(Request $request)
    {
    	DB::table('cedula_cat_senas')-> insert([
    		'idCatsenas' => $request->input('senaP'),
    		'cantidad' => $request->input('cantidad'),
    		'idCatsenasParticulares' => $request->input('ubicacion'),
    		'caracteristicas' => $request->input('caracteristicas'),
    		'idCedula' => $request->input('idCedula'),
    	]);
    	return response()->json('se inserto');
    }
}