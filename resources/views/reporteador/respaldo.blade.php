@extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
{!! HTML::style('personal/css/multiple-select.css') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
    
      section.range-slider {
    position: relative;
    width: 200px;
    height: 35px;
    text-align: center;
}

section.range-slider input {
    pointer-events: none;
    position: absolute;
    overflow: hidden;
    left: 0;
    top: 15px;
    width: 200px;
    outline: none;
    height: 18px;
    margin: 0;
    padding: 0;
}

section.range-slider input::-webkit-slider-thumb {
    pointer-events: all;
    position: relative;
    z-index: 1;
    outline: 0;
}

section.range-slider input::-moz-range-thumb {
    pointer-events: all;
    position: relative;
    z-index: 10;
    -moz-appearance: none;
    width: 9px;
}

section.range-slider input::-moz-range-track {
    position: relative;
    z-index: -1;
    background-color: rgba(0, 0, 0, 1);
    border: 0;
}
section.range-slider input:last-of-type::-moz-range-track {
    -moz-appearance: none;
    background: none transparent;
    border: 0;
}
  section.range-slider input[type=range]::-moz-focus-outer {
  border: 0;
}
</style>
	
@endsection


@section('content')

<nav>




</nav>

<div class="card border-success" id="divDependencias">
	<div class="card-header">
		<h5 class="card-title">Reporteador
		<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia">
	AGREGAR
</button>
		</h5>
	</div>
	<div class="card-body">	
	    <div class="card-body bg-white">
            <div class="row">
                <div class=" form-check col-lg-1">
                  
                     <input class="form-check-input" Value="H" type="checkbox" id="masc" > Hombre: 
                </div>
                <div class=" form-check col-lg-1">
                    
                     <input class="form-check-input" Value="M" type="checkbox" id="fem" > Mujer:
                </div>
                 <div class="form-group col-lg-4" id="div_idEstado">
             {!! Form::label ('','Edad de:',['class' => '']) !!}
	            <input  min="0" max="120" step="1" type="number" id="rng1">
            {!! Form::label ('','Hasta:',['class' => '']) !!}
                <input  min="0" max="120" step="1" type="number" id="rng2"> 
	         </div>
            </div>
        </div>
	    

	    
	     <div class="row" >
	        

	         <div class="col-lg-3"  id="infoCabello3">
                {!! Form::label ('idEstados','Estados:') !!}
                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'partiCabello','multiple' => 'multiple'] ) !!}
		    </div>
	     </div>
	     <imput type="button" class="btn btn-dark pull-right" id="range">Botón</imput>
        <imput type="button" class="btn btn-dark pull-right" id="filtros">Buscar</imput>
	     <br><br>

  
        
        

        
        
           <div id="tablaGen" >
          <table id="tableDependencias"
              data-search="true"
              data-toolbar="#toolbar"
              data-show-refresh="true"
              data-show-toggle="true"
              data-show-columns="true"
              data-sort-name="id_user"
              data-unique-id="id_user"
              data-sort-order="asc"
              data-show-export="true"
              data-pagination="true"
              data-search="true" > 

             <thead>
                <tr>
                    <th data-field="Nombres" 
                        data-sortable="true"></th>
                    <th data-field="Genero" 
                        data-sortable="true"></th>       
                    <th data-field="Edad" 
                        data-sortable="true"></th> 
                    <th data-field="Desaparición" 
                        data-sortable="true"></th>
                        <th data-field="Estado de origen" 
                        data-sortable="true"></th>
                </tr>
            </thead>
         </table>  
          
         
          
        </div>

	    
	    <br><br><br><br><br><br><br><br><br>
	 
	</div>
</div><hr>




	

@endsection

@section('scripts')
{!! HTML::script('personal/js/multiple-select.js') !!}
<script type="text/javascript">
    $('#partiCabello').multipleSelect({
            filter: true
        });
    // $('select').multipleSelect();
    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
        var CheckFem = $('#fem');
    
        var fem = "";

    console.log(masc);

