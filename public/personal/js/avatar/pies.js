$(document).ready(function() {
	//Mostrar form Pie izquierdo
	$("#pie-izq").click(function(event) {
		console.log("Pie izquierdo");
	    $("#formPieIzq").toggle();
	});

 	//Mostrar form Pie derecho
  	$("#pie-der").click(function(event) {
	    console.log("Pie derecho");
	    $("#formPieDer").toggle();
  	});


  	//Cargar valores a select de particularidades de tobillo izquierdo
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+53,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partTobilloIzq").empty();
          $.each(data, function(key, value){   
            $("#partTobilloIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de tobillo izquierdo
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+53,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modTobilloIzq").empty();
          $.each(data, function(key, value){   
            $("#modTobilloIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de talon izquierdo
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+51,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partTalonIzq").empty();
          $.each(data, function(key, value){   
            $("#partTalonIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de talon izquierdo
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+51,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modTalonIzq").empty();
          $.each(data, function(key, value){   
            $("#modTalonIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de pie izquierdo
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+45,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partPieIzq").empty();
          $.each(data, function(key, value){   
            $("#partPieIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de pie izquierdo
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+45,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modPieIzq").empty();
          $.each(data, function(key, value){   
            $("#modPieIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de tobillo derecho
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+52,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partTobilloDer").empty();
          $.each(data, function(key, value){   
            $("#partTobilloDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de tobillo derecho
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+52,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modTobilloDer").empty();
          $.each(data, function(key, value){   
            $("#modTobilloDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de talon derecho
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+50,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partTalonDer").empty();
          $.each(data, function(key, value){   
            $("#partTalonDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de talon derecho
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+50,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modTalonDer").empty();
          $.each(data, function(key, value){   
            $("#modTalonDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de pie derecho
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+44,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partPieDer").empty();
          $.each(data, function(key, value){   
            $("#partPieDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de pie derecho
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+44,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modPieDer").empty();
          $.each(data, function(key, value){   
            $("#modPieDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

});