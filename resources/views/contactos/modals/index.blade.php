<!-- Modal Datos del informante-->
<div class="modal fade" id="modalDesaparecidoContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<i class="fa fa-phone" aria-hidden="true" style="font-size:30px"></i> 	Datos de contacto
		</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
<!-- Contenido del formulario-->
		<form>	
			<div class="row" id=""  > 
				<div class="form-group col-lg-6">
					{!! Form::label ('tipoContacto','Tipo de contacto:') !!}
					{!! Form::select ('tipoContacto',
										$tiposContacto,
										'',
										['class' => 'form-control',
											'id' => 'tipoContacto'
											])!!}	
				</div>
				<div class="form-group col-lg-6" id="divCorreo" style="display:none">
					{!! Form::label ('correoElectronico','Correo electrónico:') !!}
					{!! Form::text ('email',
										old(''),
										['class' => 'form-control',
											'id' => 'correoElectronico'
											] )!!}	
				</div>
			</div>
			<div id="divTelefono" class="row" id="" style="display:none"> 
				<div class="form-group col-lg-4">
					{!! Form::label ('informanteTipoTel','Tipo de telefono:') !!}
					{!! Form::select ('informanteTipoTelC[]',
										$tiposTelefonos,
										'',
										['class' => 'form-control',
											'id' => 'informanteTipoTelC[]'
											])!!}	
				</div>
				<div class="form-group col-lg-2">
					{!! Form::label ('lada','Código del país:') !!}
					{!! Form::text ('ladaC[]',
										old(''),
										['class' => 'form-control',
											'id' => 'ladaC'
											] )!!}	
				</div>
				<div class="form-group col-lg-4">
					{!! Form::label ('informanteTelefonos','Número:') !!}
					{!! Form::text ('informanteTelefonosC[]',
										old('informanteTelefonos'), 
										['class' => 'form-control mayuscula',
											'data-validation' => 'required',
											'data-validation-error-msg-required' => 'El campo es requerido',
											'id' => 'informanteTelefonosC'
										] )!!}				
				</div>
				<div class="form-group col-lg-2">
					{!! Form::label ('ext','Ext:') !!}
					{!! Form::text ('extC[]',old(''), ['class' => 'form-control mayuscula',
											'id' => 'extC[]'
											] )!!}				
				</div>	
			</div>
			<div id="divRedSocial" class="row" style="display:none">
				
				<div class="col-lg-6">
				    {!! Form::label ('redesSociales','Red social:') !!}
					{!! Form::select ('redesSociales',
										$redes,
										'',
										['class' => 'form-control',
											'id' => 'redesSociales'
											])!!}
				</div>
				<div class="col-lg-6">
				    {!! Form::label ('nombreUsuario','Nombre de usuario:') !!}
				    {!! Form::text ('nombreUsuario',old(''), ['class' => 'form-control mayuscula',
											'id' => 'nombreUsuario'
											] )!!}
					
				</div>
				

			</div>
	        
		</form>
		<!-- Fin del Contenido del formulario-->
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-dark" id="btnEditarContacto" style="display:none">Guardar</button>
		<button type="button" class="btn btn-dark" id="btnGuardarContacto" >Guardar</button>
		<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->