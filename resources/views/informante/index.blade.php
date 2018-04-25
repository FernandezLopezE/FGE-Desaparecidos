@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
	
@endsection

@section('titulo', 'Reporte de investigación de una persona desaparecida')

@section('content')
	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DATOS DE LOS INFORMANTES
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>
						<a href="{{route('extraviado.create_desaparecido',['id' => $cedula->id])}}" class="btn btn-dark pull-right">
							<i class="fa fa-pencil-square-o"></i> SIGUIENTE
						</a>
					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="tableInformantes" ></table>
			@include('informante.modals.modal_informante')
		</div>
	</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/lada.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#tableInformantes');
		var tableFamiliares = $('#table_familiares');
		var routeIndex = '{!! route('consultas.index') !!}';		
		var routeInformante = '{!! route('informante.index') !!}';
		var idCedula = '{!! $cedula->id !!}';
		var btnAgregarTelefono = $('#btnAgregarTelefono');
		var btnAgregarInformante = $('#btnAgregarInformante');
		var btnAgregarFamiliarDesa = $('#btnAgregarFamiliarDesaparecido');
		var btnGuardarInformante = $('#btnGuardarInformante');
		var btnGuardarDesaparecido = $('#btnGuardarPersonaDesaparecida');
		var modalInformanteAgregar = $('#modalInformante');
		var modalInformanteDetalle = $('#modalInformanteShow');
		var modalDesaparecidoFamiliar = $('#modalDesaparecidoFamiliar');
		var bodyModalInformante = $('#modal-body-informante');
		var modalFooter = $('.modal-footer');

		var addCamposTelefono = function(tipoTel = null, lada=null, telefono=null, ext=null) {
            $("#telefono2").append('<div class="row"><div class="form-group col-lg-2">{!! Form::label ("informanteTipoTel","Tipo de telefono:") !!}	            {!! Form::select ("informanteTipoTel[]", $tiposTelefonos,"'+tipoTel+'",["class" => "form-control","id" => "informanteTipoTel[]"])!!} </div> <div class="form-group col-lg-2">                                             {!! Form::label ("lada","Lada:") !!}	                                    {!! Form::select ("lada[]", $ladas,"'+lada+'",["class" => "form-control","id" => "lada[]"])!!} </div>  <div class="form-group col-lg-3">                                                                {!! Form::label ("informanteTelefonos","Número:") !!}                    {!! Form::text ("informanteTelefonos[]",old("'+telefono+'"),["class" => "form-control mayuscula valid","data-validation" => "required","data-validation-error-msg-required" => "El campo es requerido","id" => "informanteTelefonos[]"] )!!} </div>    <div class="form-group col-lg-1">                                              {!! Form::label ("ext","Ext:") !!}                                        {!! Form::text ("ext[]",old("'+ext+'"), ["class" => "form-control mayuscula","id" => "ext[]"] )!!} </div> </div>');
		}; 
		
		btnAgregarTelefono.click(function(e){
			addCamposTelefono(tipoTel = null, lada=null, telefono=null, ext=null);
		});
	
		
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
				
				telefonos = $.parseJSON(row.telefonos)
				console.log(telefonos);
				$.each(telefonos, function(key, value){
					console.log(value);
					addCamposTelefono(value.tipoTel, value.lada, value.telefono, value.ext);
				})

				//$('select#informanteTipoTel option[value="'+telefonos.tipoTel+'"]').attr("selected",true);
				//$('select#lada option[value="'+telefonos.lada+'"]').attr("selected",true);
				//$("#informanteTelefonos").val(telefonos.telefono);
				//$("#ext").val(telefonos.ext);
				
				$("#correoElectronico").val(row.correoElectronico);
				if (row.informante == 0) {
					$("input#informante").iCheck('uncheck');
				}

				if (row.notificaciones == 0) {
					$("input#notificaciones").iCheck('uncheck');
				}

				modalFooter.empty();
				modalFooter.append('<button type="button" class="btn btn-dark" id="btnEditarInformante" value="'+row.idDesaparecido+'"><i class="fa fa-save"></i> EDITAR</button>		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>');

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
			$("input#notificaciones").iCheck('check');
			$("input#informante").iCheck('check');
			$("#formDesaparecido")[0].reset();
			$("#otro_doc").hide();
			$('#otro_parent').hide();
			$('#idMunicipio').empty();
			$("#idLocalidad").empty();
			$("#idColonia").empty();
			$("#idCodigoPostal").empty();


			//$("#informanteOtroDocIdentidad").ocultar
			//informanteOtroParentesco
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
				tipoTel: $("select[name='informanteTipoTel[]']").map(function(){return $(this).val();}).get(),
				lada: $("select[name='lada[]']").map(function(){return $(this).val();}).get(),				
				telefono : $("input[name='informanteTelefonos[]']").map(function(){return $(this).val();}).get(),				
				ext: $("input[name='ext[]']").map(function(){return $(this).val();}).get(),
				correoElectronico: $("#correoElectronico").val(),
				informante: $("input#informante:checked").val(),
				notificaciones: $("input#notificaciones:checked").val(),
				idCedula: $("#idCedula").val(),
			};

			$.ajax({
				type: 'POST',
				url: routeInformante,
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

		modalFooter.on('click', '#btnEditarInformante', function(){

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
				notificaciones: $("input#notificaciones:checked").val()		 					
			};

			idDesaparecido = $("#btnEditarInformante").val();

			$.ajax({
				type: 'PUT',
				url: routeInformante+'/'+idDesaparecido,
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



	// Mostrando los municipios que pertenecen a determinado estado.
	$('#idEstado').on('change', function(){		
		$("#idMunicipio").empty();
		var idEstado = $(this).val();
		if(idEstado) {
			$.ajax({
				url: routeIndex+'/municipios/'+idEstado,
				type:"GET",
				dataType:"json",
				success:function(data) {
						$("#idMunicipio").empty();
					$.each(data, function(key, value){
						$("#idMunicipio").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
					});
				},				
			});
		} else {
			$('#idMunicipio').empty();
		}
	});

	// Mostrando las localidades que pertenecen a determinado municipio.
	 $('#idMunicipio').on('change', function(){
		$("#idLocalidad").empty();
		var idMunicipio = $(this).val();
		if(idMunicipio) {			
			$.ajax({
				url: routeIndex+'/localidades/'+idMunicipio,
				type:"GET",
				dataType:"json",
				success:function(data) {
						$("#idLocalidad").empty();
					$.each(data, function(key, value){
						$("#idLocalidad").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
					});
				},				
			});
		}
		// Mostrando las colonias que pertenecen a determinado municipio.				
		$("#idColonia").empty();
		var idMunicipio = $(this).val();
		if(idMunicipio) {			
			$.ajax({
				url: routeIndex+'/colonias/'+idMunicipio,
				type:"GET",
				dataType:"json",
				success:function(data) {
					$("#idColonia").empty();
					$.each(data, function(key, value){
						$("#idColonia").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
					});
				},				
			});
		}

		// Mostrando los codigos postales que pertenecen a determinado municipio.		
		$("#idCodigoPostal").empty();
		var idMunicipio = $(this).val();
		if(idMunicipio) {
			$.ajax({
				url: routeIndex+'/codigos/'+idMunicipio,
				type:"GET",
				dataType:"json",
				success:function(data) {
						$("#idCodigoPostal").empty();
					$.each(data, function(key, value){
						$("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');
					});
				},				
			});
		}
	});

	//para Codigo Postal  seleccionando una colonia
	$('#idColonia').on('change', function(){
		$("#idCodigoPostal").empty();
		var idColonia = $(this).val();
		if(idColonia) {	
			$.ajax({
				url: routeIndex+'/codigos2/'+idColonia,
				type:"GET",
				dataType:"json",
				success:function(data) {
						$("#idCodigoPostal").empty();
					$.each(data, function(key, value){
						$("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');
					});
				},			   
			});
		} else {
			$('#idColonia').empty();
		}
	});

	})
</script>
@endsection
