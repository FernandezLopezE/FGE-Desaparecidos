$(document).ready(function() {
	var ResCejas, otraCeja, otraPartCeja, otraModCeja, ResOjos, otroColorOjo, otraPartOjo, otraModOjo, resNariz, otroTipoNariz, partNariz, otraModNariz, resBoca, 
	otraPartBoca, otraModBoca, resOrejas, otroTipoOreja, otraPartOreja, resFrente, otraPartFrente, otraModFrente, resMejilla, otraPartMejilla, otraModMejilla, otraPartMenton, otraModMenton;
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
	                        $("#idPartiCeja").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idPartiCeja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

	                    });

	                },
	                
	        });

	        //obtener modificaciones
	        $.ajax({
	                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
	                type:"GET",
	                dataType:"json",

	                success:function(data) {
	                        $("#idModiCeja").empty();
	                    $.each(data, function(key, value){                        

	                        $("#idModiCeja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

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
                        $("#idPartiCeja").empty();
                    $.each(data, function(key, value){                        

                        $("#idPartiCeja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

                    });

                },
                
        });

        //obtener modificaciones
        $.ajax({
                url: '/descripcionfisica/get_modificaciones/'+idPartesCuerpo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        $("#idModiCeja").empty();
                    $.each(data, function(key, value){                        

                        $("#idModiCeja").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

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

	//MOSTRAR - OCULTAR CAMPOS
	//Sección Cejas
	$("#infocejas").change(function() {
		ResCejas = $("#infocejas").val();
		if (ResCejas == 'SÍ') {
           $('#cejas2').show();
           $('#cejas3').show();
           //$('#cejas4').show();
           $('#cejas5').show();
           //$('#cejas6').show();
           //$('#cejas7').show();
           $('#cejas8').show();
        }else{
           $('#cejas2').hide();
           $('#cejas3').hide();
           $('#cejas4').hide();
           $('#cejas5').hide();
           $('#cejas6').hide();
           $('#cejas7').hide();
           $('#cejas8').hide();
        }
	});

	$("#tipoCeja").change(function() {
		otraCeja = $("#tipoCeja").val();
		if (otraCeja =="31") {
			$("#cejas4").show();
		} else{
			$("#cejas4").hide();
		}
	});

	$("#idPartiCeja").change(function() {
		otraPartCeja = $("#idPartiCeja").val();
		//alert(otraPartCeja);
		if (otraPartCeja =="30") {
			$("#cejas6").show();
		} else{
			$("#cejas6").hide();
		}
	});

	$("#idModiCeja").change(function() {
		otraModCeja = $("#idModiCeja").val();
		//alert(otraModCeja);
		if (otraModCeja =="32") {
			$("#cejas7").show();
		} else{
			$("#cejas7").hide();
		}
	});

	//Sección ojos
	$("#infoOjos").change(function() {
		ResOjos = $("#infoOjos").val();
		if (ResOjos == "SÍ") {
			$('#ojos1').show();
			$('#ojos2').show();
			//$('#ojos3').show();
			$('#ojos4').show();
			$('#ojos5').show();
			$('#ojos6').show();
			$('#ojos9').show();
		}else{
			$('#ojos1').hide();
			$('#ojos2').hide();
			$('#ojos3').hide();
			$('#ojos4').hide();
			$('#ojos5').hide();
			$('#ojos6').hide();
			$('#ojos7').hide();
			$('#ojos8').hide();
			$('#ojos9').hide();
			}
	});

	$("#colorOjos").change(function(event) {
		otroColorOjo = $("#colorOjos").val();
		if (otroColorOjo ==24) {
			$('#ojos3').show();
		}else{
			$('#ojos3').hide();
		}
	});

	$("#idPartiOjos").change(function(event) {
		otraPartOjo = $("#idPartiOjos").val();
		if (otraPartOjo ==61) {
			$('#ojos7').show();
		}else{
			$('#ojos7').hide();
		}
	});

	$("#idModiOjos").change(function(event) {
		otraModOjo = $("#idModiOjos").val();
		if (otraModOjo ==44) {
			$('#ojos8').show();
		}else{
			$('#ojos8').hide();
		}
	});

	//Sección Nariz
	$("#infoNariz").change(function(event) {
		resNariz = $("#infoNariz").val();
		if (resNariz == "SÍ") {
			$("#nariz1").show();
			$("#nariz3").show();
			$("#nariz4").show();
			$("#nariz7").show();
		}else{
			$("#nariz1").hide();
			$("#nariz2").hide();
			$("#nariz3").hide();
			$("#nariz4").hide();
			$("#nariz5").hide();
			$("#nariz6").hide();
			$("#nariz7").hide();
		}
	});

	$("#tipoNariz").change(function(event) {
	otroTipoNariz = $("#tipoNariz").val();
		if (otroTipoNariz == "37") {
			$("#nariz2").show();
		}else{
			$("#nariz2").hide();
		}
	});

	$("#idPartiNariz").change(function(event) {
	partNariz = $("#idPartiNariz").val();
		if (partNariz == "130") {
			$("#nariz5").show();
		}else{
			$("#nariz5").hide();
		}
	});

	$("#idModiNariz").change(function(event) {
	otraModNariz = $("#idModiNariz").val();
		if (otraModNariz == "114") {
			$("#nariz6").show();
		}else{
			$("#nariz6").hide();
		}
	});

	//Sección Boca
	$("#infoBoca").change(function(event) {
		resBoca = $("#infoBoca").val();
		if (resBoca == "SÍ") {
			$("#boca1").show();
			$("#boca2").show();
			$("#boca3").show();
			$("#boca4").show();
			$("#boca7").show();
		}else{
			$("#boca1").hide();
			$("#boca2").hide();
			$("#boca3").hide();
			$("#boca4").hide();
			$("#boca5").hide();
			$("#boca6").hide();
			$("#boca7").hide();
		}
	});

	$("#idPartiBoca").change(function(event) {
	otraPartBoca = $("#idPartiBoca").val();
		if (otraPartBoca == "136") {
			$("#boca5").show();
		}else{
			$("#boca5").hide();
		}
	});

	$("#idModiBoca").change(function(event) {
	otraModBoca = $("#idModiBoca").val();
		if (otraModBoca == "121") {
			$("#boca6").show();
		}else{
			$("#boca6").hide();
		}
	});

	//Sección Orejas
	$("#infoOrejas").change(function(event) {
		resOrejas = $("#infoOrejas").val();
		if (resOrejas == "SÍ") {
			$("#oreja1").show();
			$("#oreja2").show();
			$("#oreja4").show();
			$("#oreja5").show();
			$("#oreja8").show();
		}else{
			$("#oreja1").hide();
			$("#oreja2").hide();
			$("#oreja3").hide();
			$("#oreja4").hide();
			$("#oreja5").hide();
			$("#oreja6").hide();
			$("#oreja7").hide();
			$("#oreja8").hide();
		}
	});

	$("#tipoOreja").change(function(event) {
		otroTipoOreja = $("#tipoOreja").val();
		if (otroTipoOreja == "52") {
			$("#oreja3").show();
		}else{
			$("#oreja3").hide();
		}
	});

	$("#idPartiOreja").change(function(event) {
		otraPartOreja = $("#idPartiOreja").val();
		if (otraPartOreja == "85") {
			$("#oreja6").show();
		}else{
			$("#oreja6").hide();
		}
	});

	$("#idModiOreja").change(function(event) {
		otraModOreja = $("#idModiOreja").val();
		if (otraModOreja == "71") {
			$("#oreja7").show();
		}else{
			$("#oreja7").hide();
		}
	});

	//Sección Frente
	$("#infoFrente").change(function(event) {
		resFrente = $("#infoFrente").val();
		if (resFrente == "SÍ") {
			$("#frente1").show();
			$("#frente2").show();
			$("#frente5").show();
		}else{
			$("#frente1").hide();
			$("#frente2").hide();
			$("#frente3").hide();
			$("#frente4").hide();
			$("#frente5").hide();
		}
	});

	$("#idPartiFrente").change(function(event) {
		otraPartFrente = $("#idPartiFrente").val();
		if (otraPartFrente == "21") {
			$("#frente3").show();
		}else{
			$("#frente3").hide();
		}
	});

	$("#idModiFrente").change(function(event) {
		otraModFrente = $("#idModiFrente").val();
		if (otraModFrente == "14") {
			$("#frente4").show();
		}else{
			$("#frente4").hide();
		}
	});

	//Sección mejilla
	$("#infoMejillas").change(function(event) {
		resMejilla = $("#infoMejillas").val();
		if (resMejilla == "SÍ") {
			$("#mejilla1").show();
			$("#mejilla2").show();
			$("#mejilla5").show();
		}else{
			$("#mejilla1").hide();
			$("#mejilla2").hide();
			$("#mejilla3").hide();
			$("#mejilla4").hide();
			$("#mejilla5").hide();
		}
	});

	$("#idPartiMejillas").change(function(event) {
		otraPartMejilla = $("#idPartiMejillas").val();
		if (otraPartMejilla == "96") {
			$("#mejilla3").show();
		}else{
			$("#mejilla3").hide();
		}
	});

	$("#idModiMejillas").change(function(event) {
		otraModMejilla = $("#idModiMejillas").val();
		if (otraModMejilla == "95") {
			$("#mejilla4").show();
		}else{
			$("#mejilla4").hide();
		}
	});

	//Sección Mentón
	$("#infoMenton").change(function(event) {
		resMenton = $("#infoMenton").val();
		if (resMenton == "SÍ") {
			$("#menton1").show();
			$("#menton4").show();
		}else{
			$("#menton1").hide();
			$("#menton2").hide();
			$("#menton3").hide();
			$("#menton4").hide();
		}
	});

	$("#idPartiMenton").change(function(event) {
		otraPartMenton = $("#idPartiMenton").val();
		if (otraPartMenton == "159") {
			$("#menton2").show();
		}else{
			$("#menton2").hide();
		}
	});

	$("#idModiMenton").change(function(event) {
		otraModMenton = $("#idModiMenton").val();
		if (otraModMenton == "141") {
			$("#menton3").show();
		}else{
			$("#menton3").hide();
		}
	});

	//Botón guardar
	$("#guardarCara").click(function(){
		var dataString = {
	      //Cejas
	      infocejas: $('#infocejas').val(),
	      tipoCeja: $('#tipoCeja').val(),
	      otroTipoCeja: $('#otroTipoCeja').val(),
	      idPartiCeja: $('#idPartiCeja').val(),
	      idModiCeja: $('#idModiCeja').val(),
	      otraPartiCeja: $('#otraPartiCeja').val(),
	      observacionesCejas: $('#observacionesCejas').val(),
	      otraModiCeja: $("#otraModiCeja").val(),
	      parteCuerpoC: $('#posCejas').val(),
	      idExtraviado: $('#idExtraviado').val(),

	      //ojos
	      infoOjos: $('#infoOjos').val(),
	      colorOjos: $('#colorOjos').val(),
	      otroColorOjo: $('#otroColorOjo').val(),
	      tamanoOjos: $('#tamanoOjos').val(),
	      idPartiOjos: $('#idPartiOjos').val(),
	      idModiOjos: $('#idModiOjos').val(),
	      otraPartOjo: $('#otraPartOjo').val(),
	      observacionesOjos: $('#observacionesOjos').val(),
	      otraModOjo: $("#otraModOjo").val(),
	      parteCuerpoO: $('#posOjos').val(),
	      idExtraviado: $('#idExtraviado').val(),

	      /*//Bigote
	      tieneBigote: $('#tieneBigote').val(),
	      tipoBigote: $('#tipoBigote').val(),
	      colorBigote: $('#colorBigote').val(),
	      otraModiBa: $('#otroPartiBig').val(),
	      otroColorBa: $('#otroColorBig').val(),
	      observacionesBigote: $('#observacionesBigote').val(),
	      modiBigote: $("#modiBigote").val(),
	      parteCuerpoBi: 57,

	      //Patilla
	      tienePatilla: $('#tienePatilla').val(),
	      tipoPatilla: $('#tipoPatilla').val(),
	      colorPatilla: $('#colorPatilla').val(),
	      otraModiP: $('#otroPartiPat').val(),
	      otroColorP: $('#otroColorPat').val(),
	      observacionesPatilla: $('#observacionesPatilla').val(),
	      modiPatilla: $("#modiPatilla").val(),
	      parteCuerpoPa: 58,*/

	    };
	    console.log(dataString);
	    $.ajax({
	      type: 'POST',
	      url: '/descripcionfisica/storeCara',
	      data: dataString,
	      dataType: 'json',
	      success: function(data) {
	        console.log("hecho cara");
	        console.log(data);

	        
	      },
	      error: function(data) {
	        console.log("error cara");
	        console.log(data);
	      }
	    });//fin  de petición para realizar el store de cabello y vello facial.
	});
});