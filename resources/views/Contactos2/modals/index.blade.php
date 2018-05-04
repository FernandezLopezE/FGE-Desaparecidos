<!-- Modal Datos del informante-->
<div class="modal fade" id="modalDesaparecidoContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">DETALLE DEL DESAPARECIDO</h5>
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
					{!! Form::label ('correoElectronico','Correo electrónico:') !!}
					{!! Form::text ('email',
										old(''),
										['class' => 'form-control',
											'id' => 'correoElectronico'
											] )!!}	
				</div>
			</div>
			<div class="row" id=""  > 
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
			<div id="telefono3"> </div>
			<p align="right">
				<button type="button" class="btn btn-large btn-primary openbutton"  id="btnAgregarTelefonoC"><i class="fa fa-plus"></i> Agregar telefono</button>
			</p>

			<div>
				<div class="form-group col">
								
				</div>
			</div>
			<div class="row">
				<div class="col-lg-1">
					<p align="right">
					<span class="btn btn-primary " title="Facebook">
                	<i class="fa fa-facebook" style="color:white"></i>
            	</span> </p>
				</div>
				<div class="col">
					{!! Form::text ('redesSociales[]',old(''), ['class' => 'form-control mayuscula',
											'id' => 'redesSociales[]'
											] )!!}
				</div>
				<div class="col-lg-1">
					<p align="right">
					<span class="btn btn-primary " title="Twitter">
	            	<i class="fa fa-twitter" style="color:white"></i>
	        	</span> </p>
				</div>
				<div class="col">
					{!! Form::text ('redesSociales[]',old(''), ['class' => 'form-control mayuscula',
											'id' => 'redesSociales[]'
											] )!!}
				</div>
				<div class="col-lg-1">
					<p align="right">
					<span class="btn btn-primary  " title="Instagram">
	           		 <i class="fa fa-instagram" style="color:white"></i>
	        	</span>
	        	</p>
				</div>
				<div class="col">
					{!! Form::text ('redesSociales[]',old(''), ['class' => 'form-control mayuscula',
											'id' => 'redesSociales[]'
											] )!!}
				</div>	
				<div class="col-lg-1">
					<p align="right">
					<button type="button" id="btnOtraRed" class="btn btn-primary">
	           		 Otra
	        	</button>
	        	</p>
				</div>
				<div id="divOtraRed" class="col-lg-2" style="display: none">
					{!! Form::text ('redesSociales[]',old(''), ['class' => 'form-control mayuscula',
											'id' => 'redesSociales[]'
											] )!!}
				</div>

			</div>
	        
		</form>
		<!-- Fin del Contenido del formulario-->
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
		<button type="button" class="btn btn-dark" id="btnGuardarContacto"><i class="fa fa-save"></i>  GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->