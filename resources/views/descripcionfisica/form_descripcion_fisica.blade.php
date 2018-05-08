@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
.human-body {
    width: 207px;
    position: relative;
    margin-left: 40px;
    /*padding-top: 240px;*/
    /*height: 260px;*/
    display: block;
    /*margin: 40px auto;*/
}
.human-body svg:hover {
    cursor: pointer;
    transition: transform .2s;
    transform: scale(1.5);

}
.human-body svg:hover path {
    fill: #ff7d16;
}
/*.human-body svg {
    position: absolute;
    left: 50%;
    fill: #57c9d5;
}*/


.human-body svg g path{
    position: absolute;
    left: 50%;
    fill: black;
}


#area {
    display: block;
    width: 100%;
    clear: both;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    font-family: Courier New;
    color: #a5a5a5;
}

#area #data {
    color: black;
}
</style>
@endsection

@section('content')
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

<div class="form-group row">
    <div class="col">
        {!! Form::label ('perdio','¿Tenía barba?') !!}
        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
    </div>
    <div class="col">
                    {!! Form::label ('perdio','¿Tenía barba?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
    </div>
</div>

<div class="row">
  <div class="col-3">
    @include('descripcionfisica.avatar')
  </div>
  <div class="col-9">Formulario Descripción
    


  </div>
</div>



@endsection 

@section('scripts')
<script type="text/javascript">
  window.onload = function () {
    const pieces = document.getElementsByTagName('g');
    console.log(pieces);
    for (var i = 0; pieces.length; i++) {
        let _piece = pieces[i];
        _piece.onclick = function(t) {
            if (t.target.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.getAttribute('id');
            if (t.target.parentElement.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');

            var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
            if(temp == "cabello"){
              
              $("#modalCabello").modal("show");
            }
        }
    }
}
</script>



@endsection