<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos de la desaparición
		<!--<button type="button" id="btnAddDomicilio" class="btn btn-primary float-right">Agregar otro domicilio</button>-->
		</h5>
		
	</div>
	<div class="card-body">	
		<div class="row">
			<div class="col-4">
				{!! Form::label ('fechaDesaparicion','Fecha de la última vez visto:') !!}
			</div>
			<div class="col-4">
				{!! Form::label ('horaExtravio','Hora:') !!}
			</div>
			<div class="col-4">
				{!! Form::label ('parentescoDesaparecido','Parentesco:') !!}
			</div>
		</div>	
		<div class="row">
			<div class="col-2">				
				{!! Form::text ('avistoFechaHora',old('Fecha de la última vez que fue visto'), ['class' => 'form-control', 'id' => 'avistoFechaHora' , 'data-validation' => 'required date', 'data-validation-error-msg' => 'Ingrese la fecha','data-validation-format'=>"dd-mm-yyyy"] )!!}
			</div>
			<div class="col-2">
			</div>		

			<div class="col-2">
				{!! Form::text ('avistoHoraExtravio',old('Hora'), ['class' => 'form-control', 'id' => 'avistoHoraExtravio', 'data-validation' => 'required  time', 'data-validation-error-msg' => 'Ingrese la hora HH:mm'] )!!}
			</div>
			<div class="col-2">
			</div>
			<div class="col-2">
				{!! Form::select ('avistoidParentesco[]',$parentescos,'', ['class' => 'form-control', 'id' => 'avistoidParentesco'] )!!}
			</div>
		</div>	
		<div class="row">
				<br/>		
		</div>	
		<div class="row">
			<div class="col">
				{!! Form::label ('nombresAvisto','Nombres(s):') !!}
				{!! Form::text ('avistoNombres',old('Nombres(s)'), ['class' => 'form-control mayuscula', 'id' => 'avistoNombres', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el nombre(s)'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('primerApellidoAvisto','Primer apellido:') !!}
				{!! Form::text ('avistoPrimerAp',old('Primer apellido'), ['class' => 'form-control mayuscula', 'id' => 'avistoPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el primer apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('segundoApellidoAvisto','Segundo apellido:') !!}
				{!! Form::text ('avistoSegundoAp',old('Segundo apellido'), ['class' => 'form-control mayuscula', 'id' => 'avistoSegundoAp'] )!!}
			</div>
		</div>	
		
		<div class="row">
			<div class="form-group col">
				{!! Form::label ('avistoEstado','Estado:') !!}
				{!! Form::select ('avistoidEstado[]',$estados,'', ['class' => 'form-control', 'id' => 'avistoidEstado'] )!!}
			</div>
			<div class="form-group col">
				{!! Form::label ('avistoMunicipio','Municipio:') !!}
				{!! Form::select ('avistoidMunicipio[]',$municipios,'', ['class' => 'form-control', 'id' => 'avistoidMunicipio'] )!!}
			</div>
			<div class="form-group col">
				{!! Form::label ('avistoLocalidad','Localidad:') !!}
				{!! Form::select ('avistoidLocalidad[]',$localidades,'', ['class' => 'form-control', 'id' => 'avistoidLocalidad'] )!!}
			</div>
		</div>
		<div class="row">
			<div class="col">
				{!! Form::label ('descripcionTxt','Breve descripción del hecho:') !!}
				{!! Form::textarea  ('avistoDescripcionHechos',old('Breve descripción del hecho'), ['class' => 'form-control mayuscula', 'id' => 'avistoDescripcionHechos','size' => '30x4','data-validation' =>'required','data-validation-error-msg-required' =>'Ingrese la descripción del hecho'])!!}
			</div>
		</div>
	</div>
</div>
