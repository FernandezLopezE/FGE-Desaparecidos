jQuery(document).ready(function($) {
	
	//Form de ventana modal
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

});
	//Fin del form de ventana modal


	 $("input:checked").val(),

	$('#informante').on('ifChecked', function () {
		alert('caja seleccionada');//Do your code 
	}) 

	$('#informante').on('ifUnchecked', function () {
		alert('caja deseleccionada'); 
	}) 
});