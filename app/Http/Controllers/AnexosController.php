<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anexos;

class AnexosController extends Controller
{
    
    public function store(Request $request)
        {
            
            $imageName = request()->file->getClientOriginalName();
            request()->file->move(public_path('upload'), $imageName);
           
        	$idDesaparecido = request()->idDesaparecido;
        	$tipoAnexo = request()->tipoAnexo;
        	// dd($idDesaparecido);
        	//$carpeta = rand ( int 0, int 1000 )
        	$carpeta = '../public/upload/'.$idDesaparecido.'/';
        	$ruta ='/upload/'.$idDesaparecido.'/'.$imageName;
         	//almaceno en BD
        		
        	//termina metodo de almacenar


				if (!file_exists($carpeta)) {
				    mkdir($carpeta, 0777, true);
			
							$imagen = Anexos::create([
							'tipoAnexo' 			=> $tipoAnexo,
							'ruta' 					=> $ruta,
							'idDesaparecido' 		=> $idDesaparecido,
							]);
				   response()->json(['uploaded' => '../public/upload/'.$idDesaparecido.'/'.$imageName]);
				}
				else {

				$imagen = Anexos::create([
							'tipoAnexo' 			=> $tipoAnexo,
							'ruta' 					=> $ruta,
							'idDesaparecido' 		=> $idDesaparecido,
							]);
					return response()->json(['uploaded' => '../public/upload/'.$idDesaparecido.'/'.$imageName]);

				}

				dd("no paso nada");


				            
            
    }




}
