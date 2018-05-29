<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anexos;

class AnexosController extends Controller
{
    
    public function store(Request $request)
        {
            
            $imageName = request()->file->getClientOriginalName();
            
           
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
						request()->file->move(public_path($carpeta), $imageName);

							$imagen = Anexos::create([
							'tipoAnexo' 			=> $tipoAnexo,
							'nombre'				=> $imageName,
							'ruta' 					=> $ruta,
							'idDesaparecido' 		=> $idDesaparecido,
							]);
				  return response()->json(['uploaded' => '../public/upload/'.$idDesaparecido.'/'.$imageName]);
				}
				else {
					request()->file->move(public_path($carpeta), $imageName);

				$imagen = Anexos::create([
							'tipoAnexo' 			=> $tipoAnexo,
							'nombre'				=> $imageName,
							'ruta' 					=> $ruta,
							'idDesaparecido' 		=> $idDesaparecido,
							]);
					return response()->json(['uploaded' => '../public/upload/'.$idDesaparecido.'/'.$imageName]);

				}

			}


				            
            
    }




