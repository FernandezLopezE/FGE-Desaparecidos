<!-- Modal Datos del informante-->
<div class="modal fade" id="modalFamiliar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-users" aria-hidden="true" style="font-size:30px"></i>    Datos del familiar</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form id="formulario">
			<div class="row">
				<div class="form-group col-md-3" id="div_idParentesco">
				{!! Form::label ('idParentesco','Parentesco:',['class' => 'form-control-label']) !!}
				{!! Form::select ('idParentesco',
									$parentescos,
									'',
									['class' => 'form-control',
										'id' => 'idParentesco'
									] )!!}
					<div class="form-control-feedback" id="error_idParentesco"></div>		
				</div>
				<div class="form-group col-md-3" id="div_nombres">
					{!! Form::label ('nombres','Nombre(s):',['class' => 'form-control-label']) !!}
					{!! Form::text ('nombres',
									old('nombres'),
									['class' => 'form-control mayuscula',
										'id' => 'nombres',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}
					<div class="form-control-feedback" id="error_nombres"></div>	
				</div>
				<div class="form-group col-md-3" id="div_primerAp">
					{!! Form::label ('primerAp','Primer apellido:',['class' => 'form-control-label']) !!}
					{!! Form::text ('primerAp',
									old('primerAp'),
									['class' => 'form-control mayuscula',
										'id' => 'primerAp',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}
					<div class="form-control-feedback" id="error_primerAp"></div>
				</div>
				<div class="form-group col-md-3" id="error_segundoAp">
					{!! Form::label ('segundoAp','Segundo apellido:',['class' => 'form-control-label']) !!}
					{!! Form::text ('segundoAp',
									old('segundoAp'),
									['class' => 'form-control mayuscula',
										'id' => 'segundoAp',
									] )!!}
					<div class="form-control-feedback" id="error_segundoAp"></div>
				</div>
				<div class="form-group col-md-3" id="error_fechaNacimiento">
					{!! Form::label ('fechaNacimiento','Fecha nacimiento:',['class' => 'form-control-label']) !!}
					{!! Form::text ('fechaNacimiento',
									old('fechaNacimiento'),
									['class' => 'form-control',
										'id' => 'fechaNacimiento',
										'data-validation-format'=>"dd/mm/yyyy"
									] )!!}
					<div class="form-control-feedback" id="error_fechaNacimiento"></div>
				</div>
				<div class="form-group col-md-3" id="div_edad">
					{!! Form::label ('edad','Edad:',['class' => 'form-control-label']) !!}
					{!! Form::text ('edad',
									old('edad'),
									['class' => 'form-control',
										'id' => 'edad',
									] )!!}
					<div class="form-control-feedback" id="error_edad"></div>
				</div>

			</div>
		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
	    <button type="button" class="btn btn-dark" id="btnEditarFamiliar" style="display:none">EDITAR</button>
		<button type="button" class="btn btn-dark" id="btnGuardarFamiliar" >GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->