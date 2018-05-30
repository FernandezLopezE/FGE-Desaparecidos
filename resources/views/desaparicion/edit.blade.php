@extends('layouts.app_uipj')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
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
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	  	<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">	
					<h5>Descripción de los hechos
					<button type="submit" class="btn btn-dark pull-right"  id="btnGuardarDescripcionHechos">	Guardar		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  		<form id="formulario">

				<div class="row" >
							<div class="col-10 pull-right">
								
							</div>	
							
					
				</div>
	  			<div class="row">				
					
						<div class="form-group col-4">
							{!! Form::label ('fechaAvisto','Fecha de la última vez que fue visto:') !!}
							{!! Form::text ('familiaresFechaNacimiento',
												$desaparicionFecha,
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
								    <div class="col">
								      <div class="form-group">
								        <label for="">Hora</label>
								        <div class="input-group col-4">
								          
								          {!! Form::number ('horasAvisto',
												$desaparicionHoras,
												['class' => 'form-control',
													'id' => 'horas' ,
													'data-validation' => 'required',
                    'data-validation-error-msg-required' => 'El campo es requerido',
													'max' =>'23','min' =>'0',
													'data-validation'=>"number" ,
													'data-validation-allowing'=>"range[0;23],negative",
													'placeholder' => 'HH'				
												])!!}

								          <span class="input-group-addon"><strong>:</strong></span>
								          {!! Form::number ('miniutos',
												$desaparicionMinutos,
												['class' => 'form-control',
													'id' => 'minutos' ,
													'data-validation' => 'required',
													'data-validation-error-msg' => 'Ingrese una hora válida',
													'max' =>'59','min' =>'0',
													'data-validation'=>"number" ,
													'data-validation-allowing'=>"range[0;59],negative",
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
														$domicilio->calle,
														['class' => 'form-control mayuscula',
															'id' => 'calle',
															
														] )!!}				
								</div>
								<div class="form-group col">
									{!! Form::label ('numExterno','Número exterior:') !!}
									{!! Form::text ('numExterno',
													$domicilio->numExterno,
													['class' => 'form-control mayuscula',
														'id' => 'numExterno',
													] )!!}				
								</div>
								<div class="form-group col">
									{!! Form::label ('ref','Referencia:') !!}
									{!! Form::text ('referencia',
														$desaparecido->cedula->desaparicionRef,
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
										{!! Form::select ('idEstado',$estados,'', ['class' => 'form-control' , 'id' =>'idEstado'] )!!}				
									</div>
									<div class="form-group col">
										{!! Form::label ('idMunicipio','Municipio:') !!}
										{!! Form::select ('idMunicipio',$municipios,@$domicilio->idMunicipio,
																 ['class' => 'form-control'
																	,'id' =>'idMunicipio'
																] )!!}				
									</div>
									<div class="form-group col">
										{!! Form::label ('idLocalidad','Localidad:') !!}
										{!! Form::select ('idLocalidad',$localidades,'',
																 ['class' => 'form-control'
																	,'id' =>'idLocalidad'
																 ] )!!}				
									</div>
							</div>
						
							<div class="row" id=""  > 	
									<div class="form-group col-lg-8">
										{!! Form::label ('idColonia','Colonia:') !!}
										{!! Form::select ('idColonia',$colonias,'',
																['class' => 'form-control',
																	'id' =>'idColonia'
																] )!!}				
									</div>
									<div class="form-group col-lg-4">
										{!! Form::label ('idCodigoPostal','Código postal:') !!}
										{!! Form::select ('idCodigoPostal',$codigos,'',
																['class' => 'form-control',
																	'id' =>'idCodigoPostal'
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
														$desaparecido->cedula->nombresAvisto,
														['class' => 'form-control mayuscula',
															'id' => 'nombres',
														
														] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>
								<div class="form-group col" id="div_primerAp">
									{!! Form::label ('primerAp','Primer apellido:',['class' => 'form-control-label']) !!}
									{!! Form::text ('primerAp',
														$desaparecido->cedula->primerApAvisto,
														['class' => 'form-control mayuscula',
															'id' => 'primerAp',
														
														] )!!}
									<div class="form-control-feedback" id="error_primerAp"></div>
								</div>
								<div class="form-group col" id="div_segundoAp">
									{!! Form::label ('segundoAp','Segundo apellido:',['class' => 'form-control-label']) !!}
									{!! Form::text ('segundoAp',
														$desaparecido->cedula->segundoApAvisto,
														['class' => 'form-control mayuscula',
															'id' => 'segundoAp',
															] )!!}
									<div class="form-control-feedback" id="error_segundoAp"></div>
								</div>
								

							</div>
							<div class="row">
								<div class="form-group col" id="div_nombres">
									{!! Form::label ('parentescoDesaparecido','Parentesco:') !!}
									{!! Form::select ('avistoidParentesco[]',$parentescos,$desaparecido->cedula->idParentescoAvisto, ['class' => 'form-control', 'id' => 'avistoidParentesco'] )!!}
									<div class="form-control-feedback" id="error_nombres"></div>
								</div>
								@if ($desaparecido->cedula->idParentescoAvisto == 14)
									<div class="form-group col-md-4" id="div_otroParentesco" >
										{!! Form::label ('otroParentesco','Especifique:',['class' => 'form-control-label']) !!}
										{!! Form::text ('otroParentesco',
														$desaparecido->cedula->otroParentescoAvisto,
														['class' => 'form-control mayuscula',
															'id' => 'otroParentesco',
														] )!!}
										<div class="form-control-feedback" id="error_otroParentesco"></div>
									</div>
								@else 
									<div class="form-group col-md-4" id="div_otroParentesco"  style="display:none">
											{!! Form::label ('otroParentesco','Especifique:',['class' => 'form-control-label']) !!}
											{!! Form::text ('otroParentesco',
															$desaparecido->cedula->otroParentescoAvisto,
															['class' => 'form-control mayuscula',
																'id' => 'otroParentesco',
															] )!!}
											<div class="form-control-feedback" id="error_otroParentesco"></div>
									</div>
								@endif
							</div>
						</div>
					
				</div>
				<div class="row">
						 <div class="form-group col">
	                        {!! Form::label ('descripción','Breve descripción del hecho:') !!}
	                        {!! Form::textarea('descripcion',
	                                            $desaparecido->cedula->desaparicionObservaciones,
	                                            ['class' => 'form-control mayuscula', 'data-validation' =>'required','data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' => '1','data-validation-error-msg-required' =>'Este campo es requerido.',"size" => "30x4", 'id' => 'descripcion'] )!!}
	                    </div>
				</div>


			
			@if((is_null($desaparecido->cedula->vehiculoPlacas)) OR ($desaparecido->cedula->vehiculoPlacas == ""))
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
											$desaparecido->cedula->vehiculoPlacas,
											['class' => 'form-control mayuscula',
											'id' => 'vehiculoPlacas' ,'disabled',
								] )!!}
				        	</div>
				        	<div class="col">
					           {!! Form::label ('descripcion','Descripción:',['class' => 'form-control-label']) !!}
								{!! Form::text ('vehiculoDescripcion',
											$desaparecido->cedula->vehiculoDescripcion,
											['class' => 'form-control mayuscula',
											'id' => 'vehiculoDescripcion','disabled',
								] )!!}
				        	</div>
			          	</div>				          	
			      </div>			                                                               
			    </div> 
			@else
			    <div class="row">
			        <div class="form-check col">
			          <input class="form-check-input" type="checkbox" id="sinInformacionVehiculo" >
			          <label class="form-check-label" for="antecedentesmedicos">
			           	Sin información de vehículo
			          </label>
			          	<div class="row">
			          		<div class="col-4">
					           {!! Form::label ('placas','Placas:',['class' => 'form-control-label']) !!}
								{!! Form::text ('vehiculoPlacas',
											$desaparecido->cedula->vehiculoPlacas,
											['class' => 'form-control mayuscula',
											'id' => 'vehiculoPlacas',
								] )!!}
				        	</div>
				        	<div class="col">
					           {!! Form::label ('descripcion','Descripción:',['class' => 'form-control-label']) !!}
								{!! Form::text ('vehiculoDescripcion',
											$desaparecido->cedula->vehiculoDescripcion,
											['class' => 'form-control mayuscula',
											'id' => 'vehiculoDescripcion',
								] )!!}
				        	</div>
			          	</div>				          	
			      </div>			                                                               
			    </div> 
			@endif
							
					

								
				</form>
			</div>
		</div>



@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript">
	var routeIndex = '{!! route('consultas.index') !!}';	

	$(document).ready(function()
	{	
		console.log(routeIndex);
		/*$('select#idEstado option[value="'+row.+'{!! $domicilio->idMunicipio !!}'+'"]').attr("selected",true);*/
		//$('#idEstado').val(''+'{!! $domicilio->idEstado !!}'+'').trigger('change');
		console.log("el ID del estado es: "+'{!! $domicilio->idMunicipio !!}');
		//$('select#idEstado option[value="'+'{!! $domicilio->idEstado !!}'+'"]').attr("selected",false);
		$('#idEstado').val(''+'{!! $domicilio->idEstado !!}'+'').trigger('change');
		$.getJSON(routeIndex+'/get_municipios/'+'{!! $domicilio->idEstado !!}')
				.done(function(data){					
					idSelect ='{!! $domicilio->idMunicipio !!}';
					selectedGeneral = $('#idMunicipio');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_localidades/'+'{!! $domicilio->idMunicipio !!}')
				.done(function(data){					
					idSelect = '{!! $domicilio->idLocalidad !!}';
					selectedGeneral = $('#idLocalidad');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_colonias/'+'{!! $domicilio->idMunicipio !!}')
				.done(function(data){					
					idSelect = '{!! $domicilio->idColonia !!}';
					selectedGeneral = $('#idColonia');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_colonias/'+'{!! $domicilio->idMunicipio !!}')
				.done(function(data){					
					idSelect = '{!! $domicilio->idCodigoPostal !!}';
					selectedGeneral = $('#idCodigoPostal');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.codigoPostal+'</option>';
						selectedGeneral.append(optionselect);
					});
				});//HASTA AQUI TERMINA LA CONSULTA DE ESTADO COLONIA MUNICIPIO LOCALIDAD CP AL EDIT

		//$('select#idMunicipio option[value="'+'{!! $domicilio->idMunicipio !!}'+'"]').attr("selected",true);
		/*document.getElementById("vehiculoPlacas").disabled = true;
		document.getElementById("vehiculoDescripcion").disabled = true;*/
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
	var vehiculoPlacas = "";
	var vehiculoDescripcion = "";
	var routeIndex2 = '{!! route('desaparicion.index') !!}';
$(btnGuardarDescripcionHechos).click (function(){
			
			

		 if ($('#sinInformacionVehiculo').is(':checked')) {
        		
      			vehiculoPlacas = "";
				vehiculoDescripcion ="";
      		}
      		else{
      			vehiculoPlacas =  $("#vehiculoPlacas").val();
				vehiculoDescripcion = $("#vehiculoDescripcion").val();
      			}

      		var token = $("#token").val();
			var dataString = {
				desaparicionFecha: $("#familiaresFechaNacimiento").val()+" "+$("#horas").val()+":"+$("#minutos").val()+":00",
				//desaparicionHora: $("#horas").val()+":"+$("#minutos").val(),
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
				tipoDireccion: "LUGAR DE AVISTAMIENTO",				
				descripcion: $("#descripcion").val(),

				vehiculoPlacas: vehiculoPlacas,
				vehiculoDescripcion:vehiculoDescripcion,
				idDesaparecido:'{!! $desaparecido->id!!}',
			

			};
			console.log(dataString);

			$.ajax({
				url: routeIndex2 +'/{!! $desaparecido->id !!}',
				//headers:{'X-CSRF-TOKEN':token},
				type: 'PUT',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log("Ya la hiciste");
					$.confirm({
				            title: 'Datos guardados!',
				            content: 'Los datos fueron guardados exitosamente.',
				            type: 'dark',
				            typeAnimated: true,
				            buttons: {
				                tryAgain: {
				                    text: 'Aceptar',
				                    btnClass: 'btn-dark',
				                    action: function(){
				                    	window.location =  routeIndex2 +'/{!! $desaparecido->id !!}';
				                    }//temina el action del boton aceptar 
				                },
				            }
				        });  
				       									
                  
				},
				error: function(data) {
					var errors = data.responseJSON;	
					$('.modal-body div.has-danger').removeClass('has-danger');
					$('.form-control-feedback').empty();
					$.each(errors.errors, function(key, value){			
						$('#div_'+key).addClass('has-danger');
						$('input#'+key).addClass('form-control-danger');
						$('#error_'+key).append(value);						
					});
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