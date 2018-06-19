@extends('layouts.app_uipj')
@section('content')
@section('css')
<style type="text/css">

</style>
@endsection	

@include('includes.modal_Oficios')
<div class="card">
	<div class="card-header">
		<h5>Documentos generados</h5>
	</div>
	<div class="card-body">
		<table class="table table-hover table-responsive" id="documentos">
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
		        	<th>Solicitud sobre puntos de revisión</th>
		        	<th style="width: 50%;">SECRETARIA DE SEGURIDAD PÚBLICA, 
		        		ÚNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO DE VERACRUZ,
		        		CENTRO ESTATAL DE CONTROL, COMANDO, COMUNICACIONES Y TRANSPORTE,
						SECRETARÍA DE FINANZAS Y PLANEACIÓN
		        	</th>
		        	<th><i class="fa fa-square" style="color:#1CA800;"></i> Completo</th>
		        	<th><button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" id="editar"><i class="fa fa-edit"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="verDoc"><i class="fa fa-print"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Enviar por correo"><i class="fa fa-envelope"></i></button>
		        	</th>
		        </tr>
		        <tr>
		        	<th>Solicitud de videos de caseta</th>
		        	<th>Secretaria de Comunicaciones y Transporte</th>
		        	<th><i class="fa fa-square" style="color:#FFFF00;"></i> Pendiente</th>
		        	<th><button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" id="editar"><i class="fa fa-edit"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="verDoc"><i class="fa fa-print"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Enviar por correo"><i class="fa fa-envelope"></i></button>
		        	</th>
		        </tr>
		        <tr>
		        	<th>Solicitud de alerta migratoria</th>
		        	<th>Fiscalía General del Estado</th>
		        	<th><i class="fa fa-square" style="color:#DF0000;"></i> Faltan datos</th>
		        	<th><button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" id="editar"><i class="fa fa-edit"></i></button>
		        		<button class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Ver/imprimir" id="verDoc"><i class="fa fa-print"></i></button>
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
<script type="text/javascript">
$(document).ready( function (){
	//$('#documentos').DataTable();

	$("#editar").click(function() {
		console.log("Hola");
		$("#modalOficios").modal();
	});

	
});
</script>
@endsection