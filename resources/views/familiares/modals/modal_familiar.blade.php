<!-- Modal Datos del informante-->
<div class="modal fade" id="modalFamiliar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Datos del familiar</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form id="formDesaparecido">
			<div class="row">
				<div class="form-group col-lg-3">
				{!! Form::label ('idParentesco','Parentesco:') !!}
				{!! Form::select ('idParentesco',
									$parentescos,
									'',
									['class' => 'form-control',
										'id' => 'idParentesco'
									] )!!}		
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('nombres','Nombre(s):') !!}
					{!! Form::text ('nombres',
									old('nombres'),
									['class' => 'form-control mayuscula',
										'id' => 'nombres',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('primerAp','Primer apellido:') !!}
					{!! Form::text ('primerAp',
									old('primerAp'),
									['class' => 'form-control mayuscula',
										'id' => 'primerAp',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('segundoAp','Segundo apellido:') !!}
					{!! Form::text ('segundoAp',
									old('segundoAp'),
									['class' => 'form-control mayuscula',
										'id' => 'segundoAp',
									] )!!}
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('fechaNacimiento','Fecha nacimiento:') !!}
					{!! Form::text ('fechaNacimiento',
									old('fechaNacimiento'),
									['class' => 'form-control',
										'id' => 'fechaNacimiento',
										'data-validation-format'=>"dd/mm/yyyy"
									] )!!}
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('edad','Edad:') !!}
					{!! Form::text ('edad',
									old('edad'),
									['class' => 'form-control',
										'id' => 'edad',
									] )!!}
				</div>

			</div>
		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
        <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
		<button type="button" class="btn btn-dark" id="btnGuardarFamiliar">GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->