@extends('layouts.app_uipj')

@section('content')
<table id="tableCedulas"></table>
@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var table = $('#tableCedulas');
		var routeIndex = '{!! route('consultas.index') !!}';
		
		var formatTableActions = function(value, row, index) {

			btn = '<button class="btn btn-warning btn-sm" id="edit"><i class="fa fa-edit"></i>&nbsp;Editar</button>';				
			
			return [btn].join('');
		};

		window.operateEvents = {
			'click #edit': function (e, value, row, index) {				
			}
		}	


		table.bootstrapTable({				
			url: routeIndex+'/get_cedulas',
			columns: [{					
				field: 'id',
				title: 'ID',
			}, {					
				field: 'entrevistadorNombres',
				title: 'Nombre',
			}, {					
				field: 'entrevistadorPrimerAp',
				title: 'Paterno',
			}, {				
				field: 'entrevistadorSegundoAP',
				title: 'Materno',				
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
	})
</script>
@endsection