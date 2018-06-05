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
        $data['error'] = null;
        \DB::beginTransaction();
        try {
            $parteCuerpo = CedulaPartesCuerpo::create([
                'posicion' 			        => $request->input('idPosicion'),
                'idTipoCuerpo' 		        => $request->input('idTipo'),
                'idColoresCuerpo'	        => $request->input('idColor'),
                'idTamanoCuerpo'	        => $request->input('idTamano'),
                'observaciones' 	        => $request->input('observaciones'),
                'idPartesCuerpo'            => $request->input('idParteCuerpo'),
                'otraParticularidad'        => $request->input('otraidParticularidad'),
                'otraModificacion'          => $request->input('otraidModificacion'),
                'otroTipo'                  => $request->input('otroTipo'),
                'otroColor'                 => $request->input('otroColor'),
                'idPersonaDesaparecida'     => $request->input('idDesaparecido')
            ]);

            foreach ($request->input('idParticularidad') as $particularidad) {
                PivotSubPartiCuerpo::create(['idCedulaPartesCuerpo' => $parteCuerpo->id, 'idParticularidades' => $particularidad]);
            }

            foreach ($request->input('idModificacion') as $modificacion) {
                PivotSubModiCuerpo::create(['idCedulaPartesCuerpo' => $parteCuerpo->id, 'idModificaciones' => $modificacion]);
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
