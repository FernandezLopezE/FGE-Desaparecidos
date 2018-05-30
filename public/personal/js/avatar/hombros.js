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
       url: routeDescrip+'/get_particularidades/'+18,
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
       url: routeDescrip+'/get_modificaciones/'+18,
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
       url: routeDescrip+'/get_particularidades/'+17,
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
       url: routeDescrip+'/get_modificaciones/'+17,
       type:"GET",
       dataType:"json",

       success:function(data) {
		    $("#modHombroDer").empty();
		   	$.each(data, function(key, value){   
		    	$("#modHombroDer").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
	           });
	        },  
	});

	//Mostrar otra particularidad hombro izquierdo
	$("#partHombroIzq").change(function(event) {
		partHombIzq = $("#partHombroIzq").val();
	    if (partHombIzq == "189") {
	      $("#hombroIzq1").show();
	    }else{
	      $("#hombroIzq1").hide();
	    }
	  });

	//Mostrar otra modificacion hombro izquierdo
	$("#modHombroIzq").change(function(event) {
		modHomIzq = $("#modHombroIzq").val();
	    if (modHomIzq == "157") {
	      $("#hombroIzq2").show();
	    }else{
	      $("#hombroIzq2").hide();
	    }
	  });

	//Mostrar otra particularidad hombro derecho
	$("#partHombroDer").change(function(event) {
		partHomDer = $("#partHombroDer").val();
	    if (partHomDer == "199") {
	      $("#hombroDer1").show();
	    }else{
	      $("#hombroDer1").hide();
	    }
	  });

	//Mostrar otra modificacion hombro derecho
	$("#modHombroDer").change(function(event) {
		modHomDer = $("#modHombroDer").val();
	    if (modHomDer == "163") {
	      $("#hombroDer2").show();
	    }else{
	      $("#hombroDer2").hide();
	    }
	  });
});