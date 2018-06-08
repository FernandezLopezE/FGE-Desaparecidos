@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')

@include('navs.navs_datos',array('activar' => 'desaparecido'))

<button type="submit" class="btn btn-dark pull-right"  id="btnGuardar">
	Guardar		
</button>
<div class="card-body bg-white">
		<div class="card-body">
			<div class="row">
				<div class="form-group col-md-4" id="div_sexo">
					{!! Form::label ('sexo','Género:',['class' => 'form-control-label']) !!}
					{!! Form::select ('sexo',
										$sexos,
										$desaparecido->persona->sexo,
										['class' => 'form-control',
											'id' => 'sexo'])!!}
					<div class="form-control-feedback" id="error_sexo"></div>	
				</div>			
			</div>
			<div id ="mostrarGenero">
				<div class="row">
					<div class="form-group col-md-4" id="div_nombres">
						{!! Form::label ('nombres','Nombres(s):',['class' => 'form-control-label']) !!}
						{!! Form::text ('nombres',
											$desaparecido->persona->nombres,
											['class' => 'form-control mayuscula',
												'id' => 'nombres'
											] )!!}
						<div class="form-control-feedback" id="error_nombres"></div>
					</div>
					<div class="form-group col-md-4" id="div_primerAp">
						{!! Form::label ('primerAp','Primer apellido:',['class' => 'form-control-label']) !!}
						{!! Form::text ('primerAp',
											$desaparecido->persona->primerAp,
											['class' => 'form-control mayuscula',
												'id' => 'primerAp',
											] )!!}
						<div class="form-control-feedback" id="error_primerAp"></div>
					</div>
					<div class="form-group col-md-4" id="div_segundoAp">
						{!! Form::label ('segundoAp','Segundo apellido:',['class' => 'form-control-label']) !!}
						{!! Form::text ('segundoAp',
											$desaparecido->persona->segundoAp,
											['class' => 'form-control mayuscula',
												'id' => 'segundoAp'] )!!}
						<div class="form-control-feedback" id="error_segundoAp"></div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4" id="div_apodo">
						{!! Form::label ('apodo','Apodo (alias):', ['class' => 'form-control-label']) !!}
						{!! Form::text ('apodo',
											$desaparecido->apodo,
											['class' => 'form-control mayuscula',
												'id' => 'apodo' ] )!!}
						<div class="form-control-feedback" id="error_apodo"></div>
					</div>
					<div class="form-group col-md-4" id="div_idNacionalidad">
						{!! Form::label ('idNacionalidad','Nacionalidad:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('idNacionalidad',
											$nacionalidades,
											$desaparecido->idNacionalidad,
											['class' => 'form-control',
												'id' => 'idNacionalidad',
											] )!!}
						<div class="form-control-feedback" id="error_idNacionalidad"></div>
					</div>
					<div class="form-group col-md-4" id="div_idNacionalidad">
						{!! Form::label('idEstadoOrigen', 'Estado natal:', ['class' => 'form-control-label']) !!}
						{!! Form::select('idEstadoOrigen',
											$estados,
											@$desaparecido->persona->idEstadoOrigen ? :30,
											['class' => 'form-control',
												'placeholder' => 'Seleccione una entidad federativa',
											]) !!}
							<div class="form-control-feedback" id="error_idNacionalidad"></div>
					</div>				
				</div>
				<div class="row">	
					<div class="form-group col-md-4" id="div_fechaNacimiento">
						{!! Form::label ('fechaNacimiento','Fecha de nacimiento:', ['class' => 'form-control-label']) !!}
						{!! Form::text ('fechaNacimiento',
											Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y'),
											['class' => 'form-control',
												'id' => 'fechaNacimiento',
												'data-validation-format'=>"dd/mm/yyyy",
											] )!!}
						<div class="form-control-feedback" id="error_fechaNacimiento"></div>
					</div>			
					<div class="form-group col-md-4" id="div_edadExtravio">

						{!! Form::label ('edadExtravio','Edad de extravío:', ['class' => 'form-control-label']) !!}
						{!! Form::text ('edadExtravio',
										$desaparecido->edadExtravio,
										['class' => 'form-control',
											'id' => 'edadExtravio'
										] )!!}
						<!--<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>-->
						<div class="form-control-feedback" id="error_edadExtravio"></div>
					</div>
					<div class="form-group col-md-4" id="div_edadAparente">
						{!! Form::label ('edadAparente','Edad aparente:', ['class' => 'form-control-label']) !!}
						{!! Form::text ('edadAparente',
										$desaparecido->edadAparente,
										['class' => 'form-control sinEnter soloNumeros',
											'id' => 'edadAparente',
											'maxlength' => 3,
											'data-validation' =>'number',
											'data-validation-allowing' =>'range[1;150]'
										] )!!}
						<div class="form-control-feedback" id="error_edadAparente"></div>
					</div>
				</div>
				<div class="row">	
					<div class="form-group col-md-4" id="div_curp">			
						{!! Form::label('curp', 'C.U.R.P.', ['class' => 'form-control-label']) !!}
						{!! Form::text('curp',
										 $desaparecido->persona->curp,
										 ['class' => 'form-control',
										 	'placeholder' => 'Ingrese el C.U.R.P.'
										 ]) !!}
						<div class="form-control-feedback" id="error_curp"></div>
					</div>					
					<div class="form-group col-md-4" id="div_idEscolaridad">
						{!! Form::label ('idEscolaridad','Escolaridad:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('idEscolaridad',
											$escolaridades,
											$desaparecido->idEscolaridad,
											['class' => 'form-control',
											] )!!}
						<div class="form-control-feedback" id="error_idEscolaridad"></div>
					</div>
					<div class="form-group col-md-4" id="div_idOcupacion">
						{!! Form::label ('idOcupacion','Ocupación:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('idOcupacion',
											$ocupaciones,
											$desaparecido->persona->idOcupacion,
											['class' => 'form-control'
											] )!!}
						<div class="form-control-feedback" id="error_idOcupacion"></div>
					</div>			
				</div>
				<div class="row">
					<div class="form-group col-md-4" id="div_idDocumentoIdentidad">
						{!! Form::label ('idDocumentoIdentidad','Identificación:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('idDocumentoIdentidad',
											$identificaciones,
											$desaparecido->idDocumentoIdentidad,
											['class' => 'form-control',
												'id' => 'idDocumentoIdentidad'
											] )!!}
						<div class="form-control-feedback" id="error_idDocumentoIdentidad"></div>
					</div>
					<div class="form-group col-md-4" @if ($desaparecido->idDocumentoIdentidad = 7) style="display: none" @endif id="div_otroDocIdentidad">
							{!! Form::label ('otroDocIdentidad','Otro:', ['class' => 'form-control-label']) !!}
							{!! Form::text ('otroDocIdentidad',
											$desaparecido->otroDocIdentidad,
											['class' => 'form-control mayuscula'])!!}
							<div class="form-control-feedback" id="error_otroDocIdentidad"></div>
					</div>
					<div class="form-group col-md-4" id="div_numDocIdentidad">
							{!! Form::label ('numDocIdentidad','No. Identificación:', ['class' => 'form-control-label']) !!}
							{!! Form::text ('numDocIdentidad',
												$desaparecido->numDocIdentidad,
												['class' => 'form-control mayuscula'
												] )!!}
							<div class="form-control-feedback" id="error_numDocIdentidad"></div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4" id="div_idEdocivil">
						{!! Form::label ('idEdocivil','Estado civil:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('idEdocivil',
											$edoscivil ,
											$desaparecido->idEdocivil,
											['class' => 'form-control',
												'id' => 'idEdocivil'
											] )!!}
						<div class="form-control-feedback" id="error_idEdocivil"></div>
					</div>
					<div class="form-group col-md-4" id="div_embarazo" @if ($desaparecido->persona->sexo === 'H') style="display: none" @endif>
						{!! Form::label ('embarazo','Esta embarazada:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('embarazo',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											$desaparecido->embarazo,
											['class' => 'form-control'] )!!}
						<div class="form-control-feedback" id="error_embarazo"></div>
					</div>			
				</div>
				<div class="row" id="datosEmbarazo" @if ($desaparecido->embarazo != 'SI') style="display: none" @endif>
					
					<div class="form-group col-md-4" id="div_numGestacion">
						{!! Form::label ('numGestacion','Cantidad:', ['class' => 'form-control-label']) !!}
						{!! Form::number ('numGestacion',
											$desaparecido->numGestacion,
											['class' => 'form-control mayuscula'] )!!}
						<div class="form-control-feedback" id="error_numGestacion"></div>
					</div>
					<div class="form-group col-md-4" id="div_tipoGestacion">
						{!! Form::label ('tipoGestacion','Periodo:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('tipoGestacion',
											['SEMANAS'=> 'SEMANAS','MESES' => 'MESES'],
											$desaparecido->tipoGestacion,
											['class' => 'form-control '] )!!}
						<div class="form-control-feedback" id="error_tipoGestacion"></div>
					</div>
					<div class="form-group col-md-4" id="div_rumoresBebe">
						{!! Form::label ('rumoresBebe','Rumores sobre el nacimiento:', ['class' => 'form-control-label']) !!}
						{!! Form::select ('rumoresBebe',
											['NO'=>'NO','SI'=>'SI', 'LO IGNORAN' => 'LO IGNORAN'],
											$desaparecido->rumoresBebe,
											['class' => 'form-control'] )!!}
						<div class="form-control-feedback" id="error_rumoresBebe"></div>
					</div>	
				</div>
				<div class="row" id="datosPormenores" @if ($desaparecido->rumoresBebe != 'SI') style="display: none" @endif>
					<div class="form-group col-md-12" id="div_pormenores">
						{!! Form::label ('pormenores','Pormenores:', ['class' => 'form-control-label']) !!}
						{!! Form::textarea ('pormenores',
											$desaparecido->pormenores,
											['class' => 'form-control mayuscula'] )!!}
						<div class="form-control-feedback" id="error_pormenores"></div>
					</div>
				</div>				
			</div>
		</div>
	</div>

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
	var btnGuardar = $('#btnGuardar');
	
    
    /*$( "form" ).sisyphus( {
	    excludeFields: $('input[name=_token]')
    });*/

    $('#idOcupacion').select2();

    $('#btnGuardar').click(function(e)
    {
		var dataString = {
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
			idPersona : '{!! $desaparecido->persona->id !!}',			
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
			type: 'PUT',
			url: routeDesaparecido+'/{!! $desaparecido->id !!}',
			data: dataString,
			dataType: 'json',
			success: function(data) {
				window.location.replace(routeDesaparecido+'/'+data.desaparecido.idCedula);
			},
			error: function(data) {
				var errors = data.responseJSON;
				modalTitle.empty();
				modalBody.empty();
				modalBody.append('<ul>');
				$('.card-body div.has-danger').removeClass('has-danger');
				$('.form-control-feedback').empty();
				$.each(errors.errors, function(key, value){
					//$('#'+key).addClass('text-red');
					$('#div_'+key).addClass('has-danger');
					$('input#'+key).addClass('form-control-danger');
					$('#error_'+key).append(value);

					modalBody.append('<li><code>'+value+'</code></li>');
				});
				modalBody.append('</ul>');

				modalBody.append('<code>'+errors.message+'</code>');
				
				modalTitle.append('<i class="fa fa-warning"></i> Ooops... algo salió mal');
				modalGral.modal('show');
			}
		});
    });

    	/*	$('.modal-body input.text-red').removeClass('text-red');
		$('.modal-body div.has-error').removeClass('has-error');
		$('.modal-body span').empty();
		$.each(errors, function(i, item) {
			console.log(i+' valor: '+item);
			if (item) {
				$('#'+i).addClass('text-red');
				$('#div_'+i).addClass('has-error');
				$('#error_'+i).append(item);
			}							
		});*/

    

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

			if (g=="H") {
				$("#mostrarGenero").show();
				$("#div_embarazo").hide();
				$("#datosEmbarazo").hide();
				$("#datosPormenores").hide();
				$("#rumores").hide();
			}else{
				if (g=="M"){
					$("#mostrarGenero").show();
					$("#div_embarazo").show();
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
			if (documento == "9") {					
					$("#div_otroDocIdentidad").show();
			} else {					
					$("#div_otroDocIdentidad").hide();
			}
		});


	$('input#familiaresFechaNacimiento').mask('00/00/0000');
	
	$('#identificacion').change(function() {
			f = $('#identificacion').val();

			if (f==7) {
				$("#div_idDocumentoIdentidad").show();
			}else{
				$("#div_idDocumentoIdentidad").hide();
			}
	});

	 $('#familiaresFechaNacimiento').change(function(){  
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
					   $('#familiaresEdad').val(data);
			   },
			   
		   });
	   }
   });

</script>

@endsection