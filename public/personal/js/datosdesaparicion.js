$(document).ready(function() {
	$('#avistoidParentesco').select2({
        tags:[],
        formatNoMatches: function() {
            return '';
        },

    });



$('input[name="avistoHoraExtravio"]').mask('00:00');
$('input[name="avistoFechaHora"]').mask('00-00-0000');

});