jQuery(document).ready(function($) {
	 $("input:checked").val(),

	$('#informante').on('ifChecked', function () {
		alert('caja seleccionada');//Do your code 
	}) 

	$('#informante').on('ifUnchecked', function () {
		alert('caja deseleccionada'); 
	}) 
});