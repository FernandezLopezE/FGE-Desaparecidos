$(document).ready(function() {
	//Mostrar form pierna izquierda
	$("#pierna-inf-izq").click(function(event) {
		console.log("Pierna izquierda");
	    $("#formPiernaIzq").toggle();
	});

 	//Mostrar form pierna derecho
  	$("#pierna-inf-der").click(function(event) {
	    console.log("Pierna derecha");
	    $("#formPiernaDer").toggle();
  	});

  	//Cargar valores a select de particularidades de rodilla izquierdo
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+49,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partRodillaIzq").empty();
          $.each(data, function(key, value){   
            $("#partRodillaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de rodilla izquierdo
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+49,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modRodillaIzq").empty();
          $.each(data, function(key, value){   
            $("#modRodillaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de espinilla izquierda
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+68,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partEspinillaIzq").empty();
          $.each(data, function(key, value){   
            $("#partEspinillaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de espinilla izquierda
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+68,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modEspinillaIzq").empty();
          $.each(data, function(key, value){   
            $("#modEspinillaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de rodilla derecha
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+48,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partRodillaDer").empty();
          $.each(data, function(key, value){   
            $("#partRodillaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de rodilla derecha
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+48,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modRodillaDer").empty();
          $.each(data, function(key, value){   
            $("#modRodillaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de espinilla derecha
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+68,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partEspinillaDer").empty();
          $.each(data, function(key, value){   
            $("#partEspinillaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de espinilla derecha
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+68,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modEspinillaDer").empty();
          $.each(data, function(key, value){   
            $("#modEspinillaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

});