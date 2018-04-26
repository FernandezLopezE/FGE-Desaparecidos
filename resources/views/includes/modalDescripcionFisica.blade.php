 <div class="modal fade" id="modalDescripcionFisica" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos de la Descripción Física</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ Form::hidden('idPersonaDesaparecida','', array('id' => 'idPersonaDesaparecida')) }}
          <!-- Contenido del formulario-->
              <div class="row">
      <div class="col">
          {!! Form::label ('desaparecidoParteCuerpo','Parte del cuerpo:') !!}
          {!! Form::select ('idPartesCuerpo',
                    $partesCuerpo,
                    '',
                    ['class' => 'form-control',
                      'id' => 'idPartesCuerpo'
                    ] )!!}            
      </div>
      <div class="col">
          {!! Form::label ('desaparecidoLado','Lado:') !!}
          {!! Form::text ('lado',
                  '',
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'id' => 'lado',
                    'placeholder' => 'Izquierdo, derecho, central'                  
                  ] )!!}
      </div>
      </div>
    <hr>
      <div class="row">
          <div class="col-lg-4">
          {!! Form::label ('desaparecidoSubParticularidades','Particularidades:') !!}
          {!! Form::select ('idSubParticularidades',
                    $particularidades,
                    '',
                    ['class' => 'form-control',
                      'id' => 'idSubParticularidades'
                    ] )!!}  
          
        </div>
        <div class="col-lg-4" id="otro_Particularidad" style="display:none" >
          {!! Form::label ('otro','Especifique:') !!}
          {!! Form::text ('otroSubParticularidad',
                  old('otro'),
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'placeholder' => 'Ingrese otra particularidad',
                    'id' => 'otroSubParticularidad',
                    'data-validation' => 'required',
                    'data-validation-error-msg-required' => 'El campo es requerido',
                    'data-validation-depends-on' => 'otroSubParticularidad',
                    'data-validation-depends-on-value' =>'OTRO'
                  ] )!!}
          </div>
          <div class="col-lg-4" id="observaciones">
          {!! Form::label ('observacionesParticular','Observaciones:') !!}
          {!! Form::text ('observacionesParticularidad',
                  old('observacionesParticular'),
                  ['class' => 'form-control mayuscula sinEnter soloLetras',
                    'placeholder' => 'Ingrese las observaciones',
                    'id' => 'observacionesParticularidad'
                  ] )!!}
          </div>      
    </div>
    <hr>
    <div class="row">
            <div class="col-lg-4">
            {!! Form::label ('desaparecidoSubModificaciones','Modificaciones:') !!}
            {!! Form::select ('idSubModificaciones',
                      $modificaciones,
                      '',
                      ['class' => 'form-control',
                        'id' => 'idSubModificaciones'
                      ] )!!}  
            
          </div>
          <div class="col-lg-4" id="otra_Modificacion" style="display:none">
            {!! Form::label ('otroModi','Especifique:') !!}
            {!! Form::text ('otroSubModificacion',
                    old('otroModi'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese otra modificación',
                      'id' => 'otroSubModificacion',
                      'data-validation' => 'required',
                      'data-validation-error-msg-required' => 'El campo es requerido',
                      'data-validation-depends-on' => 'otroSubModificacion',
                      'data-validation-depends-on-value' =>'OTRO'
                    ] )!!}
            </div>
            <div class="col-lg-4" id="observaciones">
            {!! Form::label ('observacionesModificar','Observaciones:') !!}
            {!! Form::text ('observacionesModificacion',
                    old('observacionesModificacion'),
                    ['class' => 'form-control mayuscula sinEnter soloLetras',
                      'placeholder' => 'Ingrese las observaciones',
                      'id' => 'observacionesModificacion'
                    ] )!!}
            </div>                              
    </div>

          <!-- Fin del Contenido del formulario-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btnDescripcionFisica">Guardar</button>
          <button type="button" class="btn btn-warning" id="btnActualizarDF">Actualizar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de Descripcion Fisica-->