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
	
	
                     ////-|-|-|-|-|-||-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|--||-|-|--|-|-|-|-|-|-|-|-|-|-|-|-|-|-|
                     ______________________________________________________________________________________________

                     ////-|-|-|-|-|-||-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|--||-|-|--|-|-|-|-|-|-|-|-|-|-|-|-|-|-|
 
 
 
 
 
 
 
 @extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
{!! HTML::style('personal/css/multiple-select.css') !!}
{!! HTML::style('personal/css/bootstrap-table-filter-control.css') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}


.class2:hover {
    transform:scale(1.5);
    
}

    
</style>
	
@endsection

@section('content')

<nav>

</nav>

<div class="card border-success" id="divDependencias">
	<div class="card-header">
		<h5 class="card-title">Buscador
		</h5>
	</div>	
  <div class=""> 
	<!--
    <p >
        <imput type="button" class="btn btn-dark pull-right" id="filtrosTodos">Buscar todos los registros</imput>     
    </p> <br>
-->
      
     
      <div class="card-body bg-white">                              
        <div class="row">
               &nbsp;&nbsp;Datos generales                        
          </div>    <hr>    
            <div class="row" id="idDatosGral">               
               <div class="col-lg-2" >
                    <div class=""> 
                          <div class=""  id="campoGenero"> 
                            <div>
                                {!! Form::label ('comple','Géneros') !!}<br>
                                {!! Form::select ('comple', $generos, '',['class' => '', 'id' => 'generos','multiple' => 'multiple'] )!!}
                            </div>
                            </div>      
                      </div>
                    </div>
         
               
               <div class="col-lg-5" >
                  <div class=""  id="" >                               
                      <div class="" id="">
                          {!! Form::label ('','Fecha de desaparición  ',['class' => '']) !!}
                          <div class="input-group">                              
                          <div class="input-group-prepend">    
                            {!! Form::label ('','Desde, hasta:  ',['class' => 'input-group-text']) !!}<br>
                          </div>
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaDesaparicion1',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!} 
                      {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaDesaparicion2',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!}                         
                        </div>
                    </div>     
                  </div>
              </div>
               
               <div class="col-lg-5" >
                  <div class=""  id="" >                               
                      <div class="" id="div_idEstado">
                          {!! Form::label ('','Fecha de Reporte  ',['class' => '']) !!}
                          <div class="input-group">                              
                          <div class="input-group-prepend">    
                            {!! Form::label ('','Desde, hasta:  ',['class' => 'input-group-text']) !!}<br>
                          </div>
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaReporte1',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!} 
                      {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaReporte2',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!}                        
                        </div>
                    </div>     
                  </div>
              </div>
           </div> <!-- div class row end -->
            
            <br><div class="col-lg-6">
                {!! Form::label ('comple','Filtros de búsqueda') !!}<br>
            {!! Form::select ('comple', $tiposFiltros, '',['class' => '', 'id' => 'filtrosAvanzados','multiple' => 'multiple'] )!!}
            <br><br>
            </div> 
            
         <div class="row">
                &nbsp;&nbsp;Ubicación                        
          </div> <hr>      
         <div class="row" id="idUbicación">
             <div class="col-lg-4">
                {!! Form::label ('idEstados','Nacionalidades:') !!} 
                {!! Form::select('idEstados',$nacionalidades, '', ['class' => '', 'id' => 'nacionalidades','multiple' => 'multiple'] ) !!}
             </div>
             <div class="col-lg-4">
                {!! Form::label ('idEstados','Estados:') !!} 
                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'estados','multiple' => 'multiple'] ) !!}
             </div>
            <div class="col-lg-4">
                {!! Form::label ('idEstados','Municipios:') !!} 
                {!! Form::select('idEstados',$municipios, '', ['class' => '', 'id' => 'municipios','multiple' => 'multiple'] ) !!}
            </div>
          </div>
         
         <br><div class="row">
                &nbsp;&nbsp;<b>Descripción física del desaparecido </b>                       
          </div> <hr>
          <DIV id="idDesFisica">       
          <div class="row" >
              <div class="col-lg-4" >
                  <div class=""  id="campoEdad" >                               
                      <div class="" id="div_EdadDes">
                          {!! Form::label ('','Edad de desaparición  ',['class' => '']) !!}
                          <div class="input-group">                              
                          <div class="input-group-prepend">    
                            {!! Form::label ('','Desde, hasta:  ',['class' => 'input-group-text']) !!}<br>
                          </div>
                            {!! Form::number('count','value', ['min' => '0' ,'max' => '120' ,'class' => 'form-control', 'id' => 'rng1']) !!} 
                            {!! Form::number('count','value', ['min' => '0' ,'max' => '120' ,'class' => 'form-control', 'id' => 'rng2']) !!}
                        </div>
                    </div>     
                  </div>
              </div>
              
             <div class="col-lg-4">            
                  {!! Form::label ('','Estatura  ',['class' => '']) !!}
                  <div class="input-group">                              
                  <div class="input-group-prepend">    
                    {!! Form::label ('','Desde, hasta:  ',['class' => 'input-group-text']) !!}<br>
                  </div>
                    {!! Form::number('count','value', ['min' => '0' ,'max' => '300' ,'class' => 'form-control', 'id' => 'estatura1']) !!}
                    {!! Form::number('count','value', ['min' => '0' ,'max' => '300' ,'class' => 'form-control', 'id' => 'estatura2']) !!}
                </div>
            </div>
                 
            <div class="col-lg-4">
             {!! Form::label ('','Peso  ',['class' => '']) !!}
                  <div class="input-group">                              
                  <div class="input-group-prepend">    
                    {!! Form::label ('','Desde, hasta:  ',['class' => 'input-group-text']) !!}<br>
                  </div>
                     {!! Form::number('count','value', ['min' => '0' ,'max' => '500' ,'class' => 'form-control', 'id' => 'peso1']) !!}
                     {!! Form::number('count','value', ['min' => '0' ,'max' => '500' ,'class' => 'form-control', 'id' => 'peso2']) !!}
              </div>
            </div>
          </div>
          <br><div class="row" >
             <div class="col-lg-6">
                 {!! Form::label ('idColorPiel','Color de piel') !!} <br>
                 {!! Form::select('cPiel',$coloresPiel, '', ['class' => '', 'id' => 'cPiel','multiple' => 'multiple'] ) !!}                             
             </div>
             <div class="col-lg-6">
                  {!! Form::label ('comple','Complexión') !!}<br>
                  {!! Form::select ('comple', $complexiones, '',['class' => '', 'id' => 'complexion','multiple' => 'multiple'] )!!}         
             </div>
        </div>
    </DIV>        
              
          <div id="catCabello"> 
              <div class="row">
                    &nbsp;&nbsp; <b>Cabello</b>                        
              </div> <hr>      
             <div class="row" id="idCabello">
                 <div class="col-lg-4">
                    {!! Form::label ('tipoCabello','Tipo de cabello') !!}
                    {!! Form::select('tipoCabello', $tipoCabello, '', ['class' => '', 'id' => 'tipoCabello','multiple' => 'multiple'] ) !!}           
                </div>
                 <div class="col-lg-4">
                   {!! Form::label ('tamanoCabello','Tamaño de cabello:') !!}
                   {!! Form::select('tamanoCabello', $tamanoCabello, '', ['class' => '', 'id' => 'tamanoCabello','multiple' => 'multiple'] ) !!}
                </div>
                <div class="col-lg-4">  
                    {!! Form::label ('tipoCabe','Color de cabello') !!}
                    {!! Form::select('colorCabello', $coloresCabello, '', ['class' => '', 'id' => 'colorCabello','multiple' => 'multiple'] ) !!}
                </div>
              </div>
          </div> 	
          
          <div id="catBarbaBigotePatilla"> 
              <br><div class="row">
                    &nbsp;&nbsp; <b>Barba, bigote y patilla</b>                        
              </div> <hr>      
             <div class="row">
                 <div class="col-lg-4">
                    {!! Form::label ('tipoBarba','Tipo de barba:') !!}
                    {!! Form::select('tipoBarba', $tipoBarba, '', ['class' => '', 'id' => 'tipoBarba','multiple' => 'multiple'] ) !!}
                 </div>
                 <div class="col-lg-4">
                     {!! Form::label ('color','Color de barba:') !!}
                     {!! Form::select('colorBarba', $coloresBarba, '', ['class' => '', 'id' => 'colorBarba','multiple' => 'multiple'] ) !!}
                </div>
                <div class="col-lg-4">
                      {!! Form::label ('tipoBigote','Tipo de bigote:') !!}
                      {!! Form::select('tipoBigote', $tipoBigote, '', ['class' => '', 'id' => 'tipoBigote','multiple' => 'multiple'] ) !!}
                 </div>                 
              </div>
              <br><div class="row" >
                  <div class="col-lg-4">
                    {!! Form::label ('colorBigotes','Color de bigote:') !!}
                    {!! Form::select('colorBigote', $coloresBigote, '', ['class' => '', 'id' => 'colorBigote','multiple' => 'multiple'] ) !!}
                  </div>
                  <div class="col-lg-4">
                     {!! Form::label ('tipoPatilla','Tipo de patilla:') !!}
                     {!! Form::select('tipoPatilla', $tipoPatilla, '', ['class' => '', 'id' => 'tipoPatilla','multiple' => 'multiple'] ) !!}
                  </div>
                  <div class="col-lg-4">
                    {!! Form::label ('colorPatillas','Color de patillas:') !!}
                    {!! Form::select('colorPatillas', $coloresPatilla, '', ['class' => '', 'id' => 'colorPatilla','multiple' => 'multiple'] ) !!}
                  </div>
              </div>
          </div>
          
           
         <div id="catOjos"> 
              <br><div class="row">
                    &nbsp;&nbsp; <b>Ojos y labios</b>                        
              </div>  <hr>  
             <div class="row" id="idOjos"> 
                 <div class="col-lg-4">
                    {!! Form::label ('tamanoOjos','Tamaño de ojos:') !!}
                    {!! Form::select('tamanoOjos', $tamanoOjos, '', ['class' => '', 'id' => 'tamanoOjos','multiple' => 'multiple'] ) !!}
                 </div>
                 <div class="col-lg-4">
                  {!! Form::label ('colorOjoso','Color de ojos:') !!}
                  {!! Form::select('colorOjos', $coloresOjos, '', ['class' => '', 'id' => 'colorOjos','multiple' => 'multiple'] ) !!}
                 </div>               
                <div class="col-lg-4">  
                       {!! Form::label ('tipoLabios','Tipo de labios:') !!}
                       {!! Form::select('tipoLabio', $tipoLabios, '', ['class' => '', 'id' => 'tipoLabio','multiple' => 'multiple'] ) !!}
                </div>
 	        </div>
 	        </div>
          
          <div id="catModiParti"> 
              <br><div class="row">
                    &nbsp;&nbsp; <b>Modificaciones y particularidades</b>                        
              </div>  <hr>  
             <div class="row" id=""> 
                 <div class="col-lg-6">
                    {!! Form::label ('tipoLabios','Modificaciones:') !!}
                    {!! Form::select('modificaciones', $modificaciones, '', ['class' => '', 'id' => 'modificaciones','multiple' => 'multiple'] ) !!}
                </div>
                 <div class="col-lg-6">
                  {!! Form::label ('tipoLabios','Particularidades:') !!}
                  {!! Form::select('particularidades', $particularidades, '', ['class' => '', 'id' => 'particularidades','multiple' => 'multiple'] ) !!}
                 </div>
 	        </div>
 	        </div>                      
                         
            </div> <!--  div class="card-body bg-white" END  -->
            <br>
           <imput type="button" class="btn btn-dark pull-right" id="filtros">Buscar</imput>
           <br><br>
           
           </div>
        <!--<imput type="button" class="btn btn-dark pull-right" id="button2">PRUEBA</imput>-->
       <!--<imput type="button" class="btn btn-dark pull-right" id="prueba">PRUEBA</imput>-->
        
        <div id="tablaGen" style="width:100%">


