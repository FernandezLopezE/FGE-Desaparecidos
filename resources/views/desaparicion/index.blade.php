@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
	.gi-3x{font-size: 2.5em;}
</style>
	
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
							{!! Form::label ('familiaresFechaNacimiento','Hora (hh:mm):') !!}
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
				<div class="row">
					
						<div class="card-body">
							{!! Form::label ('ultimovisto','Última persona 	que lo vio',['class' => 'form-control-label']) !!}
							<div class="row">
								<div class="form-group col-md-4" id="div_nombres">
									{!! Form::label ('nombres','Nombres(s):',['class' => 'form-control-label']) !!}
									{!! Form::text ('nombres',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'nombres'
														] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>
								<div class="form-group col-md-4" id="div_primerAp">
									{!! Form::label ('primerAp','Primer apellido:',['class' => 'form-control-label']) !!}
									{!! Form::text ('primerAp',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'primerAp',
														] )!!}
									<div class="form-control-feedback" id="error_primerAp"></div>
								</div>
								<div class="form-group col-md-4" id="div_segundoAp">
									{!! Form::label ('segundoAp','Segundo apellido:',['class' => 'form-control-label']) !!}
									{!! Form::text ('segundoAp',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'segundoAp'] )!!}
									<div class="form-control-feedback" id="error_segundoAp"></div>
								</div>

							</div>
							<div class="row">
								<div class="form-group col-md-4" id="div_nombres">
									{!! Form::label ('parentesco','Nombres(s):',['class' => 'form-control-label']) !!}
									{!! Form::text ('parentezco',
														'',
														['class' => 'form-control mayuscula',
															'id' => 'nombres'
														] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>
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
<script type="text/javascript">

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
</script>
@endsection