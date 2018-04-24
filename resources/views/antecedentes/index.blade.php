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

@section('titulo', 'Reporte No: <code>123456789</code>')

@section('content')

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-2 pull-left">
					<a href="{{route('extraviado.create_desaparecido',['id' => $desaparecido->idCedula])}}">
						<i class="fa fa-chevron-circle-left gi-3x"></i>
					</a>			
				</div>
				<div class="col-lg-8">
					<h5 class="card-title">						
						<span align="center">ANTECEDENTES DE LA PERSONA DESAPARECIDA</span>	
					</h5>
				</div>
				<div class="col-lg-2">
					<a href="">
							<i class="fa fa-chevron-circle-right gi-3x pull-right"></i>
					</a>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<button type="button" class="btn btn-dark pull-right"  id="btnAgregarAntecedente"><i class="fa fa-plus"></i> Agregar antecedente</button>
			<table id="tableAntecedentes" ></table>
			@include('antecedentes.modals.modal_antecedente')
		</div>
	</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var table = $('#tableAntecedentes');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeAntecedente = '{!! route('antecedentes.index') !!}';
		var btnAgregarAntecedente = $('#btnAgregarAntecedente');
		var btnGuardarAntecedente = $('#btnGuardarAntecedente');
		var modalAntecedentes = $('#modalAntecedentes');
		var modalFooter = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}'
		
		table.bootstrapTable({				
			url: routeIndex+'/get_antecedentes/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'fecha',
				title: 'Fecha',
			}, {					
				field: 'observaciones',
				title: 'Observaciones',
			}]			
		})

		btnAgregarAntecedente.click(function(e){
			modalAntecedentes.modal('show');
		})

		btnGuardarAntecedente.click (function(){
			
			var dataString = {
				mesAnio : $("#mesAnio").val(),
				idDelito : $("#idDelito").val(),
				idCentroReclusion : $("#idCentroReclusion").val(),
				observaciones : $("#observaciones").val(),
				idDesaparecido: idDesaparecido,
			};			

			$.ajax({
				type: 'POST',
				url: routeAntecedente,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					modalAntecedentes.modal('hide');
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