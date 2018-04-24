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

@section('titulo', 'Reporte No: <code>123456789</code>')

@section('content')

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-2 pull-left">
					<a href="{{route('extraviado.create_desaparecido',['id' => $desaparecido->idCedula])}}">
						<i class="fa fa-chevron-circle-left gi-3x"></i>
					</a>			
				</div>
				<div class="col-lg-8">
					<h5 class="card-title">						
						<span align="center">DATOS DE LOS FAMILIARES DE LA PERSONA DESAPARECIDA</span>										
					</h5>
				</div>
				<div class="col-lg-2">
					<a href="{{route('antecedentes.show',['id' => $desaparecido->id])}}">
							<i class="fa fa-chevron-circle-right gi-3x pull-right"></i>
					</a>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<button type="button" class="btn btn-dark pull-right"  id="btnAgregarFamiliar"><i class="fa fa-plus"></i> Agregar familiar</button>
			<table id="tableFamiliares" ></table>
			@include('familiares.modals.modal_familiar')
		</div>
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