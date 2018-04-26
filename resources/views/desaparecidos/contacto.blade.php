@extends('layouts.app_uipj')

@section ('css')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


    
@endsection
@section('content')
	

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						CARGAR ARCHIVOS
						{{--<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>--}}
					</h5>
				</div>	
			</div>
		</div>	
		<div class = "card-body">
			<div class ="row">
				<div class = "md-col">
					{{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}
					{{ Form::hidden('idDesaparecido', $id, array('id' => 'idDesaparecido')) }}
				</div>			
		</div>
					<body class="bg-danger col ">
					    <div class="container">
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
					</body>	
					<input id="input-b9" name="input-b9[]" multiple type="file"' class="form-control">
		</div>
	</div>
	
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						ENVÍO DE BOLETÍN
						{{--<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>--}}

					</h5>
				</div>	
			</div>
		</div>
		<div class= "card-body">
			<div class ="main-contact">
				<div class = "row">
					<div class="col">
					{!! Form::label ('idEdocivil','Estado civil:') !!}					
					{!! Form::select ('idCorreosExternos',$correosExternos,'', 
								                   ['class' => 'form-control',
								                     'id' => 'idCorreosExternos',
								                     'multiple' => 'multiple'
                   									] )!!}  
					</div>
				</div>			
				<div class ="row">

					<div class="col">
						{{--{!!Form::open(['route' =>'mail.store', 'method '=>'POST' , 'enctype' =>'multipart/form-data', 'class' => 'form-control' , 'multiple' => 'multiple'])!!}
						{!!Form::submit('ENVIAR')!!}
						{!!Form::close()!!}		--}}				
					</div>
				</div>						
			</div>
			<br></br>
			<div>
				 <button type="button" class="btn btn-dark pull-right" id="btnEnviar"><i class="fa fa-send "></i> </button>
			</div>
		</div>
	</div>		


	

@endsection

@section('scripts')

{{--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">

		$(document).ready(function(){

				$('#idCorreosExternos').select2();
				
		})

				//file upload
		$("#fileArchivo").fileinput({
						showUpload: false,
						previewFileType: 'any',
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
		$(document).on('ready', function() {
	    
	    $("#input-b9").fileinput({
		        showPreview: false,
		        showUpload: false,
		        elErrorContainer: '#kartik-file-errors',
		        allowedFileExtensions: ["jpg", "png", "gif"]
		        //uploadUrl: '/site/file-upload-single'
		    });
		});
		$('#btnEnviar').click (function(){
		//alert("hola");
		var dataString = {
			correos: $('#idCorreosExternos').val(),
		};

		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/enviar_correos',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
		 

</script>

@endsection


