$(document).ready(function() {
	$("#cabeza").click(function(event) {
		$("#formCara").toggle();
	});

	$("#minCara").click(function(event) {
        $("#formCara").toggle();
    });

	//INICIO SECCIÓN CEJAS
	$('#infocejas').on('change', function(){
		///alert("Hola");
		var idPartesCuerpo = 73;
		var opcion = $(this).val();
		//alert("hola");
		if(opcion == "SÍ"){
			console.log("Entro cejas");
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

	//Cambio de tipo de ceja
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
    //FIN SECCIÓN CEJAS

    //INICIO SECCIÓN OJOS
    $('#infoOjos').on('change', function(){
		
		var idPartesCuerpo = 74;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro ojos");
			//obtener color
	    	$.ajax({
	                url: '/descripcionfisica/get_coloresCuerpo/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#colorOjos").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#colorOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiOjos").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiOjos").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

	        //obtener tamaño
	    	$.ajax({
	                url: '/descripcionfisica/get_tamano/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tamanoOjos").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tamanoOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });
		}
		
	});


	$("#posOjos").on('change', function(){
		var idPartesCuerpo = $(this).val();
		

		
			console.log("Entro ojos");
			//obtener color
	    	$.ajax({
	                url: '/descripcionfisica/get_coloresCuerpo/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#colorOjos").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#colorOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiOjos").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiOjos").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

	        //obtener tamaño
	    	$.ajax({
	                url: '/descripcionfisica/get_tamano/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tamanoOjos").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tamanoOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });
		
	});

	//FIN SECCIÓN OJOS

	//INICIO SECCIÓN NARIZ
	$('#infoNariz').on('change', function(){
		
		var idPartesCuerpo = 31;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro nariz");
	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiNariz").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiNariz").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiNariz").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiNariz").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

	        //obtener tipo
	    	$.ajax({
	                url: '/descripcionfisica/get_tipos/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tipoNariz").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tipoNariz").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });
		}
		
	});

	//FIN DE SECCIÓN NARIZ

	//INICIO SECCIÓN BOCA
	$('#infoBoca').on('change', function(){
		
		var idPartesCuerpo = 72;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro boca");
			//obtener color
	    	$.ajax({
	                url: '/descripcionfisica/get_coloresCuerpo/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#colorOjos").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#colorOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiBoca").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiBoca").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiBoca").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiBoca").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

	        //obtener tamaño
	    	$.ajax({
	                url: '/descripcionfisica/get_tamano/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tamanoBoca").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tamanoBoca").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });
		}
		
	});

	$('#posBoca').on('change', function(){
		
		var idPartesCuerpo =  $(this).val();

		
			console.log("Entro boca");
			//obtener color
	    	$.ajax({
	                url: '/descripcionfisica/get_coloresCuerpo/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#colorOjos").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#colorOjos").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiBoca").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiBoca").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiBoca").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiBoca").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

	        //obtener tamaño
	    	$.ajax({
	                url: '/descripcionfisica/get_tamano/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tamanoBoca").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tamanoBoca").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });
		
		
	});
	//FIN SECCIÓN BOCA

	//INICIO SECCIÓN OREJAS
	$('#infoOrejas').on('change', function(){
		
		var idPartesCuerpo = 77;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro oreja");
			//obtener color
	    	$.ajax({
	                url: '/descripcionfisica/get_tipos/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tipoOreja").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tipoOreja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiOreja").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiOreja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiOreja").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiOreja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

		}
		
	});

	$('#posOreja').on('change', function(){
		
		var idPartesCuerpo = $(this).val();		

			console.log("Entro oreja");
			//obtener tipo
	    	$.ajax({
	                url: '/descripcionfisica/get_tipos/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#tipoOreja").empty();
	                        console.log("hecho");
	                    $.each(data, function(key, value){                        

	                        $("#tipoOreja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiOreja").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiOreja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiOreja").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiOreja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });
	  		
	});
	//FIN SECCIÓN OREJAS

	//INICIO SECCIÓN FRENTE
	$('#infoFrente').on('change', function(){
		
		var idPartesCuerpo = 16;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro frente");

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiFrente").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiFrente").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiFrente").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiFrente").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

		}
		
	});
	//FIN SECCIÓN FRENTE

	//INICIO SECCIÓN CACHETES
	$('#infoMejillas').on('change', function(){
		
		var idPartesCuerpo = 23;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro mejilla");

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiMejillas").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiMejillas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiMejillas").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiMejillas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

		}
		
	});

	$('#posMejilla').on('change', function(){
		
		var idPartesCuerpo = $(this).val();
		
			console.log("Entro mejilla");

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiMejillas").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiMejillas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiMejillas").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiMejillas").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

	});

	//FIN SECCIÓN CACHETES

	//INCIO SECCIÓN MENTÓN
	$('#infoMenton').on('change', function(){
		
		var idPartesCuerpo = 24;
		var opcion = $(this).val();

		if(opcion == "SÍ"){
			console.log("Entro MENTÓN");

	        //obtener particularidades
	        $.ajax({
	                url: '/descripcionfisica/get_particularidades/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idPartiMenton").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiMenton").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiMenton").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiMenton").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	            });

		}
		
	});
	//FIN SECCIÓN MENTÓN
});