@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	  @media only screen and (min-width: 700px) {
	.modal-lg {
		max-width: 80%;
        } 
    }
	.gi-3x{font-size: 2.5em;}
</style>
	
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'contacto'))
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarContacto">
	Agregar
</button>
<div class="card-body bg-white">
			<table id="tableContactos" ></table>
			@include('contactos.modals.index')
</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script type="text/javascript">
    
    $('#tipoContacto').change(function() {
		g = $('#tipoContacto').val();
		console.log("El contacto es: "+g);

		if (g=="CORREO") {
			$("#divCorreo").show();
			$("#divTelefono").hide();
			$("#divRedSocial").hide();
		}else{
			if (g=="TELEFONO"){
				$("#divCorreo").hide();
				$("#divTelefono").show();
				$("#divRedSocial").hide();	
			}else{
				if (g=="REDSOCIAL"){
					$("#divCorreo").hide();
					$("#divTelefono").hide();
					$("#divRedSocial").show();
				
				}else{
					$("#divCorreo").hide();
					$("#divTelefono").hide();
					$("#divRedSocial").hide();
				}
			}
		}
    });
	$('#informanteTipoTelC').change(function(){
		tg = $("#informanteTipoTelC").val();
		console.log(tg);
		if(tg=="CELULAR"){
			$("#div_ext").hide();
		}else{
			$("#div_ext").show();
		}
	});

    var btnLimpiar = $('#btnLimpiar');
	document.getElementById("ladaC").value="(+52)-";
	var contador = 0;
	$("input[name='informanteTelefonosC[]']").mask('(000) 000 0000');
	$(function (){

		var routeIndex = '{!! route('consultas.index') !!}';
		var btnOtraRed = $('#btnOtraRed');
		var btnAgregarContacto = $('#btnAgregarContacto');
		var btnGuardarContacto = $('#btnGuardarContacto');
		var btnEditarContacto = $('#btnEditarContacto')
		var modalDesaparecidoContacto= $('#modalDesaparecidoContacto');
		var index = $('#modalDesaparecidoContacto');
		var tableContactos = $('#tableContactos');
		var idDesaparecido = '{!! $desaparecido->id !!}'
		var routeContacto = '{!! route('contactos.index') !!}';
		var btnAgregarTelefonoC = $('#btnAgregarTelefonoC');
		var tableCont = $('#tableContactos');
		var modalFooterCont = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}';

		btnOtraRed.click(function(e) {
			
			$("#divOtraRed").show();
			});

		btnAgregarTelefonoC.click(function(e) {
			console.log("agregando")

			var lada2 = document.getElementById("ladaC").value;

            $("#telefono3").append('<div class="row"> <div class="form-group col-lg-4">{!! Form::label ("informanteTipoTel","Tipo de telefono:") !!}	                                                                                               {!! Form::select ("informanteTipoTelC[]", $tiposTelefonos,"",["class" => "form-control","id" => "informanteTipoTelC[]"])!!} </div> <div class="form-group col-lg-2">                                                {!! Form::label ("lada","Código del país:") !!}	                                                                           {!! Form::text ("ladaC[]",old(""),["class" => "form-control lada","id" => "ladaC"])!!} </div>  <div class="form-group col-lg-4">                                                                                       {!! Form::label ("informanteTelefonos","Número:") !!}                                                             {!! Form::text ("informanteTelefonosC[]",old("informanteTelefonos"),["class" => "form-control mayuscula","data-validation" => "required","data-validation-error-msg-required" => "El campo es requerido","id" => "informanteTelefonos[]"] )!!} </div>    <div class="form-group col-lg-2">                                                                                                         {!! Form::label ("ext","Ext:") !!}                                                                                 {!! Form::text ("extC[]",old(""), ["class" => "form-control mayuscula","id" => "extC[]"] )!!} </div> </div>');
            $("input[name='informanteTelefonosC[]']").mask('(000) 000 0000');

           var otrasLadas = document.getElementsByClassName("lada");
		    otrasLadas[contador].value = lada2;
		    contador = contador + 1;
		    console.log(contador);
				});


		var formatContacto = function(value, row, index){
			telefonos = $.parseJSON(row.datos)
				var etiqueta = "";
				$.each(telefonos, function(key, value){
					etiqueta = etiqueta + '<span>'+' Tipo: '+value.tipoTel+' Lada: '+value.lada+' Telefono: '+value.telefono+ ' Ext: '+value.ext+'<span> </br>'					
				})
				return [etiqueta].join('');
		}

		/*var formatContactoRS = function(value, row, index){
			redesS = $.parseJSON(row.redesSociales)
				var etiqueta2;
				$.each(redesS, function(key, value){
					etiqueta2 = '<span>'+' Redes: '+redesS.redesSociales+'<span>'+' - '					
				})
				return [etiqueta2].join('');
		}*/
        
        var formatContactoRS = function(value, row, index){
			redesS = $.parseJSON(row.redesSociales)
				var etiqueta2;
				$.each(redesS, function(key, value){
					etiqueta2 = '<span>'+' Redes: '+redesS.redesSociales+'<span>'+' - '					
				})
				return [etiqueta2].join('');
		}

		var formatTableActions = function(value, row, index){
			btn = '<button class="btn btn-dark btn-sm" id="edit">Editar</button>&nbsp;';			
			return [btn].join('');
		}

		window.operateEvents = {
			'click #edit': function (e, value, row, index) {
				console.log(row);
				var btnEditarContacto = $('#btnEditarContacto');     
				$('select#tipoContacto option[value="'+row.tipoContacto+'"]').attr("selected",true);	
				if(row.tipoContacto == "TELEFONO"){
					console.log("telefono");
					$("#divCorreo").hide();
                    $("#divTelefono").show();
                    $("#divRedSocial").hide();
				}else{
					if(row.tipoContacto == "CORREO"){
						console.log("correo");
						$("#divCorreo").show();
                		$("#divTelefono").hide();
                		$("#divRedSocial").hide();
					}else{
						if(row.tipoContacto == "REDSOCIAL"){
							console.log("red social");
							$("#divCorreo").hide();
                    		$("#divTelefono").hide();
                    		$("#divRedSocial").show();
						}else{
							$("#divCorreo").hide();
							$("#divTelefono").hide();
							$("#divRedSocial").hide();
						}
					}
				}
				contacto = $.parseJSON(row.datos);
				switch(contacto.tipoContacto) {
					case 'TELEFONO':
						$('select#informanteTipoTelC option[value="'+contacto.tipoTel+'"]').attr("selected",true);
						$("#ladaC").val(contacto.lada);
						$("#informanteTelefonosC").val(contacto.telefono);
						if(contacto.tipoTel == "CELULAR"){
							$("#div_ext").hide();
						}else{
							$("#div_ext").show();
							$("#extC").val(contacto.ext);
						}
						//$("#informanteTipoTelC").val(contacto.tipoTel);
						//ext = (contacto.ext === null) ? "" : contacto.ext;
						//return contacto.tipoTel+' '+contacto.lada+' '+contacto.telefono+' '+ext;
						break;
					case 'CORREO':
						$("#correoElectronico").val(contacto.correo);
						//return contacto.correo;
						break;
					case 'REDSOCIAL':
						$('select#redesSociales option[value="'+contacto.red_social+'"]').attr("selected",true);
						$("#nombreUsuario").val(contacto.nick);
						//return contacto.red_social+': '+contacto.nick;
						break; 
					default:
						$("#divCorreo").hide();
						$("#divTelefono").hide();
						$("#divRedSocial").hide();
				}
				$("#btnEditarContacto").show();
				btnEditarContacto.val(row.id);
				$("#btnGuardarContacto").hide();				
				modalDesaparecidoContacto.modal('show');
			}
		}

		tableContactos.bootstrapTable({				
			url: routeIndex+'/get_contactos/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'tipoContacto',
				title: 'Tipo de contacto',
			}, {				
				title: 'Contacto',
				formatter: (value, row, index, field) => {
					contacto = $.parseJSON(row.datos);
					switch(contacto.tipoContacto) {
						case 'TELEFONO':
							ext = (contacto.ext === null) ? "" : contacto.ext;
							return contacto.lada+' '+contacto.telefono+' '+ext;
							break;
						case 'CORREO':
							return contacto.correo;
							break;
						case 'REDSOCIAL':
							return contacto.red_social+': '+contacto.nick;
							break; 
						default:
							return 'Asignando contacto';
					}					
                }
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})

		btnAgregarContacto.click(function(e){	
			$('#formulario')[0].reset();	
			$("#divCorreo").hide();
            $("#divTelefono").hide();
        	$("#divRedSocial").hide();	
			
			
			modalDesaparecidoContacto.modal('show');
			document.getElementById("ladaC").value="(+52)-";
		 	/*$( "#modalDesaparecidoContacto" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });*/
		})
        
        btnLimpiar.click(function(){
          $('#modalDesaparecidoContacto').find('form')[0].reset();
          $('#modalDesaparecidoContacto').removeData('modal');

        })

		btnGuardarContacto.click (function(){
            var tipoDeContacto = $("#tipoContacto").val();
            if ( tipoDeContacto == "TELEFONO"){
               	var dataString = {
					tipoContacto : $("#tipoContacto").val(),
					tipoTel: $("select[name='informanteTipoTelC[]']").map(function(){return $(this).val();}).get(),
					lada: $("input[name='ladaC[]']").map(function(){return $(this).val();}).get(),
					telefono : $("input[name='informanteTelefonosC[]']").map(function(){return $(this).val();}).get(),
					ext: $("input[name='extC[]']").map(function(){return $(this).val();}).get(),
					idDesaparecido: {!! $desaparecido->id !!},
				};
                $.ajax({
					type: 'POST',
					url: routeContacto,
					data: dataString,
					dataType: 'json',
					success: function(data) {
						index.modal('hide');
						tableContactos.bootstrapTable('refresh');							
					},
					error: function(data) {
						console.log(data);
					}
				});
            }
            if ( tipoDeContacto == "CORREO"){
               	var dataString2 = {
					tipoContacto : $("#tipoContacto").val(),
					correoElectronico : $("#correoElectronico").val(),
					idDesaparecido: {!! $desaparecido->id !!},
				};
				$.ajax({
					type: 'POST',
					url: routeContacto,
					data: dataString2,
					dataType: 'json',
					success: function(data) {
						index.modal('hide');
						tableContactos.bootstrapTable('refresh');							
					},
					error: function(data) {
						console.log(data);
					}
				});
            }
            if ( tipoDeContacto == "REDSOCIAL"){
               var dataString3 = {
					tipoContacto : $("#tipoContacto").val(),                
					nombreUsuario : $("#nombreUsuario").val(),
					redesSociales : $("#redesSociales").val(),
					idDesaparecido: {!! $desaparecido->id !!},
				};
                $.ajax({
					type: 'POST',
					url: routeContacto,
					data: dataString3,
					dataType: 'json',
					success: function(data) {
						index.modal('hide');
						tableContactos.bootstrapTable('refresh');							
					},
					error: function(data) {
						console.log(data);
					}
				});
            }
		});

		btnEditarContacto.click (function(){
            var tipoDeContacto = $("#tipoContacto").val();
            if ( tipoDeContacto == "TELEFONO"){
               	var dataString = {
					tipoContacto : $("#tipoContacto").val(),
					tipoTel: $("select[name='informanteTipoTelC[]']").map(function(){return $(this).val();}).get(),
					lada: $("input[name='ladaC[]']").map(function(){return $(this).val();}).get(),
					telefono : $("input[name='informanteTelefonosC[]']").map(function(){return $(this).val();}).get(),
					ext: $("input[name='extC[]']").map(function(){return $(this).val();}).get(),
					idDesaparecido: {!! $desaparecido->id !!},
				};
                $.ajax({
					type: 'PUT',
					url: routeContacto+'/'+idDesaparecido,
					data: dataString,
					dataType: 'json',
					success: function(data) {
						console.log(data);
						modal.find('form')[0].reset();
                    	modal.removeData('modal');
						$("#divCorreo").hide();
						$("#divTelefono").hide();
						$("#divRedSocial").hide();
						index.modal('hide');
						tableContactos.bootstrapTable('refresh');							
					},
					error: function(data) {
						console.log(data);
					}
				});
            }
            if ( tipoDeContacto == "CORREO"){
               	var dataString2 = {
					tipoContacto : $("#tipoContacto").val(),
					correoElectronico : $("#correoElectronico").val(),
					idDesaparecido: {!! $desaparecido->id !!},
				};
				$.ajax({
					type: 'PUT',
					url: routeContacto+'/'+idDesaparecido,
					data: dataString2,
					dataType: 'json',
					success: function(data) {
						console.log(data);
						modal.find('form')[0].reset();
                    	modal.removeData('modal');
						$("#divCorreo").hide();
						$("#divTelefono").hide();
						$("#divRedSocial").hide();
						index.modal('hide');
						tableContactos.bootstrapTable('refresh');							
					},
					error: function(data) {
						console.log(data);
					}
				});
            }
            if ( tipoDeContacto == "REDSOCIAL"){
               var dataString3 = {
					tipoContacto : $("#tipoContacto").val(),                
					nombreUsuario : $("#nombreUsuario").val(),
					redesSociales : $("#redesSociales").val(),
					idDesaparecido: {!! $desaparecido->id !!},
				};
                $.ajax({
					type: 'PUT',
					url: routeContacto+'/'+idDesaparecido,
					data: dataString3,
					dataType: 'json',
					success: function(data) {
						console.log(data);
						modal.find('form')[0].reset();
                    	modal.removeData('modal');
						$("#divCorreo").hide();
						$("#divTelefono").hide();
						$("#divRedSocial").hide();
						index.modal('hide');
						tableContactos.bootstrapTable('refresh');							
					},
					error: function(data) {
						console.log(data);
					}
				});
            }
		});
		


		//var table = $('#tableAntecedentes');
		//var routeIndex = '{!! route('consultas.index') !!}';
		var routeAntecedente = '{!! route('antecedentes.index') !!}';
		var btnAgregarAntecedente = $('#btnAgregarAntecedente');
		var btnGuardarAntecedente = $('#btnGuardarAntecedente');
		var modalAntecedentes = $('#modalAntecedentes');
		//var modalFooter = $('.modal-footer');
		//var idDesaparecido = '{!! $desaparecido->id !!}'
		
		// table.bootstrapTable({				
		// 	url: routeIndex+'/get_antecedentes/{!! $desaparecido->id !!}',
		// 	columns: [{					
		// 		field: 'fecha',
		// 		title: 'Fecha',
		// 	}, {					
		// 		field: 'observaciones',
		// 		title: 'Observaciones',
		// 	}]			
		// })

		btnAgregarAntecedente.click(function(e){
			modalAntecedentes.modal('show');
		})

		btnGuardarAntecedente.click (function(){
			
			var dataString = {
				mesAnio : $("#mesAnio").val(),
				idDelito : $("#idDelito").val(),
				idCentroReclusion : $("#idCentroReclusion").val(),
				observaciones : $("#observaciones").val(),
				idDesaparecido: idDesaparecido,
			};			

			$.ajax({
				type: 'POST',
				url: routeAntecedente,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					modalAntecedentes.modal('hide');
					table.bootstrapTable('refresh');
				},
				error: function(data) {
					console.log(data);
				}
			});
		})

	})

</script>
@endsection