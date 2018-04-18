<div class="row">
	<div class="col-lg-4">
		{!! Form::label ('entrevistadorDialecto','Idioma o dialecto durante la entrevista:') !!}
		{!! Form::select ('entrevistadorDialecto',
							$dialectos,
							$cedula->idDialecto,
							['class' => 'form-control',
								'id' => 'entrevistadorIdioma'
							] )!!}	
		
	</div>
	<div class="col" id="otro_dialec" @if ($cedula->idDialecto != 2) style="display:none" @endif>
		{!! Form::label ('otroDialecto','Especifique:') !!}
		{!! Form::text ('otroDialecto',
						old('Nombre del intérprete'),
						['class' => 'form-control mayuscula sinEnter',
							'placeholder' => 'Ingrese el nombre del idioma o dialecto',
							'id' => 'otroDialecto',
							'data-validation' => 'required',
							'data-validation-error-msg-required' => 'El campo es requerido',
							'data-validation-depends-on' => 'entrevistadorIdioma',
							'data-validation-depends-on-value' =>'OTRO'
						] )!!}
  	</div>				
</div>

<div class="row" id="divInterpreteNombre" @if ($cedula->idDialecto < 2) style="display:none" @endif>
	<div class="col-lg-4" >
		{!! Form::label ('interpreteNombres','Nombre del intérprete:') !!}
		{!! Form::text ('interpreteNombres',old('interpreteNombres'), ['class' => 'form-control mayuscula sinEnter', 'placeholder' => 'Ingrese el nombre', 'id' => 'interpreteNombres', 'data-validation' => 'required','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO','data-validation-error-msg-required' => 'El campo es requerido'] )!!}
  	</div>
	<div class="col-lg-4" >
		{!! Form::label ('interpretePrimerAp','Primer Apellido:') !!}
		{!! Form::text ('interpretePrimerAp',old('Nombre del intérprete'), ['class' => 'form-control mayuscula sinEnter', 'placeholder' => 'Ingrese el primer apellido', 'id' => 'interpretePrimerAp', 'data-validation' => 'required','data-validation-depends-on' => 'entrevistadorIdioma','data-validation-depends-on-value' =>'OTRO','data-validation-error-msg-required' => 'El campo es requerido'] )!!}
  	</div>
	<div class="col-lg-4" >
		{!! Form::label ('interpreteSegundoAp','Segundo Apellido:') !!}
		{!! Form::text ('interpreteSegundoAp',
						old('interpreteSegundoAp'),
						['class' => 'form-control mayuscula sinEnter',
							'placeholder' => 'Ingrese el segundo apellido',
							'id' => 'interpreteSegundoAp',
							'data-validation' => 'required',
							'data-validation-depends-on' => 'entrevistadorIdioma',
							'data-validation-depends-on-value' =>'OTRO'
						] )!!}
  	</div>
</div>
<div class="row"  id="divInterpreteOrganizacion" @if ($cedula->idDialecto < 2) style="display:none" @endif>
	<div class="col" >
			{!! Form::label ('interpreteOrganizacion','Organización o institución:') !!}
			{!! Form::text ('interpreteOrganizacion',
							old('interpreteOrganizacion'),
							['class' => 'form-control mayuscula sinEnter',
								'placeholder' => 'Ingrese el nombre de la organización o institución',
								'id' => 'interpreteOrganizacion',
								'data-validation' => 'required',
								'data-validation-depends-on' => 'entrevistadorIdioma',
								'data-validation-depends-on-value' =>'OTRO',
								'data-validation-error-msg-required' => 'El campo es requerido'
							] )!!}
	  </div>
</div>
<hr>
<div class="row">
	<div class="col-lg-4">
		{!! Form::label ('','Primera vez que visita el servicio:') !!}
		{!! Form::select ('entrevistadorPrimeraVez',
							['SI'=>'SI','NO'=>'NO'],
							'',
							['class' => 'form-control',
								'id' => 'entrevistadorPrimeraVez'
							] )!!}	
		
	</div>
	<div class="col-lg-4" id="cuando" @if ($cedula->entrevistadorPrimeraVez = 'NO') style="display:none" @endif>
		{!! Form::label ('','¿Cuándo?') !!}
		{!! Form::text ('fechaVisita',
						old('fechaVisita'),
						['class' => 'form-control mayuscula',
							'id' => 'fecha_visita',
							'placeholder' => 'dd/mm/aaaa',
							'data-validation-depends-on' => 'entrevistadorPrimeraVez',
							'data-validation-depends-on-value' =>'NO',
							'data-validation' =>'date',
							'data-validation-format'=>"dd/mm/yyyy",
							'data-validation-error-msg-date' => 'Ingrese fecha correcta'] )!!}
	</div>
</div>
