@extends('layouts.app_uipj')


@section('content')
	

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						GENERACIÓN DE BOLETÍN
						{{--<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>--}}

					</h5>
				</div>	
			</div>
		</div>
		</br>	
		<div class ="row">
				<div class = "md-col">
					{{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}
					{{ Form::hidden('idDesaparecido', $id, array('id' => 'idDesaparecido')) }}

				</div>
				
			</div>
		<div class ="row">
				<div class = "col-8">
					
					{!!Form::label('gbe', 'Generar boletín de extravío', ['class' => 'center'])!!}
				</div>
				
				<div class = "col-3">
					{!!Form::submit('GENERAR PDF', ['id' => 'btnGenerarBoletin', 'class'=> 'btnGenerarBoletin form-control btn-primary openbutton' ])!!}


					{{--{!!link_to_action('MailController@generar_boletin', $title = 'GENERAR BOLETÍN', $parameters = ['idPersona'], $attributes = ['class'=> 'btnGenerarBoletin' ])!!}--}}
				</div>
		</div>
		</br>	
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
			<div class ="main-contact">

				 </br>

				<div class = "row">
					<div class="col">
					{!! Form::label ('idEdocivil','Estado civil:') !!}
					
					</div>
					<div class="col">
					{!! Form::select ('idCorreosExternos',$correosExternos ,'', ['class' => 'form-control', 'id' => 'idCorreosExternos'] )!!}
					</div>
				</div>
			</br>
				<div class ="row">

					<div class="col">
						{!!Form::open(['route' =>'mail.store', 'method '=>'POST' , 'enctype' =>'multipart/form-data', 'class' => 'form-control'])!!}
					
						{!!Form::file('file', null,['archivo'=>'Seleccionar archivo'])!!}


						{!!Form::submit('ENVIAR')!!}
						{!!Form::close()!!}
						
					</div>
					

				</div>
						
						<div class ="col-6"></div>
						
						
			</div>

	</div>		


	

@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

		$('.btnCrearPdf').click (function(){

			console.log("putooo");
				nombre: $('#nombre').val(),
				console.log(name);
				//alert("hola");
				var dataString = {
					//prendaTipo: $('#idVestimenta').val(),
					nombre: $('#nombre').val(),
					email: $('#email').val(),
					mensaje: $('#mensaje').val(),
					
				};
				console.log(dataString);
				$.ajax({
						type: 'POST',
					url: '/mail/pdf',
					data: dataString,
					//dataType: 'json',
					success: function(data) {
						console.log(data);
					},
					error: function(data) {
						console.log(data);
					}
				});
			});
		/*$('.btnGenerarBoletin').click (function(){
				var idCedula= $("#idCedula").val();
				var idDesaparecido= $("#idDesaparecido").val();
			var dataString = {
					idCed: $("#idCedula").val()
			};
			//console.log(dataString);
			$.ajax({
					type: 'GET',
					url: '/desaparecido/generarboletin/'+idCedula+idDesaparecido,
					//data: dataString,
					dataType: 'json',
					success: function(data) {						
							$.ajax({
								type: 'GET',
								data:data,
								url: '/desaparecido/generarboletinPDF',
								//data: dataString,
								dataType: 'text',
								success: function(data) {						
									//(console.log($data);
																		
								},
								error: function(data) {
									console.log("te he fallado we");
								}
							});
															
					},
					error: function(data) {
						console.log(data);
					}
			});
		})*/

		$('.btnGenerarBoletin').click (function(){
				var idCedula= $("#idCedula").val();
				var idPersona= $("#idDesaparecido").val();
			var dataString = {
					idCedula: $("#idCedula").val(),
					idPersona: $("#idDesaparecido").val()
			};
			console.log(dataString);
			$.ajax({
								type: 'POST',
								url: '/desaparecido/generarboletinPDF/'+idCedula+'/'+idPersona,
								data: dataString,
								dataType: 'text',
								success: function(data) {						
									console.log("success");
																		
								},
								error: function(data) {
									console.log("te he fallado we");
								}
							});
			
		})
		$('#idCorreosExternos').select2({
			width : "100%",
		});

		

})

</script>

@endsection


