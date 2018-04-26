$(document).ready(function()
{
	$('#dienteTamano').select2();

	$('#tamano').select2();

	$('#dienteTamano').change(function() {
		alert('hola');
	});
});