$(document).ready(function(){
	//Ocultar tarjeta de datos físicos
	$("#card").hide();
	$("#datosFis").hover( function () {
		$("#card").toggle();
  	});
	console.log(aux);
  	//Si ya tiene datos que no muestre el modal
  	if (aux == true) {
	    $("#talla").modal("hide");
	     $.ajax({
	            url: '/descripcionfisica/get_datosfisicos/'+extraviado,
	            type:"GET",
	            dataType:"json",
	            success:function(data) {
	              $.each(data, function(key, value){
	                $("#estatura").val(value.estatura+" CM");
	                $("#peso").val(value.peso+" KG");
	                $("#complexion").val(value.complexion);
	                $("#piel").val(value.piel);
	            });
	            }
	          });
	}else{
    	$("#talla").modal("show");
    	$("#esta").focus();
	}

	//Click para mostrar en el modal
  	$("#datosFis").click(function(event) {
      $.ajax({
            url: '/descripcionfisica/get_datosfisicos/'+extraviado,
            type:"GET",
            dataType:"json",
            success:function(data) {
              console.log(data);
              $.each(data, function(key, value){
                $("#esta").val(value.estatura);
                $("#bulto").val(value.peso);
                $('select#comple option[value="'+value.idComplexion+'"]').attr('selected', 'selected');
                $('select#cPiel option[value="'+value.idColorPiel+'"]').attr('selected', 'selected');
                $("#talla").modal("show");
            });
            }
          });
  	});
  	//$('[data-toggle="tooltip"]').tooltip();

  	//botón para guardar talla
  	$("#guardarTalla").click(function(){
	    console.log("entro");
	    var dataString = {
	      estatura: $('#esta').val(),
	      peso: $('#bulto').val(),
	      complexion: $('#comple').val(),
	      colorPiel: $('#cPiel').val(),
	      idExtraviado: $('#idExtraviado').val(),
	    };
      	$.ajax({
	        type: 'POST',
	        url: '/descripcionfisica/store',
	        data: dataString,
	        dataType: 'json',
	        success: function(data) {           
	        //document.getElementById("colapsar2").click();
	          $("#talla").modal("hide");
	          
	          $.ajax({
	            url: '/descripcionfisica/get_datosfisicos/'+extraviado,
	            type:"GET",
	            dataType:"json",
	            success:function(data) {

	              $.each(data, function(key, value){
	                $("#estatura").val(value.estatura+" CM");
	                $("#peso").val(value.peso+" KG");
	                $("#complexion").val(value.complexion);
	                $("#piel").val(value.piel);
	            });
	            }
	          });
	    },
	        error: function(data) {
	          console.log("error");
	          console.log(data);
	          $('.modal-body div.has-danger').removeClass('has-danger');
	          $('.form-control-feedback').empty();
	          $.each( data.responseJSON.errors, function( key, value ) {
	            
	            $('#div_'+key).addClass('has-danger');
	            $('input#'+key).addClass('form-control-danger');
	            $('#error_'+key).append(value);
	          });
        }
      });
  	});
});  