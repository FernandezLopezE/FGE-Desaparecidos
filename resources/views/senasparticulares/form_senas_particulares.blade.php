<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
  <script type ="text/javascript" src ="/js/jquery.imagemapster.js"></script>
</head>
@extends('layouts.app_uipj')

@section('content')
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link" href="#" aria-selected="true">
        Entrevista
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Informantes
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Desaparecido
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Familiares
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Contacto
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Domicilios
      </a>
      <a class="nav-item nav-link " href="#" aria-selected="false">
        Antecedentes
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Vestimenta
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Descripción física
      </a>
      <a class="nav-item nav-link" href="{{route('antecedentesmedicos.show',['id' => $desaparecido->id])}}" aria-selected="false">
        Antecedentes medicos
      </a>
      <a class="nav-item nav-link active" href="#" aria-selected="false">
        Señas particulares
      </a>
      <a class="nav-item nav-link" href="{{route('datos_dentales.show',['id' => $desaparecido->id])}}" aria-selected="false">
        Datos dentales
      </a>        
  </div>
</nav>
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
<body>
 
<script>
	 var diente26, diente25, diente24;

     diente26 = $('#diente26').attr("value");
    $('#diente26').click(function(event) {
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
			url: routeIndex+'/get_senas/{!! $desaparecido->id !!}',
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
                url: '/senas_particulares/store_senas',
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

