@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('content')
	{!! Form::model($desaparecido, ['action' => 'ExtraviadoController@store']) !!}

	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}

	<div class="card border-primary">
		<div class="card-header">
			<h5 class="card-title">Datos generales de la persona desaparecida
				<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">
					<i class="fa fa-plus"></i> GUARDAR		
				</button>
			</h5>		
		</div>
		<div class="card-body">
			@include('desaparecido.form_desaparecido')					
		</div>
	</div>

{!! Form::close() !!}

@endsection

@section('scripts')
{!! HTML::script('personal/js/funciones_generales.js') !!}
{!! HTML::script('personal/js/curp.js') !!}
{!! HTML::script('personal/js/documentosIdentidad.js') !!}

<script type="text/javascript">

		//Ocultar-mostrar pregunta ¿Está embarazada? en caso de que el sexo sea 'masculino'

		$('#sexo').change(function() {
			sexo = $('#sexo').val();
		if (sexo == 'H') {
				$("#estaEmbarazada").hide();
			} else {
				$("#estaEmbarazada").show();
			}
		});

		$("#embarazo").change(function(){
			embarazo = $(this).val();
			if (embarazo =='SI'){				
				$("#datosEmbarazo").show();
				$("#rumores").show();
			} else {					
				$("#datosEmbarazo").hide();
				$("#datosPormenores").hide();
				$("#rumores").hide();
			} 
		});

		$("#rumoresBebe").change(function(){
			rumores = $(this).val();
			if (rumores =='SI'){
				$("#datosPormenores").show();
			} else {
				$("#datosPormenores").hide();
			}
		});

		$('#idDocumentoIdentidad').change(function(){
			documento = $('#idDocumentoIdentidad').val();			
			if (documento == "7") {					
					$("#otraIdDIV").show();
			} else {					
					$("#otraIdDIV").hide();
			}
		});






	$('input#familiaresFechaNacimiento').mask('00/00/0000');
	
	$('#identificacion').change(function() {
			f = $('#identificacion').val();
			console.log("El parentesoc es: "+f);

			if (f==7) {
				$("#otraIdDIV").show();
			}else{
				$("#otraIdDIV").hide();
			}
	});

	 $('#familiaresFechaNacimiento').change(function(){  
		console.log('Calculando edad de la pareja');
		from = $("#familiaresFechaNacimiento").val().split("/");
		familiaresFechaNacimiento = from[2] + "-" + from[1] + "-" + from[0];
		fechaEnviada = Date.parse(familiaresFechaNacimiento);
	   
		fechaActual= new Date();
	   
	   if (fechaEnviada > fechaActual)
	   {
		   $("#familiaresFechaNacimiento").val("");
		   $("#edadExtravio").val("");
	   }else{

	   $.ajax({
			   url: '/desaparecido/edad/'+familiaresFechaNacimiento,
			   type:"GET",
			   dataType:"json",

			   success:function(data) {
					   console.log("hola"+data);
					   $('#familiaresEdad').val(data);
			   },
			   
		   });
	   }
   });

</script>

@endsection