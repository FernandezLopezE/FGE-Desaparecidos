<!-- Modal Datos del informante-->
<div class="modal fade" id="modalDesaparecidoFamiliar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">DATOS DEL FAMILIAR</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form>
		<div class="row">
			<div class="form-group col">
			{!! Form::label ('familiaresidParentesco','Parentesco:') !!}
			{!! Form::select ('familiaresidParentesco',
								$parentescos,
								'',
								['class' => 'form-control',
									'id' => 'familiaresidParentesco'
								] )!!}		
			</div>
		</div>
		<div class="row">			
			<div class="col">
				{!! Form::label ('familiaresNombres','Nombre(s):') !!}
				{!! Form::text ('familiaresNombres[]',
								'',
								['class' => 'form-control mayuscula',
									 'id' =>'familiaresNombres',
									 'data-validation' => 'required',
									 'data-validation-error-msg-required' => '* Ingrese un nombre'
								] )!!}
			</div>
			<div class="col">
				{!! Form::label ('familiaresPrimerAp','Primer apellido:') !!}
				{!! Form::text ('familiaresPrimerAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresPrimerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingrese el primero apellido'] )!!}
			</div>
			<div class="col">
				{!! Form::label ('familiaresSegundoAp','Segundo apellido:') !!}
				{!! Form::text ('familiaresSegundoAp[]','', ['class' => 'form-control mayuscula', 'id' => 'familiaresSegundoAp'] )!!}
			</div>
		</div>
		<div class="row">
			<div class="form-group col">
				{!! Form::label ('familiaresFechaNacimiento','Fecha de nacimiento:') !!}
				{!! Form::text ('familiaresFechaNacimiento',
									old('Fecha de nacimiento'),
									['class' => 'form-control',
										'id' => 'familiaresFechaNacimiento' ,
										'data-validation' => 'required date',
										'data-validation-error-msg' => 'Ingrese una fecha valida o menor a la actual',
										'data-validation-format'=>"dd/mm/yyyy"
									])!!}
			</div>		
			<div class="form-group col">
				{!! Form::label ('familiaresEdad','Edad aparente:') !!}
				{!! Form::text ('familiaresEdad',
									old('Edad aparente'),
									['class' => 'form-control',
										'id' => 'familiaresEdad',
									] )!!}
			</div>
		</div>
		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
			<button type="button" class="btn btn-dark" id="btnGuardarFamiliares"><i class="fa fa-save"></i>  GUARDAR</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->