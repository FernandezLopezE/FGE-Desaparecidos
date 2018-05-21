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
		</h5>
	</div>	
	<div class="card-body">	
    <p >
        <imput type="button" class="btn btn-dark pull-right" id="filtrosTodos">Buscar todos los registros</imput>	    
    </p> <br>
	    <div class="card-body bg-white">       
            <div class="row">               
               <div class="col">
                    <div class="">
                        <div class="card-header">
                           Género
                           <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar1"></i>
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoGenero"> 
                             <div class=" form-check ">

                                 <input class="form-check-input" Value="H" type="checkbox" id="masc" checked> Hombre: 
                            </div>
                            <div class=" form-check ">

                                 <input class="form-check-input" Value="M" type="checkbox" id="fem" checked> Mujer:
                            </div>      
                          </div>
                      </div>
                    </div>
	            </div>
               <div class="col">
                    <div class="">
                        <div class="card-header">
                           Edad
                           <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar2"></i>
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoEdad" > 
                              <div class="" id="div_idEstado">
                                 {!! Form::label ('','Desde:',['class' => '']) !!}
                                    <input  min="0" max="120" step="1" type="number" id="rng1"><br>
                                {!! Form::label ('','Hasta:',['class' => '']) !!}&nbsp;
                                    <input  min="0" max="120" step="1" type="number" id="rng2"> 
                             </div>     
                          </div>
                      </div>
                    </div>
	            </div>
                <div class="col" >
                        <div class="card-header">
                           Ubicación
                           <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar3"></i>
                           </div>
                        <div class=" list-group-flush small"  id="campoUbicacion">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('idEstados','Estados:') !!} <br>
                                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'partiCabello','multiple' => 'multiple'] ) !!}
                            </div> 
                            <div class=""  id="infoCabello3">
                                {!! Form::label ('idEstados','Municipios:') !!} <br>
                                {!! Form::select('idEstados',$municipios, '', ['class' => '', 'id' => 'municipios','multiple' => 'multiple'] ) !!}
                            </div>     
                          </div>
                      </div>
	            </div>                 
            </div>
            <div class="row">
                
            </div>
        </div>
	    

	    
	     <div class="row" >
	        

	         
	     </div>
       <imput type="button" class="btn btn-dark pull-right" id="prueba">PRUEBA</imput>
        <imput type="button" class="btn btn-dark pull-right" id="filtros">Buscar</imput>
        
	     <br><br>
<!--
              data-advanced-search="true"
              data-id-table="advancedTable"
-->
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
              data-search="true" 
              
              data-trim-on-search="false"> 

             <thead>
                <tr>
                    <th data-field="Nombres" 
                        data-sortable="true"></th>
                    <th data-field="Fecha de desaparición" 
                        data-sortable="true"></th>
               <th data-field="Acciones"></th>
                </tr>
            </thead>
         </table>  
 	@include('reporteador.modal.modal_reportes')

        </div>
<div id="tablaGenTodos" >

          <table id="tableTodos"
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
              data-search="true" 
              
              data-trim-on-search="false"> 

             <thead>
                <tr>
                    <th data-field="Nombres" 
                        data-sortable="true"></th>

                    <th data-field="Genero" 
                        data-sortable="true"></th>       
                    <th data-field="Edad" 
                        data-sortable="true"></th> 

                    <th data-field="Fecha de desaparición" 
                        data-sortable="true"></th>
                        <th data-field="Estado de origen" 
                        data-sortable="true"></th>

                        <th data-field="Municipio" 
                        data-sortable="true"></th>
                        

               <th data-field="Acciones"></th>
                </tr>
            </thead>
         </table>  
 	@include('reporteador.modal.modal_reportes')

        </div>

	    <br><br><br><br><br><br><br><br><br>
	 
</div><hr>

@endsection

@section('scripts')
{!! HTML::script('personal/js/multiple-select.js') !!}
{!! HTML::script('personal/js/bootstrap-table-multiple-search.js') !!}
{!! HTML::script('personal/js/bootstrap-table-toolbar.js') !!}

<script type="text/javascript">
     $("#campoUbicacion").hide();
    $("#colapsar1").click(function(event) {
        $("#campoGenero").toggle();
    });
    $("#colapsar2").click(function(event) {
        $("#campoEdad").toggle();
    });
    $("#colapsar3").click(function(event) {
        //$("#campoUbicacion").show();
        $("#campoUbicacion").toggle();
        $('#partiCabello').multipleSelect({
            filter: true
        });
    $('#municipios').multipleSelect({
            filter: true
        });
        
    });
    
    var prueba = $('#prueba');
    var btnVerReporte = $('#verReporte');
		var modalReportes = $('#modal_reportes');
    
    
    
    // $('select').multipleSelect();
    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
    var filtrosTodos = $('#filtrosTodos');
        var CheckFem = $('#fem');
    
        var fem = "";  
    
    //console.log(masc);

    prueba.click(function(e){
			alert("FGFg");
			modalReportes.modal('show');

           
		});
    
    btnVerReporte.click(function(e){
			alert("FGFg");
            
			modalReportes.modal('show');

           
		});
    
