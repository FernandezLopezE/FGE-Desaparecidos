@extends('layouts.app_uipj')
@section('content')
@include('configuraciones.configuraciones')


<div class="card-body bg-white">
  <div class="form-group row">
    <div class="col">
      <label for="">Oficios </label>
      {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
    </div>
      
    <div class="col">
      <label for="">Dependencias</label>
      <button class="btn btn-primary btn-sm pull-right" id="newDepen" data-toggle="tooltip" data-placement="left" title="Nueva dependencia"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
    </div>

    <div class="col">
      <label for="">Encargado</label>
      <button class="btn btn-primary btn-sm pull-right" id="newEncar" data-toggle="tooltip" data-placement="left" title="Nuevo encargado"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
    </div>

    <div class="col-1">
      <label for="">.</label>
      <button class="form-control btn-primary">Agregar</button>
    </div>
  </div>
  
</div>



<div class="row">
  <div class="col">
    <h5>SECRETARIA DE SEGURIDAD PÚBLICA</h5>
    <label for="">Dirigido a</label>
  </div>
</div>

<div class="form-group row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Primer apellido">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Segundo apellido">
  </div>
</div>

<div class="form-group row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Cargo que desempeña">
  </div>
</div>

<div class="form-group row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Correo eléctronico (opcional)">
  </div>
</div>
@endsection