$(document).ready(function() {
	//Mostrar form muslo izquierdo
	$("#pierna-sup-izq").click(function(event) {
		console.log("Muslo izquierdo");
	    $("#formMusloIzq").toggle();
	});

 	//Mostrar form muslo derecho
  	$("#pierna-sup-der").click(function(event) {
	    console.log("Muslo derecho");
	    $("#formMusloDer").toggle();
  	});

  	//Cargar valores a select de particularidades de muslo izquierdo
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+27,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partMusloIzq").empty();
          $.each(data, function(key, value){   
            $("#partMusloIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de muslo izquierdo
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+27,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modMusloIzq").empty();
          $.each(data, function(key, value){   
            $("#modMusloIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de muslo derecho
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+28,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partMusloDer").empty();
          $.each(data, function(key, value){   
            $("#partMusloDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de muslo derecho
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+28,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modMusloDer").empty();
          $.each(data, function(key, value){   
            $("#modMusloDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

});