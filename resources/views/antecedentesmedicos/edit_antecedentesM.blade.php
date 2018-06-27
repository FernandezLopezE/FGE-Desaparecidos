@extends('layouts.app_uipj')
@section('css')


<style type="text/css">
 
</style>

@endsection
@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))
  {{ Form::hidden('idExtraviado', $desaparecido->id, array('id' => 'idExtraviado')) }}

  <div class = "card border-primary">
    
          <div class="card-header"> 
                <h5>ANTECEDENTES MÉDICOS
                <button type="button" class="btn btn-dark pull-right" id="updateAM">Actualizar</button> 
                </button>   
                </h5>
          </div>
        
	<div class="card-body bg-white">
   {{-- <button  type="button" class="btn btn-dark pull-right"  id="nuevoAntecedenteMedico">Agregar</button>
    <br>--}}
    <br>	
    <form id="formAntecedentesM">
      <div class="row">
            <div class="form-check col-8">
              <div class="row">
                <div class="col">
                    {!! Form::label ('desaparecidoEnfermedad','ENFERMEDADES:') !!}
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" id="sinInformacionE" checked="">
                    <label class="form-check-label" for="antecedentesmedicos">
                        SIN INFORMACIÓN
                    </label>
                </div>
              </div>
              <div id = "div_enfermedades"class="row">
                  <div class="col">
                      {!! Form::label ('enferm','Seleccione las enfermedades:') !!}
                      {!! Form::select ('idEnfermedad',
                                $enfermedades,
                                '',
                                ['class' => 'form-control',
                                  'id' => 'idEnfermedad',
                                  'multiple' => 'multiple',
                                  'disabled' => 'disabled'
                                ] )!!}   
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otraEnfermedad">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtraEnfermedad"  disabled="true" checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otra_Enfermedad" style="display:none" >
                      {!! Form::label ('otro','Especifique:') !!}
                      {!! Form::text ('otraEnfermedad',
                              old('otro'),
                              ['class' => 'form-control mayuscula sinEnter',
                                'placeholder' => 'Ingrese otra enfermedad',
                                'id' => 'otraEnfermedad',
                                'data-validation' => 'required',
                                'data-validation-error-msg-required' => 'El campo es requerido',
                                'data-validation-depends-on' => 'otraEnfermedad',
                                'data-validation-depends-on-value' =>'OTRO'
                              ] )!!}
                  </div> 
                </div>
              </div>      
      </div> 
    <br>
      <div class="row">
            <div class="form-check col-8">
              <div class="row">
                <div class="col">
                    {!! Form::label ('dedsapaAd','ADICCIONES:') !!}
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" id="sinInformacionAd" checked="">
                    <label class="form-check-label" for="antecedentesmedicos">
                        SIN INFORMACIÓN
                    </label>
                </div>
              </div>
              <div id = "div_adicciones"class="row">
                  <div class="col">
                      {!! Form::label ('enferm','Seleccione las adicciones:') !!}
                      {!! Form::select ('idAdicciones',
                          $adicciones,
                          '',
                          ['class' => 'form-control',
                            'id' => 'idAdicciones',
                            'multiple' => 'multiple',
                            'disabled' => 'disabled'
                        ] )!!}   
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otraAdiccion">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtraAdiccion"  disabled="true" checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otra_Adiccion" style="display:none" >
                    {!! Form::label ('otraAdic','Especifique:') !!}
                    {!! Form::text ('otraAdiccion',
                          old('otraAdic'),
                          ['class' => 'form-control mayuscula sinEnter',
                            'placeholder' => 'Ingrese otra adicción',
                            'id' => 'otraAdiccion',
                            'data-validation' => 'required',
                            'data-validation-error-msg-required' => 'El campo es requerido',
                            'data-validation-depends-on' => 'otraAdiccion',
                            'data-validation-depends-on-value' =>'OTRO'
                          ] )!!}
                  </div> 
                </div>
              </div>      
      </div> 
    <br>
        <div class="row">
            <div class="form-check col-8">
              <div class="row">
                <div class="col">
                    {!! Form::label ('dedsapaAd','INTERVENCIONES QUIRÚRGICAS:') !!}
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" id="sinInformacionIQ" checked="">
                    <label class="form-check-label" for="antecedentesmedicos">
                        SIN INFORMACIÓN
                    </label>
                </div>
              </div>
              <div id = "div_IQ"class="row">
                  <div class="col">
                      {!! Form::label ('iq','Seleccione las intervenciones quirúrgicas:') !!}
                      {!! Form::select ('idIQuirurgica',
                            $iQuirurgicas,
                            '',
                            ['class' => 'form-control',
                              'id' => 'idIQuirurgica',
                              'multiple' => 'multiple',
                              'disabled' => 'disabled'
                            ] )!!}           
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otraIQ">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtraIQ"  disabled="true" checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otra_IQ" style="display:none" >
                    {!! Form::label ('otraIQ','Especifique:') !!}
                    {!! Form::text ('otraIQuirurgica',
                          old('otraIQ'),
                          ['class' => 'form-control mayuscula sinEnter',
                            'placeholder' => 'Ingrese otra intervención quirúrgica',
                            'id' => 'otraIQuirurgica',
                            'data-validation' => 'required',
                            'data-validation-error-msg-required' => 'El campo es requerido',
                            'data-validation-depends-on' => 'otraIQuirurgica',
                            'data-validation-depends-on-value' =>'OTRO'
                          ] )!!}
                  </div> 
                </div>
              </div>      
      </div> 
    <br>
      <div class="row">
            <div class="form-check col-8">
              <div class="row">
                <div class="col">
                    {!! Form::label ('IQ','IMPLANTES:') !!}
                </div>
                <div class="col">
                    <input class="form-check-input" type="checkbox" id="sinInformacionIm" checked="">
                    <label class="form-check-label" for="antecedentesmedicos">
                        SIN INFORMACIÓN
                    </label>
                </div>
              </div>
              <div id = "div_Im"class="row">
                  <div class="col">
                      {!! Form::label ('iq','Seleccione los implantes:') !!}
                      {!! Form::select ('idImplantes',
                            $implantes,
                            '',
                            ['class' => 'form-control',
                              'id' => 'idImplantes',
                              'multiple' => 'multiple',
                              'disabled' => 'disabled'
                            ] )!!}               
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otroIm">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtroImplante"  disabled="true" checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otro_Implante" style="display:none" >
                    {!! Form::label ('otraIQ','Especifique:') !!}
                    {!! Form::text ('otroImplante',
                          old('otroImplan'),
                          ['class' => 'form-control mayuscula sinEnter',
                            'placeholder' => 'Ingrese otro implante',
                            'id' => 'otroImplante',
                            'data-validation' => 'required',
                            'data-validation-error-msg-required' => 'El campo es requerido',
                            'data-validation-depends-on' => 'otroImplante',
                            'data-validation-depends-on-value' =>'OTRO'
                          ] )!!}
                  </div> 
                </div>
              </div>      
      </div> 
     




