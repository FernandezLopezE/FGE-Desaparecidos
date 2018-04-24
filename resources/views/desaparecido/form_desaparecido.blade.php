<div class="row">
	<div class="col">
		{!! Form::label ('sexo','Género:') !!}
		{!! Form::select ('sexo',
							$sexos,
							$desaparecido->persona->sexo,
							['class' => 'form-control',
								 'id' => 'sexo'])!!}	
	</div>			
</div>
<div class="row">
	<div class="col">
		{!! Form::label ('nombres','Nombres(s):') !!}
		{!! Form::text ('nombres',
							$desaparecido->persona->nombres,
							['class' => 'form-control mayuscula',
								'id' => 'nombres',
								'data-validation' => 'required',
								'data-validation-error-msg-required' => '* Ingresa un nombre'
							] )!!}
	</div>
	<div class="col">
		{!! Form::label ('primerAp','Primer apellido:') !!}
		{!! Form::text ('primerAp',
							$desaparecido->persona->primerAp,
							['class' => 'form-control mayuscula',
								'id' => 'primerAp',
								'data-validation' => 'required',
								'data-validation-error-msg-required' => '* Ingresa un apellido'
							] )!!}
	</div>
	<div class="col">
		{!! Form::label ('segundoAp','Segundo apellido:') !!}
		{!! Form::text ('segundoAp',
							$desaparecido->persona->segundoAp,
							['class' => 'form-control mayuscula',
								'id' => 'segundoAp'] )!!}
	</div>
