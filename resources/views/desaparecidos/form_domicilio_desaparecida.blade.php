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

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DOMICILIOS DE LA PERSONA DESAPARECIDA
						<button type="button" class="btn btn-dark pull-right"  id="btnAddDomicilio"><i class="fa fa-plus"></i> AGREGAR DOMICILIO</button>
					</h5>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="table" ></table>
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
		var table = $('#table');
		var routeIndex = '{!! route('consultas.index') !!}';
		var idCedula = '{!! $cedula->id !!}';
		var idDesaparecido = '{!! $desaparecido->id !!}';
		var btnAgregar = $('#btnAddDomicilio');
		var btnNewInformante = $('#nuevoInformante');
		var modalGeneral = $('#modalGeneral');
		var bodyModal = $('.modal-body');

		console.log('idCedula'+idCedula+' idDesaparecido');


		btnNewInformante.click(function(e){

			bodyModal.empty();

			var dataCampos = [
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
				{campo:'input',idCampo:'informanteTelefonos',nameCampo:'Número:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},				
			];

			$.getJSON(routeIndex+'/get_tipos_domicilios')
			.done(function(data){
				console.log(data);
				idParentesco = null;
				selectedParentesco = $('#informanteTipoDireccion');
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
				selectedParentesco.append('<option value="0">[ SELECCIONE TIPO]</option>');
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (idParentesco == value.id) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					selectedParentesco.append(optionselect);
				});
			});
						

			campos = estilo_modal.mostrar(dataCampos);

			bodyModal.append(campos);


			modalGeneral.modal('show');

			$("#informanteCalle").val('disabled');
		})

		btnAgregar.click (function(){
			
			var dataString = {
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
				telefono : $("#informanteTelefonos").val(),
				idCedula: $("#idCedula").val(),
			};

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_desaparecido_domicilio',
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
					{campo:'input',idCampo:'informanteTelefonos',nameCampo:'Número:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},					
				];

				$.getJSON(routeIndex+'/get_tipos_domicilios')
				.done(function(data){
					idTipoDireccion = row.tipoDireccion;
					selectedParentesco = $('#informanteTipoDireccion');
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
					selectedParentesco.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idTiposTelefonos == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedParentesco.append(optionselect);
					});
				});						

				campos = estilo_modal.mostrar(dataCampos);

				bodyModal.append(campos);

				modalGeneral.modal('show');			
			}				
		}


		table.bootstrapTable({				
			url: routeIndex+'/get_domicilios_persona/15',
			columns: [{					
				field: 'calles',
				title: 'Calle',
			}, {					
				field: 'numExterno',
				title: 'No Externo',
			}, {					
				field: 'numInterno',
				title: 'No Interno',
			}, {					
				field: 'idEstado',
				title: 'Estado',
			}, {					
				field: 'idMunicipio',
				title: 'Municipio',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})

		bodyModal.on('change', '#idEstado', function(){
			$("#idMunicipio").empty();
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