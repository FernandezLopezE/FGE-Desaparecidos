<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class InicioController extends Controller
{
	public function index()
	{			
		Session::put('idFiscal', '1');
		Session::put('fiscalNombres', 'FULANITO');
		Session::put('fiscalPrimerAp', 'SANCHEZ');
		Session::put('fiscalSegundoAp', 'MERENGANO');		
		Session::put('fiscalCargo', 'FISCAL 2DA ESP. EN LA INV. DE DELITOS DE VIOLENCIA CONTRA LA FAMILIA CONTRERAS');
		Session::put('fiscalRegion', 'XALAPA');
		Session::put('nombre', 'SELENE PATRICIA');
		Session::put('apellido1', 'GARCÍA');
		Session::put('apellido2', 'ROMAN');
		Session::put('parentesco', 'HERMANO/A');
		Session::put('identificacion', 'CREDENCIAL PARA VOTAR');
		Session::put('nacionalidad', 'MEXICANA');
		Session::put('numIdentificacion', '375937502859');
		Session::put('domicilio', 'CALLE BUGAMBILIAS M26 LOTE 12');
		Session::put('identificacion', 'CREDENCIAL PARA VOTAR');
		Session::put('numExt', 'S/N');
		Session::put('numInt', 'S/N');
		Session::put('estado', 'Veracruz');
		Session::put('municipio', 'POZA RICA');
		Session::put('localidad', 'ALGUNA');
		Session::put('colonia', 'VILLA DE LAS FLORES');
		Session::put('cp', '914567');
		Session::put('delegacion', 'POZA RICA');
		Session::put('tipoTel', 'CELULAR');
		Session::put('lada', '+52');
		Session::put('telefono', '7828199855');
		Session::put('celular', '');
		Session::put('correo', 'NO TIENE');
		Session::put('personas', [['nombre' => 'SELENE PATRICIA',
						'primerAp' => 'GARCÍA', 
						'segundoAp' => 'ROMAN', 
						'parentesco' => 'MADRE', 
						'otroParen '=> '', 
						'nacionalidad' => 'MEXICANA', 
						'documento' => 'CREDENCIAL DE ELECTOR', 
						'otroDocumento' => '',
						'numDocIdenti' => '375937502859',
						'tipoDirec' => 'TRABAJO',
						'calle' => 'CALLE BUGAMBILIAS M26 LOTE 12',
						'numExt' => 'S/N',
						'numInt' => 'S/N',
						'estado' => 'Veracruz',
						'municipio' => 'POZA RICA',
						'localidad' => 'ALGUNA',
						'colonia' => 'VILLA DE LAS FLORES',
						'cp' => '914567',
						'tipoTel' => 'CELULAR',
						'lada' => '+52',
						'telefono' => '7828199855',
						'ext' => '',
						'email' => 'NO TIENE',
						'informante' => '1',
						'autorizado' => '1',
						'hecho' => 'Refiere la entrevistada que el día 2 de enero del 2017, a las 9 de la noche aproximadamente su hija Briseida le dijo que saldría a lavar un poco de ropa al patio exterior de la casa, y pasado unos 20 o 30 minutos salió a verla pero ya no la encontró, buscándola por toda la colonia donde vive junto con su esposo, siendo avisados eso de las 11 de la noche por un sujeto de nombre Omar X que la menor se había ido a México con Luis Fernando vecino de la colonia.']]);
		Session::put('hecho', 'Refiere la entrevistada que el día 2 de enero del 2017, a las 9 de la noche aproximadamente su hija Briseida le dijo que saldría a lavar un poco de ropa al patio exterior de la casa, y pasado unos 20 o 30 minutos salió a verla pero ya no la encontró, buscándola por toda la colonia donde vive junto con su esposo, siendo avisados eso de las 11 de la noche por un sujeto de nombre Omar X que la menor se había ido a México con Luis Fernando vecino de la colonia.');


		/*$datosMes = \DB::table('desaparecidos_cedula_investigacion as dp')
            ->join('cat_complexion as cc','cc.id','=','dp.idComplexion')
            ->join('cat_color_piel as ccp','ccp.id','=','dp.idColorPiel')
            ->select('dp.estatura',
                                'dp.peso',
                                'cc.nombre as complexion',
                                'ccp.nombre as piel',
                                'dp.idComplexion',
                                'dp.idColorPiel')
            ->where('dp.id',$idExtraviado)
            ->get();*/
            \DB::statement('SET lc_time_names = "es_ES"');
            $datosMes = \DB::table('desaparecidos_cedula_investigacion')
                 ->select(\DB::raw('count(id) as total'), \DB::raw('DATE_FORMAT(created_at, "%M") as mes'),\DB::raw('DATE_FORMAT(created_at, "%m") as mes_numero'))
                 ->groupBy(\DB::raw('DATE_FORMAT(created_at, "%M")'),\DB::raw('DATE_FORMAT(created_at, "%m")'))
                 ->orderBy(\DB::raw('DATE_FORMAT(created_at, "%m")'))
                 ->get();
                 //dd($datosMes);

            function random_color_part() {
			    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
			}

			function random_color() {
			    return random_color_part() . random_color_part() . random_color_part();
			}

			//dd($datosMes);

			if(count($datosMes) == 0){
				$etiqueta[] = ["SIN INFORMACIÓN"];
            	$total[] =null;
            	$colores[] ="#".random_color();
			}else{
				foreach ($datosMes as $key => $value) {
            	
	            	$etiqueta[] = $value->mes;
	            	$total[] = $value->total;
	            	$colores[] ="#".random_color();
	            }
			}
			
			
         $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels($etiqueta)
        ->datasets([
            [
                "label" => "Total de personas no localizadas por mes.",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $total,
            ]
        ])
        ->options([]);

		/*$chartjs = app()->chartjs
        ->name('pieChartTest')
        ->type('doughnut')
        ->size(['width' => 400, 'height' => 200])
        ->labels($etiqueta)
        ->datasets([
            [
                'backgroundColor' => ["#db191c", "#cd501c", "#30613f", "#5db7e1", "#eef34d", "#4c98df", "#41f2c4", "#0cb222", "#4e48b0", "#e3a4b1", "#34d536", "#d56bfd"],
                'hoverBackgroundColor' => ["#db191c", "#cd501c", "#30613f", "#5db7e1", "#eef34d", "#4c98df", "#41f2c4", "#0cb222", "#4e48b0", "#e3a4b1", "#34d536", "#d56bfd"],
                'data' => $total,
            ]
        ])
        ->options([]);*/

		return view('inicio', compact('chartjs','colores'));

		

		//return view('inicio');
	}
}
