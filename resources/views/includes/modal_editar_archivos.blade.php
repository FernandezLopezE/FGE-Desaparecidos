<!-- Modal de vestimenta-->
    <div class="modal fade" id="modalEditarArchivo" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR DOCUMENTOS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
                <div class="modal-body">
                  <!-- Contenido del formulario-->
                  
                  <div class="row">

                        <div class="col">
                           {!!Form::checkbox('name', 'value')!!}
                           {!! Form::label ('ingresarnombre','Documento1') !!}
                        </div>
                      
                        <div class="col">
                          {{ Form::button('<i class="fa fa-edit "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-md '] )  }}  
                        </div>
                        
                  </div>
                  <br>
                  <div class="row">

                        <div class="col">
                           {!!Form::checkbox('name', 'value')!!}
                           {!! Form::label ('ingresarnombre','Documento2') !!}
                        </div>

                        <div class="col">
                          {{ Form::button('<i class="fa fa-edit "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-md '] )  }}  
                        </div>
                        
                  </div>
                  <br>
                   <div class="row">

                        <div class="col">
                           {!!Form::checkbox('name', 'value')!!}
                           {!! Form::label ('ingresarnombre','Documento3') !!}
                        </div>
                      
                        <div class="col">
                          {{ Form::button('<i class="fa fa-edit "></i>', ['type' => 'submit', 'class' => 'btn btn-dark btn-md '] )  }}  
                        </div>
                        
                  </div>
                  <br>
                  <br>
                  <div class="row">
                    <div class = "col-4">
                      {!! Form::label ('idEdocivil','Adjuntar otro documento:') !!}                        
                    </div>
                      <div class="col-lg-8 col-sm-12 col-11 main-section">    
                              {!! csrf_field() !!}
                              <div class="form-group">
                                  <div class="file-loading">
                                      <input id="fileArchivo" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="4">                  
                                  </div>
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

