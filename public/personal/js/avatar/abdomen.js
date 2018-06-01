$(document).ready(function() {
  //Mostrar form abdomen
  $("#abdomen").click(function(event) {
    console.log("Abdomen");
    $("#formAbdomen").toggle();
  });

  //Cargar valores a select de particularidades de Abdomen
<<<<<<< HEAD
    // $.ajax({
    //      url: '/descripcionfisica/get_particularidades/'+2,
    //      type:"GET",
    //      dataType:"json",
=======
    $.ajax({
         url: routeDescrip+'/get_particularidades/'+2,
         type:"GET",
         dataType:"json",
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b

    //      success:function(data) {
    //       $("#partAbdomen").empty();
    //       $.each(data, function(key, value){   
    //         $("#partAbdomen").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
    //            });
    //         },  
    // });

    //Cargar valores a select de modificaciones de Abdomen
<<<<<<< HEAD
    // $.ajax({
    //      url: '/descripcionfisica/get_modificaciones/'+2,
    //      type:"GET",
    //      dataType:"json",
=======
    $.ajax({
         url: routeDescrip+'/get_modificaciones/'+2,
         type:"GET",
         dataType:"json",
>>>>>>> 13ae179fdf61db27435ec7741d8f4fecfca74d1b

    //      success:function(data) {
    //       $("#modAbdomen").empty();
    //       $.each(data, function(key, value){   
    //         $("#modAbdomen").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
    //            });
    //         },  
    // });

  //Mostrar otra particularidad de abdomen
  $("#partAbdomen").change(function(event) {
    partAbdo = $("#partAbdomen").val();
    if (partAbdo == "432") {
      $("#abdomen1").show();
    }else{
      $("#abdomen1").hide();
      $('#otraPartAbdomen').val('');
    }
  });

  //Mostrar otra modificacion de abdomen
  $("#modAbdomen").change(function(event) {
    modAbdo = $("#modAbdomen").val();
    if (modAbdo == "313") {
      $("#abdomen2").show();
    }else{
      $("#abdomen2").hide();
      $('#otraModAbdomen').val('');
    }
  });

});