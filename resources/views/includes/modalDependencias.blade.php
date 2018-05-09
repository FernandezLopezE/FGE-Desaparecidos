<!-- Modal de vestimenta-->
  <div class="modal fade" id="modalDependencia" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGERGAR DEPENDENCIA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             {{ Form::hidden('idDependencia','', array('id' => 'idDependencia')) }}
          <form>     
   
          <div id="FormularioDependencia" >
          <div class="row">
            <div class="col">
              {!! Form::label ('nombreDependencia','Dependencia:') !!}
              {!! Form::text ('nombreDependencia',old('nombreDependencia'),['class' => 'form-control mayuscula','id' => 'nombreDependencia', 'placeholder' => 'Ingresa el nombre de la dependencia'] )!!}
            </div>
            <div class="col">
              {!! Form::label ('nombreDocumento','Documento:') !!}
              {!! Form::select ('documentos[]',$documentos,'', ['class' => 'form-control', 'id' => 'idDocumento' ] )!!}
            </div>
            <div class="col">
              {!! Form::label ('correo','Correo electrónico:') !!}
              {!! Form::text ('correo',old('correo'),['class' => 'form-control mayuscula','id' => 'correoDependencia', 'placeholder' => 'Ingresa el correo electrónico'] )!!}
            </div>
            
          </div><br>

       
        </div>
          </form>  

          <!-- Fin del Contenido del formulario-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
          <button type="button" class="btn btn-dark" id="btnDependencia">GUARDAR</button>
          <button type="button" class="btn btn-dark" id="btnActualizarDependencia" >ACTUALIZAR</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de vestimenta-->