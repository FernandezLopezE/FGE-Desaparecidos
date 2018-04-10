$(document).ready(function() {//FUNCIÓN PRINCIPAL

//SECCIÓN CÉDULA
//SECCIÓN CÉDULA
//SECCIÓN CÉDULA
//SECCIÓN CÉDULA



//SECCION 1 PERSONA AUTORIZADA
//SECCION 1 PERSONA AUTORIZADA
//SECCION 1 PERSONA AUTORIZADA
//SECCION 1 PERSONA AUTORIZADA




//SECCION 1 PERSONA ENTREVISTADOR
//SECCION 1 PERSONA ENTREVISTADOR
//SECCION 1 PERSONA ENTREVISTADOR
//SECCION 1 PERSONA ENTREVISTADOR





//SECCION 1 PERSONA INFORMANTE
//SECCION 1 PERSONA INFORMANTE
//SECCION 1 PERSONA INFORMANTE
//SECCION 1 PERSONA INFORMANTE




//SECCION2 PERSONA DESAPARECIDA DATOS
//SECCION2 PERSONA DESAPARECIDA DATOS
//SECCION2 PERSONA DESAPARECIDA DATOS
//SECCION2 PERSONA DESAPARECIDA DATOS





//SECCION 2 PERSONA DESAPARECIDA DOMICILIO
//SECCION 2 PERSONA DESAPARECIDA DOMICILIO
//SECCION 2 PERSONA DESAPARECIDA DOMICILIO
//SECCION 2 PERSONA DESAPARECIDA DOMICILIO






//SECCION 2 PERSONA DESAPARECIDA IDENTIDAD ANTECEDENTES
//SECCION 2 PERSONA DESAPARECIDA IDENTIDAD ANTECEDENTES
//SECCION 2 PERSONA DESAPARECIDA IDENTIDAD ANTECEDENTES
//SECCION 2 PERSONA DESAPARECIDA IDENTIDAD ANTECEDENTES






//SECCION 3 DATOS DESAPARICIÓN
//SECCION 3 DATOS DESAPARICIÓN
//SECCION 3 DATOS DESAPARICIÓN
//SECCION 3 DATOS DESAPARICIÓN







//SECCION 3 DATOS VESTIMENTA
//SECCION 3 DATOS VESTIMENTA
//SECCION 3 DATOS VESTIMENTA
//SECCION 3 DATOS VESTIMENTA


	$('#vestimenta').select2();
    $('#idColor1').select2(
        {
            theme : classic
        });
    $('#idVestimenta').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },
    	});

    $('#idCalzado').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });
    $('#idCalzadoModelo').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });
    $('#idCalzadoColor').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });
    $('#idCalzadoMarca').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });
    $('#idCalzadoTalla').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });
    

    $('#accesoriosObjetos').select2({
        theme: "bootstrap4"
        tags:[],
        formatNoMatches: function() {
            return '';
        },
    	width: 460,
        multiple: true,
        multipleWidth: 55,

    });
    //idTipo hace referencia a tipos de calzados(combo imagen)
    $('#idTipo').select2({ 
        width : "100%",
        height: "50%",
        templateResult: formatState
    });
    $('#idMarca').select2({ 
        width : "100%",
        templateResult: formatState2
    });
    $('#idColor').select2({ 
        width : "100%",
        templateResult: formatState3
    });














});//TERMINO DED LA FUNCIÓN PRINCIPAL