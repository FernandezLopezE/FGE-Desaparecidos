@extends('layouts.app_uipj')
@section('css')
{!! Html::style('') !!}
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
		var idDesaparecido = '{{ $desaparecido->id }}';
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeVestimenta = '{!! route('vestimentas.index') !!}';
		var routeAsset = '{{asset("")}}';
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark btn-xs edit" id="editVestimenta"><i class="fa fa-edit"></i>&nbsp;</button>';	
			
			return [btn].join('');
		};

		window.operateEvents = {
			'click #editVestimenta': function (e, value, row, index) {
				cargarDatosColores(row.color.codigo);
				cargarDatosPrendas(row.idPrenda, row.idVestimenta);
				btnPrendaActualizar.val(row.id);
				$('select#idVestimenta option[value="'+row.idVestimenta+'"]').attr("selected",true);
				$('#material').val(row.material);
				$('select#idMarca option[value="'+row.idMarca+'"]').attr("selected",true);
				$('#talla').val(row.talla);
				$('#diseno').val(row.diseno);

				$('#idPrenda').prop('disabled', false);
				btnPrendaActualizar.show();
				btnPrendaGuardar.hide();
				modal.modal('show');
			}
		}

		table.bootstrapTable({				
			url: routeIndex+'/get_vestimentas/'+idDesaparecido,
			columns: [{					
				title: 'Foto',
				formatter: (value, row, index, field) => {
					return '<img src="'+routeAsset+row.path+'" class="rounded float-left" width="136" height="136">'; 				
                }
			}, {
				field: 'vestimenta.nombre',
				title: 'Vestimenta',				
			}, {					
				field: 'prenda.nombre',
				title: 'Tipo',
			}, {					
				field: 'marca.nombre',
				title: 'Marca',
			}, {					
				//field: 'color.nombre',
				title: 'Color',
				formatter: (value, row, index, field) => {
					span = '<span class="btn-colorselector" style="background-color: ';
					span = span+row.color.codigo;
					span = span+';"><div></div></span>';
					return span; 				
                }
			}, {					
				field: 'material',
				title: 'Material',
			}, {					
				field: 'diseno',
				title: 'Observaciones',
			}, {
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		});		
		
		//Vista de datos de la vestimenta
		btnPrendaAgregar.click(function(e){
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

			$.getJSON(routeIndex+'/get_catprendas/'+idVestimenta)
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
				if (selected) {
					$('#idColor').colorselector('setColor', selected);
				}
				
			});
		}


		btnPrendaGuardar.click (function(){

			//var archivo = $('input[name=archivo]');
			var fileToUpload = $('#archivo')[0].files[0];
			if (fileToUpload == 'undefined') { fileToUpload = null }

			var formData = new FormData();
			formData.append("archivo",fileToUpload);
			formData.append('material', $('#material').val());
			formData.append('diseno', $('#diseno').val());
			formData.append('talla', $('#talla').val());
			formData.append('idMarca', $('#idMarca').val());
			formData.append('idColor', $('#idColor').val());
			formData.append('idVestimenta', $('#idVestimenta').val());
			formData.append('idPrenda', $('#idPrenda').val());
			formData.append('idDesaparecido', idDesaparecido);
		
			$.ajax({
				type: 'POST',
				url: routeVestimenta,				
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function(data) {						
					console.log(data);
					table.bootstrapTable('refresh');
					$("#modalVestimenta").modal("hide");
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


		btnPrendaActualizar.click (function(){

			//var archivo = $('input[name=archivo]');
			var fileToUpload = $('#archivo')[0].files[0];
			if (fileToUpload == 'undefined') { fileToUpload = null }

			var formData = new FormData();
			formData.append("archivo",fileToUpload);
			formData.append('material', $('#material').val());
			formData.append('diseno', $('#diseno').val());
			formData.append('talla', $('#talla').val());
			formData.append('idMarca', $('#idMarca').val());
			formData.append('idColor', $('#idColor').val());
			formData.append('idVestimenta', $('#idVestimenta').val());
			formData.append('idPrenda', $('#idPrenda').val());
			formData.append('idDesaparecido', idDesaparecido);
		
			$.ajax({
				type: 'PUT',
				url: routeVestimenta+'/'+btnPrendaActualizar.val(),				
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function(data) {						
					console.log(data);
					table.bootstrapTable('refresh');
					$("#modalVestimenta").modal("hide");
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





	});
</script>
@endsection