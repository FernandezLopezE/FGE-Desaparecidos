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

});