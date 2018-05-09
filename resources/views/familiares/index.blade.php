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
			$('select#idParentesco option[value="'+parentesco+'"]').attr("selected",true);
			modalFamiliar.modal('show');
		}
		
		table.bootstrapTable({				
			url: routeIndex+'/get_familiares/{!! $desaparecido->id !!}',
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
				field: 'fechaNacimiento',
				title: 'Fecha de nacimiento',
			}, {				
				field: 'edad',
				title: 'Edad',
			}]			
		})

		btnAgregarFamiliar.click(function(e){
			modalFamiliar.modal('show');
	            $( "#modalFamiliar" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });
		})
        
        btnLimpiar.click(function(){
          $('#modalFamiliar').find('form')[0].reset();
          $('#modalFamiliar').removeData('modal');

        })

		btnGuardarFamiliar.click (function(){
			
			var dataString = {
				nombre : $("#nombres").val(),
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
					console.log(data);
				}
			});
		})

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
						   $('#edad').val(data);
				   },
				   
				});
			}
		});
	})

</script>
@endsection