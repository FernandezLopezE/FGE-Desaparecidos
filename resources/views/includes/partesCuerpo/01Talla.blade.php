<div class="modal" tabindex="-1" role="dialog" id="talla" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height: 50px;">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 25%;">Datos físicos</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <!-- Contenido del formulario-->        
          <div class="form-group col" id="div_estatura">
              {!! Form::label ('estatura','Estatura (cm):',['class' => 'form-control-label']) !!}
              {!! Form::number ('esta',
                              old('esta'),
                              ['class' => 'form-control sinEnter soloNumeros ',
                                      'placeholder' => 'CENTÍMETROS',
                                      'id' => 'esta', 'max' => '250', 'min' => '40', 'data-validation' => 'required',
                              ] )!!}
              <div class="form-control-feedback" id="error_estatura"></div>
          </div>
          <div class="form-group col" id="div_peso">
              {!! Form::label ('peso','Peso (kg):',['class' => 'form-control-label']) !!}
              {!! Form::number ('bulto',
                                  old('bulto'),
                                  ['class' => 'form-control ',
                                      'placeholder' => 'KILOGRAMOS',
                                      'id' => 'bulto', 'maxlength' => 3,
                                      'step' => '.001'
                                  ] )!!}
              <div class="form-control-feedback" id="error_peso"></div>
          </div>
        
        
          <div class="col">
              {!! Form::label ('comple','Complexión:') !!}
              {!! Form::select ('comple',
                              $complexiones,
                              '',
                              ['class' => 'form-control', 'id' => 'comple'] )!!}                      
          </div>
          <div class="col">
              {!! Form::label ('cPiel','Color de piel:') !!}
              {!! Form::select ('cPiel',
                                  $coloresPiel,
                                  '',
                                  ['class' => 'form-control',
                                      'id' => 'cPiel',
                                  ] )!!}                      
          </div>
        
        <!-- Fin del Contenido del formulario-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardarTalla" >Guardar</button>
        <!--<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>-->
      </div>
    </div>
  </div>
</div>