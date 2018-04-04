<center><h3>REGISTRO ÚNICO DE PERSONAS DESAPARECIDAS</h3></center>
<div class="card border-primary">
	<div class="card-header">
		<div class="row" id=""  >	
			<div class="col-LG-6">
					<h5 class="card-title">DATOS DEL ENTREVISTADOR </h5>
			</div>
			<div class="col">
					
			</div>
			<div class="col">
				
			</div>	
			<div class="col-lg-3" align="right">
				<h5> {!!  \Carbon\Carbon::now()->format('d/m/Y h:m:s') !!} </h5> 
			</div>
		</div>	
	</div>
	<div class="card-body">
		

		<div class="row" id=""  >
				<div class="col-lg-4">
					{!! Form::label ('','Nombre del entrevistador:') !!}
					{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
					{{ Session::get('nombre') }}
				</div>
				<div class="col-lg-8">
					{!! Form::label ('','Cargo:') !!}
					{!! Form::text ('',old('Cargo'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
			  	</div>
		</div>

 			<hr  class="my-4">

	  	<div class="row" id=""  >
			  	<div class="col-lg-4">
					{!! Form::label ('','Idioma o dialecto durante la entrevista:') !!}
					{!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad'] )!!}

				</div>

				<div class="col-lg-4">
					{!! Form::label ('','Nombre del intérprete:') !!}
					{!! Form::text ('',old('Nombre del intérprete'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
			  	</div>

			  	<div class="col-lg-4">
					{!! Form::label ('','Organización o institución:') !!}
					{!! Form::text ('',old('Nombre de la organización o institución'), ['class' => 'form-control mayuscula', 'id' => '', ] )!!}
			  	</div>
		</div>

  		<div class="row">
			<div class="col-lg-4">
				{!! Form::label ('','Primera vez que visita el servicio:') !!}
				{!! Form::select ('',['SI'=>'SI','NO'=>'NO'],'', ['class' => 'form-control', 'id' => 'hijos'] )!!}	
				
			</div>
			<div class="col-lg-4">
				{!! Form::label ('','¿Cuándo?') !!}
				{!! Form::text ('',old(''), ['class' => 'form-control mayuscula', 'id' => '','placeholder' => 'DD/MM/AAAA' ] )!!}
				
			</div>
		</div>
	</div>
</div>
<div class="my-4">	</div>



