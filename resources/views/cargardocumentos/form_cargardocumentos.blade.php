extends('layouts.app_uipj')


@section('content')

<!-- link css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/archivo.css') }}">
  <link  rel="stylesheet" type="text/css" href="{{ asset('css/PreVehiculo/fileinput.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/PreVehiculo/theme.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  
  <div class="container">
  <div class="card">
    <form id="formPredenuncia" enctype="multipart/form-data" method="POST" action="" accept-charset="UTF-8">
     {{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}

		<div class="card-header">
      <h5 align="center">Datos generales de la unidad</h5>
    </div>
    
    <div class="row">

          
  <div class="row">

    
   
      <div class="card-header">
        <h5 align="center">Cargar documentos solicitados</h5>
      </div>
<br>
      

      <div align="center" >

        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="selector">
          <label class="btn btn-secondary btn-rounded  form-check-label ">
            <input type="radio" name="img" checked id="opcion1"  value="archivo" >
            <i class="fa fa-folder-open"></i>
            Carga de archivos

          </label>
          <label id="divBtnCamara" class=" btn btn-secondary btn-rounded form-check-label">
            <input align="center"  name="img" type="radio" id="opcion2" value="camara">
            <i class="fa fa-camera-retro"></i>
            Enviar a camara

          </label>
        </div>
        <hr>
        // tipo de documento
        <div class="row" id="complemento_asc" style="display:none;">
          <div class="col-md-6">
            <div class="card-footer text-muted">
              <div id="iden" >
                <select class="custom-select" id="listaiden_op1" name="listaiden1" class="listaiden">
                  <option selected value="" >--Seleccione una opción--</option>
                  @foreach($identificacionoficial as $identificacionoficial)
                    <option  value="{{$option->id}}" >{{$identificacionoficial->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-footer text-muted">
              <div id="iden" >
                <select class="custom-select" id="listaiden_op2" name="listaiden3" class="listaiden">
                  <option selected value="" >--Seleccione una opción--</option>
                  @foreach($factura as $factura)
                  <option  value="{{$option->id}}" >{{$factura->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <input type="hidden" id="tipe_load" name="optCaptura" value="loadFileType">
        </div>

        
        <br>
        <div id="div1" style="display:none;" >
          <br>
          <div class="row" align="center">
            <div class="col  col-md">
            </div>

            <!--busqueda de archivos identificacion oficial-->
            <div class="col-4  col-md-4">
              <div class="card text-center">
                <div class="card-header">
                  <label style="font-size:20px; text-align:center" size=18 type="text">Identificacion oficial</label>
                </div>
                <div class="card-body">
                  <div class="file-loading" >
                    <input id="DOC1" name="ID_OFICIAL" type="file" accept="image/*" style="display: none;">
                  </div>
                </div>

              </div>
            </div>
            <div class="col-4  col-md-4">
              <div class="card text-center">
                <div class="card-header">
                  <label style="font-size:20px; text-align:center" size=18 type="text">Factura del vehículo</label>
                </div>
                <div class="card-body">
                  <div class="file-loading">
                    <input id="DOC5" name="ID_FACTURA" type="file" accept="image/*" style="display: none;">
                  </div>
                </div>

              </div>
            </div>

            <div class="col">
            </div>
          </div>
        </div>


        <div id="div2" style="display:none;">
          <br>
          <div class="row">
            <div class="col col-md">
            </div>
            <br>
            <div class="col-4  col-md-5">
              <div class="card text-center">
                <div class="card-header">
                  <label style="font-size:20px; text-align:center" size=18 type="text">Identificacion oficial</label>
                </div>
                <div class="card-body">
                  <div class="" id="ife_mini"></div>
                  <input type="hidden" id="mini_ife" name="cam_ident" value="">
                  <button id="cam_ide" type="button" class="btn btn-dark" data-toggle="modal" data-target="#profile-photo-camera-modal" onclick="setup('IFE')" disabled="disabled">
                    <i class="fa fa-camera"></i> Capturar imagen
                  </button>
                </div>

              </div>
            </div>
            <div class="col-4  col-md-5">
              <div class="card text-center">
                <div class="card-header">
                  <label style="font-size:20px; text-align:center" size=18 type="text">Factura del vehiculo</label>
                </div>
                <div class="card-body">
                  <div class="" id="fact_mini"></div>
                  <input type="hidden" id="mini_fac" name="cam_fact" value="">
                  <button id="cam_fac" type="button" class="btn btn-dark" data-toggle="modal" data-target="#profile-photo-camera-modal" onclick="setup('FACT')" disabled="disabled">
                    <i class="fa fa-camera"></i> Capturar imagen
                  </button>
                </div>

              </div>
            </div>

          

          </div>

        </div>
        <!--Options oof type the documents-->


        <div class="card-body">
          <div align="right">
            <button type="submit" class="btn btn-primary" id="btnEmpty">Guardar</button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12" id="mapa" style="display: none">
             {!!$map['html']!!}
          </div>
        </div>
      </form>

    </div>
    <p></p>

  </div>

  <div class="">
    <div class="part2">
      <div id="profile-photo-camera-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Captura de documentos</h5>
              <button type="button" onClick="close_cam(true)" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="cuerpo">
              <div id="web_cam_section" class="alert alert-danger" v-if="form.errors.has('photo')">
                <div id="my_camera"></div>
              </div>

              <div id="profile-photo-camera-preview">
                <div id="results">Your captured image will appear here...</div>
              </div>
            </div>
            <div class="modal-footer">

              <button type="button" di="take_p" class="btn btn-primary" :disabled="form.busy" onClick="take_snapshot()">Capturar</button>

              <!-- <button type="button" class="btn btn-primary" :disabled="form.busy" onClick="close_cam(true)"  data-dismiss="modal">Cancelar</button> -->

            </div>
          </div>
        </div>
      </div>

@endsection

      <style>
      #profile-photo-camera-preview,
      #profile-photo-camera-preview video {
        width: 100% !important;
        height: auto !important;
        min-width: 100px;
        min-height: 100px;
      }
    </style>

  </div>

  <!-- <div id="results">Your captured image will appear here...</div> -->
  <br>
  <!-- <div id="my_camera"></div> -->
  
  <script type="text/javascript" src="{{ asset('js/webcam.min.js') }}"></script>

  <script language="JavaScript">
      var cap="";
      Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
      });
      function take_snapshot(tipo) {
        Webcam.snap( function(data_uri) {
          document.getElementById('results').innerHTML ='<img class="img-thumbnail" src="'+data_uri+'"/>';
          var img = $("#results").children("img").clone();
          var tipo = (cap == 'FACT')? '#fact_mini':'#ife_mini';
          console.log('Este es el tipo -> '+tipo+' esta es la imagen ->'+img);
          $(tipo).html(img);

          //-----2
          var tipo2 = (cap == 'FACT')? '#mini_fac':'#mini_ife';
          $(tipo2).val(data_uri);
          //------2
          setTimeout(function() {
            $('#profile-photo-camera-modal').modal('hide');
            $("#results").html('');
          }, 1000);

        } );
        close_cam(false);
        $('#web_cam_section').hide('slow');
      }
      function setup(tipo) {
        this.cap = tipo;
        Webcam.reset();
        Webcam.attach( '#my_camera' );
        $('#web_cam_section').show('slow');
      }
      function close_cam(act){
        if(act){
          $("#results").html('');
        }
        console.log('Calmando el evento');
        Webcam.reset();
      }
  </script>

</div>
<style media="screen">
#my_camera{
  display: block;
  margin: auto;
}
#web_cam_section{
  background-color: #717171;
  border-color: #424242;
}
#cuerpo{
  display: block;
  margin: auto;
}
#ife_mini,#fact_mini{
  padding-bottom: 1em;
}
</style>

