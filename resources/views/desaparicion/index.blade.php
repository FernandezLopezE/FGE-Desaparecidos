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
{{ Form::hidden('idExtraviado', $desaparecido->id, array('id' => 'idExtraviado')) }}
	  	<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">	
					<h5>Datos de la desaparición
					<button type="submit" class="btn btn-dark pull-right"  id="btnGuardarDescripcionHechos">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">

				<div class="row" >
							<div class="col-10 pull-right">
								
							</div>	
							
					
				</div>
	  			<div class="row">				
					
						<div class="form-group col-4">
							{!! Form::label ('fechaAvisto','Fecha de la última vez que fué visto:') !!}
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
						<div class="col">
								<div class="container">
								  <div class="row">
								    <div class="col-xs-12 col-md-3">
								      <div class="form-group">
								        <label for="">Hora</label>
								        <div class="input-group">
								          
								          {!! Form::number ('horasAvisto',
												old('Horas'),
												['class' => 'form-control',
													'id' => 'horas' ,
													'data-validation' => 'required',
													'data-validation-error-msg' => 'Ingrese una hora válida',
													'max' =>'23','min' =>'0',
													'placeholder' => 'HH'				
												])!!}

								          <span class="input-group-addon"><strong>:</strong></span>
								          {!! Form::number ('miniutos',
												old('min'),
												['class' => 'form-control',
													'id' => 'minutos' ,
													'data-validation' => 'required',
													'data-validation-error-msg' => 'Ingrese una hora válida',
													'max' =>'59','min' =>'0',
													'placeholder' => 'MM'						
												])!!}
								        </div>
								      </div>
								    </div>
								  </div>
								</div>
						</div>	
					
				</div>
				
						{{--AQUI ENPIEZAN LOS DIV DEL TOGGLE--}}
											
							<div class="row" > 	
								
								<div class="form-group col">
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
								<div class="form-group col">
									{!! Form::label ('ref','Referencia:') !!}
									{!! Form::text ('referencia',
														old('referencia'),
														['class' => 'form-control mayuscula',
															'id' => 'referencia',
															'data-validation' => 'required',
															'data-validation-error-msg-required' => 'El campo es requerido'
														] )!!}				
								</div>
							</div>

							<div class="row" id=""  > 	
									<div class="form-group col">
										{!! Form::label ('idEstado','Estado:') !!}
										{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}				
									</div>
									<div class="form-group col">
										{!! Form::label ('idMunicipio','Municipio:') !!}
										{!! Form::select ('idMunicipio',$municipios,'',
																 ['class' => 'form-control',
																	'data-validation' => 'required',
																	'data-validation-error-msg-required' => 'El campo es requerido'
																] )!!}				
									</div>
									<div class="form-group col">
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
				<div class="row">
				
						<div class="card-body">
							
							<div class='hr'>
									<span class='hr-title'> Última persona que lo vio </span>
							</div>	
							
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
								

							</div>
							<div class="row">
								<div class="form-group col" id="div_nombres">
									{!! Form::label ('parentescoDesaparecido','Parentesco:') !!}
									{!! Form::select ('avistoidParentesco[]',$parentescos,'', ['class' => 'form-control', 'id' => 'avistoidParentesco'] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>
								<div class="form-group col-md-4" id="div_otroParentesco"  style="display:none">
										{!! Form::label ('otroParentesco','Especifique:',['class' => 'form-control-label']) !!}
										{!! Form::text ('otroParentesco',
														old('otroParentesco'),
														['class' => 'form-control mayuscula',
															'id' => 'otroParentesco',
														] )!!}
										<div class="form-control-feedback" id="error_otroParentesco"></div>
								</div>
							</div>
						</div>
					
				</div>
				<div class="row">
						 <div class="form-group col">
	                        {!! Form::label ('descripción','Brebe descripción del hecho:') !!}
	                        {!! Form::textarea('descripcion',
	                                            '',
	                                            ['class' => 'form-control mayuscula', 'data-validation' =>'required','data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' => '1','data-validation-error-msg-required' =>'Este campo es requerido.',"size" => "30x4","placeholder" => "Ingrese la descripción del hecho" , 'id' => 'descripcion'] )!!}
	                    </div>
				</div>

				<div class="row">
			        <div class="form-check col">
			          <input class="form-check-input" type="checkbox" id="sinInformacionVehiculo" checked="">
			          <label class="form-check-label" for="antecedentesmedicos">
			           	Sin información de vehículo
			          </label>
			          	<div class="row">
			          		<div class="col-4">
					           {!! Form::label ('placas','Placas:',['class' => 'form-control-label']) !!}
								{!! Form::text ('vehiculoPlacas',
											old('otroParentesco'),
											['class' => 'form-control mayuscula',
											'id' => 'vehiculoPlacas',
								] )!!}
				        	</div>
				        	<div class="col">
					           {!! Form::label ('descripcion','Descripción:',['class' => 'form-control-label']) !!}
								{!! Form::text ('vehiculoDescripcion',
											old('otroParentesco'),
											['class' => 'form-control mayuscula',
											'id' => 'vehiculoDescripcion',
								] )!!}
				        	</div>
			          	</div>
				          	
			      </div>
			                                                               
			    </div> 
							
					

								

			</div>
		</div>



@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}


<script type="text/javascript">
	$(document).ready(function()
	{
		document.getElementById("vehiculoPlacas").disabled = true;
		document.getElementById("vehiculoDescripcion").disabled = true;
		 $("#vehiculoPlacas").prop('disabled');
      $("#vehiculoDescripcion").prop('disabled');
	})

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
	/*$(function() {
    $('#toggle').change(function() {
	var isChecked = $(this).is(':checked');

	if(isChecked) {
		document.getElementById("op-on").style.display='block';
		document.getElementById("op-off").style.display='none';
        	/*$('#op-on').show();
       		$('#op-off').hide();
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
       }
    })
    /*$("#horas").inputmask("hh:mm:ss", {
	  placeholder: "HH:MM:SS", 
	  insertMode: false, 
	  showMaskOnHover: false,
	  alias: "datetime",
	  hourFormat: 12
	 }
	);
   $('input[name="fechaAvisto"]').mask('00/00/0000');

})*/
	//var btnGuardarInformante= $('#btnGuardarInformante');
	var vehiculoPlacas = "";
	var vehiculoDescripcion = "";

$(btnGuardarDescripcionHechos).click (function(){
			
		 if ($('#sinInformacionVehiculo').is(':checked')) {
        		
      			vehiculoPlacas = "";
				vehiculoDescripcion ="";
      			}
      		else{
      			vehiculoPlacas =  $("#vehiculoPlacas").val();
				vehiculoDescripcion = $("#vehiculoDescripcion").val();
      			}


			var dataString = {
				desaparicionFecha: $("#familiaresFechaNacimiento").val(),
				desaparicionHora: $("#horas").val()+":"+$("#minutos").val(),
				calle: $("#calle").val(),
				numExterno: $("#numExterno").val(),	
				referencia: $("#referencia").val(),			
				idEstado: $("#idEstado").val(),
				idMunicipio: $("#idMunicipio").val(),
				idLocalidad: $("#idLocalidad").val(),
				idColonia: $("#idColonia").val(),
				idCodigoPostal: $("#idCodigoPostal").val(),
				nombres : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				idParentesco : $("#avistoidParentesco").val(),
				otroParentesco : $("#otroParentesco").val(),
				tipoDireccion: "AVISTO",				
				descripcion: $("#descripcion").val(),

				vehiculoPlacas: vehiculoPlacas,
				vehiculoDescripcion:vehiculoDescripcion,
				idDesaparecido:'{!! $desaparecido->id!!}',
				

			};
			console.log(dataString);

			$.ajax({
				type: 'POST',
				url:'desaparicion',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log("Ya la hiciste");                    
				},
				error: function(data) {
					console.log("valio verta");
				}
			});
		})


	$('#avistoidParentesco').change(function() {
			f = $('#avistoidParentesco').val();
			console.log(f);
			if (f==14) {
				$("#div_otroParentesco").show();
			}else{
				$("#div_otroParentesco").hide();
			}
		});
	$("#sinInformacionVehiculo").change(function () { 
      $("#vehiculoPlacas").prop('disabled', this.checked);
      $("#vehiculoDescripcion").prop('disabled', this.checked);
     
      if (this.checked) {
        $("#otra_Adiccion").hide();
      }
      });
</script>
@endsection