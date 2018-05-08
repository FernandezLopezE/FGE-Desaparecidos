<div class="modal fade" id="talla" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Titulo aqui</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del formulario-->
        <div class="form-group row">
          <div class="col-lg-3">
              {!! Form::label ('desaparecidoEstatura','Estatura:') !!}
              {!! Form::text ('estatura',
                              old('estatura'),
                              ['class' => 'form-control sinEnter soloNumeros',
                                      'placeholder' => 'Ingrese la estura en cm',
                                      'id' => 'estatura', 'maxlength' => 3
                              ] )!!}
          </div>
          <div class="col-lg-3">
              {!! Form::label ('desaparecidoPeso','Peso:') !!}
              {!! Form::text ('peso',
                                  old('peso'),
                                  ['class' => 'form-control sinEnter soloNumeros',
                                      'placeholder' => 'Ingrese el peso en kg',
                                      'id' => 'peso', 'maxlength' => 3
                                  ] )!!}
          </div>
          <div class="col-lg-3">
              {!! Form::label ('complexion','Complexión:') !!}
              {!! Form::select ('complexion',
                              $complexiones,
                              '',
                              ['class' => 'form-control', 'id' => 'complexion'] )!!}                      
          </div>
          <div class="col-lg-3">
              {!! Form::label ('colorPiel','Color piel:') !!}
              {!! Form::select ('colorPiel',
                                  $coloresPiel,
                                  '',
                                  ['class' => 'form-control',
                                      'id' => 'colorPiel',
                                  ] )!!}                      
          </div>
        </div>
        <!-- Fin del Contenido del formulario-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>