@extends('layouts.app_uipj')

@section ('css')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>  
@endsection


@section('content')
	
	<div class="card border-primary">
		<div class="card-header">
			<div class = "row"> 
				<div class = "col">
					<h4>Dependencias</h4>
				</div>
				<div class = "col">					
			{{ Form::button('<i class="fa fa-send "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-lg pull-right'] )  }}			
			{{--<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia"> AGREGAR</button>--}}
			@include('includes.modal_editar_archivos')
				</div>
			</div>
		</div>
			<div class="card-body bg-white">
				<table id="tableDependencias" ></table>
			</div>
	</div>	


	

@endsection

@section('scripts')

{{--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">

		$(document).ready(function(){

				$('#idCorreosExternos').select2();


		var table = $('#tabledependencias');
		var routeIndex = '{!! route('dependencias.index') !!}';	
		

		table.bootstrapTable({				
			url: routeIndex+'/get_desaparecidos/{{$id}}',
			columns: [{					
				field: 'nombre',
				title: 'Dependencia',
			}, 
			{					
				field: 'correo',
				title: 'Correo',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
				
		});
		
		
		
		 

</script>

@endsection
