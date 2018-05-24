$(document).ready(function() {
	//Mostrar form pierna izquierda
	$("#pierna-inf-izq").click(function(event) {
		console.log("Pierna izquierda");
	    $("#formPiernaIzq").toggle();
	});

 	//Mostrar form muslo derecho
  	$("#pierna-inf-der").click(function(event) {
	    console.log("Pierna derecha");
	    $("#formPiernaDer").toggle();
  	});

});