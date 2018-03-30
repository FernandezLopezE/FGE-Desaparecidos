$(document).ready(function() {

    $('#idEstado').on('change', function(){
        $("#idMunicipio").empty();
        var idMunicipio = $(this).val();
        if(idMunicipio) {
        	console.log(idMunicipio);
            $.ajax({
                url: '/municipio/'+idMunicipio,
                type:"GET",
                dataType:"json",

                success:function(data) {
                		console.log("hola");

                		$("#idMunicipio").empty();

                    $.each(data, function(key, value){
                    	console.log(value);

                        $("#idMunicipio").append('<option value="'+ key +'">' +  value.nombre + '</option>');

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
        	console.log(idLocalidad);
            $.ajax({
                url: '/localidades/'+idLocalidad,
                type:"GET",
                dataType:"json",

                success:function(data) {
                		console.log("hola");

                		$("#idLocalidad").empty();

                    $.each(data, function(key, value){
                    	console.log(value);

                        $("#idLocalidad").append('<option value="'+ key +'">' +  value.nombre + '</option>');

                    });

                },
                
            });
        } 

        //colonias

        var idColonia = $(this).val();
        $("#idColonia").empty();
        if(idColonia) {
        	console.log(idColonia);
            $.ajax({
                url: '/colonias2/'+idColonia,
                type:"GET",
                dataType:"json",

                success:function(data) {
                		console.log("hola");

                		$("#idColonia").empty();

                    $.each(data, function(key, value){
                    	console.log(value);

                        $("#idColonia").append('<option value="'+ key +'">' +  value.nombre + '</option>');

                    });

                },
                
            });
        }

        //codigo postal
         var idCodigo = $(this).val();
        $("#idCodigoPostal").empty();
        if(idCodigo) {
        	console.log(idCodigo);
            $.ajax({
                url: '/colonias2/'+idCodigo,
                type:"GET",
                dataType:"json",

                success:function(data) {
                		console.log("hola");

                		$("#idCodigoPostal").empty();

                    $.each(data, function(key, value){
                    	console.log(value);

                        $("#idCodigoPostal").append('<option value="'+ key +'">' +  value.codigoPostal + '</option>');

                    });

                },
                
            });
        }


    });

});



/*$("#idEstado").change(function(event){
	console.log("hola");
                $.get("municipio/"+event.target.value+"", function(response, estado){	
                	console.log("hola");
                    $("#idMunicipio").empty();
                    $("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
                    for(i=0; i<response.length; i++){
                        $("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                     }
                })
            });*/