@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
	{--!! Form::model($desaparecido, ['action' => 'ExtraviadoController@store']) !!--}

	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}

@include('navs.navs_datos',array('activar' => 'desaparecido'))
<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarDesaparecido">
	GUARDAR		
</button>
<div class="card-body bg-white">
		<div class="card-body">
			<div class="row">
				<div class="form-group col-md-4">
						{!! Form::label ('sexo','Género:') !!}
						{!! Form::select ('sexo',
											$sexos,
											'',
											['class' => 'form-control',
												 'id' => 'sexo'])!!}	
				</div>			
			</div>
			<div id ="mostrarGenero" style="display: none">
				<div class="row">
					<div class="form-group col-md-4">
						{!! Form::label ('nombres','Nombres(s):') !!}
						{!! Form::text ('nombres',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'nombres'
											] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('primerAp','Primer apellido:') !!}
						{!! Form::text ('primerAp',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'primerAp',
											] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('segundoAp','Segundo apellido:') !!}
						{!! Form::text ('segundoAp',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'segundoAp'] )!!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						{!! Form::label ('apodo','Apodo (alias):') !!}
						{!! Form::text ('apodo',
											'',
											['class' => 'form-control mayuscula',
												'id' => 'apodo' ] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('idNacionalidad','Nacionalidad:') !!}
						{!! Form::select ('idNacionalidad',
											$nacionalidades,
											'',
											['class' => 'form-control',
												'id' => 'idNacionalidad',
											] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label('idEstadoOrigen', 'Estado natal:') !!}
						{!! Form::select('idEstadoOrigen',
											$estados,
											'',
											['class' => 'form-control',
												'placeholder' => 'Seleccione una entidad federativa',
											]) !!}
					</div>				
				</div>
				<div class="row">	
					<div class="form-group col-md-4">
						{!! Form::label ('fechaNacimiento','Fecha de nacimiento:') !!}
						{!! Form::text ('fechaNacimiento',
											'',
											['class' => 'form-control',
												'id' => 'fechaNacimiento'
											] )!!}
					</div>			
					<div class="form-group col-md-4">
						{!! Form::label ('edadExtravio','Edad de extravío:') !!}
						{!! Form::text ('edadExtravio',
										old('edadExtravio'),
										['class' => 'form-control',
											'id' => 'edadExtravio'
										] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('edadAparente','Edad aparente:') !!}
						{!! Form::text ('edadAparente',
										old('edadAparente'),
										['class' => 'form-control',
											'id' => 'edadAparente'
										] )!!}
					</div>
				</div>
				<div class="row">	
					<div class="form-group col-md-4">			
						{!! Form::label('curp', 'C.U.R.P.') !!}
						{!! Form::text('curp',
										 '',
										 ['class' => 'form-control',
										 	'placeholder' => 'Ingrese el C.U.R.P.'
										 ]) !!}
					</div>			
					<div class="form-group col-md-4">
						{!! Form::label ('idEscolaridad','Escolaridad:') !!}
						{!! Form::select ('idEscolaridad',
											$escolaridades,
											'',
											['class' => 'form-control',
											] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('idOcupacion','Ocupación:') !!}
						{!! Form::select ('idOcupacion',
											$ocupaciones,
											'',
											['class' => 'form-control'
											] )!!}
					</div>			
				</div>
				<div class="row">
					<div class="form-group col-md-4">
							{!! Form::label ('idDocumentoIdentidad','Identificación:') !!}
							{!! Form::select ('idDocumentoIdentidad',
												$identificaciones,
												'',
												['class' => 'form-control',
													'id' => 'idDocumentoIdentidad'
												] )!!}
					</div>
					<div class="form-group col-md-4"  style="display: none" id="otraIdDIV">
							{!! Form::label ('otroDocIdentidad','Otro:') !!}
							{!! Form::text ('otroDocIdentidad',
											old('otroDocIdentidad'),
											['class' => 'form-control mayuscula'])!!}
					</div>
					<div class="form-group col-md-4">
							{!! Form::label ('numDocIdentidad','No. Identificación:') !!}
							{!! Form::text ('numDocIdentidad',
												old('numDocIdentidad'),
												['class' => 'form-control mayuscula'
												] )!!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						{!! Form::label ('idEdocivil','Estado civil:') !!}
						{!! Form::select ('idEdocivil',
											$edoscivil ,
											old('idEdocivil'),
											['class' => 'form-control',
												'id' => 'idEdocivil'
											] )!!}
					</div>
					<div class="form-group col-md-4" id="estaEmbarazada" style="display: none">
						{!! Form::label ('embarazo','Esta embarazada:') !!}
						{!! Form::select ('embarazo',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											old('embarazo'),
											['class' => 'form-control'] )!!}
					</div>			
				</div>
				<div class="row"  id="datosEmbarazo" style="display: none">
					<div class="form-group col-md-4">
						{!! Form::label ('numGestacion','Cantidad:') !!}
						{!! Form::number ('numGestacion',
											old('gestacionSemanas'),
											['class' => 'form-control mayuscula'] )!!}

					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('tipoGestacion','Periodo:') !!}
						{!! Form::select ('tipoGestacion',
											['SEMANAS'=> 'SEMANAS','MESES' => 'MESES'],
											'',
											['class' => 'form-control '] )!!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label ('rumoresBebe','Rumores sobre el nacimiento:') !!}
						{!! Form::select ('rumoresBebe',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											old('rumoresBebe'),
											['class' => 'form-control'] )!!}
					</div>	
				</div>
				<div class="row" id="datosPormenores" style="display: none" >
					<div class="form-group col-md-12">
						{!! Form::label ('pormenores','Pormenores:') !!}
						{!! Form::textarea ('pormenores',
											old('Pormenores'),
											['class' => 'form-control mayuscula'] )!!}
					</div>
				</div>				
			</div>
		</div>
	</div>
	@include('includes.modal')
{--!! Form::close() !!--}

@endsection

@section('scripts')
{!! HTML::script('personal/js/funciones_generales.js') !!}
{!! HTML::script('personal/js/curp.js') !!}
{!! HTML::script('personal/js/documentosIdentidad.js') !!}
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}

<script type="text/javascript">
	var btnLimpiar = $('#btnLimpiar');
	var routeIndex = '{!! route('consultas.index') !!}';		
	var routeDesaparecido = '{!! route('extraviado.index') !!}';
	var modalGral = $('#modalGeneral');
	var modalTitle = $('.modal-title');
	var modalBody = $('.modal-body');
	var idCedula = '{!! $cedula->id !!}';
    
    /*$( "form" ).sisyphus( {
	    excludeFields: $('input[name=_token]')
    });*/

    $('#btnAgregarDesaparecido').click(function(e)
    {
		var dataString = {
			idCedula : idCedula,
			sexo : $("#sexo").val(),
			nombres : $("#nombres").val(),
			primerAp : $("#primerAp").val(),
			segundoAp : $("#segundoAp").val(),
			apodo : $("#apodo").val(),
			idNacionalidad : $("#idNacionalidad").val(),
			idEstadoOrigen : $("#idEstadoOrigen").val(),
			fechaNacimiento : $("#fechaNacimiento").val(),
			edadExtravio : $("#edadExtravio").val(),
			edadAparente : $("#edadAparente").val(),
			curp : $("#curp").val(),
			idEscolaridad : $("#idEscolaridad").val(),
			idOcupacion : $("#idOcupacion").val(),
			idDocumentoIdentidad : $("#idDocumentoIdentidad").val(),			
			numDocIdentidad : $("#numDocIdentidad").val(),
			idEdocivil : $("#idEdocivil").val(),			
		}
		if ($("#idDocumentoIdentidad").val() == 9){
			dataString['otroDocIdentidad'] = $("#otroDocIdentidad").val();
		} else {
			dataString['otroDocIdentidad'] = null;
		}
		if ($("#sexo").val() == 'M') {
			dataString['embarazo'] = $("#embarazo").val();
			dataString['numGestacion'] = $("#numGestacion").val();
			dataString['tipoGestacion'] = $("#tipoGestacion").val();
			dataString['rumoresBebe'] = $("#rumoresBebe").val();
			dataString['pormenores'] = $("#pormenores").val();
		} else {
			dataString['embarazo'] = 'NO';
			dataString['numGestacion'] = null;
			dataString['tipoGestacion'] = null;
			dataString['rumoresBebe'] = 'NO';
			dataString['pormenores'] = null;
		}
			
		$.ajax({
			type: 'POST',
			url: routeDesaparecido,
			data: dataString,
			dataType: 'json',
			success: function(data) {
				//var errors = data.responseJSON;
    			console.log(data);
				/*modalInformanteAgregar.modal('hide');
				table.bootstrapTable('refresh');*/

			},
			error: function(data) {
				var errors = data.responseJSON;
				console.log(errors);
				modalTitle.empty();
				modalBody.empty();
				modalBody.append('<ul>');
				$.each(errors.errors, function(key, value){						
					modalBody.append('<li><code>'+value+'</code></li>');
				});
				modalBody.append('</ul>');

				modalBody.append('<code>'+errors.message+'</code>');
				
				modalTitle.append('<i class="fa fa-warning"></i> Ooops... algo salió mal');
				modalGral.modal('show');
			}
		});
    });
    

		var routeIndex = '{!! route('consultas.index') !!}';
		$('#fechaNacimiento').change(function(){  
			from = $("#fechaNacimiento").val().split("/");
			fechaNacimiento = from[2] + "-" + from[1] + "-" + from[0];
			fechaEnviada = Date.parse(fechaNacimiento);	   
			fechaActual= new Date();	   
			if (fechaEnviada > fechaActual)
			{
				$("#fechaNacimiento").val("");
				$("#edadExtravio").val("");
			}else{

			$.ajax({
				   url: routeIndex+'/edad/'+fechaNacimiento,
				   type:"GET",
				   dataType:"json",

				   success:function(data) {
						   $('#edadExtravio').val(data);
				   },
				   
				});
			}
		});

		$('#sexo').change(function() {
			g = $('#sexo').val();
			console.log("El género es: "+g);

			if (g=="H") {
				$("#mostrarGenero").show();
				$("#estaEmbarazada").hide();
				$("#datosEmbarazo").hide();
				$("#datosPormenores").hide();
				$("#rumores").hide();
			}else{
				if (g=="M"){
					$("#mostrarGenero").show();
					$("#estaEmbarazada").show();
				}else{
					$("#mostrarGenero").hide();					
				}
				
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
			console.log(documento);			
			if (documento == "8") {					
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