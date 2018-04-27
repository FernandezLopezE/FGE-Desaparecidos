@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
	.gi-3x{font-size: 2.5em;}
</style>
	
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
@include('navs.navs_datos',array('activar' => 'contacto'))
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarContacto">
	Agregar
</button>
<div class="card-body bg-white">
			<table id="tableContactos" ></table>
			@include('contactos.modals.index')
</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script type="text/javascript">
    var btnLimpiar = $('#btnLimpiar');
	document.getElementById("ladaC").value="(+52)-";
	var contador = 0;
	$("input[name='informanteTelefonosC[]']").mask('(000) 000 0000');
	$(function (){

		var routeIndex = '{!! route('consultas.index') !!}';
		var btnOtraRed = $('#btnOtraRed');
		var btnAgregarContacto = $('#btnAgregarContacto');
		var btnGuardarContacto = $('#btnGuardarContacto');
		var modalDesaparecidoContacto= $('#modalDesaparecidoContacto');
		var index = $('#modalDesaparecidoContacto');
		var tableContactos = $('#tableContactos');
		var idDesaparecido = '{!! $desaparecido->id !!}'
		var routeContacto = '{!! route('contactos.index') !!}';
		var btnAgregarTelefonoC = $('#btnAgregarTelefonoC');
		var tableCont = $('#tableContactos');
		var modalFooterCont = $('.modal-footer');
		
		btnOtraRed.click(function(e) {
			
			$("#divOtraRed").show();
			});

		btnAgregarTelefonoC.click(function(e) {
			console.log("agregando")

			var lada2 = document.getElementById("ladaC").value;

            $("#telefono3").append('<div class="row"> <div class="form-group col-lg-4">{!! Form::label ("informanteTipoTel","Tipo de telefono:") !!}	                                                                                               {!! Form::select ("informanteTipoTelC[]", $tiposTelefonos,"",["class" => "form-control","id" => "informanteTipoTelC[]"])!!} </div> <div class="form-group col-lg-2">                                                {!! Form::label ("lada","Código del país:") !!}	                                                                           {!! Form::text ("ladaC[]",old(""),["class" => "form-control lada","id" => "ladaC"])!!} </div>  <div class="form-group col-lg-4">                                                                                       {!! Form::label ("informanteTelefonos","Número:") !!}                                                             {!! Form::text ("informanteTelefonosC[]",old("informanteTelefonos"),["class" => "form-control mayuscula","data-validation" => "required","data-validation-error-msg-required" => "El campo es requerido","id" => "informanteTelefonos[]"] )!!} </div>    <div class="form-group col-lg-2">                                                                                                         {!! Form::label ("ext","Ext:") !!}                                                                                 {!! Form::text ("extC[]",old(""), ["class" => "form-control mayuscula","id" => "extC[]"] )!!} </div> </div>');
            $("input[name='informanteTelefonosC[]']").mask('(000) 000 0000');

           var otrasLadas = document.getElementsByClassName("lada");
		    otrasLadas[contador].value = lada2;
		    contador = contador + 1;
		    console.log(contador);
				});


var formatContacto = function(value, row, index){
			telefonos = $.parseJSON(row.telefono)
				var etiqueta = "";
				$.each(telefonos, function(key, value){
					etiqueta = etiqueta + '<span>'+' Tipo: '+value.tipoTel+' Lada: '+value.lada+' Telefono: '+value.telefono+ ' Ext: '+value.ext+'<span> </br>'					
				})
				return [etiqueta].join('');
		}

		var formatContactoRS = function(value, row, index){
			redesS = $.parseJSON(row.redesSociales)
				var etiqueta2;
				$.each(redesS, function(key, value){
					etiqueta2 = '<span>'+' Redes: '+redesS.redesSociales+'<span>'+' - '					
				})
				return [etiqueta2].join('');
		}

tableContactos.bootstrapTable({				
			url: routeIndex+'/get_contactos/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'correoElectronico',
				title: 'Correo',
			}, {					
				//field: 'telefono',
				formatter: formatContacto,
				title: 'Telefono',
			}, {					
				//field: 'redesSociales',
				formatter: formatContactoRS,
				title: 'Redes sociales',				
			}, {					
				title: 'Acciones',
				//formatter: formatTableActions,
				//events: operateEvents
			}]				
		})

btnAgregarContacto.click(function(e){
			console.log('hola mundo');
			modalDesaparecidoContacto.modal('show');
		 $( "#modalDesaparecidoContacto" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });
		})
        
        btnLimpiar.click(function(){
          $('#modalDesaparecidoContacto').find('form')[0].reset();
          $('#modalDesaparecidoContacto').removeData('modal');

        })

		btnGuardarContacto.click (function(){
			
			var dataString = {
				correoElectronico : $("#correoElectronico").val(),
				tipoTel: $("select[name='informanteTipoTelC[]']").map(function(){return $(this).val();}).get(),
				lada: $("input[name='ladaC[]']").map(function(){return $(this).val();}).get(),
				//telefono : $('input[name^="informanteTelefonos"]').val(),
				telefono : $("input[name='informanteTelefonosC[]']").map(function(){return $(this).val();}).get(),
				//telefono : $("informanteTelefonos").val(),
				ext: $("input[name='extC[]']").map(function(){return $(this).val();}).get(),	
				redesSociales: $("input[name='redesSociales[]']").map(function(){return $(this).val();}).get(),	
				
				idDesaparecido: {!! $desaparecido->id !!},
			};
				console.log(dataString)
			$.ajax({
				type: 'POST',
				url: routeContacto,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					index.modal('hide');
					tableContactos.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})



		//var table = $('#tableAntecedentes');
		//var routeIndex = '{!! route('consultas.index') !!}';
		var routeAntecedente = '{!! route('antecedentes.index') !!}';
		var btnAgregarAntecedente = $('#btnAgregarAntecedente');
		var btnGuardarAntecedente = $('#btnGuardarAntecedente');
		var modalAntecedentes = $('#modalAntecedentes');
		//var modalFooter = $('.modal-footer');
		//var idDesaparecido = '{!! $desaparecido->id !!}'
		
		// table.bootstrapTable({				
		// 	url: routeIndex+'/get_antecedentes/{!! $desaparecido->id !!}',
		// 	columns: [{					
		// 		field: 'fecha',
		// 		title: 'Fecha',
		// 	}, {					
		// 		field: 'observaciones',
		// 		title: 'Observaciones',
		// 	}]			
		// })

		btnAgregarAntecedente.click(function(e){
			modalAntecedentes.modal('show');
		})

		btnGuardarAntecedente.click (function(){
			
			var dataString = {
				mesAnio : $("#mesAnio").val(),
				idDelito : $("#idDelito").val(),
				idCentroReclusion : $("#idCentroReclusion").val(),
				observaciones : $("#observaciones").val(),
				idDesaparecido: idDesaparecido,
			};			

			$.ajax({
				type: 'POST',
				url: routeAntecedente,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					modalAntecedentes.modal('hide');
					table.bootstrapTable('refresh');
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

	})

</script>
@endsection