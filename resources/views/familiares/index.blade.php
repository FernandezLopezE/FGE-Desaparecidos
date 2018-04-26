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
			<a class="nav-item nav-link" href="{{route('extraviado.show',['id' => $desaparecido->idCedula])}}" aria-selected="false">
				Desaparecido
			</a>
			<a class="nav-item nav-link active" href="#" aria-selected="false">
				Familiares
			</a>
			<a class="nav-item nav-link" href="{{route('contactos.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Contacto
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Domicilios
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Antecedentes
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Vestimenta
			</a>				
	</div>
</nav>
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarFamiliar">
	Agregar
</button>

<div class="card-body bg-white">
	<table id="tableFamiliares" ></table>
	@include('familiares.modals.modal_familiar')
</div>



@endsection

@section('scripts')
<script type="text/javascript">
	$(function (){
		var table = $('#tableFamiliares');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeFamiliar = '{!! route('familiar.index') !!}';
		var btnAgregarFamiliar = $('#btnAgregarFamiliar');
		var btnGuardarFamiliar = $('#btnGuardarFamiliar');
		var modalFamiliar = $('#modalFamiliar');
		var modalFooter = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}'

		console.log(routeIndex+'/get_familiares/{!! $desaparecido->id !!}');
		
		table.bootstrapTable({				
			url: routeIndex+'/get_familiares/{!! $desaparecido->id !!}',
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
				field: 'fechaNacimiento',
				title: 'Fecha de nacimiento',
			}, {				
				field: 'edad',
				title: 'Edad',
			}]			
		})

		btnAgregarFamiliar.click(function(e){
			modalFamiliar.modal('show');
		})

		btnGuardarFamiliar.click (function(){
			
			var dataString = {
				nombre : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				fechaNacimiento : $("#fechaNacimiento").val(),
				edad : $("#edad").val(),
				idParentesco : $("#idParentesco").val(),
				idDesaparecido: idDesaparecido,
			};

			$.ajax({
				type: 'POST',
				url: routeFamiliar,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					btnAgregarFamiliar.modal('hide');
					table.bootstrapTable('refresh');
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

		 $('#fechaNacimiento').change(function(){  
			from = $("#fechaNacimiento").val().split("/");
			fechaNacimiento = from[2] + "-" + from[1] + "-" + from[0];
			fechaEnviada = Date.parse(fechaNacimiento);	   
			fechaActual= new Date();	   
			if (fechaEnviada > fechaActual)
			{
				$("#fechaNacimiento").val("");
				$("#edadExtravio").val("");
			}else{

			$.ajax({
				   url: routeIndex+'/edad/'+fechaNacimiento,
				   type:"GET",
				   dataType:"json",

				   success:function(data) {
						   $('#edad').val(data);
				   },
				   
				});
			}
		});
	})

</script>
@endsection