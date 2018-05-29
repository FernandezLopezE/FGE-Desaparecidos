$(document).ready(function() {

  //obtener particularidades
        $.ajax({
                url: routeDescrip+'/get_particularidades/'+78,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idPartiPecho").empty();
                    $.each(data, function(key, value){                        

                        $("#idPartiPecho").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
        });

        //obtener modificaciones
        $.ajax({
                url: routeDescrip+'/get_modificaciones/'+78,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idModiPecho").empty();
                    $.each(data, function(key, value){                        

                        $("#idModiPecho").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
            });



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
       url: routeDescrip+'/get_particularidades/'+10,
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
       url: routeDescrip+'/get_modificaciones/'+10,
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
       url: routeDescrip+'/get_particularidades/'+10,
       type:"GET",
       dataType:"json",

       success:function(data) {
        $("#idPartCuello").empty();
        $.each(data, function(key, value){   
          $("#idPartCuello").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
             });
          },  
  });
   

   $("#posPecho").change(function(){
      var idPartesCuerpo = $(this).val();
      //obtener particularidades
        $.ajax({
                url: routeDescrip+'/get_particularidades/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idPartiPecho").empty();
                    $.each(data, function(key, value){                        

                        $("#idPartiPecho").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
        });

        //obtener modificaciones
        $.ajax({
                url: routeDescrip+'/get_modificaciones/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idModiPecho").empty();
                    $.each(data, function(key, value){                        

                        $("#idModiPecho").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
            });
   });
});