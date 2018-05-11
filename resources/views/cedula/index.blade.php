@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}

@endsection

@section('titulo', '')

@section('content')
<div class="card">
	<div class="card-header">
		<h4><i class="fa fa-paste"></i> Cedulas</h4>
	</div>
	<div class="card-body bg-white">
		<table id="table"style="overflow:auto;"></table>
	</div>
</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#table');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeCedula = '{!! route('cedula.index') !!}';
		var routeBoletin = '{!! route('boletin.index') !!}';
		var routeMail = '{!! route('mail.enviar') !!}';

		var formatTableActions = function(value, row, index) {				
			btn = '<a href="'+routeCedula+'/'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-address-card"></i></a>&nbsp;';
			btn = btn+'<a href="'+routeBoletin+'/'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-file"></i></a>&nbsp;';
			btn = btn+'<a href="'+routeMail+'/'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-envelope"></i></a>&nbsp;';
			/*btn = '<div class="btn-group">';
			btn = btn+'<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
			btn = btn+'Acciones';
			btn = btn+'</button>';
			btn = btn+'<div class="dropdown-menu">';
			btn = btn+'<a class="dropdown-item" href="#">Action</a>';
			btn = btn+'<a class="dropdown-item" href="#">Another action</a>';
			btn = btn+'<a class="dropdown-item" href="#">Something else here</a>';
			btn = btn+'<div class="dropdown-divider"></div>';
			btn = btn+'<a class="dropdown-item" href="#">Separated link</a>';
			btn = btn+'</div>'
			btn = btn+'</div>';*/			
			return [btn].join('');envelope-square
		};

		window.operateEvents = {
			'click #edit': function (e, value, row, index) {
			}
		}

		function rowStyle(row, index) {
			if(row.nombres){
				return {};
			} else {
				return { classes: 'table-warning'};
			}				
		}
		
		table.bootstrapTable({
			pagination: true,
			pageList: [10, 25, 50, 100],
			search: true,
			rowStyle: rowStyle,				
			url: routeIndex+'/get_cedulas',
			columns: [{					
				field: 'id',
				title: '#',
			}, {					
				title: 'Nombres',
				formatter: (value, row, index, field) => {
                    if(row.nombres){
                    	return row.nombres+' '+row.primerAp+' '+row.segundoAp;
                    } else {
                    	return 'Pendiente...';
                    }			
                }
			}, {					
				field: 'apodo',
				title: 'Apodo',
			}, {					
				field: 'sexo',
				title: 'Sexo',
			}, {				
				field: 'edadExtravio',
				title: 'Edad extravio',
			}, {				
				field: 'nacionalidad',
				title: 'Nacionalidad',
			}, {				
				field: 'created_at',
				title: 'Apertura',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]			
		})
	})

</script>
@endsection