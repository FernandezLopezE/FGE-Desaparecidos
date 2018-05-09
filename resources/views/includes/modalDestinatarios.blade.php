<!-- Modal de vestimenta-->
  <div class="modal fade" id="modalDestinatario" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGERGAR DESTINATARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             {{ Form::hidden('idDestinatario','', array('id' => 'idDestinatario')) }}
          <form>     
   
          <div id="FormularioVestimenta" >
          <div class="row">
            <div class="col">
              {!! Form::label ('nombreDependencia','Dependencia:') !!}
              {!! Form::select ('dependencias[]',$dependencias,'', ['class' => 'form-control', 'id' => 'idDependenciaDest' ] )!!}
            </div>
            <div class="col">
              {!! Form::label ('nombreDestinatario','Nombre del destinatario:') !!}
              {!! Form::text ('correo',old('correo'),['class' => 'form-control mayuscula','id' => 'nombreDest', 'placeholder' => 'Ingresa el nombre del destinatario'] )!!}
            </div>
            <div class="col">
              {!! Form::label ('cargoDestinatario','Cargo del destinatario:') !!}
              {!! Form::text ('cargo',old('correo'),['class' => 'form-control mayuscula','id' => 'cargo', 'placeholder' => 'Ingresa el cargo del destinatario'] )!!}
            </div>
            
          </div><br>

       
        </div>
          </form>  

          <!-- Fin del Contenido del formulario-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
          <button type="button" class="btn btn-dark" id="btnDestinatario">GUARDAR</button>
          <button type="button" class="btn btn-dark" id="btnActualizarDestinatario" >ACTUALIZAR</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de vestimenta-->