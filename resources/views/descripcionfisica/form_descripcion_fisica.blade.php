@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
    .human-body {
        width: 207px;
        position: relative;
        margin-left: 40px;
        /*padding-top: 240px;*/
        /*height: 260px;*/
        display: block;
        /*margin: 40px auto;*/
    }
    .human-body svg:hover {
        cursor: pointer;
        transition: transform .2s;
        transform: scale(1.5);

    }
    .human-body g:hover path {
        fill: #17a4da;
    }
    /*.human-body svg {
        position: absolute;
        left: 50%;
        fill: #57c9d5;
    }*/


    .human-body svg g path{
        position: absolute;
        left: 50%;
        fill: #a8a8a8;
    }


    #area {
        display: block;
        width: 100%;
        clear: both;
        padding: 10px;
        text-align: center;
        font-size: 25px;
        font-family: Courier New;
        color: #a5a5a5;
    }

    #area #data {
        color: black;
    }

    #cerrar:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    #colapsar:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    #colapsar2:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

</style>
@endsection

@section('content')
@include('navs.navs_datos',array('activar' => 'desc_fisica'))
@include('includes.partesCuerpo.01Talla')
<div class="card border-success">
    <div class="card-body"> 
        <!--@include('descripcionfisica.seccion_Estatura')-->
        <div class="form-group" id="fomularioPrin2" style="display:none;">
            <div class="card">
              <div class="card-body">
                <h5>Selecciona la parte del cuerpo</h5>
              </div>
            </div>
        </div>
        <div class="row" id="fomularioPrin" style="display:none;">
            <div class="col-3">
            @include('descripcionfisica.avatar')
            </div>
            <div class="col-9">
             @include('descripcionfisica.seccion_Cabello')
            </div>
        </div>
    </div>
</div>

