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
				<div class="form-group col-md-4" id="div_primerAp">
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
				<div class="form-group col-md-4" id="div_segundoAp">
					{!! Form::label ('segundoAp','Segundo apellido:',['class' => 'form-control-label']) !!}
					{!! Form::text ('segundoAp',
									old('segundoAp'),
									['class' => 'form-control mayuscula',
										'id' => 'segundoAp',
									] )!!}
					<div class="form-control-feedback" id="error_segundoAp"></div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4" id="div_idParentesco">
				{!! Form::label ('idParentesco','Parentesco:',['class' => 'form-control-label']) !!}
				{!! Form::select ('idParentesco',
									$parentescos,
									'',
									['class' => 'form-control',
										'id' => 'idParentesco'
									] )!!}
					<div class="form-control-feedback" id="error_idParentesco"></div>		
				</div>
				<div class="form-group col-md-4" id="div_otroParentesco" style="display:none">
					{!! Form::label ('otroParentesco','Especifique:',['class' => 'form-control-label']) !!}
					{!! Form::text ('otroParentesco',
									old('otroParentesco'),
									['class' => 'form-control mayuscula',
										'id' => 'otroParentesco',
									] )!!}
					<div class="form-control-feedback" id="error_otroParentesco"></div>
				</div>
				<div class="form-group col-md-4" id="div_idNacionalidad">
					{!! Form::label ('idNacionalidad','Nacionalidad:',['class' => 'form-control-label']) !!}
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
					{!! Form::label ('idDocumentoIdentidad','Identificación:',['class' => 'form-control-label']) !!}
					{!! Form::select ('idDocumentoIdentidad',
										$documentos,
										'',
										['class' => 'form-control',
											'id' => 'idDocumentoIdentidad'
										])!!}
					<div class="form-control-feedback" id="error_idDocumentoIdentidad"></div>		
				</div>
				<div class="form-group col-md-4" id="div_otroDocIdentidad" style="display:none">
					{!! Form::label ('otroDocIdentidad','Especifique:',['class' => 'form-control-label']) !!}
					{!! Form::text ('otroDocIdentidad',
										old('otroDocIdentidad'),
										['class' => 'form-control mayuscula',
											'id' => 'otroDocIdentidad',
										 ] )!!}
					<div class="form-control-feedback" id="error_otroDocIdentidad"></div>				
				</div>
				<div class="form-group col-md-4" id="div_numDocIdentidad">
					{!! Form::label ('numDocIdentidad','Número de identificación:',['class' => 'form-control-label']) !!}
					{!! Form::text ('numDocIdentidad',
										old('numDocIdentidad'),
										['class' => 'form-control mayuscula',
											'id' => 'numDocIdentidad',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										])!!}
					<div class="form-control-feedback" id="error_numDocIdentidad"></div>		
				</div>
			</div>
			<div class='hr'>
				<span class='hr-title'> Datos del domicilio </span>
			</div>

			<div class="row" id=""  > 	
				<div class="form-group col-md-4" id="div_tipoDireccion">
					{!! Form::label ('tipoDireccion','Tipo de dirección:',['class' => 'form-control-label']) !!}
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
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										] )!!}
					<div class="form-control-feedback" id="error_calle"></div>
				</div>
				<div class="form-group col-md-2" id="div_numExterno">
					{!! Form::label ('numExterno','Número exterior:',['class' => 'form-control-label']) !!}
					{!! Form::text ('numExterno',
									old('numExterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numExterno',
									] )!!}
					<div class="form-control-feedback" id="error_numExterno"></div>
				</div>
				<div class="form-group col-md-2" id="div_numInterno">
					{!! Form::label ('numInterno','Número interior:',['class' => 'form-control-label']) !!}
					{!! Form::text ('numInterno',
									old('numInterno'),
									['class' => 'form-control mayuscula',
										'id' => 'numInterno',
									])!!}
					<div class="form-control-feedback" id="error_numInterno"></div>
				</div>
			</div>

			<div class="row" id=""  > 	
				<div class="form-group col-md-4" id="div_idEstado">
					{!! Form::label ('idEstado','Estado:',['class' => 'form-control-label']) !!}
					{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}
					<div class="form-control-feedback" id="error_idEstado"></div>
				</div>
				<div class="form-group col-md-4" id="div_idMunicipio">
					{!! Form::label ('idMunicipio','Municipio:',['class' => 'form-control-label']) !!}
					{!! Form::select ('idMunicipio',$municipios,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}
					<div class="form-control-feedback" id="error_idMunicipio"></div>
				</div>
				<div class="form-group col-md-4" id="div_idLocalidad">
					{!! Form::label ('idLocalidad','Localidad:',['class' => 'form-control-label']) !!}
					{!! Form::select ('idLocalidad',$localidades,'',
											 ['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											 ] )!!}
					<div class="form-control-feedback" id="error_idLocalidad"></div>
				</div>
			</div>
	
			<div class="row" id=""  > 	
				<div class="form-group col-md-8" id="div_idColonia">
					{!! Form::label ('idColonia','Colonia:',['class' => 'form-control-label']) !!}
					{!! Form::select ('idColonia',$colonias,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}
					<div class="form-control-feedback" id="error_idColonia"></div>				
				</div>
				<div class="form-group col-md-4" id="div_idCodigoPostal">
					{!! Form::label ('idCodigoPostal','Código postal:',['class' => 'form-control-label']) !!}
					{!! Form::select ('idCodigoPostal',$codigos,'',
											['class' => 'form-control',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'El campo es requerido'
											] )!!}
					<div class="form-control-feedback" id="error_idCodigoPostal"></div>				
				</div>
			</div>
			<div class="row pull-right">
				<button type="button" class="btn btn-dark btn-sm"  id="btnAgregarTelefono">AGREGAR OTRO TELÉFONO</button>
			</div>
			<div class='hr'>
				<span class='hr-title'> Datos de contacto </span>				
			</div>
			
			
			<div class="row" id=""  > 
				<div class="form-group col-md-2">
					{!! Form::label ('tipoTelefono','Tipo de telefono:',['class' => 'form-control-label']) !!}
					{!! Form::select ('tipoTelefono[]',
										$tiposTelefonos,
										'',
										['class' => 'form-control'])!!}	
				</div>
				<div class="form-group col-md-2">
					{!! Form::label ('lada','Código del país:',['class' => 'form-control-label']) !!}
					{!! Form::text ('lada[]',
										old(''),
										['class' => 'form-control',
											'id' => 'lada'
											] )!!}		
				</div>
				<div class="form-group col-md-4">
					{!! Form::label ('telefonos','Número:',['class' => 'form-control-label']) !!}
					{!! Form::text ('telefonos[]',
										old('telefonos'), 
										['class' => 'form-control mayuscula',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										] )!!}				
				</div>
				<div class="form-group col-md-1">
					{!! Form::label ('ext','Ext:',['class' => 'form-control-label']) !!}
					{!! Form::text ('ext[]',old(''), ['class' => 'form-control mayuscula'] )!!}				
				</div>	
				<div class="form-group col-md-3" id="div_correoElectronico">
					{!! Form::label ('correoElectronico','Correo electrónico:',['class' => 'form-control-label']) !!}
					{!! Form::text ('correoElectronico',
										old('correoElectronico'),
										['class' => 'form-control',
											'id' => 'correoElectronico'
										] )!!}
					<div class="form-control-feedback" id="error_correoElectronico"></div>					
				</div>
			</div>
			<div id="telefono2"> </div>

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
	    <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
	    <button type="button" class="btn btn-dark" id="btnEditarInformante" style="display:none">EDITAR</button>
		<button type="button" class="btn btn-dark" id="btnGuardarInformante" >GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->