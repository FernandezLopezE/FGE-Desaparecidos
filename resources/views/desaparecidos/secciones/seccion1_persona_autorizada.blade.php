<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">PERSONAS AUTORIZADAS PARA DAR, OIR Y RECIBIR INFORMES</h5>		
	</div>
	<div class="card-body">
		<table class="table table-hover" id="tablePrueba">
		  <thead>
		    <tr>
		      <th scope="col">No.</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Parentesco</th>
		      <th scope="col">Télefono</th>
		      <th scope="col">Tipo de persona</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody id='cuerpoT'>
		    <tr>
		      <th scope="row">1</th>
		      <td>{{ Session::get('nombre')}} {{ Session::get('apellido1')}} {{Session::get('apellido2')}}</td>
		      <td>{{Session::get('parentesco')}}</td>
		      <td>{{Session::get('telefono')}}</td>
		      <td>INFORMANTE / RECIBIR INFORMACIÓN</td>
		      <td><button type="button" class="btn btn-dark"  id="prueba">MOSTRAR</button></td>
		    </tr>
		  </tbody>
		</table>

		<!-- Ventana Modal -->
			<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">DATOS DE LOS INFORMANTES</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-dark">GUARDAR CAMBIOS</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>
			  </div>
			</div>

	</div>
</div>
<div class="my-4">	</div>

<script type="text/javascript">
	$('#prueba').click(function(){
        console.log('Entrando a los hijos');
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
        td6.append("<button type='button' class='btn btn-dark  id='prueba'>MOSTRAR</button>");
        



        tr.append(td1);
        tr.append(td2);
        tr.append(td3);
        tr.append(td4);
        tr.append(td5);
        tr.append(td6);

        $('#cuerpoT').append(tr);


   
        
    })
</script>