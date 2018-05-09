
$(document).ready(function(){

	//Validacion  antecedentes
	var value2 = $('#antecedentesJudiciales').val();

	$('#antecedentesJudiciales').change(function(){
		value2 = $('#antecedentesJudiciales').val();		
		if (value2 == 1) {				
				$("#antecedentesDIV").show();
			} else {				
				$("#antecedentesDIV").hide();
			}
	});

	if (value2 == 1) {		
		$("#antecedentesDIV").show();		
	} else {		
		$("#antecedentesDIV").hide();
		
	}

});



