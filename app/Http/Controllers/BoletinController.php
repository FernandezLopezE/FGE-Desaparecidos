<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class BoletinController extends Controller
{
    
    public function show($id)
    {        

            $datos = \App\Models\Desaparecido::where('idCedula', $id)
                                            ->where('tipoPersona', 'DESAPARECIDA')
                                            ->limit(1)
                                            ->get();
        
        $desaparecido = \App\Models\Desaparecido::find($datos[0]->id);
        $view = view('desaparecidos.boletin', compact('desaparecido'))->render();
        $pdf =\App::make('dompdf.wrapper');
        $pdf -> loadHTML($view);
        
        
        $pdf->setPaper('A5');

        return $pdf->stream('formato_'.time().'.pdf');

        //return view('desaparecido.show',compact('desaparecido'));

        //dd($desaparecido);
        //$h = $request['nombre'];
        //return response()->json($h);

        //return $id;
                //dd("Aqui toy");
       // $pdf->stream('boletin');
 // $pdf = PDF::loadView(['text'=>'desaparecidos.boletin'], $request->all());
       // dd("ya entre aqui");
            //return $pdf->download('MiVistaContact.pdf');
         
           
    }

	
}
