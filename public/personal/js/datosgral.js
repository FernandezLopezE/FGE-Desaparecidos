$(document).ready(function(){
	var a,b,c,d,x;
	//Obtener el valor de estado civil 

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
				$(".btnAddHijo").show();
				

			} else {

				console.log('No tienes hijos')

				$("#nombreHijo").hide();
				$(".btnAddHijo").show();

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

