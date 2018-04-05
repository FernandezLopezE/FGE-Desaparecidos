<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos de la desaparición
		<!--<button type="button" id="btnAddDomicilio" class="btn btn-primary float-right">Agregar otro domicilio</button>-->
		</h5>
		
	</div>
	<div class="card-body">	
		<div class="row">
			<div class="col-3">
				{!! Form::label ('fechaDesaparicion','Fecha de la última vez que fue visto:') !!}
				
			</div>
			<div class="col-4">
				{!! Form::label ('horaExtravio','Hora:') !!}
				
			</div>
			
		</div>	
		<div class="row">
			<div class="col-2">
				
				{!! Form::text ('fechaNacimiento',old('Fecha de nacimiento'), ['class' => 'form-control', 'id' => 'fechaNacimiento' , 'data-validation' => 'required date', 'data-validation-error-msg' => '* Ingrese o corrija la fecha de nacimiento','data-validation-format'=>"dd/mm/yyyy"] )!!}
			</div>
			<div class="col-1">
			</div>
		
			<div class="col-2">
				
				{!! Form::text ('horaExtravio',old('horaExtravio'), ['class' => 'form-control', 'id' => 'horaExtravio', 'data-validation' => 'required  time', 'data-validation-help'=>"HH:mm" ] )!!}
			</div>
			
		</div>	
		<div class="row">
				<br/>		
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
			<div class="col">
				{!! Form::label ('parentescoDesaparecido','Parentesco:') !!}
				{!! Form::select ('idEstado[]',$estados,'', ['class' => 'form-control', 'id' => 'idEstado'] )!!}
			</div>
		</div>	
		
		<div class="row">
			<div class="form-group col">
				{!! Form::label ('idEstado','Estado:') !!}
				{!! Form::select ('idEstado[]',$estados,'', ['class' => 'form-control', 'id' => 'idEstado'] )!!}
			</div>
			<div class="form-group col">
				{!! Form::label ('idMunicipio','Municipio:') !!}
				{!! Form::select ('idMunicipio[]',$municipios,'', ['class' => 'form-control', 'id' => 'idMunicipio'] )!!}
			</div>
			<div class="form-group col">
				{!! Form::label ('idLocalidad','Localidad:') !!}
				{!! Form::select ('idLocalidad[]',$localidades,'', ['class' => 'form-control', 'id' => 'idLocalidad'] )!!}
			</div>
			<div class="form-group col">
				{!! Form::label ('idColonia','Colonia:') !!}
				{!! Form::select ('idColonia[]',$colonias,'', ['class' => 'form-control', 'id' => 'idColonia'] )!!}
			</div>		
		</div>

		<div class="row">
			<div class="col">
				{!! Form::label ('descripcionTxt','Breve descripción del hecho:') !!}
				{!! Form::textarea  ('descripcionHecho',old('Descripcion del hecho'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp','size' => '30x4'])!!}
			</div>
		</div>
		
		
			
	</div>
</div>
