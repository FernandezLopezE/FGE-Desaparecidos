@extends('layouts.app_uipj')

@section('content')

{!! Form::model($desaparecido, ['action' => 'DesaparecidoController@store_informante']) !!}
		{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}


		<div class="card border-primary">
			<div class="card-header">
				<div class="row">
					<div class="col-lg-9">
						<h5 class="card-title">DATOS DE LOS INFORMANTES</h5>
					</div>	
				</div>	
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="tablePrueba">
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
				  <tbody id='cuerpoT'>
					@forelse ($informantes as $informante)
						<tr>
						  <th scope="row">1</th>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mostrarModal" id="hola">MOSTRAR</button></td>
						</tr>
					@empty
						<tr><td colspan="7">No se encuentran datos</td></tr>
					@endforelse
				  </tbody>
				</table>
			<hr>
			<p align="right"><button type="button" class="btn btn-dark"  id="nuevoInformante" value="NUEVO">NUEVO</button></p>
			<div id="formInformante" style="display:none">
				<h4>AGREGAR UN NUEVO INFORMANTE</h4>
				<div class="row">
					<div class="col-lg-3">
						{!! Form::label ('informanteNombres','Nombre(s):') !!}
						{!! Form::text ('informanteNombres',old('informanteNombres'), ['class' => 'form-control mayuscula', 'id' => 'informanteNombres', 'placeholder' => 'Ingrese el nombre'] )!!}
					</div>
					<div class="col-lg-3">
						{!! Form::label ('informantePrimerAp','Primer apellido:') !!}
						{!! Form::text ('informantePrimerAp',old('informantePrimerAp'), ['class' => 'form-control mayuscula', 'id' => 'informantePrimerAp', 'placeholder' => 'Ingrese el primer apellido' ] )!!}
					</div>
					<div class="col-lg-3">
						{!! Form::label ('informanteSegundoAp','Segundo apellido:') !!}
						{!! Form::text ('informanteSegundoAp',old('informanteSegundoAp'), ['class' => 'form-control mayuscula', 'id' => 'informanteSegundoAp', 'placeholder' => 'Ingrese el segundo apellido' ] )!!}
					</div>
					<div class="col-lg-3">
					{!! Form::label ('informanteidParentesco','Parentesco:') !!}
					{!! Form::select ('informanteidParentesco',$parentescos,'', ['class' => 'form-control', 'id' => 'informanteidParentesco'] )!!}		
				</div>
				</div>

			<div class="row">
				<div class="col" id="otro_parent" style="display:none">
					{!! Form::label ('informanteOtroParentesco','Especifique:') !!}
					{!! Form::text ('informanteOtroParentesco',old('informanteOtroParentesco'), ['class' => 'form-control mayuscula', 'id' => 'informanteOtroParentesco', 'placeholder' => 'Ingrese el parentesco'] )!!}
				</div>
			</div><br>

			<div class="row" id=""  > 	
				<div class="col-lg-3">
					{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
					{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}				
				</div>
				<div class="col-lg-3">
					{!! Form::label ('informanteidDocumentoIdentidad','Documento con que se identifica:') !!}
					{!! Form::select ('informanteidDocumentoIdentidad',$documentos,'', ['class' => 'form-control', 'id' => 'informanteidDocumentoIdentidad'] )!!}
					
				</div>
				<div class="col" id="otro_doc" style="display:none">
					{!! Form::label ('informanteOtroDocIdentidad','Especifique:') !!}
					{!! Form::text ('informanteOtroDocIdentidad',old('informanteOtroDocIdentidad'), ['class' => 'form-control mayuscula', 'id' => 'informanteOtroDocIdentidad', 'placeholder' => 'Ingrese el tipo de documento' ] )!!}				
				</div>
				<div class="col">
					{!! Form::label ('informanteNumDocIdentidad','Número de identificación:') !!}
					{!! Form::text ('informanteNumDocIdentidad',old('informanteNumDocIdentidad'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumDocIdentidad', 'placeholder' => 'Ingrese el numero de la identificación'] )!!}				
				</div>
			</div><hr>

			<div class="row" id=""  > 	
				<div class="col-lg-3">
					{!! Form::label ('informanteTipoDireccion','Tipo de dirección:') !!}
						{!! Form::select ('informanteTipoDireccion',['CASA'=>'CASA','TRABAJO'=>'TRABAJO'],'informanteTipoDireccion', ['class' => 'form-control', 'id' => 'informanteTipoDireccion'] )!!}	
				</div>
				<div class="col-lg-5">
					{!! Form::label ('informanteCalle','Calle:') !!}
					{!! Form::text ('informanteCalle',old('informanteCalle'), ['class' => 'form-control mayuscula', 'id' => 'informanteCalle', 'placeholder' => 'Ingrese la calle' ] )!!}				
				</div>
				<div class="col">
					{!! Form::label ('informanteNumExterno','Número exterior:') !!}
					{!! Form::text ('informanteNumExterno',old('informanteNumExterno'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumExterno', 'placeholder' => 'S/N'] )!!}				
				</div>
				<div class="col">
					{!! Form::label ('informanteNumInterno','Número interior:') !!}
					{!! Form::text ('informanteNumInterno',old('informanteNumInterno'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumInterno', 'placeholder' => 'S/N'] )!!}				
				</div>
			</div>

			<div class="row" id=""  > 	
				<div class="col-lg-4">
					{!! Form::label ('idEstado','Estado:') !!}
			{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}				
				</div>
				<div class="col-lg-4">
					{!! Form::label ('idMunicipio','Municipio:') !!}
			{!! Form::select ('idMunicipio',$municipios,'', ['class' => 'form-control'] )!!}				
				</div>
				<div class="col-lg-4">
					{!! Form::label ('idLocalidad','Localidad:') !!}
			{!! Form::select ('idLocalidad',$localidades,'', ['class' => 'form-control'] )!!}				
				</div>
			</div>
					
			<div class="row" id=""  > 	
				<div class="col-lg-8">
					{!! Form::label ('idColonia','Colonia:') !!}
					{!! Form::select ('idColonia',$colonias,'', ['class' => 'form-control'] )!!}				
				</div>
				<div class="col-lg-4">
					{!! Form::label ('idCodigoPostal','Código postal:') !!}
					{!! Form::select ('idCodigoPostal',$colonias,'', ['class' => 'form-control' ] )!!}				
				</div>
			</div><br>

			<div class="row" id=""  > 
				<div class="col-lg-2">
					{!! Form::label ('informanteTipoTel','Tipo de telefono:') !!}
					{!! Form::select ('informanteTipoTel',['CASA'=>'CASA','TRABAJO'=>'TRABAJO','PERSONAL'=>'PERSONAL'],'', ['class' => 'form-control'] )!!}	
				</div>
				<div class="col-lg-2">
					{!! Form::label ('lada','Lada:') !!}
					{!! Form::select ('lada',['A'=>'+52','B'=>'+53','C'=>'+59'],'', ['class' => 'form-control'] )!!}	
				</div>
				<div class="col-lg-3">
					{!! Form::label ('informanteTelefonos','Número:') !!}
					{!! Form::text ('informanteTelefonos',old('informanteTelefonos'), ['class' => 'form-control mayuscula', 'placeholder' => '0000000000'])!!}				
				</div>
				<div class="col-lg-1">
					{!! Form::label ('ext','Ext:') !!}
					{!! Form::text ('ext',old(''), ['class' => 'form-control mayuscula'] )!!}				
				</div>	
				<div class="col-lg-4">
					{!! Form::label ('informanteCorreoElectronico','Correo electrónico:') !!}
					{!! Form::text ('informanteCorreoElectronico',old('informanteCorreoElectronico'), ['class' => 'form-control', 'id' => 'informanteCorreoElectronico', 'placeholder' => 'ejemplo@email.com' ] )!!}				
				</div>
			</div><br>

			<div class="row">
				<div class="col-lg-6">
					<div class="form-check">
					  <label class="form-check-label">
						<input class="form-check-input icheck" type="checkbox" id="informante"> SÓLO INFORMANTE
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
						<input class="form-check-input icheck" type="checkbox"  id="recibir"> AUTORIZADA PARA DAR, OIR Y RECIBIR INFORMES
					  </label>
					</div>
				</div>
				<div class="col-lg-6">
					<p align="right"><button type="button" class="btn btn-dark"  id="btnAdddInformante">AGREGAR</button></p>
				</div>
			</div>
			</div>


		</div>
		</div>
		<div class="my-4">	</div>



		
	{!! Form::submit('Atras', ['class' => 'btn btn-large btn-primary openbutton']); !!}
	{!! Form::submit('Siguiente', ['class' => 'btn btn-large btn-primary openbutton']); !!}
{!! Form::close() !!}
@endsection