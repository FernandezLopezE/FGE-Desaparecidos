<div class="modal fade" id="modalDentista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del dentista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
      <form id="DatosDentista">
        <div id="div_nombres">
          {!! Form::label ('nombres','Nombre del dentista:') !!}
          {!! Form::text ('nombres',
                          old('nombres'), 
                          ['class' => 'form-control mayuscula', 
                            'id' => 'nombres', 
                            'placeholder' => 'Ingrese el nombre'
                          ] )!!}
          <div class="form-control-feedback" id="error_nombres"></div>
        </div>
        <div id="div_primerAp">
          {!! Form::label ('primerAp','Primer apellido:') !!}
          {!! Form::text ('primerAp',
                          old('primerAp'), 
                          ['class' => 'form-control mayuscula', 
                            'id' => 'primerAp', 
                            'placeholder' => 'Ingrese el primer apellido'
                          ])!!}
          <div class="form-control-feedback" id="error_primerAp"></div>
        </div>
        <div>
            {!! Form::label ('segundoAp','Segundo apellido:') !!}
            {!! Form::text ('segundoAp',old('segundoAp'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp', 'placeholder' => 'Ingrese el segundo apellido'] )!!}
        </div>  
        <div id="div_empresa">
          {!! Form::label ('empresa','Empresa  ó institución:') !!}
          {!! Form::text ('empresa',
                          old('empresa'), 
                          ['class' => 'form-control mayuscula', 
                            'id' => 'empresa', 
                            'placeholder' => 'Ingrese el nombre de la empresa o institución', 
                            'data-validation' => 'required', 
                            'data-validation-error-msg-required' => 'El campo empresa es requerido.'
                          ] )!!}
          <div class="form-control-feedback" id="error_empresa"></div>
        </div>
        <div id="div_telefono">
          {!! Form::label ('telefono','Teléfono de contacto:') !!}
          {!! Form::text ('telefono',
                          old('telefono'), 
                          ['class' => 'form-control mayuscula', 
                            'id' => 'telefono', 
                            'placeholder' => 'Ingrese el número telefónico',
                            'data-validation' => 'required', 
                            'data-validation-error-msg-required' => 'El campo teléfono es requerido.'
                          ] )!!}
          <div class="form-control-feedback" id="error_telefono"></div>
        </div>
        <div id="div_direccion">
          {!! Form::label ('direccion','Dirección/referencias de la empresa ó institución:') !!}
          {!! Form::textarea ('direccion',
                              old('direccion'), 
                              ['class' => 'form-control mayuscula', 
                                'id' => 'direccion', 
                                'rows' => '3', 
                                'placeholder' => 'Ingrese la dirección',
                                'data-validation' => 'required', 
                                'data-validation-error-msg-required' => 'El campo dirección es requerido.'
                              ] )!!}
          <div class="form-control-feedback" id="error_direccion"></div>
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="agregaDentista" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>

