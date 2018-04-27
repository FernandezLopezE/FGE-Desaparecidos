<!-- Modal Datos del informante-->
<div class="modal fade" id="modalPerfiles" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">DATOS DEL INFORMANTE</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<div class="card border-primary">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="card-title">SLIDER TIPOS DE PERFIL DE ROSTROS</h5> 
                </div>
            </div>
        </div>
        <div class="card-body">
             <div class="ps-current" style="width: 60%; height: 70%">
        <ul class="pgwSlider">
                <li >
                	<img style="cursor: default; opacity: 1; width: 150px; " src="{{ URL::to('/images/TiposPerfil/recto.png') }}" alt="Perfil recto" data-description="Si el labio está en menos de 2 mm es un perfil recto.Si el labio está en menos de 2 mm es un perfil recto.">
                </li>
                <li >
                	<img style="cursor: default; opacity: 1; width: 150px; " src="{{ URL::to('/images/TiposPerfil/concavo.png') }}" alt="Perfil cóncavo" data-description="Si el labio está por detrás de la línea es un perfil cóncavo.Si el labio está por detrás de la línea es un perfil cóncavo."></li>
       			 <li >
		            <img style="cursor: default; opacity: 1; width: 150px; " src="{{ URL::to('/images/TiposPerfil/convexo.png') }}" alt="Perfil convexo"
		            data-description="Si el labio está por delante de la línea es un perfil convexo.Si el labio está por delante de la línea es un perfil convexo.">
		            
		        </li>
               
            </ul>
        </div>
    </div>
</div>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-dark" id="btnGuardarInformante"><i class="fa fa-save"></i>  GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->