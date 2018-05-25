$(document).ready(function() {
  //Mostrar form de Cuello
  $("#cuello").click(function(event) {
    console.log("Cuello");
    $("#formCuello").toggle();
    });

  //Mostrar form de pecho
  $("#pectoral").click(function(event) {
    console.log("Pecho");
    $("#formPecho").toggle();
    });

  
	//Cargar valores a select de particularidades de cuello
	$.ajax({
       url: '/descripcionfisica/get_particularidades/'+10,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#idPartCuello").empty();
		   	$.each(data, function(key, value){   
		    	$("#idPartCuello").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

	//Cargar valores a select de modificaciones de cuello
	$.ajax({
       url: '/descripcionfisica/get_modificaciones/'+10,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#idModCuello").empty();
		   	$.each(data, function(key, value){   
		    	$("#idModCuello").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

  //Mostrar otra particularidad cuello
  $("#idPartCuello").change(function(event) {
    partCuello = $("#idPartCuello").val();
    if (partCuello == "169") {
      $("#cuello1").show();
    }else{
      $("#cuello1").hide();
    }
  });

  //Mostrar otra modificacion cuello
  $("#idModCuello").change(function(event) {
    modCuello = $("#idModCuello").val();
    if (modCuello == "146") {
      $("#cuello2").show();
    }else{
      $("#cuello2").hide();
    }
  });

  //Cargar valores a select de pecho
  $.ajax({
       url: '/descripcionfisica/get_particularidades/'+10,
       type:"GET",
       dataType:"json",

       success:function(data) {
        $("#idPartCuello").empty();
        $.each(data, function(key, value){   
          $("#idPartCuello").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
             });
          },  
  });
   
});