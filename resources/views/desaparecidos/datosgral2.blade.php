<div class="form-horizontal">
	<h3>Datos de la persona desaparecida</h3><hr>
	<!--Genero -->
	<div class="form-group row">
		<div class="col-3">
				{!! Form::label ('sexo','Género') !!}
        		{!! Form::select ('sexo',$sexos,'', ['class' => 'form-control'] )!!}
		</div>		
		<!--Fin Genero -->

		<!--Nacionalidad -->
		<div class="col-6">
			{!! Form::label ('nacionalidades','Nacionalidad') !!}
        		{!! Form::select ('nacionalidades',$nacionalidades,'', ['class' => 'form-control','placeholder' => 'Mexicana'] )!!}
		</div>
		<!--fin de Nacionalidad -->
	</div>

	<!--Nombre, apellidos, apodo -->
	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('apodo','Apodo/alias') !!}
        {!! Form::text ('apodo',old('Apodo/alias'), ['class' => 'form-control'] )!!}
		</div>
	</div>
	<!--Fin de Nombre, apellidos, apodo -->

	<!--Fecha de nacimiento y edades -->
	<div class="form-group row">
		<div class="col-2">
			{!! Form::label ('fechaNacimiento','Fecha de nacimiento') !!}
        {!! Form::text ('fechaNacimiento',old('Fecha de nacimiento'), ['class' => 'form-control'] )!!}
		</div>
	</div>
	<!--Fin de Fecha de nacimiento y edades -->

	<!--Escolaridad, ocupación y select de estado civil -->
	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('idEscolaridad','Estado civil') !!}
        		{!! Form::select ('idEscolaridad',$escolaridades,'', ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('idOcupacion','Estado civil') !!}
        		{!! Form::select ('idOcupacion',$ocupaciones,'', ['class' => 'form-control'] )!!}
		</div>	
		<div class="col-3">
			{!! Form::label ('idEdocivil','Estado civil') !!}
        	{!! Form::select ('idEdocivil',$edoscivil ,'', ['class' => 'form-control'] )!!}
		</div>	
	</div>
	<!--Fin de Escolaridad, ocupación y select de estado civil -->

	<!--Datos de la pareja en caso de que este casado -->
	<div class="form-group row " id="nombrePareja" style="display:none">
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control'] )!!}
		</div>
	</div><hr>
	<!--Fin de datos de la pareja en caso de que este casado -->
	
	<!--Radios buttons para preguntar si tiene hijos -->
	<div class="form-group row" name="tieneHijos" id="tieneHijos">
		{!! Form::label ('hijos','Hijos') !!}
        {!! Form::select ('hijos',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control'] )!!}
	</div>
	<!--Fin de Radios buttons para preguntar si tiene hijos -->

	<!--Campos para ingresar nombre de los hijos -->
	<div class="form-group row" id="nombreHijo" style="display:none">
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control'] )!!}
		</div>
	</div><hr>
	<!--Fin de Campos para ingresar nombre de los hijos -->

	<!--Radio buttons para preguntar si esta embarazada -->
	<div class="form-group row" id="estaEmbarazada">
		{!! Form::label ('embarazo','Esta embarazada') !!}
        		{!! Form::select ('embarazo',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control'] )!!}
	</div>
	<!--Fin de Radio buttons para preguntar si esta embarazada -->

	<!--Periodo de embarazo -->
	<div class="form-group row" id="datosEmbarazo" style="display:none">
		{!! Form::label ('periodoGestacion','Semanas') !!}
		{!! Form::text ('periodoGestacion',old('Semanas'), ['class' => 'form-control'] )!!}
		{!! Form::label ('periodoGestacion','Meses') !!}
        {!! Form::text ('periodoGestacion',old('Meses'), ['class' => 'form-control'] )!!}
	</div>
	<!--Fin de Periodo de embarazo -->

	<!--Radio buttons para preguntar si conocen algun rumor -->
	<div class="form-group row" id="rumores" style="display:none">
		<label class="col-3 col-form-label">Rumores sobre el nacimiento o localización del bebé</label>
		{!! Form::label ('rumor','Rumores sobre el nacimiento') !!}
        		{!! Form::select ('rumor',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control'] )!!}
	</div>
	<!--Fin de Radio buttons para preguntar si conocen algun rumor -->

	<!--Campo de texto para colocar pormenores -->
	<div class="form-group row" id="datosEmbarazo3" style="display:none">
		<div class="col-12">
			{!! Form::label ('pormenores','Pormenores') !!}
        {!! Form::text ('pormenores',old('Pormenores'), ['class' => 'form-control'] )!!}
		</div>
	</div><hr>
	<!--Campo de texto para colocar pormenores -->

	<!--Campo de textto para nombre y apellidos de la madre -->
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre de la madre</label>
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control'] )!!}
		</div>
	</div>
	<!--Fin de Campo de textto para nombre y apellidos de la madre -->

	<!--Fin de Campo de textto para nombre y apellidos del padre -->
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre del padre</label>
		<div class="col-3">
			{!! Form::label ('nombres','Nombres(s)') !!}
        {!! Form::text ('nombres',old('Nombres(s)'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('primerAp','Apellido paterno') !!}
        {!! Form::text ('primerAp',old('Apellido paterno'), ['class' => 'form-control'] )!!}
		</div>
		<div class="col-3">
			{!! Form::label ('segundoAp','Apellido materno') !!}
        {!! Form::text ('segundoAp',old('Apellido materno'), ['class' => 'form-control'] )!!}
		</div>
	<!--Fin de Campo de textto para nombre y apellidos del padre -->
</div>