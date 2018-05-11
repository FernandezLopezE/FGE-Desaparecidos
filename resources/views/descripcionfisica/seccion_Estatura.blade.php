<div class="estatura"  id="acordion2">
<div class="card border-success" >
<div class="card-header" id="headingOne">
    <h5 class="card-title">Estatura, peso, complexión y color de piel
    	<i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar2"></i>
    </h5>
</div>
<div id="areaTalla" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"> 
<div class="card-body"> 
	<div class="form-group row">
          <div class="col-lg-3">
              {!! Form::label ('desaparecidoEstatura','Estatura:') !!}
              {!! Form::text ('estatura',
                              old('estatura'),
                              ['class' => 'form-control sinEnter soloNumeros',
                                      'placeholder' => 'CENTÍMETROS',
                                      'id' => 'estatura', 'maxlength' => 3
                              ] )!!}
          </div>
          <div class="col-lg-3">
              {!! Form::label ('desaparecidoPeso','Peso:') !!}
              {!! Form::text ('peso',
                                  old('peso'),
                                  ['class' => 'form-control sinEnter soloNumeros',
                                      'placeholder' => 'KILOGRAMOS',
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
        <button type="button" class="btn btn-primary" style="float: right;" id="guardarTalla">GUARDAR</button>
</div>
</div>
</div>
</div>
