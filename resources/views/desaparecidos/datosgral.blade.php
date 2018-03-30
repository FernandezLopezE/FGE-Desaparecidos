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
				{!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control', 'id' => 'nombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa un nombre'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerAp','Apellido paterno:') !!}
				{!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa un apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoAp','Apellido materno:') !!}
				{!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'segundoAp'] )!!}
			</div>
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('apodo','Apodo (alias):') !!}
				{!! Form::text ('apodo',old('apodo'), ['class' => 'form-control', 'id' => 'apodo'] )!!}
			</div>			
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('edad','Edad de extravío') !!}
				{!! Form::text ('edad',old('Edad de extravío'), ['class' => 'form-control', 'id' => 'edad'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('edadAparente','Edad aparente') !!}
				{!! Form::text ('edadAparente',old('Edad aparente'), ['class' => 'form-control', 'id' => 'edadAparente'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('fechaNacimiento','Fecha de nacimiento') !!}
				{!! Form::text ('fechaNacimiento',old('Fecha de nacimiento'), ['class' => 'form-control', 'id' => 'fechaNacimiento'] )!!}
			</div>
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('idNacionalidad','Nacionalidad') !!}
				{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('idEscolaridad','Escolaridad') !!}
				{!! Form::select ('idEscolaridad',$escolaridades,'', ['class' => 'form-control', 'id' => 'escolaridad'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('idOcupacion','Ocupación') !!}
				{!! Form::select ('idOcupacion',$ocupaciones,'', ['class' => 'form-control', 'id' => 'ocupacion'] )!!}
			</div>			
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('idEdocivil','Estado civil') !!}
	        	{!! Form::select ('idEdocivil',$edoscivil ,'', ['class' => 'form-control', 'id' => 'idEdocivil'] )!!}
			</div>			
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('nombres','Nombres(s)') !!}
				{!! Form::text ('familiaresNombres',old('Nombres(s)'), ['class' => 'form-control', 'id' =>'familiaresNombres
			'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerAp','Apellido paterno') !!}
				{!! Form::text ('familiaresPrimerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'familiaresPrimerAp'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoAp','Apellido materno') !!}
				{!! Form::text ('familiaresSegundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'familiaresSegundoAp'] )!!}
			</div>
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('hijos','Hijos') !!}
				{!! Form::select ('hijos',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}
			</div>
		</div>
	</div>
</div>	

<div class="form-horizontal">
	<h3>DATOS DE LA PERSONA DESAPARECIDA</h3>
	
	<div class="form-group row">
		<!--Genero -->
		<div class="col-3">
				{!! Form::label ('sexo','Género') !!}
        		{!! Form::select ('sexo',$sexos,'', ['class' => 'form-control', 'id' => 'sexo'])!!}	
		</div>		
		<!--Fin Genero -->

		<!--Nacionalidad -->
		<div class="col-6">
			{!! Form::label ('idNacionalidad','Nacionalidad') !!}
        	{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad'] )!!}
		</div>
		<!--fin de Nacionalidad -->
	</div>

	<!--Nombre, apellidos, apodo -->
	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        	{!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control', 'id' => 'nombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa un nombre'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        	{!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa un apellido'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'segundoAp'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('apodo','Apodo/alias') !!}
        {!! Form::text ('apodo',old('Apodo/alias'), ['class' => 'form-control', 'id' => 'apodo'] )!!}
		</div>
	</div>
	<!--Fin de Nombre, apellidos, apodo -->

	<!--Fecha de nacimiento, edades -->
	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('fechaNacimiento','Fecha de nacimiento') !!}
        {!! Form::text ('fechaNacimiento',old('Fecha de nacimiento'), ['class' => 'form-control', 'id' => 'fechaNacimiento'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('edad','Edad de extravío') !!}
        {!! Form::text ('edad',old('Edad de extravío'), ['class' => 'form-control', 'id' => 'edad'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('edadAparente','Edad aparente') !!}
        {!! Form::text ('edadAparente',old('Edad aparente'), ['class' => 'form-control', 'id' => 'edadAparente'] )!!}
		</div>
	</div><hr>
	<!--Fin de Fecha de nacimiento, edades -->

	<!--Escolaridad, ocupación y select de estado civil -->
	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('idEscolaridad','Escolaridad') !!}
        	{!! Form::select ('idEscolaridad',$escolaridades,'', ['class' => 'form-control', 'id' => 'escolaridad'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('idOcupacion','Ocupación') !!}
        		{!! Form::select ('idOcupacion',$ocupaciones,'', ['class' => 'form-control', 'id' => 'ocupacion'] )!!}
		</div>	
		<div class="col-3">
			{!! Form::label ('idEdocivil','Estado civil') !!}
        	{!! Form::select ('idEdocivil',$edoscivil ,'', ['class' => 'form-control', 'id' => 'idEdocivil'] )!!}
		</div>	
	</div><br>
	<!--Fin de Escolaridad, ocupación y select de estado civil -->

	<!--Datos de la pareja en caso de que este casado -->
	<div class="form-group row " id="nombrePareja">
		<label class="col-3 col-form-label">Nombre de la pareja</label>
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('familiaresNombres',old('Nombres(s)'), ['class' => 'form-control', 'id' =>'familiaresNombres
'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('familiaresPrimerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'familiaresPrimerAp'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('familiaresSegundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'familiaresSegundoAp'] )!!}
		</div>
	</div><hr>
	<!--Fin de datos de la pareja en caso de que este casado -->
	
	<!--Radios buttons para preguntar si tiene hijos -->
	<div class="form-group row" name="tieneHijos" id="tieneHijos">
		<div class="col-2">
			{!! Form::label ('hijos','Hijos') !!}
        	{!! Form::select ('hijos',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}
        </div>
	</div>
	<!--Fin de Radios buttons para preguntar si tiene hijos -->

	<!--Campos para ingresar nombre de los hijos -->
	<div class="form-group row" id="nombreHijo">
		<label class="col-2 col-form-label">Nombre de hijo</label>
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('familiaresNombres',old('Nombres(s)'), ['class' => 'form-control', 'id' => 'familiaresNombres'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('familiaresPrimerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'familiaresPrimerAp'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('familiaresSegundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'familiaresSegundoAp'] )!!}
		</div>
		<div class="col-1">
			{!! Form::label ('familiaresEdad', 'Edad') !!}
			{!! Form::text ('familiaresFamiliaresEdad',old('Edad'), ['class' => 'form-control', 'id' => 'familiaresFamiliaresEdad', 'data-validation' => 'number', 'data-validation-permitted' => 'range [1; 100]', 'data-validation-error-msg-required' => '* Solo puedes ingresar números'] )!!}
		</div>
	</div><hr>
	<!--Fin de Campos para ingresar nombre de los hijos -->

	<!--Radio buttons para preguntar si esta embarazada -->
	<div class="form-group row" id="estaEmbarazada">
		<div class="col-3">
		{!! Form::label ('embarazo','Esta embarazada') !!}
        {!! Form::select ('embarazo',['SI'=>'SI','NO'=>'NO', 'LO IGNORAN' => 'LO IGNORAN'],'', ['class' => 'form-control', 'id' => 'embarazo'] )!!}
        </div>
	</div>
	<!--Fin de Radio buttons para preguntar si esta embarazada -->

	<!--Periodo de embarazo -->
	<div class="form-group row" id="datosEmbarazo">
		<div class="col-3">
			{!! Form::label ('periodoGestacion','Semanas') !!}
			{!! Form::text ('periodoGestacion',old('Semanas'), ['class' => 'form-control', 'id' => 'periodoGestacion'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('periodoGestacion','Meses') !!}
        	{!! Form::text ('periodoGestacion',old('Meses'), ['class' => 'form-control', 'id' => 'periodoGestacion'] )!!}
        </div>
	</div>
	<!--Fin de Periodo de embarazo -->

	<!--Radio buttons para preguntar si conocen algun rumor -->
	<div class="form-group row" id="rumores">
		<label class="col-3 col-form-label">Rumores sobre el nacimiento o localización del bebé</label>
		<div class="col-3">
			{!! Form::label ('rumoresBebe','Rumores sobre el nacimiento') !!}
        		{!! Form::select ('rumoresBebe',['SI'=>'SI','NO'=>'NO', 'LO IGNORAN' => 'LO IGNORAN'],'', ['class' => 'form-control', 'id' => 'rumoresBebe'] )!!}
		</div>
	</div>
	<!--Fin de Radio buttons para preguntar si conocen algun rumor -->

	<!--Campo de texto para colocar pormenores -->
	<div class="form-group row" id="datosEmbarazo3">
		<div class="col-12">
			{!! Form::label ('pormenores','Pormenores') !!}
        {!! Form::text ('pormenores',old('Pormenores'), ['class' => 'form-control', 'id' => 'pormenores'] )!!}
		</div>
	</div><hr>
	<!--Campo de texto para colocar pormenores -->

	<!--Campo de textto para nombre y apellidos de la madre -->
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre de la madre</label>
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('familiaresNombres',old('Nombres(s)'), ['class' => 'form-control', 'id' => 'familiaresNombres'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('familiaresPrimerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'familiaresPrimerAp'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('familiaresSegundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'familiaresSegundoAp'] )!!}
		</div>
	</div>
	<!--Fin de Campo de textto para nombre y apellidos de la madre -->

	<!--Fin de Campo de textto para nombre y apellidos del padre -->
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre del padre</label>
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('familiaresNombres',old('Nombres(s)'), ['class' => 'form-control', 'id' => 'familiaresNombres'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('familiaresPrimerAp',old('Apellido paterno'), ['class' => 'form-control', 'id' => 'familiaresPrimerAp'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('familiaresSegundoAp',old('Apellido materno'), ['class' => 'form-control', 'id' => 'familiaresSegundoAp'] )!!}
		</div><hr>
	<!--Fin de Campo de textto para nombre y apellidos del padre -->

	
</div>

<!--aplicando SELECT2 en los catalogos-->
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#sexo').select2({
			width : "100%",
		});

		$('#nacion').select2({
			width : "100%",
		});

		$('#nacion').val(1).trigger('change.select2');

		$('#escolaridad').select2({
			width : "100%",
		});
		
		$('#ocupacion').select2({
			width : "100%",
		});



		$('#hijos').select2({
			width : "100%",
		});

		$('#embarazada').select2({
			width : "100%",
		});

		$('#rumores').select2({
			width : "100%",
		});
		
	});
</script>