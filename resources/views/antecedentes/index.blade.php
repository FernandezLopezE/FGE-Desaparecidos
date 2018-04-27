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
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Contacto
			</a>
			<a class="nav-item nav-link" href="{{route('domicilios.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Domicilios
			</a>
			<a class="nav-item nav-link active" href="#" aria-selected="false">
				Antecedentes
			</a>
			<a class="nav-item nav-link" href="{{route('desaparecido.show_vestimenta',['id' => $desaparecido->id])}}" aria-selected="false">
				Vestimenta
			</a>				
	</div>
</nav>
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarAntecedente">
	Agregar
</button>
<div class="card-body bg-white">
	
	<table id="tableAntecedentes" ></table>
	@include('antecedentes.modals.modal_antecedente')
</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
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
        var btnLimpiar = $('#btnLimpiar');
		
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
	           $( "#modalAntecedentes" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });
		})
        
        btnLimpiar.click(function(){
          $('#modalAntecedentes').find('form')[0].reset();
          $('#modalAntecedentes').removeData('modal');
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