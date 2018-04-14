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
							<button type="button" class="btn btn-dark pull-right"  id="nuevoInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>

						</h5>
					</div>	
				</div>	
			</div>
			<div class="card-body">
				<table id="tableInformantes" ></table>
			@include('includes.modal')


		</div>
		</div>


		
	{!! Form::submit('Atras', ['class' => 'btn btn-large btn-primary openbutton']); !!}


	<a href="/desaparecido/persona_desaparecida/{!! $cedula->id !!}" class='btn btn-large btn-primary openbutton'>Siguiente</a>

@endsection

@section('scripts')
{!! HTML::script('personal/js/funciones_generales.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#tableInformantes');
		var routeIndex = '{!! route('consultas.index') !!}';
		var idCedula = '{!! $cedula->id !!}';
		var btnAgregarInformante = $('#btnAgregarInformante');
		var btnNewInformante = $('#nuevoInformante');
		var modalGeneral = $('#modalGeneral');
		var bodyModal = $('.modal-body');


		btnNewInformante.click(function(e){

			bodyModal.empty();

			var dataCampos = [
				{campo:'input',idCampo:'informanteNombres',nameCampo:'Nombre(s):',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese nombres',newClass:'mayuscula sinNumeros',divSize:'4',datos:''},
				{campo:'input',idCampo:'informantePrimerAp',nameCampo:'Primer apellido:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese el primer apellido',newClass:'mayuscula sinNumeros',divSize:'4',datos:''},
				{campo:'input',idCampo:'informanteSegundoAp',nameCampo:'Segundo apellido:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese el segundo apellido',newClass:'mayuscula sinNumeros',divSize:'4',datos:''},
				{campo:'select',idCampo:'idParentesco',nameCampo:'Parentesco:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'informanteOtroParentesco',nameCampo:'Especifique:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese otro parentesco',newClass:'mayuscula sinNumeros',divSize:'4',datos:''},
				{campo:'select',idCampo:'idNacionalidad',nameCampo:'Nacionalidad:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'idDocumentoIdentidad',nameCampo:'Identificación:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'otroDocIdentidad',nameCampo:'Especifique:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese otro tipo de documento',newClass:'mayuscula sinNumeros',divSize:'4',datos:''},
				{campo:'input',idCampo:'numDocIdentidad',nameCampo:'Número de identificación:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese número de documento',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'informanteTipoDireccion',nameCampo:'Tipo de dirección:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'informanteCalle',nameCampo:'Calle:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese el nombre de la calle',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'informanteNumExterno',nameCampo:'Num. ext:',typeCampo:'text',valorCampo:'' ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'informanteNumInterno',nameCampo:'Num. int:',typeCampo:'text',valorCampo:'' ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'idEstado',nameCampo:'Estado:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'idMunicipio',nameCampo:'Municipio:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'idLocalidad',nameCampo:'Localidad:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'idColonia',nameCampo:'Colonia:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'idCodigoPostal',nameCampo:'Código postal:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'informanteTipoTel',nameCampo:'Tipo de telefono:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'select',idCampo:'lada',nameCampo:'Lada:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'informanteTelefonos',nameCampo:'Número:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'ext',nameCampo:'Ext:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
				{campo:'input',idCampo:'correoElectronico',nameCampo:'Correo electrónico:',typeCampo:'text',valorCampo:'' ,placeholder:'ejemplo@email.com',newClass:'mayuscula email',divSize:'4',datos:''},
				{campo:'input',idCampo:'informante',nameCampo:'SÓLO INFORMANTE:',typeCampo:'checkbox',valorCampo:'' ,placeholder:'',newClass:'',divSize:'4',datos:''},
				{campo:'input',idCampo:'notificaciones',nameCampo:'AUTORIZADA PARA DAR, OIR Y RECIBIR INFORMES:',typeCampo:'checkbox',valorCampo:'' ,placeholder:'',newClass:'',divSize:'4',datos:''},
			];			
				
			$.getJSON(routeIndex+'/get_parentescos')
			.done(function(data){
				idParentesco = null;
				selectedParentesco = $('#idParentesco');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE PARENTESCO ]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});

			$.getJSON(routeIndex+'/get_nacionalidades')
			.done(function(data){
				idParentesco = null;
				selectedParentesco = $('#idNacionalidad');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE NACIONALIDAD ]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});

			$.getJSON(routeIndex+'/get_documentos_identidad')
			.done(function(data){
				idDocumentoIdentidad = null;
				selectedParentesco = $('#idDocumentoIdentidad');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE DOCUMENTO ]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idDocumentoIdentidad == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});

			$.getJSON(routeIndex+'/get_tipos_domicilios')
			.done(function(data){
				console.log(data);
				idParentesco = null;
				selectedParentesco = $('#informanteTipoDireccion');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE TIPO ]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});

			$.getJSON(routeIndex+'/get_estados')
			.done(function(data){
				idParentesco = null;
				selectedParentesco = $('#idEstado');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE ESTADO]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});

			$.getJSON(routeIndex+'/get_tipos_telefonos')
			.done(function(data){
				idParentesco = null;
				selectedParentesco = $('#informanteTipoTel');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE TIPO]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});

			$.getJSON(routeIndex+'/get_ladas')
			.done(function(data){
				idParentesco = null;
				selectedParentesco = $('#lada');
				selectedParentesco.select2();
				selectedParentesco.append('<option value="0">[ SELECCIONE LADA]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.lada+'</option>';
					selectedParentesco.append(optionselect);
				});
			});						

			campos = estilo_modal.mostrar(dataCampos);

			bodyModal.append(campos);


			modalGeneral.modal('show');
		})

		btnAgregarInformante.click (function(){
			
			var dataString = {
				nombre : $("#informanteNombres").val(),
				primerAp : $("#informantePrimerAp").val(),
				segundoAp : $("#informanteSegundoAp").val(),
				idParentesco : $("#idParentesco").val(),
				otroParentesco : $("#informanteOtroParentesco").val(),
				nacionalidad : $("#idNacionalidad").val(),
				idDocumentoIdentidad : $("#idDocumentoIdentidad").val(),
				otroDocIdentidad : $("#otroDocIdentidad").val(),
				numDocIdentidad: $("#numDocIdentidad").val(),
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
				informante: $("#informante").is(":checked"),
				notificaciones: $("#notificaciones").is(":checked"),
				idCedula: $("#idCedula").val(),
			};

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_informante',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalGeneral.modal('hide');
					table.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})	
		
		var formatTableActions = function(value, row, index) {				

			btn = '<button class="btn btn-info btn-xs" id="editInformante"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};

		window.operateEvents = {
			'click #editInformante': function (e, value, row, index) {					
				console.log(row);
				bodyModal.empty();
				$('#informanteNombres').val(row.nombre);
				var dataCampos = [
					{campo:'input',idCampo:'informanteNombres',nameCampo:'Nombre(s):',typeCampo:'text',valorCampo:row.nombres ,placeholder:'Ingresa nombres',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informantePrimerAp',nameCampo:'Primer apellido:',typeCampo:'text',valorCampo:row.primerAp ,placeholder:'Ingresa el primer apellido',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informanteSegundoAp',nameCampo:'Segundo apellido:',typeCampo:'text',valorCampo:row.segundoAp ,placeholder:'Ingresa el segundo apellido',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idParentesco',nameCampo:'Parentesco:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informanteOtroParentesco',nameCampo:'Especifique:',typeCampo:'text',valorCampo:row.otroParentesco ,placeholder:'Ingresa otro parentesco',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idNacionalidad',nameCampo:'Nacionalidad:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idDocumentoIdentidad',nameCampo:'Identificación:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'otroDocIdentidad',nameCampo:'Especifique:',typeCampo:'text',valorCampo:row.otroDocIdentidad ,placeholder:'Ingrese otro tipo de documento',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'numDocIdentidad',nameCampo:'Número de identificación:',typeCampo:'text',valorCampo:row.numDocIdentidad ,placeholder:'Ingrese número de documento',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'informanteTipoDireccion',nameCampo:'Tipo de dirección:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informanteCalle',nameCampo:'Calle:',typeCampo:'text',valorCampo:row.calle ,placeholder:'Ingrese el nombre de la calle',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informanteNumExterno',nameCampo:'Num. ext:',typeCampo:'text',valorCampo:row.numExterno ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informanteNumInterno',nameCampo:'Num. int:',typeCampo:'text',valorCampo:row.numInterno ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idEstado',nameCampo:'Estado:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idMunicipio',nameCampo:'Municipio:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idLocalidad',nameCampo:'Localidad:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idColonia',nameCampo:'Colonia:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'idCodigoPostal',nameCampo:'Código postal:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'informanteTipoTel',nameCampo:'Tipo de telefono:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'select',idCampo:'lada',nameCampo:'Lada:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informanteTelefonos',nameCampo:'Número:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'ext',nameCampo:'Ext:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'correoElectronico',nameCampo:'Correo electrónico:',typeCampo:'text',valorCampo:row.correoElectronico ,placeholder:'ejemplo@email.com',newClass:'mayuscula',divSize:'4',datos:''},
					{campo:'input',idCampo:'informante',nameCampo:'SÓLO INFORMANTE:',typeCampo:'checkbox',valorCampo:'' ,placeholder:'',newClass:'',divSize:'4',datos:''},
					{campo:'input',idCampo:'notificaciones',nameCampo:'AUTORIZADA PARA DAR, OIR Y RECIBIR INFORMES:',typeCampo:'checkbox',valorCampo:'' ,placeholder:'',newClass:'',divSize:'4',datos:''},
				];					
					
				$.getJSON(routeIndex+'/get_parentescos')
				.done(function(data){
					idParentesco = row.idParentesco;
					selectedParentesco = $('#idParentesco');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE PARENTESCO ]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_nacionalidades')
				.done(function(data){
					idNacionalidad = row.idNacionalidad;
					selectedParentesco = $('#idNacionalidad');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE NACIONALIDAD ]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idNacionalidad == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_documentos_identidad')
				.done(function(data){
					idDocumentoIdentidad = row.idDocumentoIdentidad;
					selectedParentesco = $('#idDocumentoIdentidad');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE DOCUMENTO ]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idDocumentoIdentidad == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_tipos_domicilios')
				.done(function(data){
					idTipoDireccion = row.tipoDireccion;
					selectedParentesco = $('#informanteTipoDireccion');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE TIPO ]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idTipoDireccion == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_estados')
				.done(function(data){
					idEstado = row.idEstado;
					selectedParentesco = $('#idEstado');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE ESTADO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idEstado == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_tipos_telefonos')
				.done(function(data){
					idTiposTelefonos = null;
					selectedParentesco = $('#informanteTipoTel');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idTiposTelefonos == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_ladas')
				.done(function(data){
					idLadas = null;
					selectedParentesco = $('#lada');
					selectedParentesco.select2();
					selectedParentesco.append('<option value="0">[ SELECCIONE LADA]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idLadas == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.lada+'</option>';
						selectedParentesco.append(optionselect);
					});
				});

				$("input#notificaciones").prop('checked', true);
				if (row.notificaciones) {$("#notificaciones").prop( "checked", true )}
				if (row.informante) {$("#informante").prop( "checked", true )}							

				campos = estilo_modal.mostrar(dataCampos);

				bodyModal.append(campos);


				modalGeneral.modal('show');			
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
				field: 'informante',
				title: 'Informante',
			}, {					
				field: 'notificaciones',
				title: 'Notificaciones',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})

		bodyModal.on('change', '#idEstado', function(){
			$("#idMunicipio").empty();
			$("#idMunicipio").select2();
			var idMunicipio = $(this).val();
			if(idMunicipio) {
				$.ajax({
					url: '/municipio/'+idMunicipio,
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
				$('#idEstado').empty();
			}
		});

		// Cambios localidades
		bodyModal.on('change', '#idMunicipio', function(){
			$("#idLocalidad").empty();
			$("#idLocalidad").select2();
			var idLocalidad = $(this).val();
			if(idLocalidad) {
				
				$.ajax({
					url: '/localidades/'+idLocalidad,
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

		//colonias

		var idColonia = $(this).val();
		$("#idColonia").empty();
		$("#idColonia").select2();
		if(idColonia) {
			
			$.ajax({
				url: '/colonias2/'+idColonia,
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

		//codigo postal
		 var idCodigo = $(this).val();
		$("#idCodigoPostal").empty();
		$("#idCodigoPostal").select2();
		$("#idCodigoPostal").prop('disabled', true);
		if(idCodigo) {
			$.ajax({
				url: '/colonias2/'+idCodigo,
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
	bodyModal.on('change', '#idColonia', function(){
	   $("#idCodigoPostal").empty();
	   $("#idCodigoPostal").select2();
	   $("#idCodigoPostal").prop('disabled', true);
	   var idCodigoPostal = $(this).val();
	   if(idCodigoPostal) {	
		   $.ajax({
			   url: '/codigos2/'+idCodigoPostal,
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