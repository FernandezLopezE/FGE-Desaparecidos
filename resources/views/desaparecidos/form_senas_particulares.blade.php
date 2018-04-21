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
					
				</div>
			</div>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col-2">
					{!! Form::label ('nombreTamano','Tamaño de los dientes:') !!}
					{!! Form::select ('nombreTamano',$nombreTamano, '', ['class' => 'form-control', 'id' => 'nombreTamano'])!!}	
				</div>
				<div class="col-2">
					{!! Form::label ('tamaño','Dientes completos:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamano'] ) !!}
				</div>
				<div class="col-4">
					{!! Form::label ('tamaño','Tuvo atención odontologíca:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamano'] ) !!}
				</div>
				<div class="col-4">
					{!! Form::label ('tamaño','Tiene información del dentista:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamano'] ) !!}
				</div>
			</div>
			<hr>
			<h5>Datos del dentista</h5>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('nombres','Nombre del dentista:') !!}
					{!! Form::text ('nombres',old('nombres'), ['class' => 'form-control mayuscula', 'id' => 'nombres',] )!!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('primerAp','Primer apellido:') !!}
					{!! Form::text ('primerAp',old('primerAp'), ['class' => 'form-control mayuscula', 'id' => 'primerAp',] )!!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('segundoAp','Segundo apellido:') !!}
					{!! Form::text ('segundoAp',old('segundoAp'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp',] )!!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-8">
					{!! Form::label ('empresa','Empresa  ó institución:') !!}
					{!! Form::text ('empresa',old('empresa'), ['class' => 'form-control mayuscula', 'id' => 'empresa',] )!!}
				</div>	
				<div class="col">
					{!! Form::label ('telefono','Teléfono de contacto:') !!}
					{!! Form::text ('telefono',old('telefono'), ['class' => 'form-control mayuscula', 'id' => 'telefono',] )!!}
				</div>	
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::label ('direccion','Dirección/referencias de ubicación:') !!}
					{!! Form::textarea ('direccion',old('direccion'), ['class' => 'form-control mayuscula', 'id' => 'direccion', 'rows' => '3'] )!!}
				</div>
			</div><hr>
			
			<h5>¿Qué tipo de tratamiento le realizarón?</h5>
			<div class="form-group row">
				<div class="col">
					{!! Form::checkbox('AMALGAMA', '2') !!}
					{!! Form::label ('AMALGAMA','AMALGAMA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('BLANQUEAMIENTO DENTAL', '3') !!}
					{!! Form::label ('BLANQUEAMIENTO DENTAL','BLANQUEAMIENTO DENTAL') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('BRACKETS', '4') !!}
					{!! Form::label ('BRACKETS','BRACKETS') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('CARILLA', '5') !!}
					{!! Form::label ('CARILLA','CARILLA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('CORONA ESTETICA', '6') !!}
					{!! Form::label ('CORONA ESTETICA','CORONA ESTETICA') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					{!! Form::checkbox('ENDODONCIA', '7') !!}
					{!! Form::label ('ENDODONCIA','ENDODONCIA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('IMPLANTE', '8') !!}
					{!! Form::label ('IMPLANTE','IMPLANTE') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('OBTURACIÓN TEMPORAL', '9') !!}
					{!! Form::label ('OBTURACIÓN TEMPORAL','OBTURACIÓN TEMPORAL') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('PROTESIS FINA', '10') !!}
					{!! Form::label ('PROTESIS FINA','PROTESIS FINA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('PROTESIS REMOVIBLE', '11') !!}
					{!! Form::label ('PROTESIS REMOVIBLE','PROTESIS REMOVIBLE') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					{!! Form::checkbox('PROTESIS TOTAL', '12') !!}
					{!! Form::label ('PROTESIS TOTAL','PROTESIS TOTAL') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('RESINA', '13') !!}
					{!! Form::label ('RESINA','RESINA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('RETENEDOR', '14') !!}
					{!! Form::label ('RETENEDOR','RETENEDOR') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('SELLADOR FS', '15') !!}
					{!! Form::label ('SELLADOR FS','SELLADOR FS') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('OTRO', '15') !!}
					{!! Form::label ('OTRO','OTRO') !!}
				</div>
			</div><hr>
			
			<h5>Falta de dientes</h5>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('perdio','¿Perdio algún diente?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'perdio'] ) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('nombreDiente','¿Cúal diente?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreDiente'] ) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('nombreDiente','¿Cómo lo perdio?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreDiente'] ) !!}
				</div>
			</div><hr>
			<!--
			<div class="form-group row">
				<img src="/images/esquema-dental.jpg" alt="" id="imagenPrueba"> 
			</div>	
			-->
			<h5>Higiene bucal</h5>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('nombreDiente','Presenta buena higiene bucal') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreDiente'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('nombreDiente','Describa') !!}
					{!! Form::text ('telefono',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'Describa',] )!!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('nombreDiente','¿Tiene caries?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreDiente'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('nombreDiente','¿En dónde? Describa') !!}
					{!! Form::text ('telefono',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'Describa',] )!!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('nombreDiente','¿Tiene abscesos?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreDiente'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('nombreDiente','¿En dónde? Describa') !!}
					{!! Form::text ('telefono',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'Describa',] )!!}
				</div>
			</div>

			<div class="form-group">
				<div>
					{!! Form::label ('duda','El desaparecido presentaba:') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('SARRO', 'SARRO') !!}
					{!! Form::label ('SARRO','SARRO') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('GINGIVITIS', 'GINGIVITIS') !!}
					{!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('PERIODONTITIS', 'PERIODONTITIS') !!}
					{!! Form::label ('PERIODONTITIS','PERIODONTITIS') !!}
				</div>
			</div><hr>

			<div class="form-group row">
				<div>
					
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

        //mostrar imagen de nombre de dientes
        $('#perdio').click(function(event) {
        	//var dientes = $('#perdio').val();

        	
        });
		
   	});
   
</script>
@endsection

