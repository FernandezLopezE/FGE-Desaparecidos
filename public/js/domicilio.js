

    
    $(document).ready(function(){

        $( " .codigoPostal" ).select2({
                maximumSelectionSize: 6,
                placeholder: "Municipio",
        });
        $( " .codigoPostal" ).select2({
                maximumSelectionSize: 6,
                placeholder: "Código Postal",
        });
        $( " .municipio" ).select2({
                maximumSelectionSize: 6,
                placeholder: "Municipio",
        });
        $( " .localidad" ).select2({
                maximumSelectionSize: 6,
                placeholder: "Localidad",
        });
        $( " .colonia" ).select2({
            maximumSelectionSize: 6,
            placeholder: "Colonia",
        });
    

            
        $("#idEstado").change(function(event){
                $.get("municipio/"+event.target.value+"", function(response, estado){
                    $("#idMunicipio").empty();
                    $("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
                    for(i=0; i<response.length; i++){
                        $("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                     }
                })
            });
            

        $("#idMunicipio").change(function(event){
                if(event.target.value!=""){
                    $.get("localidades/"+event.target.value+"", function(response, municipio){
                        $("#idLocalidad").empty();
                        $("#idLocalidad").append("<option value=''>Seleccione una localidad</option>");
                        for(i=0; i<response.length; i++){
                            $("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                        }
                        
                    });
                    $.get("colonias2/"+event.target.value+"", function(response, municipio){
                        $("#idColonia").empty();
                        $("#idColonia").append("<option value=''>Seleccione una colonia</option>");
                        for(i=0; i<response.length; i++){
                            $("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                        }
                        
                    });
                    $.get("codigos/"+event.target.value+"", function(response, municipio){
                        $("#cp").empty();
                        $("#cp").append("<option value=''>Seleccione un código postal</option>");
                        for(i=0; i<response.length; i++){
                            $("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
                        }                        
                    });       
                });
    });


/*
    $( " .municipio" ).select2({
        theme: "classic",
        //placeholder: "Municipio",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    });
    $( " .localidad" ).select2({
        theme: "classic",
        //placeholder: "Localidad",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    });
    $( " .colonia" ).select2({
        theme: "classic",
        //placeholder: "Colonia",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    });*/


    $( ":checkbox" ).on( "click", function() {
        $( this ).parent().nextAll( "select" ).prop( "disabled", !this.checked );
    });

    $("mostrar").click(function(){
    $("domicilio").hide();
    });


    $(document).ready(function(){
    $("#guardar").click(function(){
        $("#domicilio").hide();
        $("#domicilio2").hide();
        $("#domicilio3").hide();
        $("#divAgregarDomicilio").show();
        $("#guardar").hide();
    
    });
    $("#agregarDomicilio").click(function(){
        $("#domicilio").show();
        $("#domicilio2").show();
        $("#domicilio3").show();
        $("#divAgregarDomicilio").hide();
        $("#guardar").show();
    
    });

    });
   $(document).ready(function(){
    $("#tituloDomicilio").click(function(){
        $("#domicilioForm").Toggle();
    });
    });
    //Aqui se pone la funcion para validar solo numeros.
   function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
    }
    //Aqui se pone la funcion para validar letras espacios y numeros.
   function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
    }