{{--AQUI SIGUEN LOS FIELDS DE LAS ONBSERVACIONES--}}

    <br>
      <div class="row">
         <div class="col-lg-6">
            {!! Form::label ('observacioneM','Observaciones:') !!}
            {!! Form::textarea  ('observacionesAM',
                                old('observacioneM',$observaciones),
                                ['class' => 'form-control mayuscula sinEnter', 'id' => 'observacionesAM','size' => '30x4', 'placeholder' => 'Ingrese las observaciones'])!!}
            </div>    
          <div class="col">
            {!! Form::label ('medicamentos','Medicamentos que toma:') !!}
            {!! Form::textarea  ('medicamentosToma',
                                old('medicamentos',$medicamentos),
                                ['class' => 'form-control mayuscula sinEnter', 'id' => 'medicamentosToma','size' => '30x4', 'placeholder' => 'Ingrese los medicamentos que toma'])!!}
            </div>                            
    </div> 
   
       
  
    </form>
    </div>   
	</div>	

                    

@endsection	

@section('scripts')
<script type="text/javascript">
  
	$(document).ready(function(){
		var otraE;
		var otraIq;
    var otraA;
    var otroIm;
    if ($('#sinInformacionE').is(':checked')) {
                    $('#div_enfermedades').hide();
                    $('#div_otraEnfermedad').hide();
                }
                else{
                    $('#div_enfermedades').show();
                    $('#div_otraEnfermedad').show();
                }
    if ($('#sinInformacionAd').is(':checked')) {
                    $('#div_adicciones').hide();
                    $('#div_otraAdiccion').hide();
                }
                else{
                    $('#div_adicciones').show();
                    $('#div_otraAdiccion').show();
                }
    if ($('#sinInformacionIQ').is(':checked')) {
                    $('#div_IQ').hide();
                    $('#div_otraIQ').hide();
                }
                else{
                    $('#div_IQ').show();
                    $('#div_otraIQ').show();
                }
     if ($('#sinInformacionIm').is(':checked')) {
                    $('#div_Im').hide();
                    $('#div_otroIm').hide();
                }
                else{
                    $('#div_Im').show();
                    $('#div_otroIm').show();
                }

//Aplicacion de select2
$('#idEnfermedad').select2();
  $('#idIQuirurgica').select2();
  $('#idAdicciones').select2();
  $('#idImplantes').select2();    
 });

//sección enfermedades
$("#sinInformacionE").change(function () { 
            //  oculta o muestra los div dependiendo si cambia el check
            $('#div_enfermedades').show();
            $('#div_otraEnfermedad').show();
            if ($('#sinInformacionE').is(':checked')) {
                    $('#div_enfermedades').hide();
                    $('#div_otraEnfermedad').hide();
                }
                else{
                    $('#div_enfermedades').show();
                    $('#div_otraEnfermedad').show();//termina oculta
                    }
            
      $("#idEnfermedad").prop('disabled', this.checked);
      $("#chckOtraEnfermedad").prop('disabled', this.checked);
      $("#chckOtraEnfermedad").prop('checked', false);
      if (this.checked) {
        $("#otra_Enfermedad").hide();
      }
 });

    $("#chckOtraEnfermedad").prop('checked', false);
    $("#chckOtraIQ").prop('checked', false);
    $("#chckOtraAdiccion").prop('checked', false);
    $("#chckOtroImplante").prop('checked', false);

    $("#chckOtraEnfermedad").change(function(){
      otraE = this.checked;
      if (otraE) {
        $("#otra_Enfermedad").show();
      }
      else{
        $("#otra_Enfermedad").hide();
      }
    });

