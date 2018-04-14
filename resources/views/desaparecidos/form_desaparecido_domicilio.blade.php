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
		<div class="card border-primary">
			<div class="card-header">
				<h5 class="card-title">Domicilio actual o último del extraviado</h5>
				<button type="button" class="btn btn-dark pull-right"  id="btnNuevoDomicilio"><i class="fa fa-plus"></i> AGREGAR NUEVO DOMICILIO</button>
			</div>
			<div class="card-body">
				<table id="table" ></table>
				@include('includes.modal')
			</div>
		</div>

	<a href="/desaparecido/desaparecido" class='btn btn-large btn-primary openbutton'>Siguiente</a>

@endsection

@section('scripts')
{!! HTML::script('personal/js/funciones_generales.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#table');
		var routeIndex = '{!! route('consultas.index') !!}';
		var idCedula = '{!! $cedula->id !!}';
		var btnAgregarDomicilio = $('#btnNuevoDomicilio');
		var btnAgregarInformante = $('#btnAgregarInformante');
		var modalGeneral = $('#modalGeneral');
		var bodyModal = $('.modal-body');

        btnAgregarDomicilio.click(function(e){
        	console.log('Entrando al model');
            bodyModal.empty();
            var dataCampos = [
                {campo:'select',idCampo:'tipoDireccion',nameCampo:'Tipo de domicilio:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'input',idCampo:'calle',nameCampo:'Calle:',typeCampo:'text',valorCampo:'' ,placeholder:'Ingrese la calle',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'input',idCampo:'numExterno',nameCampo:'Número exterior:',typeCampo:'text',valorCampo:'' ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'input',idCampo:'numInterno',nameCampo:'Número interior:',typeCampo:'text',valorCampo:'' ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'select',idCampo:'idEstado',nameCampo:'Estado:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'select',idCampo:'idMunicipio',nameCampo:'Municipio:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'select',idCampo:'idLocalidad',nameCampo:'Localidad:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'select',idCampo:'idColonia',nameCampo:'Colonia:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'select',idCampo:'idCodigoPostal',nameCampo:'CódigoPostal:',typeCampo:'text',valorCampo:'' ,placeholder:'',newClass:'mayuscula',divSize:'4',datos:''},
                {campo:'input',idCampo:'telefono',nameCampo:'Teléfono:',typeCampo:'text',valorCampo:'' ,placeholder:'S/N',newClass:'mayuscula',divSize:'4',datos:''},
            ];                

			$.getJSON(routeIndex+'/get_tipos_domicilios')
			.done(function(data){
				console.log(data);
				idParentesco = null;
				selectedParentesco = $('#tipoDireccion');
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

			campos = estilo_modal.mostrar(dataCampos);
			bodyModal.append(campos);
			modalGeneral.modal('show');            

        })

		btnAgregarInformante.click (function(){
			
			var dataString = {
				tipoDireccion: $("#tipoDireccion").val(),
				calle : $("#calle").val(),
				numExterno : $("#numExterno").val(),
				numInterno : $("#numInterno").val(),
				idEstado : $("#idEstado").val(),
				idMunicipio : $("#idMunicipio").val(),
				idLocalidad : $("#idLocalidad").val(),
				idColonia : $("#idColonia").val(),
				idCodigoPostal : $("#idCodigoPostal").val(),
				telefono : $("#telefono").val(),
			};

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_desaparecido_domicilio',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					//modalGeneral.modal('hide');
					//table.bootstrapTable('refresh');
				},
				error: function(data) {
					console.log(data);
				}
			});
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