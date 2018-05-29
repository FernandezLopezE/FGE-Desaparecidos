<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;
use App\Http\Requests\VestimentaRequest;

class VestimentaController extends Controller
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
	public function store(VestimentaRequest $request)
	{
		$vestimenta = array(
			'material' 			=> $request->input('material'),
			'talla' 			=> $request->input('talla'),
			'diseno' 			=> $request->input('diseno'),
			'idMarca' 			=> $request->input('idMarca'),
			'idColor' 			=> $request->input('idColor'),
			'idVestimenta' 		=> $request->input('idVestimenta'),
			'idPrenda' 			=> $request->input('idPrenda'),
		);

		if($request->input('method') == 'PUT'){
			$data = Prenda::find($request->input('idPrendaDesaparecido'));
			if(is_null($request->file('archivo')))
	    	{	    			    		
	    		$vestimenta['path'] = $data->path;
			} else {
				if($data->path != 'images/vestimenta_sin_imagen.png'){
					\Storage::disk('local')->delete($data->path);
				}				
				$mime = $request->file('archivo')->getMimeType();
				$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
				$fileName = uniqid().'.'.$extension;
				$path = "upload/vestimenta/".$fileName;
				\Storage::disk('local')->put('upload/vestimenta/'.$fileName,  \File::get($request->file('archivo')));
				$vestimenta['path'] = $path;
			}
			
			$vestimenta = Prenda::find($request->input('idPrendaDesaparecido'))->update($vestimenta);
		} else {
			$vestimenta['idDesaparecido'] = $request->input('idDesaparecido');
			if(is_null($request->file('archivo')))
	    	{
	    		$vestimenta['path'] = "images/vestimenta_sin_imagen.png";
			} else {
				$mime = $request->file('archivo')->getMimeType();
				$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
				$fileName = uniqid().'.'.$extension;
				$path = "upload/vestimenta/".$fileName;
				\Storage::disk('local')->put('upload/vestimenta/'.$fileName,  \File::get($request->file('archivo')));	
				$vestimenta['path'] = $path;		
			}

			$vestimenta = Prenda::create($vestimenta);
		}

		return response()->json($vestimenta);

		/*	if(is_null($request->file('archivo')))
	    	{
	    		//$path = "images/vestimenta_sin_imagen.png";
			} else {
				//\Storage::disk('local')->($prenda->path);
				$mime = $request->file('archivo')->getMimeType();
				$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
				$fileName = uniqid().'.'.$extension;
				$path = "upload/vestimenta/".$fileName;
				\Storage::disk('local')->put('/vestimenta/'.$fileName,  \File::get($request->file('archivo')));			
			}

			$vestimenta = Prenda::find($request->file('idPrendaDesaparecido'))->create([
				'path' 				=> $path,
				'material' 			=> $request->input('material'),
				'talla' 			=> $request->input('talla'),
				'diseno' 			=> $request->input('diseno'),
				'idMarca' 			=> $request->input('idMarca'),
				'idColor' 			=> $request->input('idColor'),
				'idVestimenta' 		=> $request->input('idVestimenta'),
				'idPrenda' 			=> $request->input('idPrenda'),
				'idDesaparecido' 	=> $request->input('idDesaparecido')
			]);


		} else {

			if(is_null($request->file('archivo')))
	    	{
	    		$path = "images/vestimenta_sin_imagen.png";
			} else {
				$mime = $request->file('archivo')->getMimeType();
				$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
				$fileName = uniqid().'.'.$extension;
				$path = "upload/vestimenta/".$fileName;
				\Storage::disk('local')->put('/vestimenta/'.$fileName,  \File::get($request->file('archivo')));			
			}

			$vestimenta = Prenda::create([
				'path' 				=> $path,
				'material' 			=> $request->input('material'),
				'talla' 			=> $request->input('talla'),
				'diseno' 			=> $request->input('diseno'),
				'idMarca' 			=> $request->input('idMarca'),
				'idColor' 			=> $request->input('idColor'),
				'idVestimenta' 		=> $request->input('idVestimenta'),
				'idPrenda' 			=> $request->input('idPrenda'),
				'idDesaparecido' 	=> $request->input('idDesaparecido')
			]);
		}

		return response()->json($vestimenta);*/


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($idCedula)
	{
		$desaparecido = \App\Models\Desaparecido::find($idCedula);

		$vestimentas		= \App\Models\CatVestimenta::all()->pluck('nombre','id');
		$prendas 			= \App\Models\CatPrenda::all()->pluck('nombre','id');
		$accesoriosObjetos	= \App\Models\CatAccesorioObjeto::all()->pluck('nombre','id');
		$tiposCalzados		= \App\Models\CatTiposCalzados::all()->pluck('nombre','id');
		$marcas				= \App\Models\CatMarca::all()->pluck('nombre','id');
		$colores 			= \App\Models\CatCalzadoColor::all()->pluck('nombre','id');

		return view('vestimenta.index',
					['vestimentas' => $vestimentas,
					 'prendas' => $prendas,
					 'tiposCalzados' => $tiposCalzados,
					 'marcas' => $marcas, 
					 'accesoriosObjetos' => $accesoriosObjetos, 
					 'colores' =>$colores, 
					 'desaparecido' => $desaparecido
					 ]);
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
		dd($request->input('material'));
		$prenda = Prenda::find($id);
		if(is_null($request->file('archivo')))
    	{
    		$path = $prenda->path;
		} else {
			//\Storage::disk('local')->($prenda->path);
			$mime = $request->file('archivo')->getMimeType();
			$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
			$fileName = uniqid().'.'.$extension;
			$path = "upload/vestimenta/".$fileName;
			\Storage::disk('local')->put('/vestimenta/'.$fileName,  \File::get($request->file('archivo')));			
		}

		$vestimenta = Prenda::find($id)->create([
			'path' 				=> $path,
			'material' 			=> $request->input('material'),
			'diseno' 			=> $request->input('diseno'),
			'idMarca' 			=> $request->input('idMarca'),
			'idColor' 			=> $request->input('idColor'),
			'idVestimenta' 		=> $request->input('idVestimenta'),
			'idPrenda' 			=> $request->input('idPrenda'),
			'idDesaparecido' 	=> $request->input('idDesaparecido')
		]);

		return response()->json($vestimenta);
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
