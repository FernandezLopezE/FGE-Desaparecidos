@extends('layouts.app_uipj')

@section('content')
	<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Descripción física
		
		</h5>
	</div>
	<div class="card-body">	
		<div class="row">
  			<div class="col-lg-3">
  			{!! Form::label ('desaparecidoEstatura','Estatura:') !!}
				{!! Form::text ('estatura',
								old('estatura'),
								['class' => 'form-control sinEnter soloNumeros',
										'placeholder' => 'Ingrese la estura en cm',
										'id' => 'estatura', 'max' => '3'
								] )!!}
		  	</div>
		  	<div class="col-lg-3">
				{!! Form::label ('desaparecidoPeso','Peso:') !!}
				{!! Form::text ('peso',
									old('peso'),
									['class' => 'form-control sinEnter soloNumeros',
										'placeholder' => 'Ingrese el peso en kg',
										'id' => 'peso',
									] )!!}
		  	</div>
		  	<div class="col-lg-3">
					{!! Form::label ('complexion','Complexión:') !!}
					{!! Form::select ('complexion',
									$complexiones,
									'',
									['class' => 'form-control', 'id' => 'complexion'] )!!}
					
			</div>

			<div class="col-lg-3">
					{!! Form::label ('colorPiel','Color piel:') !!}
					{!! Form::select ('colorPiel',
										$coloresPiel,
										'',
										['class' => 'form-control',
											'id' => 'colorPiel',
										] )!!}						
			</div>
  		</div>
		<hr>
		<br>
		<div>				
			<button type="button" class="btn btn-dark pull-right"  id="nuevaParteCuerpo">Agregar</button>
		</div>
		<br>
	</div>
	<div class="card-body">
			@include('includes.modalDescripcionFisica')
			<table id="tableDescripcionFisica" ></table>
		</div>
</div>
  	
</div>

@endsection	

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		var otraP;
		var otraM;

		$('#nuevaParteCuerpo').click(function(e){
			$('#modalDescripcionFisica').modal('show');
			$('#btnActualizarDF').hide();
			$('#btnDescripcionFisica').show();
		});

	$("#idSubParticularidades").change(function() {
			otraP = $('#idSubParticularidades').val();
			//console.log(otraP);
			if (otraP >=77 && otraP <= 88) {
				$("#otro_Particularidad").show();
			}else{
				$("#otro_Particularidad").hide();
			}
		});

	$("#idSubModificaciones").change(function() {
			otraM = $('#idSubModificaciones').val();

			if (otraM ==13 || otraM == 20 || otraM == 26 || otraM == 33|| otraM == 36|| otraM == 40 || otraM == 47|| otraM == 51|| otraM == 53|| otraM == 60) {
				$("#otra_Modificacion").show();
			}else{
				$("#otra_Modificacion").hide();
			}
		});






var tableDescripcion = $('#tableDescripcionFisica');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editDescripcionFisica"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
		/*window.operateEvents = {
			'click #editCalzado': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idTipo').val(row.cTipo);
				$('#otroCalzado').val(row.oCalzado);
				$('#idColor').val(row.cColor);
				$('#otroColorCalzado').val(row.ocCalzado);
				$('#modeloCalzado').val(row.modelo);
				$('#idMarca').val(row.cMarca);
				$('#otraMarca').val(row.oMarca);
				$('#calzadoTalla').val(row.talla);
				$("#modalCalzado").modal("show");
			}
		}
		$('#nuevoVestimenta').click(function(e){
			$('#modalGeneral').modal('show');
		})*/
		tableDescripcion.bootstrapTable({				
			url: routeIndex+'/get_descripcion/1',
			columns: [{					
				field: 'nombre',
				title: 'Parte del cuerpo',
			}, {
				field: 'lado',
				title: 'Lado',									
			}, {
				field: 'nombre',
				title: 'Particularidades',									
			}, {					
				field: 'nombre',
				title: 'Modificaciones',
			}, {					
				field: 'observaciones',
				title: 'Observaciones',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				//events: operateEvents
			}]				
		})
	//Fin de vista de datos de calzado
	});


	//Obtener particularidades
	$('#idPartesCuerpo').on('change', function(){
        $("#idSubParticularidades").empty();
        var idPartesCuerpo = $(this).val();
        if(idPartesCuerpo) {
            
            $.ajax({
                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idSubParticularidades").empty();
                    $.each(data, function(key, value){                        

                        $("#idSubParticularidades").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
            });
        }
    });

	</script>
@endsection