@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
@endsection

@section('content')
	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}
	{{ Form::hidden('idDesaparecido', $desaparecido->id, array('id' => 'idDesaparecido')) }}

	<!-- Inicia tabla de familiares -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						FAMILIARES DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarFamiliares"><i class="fa fa-plus"></i> AGREGAR FAMILIARES</button>

					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="tableFamiliares" ></table>
			@include('includes.modal_desaparecido_familiares')
		</div>
	</div>
	<!-- Termina tabla de familiares -->

	<!-- Inicia tabla de domicilios -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DOMICILIOS DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarDomicilios"><i class="fa fa-plus"></i> AGREGAR DOMICILIOS</button>

					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="tableDomicilios" ></table>
			@include('includes.modal_desaparecido_domicilio')
		</div>
	</div>
	<!-- Termina tabla de domicilios -->

	<!-- Inicia tabla de antecedentes -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						ANTECEDENTES PENALES DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarAntecedentes"><i class="fa fa-plus"></i> AGREGAR ANTECEDENTES</button>
					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="tableAntecedentes" ></table>
		</div>
	</div>
	<!-- Termina tabla de antecedentes -->	

	<a href="/desaparecido/vestimenta/{!! $cedula->id !!}" class='btn btn-large btn-primary pull-right'>
		Siguiente  <i class="fa fa-angle-double-right"></i>-
	<a href="/desaparecido/correo/{!! $cedula->id !!}/{!! $desaparecido->id !!}" class='btn btn-large btn-primary openbutton'>corrreo</a>
	</a>

@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var routeIndex = '{!! route('consultas.index') !!}';
		
		var tableFamiliares = $('#tableFamiliares');
		var tableDomicilios = $('#tableDomicilios');
		var tableAntecedentes = $('#tableAntecedentes');
		
		var btnAgregarFamiliares = $('#btnAgregarFamiliares');
		var btnAgregarDomicilios = $('#btnAgregarDomicilios');
		var btnAgregarAntecedentes = $('#btnAgregarAntecedentes');
		
		var btnGuardarFamiliares = $('#btnGuardarFamiliares');
		var btnGuardarDomicilios = $('#btnGuardarDomicilios');
		var btnGuardarAntecedentes = $('#btnGuardarAntecedentes');

		var modalDesaparecidoFamiliar = $('#modalDesaparecidoFamiliar');
		var modalDesaparecidoDomicilio= $('#modalDesaparecidoDomicilio');
		var modalDesaparecidoAntecedente = $('#modalDesaparecidoAntecedente');

		$('input#familiaresFechaNacimiento').mask('00/00/0000');

		$('#familiaresFechaNacimiento').change(function(){  
			console.log('Calculando edad de la pareja');
			from = $("#familiaresFechaNacimiento").val().split("/");
			familiaresFechaNacimiento = from[2] + "-" + from[1] + "-" + from[0];
			fechaEnviada = Date.parse(familiaresFechaNacimiento);
		   
			fechaActual= new Date();
		   
			if (fechaEnviada > fechaActual)
			 {
			   $("#familiaresFechaNacimiento").val("");
			   $("#edadExtravio").val("");
			}else{

			$.ajax({
				   url: '/desaparecido/edad/'+familiaresFechaNacimiento,
				   type:"GET",
				   dataType:"json",

				   success:function(data) {
						   console.log("hola"+data);
						   $('#familiaresEdad').val(data);
					},
				   
				});
			}
		});

		tableFamiliares.bootstrapTable({				
			url: routeIndex+'/get_familiares/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'nombres',
				title: 'Nombres',
			}, {					
				field: 'primerAp',
				title: 'Primer apellido',
			}, {					
				field: 'segundoAp',
				title: 'Segundo apellido',
			}, {				
				field: 'fechaNacimiento',
				title: 'Fecha nacimiento',				
			}, {				
				field: 'edad',
				title: 'Edad',
			}, {					
				title: 'Acciones',
				//formatter: formatTableActions,
				//events: operateEvents
			}]				
		})

		tableDomicilios.bootstrapTable({				
			url: routeIndex+'/get_domicilios/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'calle',
				title: 'Calle',
			}, {					
				field: 'numExterno',
				title: 'No Externo',
			}, {					
				field: 'idEstado',
				title: 'Estado',
			}, {				
				field: 'idMunicipio',
				title: 'idMunicipio',				
			}, {				
				field: 'idLocalidad',
				title: 'Localidad',
			}, {					
				title: 'Acciones',
				//formatter: formatTableActions,
				//events: operateEvents
			}]				
		})

		btnAgregarFamiliares.click(function(e){
			modalDesaparecidoFamiliar.modal('show');
		})

		btnAgregarDomicilios.click(function(e){
			console.log('hola mundo');
			modalDesaparecidoDomicilio.modal('show');
		})

		btnGuardarFamiliares.click (function(){
			
			var dataString = {
				nombre : $("#familiaresNombres").val(),
				primerAp : $("#familiaresPrimerAp").val(),
				segundoAp : $("#familiaresSegundoAp").val(),
				idParentesco : $("#familiaresidParentesco").val(),
				fechaNacimiento : $("#familiaresFechaNacimiento").val(),
				edad : $("#familiaresEdad").val(),
				idDesaparecido : $("#idDesaparecido").val(),
			};

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_desaparecido_familiar',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalDesaparecidoFamiliar.modal('hide');
					tableFamiliares.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

		btnGuardarDomicilios.click (function(){
			
			var dataString = {
				tipoDireccion: $("#informanteTipoDireccion").val(),
				calle: $("#informanteCalle").val(),
				numExt: $("#informanteNumExterno").val(),
				numInt: $("#informanteNumInterno").val(),
				idEstado: $("#idEstado").val(),
				idMunicipio: $("#idMunicipio").val(),
				idLocalidad: $("#idLocalidad").val(),
				idColonia: $("#idColonia").val(),
				idCodigoPostal: $("#idCodigoPostal").val(),
				tipoTel: $("#informanteTipoTel").val(),				
				telefono : $("#informanteTelefonos").val(),				
				idDesaparecido: {!! $desaparecido->id !!},
			};

			console.log(dataString)

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_desaparecido_domicilio',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					modalDesaparecidoDomicilio.modal('hide');
					tableDomicilios.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})




	})
</script>
@endsection