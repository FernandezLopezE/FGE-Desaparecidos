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

	<a href="/desaparecido/persona_desaparecida/{!! $cedula->id !!}" class='btn btn-large btn-primary'>
		<i class="fa fa-angle-double-left"></i>  Atras
	</a>
	<a href="/desaparecido/persona_desaparecida/{!! $cedula->id !!}" class='btn btn-large btn-primary pull-right'>
		Siguiente  <i class="fa fa-angle-double-right"></i>
	</a>

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

		/*btnGuardarDesaparecido.click (function(){
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

		})*/



	})
</script>
@endsection

