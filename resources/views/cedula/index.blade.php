@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}

@endsection

@section('titulo', '')

@section('content')
<div class="card">
	<div class="card-header">
		<h4><i class="fa fa-paste"></i> Cédulas</h4>
	</div>
	 
	<div class="card-body bg-white">
		<table id="table"style="overflow:auto;"
		    data-search="true"
		    data-trim-on-search="false">
		<thead>
                <tr>
                    <th data-field="no" 
                        data-sortable="true"></th>
                    <th data-field="nombres" 
                        data-sortable="true"></th>
                    <th data-field="apodo" 
                        data-sortable="true"></th>
                    <th data-field="genero" 
                        data-sortable="true"></th>
                    <th data-field="edadExtravio" 
                        data-sortable="true"></th>
                    <th data-field="nacionalidad" 
                        data-sortable="true"></th>
                    <th data-field="created_at" 
                        data-sortable="true"></th>
                    <th data-field="acciones" 
                        data-sortable="true"></th>
                    
                </tr>
        </thead>        
        </table>
	</div>
</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/bootstrap-table-multiple-search.js') !!}
<script type="text/javascript">
	$(function (){
        var hola = $('#hola');
		var table = $('#table');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeCedula = '{!! route('cedula.index') !!}';
		var routeBoletin = '{!! route('boletin.index') !!}';
		var routeMail = '{!! route('mail.index') !!}';

		var formatTableActions = function(value, row, index) {				
			btn = '<a href="'+routeCedula+'/'+row.id+'" class="btn btn-dark btn-sm" id="edit" data-toggle="tooltip" data-placement="right" title="Editar cédula" ><i class="fa fa-address-card"></i></a>&nbsp;';
			btn = btn+'<a href="'+routeBoletin+'/'+row.id+'" class="btn btn-dark btn-sm" id="edit" data-toggle="tooltip" data-placement="right" title="Boletín" target="_blank"><i class="fa fa-file"></i></a>&nbsp;';
			/*btn = btn+'<a href="'+routeMail+'/'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-envelope"></i></a>&nbsp;';*/
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

		var formatGenero = function(value, row, index){
      		texto = '';
      		if (row.sexo =='H') 
        		texto = 'MASCULINO'
      		else
                texto = 'FEMENINO'

     		return [texto].join('');
    	}

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
			rowStyle: rowStyle,				
			url: routeIndex+'/get_cedulas',
			columns: [{		
				title: 'No.',			
				field: 'rownum'
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
				title: 'Género',
				formatter: formatGenero
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
				field: '',
				title: 'Estatus',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]			
		})
        
setTimeout(function(){toggle()},1000); 
        
        })
function toggle(){
    $('[data-toggle="tooltip"]').tooltip();
	
}
			
               

		
    

</script>
@endsection