<!-- data-id-table="advancedTable" 
 -->          <table id="tableDependencias"
              data-search="true"
              data-advanced-search="true"
              data-toolbar="#toolbar"
              data-show-refresh="true"
              data-show-toggle="true"
              data-show-columns="true"
              data-sort-name="id_user"
              data-unique-id="id_user"
              data-sort-order="asc"
              data-show-export="true"
              data-pagination="true"
              data-search="true" 
              data-show-print="true"
              data-filter-control="true"
              data-trim-on-search="false"
              data-page-list="[10, 50, 70, 100]"> 

             <thead>
                <tr>
                    <th data-field="nombres" 
                        data-sortable="true" data-filter-control="input"></th>
                    <th data-field="Fecha de desaparición" 
                        data-sortable="true" data-filter-control="input"></th>
                        <th data-field="Sexo" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Apodo" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Edad" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Estatura" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Peso" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Complexion" 
                        data-sortable="true"data-filter-control="input" data-visible="false"></th>
                        <th data-field="Color de piel" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="cabello" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="velloFacial" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="ojos" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="labios" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>                   
                        <th data-field="Estado" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Municipio" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Nacionalidad" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="FechaR" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Hechos" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Modificaciones" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="particularidades" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Observaciones" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
               <th data-field="Acciones"> </th>
                </tr>
            </thead>
 <tbody >
    
    </tbody>
         </table>  
  @include('reporteador.modal.modal_reportes')

        </div>

       <br><br><br><br><br><br><br><br>
   
