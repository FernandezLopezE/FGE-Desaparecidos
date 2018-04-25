@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
	.gi-3x{font-size: 2.5em;}
</style>
	
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')

<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link" href="#" aria-selected="true">
				Entrevista
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Informantes
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Desaparecido
			</a>
			<a class="nav-item nav-link" href="{{route('familiar.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Familiares
			</a>
			<a class="nav-item nav-link active" href="#" aria-selected="false">
				Domicilios
			</a>
			<a class="nav-item nav-link" href="{{route('antecedentes.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Antecedentes
			</a>				
	</div>
</nav>
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarDomicilio">
	Agregar
</button>

<div class="card-body bg-white">
	<table id="tableDomicilios" ></table>
	@include('domicilios.modals.modal_domicilio')
</div>



@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var table = $('#tableDomicilios');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeDomicilio = '{!! route('domicilios.index') !!}';
		var btnAgregar = $('#btnAgregarDomicilio');
		var btnGuardar = $('#btnGuardarDomicilio');
		var modal = $('#modalDomicilio');
		var modalFooter = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}'
		
		table.bootstrapTable({				
			url: routeIndex+'/get_domicilios/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'tipoDireccion',
				title: 'Tipo',
			}, {					
				field: 'calle',
				title: 'Calle',
			}, {					
				field: 'numExterno',
				title: 'No externo',
			}, {				
				field: 'idEstado',
				title: 'Estado',
			}, {				
				field: 'idMunicipio',
				title: 'Municipio',
			}]			
		})

		btnAgregar.click(function(e){
			modal.modal('show');
		})

		btnGuardar.click (function(){
			
			var dataString = {
				tipoDireccion : $("#tipoDireccion").val(),
				calle: $("#calle").val(),
				numExterno : $("#numExterno").val(),
				numInterno : $("#numInterno").val(),
				idEstado : $("#idEstado").val(),
				idMunicipio : $("#idMunicipio").val(),
				idLocalidad : $("#idLocalidad").val(),
				idColonia : $("#idColonia").val(),
				idCodigoPostal : $("#idCodigoPostal").val(),
				tipoTel : $("#tipoTel").val(),
				telefonos : $("#telefonos").val(),
				ext : $("#ext").val(),
				idDesaparecido: idDesaparecido,
			};

			$.ajax({
				type: 'POST',
				url: routeDomicilio,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					modal.modal('hide');
					table.bootstrapTable('refresh');
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

	})

</script>
@endsection