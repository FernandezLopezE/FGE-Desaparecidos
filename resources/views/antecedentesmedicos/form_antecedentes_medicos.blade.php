@extends('layouts.app_uipj')

@section('content')
	<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Antecedentes médicos		
			<button type="button" class="btn btn-dark pull-right"  id="nuevaParteCuerpo">Agregar</button>
		</h5>
	</div>
	<div class="card-body">	
      <div class="row">
        <div class="form-check col-lg-2">
          <input class="form-check-input" type="checkbox" id="sinInformacionE" checked="">
          <label class="form-check-label" for="antecedentesmedicos">
              SIN INFORMACIÓN
          </label>
        </div>
          <div class="col-lg-6">
          {!! Form::label ('desaparecidoEnfermedad','Enfermedad:') !!}
          {!! Form::select ('idEnfermedad',
                    $enfermedades,
                    '',
                    ['class' => 'form-control',
                      'id' => 'idEnfermedad',
                      'multiple' => 'multiple',
                      'disabled' => 'disabled'
                    ] )!!}  
          
        </div>
         <div class="form-check col-lg-1">
          <input class="form-check-input" type="checkbox" id="chckOtraEnfermedad"  disabled="true" checked="false">
          <label class="form-check-label" for="antecedentesmedicos">
              OTRA 
          </label>
        </div>
        <div class="col-lg-3" id="otra_Enfermedad" style="display:none" >
          {!! Form::label ('otro','Especifique:') !!}
          {!! Form::text ('otraEnfermedad',
                  old('otro'),
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'placeholder' => 'Ingrese otra enfermedad',
                    'id' => 'otraEnfermedad',
                    'data-validation' => 'required',
                    'data-validation-error-msg-required' => 'El campo es requerido',
                    'data-validation-depends-on' => 'otraEnfermedad',
                    'data-validation-depends-on-value' =>'OTRO'
                  ] )!!}
          </div>         
    </div> 
    <br>
      <div class="row">
        <div class="form-check col-lg-2">
          <input class="form-check-input" type="checkbox" id="sinInformacionIQ" checked="">
          <label class="form-check-label" for="antecedentesmedicos">
              SIN INFORMACIÓN
          </label>
        </div>
          <div class="col-lg-6">
           {!! Form::label ('desaparecidoIQ','Intervenciones quirúrgicas:') !!}
            {!! Form::select ('idIQuirurgica',
                      $iQuirurgicas,
                      '',
                      ['class' => 'form-control',
                        'id' => 'idIQuirurgica',
                        'multiple' => 'multiple',
                        'disabled' => 'disabled'
                      ] )!!}           
        </div>
         <div class="form-check col-lg-1">
          <input class="form-check-input" type="checkbox" id="chckOtraIQ"  disabled="true" checked="false">
          <label class="form-check-label" for="antecedentesmedicos">
              OTRA
          </label>
        </div>
        <div class="col-lg-3" id="otra_IQ" style="display:none" >
         {!! Form::label ('otraIQ','Especifique:') !!}
            {!! Form::text ('otraIQuirurgica',
                    old('otraIQ'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese otra intervención quirúrgica',
                      'id' => 'otraIQuirurgica',
                      'data-validation' => 'required',
                      'data-validation-error-msg-required' => 'El campo es requerido',
                      'data-validation-depends-on' => 'otraIQuirurgica',
                      'data-validation-depends-on-value' =>'OTRO'
                    ] )!!}
          </div>                                                          
    </div>  
    <br>
    <div class="row">
          <div class="form-check col-lg-2">
          <input class="form-check-input" type="checkbox" id="sinInformacionAd" checked="">
          <label class="form-check-label" for="antecedentesmedicos">
              SIN INFORMACIÓN
          </label>
        </div>
          <div class="col-lg-6">
           {!! Form::label ('desaparecidoAdic','Adicciones:') !!}
            {!! Form::select ('idAdicciones',
                      $adicciones,
                      '',
                      ['class' => 'form-control',
                        'id' => 'idAdicciones',
                        'multiple' => 'multiple',
                        'disabled' => 'disabled'
                      ] )!!}          
        </div>
         <div class="form-check col-lg-1">
          <input class="form-check-input" type="checkbox" id="chckOtraAdiccion"  disabled="true" checked="false">
          <label class="form-check-label" for="antecedentesmedicos">
              OTRA
          </label>
        </div>
        <div class="col-lg-3" id="otra_Adiccion" style="display:none" >
         {!! Form::label ('otraAdic','Especifique:') !!}
            {!! Form::text ('otraAdiccion',
                    old('otraAdic'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese otra adicción',
                      'id' => 'otraAdiccion',
                      'data-validation' => 'required',
                      'data-validation-error-msg-required' => 'El campo es requerido',
                      'data-validation-depends-on' => 'otraAdiccion',
                      'data-validation-depends-on-value' =>'OTRO'
                    ] )!!}
          </div>                        
    </div>
    <br>
     <div class="row">
          <div class="form-check col-lg-2">
          <input class="form-check-input" type="checkbox" id="sinInformacionIm" checked="">
          <label class="form-check-label" for="antecedentesmedicos">
              SIN INFORMACIÓN
          </label>
        </div>
          <div class="col-lg-6">
            {!! Form::label ('desaparecidoImplan','Implantes:') !!}
            {!! Form::select ('idImplantes',
                      $implantes,
                      '',
                      ['class' => 'form-control',
                        'id' => 'idImplantes',
                        'multiple' => 'multiple',
                        'disabled' => 'disabled'
                      ] )!!}       
        </div>
         <div class="form-check col-lg-1">
          <input class="form-check-input" type="checkbox" id="chckOtroImplante"  disabled="true" checked="false">
          <label class="form-check-label" for="antecedentesmedicos">
              OTRO
          </label>
        </div>
        <div class="col-lg-3" id="otro_Implante" style="display:none" >
           {!! Form::label ('otroImplan','Especifique:') !!}
            {!! Form::text ('otroImplante',
                    old('otroImplan'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese otro implante',
                      'id' => 'otroImplante',
                      'data-validation' => 'required',
                      'data-validation-error-msg-required' => 'El campo es requerido',
                      'data-validation-depends-on' => 'otroImplante',
                      'data-validation-depends-on-value' =>'OTRO'
                    ] )!!}
          </div>                        
    </div>  
    <br>
      <div class="row">
         <div class="col">
            {!! Form::label ('observacioneM','Observaciones:') !!}
            {!! Form::textarea  ('observacionesAM',
                                old('observacioneM',null),
                                ['class' => 'form-control mayuscula sinEnter', 'id' => 'observacionesAM','size' => '30x4', 'placeholder' => 'Ingrese las observaciones'])!!}
            </div>    
          <div class="col">
            {!! Form::label ('medicamentos','Medicamentos que toma:') !!}
            {!! Form::textarea  ('medicamentosToma',
                                old('medicamentos',null),
                                ['class' => 'form-control mayuscula sinEnter', 'id' => 'medicamentosToma','size' => '30x4', 'placeholder' => 'Ingrese los medicamentos que toma'])!!}
            </div>                            
    </div>       
    <hr>
		<h4 class="card-title"> Detalles de antecedentes médicos </h4>
		<div class="card-body">
			<table id="tableAntecedentesMedicos" ></table>
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
		var otraE;
		var otraIq;
    var otraA;
    var otroIm;

  $('#idEnfermedad').select2().css({"background-color": "#444444"});
  $('#idIQuirurgica').select2();
  $('#idAdicciones').select2();
  $('#idImplantes').select2();
	
