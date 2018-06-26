<!-- Modal Datos del informante-->
<div class="modal fade" id="modalInformante" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<i class="fa fa-commenting-o" aria-hidden="true" style="font-size:30px"></i>
			Datos del informante
		</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form id="formDesaparecido">
			<div class="row">
				<div class="form-group col-md-4" id="div_nombres">
					{!! Form::label ('nombres','Nombre(s):') !!}
					{!! Form::text ('nombres',
									old('nombres'),
									['class' => 'form-control mayuscula',
										'id' => 'nombres',
										'autocomplete' => 'off',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido.'
									] )!!}
					<div class="form-control-feedback" id="error_nombres"></div>
				</div>
				<div class="form-group col-md-4" id="div_primerAp">
					{!! Form::label ('primerAp','Primer apellido:') !!}
					{!! Form::text ('primerAp',
									old('primerAp'),
									['class' => 'form-control mayuscula',
										'id' => 'primerAp',
										'autocomplete' => 'off',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido.'
									] )!!}
					<div class="form-control-feedback" id="error_primerAp"></div>
				</div>
				<div class="form-group col-md-4" id="div_segundoAp">
					{!! Form::label ('segundoAp','Segundo apellido:') !!}
					{!! Form::text ('segundoAp',
									old('segundoAp'),
									['class' => 'form-control mayuscula',
										'id' => 'segundoAp',
										'autocomplete' => 'off',
									] )!!}
					<div class="form-control-feedback" id="error_segundoAp"></div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4" id="div_idParentesco">
				{!! Form::label ('idParentesco','Parentesco:') !!}
				{!! Form::select ('idParentesco',
									$parentescos,
									'',
									['class' => 'form-control',
										'id' => 'idParentesco'
									] )!!}
					<div class="form-control-feedback" id="error_idParentesco"></div>		
				</div>
				<div class="form-group col-md-4" id="div_otroParentesco" style="display:none">
					{!! Form::label ('otroParentesco','Especifique:') !!}
					{!! Form::text ('otroParentesco',
									old('otroParentesco'),
									['class' => 'form-control mayuscula',
										'id' => 'otroParentesco',
										'autocomplete' => 'off',
									] )!!}
					<div class="form-control-feedback" id="error_otroParentesco"></div>
				</div>
				<div class="form-group col-md-4" id="div_idNacionalidad">
					{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
					{!! Form::select ('idNacionalidad',
										$nacionalidades,
										'',
										['class' => 'form-control',
											'id' => 'idNacionalidad',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => '* Elija una opción'
										] )!!}
					<div class="form-control-feedback" id="error_idNacionalidad"></div>				
				</div>
			</div>

			<div class="row" id="" >
				<div class="form-group col-md-4" id="div_idDocumentoIdentidad">
					{!! Form::label ('idDocumentoIdentidad','Identificación:') !!}
					{!! Form::select ('idDocumentoIdentidad',
										$documentos,
										'',
										['class' => 'form-control',
											'id' => 'idDocumentoIdentidad'
										])!!}
					<div class="form-control-feedback" id="error_idDocumentoIdentidad"></div>		
				</div>
				<div class="form-group col-md-4" id="div_otroDocIdentidad" style="display:none">
					{!! Form::label ('otroDocIdentidad','Especifique:') !!}
					{!! Form::text ('otroDocIdentidad',
										old('otroDocIdentidad'),
										['class' => 'form-control mayuscula',
											'id' => 'otroDocIdentidad',
										 ] )!!}
					<div class="form-control-feedback" id="error_otroDocIdentidad"></div>				
				</div>
				<div class="form-group col-md-4" id="div_numDocIdentidad">
					{!! Form::label ('numDocIdentidad','Número de identificación:') !!}
					{!! Form::text ('numDocIdentidad',
										old('numDocIdentidad'),
										['class' => 'form-control mayuscula',
											'id' => 'numDocIdentidad',
											'autocomplete' => 'off',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido.'
										])!!}
					<div class="form-control-feedback" id="error_numDocIdentidad"></div>		
				</div>
			</div>
			<div class='hr'>
				<span class='hr-title'> Datos del domicilio </span>
			</div>

			<div class="row" id=""  > 	
				<div class="form-group col-md-4" id="div_tipoDireccion">
					{!! Form::label ('tipoDireccion','Tipo de dirección:') !!}
						{!! Form::select ('tipoDireccion',
											$tiposDireccion,
											'tipoDireccion',
											['class' => 'form-control',
												'id' => 'tipoDireccion'
											] )!!}
					<div class="form-control-feedback" id="error_tipoDireccion"></div>
				</div>
				<div class="form-group col-md-4" id="div_calle">
					{!! Form::label ('calle','Calle:',['class' => 'form-control-label']) !!}
					{!! Form::text ('calle',
										old('calle'),
										['class' => 'form-control mayuscula',
											'id' => 'calle',
											'autocomplete' => 'off',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido.'
										] )!!}
					<div class="form-control-feedback" id="error_calle"></div>
				</div>
				<div class="form-group col-md-2" id="div_numExterno">
					{!! Form::label ('numExterno','Número exterior:') !!}
					{!! Form::text ('numExterno',
									old('numExterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numExterno',
										'autocomplete' => 'off',
									] )!!}
					<div class="form-control-feedback" id="error_numExterno"></div>
				</div>
				<div class="form-group col-md-2" id="div_numInterno">
					{!! Form::label ('numInterno','Número interior:') !!}
					{!! Form::text ('numInterno',
									old('numInterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numInterno',
										'autocomplete' => 'off',
									])!!}
					<div class="form-control-feedback" id="error_numInterno"></div>
				</div>
			</div>

			<div class="row" id=""  > 	
				<div class="form-group col-md-4" id="div_idEstado">
					{!! Form::label ('idEstado','Estado:') !!}
					{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}
					<div class="form-control-feedback" id="error_idEstado"></div>
				</div>
				<div class="form-group col-md-4" id="div_idMunicipio">
					{!! Form::label ('idMunicipio','Municipio:') !!}
					{!! Form::select ('idMunicipio',$municipios,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido.'
											] )!!}
					<div class="form-control-feedback" id="error_idMunicipio"></div>
				</div>
				<div class="form-group col-md-4" id="div_idLocalidad">
					{!! Form::label ('idLocalidad','Localidad:') !!}
					{!! Form::select ('idLocalidad',$localidades,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido.'
											 ] )!!}
					<div class="form-control-feedback" id="error_idLocalidad"></div>
				</div>
			</div>
	
			<div class="row" id=""  > 	
				<div class="form-group col-md-8" id="div_idColonia">
					{!! Form::label ('idColonia','Colonia:') !!}
					{!! Form::select ('idColonia',$colonias,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido.'
											] )!!}
					<div class="form-control-feedback" id="error_idColonia"></div>				
				</div>
				<div class="form-group col-md-4" id="div_idCodigoPostal">
					{!! Form::label ('idCodigoPostal','Código postal:') !!}
					{!! Form::select ('idCodigoPostal',$codigos,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido.'
											] )!!}
					<div class="form-control-feedback" id="error_idCodigoPostal"></div>				
				</div>
			</div>
			
			<div class='hr'>
				<span class='hr-title'> Datos de contacto </span>				
			</div>

			<div class="row" id=""  > 
				<div class="form-group col-md-2">
					{!! Form::label ('tipoTelefono','Tipo de teléfono:') !!}
					{!! Form::select ('tipoTelefono[]',
										$tiposTelefonos,
										'',
										['class' => 'form-control'])!!}	
				</div>
				<div class="form-group col-md-2">
					{!! Form::label ('lada','Código del país:') !!}
					{!! Form::text ('lada[]',
										old(''),
										['class' => 'form-control',
											'id' => 'lada',
											'autocomplete' => 'off',
											] )!!}		
				</div>
				<div class="form-group col-md-4">
					{!! Form::label ('telefonos','Número:') !!}
					{!! Form::text ('telefonos[]',
										old('telefonos'), 
										['class' => 'form-control mayuscula',
											'autocomplete' => 'off',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido.'
										] )!!}				
				</div>
				<div class="form-group col-md-1">
					{!! Form::label ('ext','Ext:') !!}
					{!! Form::text ('ext[]',old(''), ['class' => 'form-control mayuscula','autocomplete' => 'off',] )!!}				
				</div>	
				<div class="form-group col-md-3" id="div_correoElectronico">
					{!! Form::label ('correoElectronico','Correo electrónico:') !!}
					{!! Form::text ('correoElectronico',
										old('correoElectronico'),
										['class' => 'form-control',
											'id' => 'correoElectronico',
											'autocomplete' => 'off',
										] )!!}
					<div class="form-control-feedback" id="error_correoElectronico"></div>					
				</div>
			</div>

			<div id="telefono2"> </div>

			<div class="row pull-right">
				<button type="button" class="btn btn-dark btn-sm"  id="btnAgregarTelefono">Agregar otro teléfono</button>
			</div>
			<div class='hr'>
				<span class='hr-title'></span>				
			</div>
			
			<div class="row">
				<div class="form-check col-lg-12">
					<input class="form-check-input" type="checkbox" id="informante" checked="">
					<label class="form-check-label" for="informante">
						  SÓLO INFORMANTE
					</label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-check col-lg-12">
					<input class="form-check-input" type="checkbox"  id="notificaciones" checked="">
					<label class="form-check-label" for="notificaciones">
						 AUTORIZADA PARA DAR, OIR Y RECIBIR INFORMES
					</label>
				</div>
			</div>
		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-dark" id="btnEditarInformante" style="display:none">Guardar</button>
		<button type="button" class="btn btn-dark" id="btnGuardarInformante" >Guardar</button>
		<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->