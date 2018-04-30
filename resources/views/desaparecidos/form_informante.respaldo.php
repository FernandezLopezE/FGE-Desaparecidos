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

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DATOS DE LOS INFORMANTES
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>

					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="tableInformantes" ></table>
			@include('includes.modal_informante')
			@include('includes.modal_informante_show')
		</div>
	</div>

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DATOS DE LA PERSONA DESAPARECIDA
					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">

			{{ print_r($desaparecido) }}
			<form @if($desaparecido) @else style="display: none" @endif
				<div class="row">
					<div class="form-group col">
						{!! Form::label ('sexo','Género:') !!}
						{!! Form::select ('sexo',
											$sexos,
											'',
											['class' => 'form-control',
												'id' => 'sexo'
											])!!}	
					</div>			
				</div>
				<div class="row">
					<div class="form-group col">
						{!! Form::label ('desaparecidoNombres','Nombres(s):') !!}
						{!! Form::text ('desaparecidoNombres',
										old('desaparecidoNombres'),
										['class' => 'form-control mayuscula',
											'id' => 'desaparecidoNombres',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => '* Ingresa un nombre'
										] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('desaparecidoPrimerAp','Primer apellido:') !!}
						{!! Form::text ('desaparecidoPrimerAp',
										old('Apellido materno'),
										['class' => 'form-control mayuscula',
											'id' => 'desaparecidoPrimerAp',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => '* Ingresa un apellido'
										] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('desaparecidoSegundoAp','Segundo apellido:') !!}
						{!! Form::text ('desaparecidoSegundoAp',
										old('Apellido materno'),
										['class' => 'form-control mayuscula',
											'id' => 'desaparecidoSegundoAp'
										] )!!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						{!! Form::label ('apodo','Apodo (alias):') !!}
						{!! Form::text ('apodo',
										old('apodo'),
										['class' => 'form-control mayuscula',
											'id' => 'apodo'
										] )!!}
					</div>			
				</div>
				<div class="row">
					<div class="form-group col">
						{!! Form::label ('edadExtravio','Edad de extravío:') !!}
						{!! Form::text ('edadExtravio',
										old('EdadExtravio'),
										['class' => 'form-control',
											'id' => 'edadExtravio'
										] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('edadAparente','Edad aparente:') !!}
						{!! Form::number ('edadAparente',
											old('Edad aparente'),
											['class' => 'form-control',
												'id' => 'edadAparente',
												'data-validation' => 'required number length',
												'data-validation-error-msg' => '* Ingrese una edad aparente menos a 130',
												'data-validation-allowing'=>"range[1;130]",
												'data-validation-length'=>"0-3",
												'data-mask'=>"000",
												'min'=>"0",
												'max'=>"150"
											] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('fechaNacimiento','Fecha de nacimiento:') !!}
						{!! Form::text ('fechaNacimiento',
											old('Fecha de nacimiento'),
											['class' => 'form-control',
												'id' => 'fechaNacimiento' ,
												'data-validation' => 'required date',
												'data-validation-error-msg' => 'Ingrese una fecha valida o menor a la actual',
												'data-validation-format'=>"dd/mm/yyyy"
											])!!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
						{!! Form::select ('idNacionalidad',
											$nacionalidades,
											'',
											['class' => 'form-control',
												'id' => 'idNacionalidad',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => '* Elija una opción'
											])!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('idEscolaridad','Escolaridad:') !!}
						{!! Form::select ('idEscolaridad',
											$escolaridades,
											'',
											['class' => 'form-control',
												'id' => 'idEscolaridad',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => '* Elija una opción'
											] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('idOcupacion','Ocupación:') !!}
						{!! Form::select ('idOcupacion',
											$ocupaciones,
											'',
											['class' => 'form-control',
												'id' => 'idOcupacion',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => '* Elija una opción'
											])!!}
					</div>			
				</div>
				<div class="row">
					<div class="form-group col-lg-4">
							{!! Form::label ('identificacion','Identificación:') !!}
							{!! Form::select ('identificacion',
												$identificaciones,
												'',
												['class' => 'form-control', 'id' => 
													'identificacion'
												])!!}
					</div>
					<div class="form-group col-lg-4" style="display: none" id="otraIdDIV">
							{!! Form::label ('otraIdentificacion','Otro:') !!}
							{!! Form::text ('otraIdentificacion',
											old('Otra identificacion'),
											['class' => 'form-control mayuscula',
												'data-validation' => 'required',
												'data-validation-help' => 'En caso de seleccionar otra identificación. Agregar aquí.',
												'data-validation-depends-on' => 'identificacion',
												'data-validation-depends-on-value' =>'Otro(especifique)',
												'data-validation-error-msg-required' =>'Este campo es requerido.'
											] )!!}
					</div>
					<div class="form-group col">
							{!! Form::label ('numIdentificacion','No. Identificación:') !!}
							{!! Form::text ('numIdentificacion',
											old('Numero identificacion'),
											['class' => 'form-control mayuscula',
												'data-validation' =>'required',
												'data-validation-help' => 'Ejemplo: 117OO02AS23SPPR0.',
												'data-validation-error-msg-required' =>'Este campo es requerido.',
												'data-validation' =>'alphanumeric',
												'data-validation-error-msg' =>'Este campo solo acepta datos alfanumericos.'
											] )!!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						{!! Form::label ('idEdocivil','Estado civil:') !!}
						{!! Form::select ('idEdocivil',
											$edoscivil ,
											'',
											['class' => 'form-control',
												'id' => 'idEdocivil'
											] )!!}
					</div>			
				</div>
				<div class="row" id="estaEmbarazada" style="display:none">
					<div class="form-group col">
						{!! Form::label ('embarazo','Esta embarazada:') !!}
						{!! Form::select ('embarazo',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											'',
											['class' => 'form-control',
												'id' => 'embarazo'
											] )!!}
					</div>	
				</div>
				<div class="row"  id="datosEmbarazo" style="display:none">
					<div class="form-group col">
						{!! Form::label ('numGestacion','Cantidad:') !!}
						{!! Form::number ('numGestacion',
											old('gestacionSemanas'),
											['class' => 'form-control mayuscula',
												'id' => 'numGestacion',
												'min'=>"0",
												'max'=>"36"
											] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('tipoGestacion','Periodo:') !!}
						{!! Form::select ('tipoGestacion',
											['SEMANAS'=> 'SEMANAS','MESES' => 'MESES'],
											'',
											['class' => 'form-control ',
												'id' => 'tipoGestacion'
											] )!!}
					</div>
					<div class="form-group col">
						{!! Form::label ('rumoresBebe','Rumores sobre el nacimiento:') !!}
						{!! Form::select ('rumoresBebe',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											'',
											['class' => 'form-control',
												'id' => 'rumoresBebe'
											] )!!}
					</div>	
				</div>
				<div class="row" id="datosEmbarazo3" style="display:none">
					<div class="form-group col-12">
						{!! Form::label ('pormenores','Pormenores:') !!}
						{!! Form::text ('pormenores',
										old('Pormenores'),
										['class' => 'form-control mayuscula',
											'id' => 'pormenores'
										] )!!}
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							{!! Form::label ('antecedentesJudiciales','Antecedentes Judiciales') !!}
							{!! Form::select ('antecedentesJudiciales',
												['0'=>'NO','1'=>'SI'],
												'',
												['class' => 'form-control'] )!!}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<button type="button" class="btn btn-dark pull-right"  id="btnGuardarPersonaDesaparecida"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Inicia tabla de familiares -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						FAMILIARES DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarFamiliarDesaparecido"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>

					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="table_familiares" ></table>
			@include('includes.modal_desaparecido_familiares')
		</div>
	</div>
	<!-- Termina tabla de familiares -->

	<!-- Inicia tabla de familiares -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DOMICILIOS DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>

					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="table_domicilios" ></table>
		</div>
	</div>
	<!-- Termina tabla de familiares -->

	<!-- Inicia tabla de familiares -->
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						ANTECEDENTES PENALES DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>
					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="table_antecedentes" ></table>
		</div>
	</div>
	<!-- Termina tabla de familiares -->				
	{!! Form::submit('Atras', ['class' => 'btn btn-large btn-primary openbutton']); !!}


	<a href="/desaparecido/persona_desaparecida/{!! $cedula->id !!}" class='btn btn-large btn-primary openbutton'>Siguiente</a>

@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var table = $('#tableInformantes');
		var tableFamiliares = $('#table_familiares');
		var routeIndex = '{!! route('consultas.index') !!}';
		var idCedula = '{!! $cedula->id !!}';
		var btnAgregarInformante = $('#btnAgregarInformante');
		var btnAgregarFamiliarDesa = $('#btnAgregarFamiliarDesaparecido');
		var btnGuardarInformante = $('#btnGuardarInformante');
		var btnGuardarDesaparecido = $('#btnGuardarPersonaDesaparecida');
		var modalInformanteAgregar = $('#modalInformante');
		var modalInformanteDetalle = $('#modalInformanteShow');
		var modalDesaparecidoFamiliar = $('#modalDesaparecidoFamiliar');
		var bodyModalInformante = $('#modal-body-informante');
		
		$('#informante').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red',
			increaseArea: '20%' // optional
		});

		$('#notificaciones').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red',
			increaseArea: '20%' // optional
		});

		var formatTableActions = function(value, row, index) {				
			//btn = '<button class="btn btn-info btn-sm" id="showInformante"><i class="fa fa-eye"></i>&nbsp;Detalle</button>';			
			//btn = btn+'&nbsp;&nbsp;';
			btn = '<button class="btn btn-warning btn-sm" id="editInformante"><i class="fa fa-edit"></i>&nbsp;Editar</button>';
				
			
			return [btn].join('');
		};

		var formatCheckInformante = function(value, row, index){
			icon = '';
			if (row.informante) {
				icon = '<i class="fa fa-check">'
			}

			return [icon].join('');
		}

		var formatCheckNotificaciones = function(value, row, index){
			icon = '';
			if (row.notificaciones) {
				icon = '<i class="fa fa-check">'
			}

			return [icon].join('');
		}

		window.operateEvents = {
			'click #editInformante': function (e, value, row, index) {
				console.log(row);
				$("#informanteNombres").val(row.nombres);
				$("#informantePrimerAp").val(row.primerAp);
				$("#informanteSegundoAp").val(row.segundoAp);
				$('select#informanteidParentesco option[value="'+row.idParentesco+'"]').attr("selected",true);
				$("#informanteOtroParentesco").val(row.otroParentesco);
				$('select#informanteidNacionalidad option[value="'+row.idNacionalidad+'"]').attr("selected",true);
				$("#informanteOtroDocIdentidad").val(row.otroDocIdentidad);
				$("#informanteNumDocIdentidad").val(row.numDocIdentidad);
				$('select#informanteTipoDireccion option[value="'+row.tipoDireccion+'"]').attr("selected",true);
				$("#informanteCalle").val(row.calle);
				$("#informanteNumExterno").val(row.numExterno);
				$("#informanteNumInterno").val(row.numInterno);
				$('select#idEstado option[value="'+row.idEstado+'"]').attr("selected",true);

				$.getJSON(routeIndex+'/get_municipios/'+row.idEstado)
				.done(function(data){					
					idSelect = row.idMunicipio;
					selectedGeneral = $('#idMunicipio');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_localidades/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idLocalidad;
					selectedGeneral = $('#idLocalidad');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idColonia;
					selectedGeneral = $('#idColonia');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idCodigoPostal;
					selectedGeneral = $('#idCodigoPostal');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.codigoPostal+'</option>';
						selectedGeneral.append(optionselect);
					});
				});
				
				telefonos = $.parseJSON(row.telefono)

				$('select#informanteTipoTel option[value="'+telefonos.tipoTel+'"]').attr("selected",true);
				$('select#lada option[value="'+telefonos.lada+'"]').attr("selected",true);
				$("#informanteTelefonos").val(telefonos.telefono);
				$("#ext").val(telefonos.ext);
				
				$("#correoElectronico").val(row.correoElectronico);
				if (row.informante == 0) {
					$("input#informante").iCheck('uncheck');
				}

				if (row.notificaciones == 0) {
					$("input#notificaciones").iCheck('uncheck');
				}

				modalInformanteAgregar.modal('show');
			}
		}

		table.bootstrapTable({				
			url: routeIndex+'/get_informantes/{!! $cedula->id !!}',
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
				title: 'Informante',
				formatter: formatCheckInformante,
			}, {				
				title: 'Notificaciones',
				formatter: formatCheckNotificaciones,
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})

		btnAgregarInformante.click(function(e){
			modalInformanteAgregar.modal('show');
		})

		btnGuardarInformante.click (function(){
			
			var dataString = {
				nombre : $("#informanteNombres").val(),
				primerAp : $("#informantePrimerAp").val(),
				segundoAp : $("#informanteSegundoAp").val(),
				idParentesco : $("#informanteidParentesco").val(),
				otroParentesco : $("#informanteOtroParentesco").val(),
				nacionalidad : $("#informanteidNacionalidad").val(),
				idDocumentoIdentidad : $("#informanteidDocumentoIdentidad").val(),
				otroDocIdentidad : $("#informanteOtroDocIdentidad").val(),
				numDocIdentidad: $("#informanteNumDocIdentidad").val(),
				tipoDirec: $("#informanteTipoDireccion").val(),
				calle: $("#informanteCalle").val(),
				numExt: $("#informanteNumExterno").val(),
				numInt: $("#informanteNumInterno").val(),
				estado: $("#idEstado").val(),
				municipio: $("#idMunicipio").val(),
				localidad: $("#idLocalidad").val(),
				colonia: $("#idColonia").val(),
				cp: $("#idCodigoPostal").val(),
				tipoTel: $("#informanteTipoTel").val(),
				lada: $("#lada").val(),
				telefono : $("#informanteTelefonos").val(),
				ext: $("#ext").val(),
				correoElectronico: $("#correoElectronico").val(),
				informante: $("input#informante:checked").val(),
				notificaciones: $("input#notificaciones:checked").val(),
				//informante: $("#informante").is(":checked"),
				//notificaciones: $("#notificaciones").is(":checked"),
				idCedula: $("#idCedula").val(),
			};

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_informante',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalInformanteAgregar.modal('hide');
					table.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

		btnGuardarDesaparecido.click (function(){
			var dataString = {
				sexo: $("#sexo").val(),
				nombres: $("#desaparecidoNombres").val(), 
				primerAp: $("#desaparecidoPrimerAp").val(),
				segundoAp: $("#desaparecidoSegundoAp").val(),
				apodo: $("#apodo").val(),
				edadExtravio: $("#edadExtravio").val(),
				edadAparente: $("#edadAparente").val(),
				fechaNacimiento: $("#fechaNacimiento").val(),
				idNacionalidad: $("#idNacionalidad").val(),
				idEscolaridad: $("#idEscolaridad").val(),
				idOcupacion: $("#idOcupacion").val(),
				idDocumentoIdentidad: $("#identificacion").val(),
				otroDocIdentidad: $("#otraIdentificacion").val(),
				numDocIdentidad: $("#numIdentificacion").val(),
				idEdocivil: $("#idEdocivil").val(),
				embarazo: $("#embarazo").val(),
				numGestacion: $("#numGestacion").val(),
				tipoGestacion: $("#tipoGestacion").val(),
				rumoresBebe: $("#rumoresBebe").val(),
				pormenores: $("#pormenores").val(),
				antecedentesJudiciales: $("#antecedentesJudiciales").val(),
				idCedula: $("#idCedula").val(),				
			}

			//console.log(dataString);
			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_desaparecido',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					//modalInformanteAgregar.modal('hide');
					//table.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});

		})

		tableFamiliares.bootstrapTable({				
			url: routeIndex+'/get_familiares/1',
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

		btnAgregarFamiliarDesa.click(function(e){
			modalDesaparecidoFamiliar.modal('show');
		})

	})
</script>
@endsection

