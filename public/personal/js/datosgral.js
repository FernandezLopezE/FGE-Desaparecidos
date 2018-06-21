$(document).ready(function(){
	var a,b,c,d,e,f,g,h,x;
	//Obtener el valor de estado civil
	$("body").on('change', '.mayuscula', function(field){		
		$(this).val($(this).val().toUpperCase());		
	});
	//FUNCION PARA QEL SELECT2 POR SI NO ENCUENTRA RESULTADOS
	$.fn.select2.defaults.set('language', {
		maximumSelected: function (args) {
            var message = 'Solo puedes elegir ' + args.maximum + ' elemento';
            return message;
        },
		noResults: function () {
			return "NO HAY RESULTADO";
		},
		searching: function () {
			return "BUSCANDO";
		}
	});
	/// Acepta solo letras y caracteres áéíóúü y ñ
	$("body").on('keypress', '.soloLetras', function(event){		
		key = (window.event) ? event.which : event.keyCode;
       	tecla = String.fromCharCode(key).toLowerCase();
       	letras = " áéíóúüabcdefghijklmnñopqrstuvwxyz";
       	especiales = "8-37-39-46";

       	tecla_especial = false;
       	for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }	
	});

	$("body").on('keypress', '.sinEnter', function(event){		
		if(window.event){
			key = window.event.keyCode; //IE
		}else{
			key = e.which; //firefox 
		}
		if(key==13){
			return false;
		}else{
			return true;
		}	
	});

	$("body").on('focusout', '.email', function(field){		
		var valor = $(this).val();
		expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (expr.test(valor)){
   			$(this).css({"border-color":"green"});
  		} else {
   			$(this).css({"border-color":"red"});
  		}
	});

	$("body").on('keypress', '.soloNumeros', function(event){		
	  var key = window.event.keyCode;
    	if (key < 48 || key > 57) {
        	return false;
    	}
	});

	$("body").on('keypress', '.longitudNumero', function(event){		
	  if(this.value.length == 3)  { return false;} 
	});


	/******************************************************
				DATOS DEL ENTREVISTADOR
	*******************************************************/ 
	//Mostrar campos al seleccionar otro dialecto
	$('#entrevistadorIdioma');
	$('#entrevistadorIdioma').change(function() {

		e = $('#entrevistadorIdioma').val();
		
		if (e==2) {
			$("#otro_dialec").show();
		}else{
			$("#otro_dialec").hide();
		}        

		if (e==1) {
			$("#divInterpreteNombre").hide();
			$("#divInterpreteOrganizacion").hide();
		}else{
			$("#divInterpreteNombre").show();
			$("#divInterpreteOrganizacion").show();
		}
	});

	$("#entrevistadorPrimeraVez").change(function(){
		g = $('#entrevistadorPrimeraVez').val();
			console.log("Hola: "+g);
			if (g =='NO'){
				$("#cuando").show();			
			} else {
				$("#cuando").hide();
			} 

		});

	 $('#fecha_visita').change(function(){  
		from = $("#fecha_visita").val().split("/");
		fechaVisita= from[2] + "-" + from[1] + "-" + from[0];
		fechaEnviada = Date.parse(fechaVisita);
	   
		fechaActual= new Date();
		console.log(fechaEnviada);
	   
	   if (fechaEnviada > fechaActual || Number.isNaN(fechaEnviada))
	   {
		   $("#fecha_visita").val("");
	   }
   });


	/***********************************************************
					DATOS DEL INFORMANTE
	***********************************************************/


	$('#idEstado').on('change', function(){
		console.log($(this).val());
		$("#idMunicipio").empty();
		var idMunicipio = $(this).val();
		if(idMunicipio) {
			$.ajax({
				url: '/municipio/'+idMunicipio,
				type:"GET",
				dataType:"json",
				success:function(data) {
						$("#idMunicipio").empty();
					$.each(data, function(key, value){
						$("#idMunicipio").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
					});
				},				
			});
		} else {
			$('#idEstado').empty();
		}
	});

// Cambios localidades
	 $('#idMunicipio').on('change', function(){
		$("#idLocalidad").empty();
		var idLocalidad = $(this).val();
		if(idLocalidad) {
			
			$.ajax({
				url: '/localidades/'+idLocalidad,
				type:"GET",
				dataType:"json",

				success:function(data) {
						$("#idLocalidad").empty();
					$.each(data, function(key, value){						

						$("#idLocalidad").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

					});

				},
				
			});
		} 

		//colonias

		var idColonia = $(this).val();
		$("#idColonia").empty();
		if(idColonia) {
			
			$.ajax({
				url: '/colonias2/'+idColonia,
				type:"GET",
				dataType:"json",

				success:function(data) {
						

						$("#idColonia").empty();

					$.each(data, function(key, value){
						

						$("#idColonia").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

					});

				},
				
			});
		}

		//codigo postal
		 var idCodigo = $(this).val();
		$("#idCodigoPostal").empty();
		if(idCodigo) {
			$.ajax({
				url: '/colonias2/'+idCodigo,
				type:"GET",
				dataType:"json",

				success:function(data) {
						$("#idCodigoPostal").empty();
					$.each(data, function(key, value){
						$("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');

					});

				},
				
			});
		}


	});

	//para Codigo Postal  seleccionando una colonia
	$('#idColonia').on('change', function(){
	   $("#idCodigoPostal").empty();
	   var idCodigoPostal = $(this).val();
	   if(idCodigoPostal) {	
		   $.ajax({
			   url: '/codigos2/'+idCodigoPostal,
			   type:"GET",
			   dataType:"json",

			   success:function(data) {
					   $("#idCodigoPostal").empty();
				   $.each(data, function(key, value){
					   $("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');

				   });
			   },
			   
		   });
	   } else {
		   $('#idColonia').empty();
	   }
   });


		



		//agregar hijos

		$("#hijos").change(function(){

			b = $('#hijos').val();

			console.log(b);

			//Mostrar-ocultar formulario para agregar hijos

			if (b =='SI'){

				console.log('Mostrar form de datos de hijos')

				$("#nombreHijo").show();
				$("#btnAddHijo").show();
				

			} else {

				console.log('No tienes hijos')

				$("#nombreHijo").hide();
				$("#btnAddHijo").hide();

			} 

		});

	$('#btnAddHijo').click(function(){
		console.log('Entrando a los hijos');
		divRow = $('<div class="row">');
		
		divCol1 = $('<div class="">');
		divCol2 = $('<div class="col">');
		divCol3 = $('<div class="col">');
		divCol4 = $('<div class="col">');
		divCol5 = $('<div class="col">');

		divCol1.append('<input name="parentesco[]" value="HIJO" type="hidden">');
		divCol2.append('<label for="nombres">Nombres(s):</label>');
		divCol2.append('<input class="form-control mayuscula" id="familiaresNombres" name="familiaresNombres[]" value="" type="text">');
		divCol3.append('<label for="primerAp">Apellido paterno:</label>');
		divCol3.append('<input class="form-control mayuscula" id="familiaresPrimerAp" name="familiaresPrimerAp[]" value="" type="text">');
		divCol4.append('<label for="segundoAp">Apellido materno:</label>');
		divCol4.append('<input class="form-control mayuscula" id="familiaresSegundoAp" name="familiaresSegundoAp[]" value="" type="text">');
		divCol5.append('<label for="familiaresEdad">Edad:</label>');
		divCol5.append('<input class="form-control" id="familiaresFamiliaresEdad" name="familiaresEdad[]" value="" type="text">');

		divRow.append(divCol1);
		divRow.append(divCol2);
		divRow.append(divCol3);
		divRow.append(divCol4);
		divRow.append(divCol5);

		$('#nombreHijo').append(divRow);
		
	})


	function validaNumericos(event) {
		if(event.charCode >= 48 && event.charCode <= 57){
		  return true;
		 }
		 return false;        

		 // va en la vista lo siguiente
		 // ,onkeypress='return validaNumericos(event)'>= 48 && event.charCode <= 57'
		}

	//Fin de Mostrar campos al seleccionar otro dialecto

	//ingresar otro parentesco
	$('#idParentesco').change(function() {
		f = $('#idParentesco').val();
		if (f==14) {
			$("#div_otroParentesco").show();
		}else{
			$("#div_otroParentesco").hide();
		}
	});

	$('#idDocumentoIdentidad').change(function(){
		h = $('#idDocumentoIdentidad').val();
		documentosIdentidad();
		console.log('documento: '+h);		
		if (h==9) {
			$("#div_otroDocIdentidad").show();
		}else{
			$("#div_otroDocIdentidad").hide();
		}
	})

	 function documentosIdentidad(){
			if($("#idDocumentoIdentidad").val() == 1){
				$("#numDocIdentidad").attr("disabled", true);
				$("#numDocIdentidad").val("");
			}else{
				$("#numDocIdentidad").removeAttr("disabled");
			}
		}

		documentosIdentidad();

});

