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

	<!-- Inicia tabla de datos de contacto -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DATOS DE CONTACTO DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarContacto"><i class="fa fa-plus"></i> AGREGAR DATOS</button>

					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="tableContactos" ></table>
			@include('includes.modal_desaparecido_contacto')
		</div>
	</div>
	<!-- Termina tabla de datos de contacto -->

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
	<a href="/desaparecido/correo/{!! $cedula->id !!}" class='btn btn-large btn-primary openbutton'>corrreo</a>
	</a>

@endsection

@section('scripts')
{!! HTML::script('personal/js/lada.js') !!}
<script type="text/javascript">
	document.getElementById("lada").value="(+52)-";

	var contador = 0;
	$("input[name='informanteTelefonos[]']").mask('(000) 000 0000');
	$("input[name='informanteTelefonosC[]']").mask('(000) 000 0000');
	var btnAgregarTelefono = $('#btnAgregarTelefono');
	var btnAgregarTelefonoC = $('#btnAgregarTelefonoC');

	btnAgregarTelefono.click(function(e) {
			console.log("agregando")

			var lada1 = document.getElementById("lada").value;

            $("#telefono2").append('<div class="row"> <div class="form-group col-lg-4">{!! Form::label ("informanteTipoTel","Tipo de telefono:") !!}	                                                                                               {!! Form::select ("informanteTipoTel[]", $tiposTelefonos,"",["class" => "form-control","id" => "informanteTipoTel[]"])!!} </div> <div class="form-group col-lg-2">                                                {!! Form::label ("lada","Código del país:") !!}	                                                                           {!! Form::text ("lada[]",old(""),["class" => "form-control lada","id" => "lada[]"])!!} </div>  <div class="form-group col-lg-4">                                                                                       {!! Form::label ("informanteTelefonos","Número:") !!}                                                             {!! Form::text ("informanteTelefonos[]",old("informanteTelefonos"),["class" => "form-control mayuscula","data-validation" => "required","data-validation-error-msg-required" => "El campo es requerido","id" => "informanteTelefonos[]"] )!!} </div>    <div class="form-group col-lg-2">                                                                                                         {!! Form::label ("ext","Ext:") !!}                                                                                 {!! Form::text ("ext[]",old(""), ["class" => "form-control mayuscula","id" => "ext[]"] )!!} </div> </div>');
            $("input[name='informanteTelefonos[]']").mask('(000) 000 0000');

           var otrasLadas = document.getElementsByClassName("lada");
		    otrasLadas[contador].value = lada1;
		    contador = contador + 1;
		    console.log(contador);
				});
	btnAgregarTelefonoC.click(function(e) {
			console.log("agregando")

			var lada2 = document.getElementById("ladaC").value;

            $("#telefono3").append('<div class="row"> <div class="form-group col-lg-4">{!! Form::label ("informanteTipoTel","Tipo de telefono:") !!}	                                                                                               {!! Form::select ("informanteTipoTelC[]", $tiposTelefonos,"",["class" => "form-control","id" => "informanteTipoTelC[]"])!!} </div> <div class="form-group col-lg-2">                                                {!! Form::label ("lada","Código del país:") !!}	                                                                           {!! Form::text ("ladaC[]",old(""),["class" => "form-control lada","id" => "ladaC"])!!} </div>  <div class="form-group col-lg-4">                                                                                       {!! Form::label ("informanteTelefonos","Número:") !!}                                                             {!! Form::text ("informanteTelefonosC[]",old("informanteTelefonos"),["class" => "form-control mayuscula","data-validation" => "required","data-validation-error-msg-required" => "El campo es requerido","id" => "informanteTelefonos[]"] )!!} </div>    <div class="form-group col-lg-2">                                                                                                         {!! Form::label ("ext","Ext:") !!}                                                                                 {!! Form::text ("extC[]",old(""), ["class" => "form-control mayuscula","id" => "extC[]"] )!!} </div> </div>');
            $("input[name='informanteTelefonos[]']").mask('(000) 000 0000');

           var otrasLadas = document.getElementsByClassName("lada");
		    otrasLadas[contador].value = lada2;
		    contador = contador + 1;
		    console.log(contador);
				});

	$(function (){
		var routeIndex = '{!! route('consultas.index') !!}';
		
		var tableFamiliares = $('#tableFamiliares');
		var tableDomicilios = $('#tableDomicilios');
		var tableContactos = $('#tableContactos');
		var tableAntecedentes = $('#tableAntecedentes');
		
		var btnAgregarFamiliares = $('#btnAgregarFamiliares');
		var btnAgregarDomicilios = $('#btnAgregarDomicilios');
		var btnAgregarContacto = $('#btnAgregarContacto');
		var btnAgregarAntecedentes = $('#btnAgregarAntecedentes');
		
		var btnGuardarFamiliares = $('#btnGuardarFamiliares');
		var btnGuardarDomicilios = $('#btnGuardarDomicilios');
		var btnGuardarContacto = $('#btnGuardarContacto');
		var btnGuardarAntecedentes = $('#btnGuardarAntecedentes');

		var modalDesaparecidoFamiliar = $('#modalDesaparecidoFamiliar');
		var modalDesaparecidoDomicilio= $('#modalDesaparecidoDomicilio');
		var modalDesaparecidoContacto= $('#modalDesaparecidoContacto');
		var modalDesaparecidoAntecedente = $('#modalDesaparecidoAntecedente');

	


		var formatContacto = function(value, row, index){
			telefonos = $.parseJSON(row.telefono)
				var etiqueta;
				$.each(telefonos, function(key, value){
					etiqueta = '<span>'+' Tipo: '+telefonos.tipoTel+' Lada: '+telefonos.lada+' Telefono: '+telefonos.telefono+ ' Ext: '+telefonos.ext+'<span>'+' - '					
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
		tableContactos.bootstrapTable({				
			url: routeIndex+'/get_contactos/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'correoElectronico',
				title: 'Correo',
			}, {					
				field: 'telefono',
				formatter: formatContacto,
			}, {					
				field: 'redesSociales',
				formatter: formatContactoRS,
				//title: 'Redes sociales',				
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

		btnAgregarContacto.click(function(e){
			console.log('hola mundo');
			modalDesaparecidoContacto.modal('show');
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
				tipoTel: $("select[name='informanteTipoTel[]']").map(function(){return $(this).val();}).get(),
				lada: $("input[name='lada[]']").map(function(){return $(this).val();}).get(),
				//telefono : $('input[name^="informanteTelefonos"]').val(),
				telefono : $("input[name='informanteTelefonos[]']").map(function(){return $(this).val();}).get(),
				//telefono : $("informanteTelefonos").val(),
				ext: $("input[name='ext[]']").map(function(){return $(this).val();}).get(),				
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

		btnGuardarContacto.click (function(){
			
			var dataString = {
				correoElectronico : $("#correoElectronico").val(),
				tipoTel: $("select[name='informanteTipoTelC[]']").map(function(){return $(this).val();}).get(),
				lada: $("input[name='lada[]']").map(function(){return $(this).val();}).get(),
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
				url: '/desaparecido/store_desaparecido_contacto',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalDesaparecidoContacto.modal('hide');
					tableContactos.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})




	})
</script>
@endsection