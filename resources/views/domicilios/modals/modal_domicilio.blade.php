<!-- Modal Datos del informante-->
<div class="modal fade" id="modalDomicilio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">DATOS DEL DOMICILIO</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form id="formDesaparecido">
			<div class="row" > 	
				<div class="form-group col-lg-3">
					{!! Form::label ('tipoDireccion','Tipo de dirección:') !!}
						{!! Form::select ('tipoDireccion',
											$tiposDireccion,
											'tipoDireccion',
											['class' => 'form-control',
												'id' => 'tipoDireccion'
											] )!!}	
				</div>
				<div class="form-group col-lg-5">
					{!! Form::label ('calle','Calle:') !!}
					{!! Form::text ('calle',
										old('calle'),
										['class' => 'form-control mayuscula',
											'id' => 'calle',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										] )!!}				
				</div>
				<div class="form-group col">
					{!! Form::label ('numExterno','Número exterior:') !!}
					{!! Form::text ('numExterno',
									old('numExterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numExterno',
									] )!!}				
				</div>
				<div class="form-group col">
					{!! Form::label ('numInterno','Número interior:') !!}
					{!! Form::text ('numInterno',
									old('numInterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numInterno',
									])!!}				
				</div>
			</div>

			<div class="row" id=""  > 	
				<div class="form-group col-lg-4">
					{!! Form::label ('idEstado','Estado:') !!}
					{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}				
				</div>
				<div class="form-group col-lg-4">
					{!! Form::label ('idMunicipio','Municipio:') !!}
					{!! Form::select ('idMunicipio',$municipios,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}				
				</div>
				<div class="form-group col-lg-4">
					{!! Form::label ('idLocalidad','Localidad:') !!}
					{!! Form::select ('idLocalidad',$localidades,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											 ] )!!}				
				</div>
			</div>
	
			<div class="row" id=""  > 	
				<div class="form-group col-lg-8">
					{!! Form::label ('idColonia','Colonia:') !!}
					{!! Form::select ('idColonia',$colonias,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}				
				</div>
				<div class="form-group col-lg-4">
					{!! Form::label ('idCodigoPostal','Código postal:') !!}
					{!! Form::select ('idCodigoPostal',$codigos,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}				
				</div>
			</div><br>

			<div class="row" id=""  > 

				<div class="form-group col-lg-6">
					{!! Form::label ('telefonos','Número:') !!}
					{!! Form::text ('telefonos',
										old('telefonos'), 
										['class' => 'form-control mayuscula',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										] )!!}				
				</div>
				<div class="form-group col-lg-2">
					{!! Form::label ('ext','Ext:') !!}
					{!! Form::text ('ext',old(''), ['class' => 'form-control mayuscula'] )!!}				
				</div>	

			</div>
			



		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
<<<<<<< HEAD
	   <button type="button" class="btn btn-dark" id="btnActualizarD">ACTUALIZAR</button>
=======
	    <button type="button" class="btn btn-dark" id="btnActualizarD">ACTUALIZAR</button>
>>>>>>> 48bcee7842b3edbb5899d62b06ea3391a8bbb38e
		<button type="button" class="btn btn-dark" id="btnGuardarDomicilio">GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->