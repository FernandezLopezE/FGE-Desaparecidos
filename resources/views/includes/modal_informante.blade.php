<!-- Modal Datos del informante-->
<div class="modal fade" id="modalInformante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">DATOS DEL INFORMANTE</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form>
			<div class="row">
				<div class="form-group col-lg-3">
					{!! Form::label ('informanteNombres','Nombre(s):') !!}
					{!! Form::text ('informanteNombres',
									old('informanteNombres'),
									['class' => 'form-control mayuscula',
										'id' => 'informanteNombres',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('informantePrimerAp','Primer apellido:') !!}
					{!! Form::text ('informantePrimerAp',
									old('informantePrimerAp'),
									['class' => 'form-control mayuscula',
										'id' => 'informantePrimerAp',
										'data-validation' => 'required',
										'data-validation-error-msg-required' => 'El campo es requerido'
									] )!!}
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('informanteSegundoAp','Segundo apellido:') !!}
					{!! Form::text ('informanteSegundoAp',
									old('informanteSegundoAp'),
									['class' => 'form-control mayuscula',
										'id' => 'informanteSegundoAp',
									] )!!}
				</div>
				<div class="form-group col-lg-3">
				{!! Form::label ('informanteidParentesco','Parentesco:') !!}
				{!! Form::select ('informanteidParentesco',
									$parentescos,
									'',
									['class' => 'form-control',
										'id' => 'informanteidParentesco'
									] )!!}		
				</div>
			</div>

			<div class="row">
				<div class="form-group col" id="otro_parent" style="display:none">
					{!! Form::label ('informanteOtroParentesco','Especifique:') !!}
					{!! Form::text ('informanteOtroParentesco',
									old('informanteOtroParentesco'),
									['class' => 'form-control mayuscula',
										'id' => 'informanteOtroParentesco',
									] )!!}
				</div>
			</div><br>

			<div class="row" id=""  > 	
				<div class="form-group col-lg-3">
					{!! Form::label ('informanteidNacionalidad','Nacionalidad:') !!}
					{!! Form::select ('informanteidNacionalidad',
										$nacionalidades,
										'',
										['class' => 'form-control',
											'id' => 'informanteidNacionalidad',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => '* Elija una opción'
										] )!!}				
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('informanteidDocumentoIdentidad','Identificación:') !!}
					{!! Form::select ('informanteidDocumentoIdentidad',
										$documentos,
										'',
										['class' => 'form-control',
											'id' => 'informanteidDocumentoIdentidad'
										])!!}
					
				</div>
				<div class="form-group col" id="otro_doc" style="display:none">
					{!! Form::label ('informanteOtroDocIdentidad','Especifique:') !!}
					{!! Form::text ('informanteOtroDocIdentidad',
										old('informanteOtroDocIdentidad'),
										['class' => 'form-control mayuscula',
											'id' => 'informanteOtroDocIdentidad',
										 ] )!!}				
				</div>
				<div class="form-group col">
					{!! Form::label ('informanteNumDocIdentidad','Número de identificación:') !!}
					{!! Form::text ('informanteNumDocIdentidad',
										old('informanteNumDocIdentidad'),
										['class' => 'form-control mayuscula',
											'id' => 'informanteNumDocIdentidad',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										])!!}				
				</div>
			</div><hr>

			<div class="row" id=""  > 	
				<div class="form-group col-lg-3">
					{!! Form::label ('informanteTipoDireccion','Tipo de dirección:') !!}
						{!! Form::select ('informanteTipoDireccion',
											$tiposDireccion,
											'informanteTipoDireccion',
											['class' => 'form-control',
												'id' => 'informanteTipoDireccion'
											] )!!}	
				</div>
				<div class="form-group col-lg-5">
					{!! Form::label ('informanteCalle','Calle:') !!}
					{!! Form::text ('informanteCalle',
										old('informanteCalle'),
										['class' => 'form-control mayuscula',
											'id' => 'informanteCalle',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido'
										] )!!}				
				</div>
				<div class="form-group col">
					{!! Form::label ('informanteNumExterno','Número exterior:') !!}
					{!! Form::text ('informanteNumExterno',
									old('informanteNumExterno'),
									['class' => 'form-control mayuscula',
										'id' => 'informanteNumExterno',
									] )!!}				
				</div>
				<div class="form-group col">
					{!! Form::label ('informanteNumInterno','Número interior:') !!}
					{!! Form::text ('informanteNumInterno',
									old('informanteNumInterno'),
									['class' => 'form-control mayuscula',
										'id' => 'informanteNumInterno',
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
				<div class="form-group col-lg-2">
					{!! Form::label ('informanteTipoTel','Tipo de teléfono:') !!}
					{!! Form::select ('informanteTipoTel[]',
										$tiposTelefonos,
										'',
										['class' => 'form-control',
											'id' => 'informanteTipoTel[]'
											])!!}	
				</div>
				<div class="form-group col-lg-2">
					{!! Form::label ('lada','Código del país:') !!}
					{!! Form::text ('lada[]',
										old(''),
										['class' => 'form-control',
											'id' => 'lada'
											] )!!}	
				</div>
				<div class="form-group col-lg-3">
					{!! Form::label ('informanteTelefonos','Número:') !!}
					{!! Form::text ('informanteTelefonos[]',
										old('informanteTelefonos'), 
										['class' => 'form-control mayuscula',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido',
											'id' => 'informanteTelefonos'
										] )!!}				
				</div>
				<div class="form-group col-lg-1">
					{!! Form::label ('ext','Ext:') !!}
					{!! Form::text ('ext[]',old(''), ['class' => 'form-control mayuscula',
											'id' => 'ext[]'
											] )!!}				
				</div>	
				<div class="form-group col-lg-4">
					{!! Form::label ('correoElectronico','Correo electrónico:') !!}
					{!! Form::text ('correoElectronico',
										old('correoElectronico'),
										['class' => 'form-control',
											'id' => 'correoElectronico'
										] )!!}				
				</div>
			</div>
			<div id="telefono2"> </div>
			<div class="row form-group">
				<button type="button" class="btn btn-dark pull-right"  id="btnAgregarTelefono"><i class="fa fa-plus"></i> AGREGAR TELEFONO</button>
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
		<button type="button" class="btn btn-dark" id="btnGuardarInformante"><i class="fa fa-save"></i>  GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->