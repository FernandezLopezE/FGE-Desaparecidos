$(document).ready(function(){
	$('#perfil').change(function(){
		perfil = $('#perfil').val();
		if (perfil == 'NO' || perfil == 'SIN INFORMACIÓN') {
			$('#valorPerfil').val('');
			$('#tipoperfil').hide();
			$('#perfilseleccionado').hide();
		}else{
			$('#tipoperfil').show();
			$('#perfilseleccionado').show();
		}
	});

	$('#tipmordida').change(function(){
		tipmordida = $('#tipmordida').val();
		if (tipmordida == 'NO' || tipmordida == 'SIN INFORMACIÓN') {
			$('#valormordida').val('');
			$('#tipomordida').hide();
			$('#mordidaseleccionada').hide();
		}else{
			$('#tipomordida').show();
			$('#mordidaseleccionada').show();
		}
	});

	$('#tiposonrisa').change(function(){
		tiposonrisa = $('#tiposonrisa').val();
		if (tiposonrisa == 'NO' || tiposonrisa == 'SIN INFORMACIÓN') {
			$('#valorsonrisa').val('');
			$('#selecsonrisa').hide();
			$('#sonrisaseleccionada').hide();
		}else{
			$('#selecsonrisa').show();
			$('#sonrisaseleccionada').show();
		}
	});

	/************************************************************************
	**** funciones para los slider's de Tipo de perfil **********************
	************************************************************************/

	tipoperfilrecto = $('#perfilRecto').attr("value");
	tipoperfilrec = $('#perfilRecto').attr("alt");
	$('#perfilRecto').click(function(){
		$('#idperfilselec').val(tipoperfilrecto);
		$('#valorPerfil').val(tipoperfilrec);
		$("#modalPerfil").modal('hide');
	});

	tipoperfilconcavo = $('#perfilConcavo').attr("value");
	tipoperfilconca = $('#perfilConcavo').attr("alt");
	$('#perfilConcavo').click(function(){
		$('#idperfilselec').val(tipoperfilconcavo);
		$('#valorPerfil').val(tipoperfilconca);
		$("#modalPerfil").modal('hide');
	});

	tipoperfilconvexo = $('#perfilConvexo').attr("value");
	tipoperfilconvex = $('#perfilConvexo').attr("alt");
	$('#perfilConvexo').click(function(){
		$('#idperfilselec').val(tipoperfilconvexo);
		$('#valorPerfil').val(tipoperfilconvex);
		$("#modalPerfil").modal('hide');
	});

	/************************************************************************
	**** funciones para los slider's de Tipo de sonrisa *********************
	************************************************************************/

	tipodienteSeparado = $('#DientesSeparados').attr("value");
	tipodienteSepa = $('#DientesSeparados').attr("alt");
	$('#DientesSeparados').click(function(){
		$('#idsonrisaselec').val(tipodienteSeparado);
		$('#dientes_girados').val(tipodienteSepa);
		$("#modalSonrisa").modal('hide');
	});

	tipodienteGirados = $('#DientesGirados').attr("value");
	tipodienteGira = $('#DientesGirados').attr("alt");
	$('#DientesGirados').click(function(){
		$('#idsonrisaselec').val(tipodienteGirados);
		$('#dientes_girados').val(tipodienteGira);
		$("#modalSonrisa").modal('hide');
	});

	tipodienteApinado = $('#DientesApinados').attr("value");
	tipodienteApi = $('#DientesApinados').attr("alt");
	$('#DientesApinados').click(function(){
		$('#idsonrisaselec').val(tipodienteApinado);
		$('#dientes_girados').val(tipodienteApi);
		$("#modalSonrisa").modal('hide');
	});

	/************************************************************************
	**** funciones para los slider's de Tipo de mordida *********************
	************************************************************************/

	tipomordidaAbierta = $('#mordidaAbierta').attr("value");
	tipomordidaAbi = $('#mordidaAbierta').attr("alt");
	$('#mordidaAbierta').click(function(){
		$('#idmordidaselec').val(tipomordidaAbierta);
		$('#valormordida').val(tipomordidaAbi);
		$("#modalMordida").modal('hide');
	});

	tipomordidaCerrada = $('#mordidaCerrada').attr("value");
	tipomordidaCerra = $('#mordidaCerrada').attr("alt");
	$('#mordidaCerrada').click(function(){
		$('#idmordidaselec').val(tipomordidaCerrada);
		$('#valormordida').val(tipomordidaCerra);
		$("#modalMordida").modal('hide');
	});

	tipomordidaCruzada = $('#mordidaCruzada').attr("value");
	tipomordidaCruz = $('#mordidaCruzada').attr("alt");
	$('#mordidaCruzada').click(function(){
		$('#idmordidaselec').val(tipomordidaCruzada);
		$('#valormordida').val(tipomordidaCruz);
		$("#modalMordida").modal('hide');
	});

	/**********************************************************************
	*** Segmento para mostrar los modales a usar en el formulario *********
	**********************************************************************/
	
	$('#selectDiente').click(function(e){
        $('#modalDientes').modal('show');
    });

    $('#selectPerfil').click(function(e){
        $('#modalPerfil').modal('show');
    });

    $('#selectMordida').click(function(e){
        $('#modalMordida').modal('show');
    });

    $('#selectSonrisa').click(function(e){
        $('#modalSonrisa').modal('show');
    }); 

});