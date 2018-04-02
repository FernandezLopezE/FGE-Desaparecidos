$(document).ready(function(){
	var a,b,c,d,x;
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

})

