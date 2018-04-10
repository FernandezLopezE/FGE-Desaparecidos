
<div class="card border-primary">
	<div class="card-header">
		<div class="row" id=""  >	
			<div class="col-LG-6">
					<h5 class="card-title">DATOS DEL ENTREVISTADOR </h5>
			</div>
			<div class="col">
					
			</div>
			<div class="col">
				
			</div>	
			<div class="col-lg-3" align="right">
				<h5> {!!  \Carbon\Carbon::now()->format('d/m/Y h:m:s') !!} </h5> 
			</div>
		</div>	
	</div>
	<div class="card-body">		
  		<div class="row">
  			<div class="col-lg-4" id="otro_dialec2" style="display:none">
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
			<div class="col-lg-4" id="otro_dialec4" style="display:none">
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
			<div class="col-lg-4" id="otro_dialec5" style="display:none">
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
		<div class="row">
				<div class="col-lg-8">
					{!! Form::label ('entrevistadorCargo','Cargo:') !!}
					{!! Form::text ('entrevistadorCargo',
									Session::get('cargo'),
									['class' => 'form-control mayuscula',
										'id' => 'entrevistadorCargo',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'Ingrese el cargo'
									] )!!}
			  	</div>
		</div>

	  	<div class="row">
			<div class="col-lg-4">
				{!! Form::label ('entrevistadorDialecto','Idioma o dialecto durante la entrevista:') !!}
				{!! Form::select ('entrevistadorDialecto',
									$dialectos,
									'',
									['class' => 'form-control',
										'id' => 'entrevistadorIdioma'
									] )!!}	
				
			</div>
			<div class="col" id="otro_dialec" style="display:none">
				{!! Form::label ('otroDialecto','Especifique:') !!}
				{!! Form::text ('otroDialecto',
								old('Nombre del intérprete'),
								['class' => 'form-control mayuscula',
									'placeholder' => 'Escribe el nombre del idioma o dialecto',
									'id' => 'otroDialecto',
									'data-validation' => 'required',
									'data-validation-error-msg-required' => 'Ingrese otro dialecto',
									'data-validation-depends-on' => 'entrevistadorIdioma',
									'data-validation-depends-on-value' =>'OTRO'
								] )!!}
		  	</div>
				
		</div>

  		<div class="row">
  			<div class="col-lg-4" id="otro_dialec2" style="display:none">
				{!! Form::label ('interpreteNombres','Nombre del intérprete:') !!}
				{!! Form::text ('',
								old('Nombre del intérprete'),
				 				['class' => 'form-control mayuscula',
				 					'placeholder' => 'Escribe el nombre',
				 					'id' => 'interpreteNombres',
				 					'data-validation' => 'required',
				 					'data-validation-depends-on' => 'entrevistadorIdioma',
				 					'data-validation-depends-on-value' =>'OTRO',
				 					'data-validation-error-msg-required' => 'Ingrese nombre del intérprete'
				 				] )!!}
		  	</div>
			<div class="col-lg-4" id="otro_dialec4" style="display:none">
				{!! Form::label ('interpretePrimerAp','Primer Apellido:') !!}
				{!! Form::text ('interpretePrimerAp',
								old('Nombre del intérprete'),
								['class' => 'form-control mayuscula',
									'placeholder' => 'Escribe el primer apellido',
									'id' => 'interpretePrimerAp',
									'data-validation' => 'required',
									'data-validation-depends-on' => 'entrevistadorIdioma',
									'data-validation-depends-on-value' =>'OTRO',
									'data-validation-error-msg-required' => 'Ingrese el primer apellido'
								] )!!}
		  	</div>
			<div class="col-lg-4" id="otro_dialec5" style="display:none">
				{!! Form::label ('entrevistadorSegundoAp','Segundo Apellido:') !!}
				{!! Form::text ('entrevistadorSegundoAp',
								old('entrevistadorSegundoAp'),
								['class' => 'form-control mayuscula',
									'placeholder' => 'Escribe el segundo apellido',
									'id' => 'entrevistadorSegundoAp',
									'data-validation' => 'required',
									'data-validation-depends-on' => 'entrevistadorIdioma',
									'data-validation-depends-on-value' =>'OTRO'
								] )!!}
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
</div>
<div class="my-4">	</div>

<!-- Mover Script datosgral.js -->
<script type="text/javascript">
	$(document).ready(function(){
	    $("#entrevistadorNombre").keypress(function(event){
	        var inputValue = event.which;
	        // allow letters and whitespaces only.
	        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
	            event.preventDefault(); 
	        }
	    });

	    $("#entrevistadorNombre").prop('disabled', true);
	    $("#entrevistadorCargo").prop('disabled', true);
	    $("#interpreteNombre").keypress(function(event){
	        var inputValue = event.which;
	        // allow letters and whitespaces only.
	        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
	            event.preventDefault(); 
	        }
	    });
	    $("#otroIdioma").keypress(function(event){
	        var inputValue = event.which;
	        // allow letters and whitespaces only.
	        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
	            event.preventDefault(); 
	        }
	    });
	});
</script>