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
});