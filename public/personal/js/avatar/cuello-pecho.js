$(document).ready(function() {

	//Cargar valores a select de particularidades de cuello
	$.ajax({
       url: '/descripcionfisica/get_particularidades/'+10,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#idPartCuello").empty();
		   	$.each(data, function(key, value){   
		    	$("#idPartCuello").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

	//Cargar valores a select de modificaciones de cuello
	$.ajax({
       url: '/descripcionfisica/get_modificaciones/'+10,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#idModCuello").empty();
		   	$.each(data, function(key, value){   
		    	$("#idModCuello").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});
   
});