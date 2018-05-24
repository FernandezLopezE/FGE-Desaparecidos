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

});