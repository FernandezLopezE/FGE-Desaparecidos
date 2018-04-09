jQuery(document).ready(function($) {
	 $("input:checked").val(),

	$('#informante').on('ifChecked', function () {
		console.log('caja seleccionada');//Do your code 
	}) 

	$('#informante').on('ifUnchecked', function () {
		alert('caja deseleccionada'); 
	}) 

	$('#prueba').click(function(){
        //console.log('Entrando a los hijos');
        tr = $('<tr>');
        td1 =$('<td>');
        td2 =$('<td>');
        td3 =$('<td>');
        td4 =$('<td>');
        td5 =$('<td>');
        td6 =$('<td>');

        td1.text('*');
        td2.text("{{ Session::get('nombre')}} {{ Session::get('apellido1')}} {{Session::get('apellido2')}}");
        td3.text("{{Session::get('parentesco')}}");
        td4.text("{{Session::get('telefono')}}");
        td5.text('INFORMANTE / RECIBIR INFORMACIÓN');
        td6.append("<button type='button' class='btn btn-dark data-toggle='modal' data-target='#mostrarModal' id='hola' >MOSTRAR</button>");
        



        tr.append(td1);
        tr.append(td2);
        tr.append(td3);
        tr.append(td4);
        tr.append(td5);
        tr.append(td6);

        $('#cuerpoT').append(tr);


   
        
    })
});