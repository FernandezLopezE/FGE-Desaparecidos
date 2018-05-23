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

	//Cargar valores a select de particularidades de hombro izquierdo
	$.ajax({
       url: '/descripcionfisica/get_particularidades/'+18,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#partHombroIzq").empty();
		   	$.each(data, function(key, value){   
		    	$("#partHombroIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

	//Cargar valores a select de modificaciones de hombro izquierdo
	$.ajax({
       url: '/descripcionfisica/get_modificaciones/'+18,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#modHombroIzq").empty();
		   	$.each(data, function(key, value){   
		    	$("#modHombroIzq").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

	//Cargar valores a select de particularidades de hombro derecho
	$.ajax({
       url: '/descripcionfisica/get_particularidades/'+17,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#partHombroDer").empty();
		   	$.each(data, function(key, value){   
		    	$("#partHombroDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

	//Cargar valores a select de modificaciones de hombro derecho
	$.ajax({
       url: '/descripcionfisica/get_modificaciones/'+17,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#modHombroDer").empty();
		   	$.each(data, function(key, value){   
		    	$("#modHombroDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});
});