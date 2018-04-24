<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatNacionalidad;





class LadaController extends Controller
{
     public function index()
     {
    	$nacionalidades = CatNacionalidad::pluck('lada','id');
    }
	public function getLadas(Request $request, $id)
	{
		//return $id;
		if($request->ajax())
		{
			$ladas = CatNacionalidad::find($id);
			return response()->json($ladas);
		}
	}  
}
