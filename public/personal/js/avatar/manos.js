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
});