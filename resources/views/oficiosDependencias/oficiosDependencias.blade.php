@extends('layouts.app_uipj')
@section('content')
@section('css')
{!! Html::style('personal/css/jquery-confirm.min.css') !!}
<style type="text/css">

</style>
@endsection	


@include('includes.modal_Oficios')
<div class="card">
	<div class="card-header">
		<h5>Documentos generados</h5>
	</div>
	<div class="card-body">
		<center><h3 style="color: red;"><i class="fa fa-exclamation-triangle"></i> En desarrollo</h3></center>
		@include('includes.modal_VerDepend')
		<table class="table table-hover" id="documentos">
		    <thead>
		        <tr>
		            <th >Documento</th>
		            <th >Dependencia</th>
		            <th >Estado</th>
		            <th >Acciones</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<tr>
		    		<th>Anexos</th>
		    		<th>
		        		<button type="button" class="btn btn-primary btn-sm" id="btnRuben">Ver contenido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
		        	</th>
		        	<th><i class="fa fa-square" style="color:#1CA800;"></i> Completo</th>
		        	<th>
		        		<a class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="#" href="{!! route('oficioCedula.show',['id' => $desaparecido[0]->idCedula]) !!} " target="_blank"><i class="fa fa-print"></i></a>
		        	</th>
		    	</tr>
		        <tr>
		        	<th>Solicitud sobre puntos de revisión</th>
		        	<th>
		        		<button type="button" class="btn btn-primary btn-sm" id="btn1">Ver dependencias</button>
		        	</th>
		        	<th><i class="fa fa-square" style="color:#1CA800;"></i> Completo</th>
		        	<th>
		        		<a class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="imp1" href="{!! route('GeneraOficio.index') !!} " target="_blank"><i class="fa fa-print"></i></a>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Enviar por correo"><i class="fa fa-envelope"></i></button>
		        	</th>
		        </tr>
		        <tr>
		        	<th>Solicitud de videos de caseta</th>
		        	<th><button type="button" class="btn btn-primary btn-sm" id="btn2">Ver dependencias</button></th>
		        	<th><i class="fa fa-square" style="color:#DF0000;"></i> Faltan datos</th>
		        	<th>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="imp2"><i class="fa fa-print"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Enviar por correo"><i class="fa fa-envelope"></i></button>
		        	</th>
		        </tr>
		        <tr>
		        	<th>Solicitud de alerta migratoria</th>
		        	<th><button type="button" class="btn btn-primary btn-sm" id="btn3">Ver dependencias</button></th>
		        	<th><i class="fa fa-square" style="color:#DF0000;"></i> Faltan datos</th>
		        	<th>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="imp3"><i class="fa fa-print"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Enviar por correo"><i class="fa fa-envelope"></i></button>
		        	</th>
		        </tr>
		    </tbody>
		</table>
	</div>
</div>
<br>




@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>
{!! Html::script('personal/js/jquery-confirm.min.js') !!}
<script type="text/javascript">
$(document).ready( function (){

	$("#editar").click(function() {
		console.log("Hola");
		$("#modalOficios").modal();
	});

	$("#btn1").click(function(event) {
		$("#modal_VerDepend").modal();
		$("#valor1").show();
		$("#valor2").hide();
		$("#valor3").hide();
		$("#valor4").hide();
	});

	$("#btn2").click(function(event) {
		$("#modal_VerDepend").modal();
		$("#valor1").hide();
		$("#valor2").show();
		$("#valor3").hide();
		$("#valor4").hide();
	});

	$("#btn3").click(function(event) {
		$("#modal_VerDepend").modal();
		$("#valor1").hide();
		$("#valor2").hide();
		$("#valor3").show();
		$("#valor4").hide();
	});

	$("#btnRuben").click(function(event) {
		$("#modal_VerDepend").modal();
		$("#valor1").hide();
		$("#valor2").hide();
		$("#valor3").hide();
		$("#valor4").show();
	});



	$("#imp2").click(function(event) {
		$.confirm({
        		title: 'Advertencia',
        		content: 'Falta información para poder generar el archivo',
        		type: 'dark',
        		typeAnimated: true,
        		buttons: {
        			tryAgain: {
                	text: 'Aceptar',
                	btnClass: 'btn-dark',
                	action: function(){
                			}
                		},
            		}
        		});
	});

	$("#imp3").click(function(event) {
		$.confirm({
        		title: 'Advertencia',
        		content: 'Falta información para poder generar el archivo',
        		type: 'dark',
        		typeAnimated: true,
        		buttons: {
        			tryAgain: {
                	text: 'Aceptar',
                	btnClass: 'btn-dark',
                	action: function(){
                			}
                		},
            		}
        		});
	});

});
</script>
@endsection