$(document).ready(function(){
	//funcion para mostrar detalles de cabello y vello facial
	function detallesCabello(){
	  //petición para obtener los detalles de cabello.
	          $.ajax({
	                      url: routeDescrip+'/get_cabello/'+extraviado,
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
	                      url: routeDescrip+'/get_barba/'+extraviado,
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
	                      url: routeDescrip+'/get_bigote/'+extraviado,
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
	                      url: routeDescrip+'/get_patilla/'+extraviado,
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
	}

	//Funcion para mostrar detalles si es que ya tiene datos guardados
	function showCabello(){
		console.log(showCabello2);
        if(showCabello2 == true){
          
          $("#datosCabello").hide();
          $("#btnEditarC").show();
          $("#detallesV").show();
          detallesCabello();


        }else{
          
          $("#detallesV").toggle();
          $("#btnEditarC").hide();
          $("#datosCabello").show();
          
          $('#tieneCabello').val(1).trigger('change');
          $('#tieneBarba').val(1).trigger('change');
          $('#tieneBigote').val(1).trigger('change');
          $('#tienePatilla').val(1).trigger('change');


        }
		}

	//SELECT 2
  $('#partiCabello').select2();
  $('#modiCabello').select2();
  $('#modiBarba').select2();
  $('#modiBigote').select2();
  $('#modiPatilla').select2();

	//mostrar sección cabello
  $("#cabello").click(function(event) {
    //alert("Hola mundo");
    $("#acordion").toggle();
    //$("#datosCabello").show();
    showCabello();

  });

  //minimizar
  $("#colapsar").click(function(event) {
        $("#cabello").click();
   });

  //si ya tiene datos que coloree
  if(showCabello2 == true){
  	$("#cabellointerno").css({"fill":"#17a4da", "stroke":"#ffffff","stroke-width":"2-"});
  }
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

            //Limpiar barba
            $('#tieneBarba').prop('selectedIndex',0);
            $('#tipoBarba').prop('selectedIndex',0);
            $('#colorBarba').prop('selectedIndex',0);
            $('#otroTipoBar').val('');
            $('#otroModificacionC').val('');
            $('#otroColorBar').val('');
            $('#observacionesBarba').val('');
            $('#modiBarba').val(null).trigger('change');
            
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

            //Limpiar bigote
            $('#tieneBigote').prop('selectedIndex',0);
            $('#tipoBigote').prop('selectedIndex',0);
            $('#colorBigote').prop('selectedIndex',0);
            $('#otroTipoBig').val('');
            $('#otroModificacionC').val('');
            $('#otroColorBig').val('');
            $('#observacionesBigote').val('');
            $('#modiBigote').val(null).trigger('change');
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

            //Limpiar patilla
            $('#tienePatilla').prop('selectedIndex',0);
            $('#tipoPatilla').prop('selectedIndex',0);
            $('#colorPatilla').prop('selectedIndex',0);
            $('#otroTipoPat').val('');
            $('#otroPartiPat').val('');
            $('#otroColorPat').val('');
            $('#observacionesPatilla').val('');
            $('#modiPatilla').val(null).trigger('change');
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
      url: routeDescrip+'/storeVelloFacial',
      data: dataString,
      dataType: 'json',
      success: function(data) {
     	 showCabello2 = true;           
        $("#cabellointerno").css({"fill":"#17a4da", "stroke":"#ffffff","stroke-width":"2-"});
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

        //Limpiar barba
        $('#tieneBarba').prop('selectedIndex',0);
        $('#tipoBarba').prop('selectedIndex',0);
        $('#colorBarba').prop('selectedIndex',0);
        $('#otroTipoBar').val('');
        $('#otroModificacionC').val('');
        $('#otroColorBar').val('');
        $('#observacionesBarba').val('');
        $('#modiBarba').val(null).trigger('change');

        //Limpiar bigote
            $('#tieneBigote').prop('selectedIndex',0);
            $('#tipoBigote').prop('selectedIndex',0);
            $('#colorBigote').prop('selectedIndex',0);
            $('#otroTipoBig').val('');
            $('#otroModificacionC').val('');
            $('#otroColorBig').val('');
            $('#observacionesBigote').val('');
            $('#modiBigote').val(null).trigger('change');
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

    detallesCabello();

  });


 //Boton Editar
  $("#btnEditarC").click(function(){
   $("#detallesV").toggle();
   $("#btnEditarC").hide();
   $("#datosCabello").show();
   
    //petición para obtener los detalles de cabello.
    $.ajax({
                url: routeDescrip+'/get_cabello/'+extraviado,
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

    //peticion para obtener detalles de barba
    $.ajax({
                url: routeDescrip+'/get_barba/'+extraviado,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        console.log(data);
                    $.each(data, function(key, value){   
                                        
                      $('#tieneBarba').val(value.tenia).trigger('change');
                      $('#tipoBarba').val(value.idTipo).trigger('change');
                      $('#colorBarba').val(value.idColor).trigger('change');
                      $('#modiBarba').val(value.idModi).trigger('change');


                      $("#observacionesBarba").val(value.observaciones);
                      
                        
                    });
                },
            });// fin de detalles de barba.

    //peticion para obtener detalles de bigote.
    $.ajax({
                url: routeDescrip+'/get_bigote/'+extraviado,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){                        
                    $('#tieneBigote').val(value.tenia).trigger('change');
                      $('#tipoBigote').val(value.idTipo).trigger('change');
                      $('#colorBigote').val(value.idColor).trigger('change');
                      $('#modiBigote').val(value.idModi).trigger('change');


                      $("#observacionesBigote").val(value.observaciones);
                        
                    });

                },
                
            });// fin de detalles de bigote.

    //peticion para obtener detalles de patilla
    $.ajax({
                url: routeDescrip+'/get_patilla/'+extraviado,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        
                    $.each(data, function(key, value){                        
                    
                      $('#tienePatilla').val(value.tenia).trigger('change');
                      $('#tipoPatilla').val(value.idTipo).trigger('change');
                      $('#colorPatilla').val(value.idColor).trigger('change');
                      $('#modiPatilla').val(value.idModi).trigger('change');


                      $("#observacionesPatilla").val(value.observaciones);
                    
                    });
                }, 
            });// fin de detalles de patilla

  });

  //boton cerrar o eliminar
  $("#cerrar").click(function(event) {
    //$(".cabello").toggle();
    //peticion para obtener detalles de patilla
    $.ajax({
                url: routeDescrip+'/get_deleteVello/'+extraviado,
                type:"GET",
                dataType:"json",

                success:function(data) {
                  //$("#cabellointerno").css({"fill":"#1d3e53", "stroke":"#ffffff","stroke-width":"2-"});
                  //console.log(data);
                        
                   
                },

                error: function(data) { 
                  console.log("error");
                  $("#cabellointerno").css({"fill":"#1d3e53", "stroke":"#ffffff","stroke-width":"2-"});
                  $("#pCabello").empty();
                  $("#pBarba").empty();
                  $("#pBigote").empty();
                  $("#pPatilla").empty();
                  $("#acordion").toggle();
                  $('#tieneCabello').val(1).trigger('change');
                  $('#tieneBarba').val(1).trigger('change');
                  $('#tieneBigote').val(1).trigger('change');
                  $('#tienePatilla').val(1).trigger('change');
                  showCabello2 = false;
                  //$("#datosCabello").toggle();

                  //showCabello();
                },
            });// fin de detalles de patilla
    });


});