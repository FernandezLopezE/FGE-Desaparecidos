$(document).ready(function() {
	  //Mostrar form de brazo izquierdo
  	$("#brazo-izq").click(function(event) {
	    console.log("brazo-izquierdo");
	    $("#formBrazoIzq").toggle();
  	});

  	//Mostrar form de brazo derecho
  	$("#brazo-der").click(function(event) {
    	console.log("brazo-derecho");
    	$("#formBrazoDer").toggle();
  	});

    //Cargar valores a select de particularidades de brazo izquierdo
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+4,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partBrazoIzq").empty();
          $.each(data, function(key, value){   
            $("#partBrazoIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de brazo izquierdo
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+4,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modBrazoIzq").empty();
          $.each(data, function(key, value){   
            $("#modBrazoIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de codo izquierdo
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+8,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partCodoIzq").empty();
          $.each(data, function(key, value){   
            $("#partCodoIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de codo izquierdo
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+8,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modCodoIzq").empty();
          $.each(data, function(key, value){   
            $("#modCodoIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de antebrazo izquierdo
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+3,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partAntebrazoIzq").empty();
          $.each(data, function(key, value){   
            $("#partAntebrazoIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de antebrazo izquierdo
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+3,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modAntebrazoIzq").empty();
          $.each(data, function(key, value){   
            $("#modAntebrazoIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de brazo derecho
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+61,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partBrazoDer").empty();
          $.each(data, function(key, value){   
            $("#partBrazoDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de brazo derecho
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+61,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modBrazoDer").empty();
          $.each(data, function(key, value){   
            $("#modBrazoDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de codo derecho
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+9,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partCodoDer").empty();
          $.each(data, function(key, value){   
            $("#partCodoDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de codo derecho
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+9,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modCodoDer").empty();
          $.each(data, function(key, value){   
            $("#modCodoDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de antebrazo derecho
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+62,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partAntebrazoDer").empty();
          $.each(data, function(key, value){   
            $("#partAntebrazoDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de antebrazo derecho
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+62,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modAntebrazoDer").empty();
          $.each(data, function(key, value){   
            $("#modAntebrazoDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

  //Información de brazo izquierdo
  $("#infoBrazoIzq").change(function(event) {
    resBrazo = $("#infoBrazoIzq").val();
    if (resBrazo == "SÍ") {
      $("#brazo1").show();
      $("#brazo2").show();
      $("#brazo5").show();
    }else{
      $("#brazo1").hide();
      $("#brazo2").hide();
      $("#brazo3").hide();
      $("#brazo4").hide();
      $("#brazo5").hide();
      $('#partBrazoIzq').prop('selectedIndex',0); 
      $('#otraPartBrazoIzq').val('');
      $('#modBrazoIzq').prop('selectedIndex',0); 
      $('#otraModBrazoIzq').val('');
      $('#obseBrazoIzq').val('');
    }
  });

  //Mostrar otra particularidad de brazo izquierdo
  $("#partBrazoIzq").change(function(event) {
    partBraIzq = $("#partBrazoIzq").val();
    if (partBraIzq == "209") {
      $("#brazo3").show();
    }else{
      $("#brazo3").hide();
      $('#otraPartBrazoIzq').val('');
    }
  });

  //Mostrar otra modificacion de brazo izquierdo
  $("#modBrazoIzq").change(function(event) {
    modBraIzq = $("#modBrazoIzq").val();
    if (modBraIzq == "170") {
      $("#brazo4").show();
    }else{
      $("#brazo4").hide();
      $('#otraModBrazoIzq').val('');
    }
  });

  //Información de codo izquierdo
  $("#infoCodoIzq").change(function(event) {
    resCodoIzq = $("#infoCodoIzq").val();
    if (resCodoIzq == "SÍ") {
      $("#codo1").show();
      $("#codo2").show();
      $("#codo5").show();
    }else{
      $("#codo1").hide();
      $("#codo2").hide();
      $("#codo3").hide();
      $("#codo4").hide();
      $("#codo5").hide();
      $('#partCodoIzq').prop('selectedIndex',0); 
      $('#otraPartCodIzq').val('');
      $('#modCodoIzq').prop('selectedIndex',0); 
      $('#otraModCodIzq').val('');
      $('#obseCodoIzq').val('');
    }
  });

  //Mostrar otra particularidad de codo izquierdo
  $("#partCodoIzq").change(function(event) {
    partCodIzq = $("#partCodoIzq").val();
    if (partCodIzq == "248") {
      $("#codo3").show();
    }else{
      $("#codo3").hide();
      $('#otraPartBrazoIzq').val('');
    }
  });

  //Mostrar otra modificacion de codo izquierdo
  $("#modCodoIzq").change(function(event) {
    modCodIzq = $("#modCodoIzq").val();
    if (modCodIzq == "193") {
      $("#codo4").show();
    }else{
      $("#codo4").hide();
      $('#otraModCodIzq').val('');
    }
  });

  //Información de antebrazo izquierdo
  $("#infoAnteIzq").change(function(event) {
    resAntebrazoIza = $("#infoAnteIzq").val();
    if (resAntebrazoIza == "SÍ") {
      $("#ante1").show();
      $("#ante2").show();
      $("#ante5").show();
    }else{
      $("#ante1").hide();
      $("#ante2").hide();
      $("#ante3").hide();
      $("#ante4").hide();
      $("#ante5").hide();
      $('#partAntebrazoIzq').prop('selectedIndex',0); 
      $('#otraPartAnteIZq').val('');
      $('#modAntebrazoIzq').prop('selectedIndex',0); 
      $('#otraModAnteIzq').val('');
      $('#obseAnteIzq').val('');
    }
  });

  //Mostrar otra particularidad de antebrazo izquierdo
  $("#partAntebrazoIzq").change(function(event) {
    partAnteIzq = $("#partAntebrazoIzq").val();
    if (partAnteIzq == "229") {
      $("#ante3").show();
    }else{
      $("#ante3").hide();
      $('#otraPartAnteIZq').val('');
    }
  });

  //Mostrar otra modificacion de antebrazo izquierdo
  $("#modAntebrazoIzq").change(function(event) {
    modAnteIzq = $("#modAntebrazoIzq").val();
    if (modAnteIzq == "183") {
      $("#ante4").show();
    }else{
      $("#ante4").hide();
      $('#otraModAnteIzq').val('');
    }
  });

  //Información de brazo derecho
  $("#infoBrazoDer").change(function(event) {
    resBrazoDer = $("#infoBrazoDer").val();
    if (resBrazoDer == "SÍ") {
      $("#brazoder1").show();
      $("#brazoder2").show();
      $("#brazoder5").show();
    }else{
      $("#brazoder1").hide();
      $("#brazoder2").hide();
      $("#brazoder3").hide();
      $("#brazoder4").hide();
      $("#brazoder5").hide();
      $('#partBrazoDer').prop('selectedIndex',0); 
      $('#otraPartBrazoDer').val('');
      $('#modBrazoDer').prop('selectedIndex',0); 
      $('#otroModBrazoDer').val('');
      $('#obseBrazoDer').val('');
    }
  });

  //Mostrar otra particularidad de brazo derecho
  $("#partBrazoDer").change(function(event) {
    partBrazDer = $("#partBrazoDer").val();
    if (partBrazDer == "219") {
      $("#brazoder3").show();
    }else{
      $("#brazoder3").hide();
      $('#otraPartBrazoDer').val('');
    }
  });

  //Mostrar otra modificacion de brazo derecho
  $("#modBrazoDer").change(function(event) {
    modBrazDer = $("#modBrazoDer").val();
    if (modBrazDer == "177") {
      $("#brazoder4").show();
    }else{
      $("#brazoder4").hide();
      $('#otroModBrazoDer').val('');
    }
  });

  //Información de codo derecho
  $("#infoCodoDer").change(function(event) {
    resBrazoDer = $("#infoCodoDer").val();
    if (resBrazoDer == "SÍ") {
      $("#codoDer1").show();
      $("#codoDer2").show();
      $("#codoDer5").show();
    }else{
      $("#codoDer1").hide();
      $("#codoDer2").hide();
      $("#codoDer3").hide();
      $("#codoDer4").hide();
      $("#codoDer5").hide();
      $('#partCodoDer').prop('selectedIndex',0); 
      $('#otroPartCodoDer').val('');
      $('#modCodoDer').prop('selectedIndex',0); 
      $('#otroModCodoDer').val('');
      $('#obseCodoDer').val('');
    }
  });

  //Mostrar otra particularidad de codo derecho
  $("#partCodoDer").change(function(event) {
    partCodDer = $("#partCodoDer").val();
    if (partCodDer == "257") {
      $("#codoDer3").show();
    }else{
      $("#codoDer3").hide();
      $('#otroPartCodoDer').val('');
    }
  });

  //Mostrar otra modificacion de codo derecho
  $("#modCodoDer").change(function(event) {
    modCodDer = $("#modCodoDer").val();
    if (modCodDer == "197") {
      $("#codoDer4").show();
    }else{
      $("#codoDer4").hide();
      $('#otroModCodoDer').val('');
    }
  });

  //Información de antebrazo derecho
  $("#infoAntebrazoDer").change(function(event) {
    resAntDerDer = $("#infoAntebrazoDer").val();
    if (resAntDerDer == "SÍ") {
      $("#antebrazoDer1").show();
      $("#antebrazoDer2").show();
      $("#antebrazoDer5").show();
    }else{
      $("#antebrazoDer1").hide();
      $("#antebrazoDer2").hide();
      $("#antebrazoDer3").hide();
      $("#antebrazoDer4").hide();
      $("#antebrazoDer5").hide();
      $('#partAntebrazoDer').prop('selectedIndex',0); 
      $('#otraPartAnteDer').val('');
      $('#modAntebrazoDer').prop('selectedIndex',0); 
      $('#otraModAnteDer').val('');
      $('#obseAnteDer').val('');
    }
  });

  //Mostrar otra particularidad de antebrazo derecho
  $("#partAntebrazoDer").change(function(event) {
    partAntebDer = $("#partAntebrazoDer").val();
    if (partAntebDer == "239") {
      $("#antebrazoDer3").show();
    }else{
      $("#antebrazoDer3").hide();
      $('#otraPartAnteDer').val('');
    }
  });

  //Mostrar otra modificacion de antebrazo derecho
  $("#modAntebrazoDer").change(function(event) {
    modAntebDer = $("#modAntebrazoDer").val();
    if (modAntebDer == "189") {
      $("#antebrazoDer4").show();
    }else{
      $("#antebrazoDer4").hide();
      $('#otraModAnteDer').val('');
    }
  });

});