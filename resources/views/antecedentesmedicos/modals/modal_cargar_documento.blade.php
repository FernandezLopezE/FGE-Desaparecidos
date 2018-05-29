<!-- Modal de vestimenta-->
  



  <div class="modal fade" rle="dialog" id="modalAnexosAntecedentesMedicos" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header"  style="height: 50px; background-color: #A4A4A4">
          <h5 class="modal-title" style="margin-top: -10px; margin-left: 40%;" id="exampleModalLabel">AGREGAR ANEXO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             {{--{{ Form::hidden('idDependencia','', array('id' => 'idDependencia')) }}--}}
                      <form>     
               
                     <div class="col"  id="divModeloEstudio">
                            <body class="bg-danger col">
                             {{--<div class="row">       
                                  <div class="col">
                                    {!! Form::label ('anexo','ESTOY EN EL DIV DE MODELO ESTUDIO') !!}     
                                  </div>
                                </div>--}}
                                <div class="container">
                                    <div class="row" align="center">
                                        <div class="col main-section" align="center">
                                           {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <div class="file-loading">
                                                        <input id="fileImagenes" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                                                    </div>
                                                </div>
                                           </div>
                                    </div>
                                </div>
                            </body> 
                     </div>
                        
                

                   
                    
                      </form>  

          <!-- Fin del Contenido del formulario-->
        </div>
        <div class="modal-footer">
  
          <button  id = "cerrarModal" type="button" class="btn btn-dark" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de vestimenta-->
