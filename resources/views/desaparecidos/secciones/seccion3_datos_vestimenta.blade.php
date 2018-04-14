@section('css')
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
	
@endsection
<hr>
<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos de la vestimenta
		<button type="button" class="btn btn-dark pull-right"  id="nuevaPrenda"><i class="fa fa-plus"></i> AGREGAR PRENDA</button>
		</h5>
	</div>
	<div class="card-body">	
	@include('includes.modalVestimenta')
	<table id="tableInformantes" ></table>
	</div>
</div><hr>

<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos del calzado
		<button type="button" class="btn btn-dark pull-right"  id="nuevoZapato"><i class="fa fa-plus"></i> AGREGAR CALZADO</button>
		</h5>
	</div>
	<div class="card-body">	
		@include('includes.modalCalzado')
		<table id="tableCalzado" ></table>
	</div>
</div><hr>

<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">ACCESORIOS Y OBJETOS</h5>
	</div>
	<div class="card-body">
		<div class="row">
            <div class="col">
              {!! Form::label ('elijaAccesoriosObjetos','Elija los accesorios y objetos que tenía el desaparecido:') !!}
              {!! Form::select('accesoriosObjetos[]', $accesoriosObjetos, null, ['class' => 'form-control', 'multiple' => 'multiple' ,'id'=>'accesoriosObjetos']) !!}
            </div>
          </div><hr>

          <div class="row">
            <div class="col">
              <h5 class="card-title">Observaciones:</h5>    
              {!! Form::textarea  ('descripcionVestimenta',old('Descripción vestimenta'), ['class' => 'form-control mayuscula', 'id' => 'descripcionVestimenta','size' => '30x4', 'data-validation' =>'required','data-validation-error-msg-required' =>'Ingrese las observaciones de la vestimenta'])!!}
            </div>
          </div>
	</div>
	
</div>

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		var otroC;
		var otraP;
		var tipoV;
		var tipoCal;
		var otroTipoZ;

	//Vista de datos de la vestimenta
		$('#nuevaPrenda').click(function(e){
			$('#modalVestimenta').modal('show');
		});

		$("#prendaColor").change(function() {
			otroC = $('#prendaColor').val();
			//alert(otroC);

			if (otroC==14) {
				$("#otroColor").show();
			}else{
				$("#otroColor").hide();
			}
		});

		$("#idColor").change(function() {
			otroCo = $('#idColor').val();
			//alert(otroC);

			if (otroCo==14) {
				$("#otroColorCalzado").show();
			}else{
				$("#otroColorCalzado").hide();
			}
		});

		$("#idMarca").change(function() {
			otraP = $('#idMarca').val();
			
			if (otraP==26) {
				$("#otraPrenda").show();
			}else{
				$("#otraPrenda").hide();
			}
		});

		$("#idVestimenta").change(function() {
			tipoV = $('#idVestimenta').val();

			if (tipoV==9) {
				$("#FormularioVestimenta").hide();
			}else{
				$("#FormularioVestimenta").show();
			}
		});

		var table = $('#tableInformantes');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				

			btn = '<button class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};

		$('#nuevoInformante').click(function(e){
			$('#modalGeneral').modal('show');
		})


		table.bootstrapTable({				
			url: routeIndex+'/get_informantes/2',
			columns: [{					
				field: 'nombres',
				title: 'Tipo',
			}, {					
				field: 'primerAp',
				title: 'Nombre',
			}, {					
				field: 'segundoAp',
				title: 'Color',
			}, {					
				field: 'informante',
				title: 'Material',
			}, {					
				field: 'notificaciones',
				title: 'Dibujo/Bordado/Franjas',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				//events: operateEvents
			}]				
		})
	//Fin de Vista de datos de la vestimenta

	//Vista de datos de calzado
		$('#nuevoZapato').click(function(e){
			$('#modalCalzado').modal('show');
		});

		$("#idTipo").change(function() {
			tipoCal = $('#idTipo').val();
			if (tipoCal==1) {
				$("#FormularioCalzado").hide();
			}else{
				$("#FormularioCalzado").show();
			}
		});

		$("#idTipo").change(function() {
			otroTipoZ = $('#idTipo').val();
			if (otroTipoZ==8) {
				$("#otroZapato").show();
				
			}else{
				$("#otroZapato").hide();
			}
		});

		var table = $('#tableCalzado');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				

			btn = '<button class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};

		$('#nuevoInformante').click(function(e){
			$('#modalGeneral').modal('show');
		})


		table.bootstrapTable({				
			url: routeIndex+'/get_informantes/2',
			columns: [{					
				field: 'nombres',
				title: 'Tipo',
			}, {					
				field: 'primerAp',
				title: 'Nombre',
			}, {					
				field: 'segundoAp',
				title: 'Color',
			}, {					
				field: 'informante',
				title: 'Material',
			}, {					
				field: 'notificaciones',
				title: 'Dibujo/Bordado/Franjas',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				//events: operateEvents
			}]				
		})

	//Fin de vista de datos de calzado

	});
</script>
@endsection