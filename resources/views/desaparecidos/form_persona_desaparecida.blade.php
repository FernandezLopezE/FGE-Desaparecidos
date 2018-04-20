@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
	
@endsection

@section('content')
	{!! Form::model($desaparecido, ['action' => 'DesaparecidoController@store_desaparecido']) !!}

	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}

	<div class="card border-primary">
		<div class="card-header">
			<h5 class="card-title">Datos generales de la persona desaparecida</h5>		
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					{!! Form::label ('sexo','Género:') !!}
					{!! Form::select ('sexo',$sexos,'', ['class' => 'form-control', 'id' => 'sexo'])!!}	
				</div>			
			</div>
			<div class="row">
				<div class="col">
					{!! Form::label ('nombres','Nombres(s):') !!}
					{!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control mayuscula', 'id' => 'nombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa un nombre'] )!!}
				</div>
				<div class="col">
					{!! Form::label ('primerAp','Primer apellido:') !!}
					{!! Form::text ('primerAp',old('Apellido materno'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa un apellido'] )!!}
				</div>
				<div class="col">
					{!! Form::label ('segundoAp','Segundo apellido:') !!}
					{!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp'] )!!}
				</div>
			</div>
			<div class="row">
				<div class="col">
					{!! Form::label ('apodo','Apodo (alias):') !!}
					{!! Form::text ('apodo',old('apodo'), ['class' => 'form-control mayuscula', 'id' => 'apodo' ] )!!}
				</div>
				<div class="col">
					{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
					{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}
				</div>
				<div class="col">
					{!! Form::label('idEstadoOrigen', 'Estado natal:') !!}
					{!! Form::select('idEstadoOrigen', $estados, '30', ['class' => 'form-control', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
				</div>				
			</div>
			<div class="row">	
				<div class="col">
					{!! Form::label ('fechaNacimiento','Fecha de nacimiento:') !!}
					{!! Form::text ('fechaNacimiento',
										old('Fecha de nacimiento'),
										['class' => 'form-control',
										'id' => 'fechaNacimiento' ,
										'data-validation' => 'required date',
										'data-validation-error-msg' => 'Ingrese una fecha valida o menor a la actual',
										'data-validation-format'=>"dd/mm/yyyy"] )!!}
				</div>			
				<div class="col">
					{!! Form::label ('edadExtravio','Edad de extravío:') !!}
					{!! Form::text ('edadExtravio',old('EdadExtravio'), ['class' => 'form-control', 'id' => 'edadExtravio'] )!!}
				</div>
				<div class="col">
					{!! Form::label ('edadAparente','Edad aparente:') !!}
					{!! Form::text ('edadAparente',old('Edad aparente'), ['class' => 'form-control', 'id' => 'edadAparente', 'data-validation' => 'required number length', 'data-validation-error-msg' => '* Ingrese una edad aparente menos a 130','data-validation-allowing'=>"range[1;130]",  'data-validation-length'=>"0-3",'data-mask'=>"000",'min'=>"0" ,'max'=>"150"] )!!}
				</div>
			</div>
				<div class="row">	
					<div class="col-3">			
					{!! Form::label('curp', 'C.U.R.P.') !!}
					{!! Form::text('curp', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el C.U.R.P.', 'required']) !!}
				</div>			
				<div class="col">
					{!! Form::label ('idEscolaridad','Escolaridad:') !!}
					{!! Form::select ('idEscolaridad',$escolaridades,'', ['class' => 'form-control', 'id' => 'escolaridad' , 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}
				</div>
				<div class="col">
					{!! Form::label ('idOcupacion','Ocupación:') !!}
					{!! Form::select ('idOcupacion',$ocupaciones,'', ['class' => 'form-control', 'id' => 'ocupacion', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}
				</div>			
			</div>
			<div class="row">
				<div class="col-lg-4">
						{!! Form::label ('identificacion','Identificación:') !!}
						{!! Form::select ('identificacion',$identificaciones,'', ['class' => 'form-control mayuscula', 'id' => 
						'identificacion'] )!!}
				</div>
				<div class="col-lg-4" style="display: none" id="otraIdDIV">
						{!! Form::label ('otraIdentificacion','Otro:') !!}
						{!! Form::text ('otraIdentificacion',old('Otra identificacion'), ['class' => 'form-control mayuscula', 'data-validation' => 'required','data-validation-help' => 'En caso de seleccionar otra identificación. Agregar aquí.', 'data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' =>'Otro(especifique)','data-validation-error-msg-required' =>'Este campo es requerido.'] )!!}
				</div>
				<div class="col">
						{!! Form::label ('numIdentificacion','No. Identificación:') !!}
						{!! Form::text ('numIdentificacion',old('Numero identificacion'), ['class' => 'form-control mayuscula', 'data-validation' =>'required', 'data-validation-help' => 'Ejemplo: 117OO02AS23SPPR0.', 'data-validation-error-msg-required' =>'Este campo es requerido.','data-validation' =>'alphanumeric','data-validation-error-msg' =>'Este campo solo acepta datos alfanumericos.'] )!!}
				</div>
			</div>
			<div class="row">
				<div class="col">
					{!! Form::label ('idEdocivil','Estado civil:') !!}
					{!! Form::select ('idEdocivil',$edoscivil ,'', ['class' => 'form-control', 'id' => 'idEdocivil'] )!!}
				</div>			
			</div>
			<div class="row" id="nombrePareja" style="display:none">
				<div>
					{{ Form::hidden('parentesco[]', '3') }}
				</div>			
				<div class="col-4">
					{!! Form::label ('nombres','Nombre de la pareja:') !!}
					{!! Form::text ('familiaresNombres[]','', ['class' => 'form-control mayuscula', 'id' =>'familiaresNombres
				', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese un nombre'] )!!}
				</div>
				<div class="col-4">
					{!! Form::label ('familiaresPrimerAp','Primer apellido:') !!}
					{!! Form::text ('familiaresPrimerAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese el primero apellido'] )!!}
				</div>
				<div class="col-4">
					{!! Form::label ('familiaressegundoAp','Segundo apellido:') !!}
					{!! Form::text ('familiaresSegundoAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresSegundoAp'] )!!}
				</div>
				





				<div class="col-6">
					{!! Form::label ('familiaresEdad','Edad:') !!}
					{!! Form::text ('familiaresEdad[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresEdad'] )!!}
				</div>
				<div>
					{{ Form::hidden('familiaresEdad[]', '0') }}
				</div>
			</div>

			<div class="card border-primary" id="estaEmbarazada" style="display:none">
				<div class="card-header">
					<div class="col">
						{!! Form::label ('embarazo','Esta embarazada:') !!}
						{!! Form::select ('embarazo',['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],'', ['class' => 'form-control', 'id' => 'embarazo'] )!!}
					</div>		
				</div>
				<div class="card-body">
					<div class="row"  id="datosEmbarazo" style="display:none">
						<div class="col">
							{!! Form::label ('numGestacion','Cantidad:') !!}
							{!! Form::number ('numGestacion',old('gestacionSemanas'), ['class' => 'form-control mayuscula', 'id' => 'NumGestacion','min'=>"0" ,'max'=>"36"] )!!}

						</div>
						<div class="col">
							{!! Form::label ('tipoGestacion','Periodo:') !!}
							{!! Form::select ('tipoGestacion',['SEMANAS'=> 'SEMANAS','MESES' => 'MESES'],'', ['class' => 'form-control ', 'id' => 'tipoGestacion'] )!!}
						</div>
						<div class="col">
							{!! Form::label ('rumoresBebe','Rumores sobre el nacimiento:') !!}
							{!! Form::select ('rumoresBebe',['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],'', ['class' => 'form-control', 'id' => 'rumoresBebe'] )!!}
						</div>	
					</div>
					<div class="row" id="datosEmbarazo3" style="display:none">
						<div class="col-12">
							{!! Form::label ('pormenores','Pormenores:') !!}
							{!! Form::text ('pormenores',old('Pormenores'), ['class' => 'form-control mayuscula', 'id' => 'pormenores'] )!!}
						</div>
					</div>
				</div>
			</div>
		</br>
			<p align="right">
			{!! Form::submit('Agregar datos', ['class' => 'btn btn-large btn-primary openbutton']); !!}	
			</p>
			
		</div>
	</div>

{!! Form::close() !!}

		
	{!! Form::submit('Atras', ['class' => 'btn btn-large btn-primary openbutton']); !!}


	<a href="/desaparecido/persona_desaparecida/{!! $cedula->id !!}" class='btn btn-large btn-primary openbutton'>Siguiente</a>

@endsection

@section('scripts')
{!! HTML::script('personal/js/funciones_generales.js') !!}
{!! HTML::script('personal/js/curp.js') !!}
{!! HTML::script('personal/js/documentosIdentidad.js') !!}

<script type="text/javascript">

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