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
				<div class="col">
						<a class="btn btn-secondary" href="{{route('image-view.create')}}">

								PDF MUESTRA
							</a>

				</div>
				<div class = "col">
					
			{{ Form::button('<i class="fa fa-send "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-lg pull-right'] )  }}			
			{{--<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia"> AGREGAR</button>--}}
			@include('includes.modal')
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


	var modalGral = $('#modalGeneral');
	var modalTitle = $('.modal-title');
	var modalBody = $('.modal-body');
	var modalFooter = $('.modal-footer');
	var nombreDependencia = "Alerta migratoria";

		$(document).ready(function(){

				$('#idCorreosExternos').select2();


				
		})


		$('#modalGeneral').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget), // Button that triggered the modal
		      content = button.siblings('.read-more').html(),
		      modal = $(this);

		  modal.find('.modal-body').html(content);
		});


		$('#btnEditarArchivo').click(function(e){

			//variables estaticas para crear el modal adecuado, estas variables estaticas se sacaran de un Json en base al ROW seleccionado
				

			if(nombreDependencia == 'Albergues'){
				console.log( " ya entre men")
				modalTitle.empty();
				modalBody.empty();//limpia el contenido del body

				modalBody.append('<p><strong>Para:   Director del DIF municipal </strong></p>');

				modalBody.append('<p> Descripción de vehículo</p>');
				modalBody.append('<input type="text" class ="form-control" placeholder =" Ingrese la descripción del vehículo" >');
				modalBody.append('<br>');	
				modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
				modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
				modalGral.modal('show');
			}

			else if(nombreDependencia == 'Alerta migratoria'){
				console.log( " ya entre men")
				modalTitle.empty();
				modalBody.empty();//limpia el contenido del body

				modalBody.append('<p><strong>Para:   Director del DIF municipal </strong></p>');

				modalBody.append('<p> Descripción de vehículo</p>');
				modalBody.append('<input type="text" class ="form-control" placeholder =" Ingrese la descripción del vehículo" >');
				modalBody.append('<br>');	
				modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
				modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
				modalGral.modal('show');
			}

			/*
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
					$('#modalGeneral').modal('show');
				
				},
				error: function(data) {
					console.log(data);
				}
			});
			*/
			
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
