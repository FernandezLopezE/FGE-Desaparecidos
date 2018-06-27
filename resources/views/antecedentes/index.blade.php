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
@include('navs.navs_datos',array('activar' => 'antecedente'))
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarAntecedente">
	Agregar
</button>
<div class="card-body bg-white">
	
	<table id="tableAntecedentes" ></table>
	@include('antecedentes.modals.modal_antecedente')
</div>

@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#tableAntecedentes');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeAntecedente = '{!! route('antecedentes.index') !!}';
		var btnAgregarAntecedente = $('#btnAgregarAntecedente');
		var btnGuardarAntecedente = $('#btnGuardarAntecedente');
		var modalAntecedentes = $('#modalAntecedentes');
		var modalFooter = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}'
        var btnLimpiar = $('#btnLimpiar');
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark pull-left" id="editAnte">Editar</button>';	
			
			return [btn].join('');
		};

		window.operateEvents = {
			'click #editAnte': function (e, value, row, index) {					
				console.log(row);
				
				if(row.fecha){
					fechaAct = row.fecha.split('-');
					ActFecha = fechaAct[1]+'/'+fechaAct[0];
				}else{
					ActFecha = '';
				}
		
				$('#idDesaparecido').val(row.id);
				$('#mesAnio').val(row.fecha);
				$('#observaciones').val(row.observaciones);
				$('#idDelito').val(row.idDelito);
				$('#idCentroReclusion').val(row.idCentroReclusion);
				$("#btnEditarAntecedente").show();
				$("#btnGuardarAntecedente").hide();
                $("#btnEditarAntecedente").val(row.id);
				modalAntecedentes.modal('show');
			}
		}

		table.bootstrapTable({				
			url: routeIndex+'/get_antecedentes/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'fecha',
				title: 'Fecha',
			}, {					
				field: 'observaciones',
				title: 'Observaciones',
			}, {				
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents,
			}]			
		})

		btnAgregarAntecedente.click(function(e){
			$('#formDesaparecido')[0].reset();
			$("#btnEditarAntecedente").hide();
			$("#btnGuardarAntecedente").show();
			modalAntecedentes.modal('show');
	        $( "#modalAntecedentes" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });
		})
        
        btnLimpiar.click(function(){
          	$('#modalAntecedentes').find('form')[0].reset();
          	$('#modalAntecedentes').removeData('modal');
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
		modalFooter.on('click', '#btnEditarAntecedente', function(){
			var dataString = {
				mesAnio : $("#mesAnio").val(),
				idDelito : $("#idDelito").val(),
				idCentroReclusion : $("#idCentroReclusion").val(),
				observaciones : $("#observaciones").val(),
			};
			idAntecedente = $("#btnEditarAntecedente").val();
			$.ajax({
				type: 'PUT',
				url: routeAntecedente+'/'+idAntecedente,
				data: dataString,
				dataType: 'json',
				success: function(data){
					modalAntecedentes.modal('hide');
					table.bootstrapTable('refresh');
				},
				error: function(data){
					var errors = data.responseJSON;
					console.log(data);
				}
			});
		})
		$('#mesAnio').change(function(){
		 	console.log($(this).val());  
			from = $("#mesAnio").val().split("/");
			fechaNacimiento = from[2] + "-" + from[1];
			fechaEnviada = Date.parse(fechaNacimiento);	   
			fechaActual= new Date();
			edadMinima = (fechaActual.getFullYear() - 100);	   
			if ((fechaEnviada > fechaActual) || (from[2]<edadMinima))
			{
				$("#fechaNacimiento").val("");
				$("#edadExtravio").val("");
			}
		});
	})

</script>
@endsection