@extends('layouts.app_uipj')

@section ('css')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>  
<link rel="stylesheet" href="/plugins/gmailInput/taginput.css">

@endsection


@section('content')
	<div class="card border-primary">			
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">ENVÍO DE DOCUMENTOS
						{{ Form::button('<i class="fa fa-send "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-lg pull-right'] )  }}
					</h5>
				</div>	
			</div>
		</div>
		<div class="card-body">
			<div class="row">
			 	<div class="col-lg-1">
    				{!! Form::label ('para','Para:') !!}				
  		  		</div>
  		  		<div class="col-lg-8">
  		  			{!! Form::text ('dependencias',
  								old('dependencias'),
  								['class' => 'form-control sinEnter',
  										'id' => 'dependencias'
  								] )!!}
  		  		</div>
  		  		<div class="col">
  		  			{{ Form::button('<i class="fa fa-address-book "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-md pull-lefth'] )  }}
  		  		</div>
			</div>
			<br>
			<div class="row">
			 	<div class="col-lg-1">
    				{!! Form::label ('asunto','Asunto:') !!}				
  		  		</div>
  		  		<div class="col-lg-8">
  		  			{!! Form::text ('asuntoDependencias',
  								old('asunto'),
  								['class' => 'form-control sinEnter',
  										'placeholder' => 'Ingrese el asunto del correo electrónico',
  										'id' => 'asuntoDependencias'
  								] )!!}
  		  		</div>
			</div>
			<hr>
			<br>
			<div class="row">
				<div class="col-6">
					<div class="card border">
						<div class="card-body">							
								<div class="row">						 	
					  		  		<div class="col">
					  		  			{!! Form::label ('contenido','Contenido:') !!}		
					  		  			{!! Form::textarea ('contenidoCorreo',
					                      old('contenido'),
					                      ['class' => 'form-control ckeditor mayuscula sinEnter',
					                        'placeholder' => 'Ingrese el contenido del correo electrónico','size' => '70x8',
					                        'id' => 'contenidoCorreo'
					                      ] )!!}
					  		  		</div>
								</div>						
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card border">
						<div class="card-body">
							<div class="col">
								{!! Form::label ('cargarArchivos','Cargar archivos:') !!}	
								<div class="row">
									<div class="col-lg-8 col-sm-12 col-11 main-section">  	
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">                  
					                        </div>
					                    </div>					                
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</div>
	

@endsection

@section('scripts')


<script src="/plugins/gmailInput/taginput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#idDependencias').select2();
});
</script>
@endsection