$('#range').click(function(e){
    
    alert('Selected values: ' + $('#partiCabello').multipleSelect('getSelects'));
alert('Selected texts: ' + $('#partiCabello').multipleSelect('getSelects', 'text'));
    
    
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
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<__
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<__
    
    //filtrodds.click(function(){
        
   // });
    
var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';
            //btn = '<a href="'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-address-card"></i></a>&nbsp;';

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
            $("#idNacionalidad").empty();
//                var btnEditarInformante = $('#btnEditarInformante');
//				
//				$('.modal-body div.has-danger').removeClass('has-danger');
//				$('.form-control-feedback').empty();
//
            
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
        var formatTableActions2 = function(value, row, index) {				
			btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';
            //btn = '<a href="'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-address-card"></i></a>&nbsp;';

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
//                var btnEditarInformante = $('#btnEditarInformante');
//				
//				$('.modal-body div.has-danger').removeClass('has-danger');
//				$('.form-control-feedback').empty();
//
            
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
//	{			$("#primerAp").val(row.primerAp);
//				$("#segundoAp").val(row.segundoAp);
//				$('select#idParentesco option[value="'+row.idParentesco+'"]').attr("selected",true);
//				$("#otroParentesco").val(row.otroParentesco);
//				$('select#idNacionalidad option[value="'+row.idNacionalidad+'"]').attr("selected",true);
//				$("#otroDocIdentidad").val(row.otroDocIdentidad);
//				$("#numDocIdentidad").val(row.numDocIdentidad);
//				$('select#tipoDireccion option[value="'+row.tipoDireccion+'"]').attr("selected",true);
//				$("#calle").val(row.calle);
//				$("#numExterno").val(row.numExterno);
//				$("#numInterno").val(row.numInterno);
//				$('select#idEstado option[value="'+row.idEstado+'"]').attr("selected",true);
//
//				$.getJSON(routeIndex+'/get_municipios/'+row.idEstado)
//				.done(function(data){					
//					idSelect = row.idMunicipio;
//					selectedGeneral = $('#idMunicipio');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//
//				$.getJSON(routeIndex+'/get_localidades/'+row.idMunicipio)
//				.done(function(data){					
//					idSelect = row.idLocalidad;
//					selectedGeneral = $('#idLocalidad');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//
//				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
//				.done(function(data){					
//					idSelect = row.idColonia;
//					selectedGeneral = $('#idColonia');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//
//				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
//				.done(function(data){					
//					idSelect = row.idCodigoPostal;
//					selectedGeneral = $('#idCodigoPostal');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.codigoPostal+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//                                            
//				telefonos = $.parseJSON(row.telefonos)
//                var etiqueta2 = 0;
//                console.log("Aqui los telefonos:");
//				//console.log(telefonos.length);
//                
//                informanteTele2 = $("input[name='telefonos[]']");
//                
//                for ($t =1; $t < telefonos.length; $t++ ){
//                    
//                    if (telefonos.length > informanteTele2.length ){
//                        addCamposTelefono(tipoTel = null, lada=null, telefono=null, ext=null);
//                    }                   
//                    
//                    
//                }
//                var informanteTipo = $("select[name='tipoTelefono[]']");
//                var informanteLada = $("input[name='lada[]']");
//                var informanteTele = $("input[name='telefonos[]']");
//                var informanteExt = $("input[name='ext[]']");
//				$.each(telefonos, function(key, value){
//                    //console.log(row.lenght);
//					console.log(value.telefono);
//                    informanteTipo[etiqueta2].value = value.tipoTelefono;
//                    informanteLada[etiqueta2].value = value.lada;
//                    informanteTele[etiqueta2].value = value.telefono;
//                    informanteExt[etiqueta2].value = value.ext;
//                    etiqueta2 = etiqueta2 +1;                    
//				})
//
//				$("#correoElectronico").val(row.correoElectronico);
//				if (row.informante == 0) {
//					$("input#informante").iCheck('uncheck');
//				}
//
//				if (row.notificaciones == 0) {
//					$("input#notificaciones").iCheck('uncheck');
//				}                
//                
//				//modalFooter.empty();
//				$("#btnEditarInformante").show();
//				$("#btnGuardarInformante").hide();
//                    
//                $("#btnEditarInformante").val(row.idDesaparecido);
//				
//				modalInformanteAgregar.modal('show');
//			}}
        
		}
     filtrosTodos.click(function(){
          tablaGen.hide();
          var estados = $('#partiCabello').multipleSelect('getSelects');
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
			    estados: $('#partiCabello').multipleSelect('getSelects'),
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
             
            //data: data,
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
      filtros.click(function(){
          tablaGenTodos.hide();
          var estados = $('#partiCabello').multipleSelect('getSelects');
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
   
         //table.bootstrapTable('refresh');
          
          table.bootstrapTable("refresh", {
              data: dataString
              //url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados
    });
          
          
          var dataString = {
			    estados: $('#partiCabello').multipleSelect('getSelects'),
                municipios: $('#municipios').multipleSelect('getSelects'),
                fem : $("input#fem:checked").val(),     
                masc : $("input#masc:checked").val(),
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
			};
          console.log("El dataString:");
          console.log(dataString);
          $.ajax({
				type: 'POST',
				url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados+ '/'+ municipios,
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
             
            //data: data,
			//url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados,
			columns: [{					
				field: 'nombre',
				title: 'Nombre',
		}
                , {					
//				title: 'Género',
//                formatter: formatCheckInformante
//			}, {					
//				field: 'edad',
//				title: 'Edad de extravío',
//			}, 
                
                					
				field: 'fecha',
				title: 'Fecha de desaparición',
//			}, {					
//				field: 'estado',
//				title: 'Estado',
//			}, {					
//				field: 'municipio',
//				title: 'Municipio',
//		
                },
                      {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
          
          
      //console.log(masc)

          //console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ array);
          
          
        tablaGen.show();

        //console.log("entrando")
        });
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
		 
    
    
</script>
@endsection