</div><hr>

@endsection

@section('scripts') 
{!! HTML::script('personal/js/multiple-select.js') !!}
{!! HTML::script('personal/js/bootstrap-table-multiple-search.js') !!}
{!! HTML::script('personal/js/bootstrap-table-toolbar.js') !!}
{!! HTML::script('personal/js/bootstrap-table-export.js') !!}
{!! HTML::script('personal/js/tableExport.js') !!}
{!! HTML::script('personal/js/jspdf.min.js') !!}  
{!! HTML::script('personal/js/jspdf.plugin.autotable.js') !!} 
{!! HTML::script('personal/js/FileSaver.min.js') !!} 
{!! HTML::script('personal/js/bootstrap-table-filter-control.js') !!}

<!--
{!! HTML::script('personal/js/bootstrap-table.js') !!}
{!! HTML::script('personal/js/bootstrap-table-print.js') !!}
-->

<script type="text/javascript">
   
    

    
   $(function()
    {
      $('#idA1').change(function()
      {if ($(this).is(':checked')) {
            $('#catFechas').show();
          
        }else{
            $('#catFechas').hide()
        }; });  
     $('#idA2').change(function()
      {if ($(this).is(':checked')) {
            $('#catCuerpo').show();
        }else{
            $('#catCuerpo').hide()
        }; }); 
     $('#idA3').change(function()
      {if ($(this).is(':checked')) {
            $('#catCabello').show();
        }else{
            $('#catCabello').hide()
        }; });  
     $('#idA4').change(function()
      {if ($(this).is(':checked')) {
            $('#catBarba').show();
        }else{
            $('#catBarba').hide()
        }; });  
     $('#idA5').change(function()
      {if ($(this).is(':checked')) {
            $('#catBigote').show();
        }else{
            $('#catBigote').hide()
        }; }); 
     $('#idA6').change(function()
      {if ($(this).is(':checked')) {
            $('#catPatilla').show();
        }else{
            $('#catPatilla').hide()
        }; });  
     $('#idA7').change(function()
      {if ($(this).is(':checked')) {
            $('#catOjos').show();
        }else{
            $('#catOjos').hide()
        }; });  
     $('#idA8').change(function()
      {if ($(this).is(':checked')) {
            $('#catLabios').show();
        }else{
            $('#catLabios').hide()
        }; });  
     $('#idA9').change(function()
      {if ($(this).is(':checked')) {
            $('#catModiParti').show();
        }else{
            $('#catModiParti').hide()
        }; }); }); 
     //$("#campoUbicacion").hide();
    //-<<--<--<<--<<--<<-MULTISELECTS-<<--<--<<--<<--<<-<<--<--<<--<<--<<
      
    $('#filtrosAvanzados').multipleSelect({
            filter: true,
            width: '100%'
           
        });
    $('#generos').multipleSelect({
            selectAll: false,
            //isOpen: true,           
            width: '100%'
           
        });
    $('#generos').multipleSelect("setSelects", ['H','M']); 
    $('#nacionalidades').multipleSelect({
            filter: true,
            width: '100%'
           
        });
    $('#estados').multipleSelect({
            filter: true,
            width: '100%'
           
        });
    $('#municipios').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#cPiel').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#complexion').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tipoCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tamanoCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tipoBarba').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorBarba').multipleSelect({
            filter: true,
            width: '100%'
        }); 

    $('#tipoBigote').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorBigote').multipleSelect({
            filter: true,
            width: '100%'
        }); 

     $('#tipoPatilla').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorPatilla').multipleSelect({
            filter: true,
            width: '100%'
        }); 

    $('#tamanoOjos').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorOjos').multipleSelect({
            filter: true,
            width: '100%'
        });
     $('#tipoLabio').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#modificaciones').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#particularidades').multipleSelect({
            filter: true,
            width: '100%'
        });
    //-<<--<--<<--<<--<<-<<--<--<<--<<--<<-<<--<--<<--<<--<<-<<--<--<<-<<

    $("#colapsar2").click(function(event) {
        $("#campoEstatura").toggle();
        $("#campoPeso").toggle();
        $("#campoColorPiel").toggle();
        $("#campoComplexion").toggle();
    });
    $("#colapsar3").click(function(event) {
        //$("#campoUbicacion").show();
        $("#campoTipoCabello").toggle();
        $("#campoTamanoCabello").toggle();
        $("#campoColorCabello").toggle();
 
    });
    
     $("#colapsar4").click(function(event) {
        //$("#campoUbicacion").show();
         $("#campoTipoBarba").toggle();        
        $("#campoColorBarba").toggle();
        
    });
    $("#colapsar5").click(function(event) {
        $("#campoFechaD").toggle();
        $("#campoFechaR").toggle();
    });
    $("#colapsar6").click(function(event) {
         $("#campoTipoBigote").toggle();        
        $("#campoColorBigote").toggle();
        
    });
    $("#colapsar7").click(function(event) {
         $("#campoTipoPatilla").toggle();        
        $("#campoColorPatilla").toggle();
        
    });
     $("#colapsar8").click(function(event) {
         $("#campoTamanoOjos").toggle(); 
         $("#campoColorOjos").toggle();               
    });

    $("#colapsar9").click(function(event) {
        //$("#campoUbicacion").show();
         $("#campoTipoLabio").toggle();             
    });
    $("#colapsar10").click(function(event) {
        //$("#campoUbicacion").show();
         $("#campoModificaciones").toggle();             
    });
   
    
    var prueba = $('#prueba');
    var btnVerReporte = $('#verReporte');
    var modalReportes = $('#modal_reportes');

    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
    var filtrosTodos = $('#filtrosTodos');
        var CheckFem = $('#fem');
    
        var fem = "";  

    prueba.click(function(e){
      alert("FGFg");
      modalReportes.modal('show');   
    });
    
    btnVerReporte.click(function(e){
      alert("FGFg");
            
      modalReportes.modal('show');
    });
    
