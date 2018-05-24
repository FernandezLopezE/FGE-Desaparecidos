<div class="modal fade" id="modalMordida"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleccionar el tipo de mordida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del formulario-->
        <div id="carouselMordida" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselMordida" data-slide-to="0" class="active"></li>
            <li data-target="#carouselMordida" data-slide-to="1"></li>
            <li data-target="#carouselMordida" data-slide-to="2"></li>
            <li data-target="#carouselMordida" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-caption d-none d-md-block">
                <h5>Abierta</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur esse, labore blanditiis aut magni libero optio incidunt autem omnis, pariatur, in praesentium excepturi. Assumenda, quibusdam? Iusto, assumenda dolore nemo libero.</p>
              </div>
              <img class="d-block w-100" src="/images/TiposMordidas/mordida_cerrada.jpg" alt="ABIERTA" id="mordidaAbierta" value="2">
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <h5>Cerrada</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur esse, labore blanditiis aut magni libero optio incidunt autem omnis, pariatur, in praesentium excepturi. Assumenda, quibusdam? Iusto, assumenda dolore nemo libero.</p>
              </div>
              <img class="d-block w-100" src="/images/TiposMordidas/protrusion.jpg" alt="CERRADA" id="mordidaCerrada" value="3">
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <h5>Cruzada</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur esse, labore blanditiis aut magni libero optio incidunt autem omnis, pariatur, in praesentium excepturi. Assumenda, quibusdam? Iusto, assumenda dolore nemo libero.</p>
              </div>
              <img class="d-block w-100" src="/images/TiposMordidas/sobremordida.jpg" alt="CRUZADA" id="mordidaCruzada" value="4">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselMordida" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselMordida" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Fin del Contenido del formulario-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>