<!-- javascript  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('js/prevehiculo/peticiones.js') }}"></script>
<script src="{{ asset('js/prevehiculo/select2.js') }}"></script>
<script src="{{ asset('js/prevehiculo/ordenar.js') }}"></script>


<script src="{{ asset('js/prevehiculo/sortable.js') }}"></script>
<script src="{{ asset('js/prevehiculo/fileinput.js') }}"></script>
<script src="{{ asset('js/prevehiculo/locales/es.js') }}"></script>

<script src="{{ asset('js/prevehiculo/explorer-fa/theme.js') }}"></script>
<script src="{{ asset('js/prevehiculo/fa/theme.js') }}"></script>
<script src="{{ asset('js/prevehiculo/carga.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/geolocalizacion/geolocalizacion.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/camara/camara_validacion.js') }}"></script>



<script type="text/javascript">
    $("#DOC1").fileinput({
        theme: 'fa',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-dark ",
        fileType: "any",

        overwriteInitial: false,
        initialPreviewAsData: true,


    });

    $("#DOC5").fileinput({
        theme: 'fa',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-dark ",
        fileType: "any",
        overwriteInitial: false,
        initialPreviewAsData: true,


    });

  rutaForm = '{{route('savePredenuncia.vehiculo')}}';

  //Pintar mapa de acuerdo al municipio
  $('#idMunicipio').change(function(){
    console.log('hola');
    var identificador = $(this).val();
    var respuesta;
    var locations = [];
  

    if(identificador!=''){
      var ruta = "{{route('get_position',':municipio')}}";
      ruta = ruta.replace(':municipio', identificador);
      datos = null;
      respuesta = peticionInfomacion('get',ruta,datos);
      if (respuesta != null) {
        $('#mapa').css('display','');
        console.log('Total de elementos ->'+respuesta.length);
        for(i=0; i< respuesta.length; i++){
          var puntoMap = [respuesta[i]['nombre'],respuesta[i]['latitud'],respuesta[i]['longitud']];
          locations.push(puntoMap);      
        }

        console.log('Este es el arreglo');
        console.log(locations);

        var map = new google.maps.Map(document.getElementById('map_canvas'), {
         zoom: 8,
         center: new google.maps.LatLng(locations[0][1], locations[0][2]),
         mapTypeId: google.maps.MapTypeId.ROADMAP
       });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {  
         marker = new google.maps.Marker({
           position: new google.maps.LatLng(locations[i][1], locations[i][2]),
           map: map
         });

         google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
             infowindow.setContent(locations[i][0]);
             infowindow.open(map, marker);
           }
         })(marker, i));
       }








      }else{
        alert('Error de servidor');
      }
    }else{
    //alert('no aplica');
    }
  });



  $("#idMarca").change(function() {
    var identificador = $(this).val();
    var respuesta;
    $('#idSubmarca').html('');
    if(identificador!=''){
      var ruta = "{{route('submarca',':marca')}}";
      ruta = ruta.replace(':marca', identificador);
      datos = null;
      respuesta = peticionInfomacion('get',ruta,datos);
      if (respuesta != null) {
        for(i=0; i<respuesta.estado.length; i++){
          $("#idSubmarca").append("<option value='"+respuesta.estado[i].id+"'> "+respuesta.estado[i].nombre+"</option>");
        }
        if(respuesta.estado.length > 0 ){
          localStorage.setItem("idSubmarca", respuesta.estado[0].id);
        }
        console.log('cargando datos');
      }else{
        alert('Error de servidor');
      }
    }else{
    //alert('no aplica');
    }
  });

  $("#idSubmarca").change(function() {
    localStorage.setItem("idSubmarca", $('#idSubmarca').val());
  });

  $("#idEstado").change(function() {
    var identificador = $(this).val();
    var respuesta;
    $('#idMunicipio').html('');
    if(identificador!=''){
      var ruta = "{{route('municipio',':estado')}}";
      ruta = ruta.replace(':estado', identificador);
      datos = null;
      respuesta = peticionInfomacion('get',ruta,datos);
      if (respuesta != null) {
        for(i=0; i<respuesta.estado.length; i++){
          $("#idMunicipio").append("<option value='"+respuesta.estado[i].idMunicipio+"'> "+respuesta.estado[i].nombre+"</option>");
        }
        if(respuesta.estado.length > 0 ){
          localStorage.setItem("idMunicipio", respuesta.estado[0].id);
        }
        console.log('cargando datos');
      }else{
        alert('Error de servidor');
      }
    }else{
    //alert('no aplica');
    }
  });

  $("#idMunicipio").change(function() {
    localStorage.setItem("idMunicipio", $('#idMunicipio').val());
  });



  $('#formPredenuncia').submit(function (e) {
  e.preventDefault();
  var datos = $(this).serialize();
  //console.log(datos);
  //
  var formData = new FormData(this);
  //console.log(formData);



  $.ajax({
    url : "{{route('savePredenuncia.vehiculo')}}",
    data : formData,
    type : 'POST',
    cache: false,
    contentType : false,
    processData : false,

    success : function(json) {
      console.log('Se agrego un vehiculo');
      console.log(json);
      var ruta = '{{ route('generar-pdf') }}/'+json.token;

      var token = "'"+json.token+"'";

      var span = document.createElement('span');
      span.innerHTML= '<img src="data:image/png;base64,'+json.codigoQR+'">'
      +'<br><a href="'+ruta+'" class="" target="_blank">Descargar PDF</a>'
      +'<br><input id="correo" type="email" placeholder="Correo electronico" class="form-control form-control-sm" required>'
      +'<br><input type="button" value="Enviar" class="btn btn-primary" onclick="enviar_mail('+token+')">'
      +'<br><br><span id="email_mjs"></span>'

      swal({
        title: "Su folio de Preregistro es: "+json.token,
        text: "Su preregistro se realizo correctamente",
        icon: "success",
        showConfirmButton:true,
        confirmButtonText:"Guardar",
        content: span,

      });

    },


    error : function(xhr, status) {
      console.log('Disculpe, existió un problema');

      var errores = Object.values(xhr.responseJSON.errors);
      var msj = '';

      for(var i = 0; i < errores.length; i++)
      {
        for(var j =0 ; j < errores[i].length; j++)
        {
          msj = msj+errores[i][j]+'\n';
        }
      }
      console.log(msj);
      swal({
        title: "Error al introducir los datos",
        text: msj,
        icon: "error",

      });
    },

    complete : function(xhr, status) {
      console.log('Petición realizada');
    }
  });

//limpiar formulario

  document.getElementById("formPredenuncia").reset();
  $('#ife_mini, #fact_mini').html('');
  $('#mini_ife,#mini_fac').val('');
  $('#complemento_asc, #div1, #div2').hide();
  $("#idEstado").val('').trigger('change');
  $("#idMarca").val('').trigger('change');
  $("#idSubmarca").val('').trigger('change');
  $("#idMunicipio").val('').trigger('change');
  $("#idColor").val('').trigger('change');
  $("#idAseguradora").val('').trigger('change');
  $("#formPredenuncia").val(0).reset();


});


