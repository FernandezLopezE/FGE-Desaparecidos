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
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+26,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+26,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partMunecaIzq").empty();
          $.each(data, function(key, value){   
            $("#partMunecaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de Muneca izquierdo
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+26,
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+26,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modMunecaIzq").empty();
          $.each(data, function(key, value){   
            $("#modMunecaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de palma izquierdo
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+39,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+39,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partPalmaIzq").empty();
          $.each(data, function(key, value){   
            $("#partPalmaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de palma izquierdo
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+39,
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+39,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modPalmaIzq").empty();
          $.each(data, function(key, value){   
            $("#modPalmaIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de uñas mano izquierda
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+59,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+59,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partUnas").empty();
          $.each(data, function(key, value){   
            $("#partUnas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de uñas mano izquierda
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+59,
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+59,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modUnas").empty();
          $.each(data, function(key, value){   
            $("#modUnas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

      //Cargar valores a select de particularidades de Muneca derecha
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+25,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+25,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partMunecaDer").empty();
          $.each(data, function(key, value){   
            $("#partMunecaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de Muneca derecha
<<<<<<< HEAD
   /* $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+25,
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+25,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modMunecaDer").empty();
          $.each(data, function(key, value){   
            $("#modMunecaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de palma derecha
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+38,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+38,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partPalmaDer").empty();
          $.each(data, function(key, value){   
            $("#partPalmaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de palma derecha
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_modificaciones/'+38,
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+38,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modPalmaDer").empty();
          $.each(data, function(key, value){   
            $("#modPalmaDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de uñas
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+59,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+59,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partUnas").empty();
          $.each(data, function(key, value){   
            $("#partUnas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de particularidades de uñas mano derecha
<<<<<<< HEAD
    /*$.ajax({
         url: '/descripcionfisica/get_particularidades/'+59,
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+59,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partUnasDer").empty();
          $.each(data, function(key, value){   
            $("#partUnasDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/

    //Cargar valores a select de modificaciones de uñas mano derecha
<<<<<<< HEAD
   /* $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+59,
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+59,
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modUnasDer").empty();
          $.each(data, function(key, value){   
            $("#modUnasDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });*/


});