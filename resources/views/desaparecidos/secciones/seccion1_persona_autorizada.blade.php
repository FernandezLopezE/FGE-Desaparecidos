<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">PERSONAS AUTORIZADAS PARA DAR, OIR Y RECIBIR INFORMES</h5>		
	</div>
	<div class="card-body">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">No.</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Parentesco</th>
		      <th scope="col">Télefono</th>
		      <th scope="col">Tipo de persona</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>SELENE PATRICIA GARCIA RAMON</td>
		      <td>MADRE</td>
		      <td>2281459373</td>
		      <td>INFORMANTE / RECIBIR INFORMACIÓN</td>
		      <td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mostrarModal">MOSTRAR</button></td>
		    </tr>
		  </tbody>
		</table>

		<!-- Ventana Modal -->
			<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">DATOS DE LOS INFORMANTES</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="card border-primary">
	
	<div class="card-body">
		<div class="row" id=""  >
			<div class="col-lg-3">
				{!! Form::label ('informanteNombres','Nombre(s):') !!}
				{!! Form::text ('informanteNombres',old('informanteNombres'), ['class' => 'form-control mayuscula', 'id' => 'informanteNombres', ] )!!}
			</div>
			<div class="col-lg-3">
				{!! Form::label ('informantePrimerAp','Primer apellido:') !!}
				{!! Form::text ('informantePrimerAp',old('informantePrimerAp'), ['class' => 'form-control mayuscula', 'id' => 'informantePrimerAp', ] )!!}
		  	</div>
		  	<div class="col-lg-3">
				{!! Form::label ('informanteSegundoAp','Segundo apellido:') !!}
				{!! Form::text ('informanteSegundoAp',old('informanteSegundoAp'), ['class' => 'form-control mayuscula', 'id' => 'informanteSegundoAp', ] )!!}
		  	</div>
		  	<div class="col-lg-3">
			{!! Form::label ('informanteidParentesco','Parentesco:') !!}
			{!! Form::select ('informanteidParentesco',$parentescos,'', ['class' => 'form-control', 'id' => 'informanteidParentesco'] )!!}		
		</div>
		</div>

	<div class="row">
		<div class="col" id="otro_parent" style="display:none">
			{!! Form::label ('informanteOtroParentesco','Especifique:') !!}
			{!! Form::text ('informanteOtroParentesco',old('informanteOtroParentesco'), ['class' => 'form-control mayuscula', 'id' => 'informanteOtroParentesco', ] )!!}
		</div>
	</div><br>

	<div class="row" id=""  > 	
		<div class="col-lg-3">
			{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
			{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}				
		</div>
		<div class="col-lg-3">
			{!! Form::label ('informanteidDocumentoIdentidad','Documento con que se identifica:') !!}
			{!! Form::select ('informanteidDocumentoIdentidad',$identificacion,'', ['class' => 'form-control', 'id' => 'informanteidDocumentoIdentidad'] )!!}
			
		</div>
		<div class="col" id="otro_doc" style="display:none">
			{!! Form::label ('informanteOtroDocIdentidad','Especifique:') !!}
			{!! Form::text ('informanteOtroDocIdentidad',old('informanteOtroDocIdentidad'), ['class' => 'form-control mayuscula', 'id' => 'informanteOtroDocIdentidad', ] )!!}				
		</div>
		<div class="col">
			{!! Form::label ('informanteNumDocIdentidad','Número de identificación:') !!}
			{!! Form::text ('informanteNumDocIdentidad',old('informanteNumDocIdentidad'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumDocIdentidad', ] )!!}				
		</div>
	</div><hr>

	<div class="row" id=""  > 	
		<div class="col-lg-3">
			{!! Form::label ('informanteTipoDireccion','Tipo de dirección:') !!}
				{!! Form::select ('informanteTipoDireccion',['CASA'=>'CASA','TRABAJO'=>'TRABAJO'],'informanteTipoDireccion', ['class' => 'form-control', 'id' => 'informanteTipoDireccion'] )!!}	
		</div>
		<div class="col-lg-5">
			{!! Form::label ('informanteCalle','Calle:') !!}
			{!! Form::text ('informanteCalle',old('informanteCalle'), ['class' => 'form-control mayuscula', 'id' => 'informanteCalle', ] )!!}				
		</div>
		<div class="col">
			{!! Form::label ('informanteNumExterno','Número exterior:') !!}
			{!! Form::text ('informanteNumExterno',old('informanteNumExterno'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumExterno', ] )!!}				
		</div>
		<div class="col">
			{!! Form::label ('informanteNumInterno','Número interior:') !!}
			{!! Form::text ('informanteNumInterno',old('informanteNumInterno'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumInterno', ] )!!}				
		</div>
	</div>

	<div class="row" id=""  > 	
		<div class="col-lg-4">
			{!! Form::label ('idEstado','Estado:') !!}
	{!! Form::select ('idEstado[]',$estados,'', ['class' => 'form-control', 'id' => 'idEstado'] )!!}				
		</div>
		<div class="col-lg-4">
			{!! Form::label ('informanteidMunicipio','Municipio:') !!}
	{!! Form::select ('informanteidMunicipio[]',$municipios,'', ['class' => 'form-control', 'id' => 'informanteidMunicipio'] )!!}				
		</div>
		<div class="col-lg-4">
			{!! Form::label ('idLocalidad','Localidad:') !!}
	{!! Form::select ('idLocalidad[]',$localidades,'', ['class' => 'form-control', 'id' => 'idLocalidad'] )!!}				
		</div>
	</div>
			
	<div class="row" id=""  > 	
		<div class="col-lg-8">
			{!! Form::label ('informanteidColonia','Colonia:') !!}
			{!! Form::select ('informanteidColonia[]',$colonias,'', ['class' => 'form-control', 'id' => 'informanteidColonia'] )!!}				
		</div>
		<div class="col-lg-4">
			{!! Form::label ('informanteidCodigoPostal','Código postal:') !!}
			{!! Form::text ('informanteidCodigoPostal',old('informanteidCodigoPostal'), ['class' => 'form-control mayuscula', 'id' => 'informanteidCodigoPostal', ] )!!}				
		</div>
	</div><br>

	<div class="row" id=""  > 
		<div class="col-lg-2">
			{!! Form::label ('','Tipo de telefono:') !!}
			{!! Form::select ('',['CASA'=>'CASA','TRABAJO'=>'TRABAJO','PERSONAL'=>'PERSONAL'],'', ['class' => 'form-control', 'id' => ''] )!!}	
		</div>
		<div class="col-lg-2">
			{!! Form::label ('','Lada:') !!}
			{!! Form::select ('',['A'=>'+52','B'=>'+53','C'=>'+59'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
		</div>
		<div class="col-lg-3">
			{!! Form::label ('informanteTelefonos','Número:') !!}
			{!! Form::text ('informanteTelefonos',old('informanteTelefonos'), ['class' => 'form-control mayuscula', 'id' => 'informanteTelefonos', ] )!!}				
		</div>
		<div class="col-lg-1">
			{!! Form::label ('','Ext:') !!}
			{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
		</div>	
		<div class="col-lg-4">
			{!! Form::label ('informanteCorreoElectronico','Correo electrónico:') !!}
			{!! Form::text ('informanteCorreoElectronico',old('informanteCorreoElectronico'), ['class' => 'form-control mayuscula', 'id' => 'informanteCorreoElectronico', ] )!!}				
		</div>
	</div><br>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-check">
			  <label class="form-check-label">
			    <input class="form-check-input icheck" type="checkbox" id="informante" name="informante" value="INFORMANTE"> SÓLO INFORMANTE
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label">
			    <input class="form-check-input icheck" type="checkbox"  id="recibir" value="RECIBIR"> AUTORIZADA PARA DAR, OIR Y RECIBIR INFORMES
			  </label>
			</div>
		</div>
	</div>
	</div>



</div>
<div class="my-4">	</div>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-dark">GUARDAR CAMBIOS</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>
			  </div>
			</div>

	</div>
</div>
<div class="my-4">	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>