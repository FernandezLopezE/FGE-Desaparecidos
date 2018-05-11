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
              {!! Form::text ('esta',
                              old('esta'),
                              ['class' => 'form-control sinEnter soloNumeros',
                                      'placeholder' => 'CENTÍMETROS',
                                      'id' => 'esta', 'maxlength' => 3
                              ] )!!}
          </div>
          <div class="col-lg-3">
              {!! Form::label ('desaparecidoPeso','Peso:') !!}
              {!! Form::text ('bulto',
                                  old('bulto'),
                                  ['class' => 'form-control sinEnter soloNumeros',
                                      'placeholder' => 'KILOGRAMOS',
                                      'id' => 'bulto', 'maxlength' => 3
                                  ] )!!}
          </div>
          <div class="col-lg-3">
              {!! Form::label ('comple','Complexión:') !!}
              {!! Form::select ('comple',
                              $complexiones,
                              '',
                              ['class' => 'form-control', 'id' => 'comple'] )!!}                      
          </div>
          <div class="col-lg-3">
              {!! Form::label ('cPiel','Color piel:') !!}
              {!! Form::select ('cPiel',
                                  $coloresPiel,
                                  '',
                                  ['class' => 'form-control',
                                      'id' => 'cPiel',
                                  ] )!!}                      
          </div>
        </div>
        <button type="button" class="btn btn-primary" style="float: right;" id="guardarTalla">GUARDAR</button>
</div>
</div>
</div>
</div>