function enviar_mail (codigo){
  console.log('Aqui la funcion');
  var codigo = codigo;
  var correo =  $('#correo').val();
  var info = {"correo":correo, "folio": codigo };
  //var datos = JSON.parse(info);
  console.log(info);

  var msj = "";

  $.ajax({
    url : "{{route('sendMail')}}/"+correo+"/"+codigo,
    data : info,
    type : 'get',
    cache: false,
    contentType : false,
    processData : false,

    success : function(json) {
      $('#email_mjs').html('<div class="alert alert-primary" role="alert"> El codigo a sido enviado a su correo </div>');
    },

    error : function(xhr, status) {
      $('#email_mjs').html('<div class="alert alert-danger" role="alert"> Disculpe, existió un problema </div>');
    },
    // complete : function(xhr, status) {
    // 	msj = 'Petición realizada';
    // }
  });






};

$( document ).ready(function() {
	get_position('latitud', 'longitud');
	verificar_camara('divBtnCamara');
    console.log( "ready!" );
    var idmarca = $("#idMarca").val();

    if (idmarca > 0) {
      var ruta = "{{route('submarca',':marca')}}";
      ruta = ruta.replace(':marca', idmarca);
      datos = null;
      respuesta = peticionInfomacion('get',ruta,datos);

      if (respuesta != null) {
        for(i=0; i<respuesta.estado.length; i++){
          $("#idSubmarca").append("<option value='"+respuesta.estado[i].id+"'> "+respuesta.estado[i].nombre+"</option>");
          //console.log(respuesta.estado[i].id);
        }
        $('#idSubmarca').val(localStorage.idSubmarca).trigger("change");
      }
    }

    $('#listaiden_op1').change(function(){
        var valor = $('#listaiden_op1').val();
        if(valor!=''){
          var tipoC = $('#tipe_load').val();
          if (tipoC==1){
            $('#DOC1').css('display','');
            $('#cam_ide').attr('disabled',true);
          }else{
            $('#cam_ide').removeAttr('disabled');
            $('#DOC1').css('display','none');
          }
        }
    });

    $('#listaiden_op2').change(function(){
        var valor = $('#listaiden_op2').val();
        if(valor!=''){
          var tipoC = $('#tipe_load').val();
          if (tipoC==1){
            $('#DOC5').css('display','');
            $('#cam_fac').attr('disabled',true);
          }else{
            $('#cam_fac').removeAttr('disabled');
            $('#DOC5').css('display','none');
          }
        }
    });

    $("#idDocumentoCirculacion").change(function(){
      var selec = $("#idDocumentoCirculacion").val();
      console.log(selec);
	    if(selec ==  1) {
		    $('#divPlaca').css('display','');
		    $('#divFolio').css('display','none');
	    } else {
		    $('#divPlaca').css('display','none');
		    $('#divFolio').css('display','');
	    }
    });


});

</script>
