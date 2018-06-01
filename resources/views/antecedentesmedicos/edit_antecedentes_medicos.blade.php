@extends('layouts.app_uipj')
@section('css')


<!--<style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .close-icon{
      border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>-->


@endsection

@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))
  {{ Form::hidden('idExtraviado', $desaparecido->id, array('id' => 'idExtraviado')) }}

  <div class = "card border-primary">
    
          <div class="card-header"> 
                <h5>ANTECEDENTES MÉDICOS
                 <button  type="button" class="btn btn-dark pull-right"  id="nuevoAntecedenteMedico">GUARDAR</button> 
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
                                  
                                ] )!!}   
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otraEnfermedad">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtraEnfermedad"   checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otra_Enfermedad"  >
                      {!! Form::label ('otro','Especifique:') !!}
                      {!! Form::text ('otraEnfermedad',
                              $idAM->otraEnfermedad,
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
                            
                        ] )!!}   
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otraAdiccion">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtraAdiccion"   checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otra_Adiccion"  >
                    {!! Form::label ('otraAdic','Especifique:') !!}
                    {!! Form::text ('otraAdiccion',
                          $idAM->otraAdiccion,
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
                              
                            ] )!!}           
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otraIQ">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtraIQ"   checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otra_IQ"  >
                    {!! Form::label ('otraIQ','Especifique:') !!}
                    {!! Form::text ('otraIQuirurgica',
                          $idAM->otraIQ,
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
                              
                            ] )!!}               
                  </div>
              </div>        
            </div>     
            <div class="form-check col" id="div_otroIm">
                <div class="row">
                  <div class="col">
                    <input class="form-check-input" type="checkbox" id="chckOtroImplante"   checked="false">
                    <label class="form-check-label" for="antecedentesmedicos">
                    OTRA 
                    </label>
                  </div>      
                </div>
                <div class="row">
                  <div class="col" id="otro_Implante"  >
                    {!! Form::label ('otraIQ','Especifique:') !!}
                    {!! Form::text ('otroImplante',
                          $idAM->otroImplante,
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
         <div class="col">
            {!! Form::label ('observacioneM','Observaciones:') !!}
            {!! Form::textarea  ('observacionesAM',
                                $idAM->observaciones,
                                ['class' => 'form-control mayuscula sinEnter', 'id' => 'observacionesAM','size' => '30x4', 'placeholder' => 'Ingrese las observaciones'])!!}
            </div>    
          <div class="col">
            {!! Form::label ('medicamentos','Medicamentos que toma:') !!}
            {!! Form::textarea  ('medicamentosToma',
                                $idAM->medicamentosToma,
                                ['class' => 'form-control mayuscula sinEnter', 'id' => 'medicamentosToma','size' => '30x4', 'placeholder' => 'Ingrese los medicamentos que toma'])!!}
            </div>                            
    </div> 
   
       
  
    </form>
    </div>   
	</div>	


                       

@endsection	

@section('scripts')




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript">
  
	$(document).ready(function(){
		var otraE;
		var otraIq;
    var otraA;
    var otroIm;
    var routeIndexAM = '{!! route('antecedentesmedicos.index') !!}';
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
 

 var arrayEnf = @json ($idConsultaEnfermedades);
$('#idEnfermedad').val(arrayEnf).trigger('change');
var arrayAdi = @json ($idConsultaAdicciones);
$('#idAdicciones').val(arrayAdi).trigger('change');
var arrayIQ = @json ($idConsultaIQ);
$('#idIQuirurgica').val(arrayIQ).trigger('change');
var arrayIM = @json ($idConsultaIQ);
$('#idImplantes').val(arrayIM).trigger('change');
console.log(arrayEnf);
var otEn = '{!! $idAM->otraEnfermedad !!}';
var otAd = '{!! $idAM->otraAdiccion !!}';
var otIQ = '{!! $idAM->otraIQ !!}';
var otIM = '{!! $idAM->otroImplante !!}';
var obse = '{!! $idAM->observaciones !!}';
var meTo = '{!! $idAM->medicamentosToma !!}';

console.log('{!! $idAM->otraEnfermedad !!}');

/*********************************************************************/
/***************ACCIONES QUE SE HACEN EN ENFERMEDAD   ****************/
/*********************************************************************/
if(arrayEnf == ""){
   if (otEn != "") {
                  $("#sinInformacionE").prop('checked', false);
                  $('#div_enfermedades').show();
                  $('#div_otraEnfermedad').show();
                  $("#idEnfermedad").prop('enabled');
                  $("#chckOtraEnfermedad").prop('checked', true);
                }   
                else{
                   $('#div_otraEnfermedad').hide();
                  $('#otra_Enfermedad').hide();
                }
}else{
    $("#sinInformacionE").prop('checked', false);
    $('#div_enfermedades').show();
   $('#div_otraEnfermedad').show();
    $("#idEnfermedad").prop('enabled');
            if (otEn == "") {
                  $("#chckOtraEnfermedad").prop('checked', false);
                  $('#div_otraEnfermedad').show();
                  $('#otra_Enfermedad').hide();
                }
                else{
                  $("#chckOtraEnfermedad").prop('checked', true);
                  $('#div_enfermedades').show();
                  $('#div_otraEnfermedad').show();//termina oculta
                }
}

/*********************************************************************/
/***************ACCIONES QUE SE HACEN EN ADICCIONES   ****************/
/*********************************************************************/
if(arrayAdi == ""){
   if (otAd != "") {
                  $("#sinInformacionAd").prop('checked', false);
                  $('#div_adicciones').show();
                  $('#div_otraAdiccion').show();
                  $("#idAdicciones").prop('enabled');                  
                  $("#chckOtraAdiccion").prop('checked', true);
                 //termina oculta
                }   
                else{
                   $('#div_otraAdiccion').hide();
                  $('#otra_Adiccion').hide();
                }
}else{
    $("#sinInformacionAd").prop('checked', false);
    $('#div_adicciones').show();
   $('#div_otraAdiccion').show();
    $("#idAdicciones").prop('enabled');
            if (otAd == "") {
                  $("#chckOtraAdiccion").prop('checked', false);
                  $('#div_otraAdiccion').show();
                  $('#otra_Adiccion').hide();
                }
                else{
                  $("#chckOtraAdiccion").prop('checked', true);
                  $('#div_adicciones').show();
                  $('#div_otraAdiccion').show();//termina oculta
                }
}
/*********************************************************************/
/*********** ACCIONES QUE SE HACEN EN INTERVENCONES QUIRURGICAS*******/
/*********************************************************************/
if(arrayIQ == ""){
   if (otIQ != "") {
                  $("#sinInformacionIQ").prop('checked', false);
                  $('#div_IQ').show();
                  $('#div_otraIQ').show();
                  $("#idIQuirurgica").prop('enabled');                  
                  $("#chckOtraIQ").prop('checked', true);
                  //termina oculta
                }   
                else{
                   $('#div_IQ').hide();
                  $('#otra_IQ').hide();
                }
}else{
    $("#sinInformacionIQ").prop('checked', false);
    $('#div_IQ').show();
   $('#div_otraIQ').show();
    $("#idIQuirurgica").prop('enabled');
            if (otIQ == "") {
                  $("#chckOtraIQ").prop('checked', false);
                  $('#div_otraIQ').show();
                  $('#otra_IQ').hide();
                }
                else{
                  $("#chckOtraIQ").prop('checked', true);
                  $('#div_IQ').show();
                  $('#div_otraIQ').show();//termina oculta
                }
}
/*********************************************************************/
/*********** ACCIONES QUE SE HACEN EN IMPLANTES*******/
/*********************************************************************/
if(arrayIM == ""){
   if (otIM != "") {
                  $("#sinInformacionIm").prop('checked', false);
                  $('#div_Im').show();
                  $('#div_otroIm').show();
                  $("#idIQuirurgica").prop('enabled');                  
                  $("#chckOtroImplante").prop('checked', true);
                  //termina oculta
                }   
                else{
                   $('#div_Im').hide();
                  $('#otro_Implante').hide();
                }
}else{
    $("#sinInformacionIm").prop('checked', false);
    $('#div_Im').show();
   $('#div_otroIm').show();
    $("#idIQuirurgica").prop('enabled');
            if (otIM == "") {
                  $("#chckOtroImplante").prop('checked', false);
                  $('#div_otroIm').show();
                  $('#otro_Implante').hide();
                }
                else{
                  $("#chckOtroImplante").prop('checked', true);
                  $('#div_Im').show();
                  $('#div_otroIm').show();//termina oculta
                }
}
/*************************************************************************/
/*************************************************************************/
/*************************************************************************/
   //los siguientes metodos los empleo en la galeria
 //aqui terminan los metodos de la galería

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

//table
/*var tableDescripcion = $('#tableAntecedentesMedicos');
    var routeIndex = '{!! route('consultas.index') !!}';  
    
    var formatTableActions = function(value, row, index) {        
      btn = '<button class="btn btn-info btn-xs edit" id="editAntecedentesMedicos"><i class="fa fa-edit"></i>&nbsp;Editar</button>';  
      
      return [btn].join('');
    };
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
    })*/

//Agregar antecedentes medicos
var routeIndexAM = '{!! route('antecedentesmedicos.index') !!}';
  $('#nuevoAntecedenteMedico').click (function(){
$idExtraviado = $('#idExtraviado').val();
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
      type: 'PUT',
      url: routeIndexAM+'/'+$idExtraviado,
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
                     window.location =  routeIndexAM +'/{!! $desaparecido->id !!}';
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
                        
      },
      error: function(data) {
        console.log("error");
        console.log(data);
      }
      });
  });
  var modalAnexos = $('#modalAnexosAntecedentesMedicos');
$('#btnAgregarAnexo').click (function(){


  modalAnexos.modal('show');


})
var hola= "hola wey";
$desaparecido = ('{!! $desaparecido->id!!}');
var rutas = [];
 /** METODO PARA HACER PUSH A UN
 if (rutas.indexOf($nombre) === -1) {
                                rutas.push($nombre);
                                //console.log('La nueva colección de vegetales es: ' + $nombre);
                            } else if (rutas.indexOf($nombre) > -1) {
                                //console.log($nombre + ' ya existe en la colección de verduras.');
                            }*/

	</script>
@endsection