@extends('layouts.app_uipj')

@section('content')

{!! Form::model($desaparecido, ['action' => 'DesaparecidoController@store_informante']) !!}
		{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}


		<div class="card border-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-lg-12">
						<h5 class="card-title">
							DATOS DE LOS INFORMANTES
							<button type="button" class="btn btn-dark pull-right"  id="nuevoInformante" data-toggle="modal" data-target="modal"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>

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

	<a href="/desaparecido/desaparecido" class='btn btn-large btn-primary openbutton'>Siguiente</a>
{!! Form::close() !!}
@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var table = $('#tableInformantes');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				

			btn = '<button class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};


		table.bootstrapTable({				
			url: routeIndex+'/get_informantes/2',
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
				//events: operateEvents
			}]				
		})
	})

</script>
@endsection