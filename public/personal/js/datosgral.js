$(document).ready(function(){
	var a,b,c,d,e,f,g,h,x;
	//Obtener el valor de estado civil
	$("body").on('change', '.mayuscula', function(field){		
		$(this).val($(this).val().toUpperCase());		
	});


	/******************************************************
				DATOS DEL ENTREVISTADOR
	*******************************************************/ 
	//Mostrar campos al seleccionar otro dialecto
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


	/***********************************************************
					DATOS DEL INFORMANTE
	***********************************************************/
	$('#btnAdddInformante').click (function(){
		
		var dataString = {
			nombre : $("#informanteNombres").val(),
			primerAp : $("#informantePrimerAp").val(),
			segundoAp : $("#informanteSegundoAp").val(),
			parentesco : $("#informanteidParentesco").val(),
			otroParentesco : $("#informanteOtroParentesco").val(),
			nacionalidad : $("#idNacionalidad").val(),
			documento : $("#informanteidDocumentoIdentidad").val(),
			otroDocumento : $("#informanteOtroDocIdentidad").val(),
			numDocIdenti: $("#informanteNumDocIdentidad").val(),
			tipoDirec: $("#informanteTipoDireccion").val(),
			calle: $("#informanteCalle").val(),
			numExt: $("#informanteNumExterno").val(),
			numInt: $("#informanteNumInterno").val(),
			estado: $("#idEstado").val(),
			municipio: $("#idMunicipio").val(),
			localidad: $("#idLocalidad").val(),
			colonia: $("#idColonia").val(),
			cp: $("#idCodigoPostal").val(),
			tipoTel: $("#informanteTipoTel").val(),
			lada: $("#lada").val(),
			telefono : $("#informanteTelefonos").val(),
			ext: $("#ext").val(),
			email: $("#informanteCorreoElectronico").val(),
			informante: $("#informante").is(":checked"),
			autorizado: $("#recibir").is(":checked"),
			idCedula: $("#idCedula").val(),
		};

		$.ajax({
			type: 'POST',
			url: '/desaparecido/store_informante',
			data: dataString,
			dataType: 'json',
			success: function(data) {
				$('#tableInformantes').bootstrapTable('refresh');							
			},
			error: function(data) {
				console.log(data);
			}
		});
	})

	$('#idEstado').on('change', function(){
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

		$('#idEdocivil').change(function() {

			a = $('#idEdocivil').val();

			console.log(a);

			//Mostrar formulario de datos de la pareja

			if (a == 2 || a == 5 || a == 6) {

				console.log('Mostrar el campo datos de pareja')

				$("#nombrePareja").show();

			} else {

				console.log('No tienes pareja')

				$("#nombrePareja").hide();

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

		

		//Ocultar-mostrar pregunta ¿Está embarazada? en caso de que el sexo sea 'masculino'

		$('#sexo').change(function() {

			x = $('#sexo').val();

			console.log(x);

		if (x == 'MASCULINO') {

				console.log('ocultar datos de embarazo')

				$("#estaEmbarazada").hide();

	 

			} else {

				console.log('Mostrar datos de embarazo')

				$("#estaEmbarazada").show();

	   

			}

		});



		//Mostrar formulario de embarazo

		$("#embarazo").change(function(){

			c = $(this).val();

			console.log(c);

			if (c =='SI'){

				console.log('Mostrar form de datos de embarazo')

				$("#datosEmbarazo").show();

				$("#rumores").show();

				

			} else {

					console.log('No tienes hijos')

					$("#datosEmbarazo").hide();
					$("#datosEmbarazo3").hide();
					$("#rumores").hide();

				

			} 

		});



		//Rumores sobre el embarazo???

		$("#rumoresBebe").change(function(){

			d = $(this).val();

			console.log(c);

			if (d =='SI'){

				console.log('Mostrar form de pormenores')

				$("#datosEmbarazo3").show();

				

			} else {

					console.log('No mostrar form de pormenores')

					$("#datosEmbarazo3").hide();

				

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

		$('#idNacionalidad').select2({
			width : "100%",
		});

		$('#idNacionalidad').val(1).trigger('change.select2');

		$('#escolaridad').select2({
			width : "100%",
		});
		
		$('#ocupacion').select2({
			width : "100%",
		});

		$('#idEstado').select2({
			width : "100%",
		});

		$('#idMunicipio').select2({
			width : "100%",
		});

		$('#idLocalidad').select2({
			width : "100%",
		});

		$('#idColonia').select2({
			width : "100%",
		});

	function validaNumericos(event) {
		if(event.charCode >= 48 && event.charCode <= 57){
		  return true;
		 }
		 return false;        

		 // va en la vista lo siguiente
		 // ,onkeypress='return validaNumericos(event)'>= 48 && event.charCode <= 57'
		}


	$("#entrevistadorPrimeraVez").change(function(){
			g = $('#entrevistadorPrimeraVez').val();

			console.log("Hola: "+g);

			//Mostrar-ocultar formulario para agregar hijos

			if (g =='NO'){
				$("#cuando").show();
			
				

			} else {
				$("#cuando").hide();

			} 

		});





	//Fin de Mostrar campos al seleccionar otro dialecto

	//ingresar otro parentesco
	$('#informanteidParentesco').change(function() {
		f = $('#informanteidParentesco').val();
		console.log("El parentesoc es: "+f);

		if (f==14) {
			$("#otro_parent").show();
		}else{
			$("#otro_parent").hide();
		}
	});

	$('#informanteidDocumentoIdentidad').change(function(){
		h = $('#informanteidDocumentoIdentidad').val();
		
		if (h==7) {
			$("#otro_doc").show();
		}else{
			$("#otro_doc").hide();
		}
	})

  

	 $('#fechaNacimiento').change(function(){  
		from = $("#fechaNacimiento").val().split("-");
		fechaNacimiento = from[2] + "-" + from[1] + "-" + from[0];
		fechaEnviada = Date.parse(fechaNacimiento);
	   
		fechaActual= new Date();
	   
	   if (fechaEnviada > fechaActual)
	   {
		   $("#fechaNacimiento").val("");
		   $("#edadExtravio").val("");
	   }else{
		   f = $('#fechaNacimiento').val();
	   console.log('datos fecha: '+f);

	   $.ajax({
			   url: '/desaparecido/edad/'+f,
			   type:"GET",
			   dataType:"json",

			   success:function(data) {
					   console.log("hola"+data);
					   $('#edadExtravio').val(data);
			   },
			   
		   });
	   }
   });

   //Mostrar - ocultar form
   $("#nuevoInformante").click(function() {
		$("#formInformante").toggle('slow');
   });

  

});

