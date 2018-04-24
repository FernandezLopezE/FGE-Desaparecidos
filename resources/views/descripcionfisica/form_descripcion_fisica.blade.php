@extends('layouts.app_uipj')

@section('content')
  
	<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Descripción física			
			<button type="button" class="btn btn-dark pull-right"  id="nuevaParteCuerpo">Agregar</button>
		</h5>
{{ Form::hidden('idExtraviado', $desaparecido->id, array('id' => 'idExtraviado')) }}
	</div>
	<div class="card-body">	
		<div class="row">
  			<div class="col-lg-3">
  			{!! Form::label ('desaparecidoEstatura','Estatura:') !!}
				{!! Form::text ('estatura',
								old('estatura'),
								['class' => 'form-control sinEnter soloNumeros',
										'placeholder' => 'Ingrese la estura en cm',
										'id' => 'estatura', 'maxlength' => 3
								] )!!}
		  	</div>
		  	<div class="col-lg-3">
				{!! Form::label ('desaparecidoPeso','Peso:') !!}
				{!! Form::text ('peso',
									old('peso'),
									['class' => 'form-control sinEnter soloNumeros',
										'placeholder' => 'Ingrese el peso en kg',
										'id' => 'peso', 'maxlength' => 3
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
  		<div class="row">
      	<div class="col">
          {!! Form::label ('desaparecidoParteCuerpo','Parte del cuerpo:') !!}
          {!! Form::select ('idPartesCuerpo',
                    $partesCuerpo,
                    '',
                    ['class' => 'form-control',
                      'id' => 'idPartesCuerpo'
                    ] )!!}            
      </div>
      <div class="col">
          {!! Form::label ('desaparecidoLado','Lado:') !!}
          {!! Form::text ('lado',
                  '',
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'id' => 'lado',
                    'placeholder' => 'Izquierdo, derecho, central'                  
                  ] )!!}
      </div>

      <div class="col" id="colores" style="display:none" >
          {!! Form::label ('color','Color:') !!}
         {!! Form::select ('color',
                    $coloresCuerpo,
                    '',
                    ['class' => 'form-control',
                      'id' => 'color'
                    ] )!!}
      </div>
      <div class="col" id="otro_color" style="display:none" >
          {!! Form::label ('otroColor','Especifique otro color:') !!}
          {!! Form::text ('otroColor',
                  old('otro'),
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'placeholder' => 'Ingrese otro color',
                    'id' => 'otroColor',
                    
                  ] )!!}
          </div>



      </div>
    <hr>
      <div class="row">
          <div class="col-lg-4">
          {!! Form::label ('desaparecidoSubParticularidades','Particularidades:') !!}
          {!! Form::select ('idSubParticularidades',
                    $particularidades,
                    '',
                    ['class' => 'form-control',
                      'id' => 'idSubParticularidades',
                      'multiple' => 'multiple'
                    ] )!!}  
          
        </div>
        <div class="col-lg-4" id="otro_Particularidad" style="display:none" >
          {!! Form::label ('otro','Especifique:') !!}
          {!! Form::text ('otroSubParticularidad',
                  old('otro'),
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'placeholder' => 'Ingrese otra particularidad',
                    'id' => 'otroSubParticularidad',
                    'data-validation' => 'required',
                    'data-validation-error-msg-required' => 'El campo es requerido',
                    'data-validation-depends-on' => 'otroSubParticularidad',
                    'data-validation-depends-on-value' =>'OTRO'
                  ] )!!}
          </div>
         <!-- <div class="col-lg-4" id="observaciones">
          {!! Form::label ('observacionesParticular','Observaciones:') !!}
          {!! Form::text ('observacionesParticularidad',
                  old('observacionesParticular'),
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'placeholder' => 'Ingrese las observaciones',
                    'id' => 'observacionesParticularidad'
                  ] )!!}
          </div>  -->    
    </div>
    <br>
    <div class="row">
            <div class="col-lg-4">
            {!! Form::label ('desaparecidoSubModificaciones','Modificaciones:') !!}
            {!! Form::select ('idSubModificaciones',
                      $modificaciones,
                      '',
                      ['class' => 'form-control',
                        'id' => 'idSubModificaciones',
                        'multiple' => 'multiple'
                      ] )!!}  
            
          </div>
          <div class="col-lg-4" id="otra_Modificacion" style="display:none">
            {!! Form::label ('otroModi','Especifique:') !!}
            {!! Form::text ('otroSubModificacion',
                    old('otroModi'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese otra modificación',
                      'id' => 'otroSubModificacion',
                      'data-validation' => 'required',
                      'data-validation-error-msg-required' => 'El campo es requerido',
                      'data-validation-depends-on' => 'otroSubModificacion',
                      'data-validation-depends-on-value' =>'OTRO'
                    ] )!!}
            </div>
            <div class="col-lg-4" >
            {!! Form::label ('observaciones','Observaciones:') !!}
            {!! Form::text ('observaciones',
                    old('observaciones'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese las observaciones',
                      'id' => 'observaciones'
                    ] )!!}
            </div>                              
    </div>  
    <hr>
		<h4 class="card-title"> Detalles de descripción física </h4>
		<div class="card-body">
			<table id="tableDescripcionFisica" ></table>
		</div>
	</div>	
