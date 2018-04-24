<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
  <script type ="text/javascript" src ="/js/jquery.imagemapster.js"></script>
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

	
	<div class="form-group row">
		<div class="col-8">
			<img src="/images/esquema-dental.jpg" width="560" height="474" border="0" usemap="#dientes" id="dientes" />
		</div>
		<div class="col-4">
			{!! Form::label ('seleccion','Diente seleccionado') !!}
			<input type="text" class="form-control" id="mostrar">
			<p></p>
		</div>
		
	</div>	

	<map name="dientes">
		
		

		<area shape="poly" coords="71,212,79,201,81,190,78,177,46,169,37,178,36,201,32,210,48,216,65,214" value="PRIMER MOLAR SUPERIOR IZQUIERDO" nohref="nohref" id="diente26" />
		<area shape="poly" coords="57,135,66,134,70,135,76,138,81,141,84,143,87,151,87,156,84,163,78,168,71,172,58,170,49,168,43,160,43,151,46,143,50,140" value="SEGUNDO PREMOLAR SUPERIOR IZQUIERDO"  nohref="nohref" id="diente25" />
		<area shape="poly" coords="70,103,80,99,86,101,90,103,92,107,95,114,93,124,90,129,87,129,81,134,77,134,71,133,67,131,60,126,59,120,60,110,66,104,68,103" value="PRIMER PREMOLAR SUPERIOR IZQUIERDO"  nohref="nohref" id="diente24" />
		<area shape="poly" coords="92,79,102,74,108,74,111,83,114,90,119,103,113,116,104,115,97,112,94,107,91,104,84,97,82,92,82,87,94,77" value="CANINO SUPERIOR IZQUIERDA"  nohref="nohref" />
		<area shape="poly" coords="110,66,131,57,137,56,144,59,149,71,148,85,148,94,137,99,129,99,119,92,114,89,112,84,110,74,111,68" value="INCISIVO LATERAL SUPERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="147,53,163,50,175,49,179,50,183,59,183,67,182,75,177,86,172,91,169,93,164,91,159,89,156,85,157,82,148,78,148,69,148,64,146,55" value="INCISIVO CENTRAL SUPERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="193,49,200,51,212,53,216,55,219,56,222,62,219,65,216,69,211,83,204,91,201,93,198,94,196,92,195,91,192,91,187,88,185,85,181,80,183,73,184,67,184,62,183,56,182,52,185,51,187,50" value="INCISIVO CENTRAL SUPERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="262,77,269,79,277,82,280,84,283,89,286,96,286,100,281,103,273,108,268,112,261,115,256,115,250,115,249,112,251,101,250,94,250,88,252,86,255,82,257,79" value="CANINO SUPERIOR DERECHA"  nohref="nohref" />
		<area shape="poly" coords="282,105,287,105,295,105,301,112,304,118,304,127,300,132,290,135,281,137,272,138,266,137,264,134,264,124,268,121,272,115,276,113,280,105" value="PRIMER PREMOLAR SUPERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="295,137,312,142,316,147,318,156,318,163,314,169,309,171,298,172,292,173,286,174,281,173,275,169,275,164,276,157,276,150,280,146,285,142,290,138" value="SEGUNDO PREMOLAR SUPERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="325,176,330,193,332,204,328,213,319,219,314,220,306,220,292,220,289,217,285,208,284,200,284,193,284,188,288,183,294,175,298,174,303,172,311,172" value="PRIMER MOLAR SUPERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="37,293,36,300,39,311,47,330,58,325,69,324,82,318,83,313,81,302,76,287,73,283,67,280,49,280,37,292" value="PRIMER MOLAR INFERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="52,342,52,346,64,365,74,360,82,357,91,356,91,340,88,334,83,327,78,324,75,322,70,322,63,326,54,332,50,337" value="SEGUNDO PREMOLAR INFERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="68,374,67,381,73,392,94,391,103,382,105,375,106,368,104,364,102,359,97,357,92,357,87,357,80,357,71,363" value="PRIMER PREMOLAR INFERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="86,399,91,392,96,388,101,386,111,386,119,388,120,394,118,408,115,411,109,414,104,419,96,421,91,419,86,417,84,413,85,402" value="CANINO INFERIOR IZQUIERDA"  nohref="nohref" />
		<area shape="poly" coords="116,416,119,409,130,401,136,401,140,403,141,411,142,421,141,430,139,437,138,441,131,441,120,440,115,438,113,436,114,418,115,418" value="INCISIVO LATERAL INFERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="156,419,162,411,166,411,171,415,176,416,174,431,174,437,174,447,166,450,158,450,151,450,146,444,145,438,146,429,162,413" value="INCISIVO CENTRAL INFERIOR IZQUIERDO"  nohref="nohref" />
		<area shape="poly" coords="191,413,205,435,207,445,202,447,190,451,184,450,179,447,180,440,181,429,181,423,181,414,188,413" value="INCISIVO CENTRAL INFERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="215,404,224,410,229,421,234,432,230,438,217,445,211,442,206,433,205,418,206,409,210,404" value="INCISIVO LATERAL INFERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="233,411,244,431,248,430,259,423,265,417,267,411,266,404,263,393,255,394,244,390,238,389,233,396" value="CANINO INFERIOR DERECHA"  nohref="nohref" />
		<area shape="poly" coords="246,372,252,384,253,388,265,394,274,399,285,394,285,382,283,376,281,371,277,368,273,364,269,361,265,361,255,360,248,367" value="PRIMER PREMOLAR INFERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="264,352,280,364,286,367,298,367,303,362,305,353,303,340,301,335,297,333,290,332,282,332,274,330,266,336" value="SEGUNDO PREMOLAR INFERIOR DERECHO"  nohref="nohref" />
		<area shape="poly" coords="276,323,300,331,310,333,314,330,315,325,318,316,321,306,320,297,315,291,307,288,299,287,293,287,286,289,280,292,275,296,274,310,276,322" value="PRIMER MOLAR INFERIOR DERECHA"  nohref="nohref" />
		<area shape="poly" coords="215,80,216,91,219,100,229,99,239,94,250,86,255,82,256,76,251,66,243,61,235,59,224,58,221,58,220,64,217,67,217,68" value="INCISIVO LATERAL SUPERIOR DERECHO"  nohref="nohref" />
	</map>

<body>
 
<div id="log"></div>
 
<script>
	 var diente26, diente25, diente24;

     diente26 = $('#diente26').attr("value");
    $('#diente26').click(function(event) {
    	//alert("El valor es: "+$('#diente2').attr("value"));    
    	$("#mostrar").val(diente26);

	});

     diente25 = $('#diente25').attr("value");
    $('#diente25').click(function(event) {
    	$("#mostrar").val(diente25);
	});

	diente24 = $('#diente24').attr("value");
    $('#diente24').click(function(event) {
    $("#mostrar").val(diente24);
	});


</script>

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

