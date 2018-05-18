@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>

<link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorselector/bootstrap-colorselector.min.css') }}">
	
@endsection
@section('content')
@include('navs.navs_datos',array('activar' => 'vestimenta'))
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarPrenda">AGREGAR PRENDA</button>

<div class="card-body bg-white">	
	@include('vestimenta.modals.modal_vestimenta')
	<table id="tableInformantes" ></table>
</div>
@endsection

@section('scripts')
<script src="{{ asset('plugins/bootstrap-colorselector/bootstrap-colorselector.min.js')}}" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		var btnPrendaAgregar = $('#btnAgregarPrenda');
		var btnPrendaActualizar = $('#btnActualizarPrenda');
		var btnPrendaGuardar = $('#btnGuardarPrenda');
		var modal = $('#modalVestimenta');
		var table = $('#tableInformantes');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeVestimenta = '{!! route('vestimentas.index') !!}';

		
		
		//Vista de datos de la vestimenta
		btnPrendaAgregar.click(function(e){
			console.log('Entrando al modal');
			modal.modal('show');
			cargarDatosColores();
			$('#idPrenda').prop('disabled', true);			
			btnPrendaActualizar.hide();
			btnPrendaGuardar.show();
		});

		$('#idVestimenta').click(function(){
			console.log('Tomando el valor de: '+$(this).val());
			cargarDatosPrendas(selected = null, idVestimenta = $(this).val());
		})

		var cargarDatosPrendas= function(selected = null, idVestimenta = null){

			$.getJSON(routeIndex+'/get_prendas/'+idVestimenta)
			.done(function(data){
				$('#idPrenda').empty();				
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (selected == value.id_menu) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
					$('#idPrenda').append(optionselect);					
				});
				if (data.length){
					$('#idPrenda').prop('disabled', false);	
				} else {
					$('#idPrenda').prop('disabled', true);
				}
										
			});

		}

		var cargarDatosColores= function(selected = null){			
			$.getJSON(routeIndex+'/get_colores')
			.done(function(data){				
				$('#idColor').empty();				
				$.each(data, function(key, value){						
					optionSelect = '<option';
					if (selected == value.id_menu) { optionSelect = optionSelect+' selected'; }
					optionselect = optionSelect+' value='+value.id+' data-color="'+value.codigo+'">'+value.nombre+'</option>';
					$('#idColor').append(optionselect);										
				});
				$('#idColor').colorselector();
			});
		}


		btnPrendaGuardar.click (function(){

			//var archivo = $('input[name=archivo]');
			var fileToUpload = $('#archivo')[0].files[0];

			var formData = new FormData();
			formData.append("archivo",fileToUpload);
			formData.append('material', $('#material').val());
			formData.append('diseno', $('#diseno').val());
			formData.append('idMarca', $('#idMarca').val());
			formData.append('idColor', $('#idColor').val());
			formData.append('idVestimenta', $('#idVestimenta').val());
			formData.append('idPrenda', $('#idPrenda').val());
			formData.append('idDesaparecido', '{{ $desaparecido->id }}');
		
			$.ajax({
				type: 'POST',
				url: routeVestimenta,				
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function(data) {						
					console.log(data);
					//table.bootstrapTable('refresh');
					//$("#modalVestimenta").modal("hide");
													
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
		});


		$("#prendaColor").change(function() {
			otroC = $('#prendaColor').val();
			//alert(otroC);
			if (otroC==15) {
				$("#otroColor").show();
			}else{
				$("#otroColor").hide();
			}
		});

		$("#idColor").change(function() {
			otroCo = $('#idColor').val();
			//alert(otroC);
			if (otroCo==15) {
				$("#otroColor2").show();
			}else{
				$("#otroColor2").hide();
			}
		});
		$("#idMarca").change(function() {
			otraP = $('#idMarca').val();
			
			if (otraP==26) {
				$("#otraPrenda").show();
			}else{
				$("#otraPrenda").hide();
			}
		});


		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editPrenda"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
		window.operateEvents = {
			'click #editPrenda': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idPrenda').val(row.id);
				$('#nombrePrenda').val(row.tipo);
				$('#prendaMaterial').val(row.material);
				$('#prendaColor').val(row.pColor);
				$('#colorPrenda').val(row.otroC);
				$('#prendaDibujoBordadoFranjas').val(row.dibujo);
				$('#prendaMarcaOrigen').val(row.marca);
				$('#prendaTalla').val(row.talla);
				$("#btnActualizarP").show();
				$("#btnPrenda").hide();
				$("#modalVestimenta").modal("show");
			}
		}
		$('#nuevoInformante').click(function(e){
			$('#modalGeneral').modal('show');
		})
		table.bootstrapTable({				
			url: routeIndex+'/get_prendas/',
			columns: [{					
				field: 'id',
				title: 'ID',
			}, {					
				field: 'tipo',
				title: 'Nombre',
			}, {					
				field: 'color',
				title: 'Color',
			}, {					
				field: 'material',
				title: 'Material',
			}, {					
				field: 'dibujo',
				title: 'Dibujo/Bordado/Franjas',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
		
	//Fin de Vista de datos de la vestimenta
	//Vista de datos de calzado
		$('#nuevoZapato').click(function(e){
			$('#modalCalzado').modal('show');
		});
		$("#idTipo").change(function() {
			tipoCal = $('#idTipo').val();
			if (tipoCal==1) {
				$("#FormularioCalzado").hide();
			}else{
				$("#FormularioCalzado").show();
			}
		});
		$("#idTipo").change(function() {
			otroTipoZ = $('#idTipo').val();
			if (otroTipoZ==8) {
				$("#otroZapato").show();
				
			}else{
				$("#otroZapato").hide();
			}
		});
		var table2 = $('#tableCalzado');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editCalzado"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
		window.operateEvents = {
			'click #editCalzado': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idTipo').val(row.cTipo);
				$('#otroCalzado').val(row.oCalzado);
				$('#idColor').val(row.cColor);
				$('#otroColorCalzado').val(row.ocCalzado);
				$('#modeloCalzado').val(row.modelo);
				$('#idMarca').val(row.cMarca);
				$('#otraMarca').val(row.oMarca);
				$('#calzadoTalla').val(row.talla);
				$("#modalCalzado").modal("show");
			}
		}
		$('#nuevoInformante').click(function(e){
			$('#modalGeneral').modal('show');
		})
		table2.bootstrapTable({				
			url: routeIndex+'/get_calzado/',
			columns: [{					
				field: 'nombretipo',
				title: 'Tipo calzado',
			}, {					
				field: 'nombremarca',
				title: 'Marca',
			}, {					
				field: 'modelo',
				title: 'Modelo',
			}, {					
				field: 'nombrecolor',
				title: 'Color',
			}, {					
				field: 'talla',
				title: 'Talla',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
	//Fin de vista de datos de calzado
	//----
        
	//Vista de datos de accesorios
        
        var table3 = $('#tableAccesorios');
		var routeIndex3 = '{!! route('consultas.index') !!}';
        
        var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editAccesorio"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
        window.operateEvents = {
			'click #editAccesorio': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idAccesorio').val(row.id);
				$('#accesoriosObjetos').val(row.tipo);
				$('#accesorioMaterial').val(row.material);
				$('#accesorioColor').val(row.pColor);
				$('#accesorioColorOtro').val(row.otroC);
				$('#accesorioMarcaOrigen').val(row.marca);
				$("#btnActualizarA").show();
				$("#btnAccesorio").hide();
				$("#modalAccesorios").modal("show");
			}
		}
        
		$('#nuevoAccesorio').click(function(e){
			$('#modalAccesorios').modal('show');
			$('#btnActualizarA').hide();
			$('#btnAccesorio').show();
		});  
        
        $('#btnAccesorio').click (function(){
		//alert("hola");
		var dataString = {
			
			//prendaTipo: $('#idVestimenta').val(),
            accesoriosObjetos: $('#accesoriosObjetos').val(),
            accesorioMaterial: $('#accesorioMaterial').val(),
            accesorioColor: $('#accesorioColor').val(),
            accesorioColorOtro: $('#accesorioColorOtro').val(),
            accesorioMarcaOrigen: $('#accesorioMarcaOrigen').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/store_accesorios',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table3.bootstrapTable('refresh');
				$("#modalAccesorios").modal("hide");
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
        $('.modal-footer').on('click','#btnActualizarA', function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			accesoriosObjetos: $('#accesoriosObjetos').val(),
            accesorioMaterial: $('#accesorioMaterial').val(),
            accesorioColor: $('#accesorioColor').val(),
            accesorioColorOtro: $('#accesorioColorOtro').val(),
            accesorioMarcaOrigen: $('#accesorioMarcaOrigen').val(),
			idCedula: $("#idCedula").val(),
			idAccesorio: $("#idAccesorio").val()
		};

		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_accesorios',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table3.bootstrapTable('refresh');
				$("#modalAccesorios").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
        
       		table3.bootstrapTable({				
			url: routeIndex3+'/get_accesorios/',
			columns: [{					
				field: 'id',
				title: 'ID',
			}, {					
				field: 'tipo',
				title: 'Nombre',
			}, {					
				field: 'color',
				title: 'Color',
			}, {					
				field: 'material',
				title: 'Material',
			},{					
				field: 'marca',
				title: 'Marca',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		}) 
        
        
        
    //FIN DEL APARTADO DE ACCESORIOS
        
        

		//----
		//----
		$('.modal-footer').on('click','#btnActualizarP', function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			nombrePrenda: $('#nombrePrenda').val(),
			prendaMaterial: $('#prendaMaterial').val(),
			prendaColor: $('#prendaColor').val(),
			otroColor: $('#colorPrenda').val(),
			prendaDibujoBordadoFranjas: $('#prendaDibujoBordadoFranjas').val(),
			prendaMarcaOrigen: $('#prendaMarcaOrigen').val(),
			prendaTalla: $('#prendaTalla').val(),
			idCedula: $("#idCedula").val(),
			idPrenda: $("#idPrenda").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_vestimenta',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table.bootstrapTable('refresh');
				$("#modalVestimenta").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
		//----
		//----
		$('#btnCalzado').click (function(){
		//alert("hola");
		var dataString = {
			
			//prendaTipo: $('#idVestimenta').val(),
			idTipo: $('#idTipo').val(),
			calzadoTalla: $('#calzadoTalla').val(),
			idColor: $('#idColor').val(),
			idMarca: $('#idMarca').val(),
			modeloCalzado: $('#modeloCalzado').val(),
			//descripcionVestimenta: $('#descripcionVestimenta').val(),
			//accesoriosObjetos: $('#accesoriosObjetos').val(),
			otroColorCalzado: $('#otroColorCalzado').val(),
			otroCalzado: $('#otroCalzado').val(),
			otraMarca: $('#otraMarca').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_calzado',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table2.bootstrapTable('refresh');
				$("#modalCalzado").modal("hide");
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
	$('#btnAOS').click (function(){
		//alert("hola");
		var dataString = {
			descripcionVestimenta: $('#descripcionVestimenta').val(),
			accesoriosObjetos: $('#accesoriosObjetos').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_accesorios',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});

	});
</script>
@endsection