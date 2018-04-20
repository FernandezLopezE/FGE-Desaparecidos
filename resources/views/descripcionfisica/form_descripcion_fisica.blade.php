@extends('layouts.app_uipj')

@section('content')
<h2>Hola</h2>
<div class="card-body">
  		<div class="row">
  			<div class="col-lg-3">
  			{!! Form::label ('desaparecidoEstatura','Estatura:') !!}
				{!! Form::text ('estatura',
								old('estatura'),
								['class' => 'form-control sinEnter',
										'placeholder' => 'Ingrese la estura en cm',
										'id' => 'estatura',
								] )!!}
		  	</div>
		  	<div class="col-lg-3">
				{!! Form::label ('desaparecidoPeso','Peso:') !!}
				{!! Form::text ('peso',
									old('peso'),
									['class' => 'form-control sinEnter',
										'placeholder' => 'Ingrese el peso en kg',
										'id' => 'peso',
									] )!!}
		  	</div>
		  	<div class="col-lg-3">
					{!! Form::label ('complexion','Complexión:') !!}
					{!! Form::select ('complexion',
									$complexiones,
									'',
									['class' => 'form-control', 'id' => 'complexion'] )!!}
					
			</div>

			<div class="col-lg-3">
					{!! Form::label ('colorPiel','Color piel:') !!}
					{!! Form::select ('colorPiel',
										$coloresPiel,
										'',
										['class' => 'form-control',
											'id' => 'colorPiel',
										] )!!}						
			</div>

  			</div>
  		</div>
</div>

@endsection	