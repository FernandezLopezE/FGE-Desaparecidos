$(document).ready(function(){
var a;
var b;
var c;
var d;


    $( "#prueba" ).select(function() {
        alert( "Hola mundo" );
    });


    //Obtener el valor de estado civil 
    $(document).on('change', '#idEdocivil', function(event) {
    a = $('#idEdocivil').val();
    //Mostrar formulario de datos de la pareja
    if (a == 'CASADO') {
    	console.log('Mostrar el campo datos de pareja')
    	$("#nombrePareja").show();
    } else {
    	console.log('No tienes pareja')
    	$("#nombrePareja").hide();
    }
	});

    //Mostrar formulario de datos hijos
    $("input#hijos[type=radio]").change(function()
    {
    	b = $(this).val();

    	if (b =='si'){
    		console.log('Mostrar form de datos de hijos')
    		$("#nombreHijo").show();
            $('#btnAddHijo').show();
    	} else {
    			console.log('No tienes hijos')
    			$("#nombreHijo").hide();
                $('#btnAddHijo').hide();
    	}
        
    });
    
	//Mostrar formulario de embarazo
    $("input#embarazo[type=radio]").change(function()
    {
    	c = $(this).val();

    	if (c =='si'){
    		console.log('Mostrar form de datos de embarazo')
    		$("#datosEmbarazo").show();
    		$("#datosEmbarazo2").show();
            $("#rumores").show();
    		
    	} else {
    			console.log('No tienes hijos')
    			$("#datosEmbarazo").hide();
    			$("#datosEmbarazo2").hide();
                $("#rumores").hide();
    		
    	} 
    });

    //Mostrar formulario de pormenores de embarazo
    $("input#rumor[type=radio]").change(function()
    {
    	d = $(this).val();

    	if (d =='si'){
    		console.log('Mostrar area de texto de rumores')
    		$("#datosEmbarazo3").show();
    
    		
    	} else {
    			console.log('No hay rumores')
    			$("#datosEmbarazo3").hide();
    			
    		
    	} 
    });

    $('#btnAddHijo').click(function(){
        console.log('Entrando a los hijos');
    })


}); 