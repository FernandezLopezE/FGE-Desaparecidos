

{!! Form::model($desaparecido,['action' => 'DesaparecidoController@store']) !!}
	<!--{!! csrf_field() !!}-->
	
	<div class="form-group">
		{!! Form::label ('identificacion','Identificacion') !!}
		{!! Form::select ('identificacion',$identificacion,'', ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('otroId','Otro') !!}
		{!! Form::text ('otroId',old('Otra identificacion'), ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('noId','No. Identificación') !!}
		{!! Form::text ('noId',old('Numero identificacion'), ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('persona','Persona') !!}
		{!! Form::text ('idPersona',$persona->id, ['class' => 'form-control'] )!!}
	</div>

	<div class="form-group">
		{!! Form::label ('antecedentes','Antecedentes') !!}
		{!! Form::select ('antecedentes',$option,'', ['class' => 'form-control'] )!!}
	</div>
	<div class="form-group">
		{!! Form::label ('mes','Meses') !!}
		{!! Form::select ('mes',$meses,'', ['class' => 'form-control'] )!!}
	</div>
	

	{!! Form::submit('Guardar') !!}

	{!! Form::close() !!}

<!--<form method="post" action="/empleados/store">
	{{ csrf_field() }}

	<label>Matricula</label>
	<input type="text" name="matricula">

	<label>Paterno</label>
	<input type="text" name="paterno">

	<label>Materno</label>
	<input type="text" name="materno">

	<label>Nombre</label>
	<input type="text" name="nombre">

	<input type="submit" name="Enviar" value="Enviar">
</form>-->