@extends('layouts.app_uipj')
@section('content')
@include('configuraciones.configuraciones')


<div class="card-body bg-white">
  <div class="form-group row">
    <div class="col">
      <label for="">Oficios </label>
      <button class="btn btn-primary btn-sm pull-right" id="#" data-toggle="tooltip" data-placement="top" title="Nuevo oficio"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('oficios', $oficios, '', ['class' => 'form-control', 'id' => 'catOficios'] ) !!}
    </div>
      
    <div class="col">
      <label for="">Dependencias</label>
      <button class="btn btn-primary btn-sm pull-right" id="newDepen" data-toggle="tooltip" data-placement="left" title="Nueva dependencia"><i class="fa fa-plus-circle"></i></button>
      <button class="btn btn-primary btn-sm pull-right" id="newDepen" data-toggle="tooltip" data-placement="top" title="Nueva dependencia"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('dependencias', $dependencias, '', ['class' => 'form-control', 'id' => 'catDependencias'] ) !!}
    </div>
    @include('includes.configuraciones.modal_ConfigDepend')

    <div class="col">
      <label for="">Encargado</label>
      <button class="btn btn-primary btn-sm pull-right" id="newEncar" data-toggle="tooltip" data-placement="left" title="Nuevo encargado"><i class="fa fa-plus-circle"></i></button>
      <button class="btn btn-primary btn-sm pull-right" id="newEncar" data-toggle="tooltip" data-placement="top" title="Nuevo encargado"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('encargados', $encargados, '', ['class' => 'form-control', 'id' => 'catEncargados'] ) !!}
    </div>
    @include('includes.configuraciones.modal_ConfigEncargado')

    <div class="col-1">
      <label for=""><font color="#FFFFFF">.</font></label>
      <button class="form-control btn-primary">Agregar</button>
    </div>
  </div><br>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Oficio</th>
        <th>Dependencia</th>
        <th>Encargado</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>prueba</th>
        <th>prueba</th>
        <th>prueba</th>
        <th>prueba</th>
      </tr>
    </tbody>
</table>
  
</div>

@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
  $("#newDepen").click(function(event) {
   $("#modal_ConfigDepend").modal();
  });

  $("#newEncar").click(function(event) {
   $("#modal_ConfigEncargado").modal();
  });


});
</script>
@endsection