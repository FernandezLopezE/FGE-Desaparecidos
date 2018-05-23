$(document).ready(function() {
	//Mostrar form muslo izquierdo
	$("#pierna-sup-izq").click(function(event) {
		console.log("Muslo izquierdo");
	    $("#formMusloIzq").toggle();
	});

 	//Mostrar form muslo derecho
  	$("#pierna-sup-der").click(function(event) {
	    console.log("Muslo derecho");
	    $("#formMusloDer").toggle();
  	});

});