$('#range').click(function(e){
    
    alert('Selected values: ' + $('#partiCabello').multipleSelect('getSelects'));
alert('Selected texts: ' + $('#partiCabello').multipleSelect('getSelects', 'text'));
    
    
		var rango = $('#rng1').val();
        var rango2 = $('#rng2').val();
    alert(rango+ ' a ' +rango2);
		});
 
    var tablaGen = $('#tablaGen');
    
   var table = $('#tableDependencias');
          var routeIndex = '{!! route('consultas.index') !!}';
    
    var formatCheckInformante = function(value, row, index){
			texto = '';
			if (row.sexo =='H') {
				texto = 'HOMBRE'
			}else{
                texto = 'MUJER'
            }

			return [texto].join('');
		}
    
     function btTable(dataString){
        console.log("LOS DATOS:");
    console.log(dataString);
    //alert("hiii");
table.bootstrapTable({			
            
            data: dataString,
			//url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados,
			columns: [{					
				field: 'nombre',
				title: 'Nombre',
			}, {					
				title: 'Género',
                formatter: formatCheckInformante
			}, {					
				field: 'edad',
				title: 'Edad de extravío',
			}, {					
				field: 'fecha',
				title: 'Desaparición',
			}, {					
				field: 'estado',
				title: 'Estado de origen',
			}]				
		})
}
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<__
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<__
    
   
    
      filtros.click(function(){
          
          var estados = $('#partiCabello').multipleSelect('getSelects');
          console.log('ids de estados:'+' ' + estados);
         // var quote_str =  "'" + str + "'";
          var rg = $('#rng1').val();
          var rg2 = $('#rng2').val();
          if (rg==''){
              rg=0
          }
          if (rg2==''){
              rg2=120
          }
          
          var fem =" ";
          var masc =" ";
       fem = $("input#fem:checked").val();      
      masc = $("input#masc:checked").val();
         //table.bootstrapTable('refresh');
          
          table.bootstrapTable("refresh", {
         data: dataString
              //url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados
    });
          
          
          var dataString = {
			    estados : $('#partiCabello').multipleSelect('getSelects'),
                fem : $("input#fem:checked").val(),     
                masc : $("input#masc:checked").val(),
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
			};
          console.log(dataString);
          $.ajax({
				type: 'POST',
				url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					//modalInformanteAgregar.modal('hide');
                    table.bootstrapTable('refresh');
                    //console.log(dataString)
                    console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados)
                    btTable(dataString);
					
                   // modalInformanteAgregar.find('form')[0].reset();
                    //modalInformanteAgregar.removeData('modal');
                    
				},
				error: function(data) {
					var errors = data.responseJSON;	
					$('.modal-body div.has-danger').removeClass('has-danger');
					$('.form-control-feedback').empty();
					$.each(errors.errors, function(key, value){					
						$('#div_'+key).addClass('has-danger');
						$('input#'+key).addClass('form-control-danger');
						$('#error_'+key).append(value);						
					});
				}
			});
          
          
      //console.log(masc)

          //console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados);
          
          
        tablaGen.show();

        console.log("entrando")
        });
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
		 
    
    
