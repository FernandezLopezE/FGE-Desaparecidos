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
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('edadExtravio','Edad de extravío:') !!}
				{!! Form::text ('edadExtravio',old('EdadExtravio'), ['class' => 'form-control', 'id' => 'edadExtravio', 'data-validation' => 'required number length' ,  'data-validation-error-msg' => '* Ingresar edad',  'data-validation-length'=>"0-3",'data-mask'=>"000"] )!!}
			</div>
			<div class="col">
				{!! Form::label ('edadAparente','Edad aparente:') !!}
				{!! Form::text ('edadAparente',old('Edad aparente'), ['class' => 'form-control', 'id' => 'edadAparente', 'data-validation' => 'required number length', 'data-validation-error-msg' => '* Ingrese una edad aparente',  'data-validation-length'=>"0-3",'data-mask'=>"000"] )!!}
			</div>
			<div class="col">
				{!! Form::label ('fechaNacimiento','Fecha de nacimiento:') !!}
				{!! Form::text ('fechaNacimiento',old('Fecha de nacimiento'), ['class' => 'form-control', 'id' => 'fechaNacimiento' , 'data-validation' => 'required date', 'data-validation-error-msg' => '* Ingrese o corrija la fecha de nacimiento','data-validation-format'=>"dd/mm/yyyy"] )!!}
			</div>
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
				{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}
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
			<div>
				{{ Form::hidden('parentesco[]', 'MADRE') }}
			</div>
			<div class="col">
				{!! Form::label ('nombres','Nombre de la madre:') !!}
				{!! Form::text ('familiaresNombres[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresNombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese un nombre'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerAp','Primer apellido:') !!}
				{!! Form::text ('familiaresPrimerAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese el primer apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoAp','Segundo apellido:') !!}
				{!! Form::text ('familiaresSegundoAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresSegundoAp'] )!!}
			</div>
			<div>
				{{ Form::hidden('familiaresEdad[]', '0') }}
			</div>	
		</div>
		<div class="row">
			<div>
				{{ Form::hidden('parentesco[]', 'PADRE') }}
			</div>
			<div class="col">
				{!! Form::label ('nombres','Nombre del padre:') !!}
				{!! Form::text ('familiaresNombres[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresNombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese un nombre'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerAp','Primer apellido:') !!}
				{!! Form::text ('familiaresPrimerAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese el primer apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoAp','Segundo apellido') !!}
				{!! Form::text ('familiaresSegundoAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresSegundoAp'] )!!}
			</div>
			<div>
				{{ Form::hidden('familiaresEdad[]', '0') }}
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
				{{ Form::hidden('parentesco[]', 'PAREJA') }}
			</div>			
			<div class="col">
				{!! Form::label ('nombres','Nombre de la pareja:') !!}
				{!! Form::text ('familiaresNombres[]','', ['class' => 'form-control mayuscula', 'id' =>'familiaresNombres
			', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese un nombre'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerAp','Primer apellido:') !!}
				{!! Form::text ('familiaresPrimerAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese el primero apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoAp','Segundo apellido:') !!}
				{!! Form::text ('familiaresSegundoAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresSegundoAp'] )!!}
			</div>
			<div>
				{{ Form::hidden('familiaresEdad[]', '0') }}
			</div>
		</div>
		<div class="row">

		</div>


	</div>
</div>

<hr class="my-4">

<div class="card border-primary">
	<div class="card-header">
		<div class="col-4">
			{!! Form::label ('hijos','Hijos:') !!}
			{!! Form::select ('hijos',['NO'=>'NO','SI'=>'SI'],'', ['class' => 'form-control', 'id' => 'hijos' ] )!!}			
		</div>
		<button type="button" style="display:none" id="btnAddHijo" class="btn btn-primary float-right">Agregar hijo</button>
		
	</div>
	<div class="card-body" id="nombreHijo" style="display:none">
		<div class="row" >
			<div>
				{{ Form::hidden('parentesco[]', 'HIJO') }}
			</div>
			<div class="col">
				{!! Form::label ('nombres','Nombres(s):') !!}
				{!! Form::text ('familiaresNombres[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresNombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese un nombre'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerAp','Primer apellido:') !!}
				{!! Form::text ('familiaresPrimerAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese el primer apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoAp','Segundo apellido:') !!}
				{!! Form::text ('familiaresSegundoAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresSegundoAp'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('familiaresEdad', 'Edad:') !!}
				{!! Form::text ('familiaresEdad[]','', ['class' => 'form-control',
																 'id' => 'familiaresFamiliaresEdad',										 
																 'data-validation' => 'number',
																 'data-validation-permitted' => 'range [1; 100]', 'data-validation-error-msg-required' => '* Solo puedes ingresar números'] )!!}
			</div>			
		</div>
	</div>
</div>

<hr class="my-4">

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
				{!! Form::label ('gestacionSemanas','Semanas:') !!}
				{!! Form::text ('gestacionSemanas',old('gestacionSemanas'), ['class' => 'form-control mayuscula', 'id' => 'gestacionSemanas'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('gestacionMeses','Meses:') !!}
				{!! Form::text ('gestacionMeses',old('gestacionMeses'), ['class' => 'form-control mayuscula', 'id' => 'gestacionMeses'] )!!}
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


<hr class="my-4">


