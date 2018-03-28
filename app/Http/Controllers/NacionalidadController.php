<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatNacionalidad;
use DB;

class NacionalidadController extends Controller
{
    public function find(){
   		$nacion = DB::table('cat_nacionalidad')->pluck('nombre','id');
   		$escolar = DB::table('cat_escolaridad')->pluck('nombre','id');
        return view('desaparecidos.form', compact($nacion, $escolar));
    }

    
}
