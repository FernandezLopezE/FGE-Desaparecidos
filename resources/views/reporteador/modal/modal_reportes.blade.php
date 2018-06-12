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
				<dt class="col-sm-3">Nombre:</dt>
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
				<dd class="col-sm-8" id="idEstadoM"> </dd>
				<dt class="col-sm-3">Municipio de desaparición:</dt>
				<dd class="col-sm-8" id="idMunicipioM"> </dd>
				<dt class="col-sm-3">Fecha de desaparición:</dt>
				<dd class="col-sm-8"id="idFecha"> </dd>
				<dt class="col-sm-3">Edad de extravio:</dt>
				<dd class="col-sm-8"id="idEdad"> </dd>
				<dt class="col-sm-3">Estatura:</dt>
				<dd class="col-sm-8" id="idEstatura">
				</dd> 
				<dt class="col-sm-3">Peso:</dt>
				<dd class="col-sm-8" id="idPeso">
				</dd>
				<dt class="col-sm-3">Color de piel:</dt>
				<dd class="col-sm-8" id="idCPiel">
				</dd>
				<dt class="col-sm-3">Complexión:</dt>
				<dd class="col-sm-8" id="idComplexion">
				</dd>
				<dt class="col-sm-3">Cabello:</dt>
				<dd class="col-sm-8"id="idCabelloM"> </dd>
				<dt class="col-sm-3">Vello facial:</dt>
				<dd class="col-sm-8"id="idVelloFacialM"> </dd>
				<dt class="col-sm-3">Ojos:</dt>
				<dd class="col-sm-8"id="idOjos"> </dd>
				<dt class="col-sm-3">Labios:</dt>
				<dd class="col-sm-8"id="idLabios"> </dd>
				
				<dt class="col-sm-3">Modificaciones:</dt>
				<dd class="col-sm-8"id="idModificaciones"> </dd>
				<dt class="col-sm-3">Particularidades:</dt>
				<dd class="col-sm-8"id="idParticularidades"> </dd>
				<dt class="col-sm-3">Observaciones:</dt>
				<dd class="col-sm-8"id="idObservaciones"> </dd>

				
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
	   
		<button type="button" class="btn btn-dark" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->