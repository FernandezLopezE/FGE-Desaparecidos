
$(document).ready(function(){
	
	//Validacion  otra identificación
	var value = $('#identificacion').val();

	$('#identificacion').change(function(){
		value = $('#identificacion').val();
		console.log(value);
		if (value == "Otro(especifique)") {
                console.log('Mostrar campo otra identificación')
                $("#otraIdDIV").show();
        } else {
                console.log('Ocultar Campo otra identificación')
                $("#otraIdDIV").hide();
        }
	});

	if (value == "Otro(especifique)") {
                console.log('Mostrar campo otra identificación')
                $("#otraIdDIV").show();
    } else {
                console.log('Ocultar Campo otra identificación')
                $("#otraIdDIV").hide();
    }


    //Validacion  antecedentes
	var value2 = $('#antecedentesJudiciales').val();

	$('#antecedentesJudiciales').change(function(){
		value2 = $('#antecedentesJudiciales').val();
		console.log(value2);
		if (value2 == 1) {
                console.log('Mostrar campos antecedentes')
                $("#antecedentesDIV").show();
            } else {
                console.log('Ocultar campos antecedentes')
                $("#antecedentesDIV").hide();
            }
	});

	if (value2 == 1) {
                console.log('Mostrar campos antecedentes')
                $("#antecedentesDIV").show();
                console.log(value2);
            } else {
                console.log('Ocultar campos antecedentes')
                $("#antecedentesDIV").hide();
                console.log(value2);
            }

});



