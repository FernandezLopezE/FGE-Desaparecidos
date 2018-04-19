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
					<h5 class="card-title">SEÑAS PARTICULARES DE LA PERSONA DESAPARECIDA</h5>	
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary pull-right" id="senasPArticulares"><i class="fa fa-plus"></i> AGREGAR</button>
				</div>
			</div>
		</div>

		<div class="card-body">
			<form id="formSenas">
			<div class="form-group row">
				<div class="col-lg-3">
					{!! Form::label ('sena','Selecciona la seña particular:') !!}	
				  	{!! Form::select ('senasP',$senasParticulares,'1', ['class' => 'form-control', 'id' => 'senasParticulares'] )!!}
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
	            	{!! Form::select ('senasPartiUbica',$senasParticularesUbica,'1', ['class' => 'form-control', 'id' => 'senasParticularesUbica'] )!!}
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

	        <div class="form-group row">
	        	<div class="col" style="display:none" id="mostrarOtro">
					{!! Form::label ('','') !!}
	            	{!! Form::text ('otraSena',
									old('otraSena'),
									['class' => 'form-control mayuscula',
										'placeholder' => 'Escribe otra seña particular',
										'id' => 'otraSena',
									] )!!}

	            </div>
	            <div class="col" style="display:none" id="formOtraUbic">
					{!! Form::label ('','') !!}
	            	{!! Form::text ('otraUbic',
									old('otraUbic'),
									['class' => 'form-control mayuscula',
										'placeholder' => 'Escribe otra ubicación:',
										'id' => 'otraUbic',
									] )!!}
	            </div>
			</div><hr>
		</form>
			
			<table id="table_senas" ></table>
			
		</div>
	</div>

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="card-title">DATOS DENTALES</h5>	
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary pull-right" id="senasPArticulares"><i class="fa fa-plus"></i> AGREGAR</button>
				</div>
			</div>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('tamaño','Tamaño de los dientes:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'PEQUEÑOS' => 'PEQUEÑOS', 'MEDIANOS' => 'MEDIANOS', 'GRANDES' => 'GRANDES'), 'SIN INFORMACIÓN', ['class' => 'form-control', 'id' => 'tamano'] ) !!}
				</div>
				<div class="col-4">
					{!! Form::label ('tamaño','Los dientes estan completos:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamano'] ) !!}
				</div>
				<div class="col-4">
					{!! Form::label ('tamaño','Tuvo atención odontologíca:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamano'] ) !!}
				</div>
				<div class="col-12"><br>
					{!! Form::label ('tamaño','Nombre, dirección y teléfono del dentista que lo atendio:') !!}
					{!! Form::textarea ('datosExtra',old('datosExtra'), ['class' => 'form-control mayuscula', 'id' => 'datosExtra', 'rows' => '3'] )!!}
				</div>
			</div>
			
		</div>
	</div>

@endsection

@section('scripts')
<script type="text/javascript">
   $(document).ready(function(){
   	var otraS;
   	var idCedula = 1;
   	var id = 1;
   	var routeIndex = '{!! route('consultas.index') !!}';
   	var otraUbicacion;
   	var senasPArticulares = $('#senasPArticulares');
   	var tableSenas = $('#table_senas');
   		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-primary btn-xs edit" id="edit"><i class="fa fa-edit"></i>&nbsp;Editar</button>';
			
			return [btn].join('');
		};

        //$('#senasParticulares').select2();
   		//$('#senasParticularesUbica').select2();
      	

   		$('#senasParticulares').change(function() {
   			otraS = $('#senasParticulares').val();

   			if (otraS==25) {
   				$('#mostrarOtro').show();
   			}else{
   				$('#mostrarOtro').hide();
   			}
   		});

   		$('#senasParticularesUbica').change(function() {
   			otraUbicacion = $('#senasParticularesUbica').val();
   			
   			if (otraUbicacion==33) {
   				$('#formOtraUbic').show();
   			}else{
   				$('#formOtraUbic').hide();
   			}
   		});


   		
   		tableSenas.bootstrapTable({				
			url: routeIndex+'/get_senas/{!! $cedula->id !!}',
			columns: [{					
				field: 'nombreSena',
				title: 'Seña particular',
			}, {					
				field: 'cantidad',
				title: 'Cantidad',
			}, {					
				field: 'nombreUbicacion',
				title: 'Ubicación',
			}, {				
				field: 'caracteristicas',
				title: 'Caracteristicas',				
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				//events: operateEvents
			}]				
		})


		senasPArticulares.click (function(){
            
            var dataString = {
                senaP : $("#senasParticulares").val(),
                cantidad : $("#cantidad").val(),
                ubicacion : $("#senasParticularesUbica").val(),
                caracteristicas : $("#caracteristicas").val(),
                idCedula : 1,
            };
            $.ajax({
                type: 'POST',
                url: '/desaparecido/store_senas',
                data: dataString,
                dataType: 'json',
                success: function(data) {
                    tableSenas.bootstrapTable('refresh');
                    $('#formSenas')[0].reset();
                    
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
		
   	});

   //Limpiar los campos del formulario
   
</script>
@endsection

