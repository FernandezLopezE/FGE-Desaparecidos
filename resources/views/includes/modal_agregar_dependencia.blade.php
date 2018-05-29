<!-- Modal de vestimenta-->
    <div class="modal fade" id="modalDependencia" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">AGREGAR DEPENDENCIA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
                <div class="modal-body">
                  <!-- Contenido del formulario-->
                  
                   <div class="row">
                      <div class="col">
                         {!! Form::label ('ingresarnombre','Ingresar nombre de la dependencia:') !!}
                       {!! Form::text ('idDependencia','', ['class' => 'form-control js-example-responsive', 'id' => 'idDependencia'] )!!}
                      </div>  
                  </div>
               
                   <div class="row">
                      <div class="col">
                         {!! Form::label ('titular','Titular del correo:') !!}
                         {!! Form::text ('titularCorreo',
                                old('correoElectronico'),
                                ['class' => 'form-control',
                                  'id' => 'titularCorreo'
                                ] )!!}    
                      </div>
                  </div>      
                  <div class="row">
                      <div class="col">
                         {!! Form::label ('correoElectronico','Correo electrónico:') !!}
                         {!! Form::text ('correoElectronico',
                                old('correoElectronico'),
                                ['class' => 'form-control',
                                  'id' => 'correoElectronico'
                                ] )!!}    
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                         {!! Form::label ('Archivos','Nombre del archivo a enviar:') !!}
                         {!! Form::text ('titularArchivos',
                                old('correoElectronico'),
                                ['class' => 'form-control',
                                  'id' => 'titularArchivos'
                                ] )!!}    
                      </div>
                  </div>
                 

                  

                  <!-- Fin del Contenido del formulario-->
               
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnGuardarDependencia">GUARDAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
          
      </div> 
          </div>
        </div>
    </div>
  

<!-- Fin de Modal de vestimenta-->

