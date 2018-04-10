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
			<?php foreach (Session::get('personas') as $key => $value): ?>
			    <tr>
			      <th scope="row">1</th>
			      <td>{{$value['nombre']}} {{$value['primerAp']}} {{$value['segundoAp']}}</td>
			      <td>{{$value['parentesco']}}</td>
			      <td>{{ $value['telefono']}}</td>
			      <td></td>
			      <td></td>
			      <td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mostrarModal" id="hola">MOSTRAR</button></td>
			    </tr>
		    <?php endforeach ?>
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