///////////
    $("#sinInformacionE").change(function () { 
      $("#idEnfermedad").prop('disabled', this.checked);
      $("#chckOtraEnfermedad").prop('disabled', this.checked);
      });

    $("#chckOtraEnfermedad").prop('checked', false);
    $("#chckOtraIQ").prop('checked', false);
    $("#chckOtraAdiccion").prop('checked', false);
    $("#chckOtroImplante").prop('checked', false);

    $("#chckOtraEnfermedad").change(function() {
      otraE = this.checked;
      if (otraE) {
        $("#otra_Enfermedad").show();
      }
      else{
        $("#otra_Enfermedad").hide();
      }
    });

     $("#sinInformacionIQ").change(function () { 
      $("#idIQuirurgica").prop('disabled', this.checked);
      $("#chckOtraIQ").prop('disabled', this.checked);
      });

    $("#chckOtraIQ").change(function() {
      otraIQ = this.checked;
      if (otraIQ) {
        $("#otra_IQ").show();
      }
      else{
        $("#otra_IQ").hide();
      }
    });

     $("#sinInformacionAd").change(function () { 
      $("#idAdicciones").prop('disabled', this.checked);
      $("#chckOtraAdiccion").prop('disabled', this.checked);
      });

    $("#chckOtraAdiccion").change(function() {
      otraA = this.checked;
      if (otraA) {
        $("#otra_Adiccion").show();
      }
      else{
        $("#otra_Adiccion").hide();
      }
    });

     $("#sinInformacionIm").change(function () { 
      $("#idImplantes").prop('disabled', this.checked);
      $("#chckOtroImplante").prop('disabled', this.checked);
      });

    $("#chckOtroImplante").change(function() {
      otroIm = this.checked;
      if (otroIm) {
        $("#otro_Implante").show();
      }
      else{
        $("#otro_Implante").hide();
      }
    });



//table
var tableDescripcion = $('#tableAntecedentesMedicos');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editAntecedentesMedicos"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
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
			url: routeIndex+'/get_antedecentesmed/1',
			columns: [{					
				field: 'nombre',
				title: 'Enfermedades',
			}, {
				field: 'nombre',
				title: 'Intervenciones quirúrgicas',									
			}, {					
				field: 'nombre',
				title: 'Adicciones',
			}, {					
			  field: 'nombre',
        title: 'Implantes',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				//events: operateEvents
			}]				
		})
    
	});

	</script>
@endsection