</script>
@endsection









 public function jsonDesaparecidosPersona(Request $request)
	{
		//{$cedulas = \DB::table('desaparecidos_cedula_investigacion')::all();
//        
//         $subs = \DB::table('desaparecidos_personas as desap')
//
//            ->select (\DB::raw('substr(desap.edadExtravio, 1,3)'))
//             ->where('tipoPersona','DESAPARECIDA')
//             ->get();
//        dd($subs);
//         $edad = \DB::table('desaparecidos_personas as desa')
//
//            ->select (\DB::raw('CAST ('$subs' AS SIGNED) '))
//             ->where('tipoPersona','DESAPARECIDA')
//             ->get();
        //$estados = "uno,dos,tres,cuatro,cinco";
        //$array = explode(",", $estados);}  
        // dd($request->ToArray());
        //$estados = Input::get('estados');
        $estados = $request->input('estados');
        $municipios = $request->input('municipios');
        $cPiel = $request->input('cPiel');
        $complexion = $request->input('complexion'); 
        $tipoCabello = $request->input('tipoCabello');
        $tipoBarba = $request->input('$tipoBarba');
        $masc = $request->input('masc');
        $fem = $request->input('fem');
        //-o-o-o-o-o-o-o-o-PESO-o-o-o-o-o-o-o-o-o-o-o-o
        if ($request->input('peso1') == '') {
            $peso1=0;
        }else{
            $peso1 = $request->input('peso1');
        }
        if ($request->input('peso2') == '') {
            $peso2=400;
        }else{
            $peso2 = $request->input('peso2');
        }
        //-o-o-o-o-o-o-o-o-ESTATURA-o-o-o-o-o-o-o-o-o-o-o-o
        if ($request->input('estatura1') == '') {
            $estatura1=0;
        }else{
            $estatura1 = $request->input('estatura1');
        }
        if ($request->input('estatura2') == '') {
            $estatura2=300;
        }else{
            $estatura2 = $request->input('estatura2');
        }
        //-o-o-o-o-o-o-o-o-EDAD-o-o-o-o-o-o-o-o-o-o-o-o
        if ($request->input('rg') == '') {
            $rg=0;
        }else{
            $rg = $request->input('rg');

        }
        if ($request->input('rg2') == '') {
            $rg2=120;
        }else{
            $rg2 = $request->input('rg2');

        }
        //-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-
//        {//dd($estados);
//        $consulta = \DB::table('persona')
//            ->whereIn('idEstadoOrigen', $estados)
//             ->get();
//        dd($consulta->toArray());}
        $desaparecidos = \DB::table('desaparecidos_personas as des')                           
    ->leftjoin('persona as p', 'des.idPersona', '=', 'p.id')
    ->leftjoin('desaparecidos_cedula_investigacion AS dci', 'dci.id', '=', 'des.idCedula')
    ->leftjoin('cat_estado AS ce', 'dci.idEstadoDesaparicion', '=', 'ce.id') 
    ->leftjoin('Cat_complexion AS cc', 'des.idComplexion', '=', 'cc.id')
    ->leftjoin('Cat_color_piel AS ccp', 'des.idColorPiel', '=', 'ccp.id')
    ->leftjoin('cat_municipio AS cm', 'dci.idMunicipioDesa', '=', 'cm.id', 'and', 'cm.idEstado', '=', 'dci.idEstadoDesaparicion')
    ->leftjoin('cat_nacionalidad AS cn', 'p.idNacionalidad', '=', 'cn.id')
    ->leftjoin('cedula_partes_cuerpo as cpc', 'cpc.idPersonaDesaparecida', '=', 'des.id')
    ->leftjoin('cat_tipos_cuerpo as ctc', 'cpc.idTipoCuerpo', '=', 'ctc.id')
    ->leftjoin('cat_partes_cuerpo as cpartes', 'cpc.idPartesCuerpo', '=', 'cPartes.id')
//                           { ->leftJoin('cat_nacionalidad as n', 'p.idNacionalidad', '=', 'n.id')
                            //->where('d.tipoPersona','DESAPARECIDA')
//            ->join('cat_estado AS ce', 'dd.idEstado', '=', 'ce.id')
//             'ce.id as idEstado',
//                     'ce.nombre as estado',
                       
                        //DB::raw('substr(id, 1, 4) as id')}
            ->select('des.id as id', \DB::raw('CONCAT(p.nombres, " ", ifnull(p.primerAp,"")," ",ifnull( p.segundoAp,""))AS nombre'), 'p.sexo as sexo',\DB::raw('substr(dci.desaparicionFecha, 1,10) as fecha'),'des.apodo as apodo',\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED) as edad'),'des.estatura as estatura','des.peso as peso','cc.id as idComplexion','cc.nombre as complexion','ccp.id as idCPiel','ccp.nombre as cPiel','ce.id as idEstado','ce.nombre as estado','cm.id as idMuni','cm.nombre as municipio','cn.nombre as nacionalidad','ctc.nombre as tipo')
            //{->where('des.edadExtravio', 'like', "$rg%")
                            //->where('des.edadExtravio', 'like', "$rg2%")
                            //->whereBetween('des.edadExtravio', [$rg, $rg2])}
                            
                            ->where('tipoPersona','DESAPARECIDA')
                            ->where('p.sexo',$masc)
                            ->whereBetween(\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED)'), [$rg, $rg2])
                            ->whereBetween(\DB::raw('CAST(des.estatura AS SIGNED)'), [$estatura1, $estatura2])
                            ->whereBetween(\DB::raw('CAST(des.peso AS SIGNED)'), [$peso1, $peso2])
                            ->when($estados, function ($q) use ($estados) {
                                return $q->whereIn('ce.id', $estados);
                            })
                            ->when($municipios, function ($q) use ($municipios) {
                                return $q->whereIn('cm.id', $municipios);
                            })
                            ->when($cPiel, function ($q) use ($cPiel) {
                                return $q->whereIn('des.idColorPiel', $cPiel);
                            })
                            ->when($complexion, function ($q) use ($complexion) {
                                return $q->whereIn('des.idComplexion', $complexion);
                            })
                            ->when($tipoCabello, function ($q) use ($tipoCabello) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoCabello);
                            })
                            ->when($tipoBarba, function ($q) use ($tipoBarba) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoBarba);
                            })
                            ->orWhere('p.sexo', $fem) 
                            ->where('tipoPersona','DESAPARECIDA')
                            ->whereBetween(\DB::raw('CAST(substr(des.edadExtravio, 1,3)AS SIGNED)'), [$rg, $rg2])
                            ->whereBetween(\DB::raw('CAST(des.estatura AS SIGNED)'), [$estatura1, $estatura2])
                            ->whereBetween(\DB::raw('CAST(des.peso AS SIGNED)'), [$peso1, $peso2])
                            ->when($estados, function ($q) use ($estados) {
                                return $q->whereIn('ce.id', $estados);
                            })
                            ->when($municipios, function ($q) use ($municipios) {
                                return $q->whereIn('cm.id', $municipios);
                            })
                            ->when($cPiel, function ($q) use ($cPiel) {
                                return $q->whereIn('des.idColorPiel', $cPiel);
                            })
                            ->when($complexion, function ($q) use ($complexion) {
                                return $q->whereIn('des.idComplexion', $complexion);
                            })
                            ->when($tipoCabello, function ($q) use ($tipoCabello) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoCabello);
                            })
                            ->when($tipoBarba, function ($q) use ($tipoBarba) {
                                return $q->whereIn('cpc.idTipoCuerpo', $tipoBarba);
                            })
            
                            //->where('des.edadExtravio', 'like', "$rg2%")
                            ->distinct()
                            ->get();
        
        //$desaparecidos = $desaparecidos->unique('idPersonaDesaparecida');

        //dd($desaparecidos->ToArray());
		return response()->json($desaparecidos);
	}












