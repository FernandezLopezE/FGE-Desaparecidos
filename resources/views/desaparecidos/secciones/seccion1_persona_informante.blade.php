<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">DATOS DE LOS INFORMANTES</h5>		
	</div>
	<div class="card-body">
			<div class="row" id=""  >
					<div class="col-lg-3">
						{!! Form::label ('','Nombre(s):') !!}
						{!! Form::text ('',old('Escriba el nombre'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Primer apellido:') !!}
						{!! Form::text ('',old('Escriba el primer apellido'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
				  	</div>
				  	<div class="col-lg-3">
						{!! Form::label ('','Segundo apellido:') !!}
						{!! Form::text ('',old('Escriba el segundo apellido'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
				  	</div>
				  	<div class="col-lg-3">
						{!! Form::label ('','Parentesco:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>

			<div class="row" id=""  > 	
					<div class="col-lg-12">
						{!! Form::label ('','Especifique:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>

			<div class="row" id=""  > 	
					<div class="col-lg-3">
						{!! Form::label ('','Nacionalidad:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Documento con que se identifica:') !!}
						{!! Form::select ('',['CE'=>'Credencial de elector','CM'=>'Cartilla militar','P'=>'Pasaporte'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Especifique:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Número de identificación:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>

			<div class="row" id=""  > 	
					<div class="col-lg-4">
						{!! Form::label ('','Domicilio:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-4">
						{!! Form::label ('','Número exterior:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-4">
						{!! Form::label ('','Número interior:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>

			<div class="row" id=""  > 	
					<div class="col-lg-3">
						{!! Form::label ('','Estado:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Municipio:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Localidad:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Colonia:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Código postal:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>
			
			<div class="row" id=""  > 	
					<div class="col-lg-4">
						{!! Form::label ('','Tipo de telefono:') !!}
						{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad'] )!!}	
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Lada:') !!}
						{!! Form::select ('',['A'=>'+52','B'=>'+53','C'=>'+59'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Número:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Otro:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>

			<div class="row" id=""  > 	
					<div class="col-lg-4">
						{!! Form::label ('','Correo electrónico:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-4">
						{!! Form::label ('','Tipo de persona:') !!}
						{!! Form::select ('',['I'=>'Informante','A'=>'Autorizado(a) para informes'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
					</div>
					<div class="col-lg-4">
						
					</div>
			</div>
		</div>
	</div>
</div>
<div class="my-4">	</div>
