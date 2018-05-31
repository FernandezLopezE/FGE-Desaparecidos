$('#updateInformacion').click(function(){
var dataString = {
                dienteTamano : $("#dienteTamano").val(),
                dienteCompleto : $("#dienteCompleto").val(),
                atencionOdonto : $("#atencionOdonto").val(),
                //infoDentista : $("#infoDentista").val(),
                nombres : $("#nombres").val(),
                primerAp : $("#primerAp").val(),
                segundoAp : $("#segundoAp").val(),
                empresa : $("#empresa").val(),
                telefono : $("#telefono").val(),
                direccion : $("#direccion").val(),
                //tratamiento : $('#SININFORMACION').val(),
                //tratamiento : $("input[name='trata[]']").map(function(){return $(this).val();}).get(),
                tratamiento : $("input[name='trata[]']").map(function(){return $(this).is(':checked');}).get(),
                describatrata : $("#otroTratamiento").val(),
                //perdiodiente : $("#dientePerdido").val(),
                //higieneBucal : $("#higieneBucal").val(),
                describahb : $("#describahb").val(),
                //tieneCaries : $("#tieneCaries").val(),
                DescribaCaries : $("#DescribaCaries").val(),
                //nombreAbceso : $("#nombreAbceso").val(),
                describeAbceso : $("#describeAbceso").val(),
                //enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).val();}).get(),
                enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).is(':checked');}).get(),
                //malosHabitos : $("#malosHabitos").val(),
                //malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).val();}).get(),
                malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).is(':checked');}).get(),
                especifiqhabito : $("#escpecifiquehabito").val(),
                valorPerfil : $("#idperfilselec").val(),
                valormordida : $("#idmordidaselec").val(),
                valorsonrisa : $("#idsonrisaselec").val(),
                idDesaparecido: '{!! $desaparecido->id !!}'
			$.confirm({
        		title: 'Datos',
        		content: 'Actualizados exitosamente.',
        		type: 'dark',
        		typeAnimated: true,
        		buttons: {
        			tryAgain: {
                	text: 'Aceptar',
                	btnClass: 'btn-dark',
                	action: function(){
                			}
                		},
            		}
        		});
			$('#primeraseccion').hide();
			$('#agregaInformacion').hide();
			$('#updateInformacion').hide();
			$('#editarInformacion').show();
		});