@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
    .human-body svg{
        width: 310.5px;
        margin-left: 15px;
        display: block;
    }
 
    .human-body g:hover path {
        fill: #17a4da;
    }

    .human-body svg g path{
        position: absolute;
        left: 50%;
        fill: #a8a8a8;
    }

    #cerrar:hover {
    transform: scale(1.7);
    }

    #colapsar:hover {
    transform: scale(1.7);
    }

    #colapsar2:hover {
    transform: scale(1.7);
    }

    #btnEditarC:hover {
    transform: scale(1.7);
    }

    #editFis:hover {
    transform: scale(1.7);
    } 
  
    #minCara:hover {
    transform: scale(1.7);
    }

    #datosFis:hover {
    transform: scale(1.1);
    }

    
</style>
@endsection

@section('content')
@include('navs.navs_datos',array('activar' => 'desc_fisica'))
@include('includes.partesCuerpo.01Talla')
<div class="card border-success">
    <div class="card-body"> 
        <!--@include('descripcionfisica.seccion_Estatura')-->
        <div class="form-group" id="fomularioPrin2">
                <h6><b>Selecciona la parte del cuerpo</b></h6>
        </div>
        <div class="row" id="fomularioPrin" >
            <div class="col">
              <!-- Card de datos físicos-->
                <div class="card-transparent" style="max-width: 18rem;height: -70%;">
                  <div class="card-header-transparent">
                    <i class="fa fa-address-card" id="datosFis" style="font-size:40px;" data-toggle="tooltip" data-target="#card" data-placement="right" title="Editar datos físicos"></i>       
                  </div>
                  <div class="card-body" id="card" style="margin-top: 7px;border: 1px solid #BDBDBD;border-radius: 5px;z-index: 10; position: absolute; background: #ffffff; width: 80%;">
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Estatura:</b></h6>
                          </div>
                          <div class="col-7" style="margin-left: 0%;">
                              <input type="text" id="estatura" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Peso:</b></h6>
                          </div>
                          <div class="col-7">
                              <input type="text" id="peso" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div>   
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Complexión:</b></h6>
                          </div>
                          <div class="col-7">
                              <input type="text" id="complexion" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div> 
                       <div class="row">
                          <div class="col-5">
                              <h6><b>Color de piel:</b></h6>
                          </div>
                          <div class="col-6">
                              <input type="text" id="piel" style="border: 0px;width: 110%;background: transparent;" disabled>
                          </div>
                      </div>
                  </div> 
              </div>
            </div>
            <div class="col" style="margin-left:-350px; margin-top:-20px;">
              @include('descripcionfisica.avatar')
            </div>
            <div class="col-8">
              @include('descripcionfisica.seccion_Cabello')
              @include('descripcionfisica.seccion_Cara')
              @include('descripcionfisica.seccion_Cuello')
            </div>
        </div>
    </div>
</div>

