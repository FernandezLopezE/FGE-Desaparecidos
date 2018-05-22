@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
	.gi-3x{font-size: 2.5em;}
</style>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'desaparicion'))
	  	<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">	
					<h5>Datos de la desaparición
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">

				<div class="row" >
							<div class="col-10 pull-right">
								
							</div>	
							<div class="col-2 pull-right">
								<input id = "toggle" type="checkbox"  data-toggle="toggle" data-on="Con conexión" data-off="Sin conexión" class="pull-right" >
							</div>	
					
				</div>
	  			<div class="row">				
					
						<div class="form-group col-3">
							{!! Form::label ('familiaresFechaNacimiento','Fecha de la última vez que fué visto:') !!}
							{!! Form::text ('familiaresFechaNacimiento',
												old('Fecha de nacimiento'),
												['class' => 'form-control',
													'id' => 'familiaresFechaNacimiento' ,
													'data-validation' => 'required date',
													'data-validation-error-msg' => 'Ingrese una fecha valida o menor a la actual',
													'data-validation-format'=>"dd/mm/yyyy",
													'placeholder' => ''

												])!!}
						</div>
						<div class="form-group col">
							{!! Form::label ('hora','Hora (hh:mm):') !!}
								<div class = "row">
									<div class=" col-2" >
									{!! Form::time ('horas',
												old('Horas'),
												['class' => 'form-control',
													'id' => 'familiaresFechaNacimiento' ,
													'data-validation' => 'required',
													'data-validation-error-msg' => 'Ingrese una hora válida', 'placeholder' => 'HH:mm'	, 'min' =>'00:00', 'max' =>'23:59'										
												])!!}
									</div>								
								</div>
						</div>		
					
				</div>
				
						{{--AQUI ENPIEZAN LOS DIV DEL TOGGLE--}}
					<div class="row" >
						<div class = "col" id="op-off" >							
							<div class="row" > 	
								
								<div class="form-group col-lg-5">
									{!! Form::label ('calle','Calle:') !!}
									{!! Form::text ('calle',
														old('calle'),
														['class' => 'form-control mayuscula',
															'id' => 'calle',
															'data-validation' => 'required',
															'data-validation-error-msg-required' => 'El campo es requerido'
														] )!!}				
								</div>
								<div class="form-group col">
									{!! Form::label ('numExterno','Número exterior:') !!}
									{!! Form::text ('numExterno',
													old('numExterno'),
													['class' => 'form-control mayuscula',
														'id' => 'numExterno',
													] )!!}				
								</div>
								<div class="form-group col-lg-5">
									{!! Form::label ('ref','Referencia:') !!}
									{!! Form::text ('referencia',
														old('referencia'),
														['class' => 'form-control mayuscula',
															'id' => 'calle',
															'data-validation' => 'required',
															'data-validation-error-msg-required' => 'El campo es requerido'
														] )!!}				
								</div>

								<div class="row" id=""  > 	
									<div class="form-group col-lg-4">
										{!! Form::label ('idEstado','Estado:') !!}
										{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}				
									</div>
									<div class="form-group col-lg-4">
										{!! Form::label ('idMunicipio','Municipio:') !!}
										{!! Form::select ('idMunicipio',$municipios,'',
																 ['class' => 'form-control',
																	'data-validation' => 'required',
																	'data-validation-error-msg-required' => 'El campo es requerido'
																] )!!}				
									</div>
									<div class="form-group col-lg-4">
										{!! Form::label ('idLocalidad','Localidad:') !!}
										{!! Form::select ('idLocalidad',$localidades,'',
																 ['class' => 'form-control',
																	'data-validation' => 'required',
																	'data-validation-error-msg-required' => 'El campo es requerido'
																 ] )!!}				
									</div>
								</div>
						
								<div class="row" id=""  > 	
									<div class="form-group col-lg-8">
										{!! Form::label ('idColonia','Colonia:') !!}
										{!! Form::select ('idColonia',$colonias,'',
																['class' => 'form-control',
																	'data-validation' => 'required',
																	'data-validation-error-msg-required' => 'El campo es requerido'
																] )!!}				
									</div>
									<div class="form-group col-lg-4">
										{!! Form::label ('idCodigoPostal','Código postal:') !!}
										{!! Form::select ('idCodigoPostal',$codigos,'',
																['class' => 'form-control',
																	'data-validation' => 'required',
																	'data-validation-error-msg-required' => 'El campo es requerido'
																] )!!}				
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class = "col" id="op-on" style="display: none">							
							<p id = "off"> Hola esta deshabilitado</p>
						</div>
					</div>
				
						{{--TERMINALOS DIV DEL TOGGLE--}}




					
				
					
				</div>	
				<div class="row">
				
						<div class="card-body">
							{!! Form::label ('ultimovisto','ÚLTIMA PERSONA QUE LO VIO',['class' => 'form-control-label' ]) !!}
							<div class="row">
								<div class="form-group col-md-4" id="div_nombres">
									{!! Form::label ('nombres','Nombres(s):',['class' => 'form-control-label' ]) !!}
									{!! Form::text ('nombres',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'nombres'
														] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>
								<div class="form-group col" id="div_primerAp">
									{!! Form::label ('primerAp','Primer apellido:',['class' => 'form-control-label']) !!}
									{!! Form::text ('primerAp',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'primerAp',
														] )!!}
									<div class="form-control-feedback" id="error_primerAp"></div>
								</div>
								<div class="form-group col" id="div_segundoAp">
									{!! Form::label ('segundoAp','Segundo apellido:',['class' => 'form-control-label']) !!}
									{!! Form::text ('segundoAp',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'segundoAp'] )!!}
									<div class="form-control-feedback" id="error_segundoAp"></div>
								</div>
								<div class="form-group col" id="div_nombres">
									{!! Form::label ('parentescoDesaparecido','Parentesco:') !!}
									{!! Form::select ('avistoidParentesco[]',$parentescos,'', ['class' => 'form-control', 'id' => 'avistoidParentesco'] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>

							</div>
							<div class="row">
								
							</div>
						</div>
					
				</div>
				<div class="row">
						 <div class="form-group col">
	                        {!! Form::label ('descripción','Brebe descripción del hecho:') !!}
	                        {!! Form::textarea('descripcion',
	                                            '',
	                                            ['class' => 'form-control mayuscula', 'data-validation' =>'required','data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' => '1','data-validation-error-msg-required' =>'Este campo es requerido.',"size" => "30x4","placeholder" => "Ingrese la descripción del hecho"] )!!}
	                    </div>
				</div>

								

			</div>
		</div>



@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script type="text/javascript">
	/*$(document).ready(function()
	{
		document.getElementById("op-on").style.display='block';
	})*/

	$('input#familiaresFechaNacimiento').mask('00/00/0000');

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
	$(function() {
    $('#toggle').change(function() {
	var isChecked = $(this).is(':checked');

	if(isChecked) {
		document.getElementById("op-on").style.display='block';
		document.getElementById("op-off").style.display='none';
        	/*$('#op-on').show();
       		$('#op-off').hide();*/
      } else {
        	document.getElementById("op-on").style.display='none';
			document.getElementById("op-off").style.display='block';
      }

  /*  if ( $('#toggle').bootstrapToggle("0")){
       	$('#op-on').show();
       	$('#op-off').hide();
      	 }
    else if ( $('#toggle').bootstrapToggle("1")){
       	$('#op-on').hide();
       	$('#op-off').show();
       }*/


     
    })
  	})
</script>
@endsection