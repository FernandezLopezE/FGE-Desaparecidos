@extends('layouts.app_uipj')

@section('content')

<!--{!! Form::model($cedula, ['action' => 'DesaparecidoController@store_cedula']) !!}-->
	<div class="card-body">
  		<div class="row">
  			<div class="col-lg-4">
				{!! Form::label ('desaparecidoEstatura','Estatura:') !!}
				{!! Form::text ('estatura',
								old('estatura'),
								['class' => 'form-control sinEnter',
										'placeholder' => 'Ingrese la estura en cm',
										'id' => 'estatura',
								] )!!}
		  	</div>
			<div class="col-lg-4">
				{!! Form::label ('desaparecidoPeso','Peso:') !!}
				{!! Form::text ('peso',
									old('peso'),
									['class' => 'form-control sinEnter',
										'placeholder' => 'Ingrese el peso en kg',
										'id' => 'peso',
									] )!!}
		  	</div>
			<div class="col-lg-4">
					{!! Form::label ('desaparecidoComplexion','Complexión:') !!}
					{!! Form::select ('complexion',
										'',
										'',
										['class' => 'form-control',
											'id' => 'complexion'
										] )!!}	
					
			</div>
			<div class="col-lg-4">
					{!! Form::label ('desaparecidoColorPiel','Color piel:') !!}
					{!! Form::select ('colorPiel',
										'',
										'',
										['class' => 'form-control',
											'id' => 'colorPiel',
										] )!!}						
			</div>
		</div>

		<div class="row">
			<div class="col">
					{!! Form::label ('desaparecidoParteCuerpo','Parte del cuerpo:') !!}
					{!! Form::select ('idPartesCuerpo',
										'',
										'',
										['class' => 'form-control',
											'id' => 'idPartesCuerpo'
										] )!!}						
			</div>
			<div class="col">
					{!! Form::label ('desaparecidoLado','Lado:') !!}
					{!! Form::text ('lado',
									'',
									['class' => 'form-control mayuscula sinEnter soloLetras',
										'id' => 'lado',
										'placeholder' => 'Izquierdo, derecho, central',									
									] )!!}
			</div>
		</div>
	  	<div class="row">
			  	<div class="col-lg-4">
					{!! Form::label ('desaparecidoSubParticularidades','Particularidades:') !!}
					{!! Form::select ('idSubParticularidades',
										'',
										'',
										['class' => 'form-control',
											'id' => 'idSubParticularidades'
										] )!!}	
					
				</div>
				<div class="col-lg-4" id="otro_Particularidad" style="display:none">>
					{!! Form::label ('otro','Especifique:') !!}
					{!! Form::text ('otroSubParticularidad',
									old('otro'),
									['class' => 'form-control mayuscula sinEnter soloLetras',
										'placeholder' => 'Ingrese otra particularidad',
										'id' => 'otroSubParticularidad',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido',
										'data-validation-depends-on' => 'otroSubParticularidad',
										'data-validation-depends-on-value' =>'OTRO'
									] )!!}
			  	</div>
			  	<div class="col-lg-4" id="observaciones">
					{!! Form::label ('observacionesParticular','Observaciones:') !!}
					{!! Form::text ('observacionesParticularidad',
									old('observacionesParticular'),
									['class' => 'form-control mayuscula sinEnter soloLetras',
										'placeholder' => 'Ingrese las observaciones',
										'id' => 'observacionesParticularidad'
									] )!!}
			  	</div>
				
		</div>
		<hr>
	<div class="row">
			  	<div class="col-lg-4">
					{!! Form::label ('desaparecidoSubModificaciones','Modificaciones:') !!}
					{!! Form::select ('idSubModificaciones',
										'',
										'',
										['class' => 'form-control',
											'id' => 'idSubModificaciones'
										] )!!}	
					
				</div>
				<div class="col-lg-4" id="otra_Modificacion" style="display:none">>
					{!! Form::label ('otroModi','Especifique:') !!}
					{!! Form::text ('otroSubModificacion',
									old('otroModi'),
									['class' => 'form-control mayuscula sinEnter soloLetras',
										'placeholder' => 'Ingrese otra modificación',
										'id' => 'otroSubModificacion',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido',
										'data-validation-depends-on' => 'otroSubModificacion',
										'data-validation-depends-on-value' =>'OTRO'
									] )!!}
			  	</div>
			  	<div class="col-lg-4" id="observaciones">
					{!! Form::label ('observacionesModificar','Observaciones:') !!}
					{!! Form::text ('observacionesModificacion',
									old('observacionesModificacion'),
									['class' => 'form-control mayuscula sinEnter soloLetras',
										'placeholder' => 'Ingrese las observaciones',
										'id' => 'observacionesModificacion'
									] )!!}
			  	</div>
				
		</div>
		<hr>
	<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Descripción física
		<button type="button" class="btn btn-dark pull-right"  id="nuevaPrenda"><i class="fa fa-plus"></i> AGREGAR</button>
		</h5>
	</div>
	<div class="card-body">	
	<table id="tableDescripcionFisica" ></table>
	</div>
</div><hr>

	</div>
	<!--{!! Form::submit('Nueva cédula de investigación', ['class' => 'btn btn-large btn-primary openbutton']); !!}-->
<!--{!! Form::close() !!}-->
@endsection

@section('scripts')
<script type="text/javascript">
var tableDescripcion = $('#tableDescripcionFisica');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editDescripcionFisica"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
		/*window.operateEvents = {
			'click #editCalzado': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idTipo').val(row.cTipo);
				$('#otroCalzado').val(row.oCalzado);
				$('#idColor').val(row.cColor);
				$('#otroColorCalzado').val(row.ocCalzado);
				$('#modeloCalzado').val(row.modelo);
				$('#idMarca').val(row.cMarca);
				$('#otraMarca').val(row.oMarca);
				$('#calzadoTalla').val(row.talla);
				$("#modalCalzado").modal("show");
			}
		}
		$('#nuevoVestimenta').click(function(e){
			$('#modalGeneral').modal('show');
		})*/
		tableDescripcion.bootstrapTable({				
			//url: routeIndex+'/get_descripcion/{{$id}}',
			columns: [{					
				field: 'nombre',
				title: 'Parte del cuerpo',
			}, {
				field: 'lado',
				title: 'Lado',									
			}, {
				field: 'nombre',
				title: 'Particularidades',									
			}, {					
				field: 'nombre',
				title: 'Modificaciones',
			}, {					
				field: 'observaciones',
				title: 'Observaciones',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
	//Fin de vista de datos de calzado
	</script>
@endsection