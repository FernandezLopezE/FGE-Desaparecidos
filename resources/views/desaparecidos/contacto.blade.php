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
			<div class ="row">
				<div class = "md-col">
					{{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}
				</div>
				
			</div>	
		</br>
			<div class ="row">
				<div class = "col-4">
					<p> Generar boletín de extravío :</p>
				</div>
				
				<div class = "col-4">
					{!!Form::submit('GENERAR BOLETÍN', ['id' => 'btnGenerarBoletin', 'class'=> 'btnGenerarBoletin' ])!!}
				</div>
				
				
				{{--<div class ="main-contact">
					{!!Form::open(['route' =>'mail.store', 'method '=>'POST' , 'enctype' =>'multipart/form-data'])!!}
					<div class ="col-6"></div>
					{!!Form::text('name', null,['placeholder'=>'nombre' ,'id' =>'nombre'])!!}
					{!!Form::text('email', null,['placeholder'=>'email','id' =>'email'])!!}
					{!!Form::textarea('mensaje', null,['placeholder'=>'mensaje','id' =>'mensaje'])!!}
					{!!Form::file('file', null,['archivo'=>'Seleccionar archivo'])!!}
				</div>
				{!!Form::submit('ENVIAR')!!}
				{{--{!!Form::close()!!}
				</div>
				
				{!!Form::submit('CREAR PDF', ['id' => 'btnCrearPdf', 'class'=> 'btnCrearPdf'])!!}--}}
			</div>	
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
					dataType: 'json',
					success: function(data) {
						console.log(data);
					},
					error: function(data) {
						console.log(data);
					}
				});
			});
		$('.btnGenerarBoletin').click (function(){
				var idCedula= $("#idCedula").val();
			/*var dataString = {
					idCed: $("#idCedula").val()
			};*/
			//console.log(dataString);
			$.ajax({
					type: 'GET',
					url: '/desaparecido/generarboletin/'+idCedula,
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
		})

		

})

</script>

@endsection


