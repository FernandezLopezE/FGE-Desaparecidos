$(document).ready(function() {
  //Mostrar form abdomen
  $("#abdomen").click(function(event) {
    console.log("Abdomen");
    $("#formAbdomen").toggle();
  });

  //Cargar valores a select de particularidades de Abdomen
    $.ajax({
         url: '/descripcionfisica/get_particularidades/'+2,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#partAbdomen").empty();
          $.each(data, function(key, value){   
            $("#partAbdomen").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

    //Cargar valores a select de modificaciones de Abdomen
    $.ajax({
         url: '/descripcionfisica/get_modificaciones/'+2,
         type:"GET",
         dataType:"json",

         success:function(data) {
          $("#modAbdomen").empty();
          $.each(data, function(key, value){   
            $("#modAbdomen").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
               });
            },  
    });

});