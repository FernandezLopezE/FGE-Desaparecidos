@extends('layouts.app_uipj')

@section ('css')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


    
@endsection


@section('content')
	

	<div class="card border-primary">
	{!!Form::open(['route' =>'mail.store', 'method '=>'POST' , 'enctype' =>'multipart/form-data', 'class' => 'form-control' , 'multiple' => 'multiple'])!!}
						
							
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						ENVIAR CORREO
							{{ Form::button('<i class="fa fa-send "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-lg pull-right'] )  }}
					</h5>
				</div>	
			</div>
		</div>	
		<div class = "card-body">
			<div class ="row">
				<div class = "md-col">
					
				</div>			
			</div>
					<body class="bg-danger col ">
					   
					        <div class="row">
					        	<div class = "col-4">
					        		{!! Form::label ('idEdocivil','Adjuntar documento:') !!}						        		
					        	</div>
					            <div class="col-lg-8 col-sm-12 col-11 main-section">  	
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">                  
					                        </div>
					                    </div>					                
					            </div>
					        </div>					   
					</body>						
					<div class = "row">
						<div class="col">
						{!! Form::label ('idEdocivil','Seleccionar destinatarios:') !!}	<br></br>				
						{!! Form::select ('idCorreosExternos[]',$combo,'', 
									                   ['class' => 'form-control',
									                     'id' => 'idCorreosExternos',
									                     'multiple' => 'multiple'
	                   									] )!!}  
						</div>
				</div>	
		</div>
		{!!Form::close()!!}	
	</div>
	

	<div class="card border-primary">
		<div class="card-header">
			<div class = "row"> 
				<div class = "col">
					<h4>Destinatarios</h4>
				</div>
				<div class = "col">
						
			<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia"> AGREGAR</button>
			@include('includes.modal_agregar_dependencia')
				</div>

			</div>
			


		</div>
			<div class="card-body bg-white">
				<table class="table" id ="correosTable">
					<thead>
						<th>NUMERO</th>
						<th>NOMBRE</th>
						<th>CORREO</th>					
					</thead>
					<tbody>
						@foreach ( $correosExternos as $tabla)
							<tr>
								<th>{{ $tabla->id }} </th>
								<th>{!! $tabla->nombre!!}</th>
								<th>{!! $tabla->correo !!}</th>
							</tr>					
						
						@endforeach			
					</tbody>				
				</table>
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
						showPreview:false,
						previewFileType: 'any',
			            theme: 'fa',
			            uploadUrl: "/image-view",
			            uploadExtraData: function() {
			                return {
			                    _token: $("input[name='_token']").val(),
			                };
			            },
			            allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf'],
			            overwriteInitial: false,
			            maxFileSize:2000,
			            maxFilesNum: 10,
			            slugCallback: function (filename) {
			                return filename.replace('(', '_').replace(']', '_');
			            }
			        });

		 $("#input-b9").fileinput({
		        showPreview: false,
		        showUpload: false,
		        elErrorContainer: '#kartik-file-errors',
		        allowedFileExtensions: ["jpg", "png", "gif"]
		        //uploadUrl: '/site/file-upload-single'
		    });

		 $('#btnAgregarDependencia').click(function(e){
			$('#modalDependencia').modal('show');
			
		});

		 	$("#btnGuardarDependencia").click (function(){
			
			var dataString = {
				nombre : $("#idDependencia").val(),
				correo : $("#correoElectronico").val(),
				
			};
				console.log(dataString);
			$.ajax({
				type: 'POST',
				url: '/mail/store_dependencia',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					$('#modalDependencia').modal('hide');

					$("#correosTable").bootstrapTable('refresh');
				
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

		$(document).on('ready', function() {
	    
	   
		});
		
		 

</script>

@endsection
