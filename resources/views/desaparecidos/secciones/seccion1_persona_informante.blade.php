<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">DATOS DE LOS INFORMANTES</h5>		
	</div>
	<div class="card-body">
		<div class="row" id=""  >
			<div class="col">
				{!! Form::label ('','Nombre(s):') !!}
				{!! Form::text ('',old('Escriba el nombre'),  ['class' => 'form-control mayuscula', 'id' => '','data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo nombre es requerido'])!!}
			</div>
			<div class="col">
				{!! Form::label ('','Primer apellido:') !!}
				{!! Form::text ('',old('Escriba el primer apellido'), ['class' => 'form-control mayuscula', 'id' => '','data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo primer apellido es requerido' ] )!!}
		  	</div>
		  	<div class="col">
				{!! Form::label ('','Segundo apellido:') !!}
				{!! Form::text ('',old('Escriba el segundo apellido'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
		  	</div>
		  	<div class="col">
				{!! Form::label ('','Parentesco:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', 'data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo parentesco es requerido'] )!!}				
			</div>
		</div>

		<div class="row" id=""  > 	
			<div class="col-lg-3">
				{!! Form::label ('','Nacionalidad:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', 'data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo nacionalidad es requerido'] )!!}				
			</div>
			<div class="col-lg-3">
				{!! Form::label ('','Documento con que se identifica:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '','data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo documento identidad es requerido' ] )!!}				
			</div>
			<div class="col">
				{!! Form::label ('','Número de identificación:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', 'data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo número de indentificación es requerido'] )!!}				
			</div>
		</div><br>

		<div class="row" id=""  > 	
			<div class="col-lg-8">
				{!! Form::label ('','Domicilio:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', 'data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo domicilio es requerido'] )!!}				
			</div>
			<div class="col-lg-2">
				{!! Form::label ('','Número exterior:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', 'data-validation' =>'required', 'data-validation-error-msg-required' =>'El campo número exterior es requerido'] )!!}				
			</div>
			<div class="col-lg-2">
				{!! Form::label ('','Número interior:') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}				
			</div>
		</div>

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
			</div>
		</div><br>

		<div class="row"> 
			<div class="col-lg-4">
				{!! Form::label ('','Tipo de persona:') !!}
				{!! Form::checkbox('workday[]', 'monday') !!}
			</div>
		</div>
	</div>
</div>
<div class="my-4">	</div>