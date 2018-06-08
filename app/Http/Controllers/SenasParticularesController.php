<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CedulaPartesCuerpo;
use App\Models\PivotSubPartiCuerpo;
use App\Models\PivotSubModiCuerpo;

class SenasParticularesController extends Controller
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
		define('DS', DIRECTORY_SEPARATOR);        
		if(is_null($request->file('archivo')))
		{
			if($request->input('method') == 'PUT'){            
				$rutaImagen = "no tiene datos y es por PUT";// Se queda con la imagen anterior.
			} else {
				$rutaImagen = "images".DS."vestimenta_sin_imagen.png";
			}
		} else {
			if($request->input('method') == 'PUT'){
				if($data->path != 'images'.DS.'vestimenta_sin_imagen.png'){
					\Storage::disk('local')->delete($data->path);
				}
			}				
			$mime = $request->file('archivo')->getMimeType();
			$extension = strtolower($request->file('archivo')->getClientOriginalExtension());
			$fileName = uniqid().'.'.$extension;
			$path = "upload".DS."descripcion_fisica".DS.$fileName;
			\Storage::disk('local')->put($path,  \File::get($request->file('archivo')));
			$rutaImagen = $path;           
		}
		
		($request->input('idPosicion') == 'null') ? null : $request->input('idPosicion') ;
		$dataPartes['posicion']				= ($request->input('idPosicion') == 'null') ? null : $request->input('idPosicion') ;
		$dataPartes['idTipoCuerpo']			= ($request->input('idTipo') == 'null') ? null : $request->input('idTipo') ;
		$dataPartes['idColoresCuerpo']		= ($request->input('idColor') == 'null') ? null : $request->input('idColor') ;
		$dataPartes['idTamanoCuerpo']	    = ($request->input('idTamano') == 'null') ? null : $request->input('idTamano') ;
		$dataPartes['observaciones'] 	    = ($request->input('observaciones') == 'null') ? null : $request->input('observaciones') ;
		$dataPartes['otraParticularidad']	= ($request->input('otraidParticularidad') == 'null') ? null : $request->input('otraidParticularidad') ;
		$dataPartes['otraModificacion']		= ($request->input('otraidModificacion') == 'null') ? null : $request->input('otraidModificacion') ;
		$dataPartes['otroTipo']				= ($request->input('otroTipo') == 'null') ? null : $request->input('otroTipo') ;
		$dataPartes['otroColor']			= ($request->input('otroColor') == 'null') ? null : $request->input('otroColor') ;
		$dataPartes['imagen']				= $rutaImagen;
		
		$data['error'] = null;
		\DB::beginTransaction();
		try {
			if($request->input('method') == 'PUT'){
				$parteCuerpo = CedulaPartesCuerpo::find($request->input('idParteCuerpo'))->update($dataPartes);
			} else {
				$dataPartes['idPartesCuerpo']			= $request->input('idParteCuerpo');
				$dataPartes['idPersonaDesaparecida']	= $request->input('idDesaparecido');
				$parteCuerpo = CedulaPartesCuerpo::create($dataPartes);
			}
			
			PivotSubPartiCuerpo::where('idCedulaPartesCuerpo', $request->input('idParteCuerpo'))->delete();			
			$eliminar = PivotSubModiCuerpo::where('idCedulaPartesCuerpo', $request->input('idParteCuerpo'))->delete();

			$particularidades = ($request->input('idParticularidad') == 'null') ? array() : explode(",", $request->input('idParticularidad')) ;
			foreach ($particularidades as $particularidad) {
				if(!empty($particularidad)){
					PivotSubPartiCuerpo::create(['idCedulaPartesCuerpo' => $parteCuerpo->id, 'idParticularidades' => $particularidad]);
				}				
			}

			$modificaciones = ($request->input('idModificacion') == 'null') ? array() : explode(",", $request->input('idModificacion')) ;			
			foreach ($modificaciones as $modificacion) {
				if(!empty($modificacion)){
					PivotSubModiCuerpo::create(['idCedulaPartesCuerpo' => $parteCuerpo->id, 'idModificaciones' => $modificacion]);
				}
			}

			\DB::commit();
			$data['success'] = true;
		} catch (\Exception $e) {
			$data['success'] = false;
			$data['error'] = $e->getMessage();
			\DB::rollback();
		}
		
		if ($data['success']) {
			return response()->json($data);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{       

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
