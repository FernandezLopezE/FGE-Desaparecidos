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
	<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia">
	AGREGAR DEPENDENCIA
</button>
<button type="button" class="btn btn-dark pull-right" style="margin-right:10px" id="btnAgregarDestinatario">
	AGREGAR DESTINATARIOS
</button>	

<div class="card-body bg-white">
	<table id="tableDependencias" ></table>
	@include('includes.modalDependencias')
</div>
<div class="card-body bg-white">
	<table id="tableDependencias" ></table>
	@include('includes.modalDestinatarios')
</div>
	

@endsection

@section('scripts')
<script type="text/javascript">
    var btnAgregarDependencia = $('#btnAgregarDependencia');
    var modalDependencia = $('#modalDependencia');
    
    var btnAgregarDestinatario = $('#btnAgregarDestinatario');
    var modalDestinatario = $('#modalDestinatario');
    
    btnAgregarDependencia.click(function(e){
			modalDependencia.modal('show');
           /* $( "#modalDestinatarios" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });*/
		})
    
    btnAgregarDestinatario.click(function(e){

			modalDestinatario.modal('show');

		})
    $('#btnDestinatario').click (function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			
			correo: $('#correoDest').val(),
			hoja: $('#hoja').val(),
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
				table.bootstrapTable('refresh');
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