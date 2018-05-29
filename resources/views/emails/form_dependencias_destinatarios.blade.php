@extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
	
@endsection


@section('content')

<nav>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link nav-item active"  aria-selected="true" id="navDependencias" href="#">Dependencias</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav-item"  aria-selected="false" id="navDestinatarios" href="#">Destinatarios</a>
  </li>
</ul>

	<div class="nav nav-tabs" id="nav-tab" role="tablist">
			
			
					
	</div>
</nav>

<div class="card border-success" id="divDependencias">
	<div class="card-header">
		<h5 class="card-title">Dependencias
		<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia">
	AGREGAR
</button>
		</h5>
	</div>
	<div class="card-body">	
	    @include('includes.modalDependencias')
<table id="tableDependencias"
data-toggle="table"
data-toolbar="#toolbar"
data-search="true"
data-show-refresh="true"
data-show-toggle="true"
data-show-columns="true"
data-sort-name="id_user"
data-unique-id="id_user"
data-sort-order="asc"
data-show-export="true"
data-pagination="true"
data-url=""
data-search="true">
    <thead>
    <tr>
        <th data-field="id_user" 
            data-sortable="true">No.</th>
        <th data-field="username" 
            data-sortable="true">User</th>
        <th data-field="desactivate" 
            data-sortable="true">Desactivate</th>
        <th data-field="desactivate" 
            data-sortable="true">Desactivate2</th>       
        <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
    </tr>
    </thead>
</table>
	    
	    
	</div>
</div><hr>


<div class="card border-success" id="divDestinatarios" style="display:none">
	<div class="card-header">
		<h5 class="card-title">Destinatarios
            <button type="button" class="btn btn-dark pull-right" style="margin-right:10px" id="btnAgregarDestinatario">
                AGREGAR
            </button>
		</h5>
	</div>
	<div class="card-body">	
	<table id="tableDestinatarios"
data-toggle="table"
data-toolbar="#toolbar"
data-search="true"
data-show-refresh="true"
data-show-toggle="true"
data-show-columns="true"
data-sort-name="id_user"
data-unique-id="id_user"
data-sort-order="asc"
data-show-export="true"
data-pagination="true"
data-url=""
data-search="true">
    <thead>
    <tr>
        <th data-field="id_user" 
            data-sortable="true">No.</th>
        <th data-field="username" 
            data-sortable="true">User</th>
        <th data-field="desactivate" 
            data-sortable="true">Desactivate</th>
            <th data-field="desactivate" 
            data-sortable="true">Desactivate2</th>      
        <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
    </tr>
    </thead>
</table>

	    @include('includes.modalDestinatarios')
	</div>
</div><hr>

	

@endsection

@section('scripts')
<script type="text/javascript">
    
    $('#navDestinatarios').click(function(e){
			$('#divDependencias').hide();
            $('#divDestinatarios').show();
            $('#navDestinatarios').addClass('active');
            $('#navDependencias').removeClass('active');
		});
    $('#navDependencias').click(function(e){
			$('#divDependencias').show();
            $('#divDestinatarios').hide();
            $('#navDependencias').addClass('active');
            $('#navDestinatarios').removeClass('active');
        
		});
    
    
    var btnAgregarDependencia = $('#btnAgregarDependencia');
    var modalDependencia = $('#modalDependencia');
    var formDependencia = $('#FormularioDependencia');

    var btnAgregarDestinatario = $('#btnAgregarDestinatario');
    var modalDestinatario = $('#modalDestinatario');
    
    var table = $('#tableDependencias');
    var table2 = $('#tableDestinatarios');
    var routeIndex = '{!! route('consultas.index') !!}';
    
    var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark" id="editDependencia">&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
    window.operateEvents = {
			'click #editDependencia': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
                
                $('#idDependencia').val(row.id);
                $('#nombreDependencia').val(row.nombre);
				$('#idDocumento').val(row.dDocumento);
				$('#correoDependencia').val(row.correo);
				$("#btnActualizarDependencia").show();
				$("#btnDependencia").hide();
				$("#modalDependencia").modal("show");
			}
		}
    var formatTableActions2 = function(value, row, index) {				
			btn = '<button class="btn btn-dark" id="editDestinatario">&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
    window.operateEvents2 = {
			'click #editDestinatario': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
                
                $('#idDestinatario').val(row.id);
                $('#nombreDest').val(row.nombre);
                $('#cargo').val(row.cargo);
				$('#idDependenciaDest').val(row.dDependencia);
				$("#btnActualizarDestinatario").show();
				$("#btnDestinatario").hide();
				$("#modalDestinatario").modal("show");
			}
		}
    
    btnAgregarDependencia.click(function(e){
			modalDependencia.modal('show');
            $('#btnActualizarDependencia').hide();
			$('#btnDependencia').show();
           /* $( "#modalDestinatarios" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });*/
		})
    
    btnAgregarDestinatario.click(function(e){

			modalDestinatario.modal('show');
            $('#btnActualizarDestinatario').hide();
			$('#btnDestinatario').show();
		})
    $('#btnDestinatario').click (function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			
			nombre: $('#nombreDest').val(),
			cargo: $('#cargo').val(),
            dependencia: $('#idDependenciaDest').val(),
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/index_agregar_dependencias/store_destinatario',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table2.bootstrapTable('refresh');
				$("#modalDestinatario").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
    
    $('#btnDependencia').click (function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			
			nombre: $('#nombreDependencia').val(),
			doc: $('#idDocumento').val(),
            correo: $('#correoDependencia').val(),
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/index_agregar_dependencias/store_dependencia',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table.bootstrapTable('refresh');
				$("#modalDependencia").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
    
    table.bootstrapTable({				
			url: routeIndex+'/get_dependencias',
			columns: [{					
				field: 'id',
				title: 'No.',
			}, {					
				field: 'nombre',
				title: 'Nombre',
			}, {					
				field: 'correo',
				title: 'Correo',
			}, {					
				field: 'documento',
				title: 'Documento',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
    
    table2.bootstrapTable({				
			url: routeIndex+'/get_destinatarios',
			columns: [{					
				field: 'id',
				title: 'No.',
			}, {					
				field: 'nombre',
				title: 'Nombre',
			}, {					
				field: 'cargo',
				title: 'Cargo',
			}, {					
				field: 'dependencia',
				title: 'Dependencia',
			},{					
				title: 'Acciones',
				formatter: formatTableActions2,
				events: operateEvents2
			}]				
		})
    
    
    $('.modal-footer').on('click','#btnActualizarDependencia', function(){
		//alert("hola");
		var dataString = {
			nombre: $('#nombreDependencia').val(),
			doc: $('#idDocumento').val(),
            correo: $('#correoDependencia').val(),
            idDependencia: $('#idDependencia').val(),
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/index_agregar_dependencias/update_dependencia',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table.bootstrapTable('refresh');
				$("#modalDependencia").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
    
    $('.modal-footer').on('click','#btnActualizarDestinatario', function(){
		//alert("hola");
		var dataString = {

			nombre: $('#nombreDest').val(),
			cargo: $('#cargo').val(),
            dependencia: $('#idDependenciaDest').val(),
            idDestinatario: $('#idDestinatario').val(),
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/index_agregar_dependencias/update_destinatario',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table2.bootstrapTable('refresh');
				$("#modalDestinatario").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
    
	$(document).ready(function(){
		$('#idDependencias').select2();
});
</script>
@endsection