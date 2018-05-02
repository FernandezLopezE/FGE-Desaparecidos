@extends('layouts.app_uipj')

@section ('css')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


    
@endsection


@section('content')
	

	

	<div class="card border-primary">
		<div class="card-header">
			<div class = "row"> 
				<div class = "col">
					<h4>Destinatarios</h4>
				</div>
				<div class = "col">
			{{ Form::button('<i class="fa fa-send "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-lg pull-right'] )  }}			
			{{--<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia"> AGREGAR</button>--}}
			@include('includes.modal_editar_archivos')
				</div>

			</div>
			


		</div>
			<div class="card-body bg-white">
				<table class="table" id ="correosTable">
					<thead>
						<th> </th>
						<th>DEPENDENCIA</th>
					
						<th>ACCIÓN</th>

					</thead>
					<tbody>
						@foreach ( $correosExternos as $tabla)
							<tr>
								<th>{!!Form::checkbox('name', 'value')!!}</th>
								<th>{!! $tabla->nombre!!}</th>						
								<th>
									{{ Form::button('<i class="fa fa-edit "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-md ' , 'id'=>'btnEditarArchivo'] )  }}
								</th>

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
		$('#btnEditarArchivo').click(function(e){

			var dataString = {
				nombre :"aqui va men"
				
			};
				console.log(dataString);
			$.ajax({
				type: 'GET',
				url: '/generarDocs',
				data: dataString,
				dataType: 'text',
				success: function(data) {
					console.log(data);
					$('#modalEditarArchivo').modal('show');
				
				},
				error: function(data) {
					console.log(data);
				}
			});
			
			
		});
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
