<?php

namespace App\Http\Controllers;

//use Dompdf\Dompdf;
//use Mpdf\Mpdf;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Desaparecido;
use App\Models\CatDependencias;
use App\models\Cedula;


class MailController extends Controller
{
   
    public function index()
    {
        //
    }

    public function show($idCedula)
    {
        $cedula = Cedula::find($idCedula);
            $combo =CatDependencias::all()->pluck('nombre','id');
        

            //$cedula = \App\Models\Cedula::find(2);
           
            //$cedula = \App\Models\Cedula::find($id);
            $correosExternos = CatDependencias::all();
            return view('desaparecidos.contacto',[

                    'cedula' => $cedula,
                    'correosExternos' => $correosExternos ,
                    'combo' => $combo,

            ]);                
        
    }
    





        //esta funcion envia correo electronico  a partir de una vista
    

    public function envioDocumentos(Request $request)
        {

          $dependencias=($request['datos']);//aqui traigo el nombre del documento y el nombre de la dependencia
          //dd($request);
    
         $nombreDepRequest= $dependencias;
         
        // $nombreDocumento = $dependencias[0];
          
          $valoresChecks= ($request['valoresChecks']); //aqui traigo el arreglo de los checks que fueron seleccionados
          $countDep= count($dependencias);//cuento el numnero de dependencias o correos que enviare
         // dd($countDep);
          $countChecks= count($valoresChecks);//cuentos cuantos checks fueron checados
       

              for($i=0; $i<$countChecks;$i++){
                    $destinatarioDatos =  \DB::table('cat_dependencias AS cd')
                            ->select('cd.id as id',
                                'cd.nombre as nombre',
                                'cd.correo as correo')
                            ->where('cd.id', $valoresChecks[$i])
                            ->get();
                            //dd($valoresChecks[$i]);
                            $correo=($destinatarioDatos[0]->correo);
                            $nombreDepConsulta= $destinatarioDatos[0]->nombre;
                            
                            

                            for($a=0; $a<$countDep;$a++){
                                if($nombreDepConsulta == $nombreDepRequest[$a][1]){
                                    $nombreDocumento =($nombreDepRequest[$a][0]);
                                              //  dd($nombreDocumento);
                                  // dd ($nombreDepConsulta. " ==" .$nombreDepRequest[$a][1]);
                                         Mail::send('emails.contact', $request->all(), function($msj) use($correo, $nombreDocumento){
                                                        $msj->subject('Correo enviado');
                                                        //$msj->to('alejandro.f.toledo@gmail.com');

                                                        $msj->setTo( $correo);

                                                        $msj->attach('./'.$nombreDocumento);
                                                });
                                                Session::flash('message','Mensaje enviado correctamente');
                                               // return Redirect::to('/email');
                                            
                                            }

                                else{
                                  // dd ($nombreDepConsulta. " ==" .$nombreDepRequest[$a][1]);
                                }

                            }

              } 
              //return Redirect::to('/email');


        }

    public function store (Request $request){
       // dd($request->toArray());

            dd("ya entre aca en mail controller");
        
        $nombreArchivo = $request->file('file')->getClientOriginalName();
        
        $correosArray=($request['idCorreosExternos']);
        //dd($correosArray);
        //return response()->json($h);
        //dd($correosArray);
        $longitudArray = (count($correosArray));

    

        $listaCorreos=array();

                    foreach($correosArray as $idCorreo){
                $getCorreo =\App\Models\CatCorreosExternos::where('id', $idCorreo)->pluck('correo');
                $listaCorreos[] = $getCorreo[0];                
            }

        $file = $request->file('file');
        //dd($file);
        $contenido = "hola perro";
        //Mail::send('emails.contact', $request->all(), function($msj) use ($file , $asunto){
        Mail::send('emails.contact', $request->all(), function($msj) use($listaCorreos, $nombreArchivo){
                $msj->subject('PRUEBA DE MULTI ENVÍO');
                //$msj->to('alejandro.f.toledo@gmail.com');

                $msj->setTo( $listaCorreos);

                $msj->attach('./upload/'.$nombreArchivo);
        });
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/index_mail');
    }
    
        //este genera un documento, apartir de una vista
   /* public function pdf(Request $request)
    {        
        $h = $request['nombre'];
        //return response()->json($h);
        dd("ya entre aqui");

           

            $pdf = PDF::loadView('emails.contact', $request->all());

            //return $pdf->download('MiVistaContact.pdf');
             return $pdf->stream('pdf');
           
    }*/


     public function store_dependencia(Request $request)
    {        


       
        $familiar = CatDependencias::create([
            'nombre'               => $request->input('nombre'),
            'correo'               => $request->input('correo')
           
        ]);

        $estatus = ($familiar) ? true : false ;
        return response()->json($estatus);
    }

    public function generar_boletin(Request $request)
    {   
        $id = $request['idPersona'];

    //  $id = $idPersona;
        


        
        $desaparecido = Desaparecido::find($id);

        $view = view('desaparecidos.boletin', compact('desaparecido'))->render();
        //return $view;
        $pdf =\App::make('dompdf.wrapper');

        $pdf -> loadHTML($view);
        //return $id;
                //dd("Aqui toy");
        $pdf->stream('boletin');
        
            return "ya men";
/*
        //$h = $request['nombre'];
        //return response()->json($h);
         $html = view('pdf.index',array('QRCode'=>$img_b64,'Folio'=>$folio))->render();
            require_once("DomPdf/dompdf_config.inc.php");

                 $mpdf->WriteHTML($html);

                $dompdf = new DOMPDF();
                $dompdf->load_html(['text'=>'desaparecidos.boletin'], $request->all());
                $dompdf->render();
                $dompdf->stream("sample.pdf");

           

           // $pdf = PDF::loadView(['text'=>'desaparecidos.boletin'], $request->all());
            dd("ya entre aqui");
            //return $pdf->download('MiVistaContact.pdf');
             return $pdf->stream('pdf');*/
           
    }

    public function send()
        {
            Mail::send(['text'=>'emails.contact'],['name','Lex'], function($message){
                $message->to('alejandro.f.toledo@gmail.com', 'Para ti men')->subjeCt('Este es un test');
                $message->from('alejandro.f.toledo@gmail.com');
            });
        }
    public function show_boletin()
    {
        return view('desaparecidos.boletin');
    }

    
    public function getDependencias(){

        $dependencias = \DB::table('cat_dependencias as cce')
                        ->select('cce.id',
                                'cce.nombre',
                                'cce.correo')
                        ->get();


        return response()->json($dependencias);   

    }

}