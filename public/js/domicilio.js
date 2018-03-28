

    $( " .codigoPostal" ).select2( {
        theme: "classic",
        placeholder: "Codigo Postal",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    } );
    $( " .municipio" ).select2( {
        theme: "classic",
        placeholder: "Municipio",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    } );
    $( " .localidad" ).select2( {
        theme: "classic",
        placeholder: "Localidad",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    } );
    $( " .colonia" ).select2( {
        theme: "classic",
        placeholder: "Colonia",
        maximumSelectionSize: 4,
        containerCssClass: ':all:'
    } );


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