</div>    
     </div> <!-- Fin del Contenido del formulario-->
		{!! Form::submit('Atras', ['class' => 'btn btn-large btn-primary openbutton']); !!}

	<a href="/descripcionfisica/antecedentes_medicos/$desaparecido->id" class='btn btn-large btn-primary openbutton'>Siguiente</a>
  	
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
		var routeIndex = '{!! route('descripcionfisica.index') !!}';	
		
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
			url: routeIndex+'/get_partes/{{$desaparecido->id}}',
			columns: [{					
				field: 'nombreParteC',
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

    $('#idSubParticularidades').select2();
    $('#idSubModificaciones').select2();

    if($('#idPartesCuerpo').val() == 1){
    	$("#idSubParticularidades").empty();
    	$("#idSubModificaciones").empty();
      $("#color").empty();
    }
//Mostrar campo otro color
    $('#color').on('change', function(){
      var idColor = $('#color').val();
      if(idColor ==7 ){
        $('#otro_color').show();
      }else{
        $('#otro_color').hide();
      }
    });
//fin campo otro color

	//Obtener particularidades
	$('#idPartesCuerpo').on('change', function(){
      parteCuerpoid = $('#idPartesCuerpo').val();
      if(parteCuerpoid == 24){
      $('#colores').show();
    }else{
      $('#colores').hide();
    }
   //Condiciones para el multiselect
    if( parteCuerpoid == 6 || parteCuerpoid == 13 || parteCuerpoid == 23 || parteCuerpoid == 35 || parteCuerpoid == 36 || parteCuerpoid == 37){
      $('#idSubParticularidades').select2({
        maximumSelectionLength: 1,       
      });
     }else{ 
       $('#idSubParticularidades').select2({
        maximumSelectionLength: 10,       
      });
     } 



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
  //Fin obtener particularidades

  //Obtener modificaciones
	$('#idPartesCuerpo').on('change', function(){
        $("#idSubModificaciones").empty();
        var idPartesCuerpo = $(this).val();
        if(idPartesCuerpo) {
            
            $.ajax({
                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idSubModificaciones").empty();
                    $.each(data, function(key, value){                        

                        $("#idSubModificaciones").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
            });
        }
    });
  //fin Obtener modificaciones

   //Obtener colores cuerpo
  $('#idPartesCuerpo').on('change', function(){
        $("#color").empty();
        var idPartesCuerpo = $(this).val();
        console.log('hola'+idPartesCuerpo);
        if(idPartesCuerpo) {
            
            $.ajax({
                url: '/descripcionfisica/get_coloresCuerpo/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#color").empty();
                        console.log("hecho");
                    $.each(data, function(key, value){                        

                        $("#color").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
            });
        }
    });
  //fin Obtener colores cuerpo

  //Agregar descripcion fisica
  $('#nuevaParteCuerpo').click (function(){
    var dataString = {
      estatura: $('#estatura').val(),
      peso: $('#peso').val(),
      complexion: $('#complexion').val(),
      colorPiel: $('#colorPiel').val(),
      idExtraviado: $('#idExtraviado').val(),

      parteCuerpo: $('#idPartesCuerpo').val(),
      lado: $('#lado').val(),
      colorP: $('#color').val(),
      particularidad: $('#idSubParticularidades').val(),
      modificacion: $('#idSubModificaciones').val(),
      otraParticularidad: $('#otroSubParticularidad').val(),
      otraModificacion: $('#otroSubModificacion').val(),
      otroColor: $('#otroColor').val(),
      observaciones: $('#observaciones').val(),



    };
    console.log(dataString);
    $.ajax({
      type: 'POST',
      url: '/descripcionfisica/store',
      data: dataString,
      dataType: 'json',
      success: function(data) {           
        console.log("hecho");
        console.log(data);
        //tableDescripcion.bootstrapTable('refresh');
                        
      },
      error: function(data) {
        console.log("error");
        console.log(data);
      }
    });
  });

	</script>
@endsection