@endsection 

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

  $("#card").hide();
  $("#datosFis").hover( function () {
    $("#card").toggle();
  });

  //mostrar sección cara
  $("#cabeza").change(function(event) {
    //alert("Hola mundo");
    $("#formCara").toggle();
  });

  if ("{{$aux}}" == true) {
    $("#talla").modal("hide");
     $.ajax({
            url: '/descripcionfisica/get_datosfisicos/{{$desaparecido->id}}/',
            type:"GET",
            dataType:"json",
            success:function(data) {
              $.each(data, function(key, value){
                $("#estatura").val(value.estatura+" CM");
                $("#peso").val(value.peso+" KG");
                $("#complexion").val(value.complexion);
                $("#piel").val(value.piel);
            });
            }
          });
  }else{
    $("#talla").modal("show");
    $("#esta").focus();
  }

  $("#datosFis").click(function(event) {
      $.ajax({
            url: '/descripcionfisica/get_datosfisicos/{{$desaparecido->id}}/',
            type:"GET",
            dataType:"json",
            success:function(data) {
              console.log(data[0].complexion);
              $.each(data, function(key, value){
                $("#esta").val(value.estatura);
                $("#bulto").val(value.peso);
                $('select#comple option[value="'+value.idComplexion+'"]').attr('selected', 'selected');
                $('select#cPiel option[value="'+value.idColorPiel+'"]').attr('selected', 'selected');
                $("#talla").modal("show");
            });
            }
          });
  });
  $('[data-toggle="tooltip"]').tooltip();  
  

  $("#guardarTalla").click(function(){
    console.log("entro");
    var dataString = {
      estatura: $('#esta').val(),
      peso: $('#bulto').val(),
      complexion: $('#comple').val(),
      colorPiel: $('#cPiel').val(),
      idExtraviado: $('#idExtraviado').val(),
    };
      $.ajax({
        type: 'POST',
        url: '/descripcionfisica/store',
        data: dataString,
        dataType: 'json',
        success: function(data) {           
        //document.getElementById("colapsar2").click();
          $("#talla").modal("hide");
          
          $.ajax({
            url: '/descripcionfisica/get_datosfisicos/{{$desaparecido->id}}/',
            type:"GET",
            dataType:"json",
            success:function(data) {
              $.each(data, function(key, value){
                $("#estatura").val(value.estatura+" CM");
                $("#peso").val(value.peso+" KG");
                $("#complexion").val(value.complexion);
                $("#piel").val(value.piel);
            });
            }
          });
    },
        error: function(data) {
          console.log("error");
          console.log(data);
          $('.modal-body div.has-danger').removeClass('has-danger');
          $('.form-control-feedback').empty();
          $.each( data.responseJSON.errors, function( key, value ) {
            
            $('#div_'+key).addClass('has-danger');
            $('input#'+key).addClass('form-control-danger');
            $('#error_'+key).append(value);
          });
        }
      });
  });
    $("#colapsar").click(function(event) {
        $("#acordion").toggle();
    });
  //Ocultar Boton editar
  $("#btnEditarC").hide();

  //SELECT 2
  $('#partiCabello').select2();
  $('#modiCabello').select2();
  $('#modiBarba').select2();
  $('#modiBigote').select2();
  $('#modiPatilla').select2();
  //Boton Editar
  $("#btnEditarC").click(function(){
   $("#detallesV").toggle();
   $("#datosCabello").toggle();
   $("#btnEditarC").hide();
   
    //petición para obtener los detalles de cabello.
    $.ajax({
                url: '/descripcionfisica/get_cabello/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                     console.log(data);
                    $.each(data, function(key, value){    
                      console.log(value.idParti);
                      $('#tieneCabello').val(value.tenia).trigger('change');
                      $('#tipoCabello').val(value.idTipo).trigger('change');
                      $('#colorCabello').val(value.idColor).trigger('change');
                      $('#tamanoCabello').val(value.idTamano).trigger('change');
                      $('#partiCabello').val(value.idParti).trigger('change');
                      $('#modiCabello').val(value.idModi).trigger('change');


                      $("#observacionesCabello").val(value.observaciones);
                      

                    });

                },
                
            });// fin de petición de talles de cabello


  });

  //Boton guardar para cabello
  $("#btnGuardarC").click(function(){
    $("#datosCabello").hide();
    $("#btnEditarC").show();
    $("#detallesV").show();
    var dataString = {
      //Cabello
      tieneCabello: $('#tieneCabello').val(),
      tamanoCabello: $('#tamanoCabello').val(),
      tipoCabello: $('#tipoCabello').val(),
      colorCabello: $('#colorCabello').val(),
      otraPartiC: $('#otroPartiC').val(),
      otraModiC: $('#otroModificacionC').val(),
      otroColorC: $('#otroColorC').val(),
      observacionesCabello: $('#observacionesCabello').val(),
      partiCabello: $("#partiCabello").val(),
      modiCabello: $("#modiCabello").val(),
      parteCuerpoC: 55,
      idExtraviado: $('#idExtraviado').val(),

      //Barba
      tieneBarba: $('#tieneBarba').val(),
      tipoBarba: $('#tipoBarba').val(),
      colorBarba: $('#colorBarba').val(),
      otraModiBa: $('#otroPartiBar').val(),
      otroColorBa: $('#otroColorBar').val(),
      observacionesBarba: $('#observacionesBarba').val(),
      modiBarba: $("#modiBarba").val(),
      parteCuerpoBa: 56,

      //Bigote
      tieneBigote: $('#tieneBigote').val(),
      tipoBigote: $('#tipoBigote').val(),
      colorBigote: $('#colorBigote').val(),
      otraModiBa: $('#otroPartiBig').val(),
      otroColorBa: $('#otroColorBig').val(),
      observacionesBigote: $('#observacionesBigote').val(),
      modiBigote: $("#modiBigote").val(),
      parteCuerpoBi: 57,

      //Patilla
      tienePatilla: $('#tienePatilla').val(),
      tipoPatilla: $('#tipoPatilla').val(),
      colorPatilla: $('#colorPatilla').val(),
      otraModiP: $('#otroPartiPat').val(),
      otroColorP: $('#otroColorPat').val(),
      observacionesPatilla: $('#observacionesPatilla').val(),
      modiPatilla: $("#modiPatilla").val(),
      parteCuerpoPa: 58,

    };
    console.log(dataString);
    //petición para hacer el store de cabello y vello facial
    $.ajax({
      type: 'POST',
      url: '/descripcionfisica/storeVelloFacial',
      data: dataString,
      dataType: 'json',
      success: function(data) {           
        console.log("hecho");
        console.log(data);
        //Limpiar cabello
        $('#tieneCabello').prop('selectedIndex',0);
        $('#tamanoCabello').prop('selectedIndex',0);
        $('#tipoCabello').prop('selectedIndex',0);
        $('#colorCabello').prop('selectedIndex',0);
        $('#otroPartiC').val('');
        $('#otroModificacionC').val('');
        $('#otroColorC').val('');
        $('#observacionesCabello').val('');
        $('#modiCabello').val(null).trigger('change');
        $('#partiCabello').val(null).trigger('change');
        /*tableDescripcion.bootstrapTable('refresh');
        $("#editComplexion").prop('checked', false);
        $("#estatura").prop('disabled', !this.checked);
        $("#complexion").prop('disabled', !this.checked);
        $("#colorPiel").prop('disabled', !this.checked);
        $("#peso").prop('disabled', !this.checked);
        
        $('#formDescripcionF')[0].reset();
        $('#idPartesCuerpo').val(1).trigger('change');*/
      },
      error: function(data) {
        console.log("error");
        console.log(data);
      }
    });//fin  de petición para realizar el store de cabello y vello facial.

    //petición para obtener los detalles de cabello.
    $.ajax({
                url: '/descripcionfisica/get_cabello/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                     
                    $.each(data, function(key, value){    
                    $("#pCabello").empty();

                    if(value.tenia == "SÍ"){
                      $("#pCabello").show();
                      $("#pCabello").append('<div class="card">'+
                                                '<div class="card-header bg-white">'+
                                                    '<h5><b>Datos del cabello</b></h5>'+
                                                '</div>'+
                                                '<div class="card-body">'+
                                                    '<div class="row" >'+
                                                        '<div class="col-4">'+
                                                        '<label>Color:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.color+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Tamaño:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.tamano+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Tipo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.tipo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Particularidades:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.particularidades+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Modificaciones:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.modificaciones+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Observaciones:</label>'+
                                                        '</div>'+

                                                        '<div class="col">'+
                                                        '<p>'+value.observaciones+'</p>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');
                    }else{
                      $("#pCabello").hide();
                    }                    

                        


                    });

                },
                
            });// fin de petición de talles de cabello

    //peticion para obtener detalles de barba
    $.ajax({
                url: '/descripcionfisica/get_barba/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){   
                    pCabello                     
                    $("#pBarba").empty();
                    if(value.tenia == "SÍ"){
                      $("#pBarba").show();
                      $("#pBarba").append('<div class="card">'+
                                                '<div class="card-header bg-white">'+
                                                    '<h5><b>Datos de la barba</b></h5>'+
                                                '</div>'+
                                                '<div class="card-body">'+
                                                    '<div class="row" >'+
                                                        '<div class="col-4">'+
                                                        '<label>Color:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.color+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Tipo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.tipo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Estilo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.estilo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Observaciones:</label>'+
                                                        '</div>'+

                                                        '<div class="col">'+
                                                        '<p>'+value.observaciones+'</p>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');
                    }else{
                      $("#pBarba").hide();
                    }
                        
                    });
                },
            });// fin de detalles de barba.

    //peticion para obtener detalles de bigote.
    $.ajax({
                url: '/descripcionfisica/get_bigote/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){                        
                    $("#pBigote").empty();

                    if(value.tenia == "SÍ"){
                      $("#pBigote").show();
                      $("#pBigote").append('<div class="card">'+
                                                '<div class="card-header bg-white">'+
                                                    '<h5><b>Datos del bigote</b></h5>'+
                                                '</div>'+
                                                '<div class="card-body">'+
                                                    '<div class="row" >'+
                                                        '<div class="col-4">'+
                                                        '<label>Color:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.color+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Tipo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.tipo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Estilo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.estilo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Observaciones:</label>'+
                                                        '</div>'+

                                                        '<div class="col">'+
                                                        '<p>'+value.observaciones+'</p>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');

                    }else{
                      $("#pBigote").hide();
                    }
                        
                    });

                },
                
            });// fin de detalles de bigote.

    //peticion para obtener detalles de patilla
    $.ajax({
                url: '/descripcionfisica/get_patilla/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){                        
                    $("#pPatilla").empty();

                    if(value.tenia == "SÍ"){
                      $("#pPatilla").show();
                      $("#pPatilla").append('<div class="card">'+
                                                '<div class="card-header bg-white">'+
                                                    '<h5><b>Datos de las patillas</b></h5>'+
                                                '</div>'+
                                                '<div class="card-body">'+
                                                    '<div class="row" >'+
                                                        '<div class="col-4">'+
                                                        '<label>Color:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.color+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Tipo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.tipo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Estilo:</label>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<p>'+value.estilo+'</p>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="row" style="margin-top:-10px">'+
                                                        '<div class="col-4">'+
                                                        '<label>Observaciones:</label>'+
                                                        '</div>'+

                                                        '<div class="col">'+
                                                        '<p>'+value.observaciones+'</p>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');
                    }else{
                      $("#pPatilla").hide();

                    }
                        
                    });
                }, 
            });// fin de detalles de patilla

  });
});
//Sección para mostrar/ocultar campos de "OTRO"
var tieneCabello, otroTipoC, otroColorC, otroPartiC, otroModificacionC, tieneBarba, otroTipoBar, otroColorBar, otroPartiBar, tieneBigote, otroTipoBig, otroColorBig, otroPartiBig, tienePatilla, otroTipoPat, otroColorPat;

   $('#tieneCabello').change(function() {
        tieneCabello = $('#tieneCabello').val();
        if (tieneCabello == 'SÍ') {
            $('#infoCabello1').show();
            $('#infoCabello2').show();
            $('#infoCabello3').show();
            $('#infoCabello4').show();
            $('#infoCabello5').show();
            $('#infoCabello6').show();
            $('#otroTipoC').val('');
            $('#otroColorC').val('');
            $('#otroPartiC').val('');
            $('#otroModificacionC').val('');
            $('#observacionesCabello').val('');

        }else{
            $('#infoCabello1').hide();
            $('#infoCabello2').hide();
            $('#infoCabello3').hide();
            $('#infoCabello4').hide();
            $('#infoCabello5').hide();
            $('#infoCabello6').hide();
            $('#a').hide();
            $('#b').hide();
            $('#c').hide();
            $('#d').hide();
            $('#tipoCabello').prop('selectedIndex',0); 
            $('#colorCabello').prop('selectedIndex',0); 
            $('#partiCabello').prop('selectedIndex',0); 
            $('#tamanoCabello').prop('selectedIndex',0); 
            $('#modiCabello').prop('selectedIndex',0); 

            //Limpiar cabello
            $('#tieneCabello').prop('selectedIndex',0);
            $('#tamanoCabello').prop('selectedIndex',0);
            $('#tipoCabello').prop('selectedIndex',0);
            $('#colorCabello').prop('selectedIndex',0);
            $('#otroPartiC').val('');
            $('#otroModificacionC').val('');
            $('#otroColorC').val('');
            $('#observacionesCabello').val('');
            $('#modiCabello').val(null).trigger('change');
            $('#partiCabello').val(null).trigger('change');

        }
    });

   $('#tipoCabello').change(function() {
        otroTipoC = $('#tipoCabello').val();
        if (otroTipoC == '7') {
            $('#a').show();
        }else{
            $('#a').hide();
        }
    });

   $('#colorCabello').change(function() {
        otroColorC = $('#colorCabello').val();
        if (otroColorC == '23') {
            $('#b').show();
        }else{
            $('#b').hide();
        }
    });

   $('#partiCabello').change(function() {
        otroPartiC = $('#partiCabello').val();
        if (otroPartiC == '10') {
            $('#c').show();
        }else{
            $('#c').hide();
        }
    });

   $('#modiCabello').change(function() {
        otroModificacionC = $('#modiCabello').val();
        if (otroModificacionC == '9') {
            $('#d').show();
        }else{
            $('#d').hide();
        }
    });
   //Barba
   $('#tieneBarba').change(function() {
        tieneBarba = $('#tieneBarba').val();
        if (tieneBarba == 'SÍ') {
            $('#infoBarba1').show();
            $('#infoBarba2').show();
            $('#infoBarba3').show();
            $('#infoBarba4').show();
            $('#otroTipoBar').val('');
            $('#otroColorBar').val('');
            $('#otroPartiBar').val('');
            $('#observacionesBarba').val('');

        }else{
            $('#infoBarba1').hide();
            $('#infoBarba2').hide();
            $('#infoBarba3').hide();
            $('#infoBarba4').hide();
            $('#e').hide();
            $('#f').hide();
            $('#g').hide();
            $('#tipoBarba').prop('selectedIndex',0); 
            $('#colorBarba').prop('selectedIndex',0); 
            $('#modiBarba').prop('selectedIndex',0); 
        }
    });

   $('#tipoBarba').change(function() {
        otroTipoBar = $('#tipoBarba').val();
        if (otroTipoBar == '44') {
            $('#e').show();
        }else{
            $('#e').hide();
        }
    });

   $('#colorBarba').change(function() {
        otroColorBar = $('#colorBarba').val();
        if (otroColorBar == '31') {
            $('#f').show();
        }else{
            $('#f').hide();
        }
    });

   $('#modiBarba').change(function() {
        otroPartiBar = $('#modiBarba').val();
        
        if (otroPartiBar == '60') {
            $('#g').show();
        }else{
            $('#g').hide();
        }
    });

   //Bigote
   $('#tieneBigote').change(function() {
        tieneBigote = $('#tieneBigote').val();
        if (tieneBigote == 'SÍ') {
            $('#infoBigote1').show();
            $('#infoBigote2').show();
            $('#infoBigote3').show();
            $('#infoBigote4').show();
            $('#otroTipoBig').val('');
            $('#otroColorBig').val('');
            $('#otroPartiBig').val('');
            $('#observacionesBigote').val('');

        }else{
            $('#infoBigote1').hide();
            $('#infoBigote2').hide();
            $('#infoBigote3').hide();
            $('#infoBigote4').hide();
            $('#h').hide();
            $('#i').hide();
            $('#j').hide();
            $('#tipoBigote').prop('selectedIndex',0); 
            $('#colorBigote').prop('selectedIndex',0); 
            $('#modiBigote').prop('selectedIndex',0); 
        }
    });

   $('#tipoBigote').change(function() {
        otroTipoBig = $('#tipoBigote').val();
        //alert(otroTipoBig);
        if (otroTipoBig == '49') {
            $('#h').show();
        }else{
            $('#h').hide();
        }
    });

   $('#colorBigote').change(function() {
        otroColorBig = $('#colorBigote').val();
        if (otroColorBig == '39') {
            $('#i').show();
        }else{
            $('#i').hide();
        }
    });

   $('#modiBigote').change(function() {
        otroPartiBig = $('#modiBigote').val();
        if (otroPartiBig == '54') {
            $('#j').show();
        }else{
            $('#j').hide();
        }
    });

   //Patillas
   $('#tienePatilla').change(function() {
        tienePatilla = $('#tienePatilla').val();
        if (tienePatilla == 'SÍ') {
            $('#infoPatilla1').show();
            $('#infoPatilla2').show();
            $('#infoPatilla3').show();
            $('#infoPatilla4').show();
            $('#infoPatilla1').val('');
            $('#otroColorBig').val('');
            $('#otroPartiBig').val('');
            $('#observacionesPatilla').val('');

        }else{
            $('#infoPatilla1').hide();
            $('#infoPatilla2').hide();
            $('#infoPatilla3').hide();
            $('#infoPatilla4').hide();
            $('#k').hide();
            $('#l').hide();
            $('#m').hide();
            $('#tipoPatilla').prop('selectedIndex',0); 
            $('#colorPatilla').prop('selectedIndex',0); 
            $('#modiPatilla').prop('selectedIndex',0); 
        }
    });

   $('#tipoPatilla').change(function() {
        otroTipoPat = $('#tipoPatilla').val();
        //alert(otroTipoPat);
        if (otroTipoPat == '54') {
            $('#k').show();
        }else{
            $('#k').hide();
        }
    });

   $('#colorPatilla').change(function() {
        otroColorPat = $('#colorPatilla').val();
        if (otroColorPat == '47') {
            $('#l').show();
        }else{
            $('#l').hide();
        }
    });

   $('#modiPatilla').change(function() {
        otroPartiPat = $('#modiPatilla').val();
        if (otroPartiPat == '48') {
            $('#m').show();
        }else{
            $('#m').hide();
        }
    });

//Sección para mostrar/ocultar campos de "OTRO"
$("#cerrar").click(function(event) {
    $(".cabello").toggle();
    });

    window.onload = function () {
        const pieces = document.getElementsByTagName('g');
        console.log(pieces);
        for (var i = 0; pieces.length; i++) {
            let _piece = pieces[i];
            _piece.onclick = function(t) {
                if (t.target.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.getAttribute('id');
                if (t.target.parentElement.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');

                var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
                if(temp == "cabello"){
                  $(".cabello").toggle();
                  $("#cabellointerno").css({"fill":"#17a4da", "stroke":"#ffffff","stroke-width":"2-"});
                }
            }
        }
    }
</script>



@endsection