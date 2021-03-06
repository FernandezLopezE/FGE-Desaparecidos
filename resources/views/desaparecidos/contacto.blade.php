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

				{{ Form::button('<i class="fa fa-send "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-lg pull-right', 'id'  => 'enviar'] )  }}		

				{{--<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia"> AGREGAR</button>--}}
				@include('includes.modal')
			</div>

			</div>
		</div>
			<div class="card-body bg-white">
				 <h4 class="card-title"> Detalles de dependencias </h4>
				<table id="tableDependencias" ></table>
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
       var btnEnviar = $('#enviar');


		/**********************************************************************************
		*							BOTON ENVIAR                           				  *
		***********************************************************************************/
        btnEnviar.click(function(e){                    
					//            var checkedValue = null; 
					//            var checkedValue2 = null; 
					//var inputElements = $("input[name='ids[]']")
					//for(var i=0; inputElements[i]; ++i){
					//      if(inputElements[i].checked){
					//             checkedValue = inputElements[i].value;             
					//      } }
					//   alert(checkedValue.value);      
				 	var checkboxes = $("input[name='ids[]']");
				    var valores = "";
				    var i;
				    var a= 0;
				    var valoresChecks = [50];
				    for (i = 0; i < checkboxes.length; i++) {
				        if (checkboxes[i].checked) {
				        	
				            valores = valores + checkboxes[i].value + ", ";
				            valoresChecks[a]  = checkboxes[i].value;
				            a++;
				        }
				    }
				    	//	AQUI ENVIARE LOS NOMBRES DE LOS DOCUMENTOS HACIA EL CONTROLADOR PARA ENVIAR LOS DOCUMENTOS
				          


				            var dataString = {
								datos: $documentosArray ,
								valoresChecks: valoresChecks,
								
							};
								console.log(dataString);
							$.ajax({
								type: 'get',
								url: '/envioDocumentos',
								data: dataString,
								dataType: 'text',
								success: function(data) {				
									$nombreDocumento= data;
									
									 window.open($nombreDocumento);
									$('#modalGeneral').modal('hide');

									//$("#correosTable").bootstrapTable('refresh');
								
								},
								error: function(data) {
								//	console.log("succeessss men");
									console.log(data);
								}
							});
             
             

        })

		/**********************************************************************************
		*							BOTON ENVIAR    FIN                       				  *
		***********************************************************************************/
	
		//	var documentosArray = [];
		/**********************************************************************************
		*							BOTON GUARDAR DEL MODAL                               *
		***********************************************************************************/


		$("#btnAgregarInformante").click (function(){//ESTE BOTON ES EL DEL MODAL GENERAL DICE AGREGAR INFORMANTE PERO EN REALIDAD ES EL DE "GUARDAR" Y SE ENCARGA DE GENERAR DOCUMENTO EN PDF
				$arregloPrueba = ["BERENICE CONTRERAS"];
				$destinatarios[0]=$("select[id='idDestinatarios[]']").map(function(){return $(this).val();}).get();
				console.log($destinatarios[0]);
				$destinatarios[1] = $arregloPrueba;
				$lugares=$("input[id='lugares").map(function(){return $(this).val();}).get();
			var dataString = {
				
				vehiculoDescripcion : $("#vehiculoDescripcion").val(),
				nombreDependencia: nombreDependencia ,
				destinatario : $destinatarios,
				lugares: $lugares,
				idCedula: '{!! $cedula->id!!}'


			};
				console.log(dataString);
			$.ajax({
				type: 'get',
				url: '/guardarDocumento',
				data: dataString,
				dataType: 'text',

				success: function(data) {


					
					$nombreDocumento= data;
					$documentosArray= [[$nombreDocumento, nombreDependencia]];
					console.log($nombreDocumento);
					 window.open('../'+$nombreDocumento);
					$('#modalGeneral').modal('hide');

					//$("#correosTable").bootstrapTable('refresh');
				
				},
				error: function(data) {
				//	console.log("succeessss men");
					console.log(data);
				}
			});
		});
		
		/**********************************************************************************
		*							BOTON GUARDAR DEL MODAL         FIN                   *
		***********************************************************************************/

	

		
		$('#modalGeneral').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget), // Button that triggered the modal
		      content = button.siblings('.read-more').html(),
		      modal = $(this);

		  modal.find('.modal-body').html(content);
		});



			//BOTON PARA GUARDAR DOCUMENTO
		 	

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
			
			return [btn].join('');
		});	
						





	 	var table = $('#tableDependencias');
		//var routeIndex = '{!! route('dependencias.index') !!}';	
		var checkedRows = [];

		$('#tableDependencias').on('check.bs.table', function (e, row) {
  			checkedRows.push({id: row.id, nombre: row.nombre, correo: row.correo});
  			console.log(checkedRows);
			});

		




		 //	LO QUE SIGUE ES LO DE BERE ////////////////////////////////////////////////////////////////////////////////////////77

		  	var modalGral = $('#modalGeneral');
			//$modalTitle = $('.modal-title');
			var modalTitle = $('.modal-title');
			var modalBody = $('.modal-body');
			var modalFooter = $('.modal-footer');
			var nombreDependencia = "";
			var destinatario1 = "";
			var vehiculoDescripcion = "";
	    

		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editDependencia"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};

	
													

		//fUNCION PARA CUANDO LE DOY CLIC AL BOTON EDITAR
		window.operateEvents = {
		
		//$('#btnEditarArchivo').click(function(e, value, row, index){
			'click #editDependencia': function (e, value, row, index) {

					

				console.log(row);

				$dependenciaId = row.id;

				$dependenciaNombre = row.nombre;
				//$dependenciaNombre = "hospitales"
				 nombreDependencia = $dependenciaNombre;

				//$dependenciaNombre = row.nombre;
               // $dependenciaNombre = "SEMEFO";

				$dependenciaCorreo= row.correo;
				$dependenciaDoc = row.dDocumento;
				$destinatarios = "";
				console.log($dependenciaId);
				console.log($dependenciaNombre);
				console.log($dependenciaCorreo);

				var dataString = {
				idDependencia : $dependenciaId,
			};

				console.log(dataString);
			$.ajax({
				type: 'GET',
				url: '/get_dep',
				data: dataString,
				dataType: 'json',
				success: function(data) {
						$nombreDocumento = data;
						console.log(data );
							$.ajax({
								type: 'GET',
								url: '/get_des',
								data: dataString,
								dataType: 'json',
								success: function(data) {
									
								//WEY YA ME TRAJE LO NECESARIO , SOLO FALTA METER LOS DESTINATARIOS EN UN ARREGLO O TRATAR DE MANEJARLO PARA PODER PASARLO A UN PLUCK
								$destinatarios = data;
								console.log($destinatarios)

								
										if(nombreDependencia == 'SERVICIOS PERICIALES (SEMEFOS)'){
											console.log("ya entre perroooooooooooooo123");
												
												$("select[name='idDestinatarios[]']").append("<option value=''>Seleccione un destinatario</option>");	
												
												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>DOCUMENTO:  SEMEFO </strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].nombre+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												


												modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("ext","Ingrese la descripción del vehículo") !!}        {!! Form::text ("vehiculoDescripcion",old("Ingrese la descripción del vehículo"), ["class" => "form-control mayuscula","id" => "vehiculoDescripcion" ,"placeholder" => "Ingrese la descripción"] )!!} </div> </div></div> </div>	');		
												modalBody.append('<br>');	
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');

											modalGral.modal('show');
											
																	/*for(i=0; i<$destinatarios.length; i++){
																		$("#idDestinatarios").append("<option value='"+$destinatarios[i].id+"'> "+$destinatarios[i].nombre+"</option>");	}*/
											
										}
                                    if($dependenciaNombre== 'APODERADO LEGAL (INFORME MOVIMIENTOS)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  APODERADO LEGAL  </strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].nombre+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');
                                                modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("lugares","Lugares que frecuentaba:") !!}        {!! Form::textarea ("lugares",old("Ingrese los lugares que frecuentaba"), ["class" => "form-control mayuscula","id" => "lugares","size" => "30x4","placeholder" => "Ingrese los lugares que frecuentaba"] )!!} </div> </div></div> </div>	');		
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------
										if($dependenciaNombre== 'TRÁNSITO DEL ESTADO Y SCT (TRÁNSITO Y COMUNICACIONES)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  TRÁNSITO DEL ESTADO Y SCT  </strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].nombre+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');	
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                modalBody.append('<hr></hr>');
                                                
                                                $("select[name='idDestinatarios2[]']").append("<option value=''>Seleccione un destinatario</option>");	

												modalBody.append('<p align ="center"><strong>PARA:  TRÁNSITO DEL ESTADO Y SCT (TRÁNSITO Y COMUNICACIONES) </strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios2[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios2[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios2[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].nombre+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
														
												modalBody.append('<br>');	
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------
                                    if($dependenciaNombre== 'FISCALÍA GENERAL (ALERTA MIGRATORIA)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  FISCALÍA GENERAL </strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].nombre+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("ext","Ingrese la descripción del vehículo") !!}        {!! Form::text ("vehiculoDescripcion",old("Ingrese la descripción del vehículo"), ["class" => "form-control mayuscula","id" => "vehiculoDescripcion" ,"placeholder" => "Ingrese la descripción"] )!!} </div> </div></div> </div>	');		
												modalBody.append('<br>');
												
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------
                                    if($dependenciaNombre== 'DIF MUNICIPAL (ALBERGUES)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  DIF MUNICIPAL</strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].nombre+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("ext","Ingrese la descripción del vehículo") !!}        {!! Form::text ("vehiculoDescripcion",old("Ingrese la descripción del vehículo"), ["class" => "form-control mayuscula","id" => "vehiculoDescripcion" ,"placeholder" => "Ingrese la descripción"] )!!} </div> </div></div> </div>	');	
												modalBody.append('<br>');
												
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------
                                    if($dependenciaNombre== 'PREVENCIÓN Y REINSERCIÓN SOCIAL (CENTROS DETENCIÓN)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  PREVENCIÓN Y REINSERCIÓN SOCIAL</strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].id+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------
									if($dependenciaNombre== 'INSTITUTO NACIONAL DE MIGRACIÓN (ESTACIONES MIGRATORIAS)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  INSTITUTO NACIONAL DE MIGRACIÓN</strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].id+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------		
                                    
                                    if($dependenciaNombre== 'POLICIA MINISTERIAL, SEGURO SOCIAL (HOSPITALES)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  POLICIA MINISTERIAL, SEGURO SOCIAL</strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].id+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');
                                                modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("ext","Ingrese la descripción del vehículo") !!}        {!! Form::text ("vehiculoDescripcion",old("Ingrese la descripción del vehículo"), ["class" => "form-control mayuscula","id" => "vehiculoDescripcion" ,"placeholder" => "Ingrese la descripción"] )!!} </div> </div></div> </div>	');		
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                     /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------		
                                    
                                    if($dependenciaNombre== 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (PLATAFORMA MÉXICO)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  UNIDAD DE ANÁLISIS DE INFORMACIÓN FG</strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].id+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');
                                                modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("ext","Ingrese la descripción del vehículo") !!}        {!! Form::text ("vehiculoDescripcion",old("Ingrese la descripción del vehículo"), ["class" => "form-control mayuscula","id" => "vehiculoDescripcion" ,"placeholder" => "Ingrese la descripción"] )!!} </div> </div></div> </div>	');		
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------		
                                    
                                    if($dependenciaNombre== 'CENTRO DE INFORMACIÓN FG (OFICIO)'){
											console.log("ya entre perro");

												modalBody.empty();//limpia el contenido del body
												modalTitle.empty();

												modalBody.append('<p align ="center"><strong>PARA:  CENTRO DE INFORMACIÓN FG</strong></p>');
												modalBody.append('<br>');
												modalBody.append('<div class="row"><div class="form-group col-md-12">    	 {!! Form::label ("destin","Elija el destinatario:") !!}		{!! Form::select ("idDestinatarios[]",$combo ,"",["class" => "form-control","id" => "idDestinatarios[]"])!!} </div> ');	
												//$("#idMunicipio").empty();
												$("select[name='idDestinatarios[]']").map(function(){return $(this).empty();})
												$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value=''>Seleccione un destinatario</option>");})
												for(i=0; i<$destinatarios.length; i++){
																		$("select[name='idDestinatarios[]']").map(function(){return $(this).append("<option value='"+$destinatarios[i].id+"'> "+$destinatarios[i].nombre+"</option>");})
																	}
												
												modalBody.append('<br>');
                                                modalBody.append(' <div class = "row">		<div class="form-group col-md-12">   {!! Form::label ("ext","Ingrese la descripción del vehículo") !!}        {!! Form::text ("vehiculoDescripcion",old("Ingrese la descripción del vehículo"), ["class" => "form-control mayuscula","id" => "vehiculoDescripcion" ,"placeholder" => "Ingrese la descripción"] )!!} </div> </div></div> </div>	');		
												modalBody.append('<br>');
												modalBody.append('<input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">');	
												modalBody.append('<br>');
												modalBody.append('<code>*Para poder generar el documento completo, ingrese los datos solicitados</code>');	
												modalTitle.append('<i class="fa fa-file"></i>  Albergues ');
                                                
                                        
                                                


											modalGral.modal('show');
											
										}
                                    /////////------------------------------------------------------------------------------
                                    /////////------------------------------------------------------------------------------											
															

									//$("#correosTable").bootstrapTable('refresh');
								
								},
								error: function(data) {
									console.log(data);
								}
							});

					//$("#correosTable").bootstrapTable('refresh');
				
				},
				error: function(data) {
					console.log(data);
				}

			
				


			});

		//AQUI YA SALI DEL AJAX
	//bodyModal.empty();
			}

		}

		//TERMINA LA FUNCION CUANDO LE DOY EDITAR

		var formatCheckDependencia = function(value, row, index){
			icon = '';
			//if (row.nombre) {
            console.log(row.id);
				icon = '<input type="checkbox" value='+row.id+' name="ids[]" class="selector">'
			//}

			return [icon].join('');
		}

		table.bootstrapTable({				
			url:'/get_dependencias',
			columns: [{					
				title: '',
				formatter: formatCheckDependencia,
			},
			{					
				field: 'nombre',
				title: 'Dependencia',
			}, 
			{					
				field: 'correo',
				title: 'Correo',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				

		});
		
	});
</script>

@endsection
