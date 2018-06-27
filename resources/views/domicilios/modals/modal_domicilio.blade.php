<!-- Modal Datos del informante-->
<div class="modal fade" id="modalDomicilio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
				<i class="fa fa-map-marker" aria-hidden="true" style="font-size:30px"></i> Datos del domicilio</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form id="formDesaparecido">
			<div class="row" > 	
				<div class="form-group col-lg-3" id="div_tipoDireccion">
					{!! Form::label ('tipoDireccion','Tipo de dirección:') !!}
						{!! Form::select ('tipoDireccion',
											$tiposDireccion,
											'tipoDireccion',
											['class' => 'form-control',
												'id' => 'tipoDireccion'
											] )!!}	
											<div class="form-control-feedback" id="error_tipoDireccion"></div>
				</div>
				<div class="form-group col-lg-5" id="div_calle">
					{!! Form::label ('calle','Calle:') !!}
					{!! Form::text ('calle',
										old('calle'),
										['class' => 'form-control mayuscula',
											'id' => 'calle',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										] )!!}				
					<div class="form-control-feedback" id="error_calle"></div>
				</div>
				<div class="form-group col" id="div_numExterno">
					{!! Form::label ('numExterno','Número exterior:') !!}
					{!! Form::text ('numExterno',
									old('numExterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numExterno',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}				
									<div class="form-control-feedback" id="error_numExterno"></div>
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
				<div class="form-group col-lg-4" id="div_idMunicipio">
					{!! Form::label ('idMunicipio','Municipio:') !!}
					{!! Form::select ('idMunicipio',$municipios,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}		
											<div class="form-control-feedback" id="error_idMunicipio"></div>		
				</div>
				<div class="form-group col-lg-4" id="div_idLocalidad">
					{!! Form::label ('idLocalidad','Localidad:') !!}
					{!! Form::select ('idLocalidad',$localidades,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											 ] )!!}			
											 <div class="form-control-feedback" id="error_idLocalidad"></div>	
				</div>
			</div>
	
			<div class="row" id=""  > 	
				<div class="form-group col-lg-8" id="div_idColonia">
					{!! Form::label ('idColonia','Colonia:') !!}
					{!! Form::select ('idColonia',$colonias,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}
											<div class="form-control-feedback" id="error_idColonia"></div>					
				</div>
				<div class="form-group col-lg-4" id="div_idCodigoPostal">
					{!! Form::label ('idCodigoPostal','Código postal:') !!}
					{!! Form::select ('idCodigoPostal',$codigos,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}				
											<div class="form-control-feedback" id="error_idCodigoPostal"></div>
				</div>
			</div><br>

			<div class="row" id=""  > 

				<div class="form-group col-lg-6">
					{!! Form::label ('telefonos','Número de teléfono:') !!}
					{!! Form::text ('telefonos',
										old('telefonos'), 
										['class' => 'form-control mayuscula'
										] )!!}				
				</div>
				<div class="form-group col-lg-2" id="div_ext">
					{!! Form::label ('ext','Ext:') !!}
					{!! Form::text ('ext',old(''), ['class' => 'form-control mayuscula'] )!!}				
				</div>	

			</div>
			



		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-dark" id="btnActualizarD">Guardar</button>
		<button type="button" class="btn btn-dark" id="btnGuardarDomicilio">Guardar</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->