</div>
<div class="row">
	<div class="col">
		{!! Form::label ('apodo','Apodo (alias):') !!}
		{!! Form::text ('apodo',
							old('apodo'),
							['class' => 'form-control mayuscula',
								'id' => 'apodo' ] )!!}
	</div>
	<div class="col">
		{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
		{!! Form::select ('idNacionalidad',
							$nacionalidades,
							$desaparecido->idNacionalidad,
							['class' => 'form-control',
								'id' => 'idNacionalidad',
								'data-validation' => 'required',
								'data-validation-error-msg-required' => '* Elija una opción'
							] )!!}
	</div>
	<div class="col">
		{!! Form::label('idEstadoOrigen', 'Estado natal:') !!}
		{!! Form::select('idEstadoOrigen',
							$estados,
							@$desaparecido->persona->idEstadoOrigen ? :30,
							['class' => 'form-control',
								'placeholder' => 'Seleccione una entidad federativa',
								'required'
							]) !!}
	</div>				
</div>
<div class="row">	
	<div class="col">
		{!! Form::label ('fechaNacimiento','Fecha de nacimiento:') !!}
		{!! Form::text ('fechaNacimiento',
							Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y'),
							['class' => 'form-control',
							'id' => 'fechaNacimiento' ,
							'data-validation' => 'required date',
							'data-validation-error-msg' => 'Ingrese una fecha valida o menor a la actual',
							'data-validation-format'=>"dd/mm/yyyy"] )!!}
	</div>			
	<div class="col">
		{!! Form::label ('edadExtravio','Edad de extravío:') !!}
		{!! Form::text ('edadExtravio',
						old('edadExtravio'),
						['class' => 'form-control',
							'id' => 'edadExtravio'
						] )!!}
	</div>
	<div class="col">
		{!! Form::label ('edadAparente','Edad aparente:') !!}
		{!! Form::text ('edadAparente',
						old('edadAparente'),
						['class' => 'form-control',
							'id' => 'edadAparente',
							'data-validation' => 'required number length',
							'data-validation-error-msg' => '* Ingrese una edad aparente menos a 130',
							'data-validation-allowing'=>"range[1;130]",
							'data-validation-length'=>"0-3",
							'data-mask'=>"000",
							'min'=>"0",
							'max'=>"150"
						] )!!}
	</div>
</div>
<div class="row">	
	<div class="col">			
		{!! Form::label('curp', 'C.U.R.P.') !!}
		{!! Form::text('curp',
						 $desaparecido->persona->curp,
						 ['class' => 'form-control',
						 	'placeholder' => 'Ingrese el C.U.R.P.',
						 	'required'
						 ]) !!}
	</div>			
	<div class="col">
		{!! Form::label ('idEscolaridad','Escolaridad:') !!}
		{!! Form::select ('idEscolaridad',
							$escolaridades,
							$desaparecido->persona->idEscolaridad,
							['class' => 'form-control',
								'id' => 'escolaridad',
								'data-validation' => 'required',
								'data-validation-error-msg-required' => '* Elija una opción'
							] )!!}
	</div>
	<div class="col">
		{!! Form::label ('idOcupacion','Ocupación:') !!}
		{!! Form::select ('idOcupacion',
							$ocupaciones,
							$desaparecido->persona->idOcupacion,
							['class' => 'form-control',
								'id' => 'ocupacion',
								'data-validation' => 'required',
								'data-validation-error-msg-required' => '* Elija una opción'
							] )!!}
	</div>			
</div>
<div class="row">
	<div class="col">
			{!! Form::label ('idDocumentoIdentidad','Identificación:') !!}
			{!! Form::select ('idDocumentoIdentidad',
								$identificaciones,
								$desaparecido->persona->idDocumentoIdentidad,
								['class' => 'form-control',
									'id' => 'idDocumentoIdentidad'
								] )!!}
	</div>
	<div class="col" @if ($desaparecido->persona->idDocumentoIdentidad === '7') style="display: none" @endif id="otraIdDIV">
			{!! Form::label ('otroDocIdentidad','Otro:') !!}
			{!! Form::text ('otroDocIdentidad',
							old('otroDocIdentidad'),
							['class' => 'form-control mayuscula',
								'data-validation' => 'required',
								'data-validation-help' => 'En caso de seleccionar otra identificación. Agregar aquí.',
								'data-validation-depends-on' => 'identificacion',
								'data-validation-depends-on-value' =>'Otro(especifique)',
								'data-validation-error-msg-required' =>'Este campo es requerido.'
							] )!!}
	</div>
	<div class="col">
			{!! Form::label ('numDocIdentidad','No. Identificación:') !!}
			{!! Form::text ('numDocIdentidad',
								old('numDocIdentidad'),
								['class' => 'form-control mayuscula',
									'data-validation' =>'required',
									'data-validation-error-msg-required' =>'Este campo es requerido.',
									'data-validation' =>'alphanumeric',
									'data-validation-error-msg' =>'Este campo solo acepta datos alfanumericos.'
								] )!!}
	</div>
</div>
<div class="row">
	<div class="col">
		{!! Form::label ('idEdocivil','Estado civil:') !!}
		{!! Form::select ('idEdocivil',$edoscivil ,old('idEdocivil'), ['class' => 'form-control', 'id' => 'idEdocivil'] )!!}
	</div>			
</div>
<div class="row" id="estaEmbarazada" @if ($desaparecido->persona->sexo === 'H') style="display: none" @endif >
	<div class="col">
		{!! Form::label ('embarazo','Esta embarazada:') !!}
		{!! Form::select ('embarazo',
							['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
							old('embarazo'),
							['class' => 'form-control',
								'id' => 'embarazo'] )!!}
	</div>				
</div>
<div class="row"  id="datosEmbarazo" @if ($desaparecido->embarazo != 'SI') style="display: none" @endif>
	<div class="col">
		{!! Form::label ('numGestacion','Cantidad:') !!}
		{!! Form::number ('numGestacion',
							old('gestacionSemanas'),
							['class' => 'form-control mayuscula',
								'id' => 'NumGestacion',
								'min'=>"0",
								'max'=>"36"
							] )!!}

	</div>
	<div class="col">
		{!! Form::label ('tipoGestacion','Periodo:') !!}
		{!! Form::select ('tipoGestacion',
							['SEMANAS'=> 'SEMANAS','MESES' => 'MESES'],
							'',
							['class' => 'form-control ',
								 'id' => 'tipoGestacion'] )!!}
	</div>
	<div class="col">
		{!! Form::label ('rumoresBebe','Rumores sobre el nacimiento:') !!}
		{!! Form::select ('rumoresBebe',
							['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
							old('rumoresBebe'),
							['class' => 'form-control',
								 'id' => 'rumoresBebe'] )!!}
	</div>	
</div>
<div class="row" id="datosPormenores" @if ($desaparecido->rumoresBebe != 'SI') style="display: none" @endif>
	<div class="col">
		{!! Form::label ('pormenores','Pormenores:') !!}
		{!! Form::text ('pormenores',
							old('Pormenores'),
							['class' => 'form-control mayuscula',
								'id' => 'pormenores'] )!!}
	</div>
</div>