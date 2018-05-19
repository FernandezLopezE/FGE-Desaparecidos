<!-- Modal Datos del informante-->
<div class="modal fade" id="modal_reportes" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<i class="fa fa-commenting-o" aria-hidden="true" style="font-size:30px"></i>
			Datos del desaparecido
		</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
          <div class="row">
			<div class="col-lg-9">
			<dl class="row">
				<dt class="col-sm-3">Nombres:</dt>
				<dd class="col-sm-8" id="idNombre">
					 
				</dd>
				<dt class="col-sm-3">Apodo:</dt>
				<dd class="col-sm-8" id="apodo">
					
				</dd>
				<dt class="col-sm-3">Género:</dt>
				<dd class="col-sm-8" id="idGenero">
					
				</dd>
				<dt class="col-sm-3">Nacionalidad:</dt>
				<dd class="col-sm-8" id="idNacionalidad"> </dd>
				<dt class="col-sm-3">Estado de desaparición:</dt>
				<dd class="col-sm-8"id="idEstado"> </dd>
				<dt class="col-sm-3">Municipio de desaparición:</dt>
				<dd class="col-sm-8"id="idMunicipio"> </dd>
				<dt class="col-sm-3">Fecha de desaparición:</dt>
				<dd class="col-sm-8"id="idFecha"> </dd>
				<dt class="col-sm-3">Edad de extravio:</dt>
				<dd class="col-sm-8"id="idEdad"> </dd>
				
<!--
				<dt class="col-sm-3">Edad aparente:</dt>
				<dd class="col-sm-8"></dd>
				<dt class="col-sm-3">CURP:</dt>
				<dd class="col-sm-8"> </dd>
				<dt class="col-sm-3">Escolaridad:</dt>
				<dd class="col-sm-8"> </dd>
				<dt class="col-sm-3">Ocupación:</dt>
				<dd class="col-sm-8"></dd>
				<dt class="col-sm-3">Identificación:</dt>
				<dd class="col-sm-8">
					<dt class="col-sm-4">Otra identificación:</dt>
					<dd class="col-sm-8"></dd>
				
				<dt class="col-sm-3">Número de identificación:</dt>
				<dd class="col-sm-8"></dd>
				<dt class="col-sm-3">Estado civil:</dt>
				<dd class="col-sm-8"> </dd>
				
					<dt class="col-sm-3">Embarazada:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-3">Periodo:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-3">Por menores:</dt>
					<dd class="col-sm-8"></dd>
-->
			</dl>
		</div>
		<div class="col-lg-3">
              {{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}
          </div>
	
		</div>
	  </div>
	  <div class="modal-footer">
	   
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->