@endsection 

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
  $("#talla").modal("show");
  $("#esta").focus();

  

  $("#guardarTalla").click(function(){
    console.log("entro");
    var dataString = {
      estatura: $('#esta').val(),
      peso: $('#bulto').val(),
      complexion: $('#comple').val(),
      colorPiel: $('#cPiel').val(),
      idExtraviado: $('#idExtraviado').val(),
    };

  console.log(dataString);
      $.ajax({
        type: 'POST',
        url: '/descripcionfisica/store',
        data: dataString,
        dataType: 'json',
        success: function(data) {           
        //document.getElementById("colapsar2").click();
          $("#fomularioPrin").toggle();
          $("#fomularioPrin2").toggle();
          console.log("hecho");
          console.log(data);
          $("#talla").modal("hide");
          
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
    /*$("#colapsar2").click(function(event) {
        $("#fomularioPrin").toggle();
        $("#fomularioPrin2").toggle();
    });*/
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
  });

  //Boton guardar para cabello
  $("#btnGuardarC").click(function(){
    $("#datosCabello").hide();
    $("#btnEditarC").show();
    $("#detallesV").show();
    var dataString = {
      //Cabello
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
      tipoBarba: $('#tipoBarba').val(),
      colorBarba: $('#colorBarba').val(),
      otraModiBa: $('#otroPartiBar').val(),
      otroColorBa: $('#otroColorBar').val(),
      observacionesBarba: $('#observacionesBarba').val(),
      modiBarba: $("#modiBarba").val(),
      parteCuerpoBa: 56,

      //Bigote
      tipoBigote: $('#tipoBigote').val(),
      colorBigote: $('#colorBigote').val(),
      otraModiBa: $('#otroPartiBig').val(),
      otroColorBa: $('#otroColorBig').val(),
      observacionesBigote: $('#observacionesBigote').val(),
      modiBigote: $("#modiBigote").val(),
      parteCuerpoBi: 57,

      //Patilla
      tipoPatilla: $('#tipoPatilla').val(),
      colorPatilla: $('#colorPatilla').val(),
      otraModiP: $('#otroPartiPat').val(),
      otroColorP: $('#otroColorPat').val(),
      observacionesPatilla: $('#observacionesPatilla').val(),
      modiPatilla: $("#modiPatilla").val(),
      parteCuerpoPa: 58,


      /*parteCuerpo: $('#idPartesCuerpo').val(),
      lado: $('#lado').val(),
      colorP: $('#color').val(),
      particularidad: $('#idSubParticularidades').val(),
      modificacion: $('#idSubModificaciones').val(),
      otraParticularidad: $('#otroSubParticularidad').val(),
      otraModificacion: $('#otroSubModificacion').val(),
      otroColor: $('#otroColor').val(),
      observaciones: $('#observaciones').val(),*/
    };
    console.log(dataString);
    $.ajax({
      type: 'POST',
      url: '/descripcionfisica/storeVelloFacial',
      data: dataString,
      dataType: 'json',
      success: function(data) {           
        console.log("hecho");
        console.log(data);
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
    });

    $.ajax({
                url: '/descripcionfisica/get_cabello/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                     
                    $.each(data, function(key, value){    
                    $("#pCabello").empty();                    

                        $("#pCabello").append('<div class="card">'+
                                                '<div class="card-header bg-white">'+
                                                    '<h5>Datos Cabello</h5>'+
                                                '</div>'+
                                                '<div class="card-body">'+
                                                    '<div class="form-group row">'+
                                                        '<div class="col">'+
                                                        '<dt>Color de cabello:</dt>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<dd>'+value.color+'</dd>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="form-group row">'+
                                                        '<div class="col">'+
                                                        '<dt>Tamaño de cabello:</dt>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<dd>'+value.tamano+'</dd>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="form-group row">'+
                                                        '<div class="col">'+
                                                        '<dt>Tipo de cabello:</dt>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<dd>'+value.tipo+'</dd>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="form-group row">'+
                                                        '<div class="col">'+
                                                        '<dt>Particularidades del cabello:</dt>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<dd>'+value.particularidades+'</dd>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="form-group row">'+
                                                        '<div class="col">'+
                                                        '<dt>Modificaciones del cabello:</dt>'+
                                                        '</div>'+
                                                        '<div class="col">'+
                                                        '<dd>'+value.modificaciones+'</dd>'+
                                                        '</div>'+
                                                    '</div>'+

                                                    '<div class="form-group row">'+
                                                        '<div class="col">'+
                                                        '<dt>Observaciones del cabello:</dt>'+
                                                        '</div>'+

                                                        '<div class="col">'+
                                                        '<dd>'+value.observaciones+'</dd>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');


                    });

                },
                
            });


    $.ajax({
                url: '/descripcionfisica/get_barba/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){   
                    pCabello                     
$("#pBarba").empty();
                        $("#pBarba").append('<div class="card-body bg-white">  <div class="row">    <div class="col-10">      <h5><strong>Datos Barba</strong></h5>      <hr>      <dl class="row">        <dt class="col-sm-4">Color de barba:</dt>        <dd class="col-sm-8">'+value.color+'                  </dd>     <dt class="col-sm-4">Tipo de barba:</dt>        <dd class="col-sm-8">'+value.tipo+'    </dd>                 <dt class="col-sm-4">Estilo de la barba:</dt>        <dd class="col-sm-8">'+value.estilo+'        </dd>        <dt class="col-sm-4">Observaciones de la barba:</dt>        <dd class="col-sm-8">'+value.observaciones+'        </dd>      </dl>          </div>  </div></div>');

                    });

                },
                
            });

    $.ajax({
                url: '/descripcionfisica/get_bigote/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){                        
$("#pBigote").empty();
                        $("#pBigote").append('<div class="card-body bg-white">  <div class="row">    <div class="col-10">      <h5><strong>Datos bigote</strong></h5>      <hr>      <dl class="row">        <dt class="col-sm-4">Color del bigote:</dt>        <dd class="col-sm-8">'+value.color+'                  </dd>     <dt class="col-sm-4">Tipo de bigote:</dt>        <dd class="col-sm-8">'+value.tipo+'    </dd>                 <dt class="col-sm-4">Estilo del bigote:</dt>        <dd class="col-sm-8">'+value.estilo+'        </dd>        <dt class="col-sm-4">Observaciones del bigote:</dt>        <dd class="col-sm-8">'+value.observaciones+'        </dd>      </dl>          </div>  </div></div>');

                    });

                },
                
            });

    $.ajax({
                url: '/descripcionfisica/get_patilla/{{$desaparecido->id}}/',
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){                        
$("#pPatilla").empty();
                        $("#pPatilla").append('<div class="card-body bg-white">  <div class="row">    <div class="col-10">      <h5><strong>Datos patilla</strong></h5>      <hr>      <dl class="row">        <dt class="col-sm-4">Color de patilla:</dt>        <dd class="col-sm-8">'+value.color+'                  </dd>     <dt class="col-sm-4">Tipo de patilla:</dt>        <dd class="col-sm-8">'+value.tipo+'    </dd>                 <dt class="col-sm-4">Estilo de patilla:</dt>        <dd class="col-sm-8">'+value.estilo+'        </dd>        <dt class="col-sm-4">Observaciones de la patilla:</dt>        <dd class="col-sm-8">'+value.observaciones+'        </dd>      </dl>      <hr>    </div>  </div></div>');

                    });

                },
                
            });



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
                }
            }
        }
    }
</script>



@endsection