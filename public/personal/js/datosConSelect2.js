$(document).ready(function(){

	$.fn.select2.defaults.set('language', {
		noResults: function () {
			return "NO HAY RESULTADO";
		},
		searching: function () {
			return "BUSCANDO";
		}
	});

	$.fn.select2.defaults.set("theme", "bootstrap");

	/******************************************************
				DATOS DEL ENTREVISTADOR
	*******************************************************/ 
	//Mostrar campos al seleccionar otro dialecto
	$('#entrevistadorIdioma').select2();


	/***********************************************************
				DATOS DEL INFORMANTE
	***********************************************************/
	$('#informanteidParentesco').select2();

	$('#idNacionalidad').select2();
	$('#idNacionalidad').val(1).trigger('change.select2');

	$('#informanteidDocumentoIdentidad').select2();

	$('#informanteTipoDireccion').select2();
	

	/*$('#idEstado').select2();

	$('#idMunicipio').select2();

    $('#idLocalidad').select2();

    $('#idColonia').select2();

    $('#idCodigoPostal').select2();

    $('#informanteTipoTel').select2();*/

	//$('#lada').select2();

	/***********************************************************
				DATOS PERSONA DESAPARECIDA
	***********************************************************/
	/*$('#idNacionalidad').select2();
	$('#idNacionalidad').val(1).trigger('change.select2');*/

	$('#escolaridad').select2();
		
	$('#ocupacion').select2();

	$('#idEdocivil').select2();

	/***********************************************************
				DOMICILIO PERSONA DESAPARECIDA
	***********************************************************/
	$('#tipoDireccion').select2();

	/*$('#idEstado').select2();

	$('#idMunicipio').select2();

    $('#idLocalidad').select2();

    $('#idColonia').select2();

    $('#idCodigoPostal').select2();*/

	/***********************************************************
				DOCUMENTOS DE IDENTIDAD Y ANTECEDES JUDICIALES
	***********************************************************/    
	$('#identificacion').select2();

	$('#antecedentesJudiciales').select2();

	$('#meses').select2();

	$('#anios').select2();

	$('#delitos').select2();//idDelito

	$('#centro').select2();//idCentroReclusion

	/***********************************************************
				DATOS DE LA DESAPARICIÓN O DESCRIPCIÓN DEL HECHO
	***********************************************************/  
	$('#avistoidParentesco').select2();

	$('#avistoidEstado').select2();

	$('#avistoidMunicipio').select2();

    $('#avistoidLocalidad').select2();


	/***********************************************************
				DATOS DE LA VESTIMENTA
	***********************************************************/ 
	$('#idVestimenta').select2();

	$('#idTipo').select2();

	$('#idColor').select2();

	$('#idMarca').select2();

	$('#idVestimenta').select2();

	$('#accesoriosObjetos').select2();

});

