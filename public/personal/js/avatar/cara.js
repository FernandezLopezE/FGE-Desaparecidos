$(document).ready(function() {
	$("#cabeza").click(function(event) {
		$("#formCara").toggle();
	});

	$("#minCara").click(function(event) {
        $("#formCara").toggle();
    });

	//INICIO FUNCIONES PARA CEJAS
	$('#infocejas').on('change', function(){
		///alert("Hola");
		var idPartesCuerpo = 73;
		var opcion = $(this).val();
		//alert("hola");
		if(opcion == "SÍ"){
			console.log("Entro");
			//obtener tipo
	    	$.ajax({
	                url: '/descripcionfisica/get_tipos/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tipoCeja").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tipoCeja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idSubParticularidades").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idSubParticularidades").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idSubModificaciones").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idSubModificaciones").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });
		}
		
	});

    $("#posCejas").on('change', function(){
    	var idPartesCuerpo = $(this).val();
    	//obtener tipo
    	$.ajax({
                url: '/descripcionfisica/get_tipos/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#tipoCeja").empty();
                        console.log("hecho");
                    $.each(data, function(key, value){                        

                        $("#tipoCeja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
        });

        //obtener particularidades
        $.ajax({
                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idSubParticularidades").empty();
                    $.each(data, function(key, value){                        

                        $("#idSubParticularidades").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
        });

        //obtener modificaciones
        $.ajax({
                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idSubModificaciones").empty();
                    $.each(data, function(key, value){                        

                        $("#idSubModificaciones").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
            });

    });

    //FIN FUNCIONES PARA CEJAS
});