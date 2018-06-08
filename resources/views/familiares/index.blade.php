@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
	.gi-3x{font-size: 2.5em;}


	}
</style>
	
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'familiar'))
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarFamiliar">
	Agregar
</button>

<div class="card-body bg-white">
	<table id="tableFamiliares" ></table>
	@include('familiares.modals.modal_familiar')
</div>



@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#tableFamiliares');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeFamiliar = '{!! route('familiar.index') !!}';
		var btnAgregarFamiliar = $('#btnAgregarFamiliar');
		var btnGuardarFamiliar = $('#btnGuardarFamiliar');
		var modalFamiliar = $('#modalFamiliar');
		var modalFooter = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}';
        var btnLimpiar = $('#btnLimpiar');        
		
		// Al momento de cargar la página valida el estado civil
		// si la persona tuvo o tiene una pareja.
		
		if($.inArray('{!! $desaparecido->idEdocivil !!}',[ '2','3','4','5','6']) >= 0){
			parentesco = '{!! $desaparecido->idEdocivil !!}';
			familiares = $.parseJSON('{!! $desaparecido->familiares !!}');
			pareja = false;
			$.each(familiares, function(key, value){
				console.log(value.idParentesco);
				if($.inArray(value.idParentesco,['3','4','5'])){
					pareja = true;
				}
			});
			if(!pareja){
				$('.modal-title').append('<div class="alert alert-info" role="alert"><h4>El estado civil de la persona no localizada es <strong>{!! $desaparecido->edocivil->nombre !!}</strong> ¿Desea agregar los datos de la pareja...?<h4></div>')
				modalFamiliar.modal('show');
			}
		}
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark btn-sm" id="edit">Editar</button>&nbsp;';			
			return [btn].join('');
		};

		window.operateEvents = {
			'click #edit': function (e, value, row, index) {
                var btnEditarInformante = $('#btnEditarInformante');     
				
				$('.modal-body div.has-danger').removeClass('has-danger');
				$('.form-control-feedback').empty();
				if(row.fechaNacimiento){
					fecha = row.fechaNacimiento.split('-');
                   	fechaNacimiento = fecha[2]+'/'+fecha[1]+'/'+fecha[0];	
				} else {
					fechaNacimiento = '';
				}

				$("#nombres").val(row.nombres);
				$("#primerAp").val(row.primerAp);
				$("#segundoAp").val(row.segundoAp);
				$("#fechaNacimiento").val(fechaNacimiento);
				$("#edad").val(row.edad);
				//$('select#idParentesco option[value="'+row.idParentesco+'"]').attr("selected",true);
                $('#idParentesco').val(row.idParentesco);
				//modalFooter.empty();
				$("#btnEditarFamiliar").show();
				$("#btnGuardarFamiliar").hide();
                    
                $("#btnEditarFamiliar").val(row.id);
				
				modalFamiliar.modal('show');
			}
		}
		
		table.bootstrapTable({				
			url: routeIndex+'/get_familiares/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'parentesco.nombre',
				title: 'Parentesco',
			}, {					
				field: 'nombres',
				title: 'Nombres',
			}, {					
				field: 'primerAp',
				title: 'Primer apellido',
			}, {					
				field: 'segundoAp',
				title: 'Segundo apellido',
			}, {
				title: 'Fecha de nacimiento',
				formatter: (value, row, index, field) => {
					if(row.fechaNacimiento){
						fecha = row.fechaNacimiento.split('-');
                    	return fecha[2]+'/'+fecha[1]+'/'+fecha[0];	
					} else {
						return '';
					}
					
                }
			}, {				
				field: 'edad',
				title: 'Edad',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]			
		})

		btnAgregarFamiliar.click(function(e){
			$('div.alert').remove();
			$('#formulario')[0].reset();
			$("#btnEditarFamiliar").hide();
			$("#btnGuardarFamiliar").show();
			$("#idParentesco").val(1);
			modalFamiliar.modal('show');
			/*$( "#modalFamiliar" ).sisyphus( {
				excludeFields: $('input[name=_token]')
			});*/
		})	
        
        btnLimpiar.click(function(){
          $('#modalFamiliar').find('form')[0].reset();
          $('#modalFamiliar').removeData('modal');

        })

		btnGuardarFamiliar.click (function(){
			
			var dataString = {
				nombres : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				fechaNacimiento : $("#fechaNacimiento").val(),
				edad : $("#edad").val(),
				idParentesco : $("#idParentesco").val(),
				idDesaparecido: idDesaparecido,
			};

			$.ajax({
				type: 'POST',
				url: routeFamiliar,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log('El dato es:'+data);
					modalFamiliar.modal('hide');
					table.bootstrapTable('refresh');
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

		modalFooter.on('click', '#btnEditarFamiliar', function(){			
			var dataString = {
				nombres : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				fechaNacimiento : $("#fechaNacimiento").val(),
				edad : $("#edad").val(),
				idParentesco : $("#idParentesco").val(),
			};
			idFamiliar = $("#btnEditarFamiliar").val();

			$.ajax({
				type: 'PUT',
				url: routeFamiliar+'/'+idFamiliar,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalFamiliar.modal('hide');
					table.bootstrapTable('refresh');
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

		 $('#fechaNacimiento').change(function(){
		 	console.log($(this).val());  
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
						   $('#edad').val(data);
				   },
				   
				});
			}
		});
	})

</script>
@endsection