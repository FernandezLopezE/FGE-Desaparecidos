@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
	{!! Form::model($desaparecido, ['action' => 'ExtraviadoController@store']) !!}

	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}

<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link" href="#" aria-selected="true">
				Entrevista
			</a>
			<a class="nav-item nav-link" href="{{route('informante.show',['id' => $cedula->id])}}" aria-selected="false">
				Informantes
			</a>
			<a class="nav-item nav-link active" href="#" aria-selected="false">
				Desaparecido
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Familiares
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Contacto
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Domicilios
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Antecedentes
			</a>				
	</div>
</nav>

<div class="card-body bg-white">
		<div class="card-header">
			<h5 class="card-title">Datos generales de la persona desaparecida
				<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">
					<i class="fa fa-plus"></i> GUARDAR		
				</button>
			</h5>		
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
						{!! Form::label ('sexo','Género:') !!}
						{!! Form::select ('sexo',
											$sexos,
											'',
											['class' => 'form-control',
												 'id' => 'sexo'])!!}	
				</div>			
			</div>
			<div id ="mostrarGenero" style="display: none">
				<div class="row">
					<div class="col">
						{!! Form::label ('nombres','Nombres(s):') !!}
						{!! Form::text ('nombres',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'nombres',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => '* Ingresa un nombre'
											] )!!}
					</div>
					<div class="col">
						{!! Form::label ('primerAp','Primer apellido:') !!}
						{!! Form::text ('primerAp',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'primerAp',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => '* Ingresa un apellido'
											] )!!}
					</div>
					<div class="col">
						{!! Form::label ('segundoAp','Segundo apellido:') !!}
						{!! Form::text ('segundoAp',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'segundoAp'] )!!}
					</div>
				</div>
				<div class="row">
					<div class="col">
						{!! Form::label ('apodo','Apodo (alias):') !!}
						{!! Form::text ('apodo',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'apodo' ] )!!}
					</div>
					<div class="col">
						{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
						{!! Form::select ('idNacionalidad',
											$nacionalidades,
											'',
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
											'',
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
											'',
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
										 '',
										 ['class' => 'form-control',
										 	'placeholder' => 'Ingrese el C.U.R.P.',
										 	'required'
										 ]) !!}
					</div>			
					<div class="col">
						{!! Form::label ('idEscolaridad','Escolaridad:') !!}
						{!! Form::select ('idEscolaridad',
											$escolaridades,
											'',
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
											'',
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
												'',
												['class' => 'form-control',
													'id' => 'idDocumentoIdentidad'
												] )!!}
					</div>
					<div class="col"  style="display: none" id="otraIdDIV">
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
				<div class="row" id="estaEmbarazada" style="display: none" >
					<div class="col">
						{!! Form::label ('embarazo','Esta embarazada:') !!}
						{!! Form::select ('embarazo',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											old('embarazo'),
											['class' => 'form-control',
												'id' => 'embarazo'] )!!}
					</div>				
				</div>
				<div class="row"  id="datosEmbarazo" style="display: none">
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
				<div class="row" id="datosPormenores" style="display: none" >
					<div class="col">
						{!! Form::label ('pormenores','Pormenores:') !!}
						{!! Form::text ('pormenores',
											old('Pormenores'),
											['class' => 'form-control mayuscula',
												'id' => 'pormenores'] )!!}
					</div>
				</div>				
			</div>
		</div>
	</div>

{!! Form::close() !!}

@endsection

@section('scripts')
{!! HTML::script('personal/js/funciones_generales.js') !!}
{!! HTML::script('personal/js/curp.js') !!}
{!! HTML::script('personal/js/documentosIdentidad.js') !!}

<script type="text/javascript">

		//Ocultar-mostrar pregunta ¿Está embarazada? en caso de que el sexo sea 'masculino'

			//if (a == 2 || a == 3 || a == 4 || a == 5 || a == 6) {
				//console.log('Mostrar el campo datos de pareja')
				//}

		var routeIndex = '{!! route('consultas.index') !!}';
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
						   $('#edadExtravio').val(data);
				   },
				   
				});
			}
		});

		$('#sexo').change(function() {
			g = $('#sexo').val();
			console.log("El género es: "+g);

			if (g=="H") {
				$("#mostrarGenero").show();
			}else{
				if (g=="M"){
					$("#mostrarGenero").show();
					$("#estaEmbarazada").show();
				}else{
					$("#mostrarGenero").hide();
				}
				
			}
	});

		$("#embarazo").change(function(){
			embarazo = $(this).val();
			if (embarazo =='SI'){				
				$("#datosEmbarazo").show();
				$("#rumores").show();
			} else {					
				$("#datosEmbarazo").hide();
				$("#datosPormenores").hide();
				$("#rumores").hide();
			} 
		});

		$("#rumoresBebe").change(function(){
			rumores = $(this).val();
			if (rumores =='SI'){
				$("#datosPormenores").show();
			} else {
				$("#datosPormenores").hide();
			}
		});

		$('#idDocumentoIdentidad').change(function(){
			documento = $('#idDocumentoIdentidad').val();			
			if (documento == "8") {					
					$("#otraIdDIV").show();
			} else {					
					$("#otraIdDIV").hide();
			}
		});






	$('input#familiaresFechaNacimiento').mask('00/00/0000');
	
	$('#identificacion').change(function() {
			f = $('#identificacion').val();
			console.log("El parentesoc es: "+f);

			if (f==7) {
				$("#otraIdDIV").show();
			}else{
				$("#otraIdDIV").hide();
			}
	});

	 $('#familiaresFechaNacimiento').change(function(){  
		console.log('Calculando edad de la pareja');
		from = $("#familiaresFechaNacimiento").val().split("/");
		familiaresFechaNacimiento = from[2] + "-" + from[1] + "-" + from[0];
		fechaEnviada = Date.parse(familiaresFechaNacimiento);
	   
		fechaActual= new Date();
	   
	   if (fechaEnviada > fechaActual)
	   {
		   $("#familiaresFechaNacimiento").val("");
		   $("#edadExtravio").val("");
	   }else{

	   $.ajax({
			   url: '/desaparecido/edad/'+familiaresFechaNacimiento,
			   type:"GET",
			   dataType:"json",

			   success:function(data) {
					   console.log("hola"+data);
					   $('#familiaresEdad').val(data);
			   },
			   
		   });
	   }
   });

</script>

@endsection