$('#range').click(function(e){
    
    alert('Selected values: ' + $('#estados').multipleSelect('getSelects'));
alert('Selected texts: ' + $('#estados').multipleSelect('getSelects', 'text'));
    
    
    var rango = $('#rng1').val();
        var rango2 = $('#rng2').val();
    alert(rango+ ' a ' +rango2);
    });
 
    var tablaGen = $('#tablaGen');
    var tablaGenTodos = $('#tablaGenTodos');
    
   var table = $('#tableDependencias');
   var table2 = $('#tableTodos');
          var routeIndex = '{!! route('consultas.index') !!}';
          var routeReporteador = '{!! route('reporteador.index') !!}';
    
    var formatCheckInformante = function(value, row, index){
      texto = '';
      if (row.sexo =='H') {
        texto = 'HOMBRE'
      }else{
                texto = 'MUJER'
            }

      return [texto].join('');
    }
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-
    
var formatTableActions = function(value, row, index) {        
      btn = '<p align="center"> <button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button> </p>';


      return [btn].join('');
    };
    
    window.operateEvents = {
    'click #verReporte': function (e, value, row, index) {
                  modalReportes.modal('show');
 
            $("#idNombre").empty();
            $("#idGenero").empty(); 
            $("#idEstado").empty();
            $("#idMunicipio").empty();
            $("#idFecha").empty();
            $("#idEdad").empty();
            $("#apodo").empty();            
            $("#idEstatura").empty();
            $("#idPeso").empty();
            $("#idCPiel").empty();
            $("#idComplexion").empty();            
            $("#idNacionalidad").empty();
            $("#idCabello").empty();
            $("#idVelloFacial").empty();
            $("#idOjos").empty();
            $("#idLabios").empty();
            
      $("#idNombre").append(row.nombre);
            if(row.sexo =='H'){ 
                $("#idGenero").append('Hombre'); 
                              }else{
                if(row.sexo =='M'){ 
                    $("#idGenero").append('Mujer');}
                             }
            $("#idEstatura").append(row.estatura+ ' cm'); 
            $("#idPeso").append(row.peso + ' kg'); 
            $("#idCPiel").append(row.cPiel); 
            $("#idComplexion").append(row.complexion); 
            $("#idEstado").append(row.estado);
            $("#idMunicipio").append(row.municipio);
            $("#idFecha").append(row.fecha);
            $("#idEdad").append(row.edad + ' años');
            $("#apodo").append(row.apodo);
            $("#idNacionalidad").append(row.nacionalidad);
            $("#idTipoCabello").append(row.tipoCabello);
            $("#idCabello").append(row.cabello);
            $("#idVelloFacial").append(row.velloFacial);
            $("#idOjos").append(row.ojos);
            $("#idLabios").append(row.labios);
}
    }
    //-o-|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-
        var formatTableActions2 = function(value, row, index) {       
      btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';
      return [btn].join('');
    };
    
    window.operateEvents2 = {
    'click #verReporte': function (e, value, row, index) {
                  modalReportes.modal('show');
 
            $("#idNombre").empty();
            $("#idGenero").empty(); 
            $("#idEstado").empty();
            $("#idMunicipio").empty();
            $("#idFecha").empty();
            $("#idEdad").empty();
            $("#apodo").empty();
            $("#idNacionalidad").empty();
   
      $("#idNombre").append(row.nombre);
            if(row.sexo =='H'){ 
                $("#idGenero").append('Hombre'); 
            }else{
            if(row.sexo =='M'){ 
                    $("#idGenero").append('Mujer');}
                }
            $("#idEstado").append(row.estado);
            $("#idMunicipio").append(row.municipio);
            $("#idFecha").append(row.fecha);
            $("#idEdad").append(row.edad);
            $("#apodo").append(row.apodo);
            $("#idNacionalidad").append(row.nacionalidad);
}
    }
     filtrosTodos.click(function(){
          tablaGen.hide();
          var estados = $('#estados').multipleSelect('getSelects');
          console.log("El string:")
        console.log(estados)
        var array = JSON.parse("[" + estados + "]");
         // estados.toString();
          //estados.replace(/['"]+/g, '');
          console.log("El arreglo:")
          console.log(array)
          
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
          
          var fem =' ';
          var masc =' ';

          table2.bootstrapTable("refresh", {
              data: dataString
    });
  
          var dataString = {
          estados: $('#estados').multipleSelect('getSelects'),
                fem : $("input#fem:checked").val(),     
                masc : $("input#masc:checked").val(),
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
      };
          console.log("El dataString:");
          console.log(dataString);
          $.ajax({
        type: 'POST',
        url: routeIndex+'/get_desaparecidos_personas_todos',
        data: dataString,
        dataType: 'json',
        success: function(data) {
                    table2.bootstrapTable('refresh');
                    table2.bootstrapTable('load', data)

        },
        error: function(data) {
          console.log('Error en la consulta')
        }
      });
          
          table2.bootstrapTable({     

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
        title: 'Fecha de desaparición',
      }, {          
        field: 'estado',
        title: 'Estado',
      }, {          
        field: 'municipio',
        title: 'Municipio',
            }, {          
        title: 'Acciones',
        formatter: formatTableActions,
        events: operateEvents
      }]        
    })

          console.log(routeIndex+'/get_desaparecidos_personas_todos');
        tablaGenTodos.show();

        //console.log("entrando")
        });
     //-o-|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-
    filtros.click(function(){

            from = $("#fechaDesaparicion1").val().split("/");
            fechaDesaparicion1 = from[2] + "-" + from[1] + "-" + from[0];
            fechaInicio = Date.parse(fechaDesaparicion1);
            from2 = $("#fechaDesaparicion2").val().split("/");
            fechaDesaparicion2 = from2[2] + "-" + from2[1] + "-" + from2[0];
            fechaFin = Date.parse(fechaDesaparicion2);
            console.log("FECHA");                           
    console.log(fechaInicio);

          tablaGenTodos.hide();
          var estados = $('#estados').multipleSelect('getSelects');
          var municipios = $('#municipios').multipleSelect('getSelects');
          console.log("El string:")
        console.log(estados)
        var arrayEst = JSON.parse("[" + estados + "]");
        var arrayMun = JSON.parse("[" + municipios + "]");
         // estados.toString();
          //estados.replace(/['"]+/g, '');
          console.log("El arreglo:")
          //console.log(array)
          
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
          
          var fem =' ';
          var masc =' ';
   
          table.bootstrapTable("refresh", {
              data: dataString
              //url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados
    });
        
//{          var sexo = '';
//                var femen = $("input#fem:checked").val();    
//                var mascul = $("input#masc:checked").val();
//        
//                
//                if (femen == null ){
//                    sexo = '\''+mascul+'\'';
//                     console.log('--------------------------');
//                    console.log(sexo);
//                }else{ if (mascul == null ){
//                    sexo = '\''+femen+'\'';
//                     console.log('--------------------------');
//                    console.log(sexo);
//                } else{
//                    sexo = '\'' +femen + '\',\'' + mascul+ '\'';
//                     console.log('--------------------------');
//                    console.log(sexo);
//                    
//                } } } 

          var dataString = {
          estados: $('#estados').multipleSelect('getSelects'),
                municipios: $('#municipios').multipleSelect('getSelects'),
                cPiel: $('#cPiel').multipleSelect('getSelects'),
                complexion: $('#complexion').multipleSelect('getSelects'),
                tipoCabello: $('#tipoCabello').multipleSelect('getSelects'),
                tamanoCabello: $('#tamanoCabello').multipleSelect('getSelects'),
                colorCabello: $('#colorCabello').multipleSelect('getSelects'),
                tipoBarba: $('#tipoBarba').multipleSelect('getSelects'),
                colorBarba: $('#colorBarba').multipleSelect('getSelects'),
              
                tipoBarba: $('#tipoBigote').multipleSelect('getSelects'),
                colorBarba: $('#colorBigote').multipleSelect('getSelects'),
                tipoPatilla: $('#tipoPatilla').multipleSelect('getSelects'),
                colorPatilla: $('#colorPatilla').multipleSelect('getSelects'),
              
                tamanoOjos: $('#tamanoOjos').multipleSelect('getSelects'),
                colorOjos: $('#colorOjos').multipleSelect('getSelects'),
                tipoLabio: $('#tipoLabio').multipleSelect('getSelects'),
                modif: $('#modificaciones').multipleSelect('getSelects'),
                partic: $('#particularidades').multipleSelect('getSelects'),
                genero: $('#generos').multipleSelect('getSelects'),
                //fem : $("input#fem:checked").val(),     
                //masc : $("input#masc:checked").val(),
          //    sexo,
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
                estatura1 : $('#estatura1').val(),
                estatura2 : $('#estatura2').val(),
                peso1 : $('#peso1').val(),
                peso2 : $('#peso2').val(),
                fechaDes1 : $('#fechaDesaparicion1').val(),
                fechaDes2 : $('#fechaDesaparicion2').val(),
                fechaRep1 : $('#fechaReporte1').val(),
                fechaRep2 : $('#fechaReporte2').val(),
      };
          console.log("El dataString:");
          console.log(dataString);
          $.ajax({
        type: 'POST',
        url: routeIndex+'/get_desaparecidos_personas',
        data: dataString,
        dataType: 'json',
        success: function(data) {
          //modalInformanteAgregar.modal('hide');
                    table.bootstrapTable('refresh');
                    table.bootstrapTable('load', data)
                    
          
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
          
          table.bootstrapTable({      
             //
            //data: data,
      //url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados,
      columns: [{         
                    field: 'nombre',
                    title: 'Nombre',
            },{
                    field: 'fecha',
                    title: 'Fecha de desaparición',
            },{         
                    field: 'sexo',
                    title: 'Sexo',
            },{         
                    field: 'apodo',
                    title: 'Apodo',
            },{         
                    field: 'edad',
                    title: 'Edad',
            },{         
                    field: 'estatura',
                    title: 'Estatura',
            },{         
                    field: 'peso',
                    title: 'Peso',
            },{         
                    field: 'complexion',
                    title: 'Complexión',
            },{         
                    field: 'cPiel',
                    title: 'Color de piel',
            },{         
                    field: 'estado',
                    title: 'Estado',
            },{         
                    field: 'municipio',
                    title: 'Municipio',
            },{         
                    field: 'nacionalidad',
                    title: 'Nacionalidad',
            },{
                    field: 'fechaReporte',
                    title: 'Fecha de reporte',
            },{         
                    field: 'hechos',
                    title: 'Hechos',
            },{
                    field: 'cabello',
                    title: 'Cabello',
            },{
                    field: 'velloFacial',
                    title: 'Vello facial',
            },{             
                    field: 'ojos',
                    title: 'Ojos',

            },{             
                    field: 'labios',
                    title: 'Labios',
            },{             
                    field: 'modificaciones',
                    title: 'Modificaciones',

            },{             
                    field: 'particularidades',
                    title: 'Particularidades',

            },{  
                    field: 'observaciones',
                    title: 'Observaciones',

            },{                
                    title: 'Acciones',
                    formatter: formatTableActions,
                    events: operateEvents
                }]        
            })

          console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados);
        fechar1 =$('#fechaReporte1');

        tablaGen.show();
//{
//     table.bootstrapTable('hideColumn', 'nombres');
//
//       
//    
//    $(function() {
//$table = $('#tableDependencias');
// $button2 = $('#button2');
//  $button2.click(function() {
//      
//     
//      
//    $table.bootstrapTable('hideColumn', 'nombres');
//       $table.bootstrapTable({
//   reorderableColumns: true,
//  detailView: true
//          });
//  }); } } }
});
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<-
</script>
@endsection











