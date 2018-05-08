@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}

	div.hr {
		margin-top: 20px;
		margin-bottom: 20px;
		border: 0;
		border-top: 1px solid #eee;
		text-align: center;
		height: 0px;
		line-height: 0px;
	}

	.hr-title {
		background-color: #fff;
	}
</style>
	
@endsection

@section('titulo', '')

@section('content')
	{{ Form::hidden('idCedula', $cedula->id, array('id' => 'idCedula')) }}
@include('navs.navs_datos',array('activar' => 'informante'))

<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante">
	AGREGAR
</button>	
<div class="card-body bg-white">
	<table id="tableInformantes" ></table>
	@include('informante.modals.modal_informante')
</div>
	

@endsection

@section('scripts')
{!! HTML::script('personal/js/lada.js') !!}
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}

<script type="text/javascript">    
   // document.getElementById("lada[]").value="(+52)-";
var contador=0;
  
	$(function (){
		var table = $('#tableInformantes');
		var tableFamiliares = $('#table_familiares');
		var routeIndex = '{!! route('consultas.index') !!}';		
		var routeInformante = '{!! route('informante.index') !!}';
		var idCedula = '{!! $cedula->id !!}';
		var btnAgregarTelefono = $('#btnAgregarTelefono');
		var btnAgregarInformante = $('#btnAgregarInformante');
		var btnAgregarFamiliarDesa = $('#btnAgregarFamiliarDesaparecido');
		var btnGuardarInformante = $('#btnGuardarInformante');
		var btnGuardarDesaparecido = $('#btnGuardarPersonaDesaparecida');
		var modalInformanteAgregar = $('#modalInformante');
		var modalInformanteDetalle = $('#modalInformanteShow');
		var modalDesaparecidoFamiliar = $('#modalDesaparecidoFamiliar');
		var bodyModalInformante = $('#modal-body-informante');
		var modalBody = $('#modal-body');
		var modalFooter = $('.modal-footer');
        var btnLimpiar = $('#btnLimpiar');
        var telefono2 = $('#telefono2');
        
        
        var valueCamposTelefono = function(tipoTel, lada, telefono, ext) {
                                 console.log("valor de los campos telefono");

        }

        /*$('.nav-link').click(function(e){
        	 e.preventDefault();
        	 console.log('Evitamos el redireccionamiento');
        })*/

		var addCamposTelefono = function(tipoTel = null, lada=null, telefono=null, ext=null) {
                        
			var lada1 = $("#lada").val();
			console.log(lada1);
            $("#telefono2").append('<div class="row"><div class="form-group col-md-2">{!! Form::label ("tipoTelefono","Tipo de telefono:") !!}	            {!! Form::select ("tipoTelefono[]", $tiposTelefonos,"'+tipoTel+'",["class" => "form-control","id" => "tipoTelefono[]"])!!} </div> <div class="form-group col-md-2">                                             {!! Form::label ("lada","Lada:") !!}	                                    {!! Form::text ("lada[]",old(""),["class" => "form-control lada","id" =>"lada[]"])!!} </div>  <div class="form-group col-md-4">                                                                {!! Form::label ("telefonos","Número:") !!}                    {!! Form::text ("telefonos[]",old("'+telefono+'"),["class" => "form-control mayuscula valid","data-validation" => "required","data-validation-error-msg-required" => "El campo es requerido","id" => "telefonos[]"] )!!} </div>    <div class="form-group col-md-1">                                              {!! Form::label ("ext","Ext:") !!}                                        {!! Form::text ("ext[]",old("'+ext+'"), ["class" => "form-control mayuscula","id" => "ext[]"] )!!} </div> </div>');
             var otrasLadas = document.getElementsByClassName("lada");
		    otrasLadas[contador].value = lada1;
		    contador = contador + 1;
		    console.log(contador);
            $("input[name='telefonos[]']").mask('(000) 000 0000');
		}; 
		
		btnAgregarTelefono.click(function(e){
			addCamposTelefono(tipoTel = null, lada=null, telefono=null, ext=null);
		});
	
		
		$('#informante').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red',
			increaseArea: '20%' // optional
		});

		$('#notificaciones').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red',
			increaseArea: '20%' // optional
		});

		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-warning btn-sm" id="editInformante"><i class="fa fa-edit"></i>&nbsp;Editar</button>';			
			return [btn].join('');
		};

		var formatCheckInformante = function(value, row, index){
			icon = '';
			if (row.informante) {
				icon = '<i class="fa fa-check">'
			}

			return [icon].join('');
		}

		var formatCheckNotificaciones = function(value, row, index){
			icon = '';
			if (row.notificaciones) {
				icon = '<i class="fa fa-check">'
			}

			return [icon].join('');
		}

		window.operateEvents = {
			'click #editInformante': function (e, value, row, index) {
                var btnEditarInformante = $('#btnEditarInformante');
				
				$('.modal-body div.has-danger').removeClass('has-danger');
				$('.form-control-feedback').empty();

				$("#nombres").val(row.nombres);
				$("#primerAp").val(row.primerAp);
				$("#segundoAp").val(row.segundoAp);
				$('select#idParentesco option[value="'+row.idParentesco+'"]').attr("selected",true);
				$("#otroParentesco").val(row.otroParentesco);
				$('select#idNacionalidad option[value="'+row.idNacionalidad+'"]').attr("selected",true);
				$("#otroDocIdentidad").val(row.otroDocIdentidad);
				$("#numDocIdentidad").val(row.numDocIdentidad);
				$('select#tipoDireccion option[value="'+row.tipoDireccion+'"]').attr("selected",true);
				$("#calle").val(row.calle);
				$("#numExterno").val(row.numExterno);
				$("#numInterno").val(row.numInterno);
				$('select#idEstado option[value="'+row.idEstado+'"]').attr("selected",true);

				$.getJSON(routeIndex+'/get_municipios/'+row.idEstado)
				.done(function(data){					
					idSelect = row.idMunicipio;
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

				$.getJSON(routeIndex+'/get_localidades/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idLocalidad;
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

				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idColonia;
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

				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idCodigoPostal;
					selectedGeneral = $('#idCodigoPostal');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.codigoPostal+'</option>';
						selectedGeneral.append(optionselect);
					});
				});
                                            
				telefonos = $.parseJSON(row.telefonos)
                var etiqueta2 = 0;
                console.log("Aqui los telefonos:");
				//console.log(telefonos.length);
                
                informanteTele2 = $("input[name='telefonos[]']");
                
                for ($t =1; $t < telefonos.length; $t++ ){
                    
                    if (telefonos.length > informanteTele2.length ){
                        addCamposTelefono(tipoTel = null, lada=null, telefono=null, ext=null);
                    }                   
                    
                    
                }
                var informanteTipo = $("select[name='tipoTelefono[]']");
                var informanteLada = $("input[name='lada[]']");
                var informanteTele = $("input[name='telefonos[]']");
                var informanteExt = $("input[name='ext[]']");
				$.each(telefonos, function(key, value){
                    //console.log(row.lenght);
					console.log(value.telefono);
                    informanteTipo[etiqueta2].value = value.tipoTel;
                    informanteLada[etiqueta2].value = value.lada;
                    informanteTele[etiqueta2].value = value.telefono;
                    informanteExt[etiqueta2].value = value.ext;
                    etiqueta2 = etiqueta2 +1;
                    
                    
				})

				//$('select#tipoTelefono option[value="'+telefonos.tipoTel+'"]').attr("selected",true);
				//$('select#lada option[value="'+telefonos.lada+'"]').attr("selected",true);
				//$("#telefonos").val(telefonos.telefono);
				//$("#ext").val(telefonos.ext);
				
				$("#correoElectronico").val(row.correoElectronico);
				if (row.informante == 0) {
					$("input#informante").iCheck('uncheck');
				}

				if (row.notificaciones == 0) {
					$("input#notificaciones").iCheck('uncheck');
				}                
                
				//modalFooter.empty();
                	$("#btnEditarInformante").show();
					$("#btnGuardarInformante").hide();
                    
                $("#btnEditarInformante").val(row.idDesaparecido);
                
                
            //btnEditarInformante.value = row.idDesaparecido;
            
				//modalFooter.append('<button type="button" class="btn btn-dark" id="btnEditarInformante" value="'+row.idDesaparecido+'"><i class="fa fa-save"></i> EDITAR</button>		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>');

				modalInformanteAgregar.modal('show');
			}
		}

		table.bootstrapTable({				
			url: routeIndex+'/get_informantes/{!! $cedula->id !!}',
			columns: [{					
				field: 'nombres',
				title: 'Nombres',
			}, {					
				field: 'primerAp',
				title: 'Primer apellido',
			}, {					
				field: 'segundoAp',
				title: 'Segundo apellido',
			}, {				
				title: 'Informante',
				formatter: formatCheckInformante,
			}, {				
				title: 'Notificaciones',
				formatter: formatCheckNotificaciones,
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})

		btnAgregarInformante.click(function(e){
			$("input#notificaciones").iCheck('check');
			$("input#informante").iCheck('check');
			$("#formDesaparecido")[0].reset();
			$("#otro_doc").hide();
			$('#otro_parent').hide();
			$('#idMunicipio').empty();
			$("#idLocalidad").empty();
			$("#idColonia").empty();
			$("#idCodigoPostal").empty();
            $("#telefono2").empty();
             $("#lada").empty();
            
            //$("#telefono2").remove();
            
            $("input[name='telefonos[]']").mask('(000) 000 0000');
			//$("#otroDocIdentidad").ocultar
			//otroParentesco
            
            $("#btnEditarInformante").hide();
			$("#btnGuardarInformante").show();
			$("#lada").val("(+52)-");

			$('.modal-body div.has-danger').removeClass('has-danger');
			$('.form-control-feedback').empty();
            
			modalInformanteAgregar.modal('show');

            $( "#modalInformante" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });
		})
        
        btnLimpiar.click(function(){
          $('#modalInformante').find('form')[0].reset();
          $('#modalInformante').removeData('modal');

        })
        
		btnGuardarInformante.click (function(){
			
			var dataString = {
				nombres : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				idParentesco : $("#idParentesco").val(),
				otroParentesco : $("#otroParentesco").val(),
				idNacionalidad : $("#idNacionalidad").val(),
				idDocumentoIdentidad : $("#idDocumentoIdentidad").val(),
				otroDocIdentidad : $("#otroDocIdentidad").val(),
				numDocIdentidad: $("#numDocIdentidad").val(),
				tipoDireccion: $("#tipoDireccion").val(),
				calle: $("#calle").val(),
				numExterno: $("#numExterno").val(),
				numInterno: $("#numInterno").val(),
				idEstado: $("#idEstado").val(),
				idMunicipio: $("#idMunicipio").val(),
				idLocalidad: $("#idLocalidad").val(),
				idColonia: $("#idColonia").val(),
				idCodigoPostal: $("#idCodigoPostal").val(),
				tipoTelefono: $("select[name='tipoTelefono[]']").map(function(){return $(this).val();}).get(),
				lada: $("input[name='lada[]']").map(function(){return $(this).val();}).get(),				
				telefono : $("input[name='telefonos[]']").map(function(){return $(this).val();}).get(),				
				ext: $("input[name='ext[]']").map(function(){return $(this).val();}).get(),
				correoElectronico: $("#correoElectronico").val(),
				informante: $("input#informante:checked").val(),
				notificaciones: $("input#notificaciones:checked").val(),
				idCedula: $("#idCedula").val(),
			};

			$.ajax({
				type: 'POST',
				url: routeInformante,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalInformanteAgregar.modal('hide');
					table.bootstrapTable('refresh');
                    modalInformanteAgregar.find('form')[0].reset();
                    modalInformanteAgregar.removeData('modal');
                    
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

		modalFooter.on('click', '#btnEditarInformante', function(){

			var dataString = {
				nombres : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				idParentesco : $("#idParentesco").val(),
				otroParentesco : $("#otroParentesco").val(),
				idNacionalidad : $("#idNacionalidad").val(),
				idDocumentoIdentidad : $("#idDocumentoIdentidad").val(),
				otroDocIdentidad : $("#otroDocIdentidad").val(),
				numDocIdentidad: $("#numDocIdentidad").val(),
				tipoDireccion: $("#tipoDireccion").val(),
				calle: $("#calle").val(),
				numExterno: $("#numExterno").val(),
				numInterno: $("#numInterno").val(),
				idEstado: $("#idEstado").val(),
				idMunicipio: $("#idMunicipio").val(),
				idLocalidad: $("#idLocalidad").val(),
				idColonia: $("#idColonia").val(),
				idCodigoPostal: $("#idCodigoPostal").val(),
				tipoTelefono: $("select[name='tipoTelefono[]']").map(function(){return $(this).val();}).get(),
				lada: $("input[name='lada[]']").map(function(){return $(this).val();}).get(),				
				telefono : $("input[name='telefonos[]']").map(function(){return $(this).val();}).get(),				
				ext: $("input[name='ext[]']").map(function(){return $(this).val();}).get(),
				correoElectronico: $("#correoElectronico").val(),
				informante: $("input#informante:checked").val(),
				notificaciones: $("input#notificaciones:checked").val()		 					
			};

			idDesaparecido = $("#btnEditarInformante").val();

			$.ajax({
				type: 'PUT',
				url: routeInformante+'/'+idDesaparecido,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalInformanteAgregar.modal('hide');
					table.bootstrapTable('refresh');
                    //telefono2.remove();
				},
				error: function(data) {
					console.log(data);
				}
			});

		})
	})
</script>
@endsection
