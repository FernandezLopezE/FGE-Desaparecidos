$(document).ready(function(){
	var a,b,c,d,e,f,g,h,x;
	//Obtener el valor de estado civil
	$("body").on('change', '.mayuscula', function(field){		
		$(this).val($(this).val().toUpperCase());		
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

	function validaNumericos(event) {
	    if(event.charCode >= 48 && event.charCode <= 57){
	      return true;
	     }
	     return false;        

	     // va en la vista lo siguiente
	     // ,onkeypress='return validaNumericos(event)'>= 48 && event.charCode <= 57'
		}
	$('input[name="fechaNacimiento"]').mask('00-00-0000');
	$('input[name="fecha_visita"]').mask('00-00-0000');

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


	//Mostrar campos al seleccionar otro dialecto
    $('#entrevistadorIdioma').change(function() {
        e = $('#entrevistadorIdioma').val();

        if (e=='ESPAÑOL') {
        	$("#otro_dialec").hide();
        	$("#otro_dialec2").hide();
        	$("#otro_dialec3").hide();
        	$("#otro_dialec4").hide();
        	$("#otro_dialec5").hide();
        }else{
        	$("#otro_dialec").show();
        	$("#otro_dialec2").show();
        	$("#otro_dialec3").show();
        	$("#otro_dialec4").show();
        	$("#otro_dialec5").show();
        }
    });

    $('#entrevistadorIdioma').change(function() {
        e = $('#entrevistadorIdioma').val();
        console.log(e);

        if (e=='OTRO') {
        	$("#otro_dialec").show();
        }else{
        	$("#otro_dialec").hide();
        }
    });
    //Fin de Mostrar campos al seleccionar otro dialecto

    //ingresar otro parentesco
    $('#informanteidParentesco').change(function() {
    	f = $('#informanteidParentesco').val();
    	console.log("El parentesoc es: "+f);

    	if (f=='OTRO') {
    		$("#otro_parent").show();
    	}else{
    		$("#otro_parent").hide();
    	}
    });

    $('#informanteidDocumentoIdentidad').change(function(){
    	h = $('#informanteidDocumentoIdentidad').val();
    	
    	if (h=='Otro(especifique)') {
    		$("#otro_doc").show();
    	}else{
    		$("#otro_doc").hide();
    	}
    });

  


    $('#fechaNacimiento').change(function(){
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
    	/*$.get('/desaparecido/edad/',{fechaNacimiento: f})
    	.done(function(data){
    			console.log(data);
    	});*/
    }); 

   $("#probar").click(function(){
    $.get("datos.php", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});

});

