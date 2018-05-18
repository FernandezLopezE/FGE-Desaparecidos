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
		
		$mime = $request->file('archivo')->getMimeType();
		$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
		$fileName = uniqid().'.'.$extension;
		$path = "upload";

		\Storage::disk('local')->put('/vestimenta/'.$fileName,  \File::get($request->file('archivo')));

		$vestimenta = Prenda::create([
			'path' 				=> '/vestimenta/'.$fileName,
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

	public function postSave()
	{
	    if(!\Input::file("file"))
	    {
	        return redirect('uploads')->with('error-message', 'File has required field');
	    }
	 
$mime = \Input::file('file')->getMimeType();
$extension = strtolower(\Input::file('file')->getClientOriginalExtension());
$fileName = uniqid().'.'.$extension;
$path = "files_uploaded";
	 
	    switch ($mime)
	    {
	        case "image/jpeg":
	        case "image/png":
	        case "image/gif":
	        case "application/pdf":
	            if (\Request::file('file')->isValid())
	            {
	                \Request::file('file')->move($path, $fileName);
	                $upload = new Upload();
	                $upload->filename = $fileName;
	                if($upload->save())
	                {
	                    return redirect('uploads')->with('success-message', 'File has been uploaded');
	                }
	                else
	                {
	                    \File::delete($path."/".$fileName);
	                    return redirect('uploads')->with('error-message', 'An error ocurred saving data into database');
	                }
	            }
	        break;
	        default:
	            return redirect('uploads')->with('error-message', 'Extension file is not valid');
	    }
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
		//
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
