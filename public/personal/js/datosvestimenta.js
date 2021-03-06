$(document).ready(function() {

    //funciones para las cajas en color
    



    //aqui terminan las funciones del color
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



     $('#btnAddPrenda').click(function(){
        console.log('Entrando a los hijos');
        divRow = $('<div class="row">');
        $('#catalogoVestimenta').append('</br>');
        divCol1 = $('<div class="">');
        divCol2 = $('<div class="col">');
        divCol3 = $('<div class="col">');
        divCol4 = $('<div class="col">');
        divCol5 = $('<div class="col">');
        divCol6 = $('<div class="col">');
        divCol7 = $('<div class="col">');

        divCol1.append('<input name="vestimentas[]"  type="hidden">');
        divCol2.append('<input class="form-control mayuscula" id="vestimentasNombre" name="vestimentasNombre[]" value="" type="text" data-validation = required data-validation-error-msg-required = * Ingresa el nombre de la prenda>');
        divCol3.append('<input class="form-control mayuscula" id="vestimentasMaterial" name="vestimentasMaterial[]" value="" type="text" >');
        divCol4.append('<input class="form-control mayuscula" id="vestimentasColor" name="vestimentasColor[]" value="" type="text">');
        divCol5.append('<input class="form-control mayuscula" id="vestimentasDibujo" name="vestimentasDibujo[]" value="" type="text">');
        divCol6.append('<input class="form-control mayuscula" id="vestimentasMarcavestimentasTalla" name="vestimentasMarcavestimentasTalla[]" value="" type="text">');
        divCol7.append('<input class="form-control mayuscula" id="vestimentasTalla" name="vestimentasTalla[]" value="" type="text">');

        divRow.append(divCol1);
        divRow.append(divCol2);
        divRow.append(divCol3);
        divRow.append(divCol4);
        divRow.append(divCol5);
        divRow.append(divCol6);
        divRow.append(divCol7);

        $('#catalogoVestimenta').append(divRow);

        
    })
     //funcion para cargar las imagenes del catalogo Tipos de Calzados
     function formatState(state)
     {
        if(!state.id){
            return state.text;
        }
        var $state = $(
                '<span><img width =20% src="/images/TiposCalzados/'+state.element.value.toLowerCase()+'.jpg" />' + state.text + '</span>'
            );
            return $state;
     }
     //funcion para cargar las imagenes del catalogo Marcas de calzados
     function formatState2(state2)
     {
        if(!state2.id){
            return state2.text;
        }
        var $state2 = $(
                '<span><img width =20% src="/images/MarcasCalzados/'+state2.element.value.toLowerCase()+'.jpg" />' + state2.text + '</span>'
            );
            return $state2;
     }
     function formatState3(state3)
     {
        if(!state3.id){
            return state3.text;
        }
        var $state3 = $(
                '<span><img width =20% src="/images/Colores/'+state3.element.value.toLowerCase()+'.jpg" />' + state3.text + '</span>'
            );
            return $state3;
     }

     

});

