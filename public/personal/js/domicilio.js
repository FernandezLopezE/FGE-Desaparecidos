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

                        $("#idLocalidad").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

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

                        $("#idColonia").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');

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
           console.log(idCodigoPostal);
           $.ajax({
               url: '/codigos2/'+idCodigoPostal,
               type:"GET",
               dataType:"json",

               success:function(data) {
                       console.log("hola");

                       $("#idCodigoPostal").empty();

                   $.each(data, function(key, value){
                       console.log(value);

                       $("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');

                   });

               },
               
           });
       } else {
           $('#idColonia').empty();
       }
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

    $('#idCodigoPostal').select2({
        width : "100%",
    });

    /*$('#btnAddHijo').click(function(){

        divRow = $('<div class="row">');
        
        divCol1 = $('<div class="">');
        divCol2 = $('<div class="col">');
        divCol3 = $('<div class="col">');
        divCol4 = $('<div class="col">');
        divCol5 = $('<div class="col">');

        divCol1.append('<label for="tipoDireccion">Tipo de domicilio:</label>');
        divCol1.append('<select class="form-control" id="tipoDireccion" name="tipoDireccion[]">');
        divCol2.append('<label for="calle">Calle:</label>');
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
        
    })*/


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