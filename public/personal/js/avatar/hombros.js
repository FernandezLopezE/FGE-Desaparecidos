$(document).ready(function() {
	//Mostrar form de hombro izquierdo
	$("#hombro-izq").click(function(event) {
		console.log("hombro-izquierdo");
		$("#formHombroIzq").toggle();
	});

	//Mostrar form de hombro derecho
	$("#hombro-der").click(function(event) {
		console.log("hombro-derecho");
		$("#formHombroDer").toggle();
	});
});