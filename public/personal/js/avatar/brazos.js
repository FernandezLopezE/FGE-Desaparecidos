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
});