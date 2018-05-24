$(document).ready(function() {
  //Mostrar form de mano izquierda
  $("#mano-izq").click(function(event) {
    console.log("mano izquierda");
    $("#formManoIzq").toggle();
  });

  //Mostrar form de mano derecha
  $("#mano-der").click(function(event) {
    console.log("mano derecha");
    $("#formManoDer").toggle();
  });

  //Cargar valores a select de particularidades de Muneca izquierdo
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+26,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partMunecaIzq").empty();
          $.each(data, function(key, value){   
            $("#partMunecaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de Muneca izquierdo
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+26,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modMunecaIzq").empty();
          $.each(data, function(key, value){   
            $("#modMunecaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de palma izquierdo
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+39,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partPalmaIzq").empty();
          $.each(data, function(key, value){   
            $("#partPalmaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de palma izquierdo
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+39,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modPalmaIzq").empty();
          $.each(data, function(key, value){   
            $("#modPalmaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de uñas mano izquierda
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+59,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partUnas").empty();
          $.each(data, function(key, value){   
            $("#partUnas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de uñas mano izquierda
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+59,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modUnas").empty();
          $.each(data, function(key, value){   
            $("#modUnas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

      //Cargar valores a select de particularidades de Muneca derecha
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+25,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partMunecaDer").empty();
          $.each(data, function(key, value){   
            $("#partMunecaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de Muneca derecha
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+25,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modMunecaDer").empty();
          $.each(data, function(key, value){   
            $("#modMunecaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de palma derecha
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+38,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partPalmaDer").empty();
          $.each(data, function(key, value){   
            $("#partPalmaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de palma derecha
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+38,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modPalmaDer").empty();
          $.each(data, function(key, value){   
            $("#modPalmaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de uñas
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+59,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partUnas").empty();
          $.each(data, function(key, value){   
            $("#partUnas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de particularidades de uñas mano derecha
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+59,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partUnasDer").empty();
          $.each(data, function(key, value){   
            $("#partUnasDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de uñas mano derecha
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+59,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modUnasDer").empty();
          $.each(data, function(key, value){   
            $("#modUnasDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });


});