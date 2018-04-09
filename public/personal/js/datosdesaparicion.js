$(document).ready(function() {
	$('#avistoidParentesco').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });

 $('#avistoFechaHora').change(function(){  
        from = $("#avistoFechaHora").val().split("-");
        avistoFecha = from[2] + "-" + from[1] + "-" + from[0];
        fechaEnviada = Date.parse(avistoFecha);
       
        fechaActual= new Date();
       
       if (fechaEnviada > fechaActual)
       {
           $("#avistoFechaHora").val("");
       }
   });

 $('#avistoHoraExtravio').change(function(){  
       horaExtravio = $("#avistoHoraExtravio").val().split(":");
       hora = int.parse(horaExtravio[0]);
       min = int.parse(horaExtravio[1]);
       
       if (hora > 24 && min > 59)
       {
           $("#avistoHoraExtravio").val("");
       }
 });

$('input[name="avistoHoraExtravio"]').mask('00:00');
$('input[name="avistoFechaHora"]').mask('00-00-0000');

});