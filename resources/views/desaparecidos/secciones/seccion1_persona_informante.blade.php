<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">DATOS DE LOS INFORMANTES</h5>		
	</div>
	<div class="card-body">
<<<<<<< HEAD
			<div class="row" id=""  >
					<div class="col-lg-3">
						{!! Form::label ('','Nombre(s):') !!}
						{!! Form::text ('',Session::get('nombre'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Primer apellido:') !!}
						{!! Form::text ('',Session::get('apellido1'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
				  	</div>
				  	<div class="col-lg-3">
						{!! Form::label ('','Segundo apellido:') !!}
						{!! Form::text ('',Session::get('apellido2'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
				  	</div>
				  	<div class="col-lg-3">
						{!! Form::label ('','Parentesco:') !!}
						{!! Form::text ('',Session::get('parentesco'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
=======
		<div class="row" id=""  >
			<div class="col">
				{!! Form::label ('','Nombre(s):') !!}
				{!! Form::text ('',old('Escriba el nombre'),  ['class' => 'form-control mayuscula', 'id' => ''])!!}
>>>>>>> d83536a8bf1266ef43be0eb4429c9d00918a3c35
			</div>
			<div class="col">
				{!! Form::label ('','Primer apellido:') !!}
				{!! Form::text ('',old('Escriba el primer apellido'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
		  	</div>
		  	<div class="col">
				{!! Form::label ('','Segundo apellido:') !!}
				{!! Form::text ('',old('Escriba el segundo apellido'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
		  	</div>
		  	<div class="col">
				{!! Form::label ('','Parentesco:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
		</div>

<<<<<<< HEAD
			<div class="row" id=""  > 	
					<div class="col-lg-3">
						{!! Form::label ('','Nacionalidad:') !!}
					{!! Form::text ('',Session::get('nacionalidad'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Documento con que se identifica:') !!}
						{!! Form::text ('',Session::get('identificacion'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
	
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Especifique:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Número de identificación:') !!}
						{!! Form::text ('',Session::get('numIdentificacion'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
=======
		<div class="row" id=""  > 	
			<div class="col-lg-3">
				{!! Form::label ('','Nacionalidad:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col-lg-3">
				{!! Form::label ('','Documento con que se identifica:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
>>>>>>> d83536a8bf1266ef43be0eb4429c9d00918a3c35
			</div>
			<div class="col">
				{!! Form::label ('','Número de identificación:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
		</div><br>

<<<<<<< HEAD
			<div class="row" id=""  > 	
					<div class="col-lg-4">
						{!! Form::label ('','Domicilio:') !!}
						{!! Form::text ('',Session::get('domicilio'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-4">
						{!! Form::label ('','Número exterior:') !!}
						{!! Form::text ('',Session::get('numExt'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-4">
						{!! Form::label ('','Número interior:') !!}
						{!! Form::text ('',Session::get('numInt'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
=======
		<div class="row" id=""  > 	
			<div class="col-lg-8">
				{!! Form::label ('','Domicilio:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col-lg-2">
				{!! Form::label ('','Número exterior:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
>>>>>>> d83536a8bf1266ef43be0eb4429c9d00918a3c35
			</div>
			<div class="col-lg-2">
				{!! Form::label ('','Número interior:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
		</div>

<<<<<<< HEAD
			<div class="row" id=""  > 	
					<div class="col-lg-3">
						{!! Form::label ('','Estado:') !!}
						{!! Form::text ('',Session::get('estado'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Municipio:') !!}
						{!! Form::text ('',Session::get('municipio'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Localidad:') !!}
						{!! Form::text ('',Session::get('localidad'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Colonia:') !!}
						{!! Form::text ('',Session::get('colonia'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Código postal:') !!}
						{!! Form::text ('',Session::get('cp'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
			</div>
			
			<div class="row" id=""  > 	
					<div class="col-lg-4">
						{!! Form::label ('','Tipo de telefono:') !!}
						{!! Form::text ('',Session::get('tipoTel'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}	
					</div>
					<div class="col-lg-2">
						{!! Form::label ('','Lada:') !!}
						{!! Form::text ('',Session::get('lada'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}	
				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Número:') !!}
						{!! Form::text ('',Session::get('telefono'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-3">
						{!! Form::label ('','Otro:') !!}
						{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
=======
		<div class="row" id=""  > 	
			<div class="col">
				{!! Form::label ('','Estado:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col">
				{!! Form::label ('','Municipio:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col">
				{!! Form::label ('','Localidad:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			
		</div>
		
		<div class="row" id=""  > 	
			<div class="col-lg-8">
				{!! Form::label ('','Colonia:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col-lg-4">
				{!! Form::label ('','Código postal:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
		</div>

		<div class="row" id=""  > 	
			<div class="col-lg-2">
				{!! Form::label ('','Tipo de teléfono:') !!}
				{!! Form::select ('',['A'=>'CASA','B'=>'TRABAJO','C'=>'CELULAR'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
		
			</div>
			<div class="col-lg-2">
				{!! Form::label ('','Lada:') !!}
				{!! Form::select ('',['A'=>'+52','B'=>'+53','C'=>'+59'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
		
			</div>
			<div class="col-lg-3">
				{!! Form::label ('','Número:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col-lg-1">
				{!! Form::label ('','Ext:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
			<div class="col-lg-4">
				{!! Form::label ('','Correo electrónico:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
>>>>>>> d83536a8bf1266ef43be0eb4429c9d00918a3c35
			</div>
		</div><br>

<<<<<<< HEAD
			<div class="row" id=""  > 	
					<div class="col-lg-4">
						{!! Form::label ('','Correo electrónico:') !!}
						{!! Form::text ('',Session::get('correo'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
					</div>
					<div class="col-lg-4">
						{!! Form::label ('','Tipo de persona:') !!}
						{!! Form::select ('',['I'=>'Informante','A'=>'Autorizado(a) para informes'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
					</div>
					<div class="col-lg-4">
						
					</div>
=======
		<div class="row"> 
			<div class="col-lg-4">
				{!! Form::label ('','Tipo de persona:') !!}
				{!! Form::checkbox('workday[]', 'monday') !!}
>>>>>>> d83536a8bf1266ef43be0eb4429c9d00918a3c35
			</div>
		</div>
	</div>
</div>
<div class="my-4">	</div>