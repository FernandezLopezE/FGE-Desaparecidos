@extends('layouts.app_uipj')

@section('content')

{!! Form::model($cedula, ['action' => 'DesaparecidoController@store']) !!}
	<div class="card-body">
  		<div class="row">
  			<div class="col-lg-4" id="otro_dialec2">
				{!! Form::label ('entrevistadorNombre','Nombre del entrevistador:') !!}
				{!! Form::text ('entrevistadorNombres',
								old('entrevistadorNombres'),
								['class' => 'form-control mayuscula',
											'placeholder' => 'Escribe el nombre',
											'id' => 'entrevistadorNombres',
											'data-validation' => 'required',
											'data-validation-depends-on' => 'entrevistadorIdioma',
											'data-validation-depends-on-value' =>'OTRO',
											'data-validation-error-msg-required' => 'Ingrese nombre del intérprete'
								] )!!}
		  	</div>
			<div class="col-lg-4" id="otro_dialec4">
				{!! Form::label ('entrevistadorPrimerAp','Primer Apellido:') !!}
				{!! Form::text ('entrevistadorPrimerAp',
									old('entrevistadorPrimerAp'),
									['class' => 'form-control mayuscula',
										'placeholder' => 'Escribe el primer apellido',
										'id' => 'entrevistadorPrimerAp',
										'data-validation' => 'required',
										'data-validation-depends-on' => 'entrevistadorIdioma',
										'data-validation-depends-on-value' =>'OTRO',
										'data-validation-error-msg-required' => 'Ingrese el primer apellido'
									] )!!}
		  	</div>
			<div class="col-lg-4" id="otro_dialec5">
				{!! Form::label ('entrevistadorSegundoAp','Segundo Apellido:') !!}
				{!! Form::text ('entrevistadorSegundoAp',
								old('entrevistadorSegundoAp'),
								['class' => 'form-control mayuscula',
										 'placeholder' => 'Escribe el segundo apellido',
										 'id' => 'entrevistadorSegundoAp',
										 'data-validation' => 'required',
										 'data-validation-depends-on' => 'entrevistadorIdioma',
										 'data-validation-depends-on-value' =>'OTRO'
								])!!}
		  	</div>
		</div>



		<div class="row" id=""  >
				<div class="col-lg-4">
					{!! Form::label ('','Nombre del entrevistador:') !!}
					{!! Form::text ('',Session::get('nombreComp'), ['class' => 'form-control mayuscula', 'id' => 'entrevistadorNombre','data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el nombre' ] ) !!}
				</div>
				<div class="col-lg-8">
					{!! Form::label ('','Cargo:') !!}
					{!! Form::text ('',Session::get('cargo'), ['class' => 'form-control mayuscula', 'id' => 'entrevistadorCargo','data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el cargo' ] )!!}
			  	</div>
		</div>

	  	<div class="row">
			  	<div class="col-lg-4">
					{!! Form::label ('dialecto','Idioma o dialecto durante la entrevista:') !!}
					{!! Form::select ('entrevistadorIdioma',$dialectos,'', ['class' => 'form-control', 'id' => 'entrevistadorIdioma'] )!!}	
					
				</div>
				<div class="col" id="otro_dialec" style="display:none">
					{!! Form::label ('','Especifique:') !!}
					{!! Form::text ('otroIdioma',old('Nombre del intérprete'), ['class' => 'form-control mayuscula', 'placeholder' => 'Escribe el nombre del idioma o dialecto', 'id' => 'otroIdioma', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese otro dialecto','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO'] )!!}
			  	</div>
				
		</div>

  		<div class="row">
  			<div class="col-lg-4" id="otro_dialec2" style="display:none">
				{!! Form::label ('','Nombre del intérprete:') !!}
				{!! Form::text ('',old('Nombre del intérprete'), ['class' => 'form-control mayuscula', 'placeholder' => 'Escribe el nombre', 'id' => 'interpreteNombre', 'data-validation' => 'required','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO','data-validation-error-msg-required' => 'Ingrese nombre del intérprete'] )!!}
		  	</div>
			<div class="col-lg-4" id="otro_dialec4" style="display:none">
				{!! Form::label ('entrevistadorPrimerAp','Primer Apellido:') !!}
				{!! Form::text ('entrevistadorPrimerAp',old('Nombre del intérprete'), ['class' => 'form-control mayuscula', 'placeholder' => 'Escribe el primer apellido', 'id' => 'entrevistadorPrimerAp', 'data-validation' => 'required','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO','data-validation-error-msg-required' => 'Ingrese el primer apellido'] )!!}
		  	</div>
			<div class="col-lg-4" id="otro_dialec5" style="display:none">
				{!! Form::label ('entrevistadorSegundoAp','Segundo Apellido:') !!}
				{!! Form::text ('entrevistadorSegundoAp',old('entrevistadorSegundoAp'), ['class' => 'form-control mayuscula', 'placeholder' => 'Escribe el segundo apellido', 'id' => 'entrevistadorSegundoAp', 'data-validation' => 'required','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO'] )!!}
		  	</div>
		</div>
		<div class="row">
			<div class="col" id="otro_dialec3" style="display:none">
					{!! Form::label ('','Organización o institución:') !!}
					{!! Form::text ('',old('Nombre de la organización o institución'), ['class' => 'form-control mayuscula','placeholder' => 'Escribe el nombre de la organización o institución','id' => 'interpreteOrganizacion', 'data-validation' => 'required','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO', 'data-validation-error-msg-required' => 'Ingrese nombre de la organización'] )!!}
			  	</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-4">
				{!! Form::label ('','Primera vez que visita el servicio:') !!}
				{!! Form::select ('entrevistadorPrimeraVez',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control', 'id' => 'entrevistadorPrimeraVez' ] )!!}	
				
			</div>
			<div class="col-lg-4" id="cuando" style="display:none">
				{!! Form::label ('','¿Cuándo?') !!}
				{!! Form::text ('fecha_visita',old('fecha_visita'), ['class' => 'form-control mayuscula', 'id' => 'fecha_visita','placeholder' => 'DD/MM/AAAA','data-validation-depends-on' => 'entrevistadorPrimeraVez','data-validation-depends-on-value' =>'NO', 'data-validation' =>'date','data-validation-format'=>"dd-mm-yyyy" , 'data-validation-error-msg-date' => 'Ingrese fecha correcta'] )!!}
				
			</div>
		</div>
	</div>
	{!! Form::submit('Nueva cedula de investigacion', ['class' => 'btn btn-large btn-primary openbutton']); !!}
{!! Form::close() !!}
@endsection