<head>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>  
</head>
@extends('layouts.app_uipj')

@section('content')
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="card-title">Señas particulares de la persona desaparecida</h5>	
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary pull-right" id="senasPArticulares"><i class="fa fa-plus"></i> AGREGAR</button>
				</div>
			</div>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-3">
					{!! Form::label ('sena','Selecciona la seña particular:') !!}	
				  	<div class="input-group">
					  <select class="custom-select" id="senaP">
					    <option selected>Selecciona aquí...</option>
					    <option value="1">CICATRIZ QUIRÚRGICA</option>
					    <option value="2">CICATRIZ TRAUMÁTICA</option>
					    <option value="3">HERIDA DE CICATRIZACIÓN</option>
					    <option value="5">QUEMADURA</option>
					    <option value="6">AMPUTACIONES</option>
					    <option value="7">DEFORMACIONES</option>
					    <option value="8">ACORTAMIENTO DE PIERNA</option>
					    <option value="9">CALLOSIDADES</option>
					    <option value="10">LUNARES</option>
					    <option value="11">PECAS</option>
					    <option value="12">NEVO</option>
					    <option value="13">VERRUGA</option>
					    <option value="14">MANCHAS</option>
					    <option value="15">VELLO CORPORAL</option>
					    <option value="16">ESTRÍAS</option>
					    <option value="17">UÑAS MORDIDAS</option>
					    <option value="18">UÑAS ENCARGADAS</option>
					    <option value="19">UÑAS LARGAS</option>
					    <option value="20">UÑAS PINTADAS</option>
					    <option value="21">UÑAS POSTIZAS</option>
					    <option value="22">AUSENCIA DE UÑAS</option>
					    <option value="23">TATUAJES</option>
					    <option value="24">OTRO</option>
					  </select>
					</div>
	            </div>
	            <div class="col-lg-1">
	            	{!! Form::label ('cantidad','Cantidad:') !!}
	            	{!! Form::number ('cantidad',
									old('cantidad'),
									['class' => 'form-control mayuscula',
										'id' => 'cantidad',
										'min' => "0",
										 'max' => "999"
									] )!!}
	            </div>
	            <div class="col-lg-2">
	            	{!! Form::label ('ubicacion','Ubicación:') !!}
	            	<div class="input-group">
					    <select class="custom-select" id="ubicacion">
					        <option value="1">ABDOMEN</option>
					        <option value="2">ANTEBRAZO</option>
					        <option value="3">BRAZO</option>
					        <option value="4">CADERA</option>
					        <option value="5">CANILLA/ESPINILLA</option>
					        <option value="6">CEJA</option>
					        <option value="7">CODO</option>
					        <option value="8">CUELLO</option>
					        <option value="9">DEDO</option>
					        <option value="10">ESPALDA</option>
					        <option value="11">FRENTE</option>
					        <option value="12">HOMBRO</option>
					        <option value="13">LABIO</option>
					        <option value="14">MANO</option>
					        <option value="15">MEJILLA</option>
					        <option value="16">MENTÓN</option>
					        <option value="17">MUÑECA</option>
					        <option value="18">MUSLO</option>
					        <option value="19">NALGA</option>
					        <option value="20">NARIZ</option>
					        <option value="21">NUCA</option>
					        <option value="22">OMBLIGO</option>
					        <option value="23">OREJA</option>
					        <option value="24">PALMA</option>
					        <option value="25">PANTORILLA</option>
					        <option value="26">PECHO</option>
					        <option value="27">PIE</option>
					        <option value="28">PIERNA</option>
					        <option value="29">RODILLA</option>
					        <option value="30">TALÓN</option>
					        <option value="31">TOBILLO</option>
					        <option value="32">DORSO</option>
					        <option value="33">OTRO</option>
					    </select>
					</div>
	            </div>
	            <div class="col">
	            	{!! Form::label ('caracteristicas','Caracteristicas:') !!}
	            	{!! Form::text ('caracteristicas',
									old('caracteristicas'),
									['class' => 'form-control mayuscula',
										'id' => 'caracteristicas'
									] )!!}
	            </div>
	        </div>

	        <div class="form-group">
	        	<div class="col" style="display:none" id="mostrarOtro">
					{!! Form::label ('','') !!}
	            	{!! Form::text ('otraSena',
									old('otraSena'),
									['class' => 'form-control mayuscula',
										'placeholder' => 'Escribe otra seña particular',
										'id' => 'otraSena',
									] )!!}
	            </div>
			</div><hr>
			
			<table id="table_senas" ></table>
			
		</div>
	</div>

@endsection

@section('scripts')
<script type="text/javascript">
   $(document).ready(function(){
   	var otraS;
   	var senasPArticulares = $('#senasPArticulares');
   	var tableSenas = $('#table_senas');
   		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editPrenda"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};

        $('#senas').select2();
   		$('#ubicacion').select2();
      	

   		$('#senas').change(function() {
   			otraS = $('#senas').val();

   			if (otraS==24) {
   				$('#mostrarOtro').show();
   			}else{
   				$('#mostrarOtro').hide();
   			}

   		});

   		
   		tableSenas.bootstrapTable({				
			//url: routeIndex+'/get_familiares/1',
			columns: [{					
				field: '',
				title: 'Seña particular',
			}, {					
				field: '',
				title: 'Cantidad',
			}, {					
				field: '',
				title: 'Ubicación',
			}, {				
				field: '',
				title: 'Caracteristicas',				
			}, {					
				title: 'Acciones',
				//formatter: formatTableActions,
				//events: operateEvents
			}]				
		})


		senasPArticulares.click (function(){
			
			var dataString = {
				senaP : $("#senaP").val(),
				cantidad : $("#cantidad").val(),
				ubicacion : $("#ubicacion").val(),
				caracteristicas : $("#caracteristicas").val(),
			};

			$.ajax({
				type: 'POST',
				url: '/desaparecido/store_informante',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					modalInformanteAgregar.modal('hide');
					table.bootstrapTable('refresh');							
				},
				error: function(data) {
					console.log(data);
				}
			});
		})
   	});	

</script>
@endsection