//sección intervenciones quirurgicas
 $("#sinInformacionIQ").change(function () { 
            //  oculta o muestra los div dependiendo si cambia el check
            $('#div_IQ').show();
            $('#div_otraIQ').show();
            if ($('#sinInformacionIQ').is(':checked')) {
                    $('#div_IQ').hide();
                    $('#div_otraIQ').hide();
                }
                else{
                    $('#div_IQ').show();
                    $('#div_otraIQ').show();
                    }//termina oculta

      $("#idIQuirurgica").prop('disabled', this.checked);
      $("#chckOtraIQ").prop('disabled', this.checked);
      $("#chckOtraIQ").prop('checked', false);
      if (this.checked) {
        $("#otra_IQ").hide();
      }
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

  // sección adicciones
 $("#sinInformacionAd").change(function () { 
            //  oculta o muestra los div dependiendo si cambia el check
            $('#div_adicciones').show();
            $('#div_otraAdiccion').show();
            if ($('#sinInformacionAd').is(':checked')) {
                    $('#div_adicciones').hide();
                    $('#div_otraAdiccion').hide();
                }
                else{
                    $('#div_adicciones').show();
                    $('#div_otraAdiccion').show();//termina oculta
                    }

      $("#idAdicciones").prop('disabled', this.checked);
      $("#chckOtraAdiccion").prop('disabled', this.checked);
      $("#chckOtraAdiccion").prop('checked', false);
      if (this.checked) {
        $("#otra_Adiccion").hide();
      }
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

//sección implantes
$("#sinInformacionIm").change(function () {

            $('#div_Im').show();
            $('#div_otroIm').show();
            if ($('#sinInformacionIm').is(':checked')) {
                    $('#div_Im').hide();
                    $('#div_otroIm').hide();
                }
                else{
                    $('#div_Im').show();
                    $('#div_otroIm').show();
                    }//termina oculta


      $("#idImplantes").prop('disabled', this.checked);
      $("#chckOtroImplante").prop('disabled', this.checked);
       $("#chckOtroImplante").prop('checked', false);
      if (this.checked) {
        $("#otro_Implante").hide();
      }
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


//Agregar antecedentes medicos
var routeIndexAM = '{!! route('antecedentesmedicos.index') !!}';
  $('#nuevoAntecedenteMedico').click (function(){

    var dataString = {
      idExtraviado: $('#idExtraviado').val(),

      medicamentosToma: $('#medicamentosToma').val(),
      otraEnfermedad: $('#otraEnfermedad').val(),
      otraIQ: $('#otraIQuirurgica').val(),
      otraAdiccion: $('#otraAdiccion').val(),
      otroImplante: $('#otroImplante').val(),
      enfermedad: $('#idEnfermedad').val(),
      intevencionQ: $('#idIQuirurgica').val(),
      adiccion: $('#idAdicciones').val(),
      implante: $('#idImplantes').val(),
      observaciones: $('#observacionesAM').val(),
    };

    console.log(dataString);
    $.ajax({
      type: 'POST',
      url: routeIndexAM,
      data: dataString,
      dataType: 'json',
      success: function(data) {           
        console.log("hecho");
        console.log(data);
        $.confirm({
            title: 'Datos guardados!',
            content: 'Antecedentes médicos guardados exitosamente.',
            type: 'dark',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Aceptar',
                    btnClass: 'btn-dark',
                    action: function(){
                    }
                },
            }
        });
        $('#formAntecedentesM')[0].reset();
         $('#idEnfermedad').val(0).trigger('change');
        $('#idIQuirurgica').val(0).trigger('change');
        $('#idAdicciones').val(0).trigger('change');
        $('#idImplantes').val(0).trigger('change');

        $("#idEnfermedad").attr("disabled", true);
        $("#idAdicciones").attr("disabled", true);
        $("#idIQuirurgica").attr("disabled", true);
        $("#idImplantes").attr("disabled", true);
       
   
        $("#chckOtraEnfermedad").prop('checked', false);
        $("#chckOtraIQ").prop('checked', false);
        $("#chckOtraAdiccion").prop('checked', false);
        $("#chckOtroImplante").prop('checked', false);

        $("#otra_Enfermedad").hide();
        $("#otra_IQ").hide();
        $("#otra_Adiccion").hide();
        $("#otro_Implante").hide();


        //swal("Datos guardados exitosamente.", "Dale click en el boton ok!", "success");
      
        //tableDescripcion.bootstrapTable('refresh');
              
          
          location.reload();
          
      },
      error: function(data) {
        console.log("error");
        console.log(data);
      }
      });
  });
  

	</script>
@endsection