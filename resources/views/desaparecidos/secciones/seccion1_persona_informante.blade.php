<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">DATOS DE LOS INFORMANTES</h5>		
	</div>
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
		<div class="col-lg-6">
			<p align="right"><input type="button" id="probar" value="ENVIAR"></p>
		</div>
	</div>
	</div>



</div>
<div class="my-4">	</div>
