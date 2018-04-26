@extends('layouts.app_uipj')

@section('css')

 	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


    <style type="text/css">
        
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>
@endsection

@section('content')


<hr>
  {{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}

	  	<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">	
					<h5>Historial clínico
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Historial Clínico dental de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idHistorialDental[]', $option, null, ['class' => 'form-control pull-right','id'=>'idHistorialDental']) !!}
					</div>
				</div>
				<br></br>
				<div class="col" style="display: none" id="divHistorialDental">
				
					<body class="bg-danger col ">
					    <div class="container">
					        <div class="row">
					            <div class="col-lg-8 col-sm-12 col-11 main-section">
					               
					                
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="fileHistorialDental" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">
					                        </div>
					                    </div>
					                
					            </div>
					        </div>
					    </div>
					</body>	
				
	  			</div>		
			</div>
		</div>


		<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">
					<h5>Radiografías
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>

				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Radiografías de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idRadiografias[]', $option, null, ['class' => 'form-control pull-right','id'=>'idRadiografias']) !!}
					</div>
				</div>
				<div class="col" style="display: none" id="divRadiografias">

					
					<body class="bg-danger col">
					    <div class="container">
					        <div class="row">
					            <div class="col-lg-8 col-sm-12 col-11 main-section">
					               
					                
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="fileRadiografias" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">
					                        </div>
					                    </div>
					                
					            </div>
					        </div>
					    </div>
					</body>	
				
					
				</div>			
	  		</div>		
		</div>



		<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">
					<h5>Modelo de estudio
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Modelo de estudio de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idModeloEstudio[]', $option, null, ['class' => 'form-control pull-right','id'=>'idModeloEstudio']) !!}
					</div>
				</div>
				<div class="col" style="display: none" id="divModeloEstudio">

					
					<body class="bg-danger col">
					    <div class="container">
					        <div class="row">
					            <div class="col-lg-8 col-sm-12 col-11 main-section">
					               
					                
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="fileModeloEstudio" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">
					                        </div>
					                    </div>
					                
					            </div>
					        </div>
					    </div>
					</body>	
				
					
				</div>			
	  		</div>		
		</div>

	<hr>

		<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">
					<h5>Fotografía
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Fotografias :') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idFotografias[]', $option, null, ['class' => 'form-control pull-right','id'=>'idFotografias']) !!}
					</div>
				</div>
				<div class="col" style="display: none" id="divFotografias">

					
					<body class="bg-danger col">
					    <div class="container">
					        <div class="row">
					            <div class="col-lg-8 col-sm-12 col-11 main-section">
					               
					                
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="fileFotografias" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">
					                        </div>
					                    </div>
					                
					            </div>
					        </div>
					    </div>
					</body>	
				
					
				</div>			
	  		</div>		
		</div>

 

	

<div>
	<input type="button" name="btnAOS" id="btnAOS" value="AGREGAR" class="btn btn-dark pull-right">
	<a href="/desaparecido/correo" class='btn btn-large btn-primary openbutton'>corrreo</a>
</div>


@endsection
@section('scripts')


	{{--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


    <script type="text/javascript">
    

	   


	    		//Aqui empiezan los FILE UPLOAD DE LAS 4 SECCIONES

			        $("#fileHistorialDental").fileinput({
			            theme: 'fa',
			            uploadUrl: "/image-view",
			            uploadExtraData: function() {
			                return {
			                    _token: $("input[name='_token']").val(),
			                };
			            },
			            allowedFileExtensions: ['jpg', 'png', 'gif'],
			            overwriteInitial: false,
			            maxFileSize:2000,
			            maxFilesNum: 10,
			            slugCallback: function (filename) {
			                return filename.replace('(', '_').replace(']', '_');
			            }
			        });
			        $("#fileRadiografias").fileinput({
			            theme: 'fa',
			            uploadUrl: "/image-view",
			            uploadExtraData: function() {
			                return {
			                    _token: $("input[name='_token']").val(),
			                };
			            },
			            allowedFileExtensions: ['jpg', 'png', 'gif'],
			            overwriteInitial: false,
			            maxFileSize:2000,
			            maxFilesNum: 10,
			            slugCallback: function (filename) {
			                return filename.replace('(', '_').replace(']', '_');
			            }
			        });
			        $("#fileModeloEstudio").fileinput({
			            theme: 'fa',
			            uploadUrl: "/image-view",
			            uploadExtraData: function() {
			                return {
			                    _token: $("input[name='_token']").val(),
			                };
			            },
			            allowedFileExtensions: ['jpg', 'png', 'gif'],
			            overwriteInitial: false,
			            maxFileSize:2000,
			            maxFilesNum: 10,
			            slugCallback: function (filename) {
			                return filename.replace('(', '_').replace(']', '_');
			            }
			        });
			        $("#fileFotografias").fileinput({
			            theme: 'fa',
			            uploadUrl: "/image-view",
			            uploadExtraData: function() {
			                return {
			                    _token: $("input[name='_token']").val(),
			                };
			            },
			            allowedFileExtensions: ['jpg', 'png', 'gif'],
			            overwriteInitial: false,
			            maxFileSize:2000,
			            maxFilesNum: 10,
			            slugCallback: function (filename) {
			                return filename.replace('(', '_').replace(']', '_');
			            }
			        });

			        //AQUI ESTAN LOS METODOS DE LOS DIFERENTES  NONE DE CADA SECCIÓN -(MOSTRAR LAS TARJETAS CUANDO DEN SI)

			        $('#idHistorialDental').change(function() {
					option = $('#idHistorialDental').val();
					console.log("El género es: "+option);
						if (option==1) {
							$("#divHistorialDental").show();
						}
						else{
							$("#divHistorialDental").hide();
						}
					});


					 $('#idRadiografias').change(function() {
					option = $('#idRadiografias').val();
					console.log("El género es: "+option);
						if (option==1) {
							$("#divRadiografias").show();
						}
						else{
							$("#divRadiografias").hide();
						}
					});


					  $('#idModeloEstudio').change(function() {
					option = $('#idModeloEstudio').val();
					console.log("El género es: "+option);
						if (option==1) {
							$("#divModeloEstudio").show();
						}
						else{
							$("#divModeloEstudio").hide();
						}
					});


					   $('#idFotografias').change(function() {
					option = $('#idFotografias').val();
					console.log("El género es: "+option);
						if (option==1) {
							$("#divFotografias").show();
						}
						else{
							$("#divFotografias").hide();
						}
					});



	   

    </script>


@endsection