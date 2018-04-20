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
	</div>
	<!--{!! Form::submit('Nueva cédula de investigación', ['class' => 'btn btn-large btn-primary openbutton']); !!}-->
<!--{!! Form::close() !!}-->
@endsection