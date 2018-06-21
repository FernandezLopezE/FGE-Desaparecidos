@extends('layouts.app_uipj')
@section('content')
@include('configuraciones.configuraciones')


<div class="card-body bg-white">
  <div class="form-group row">
    <div class="col">
      <label for="">Oficios </label>
      <button class="btn btn-primary btn-sm pull-right" id="#" data-toggle="tooltip" data-placement="top" title="Nuevo oficio"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('oficios', $oficios, '', ['class' => 'form-control', 'id' => 'catOficios', 'placeholder' => 'SELECCIONA UN OFICIO'] ) !!}
    </div>
      
    <div class="col">
      <label for="">Dependencias</label>
      <button class="btn btn-primary btn-sm pull-right" id="newDepen" data-toggle="tooltip" data-placement="top" title="Nueva dependencia"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('dependencias', $dependencias, '', ['class' => 'form-control', 'id' => 'catDependencias', 'placeholder' => 'SELECCIONA UNA DEPENDENCIA'] ) !!}
    </div>
    @include('includes.configuraciones.modal_ConfigDepend')

    <div class="col">
      <label for="">Encargado</label>
      <button class="btn btn-primary btn-sm pull-right" id="newEncar" data-toggle="tooltip" data-placement="top" title="Nuevo encargado"><i class="fa fa-plus-circle"></i></button>
      {!! Form::select('encargados', $encargados, '', ['class' => 'form-control', 'id' => 'catEncargados', 'placeholder' => 'SELECCIONA UN ENCARGADO'] ) !!}
    </div>
    @include('includes.configuraciones.modal_ConfigEncargado')

    <div class="col-1">
      <div>
        <label for=""><font color="#FFFFFF">.</font></label>
      </div>
      <div>
        <button class="btn btn-dark pull-right" id="btnAgregar">Agregar</button>
      </div>
    </div>
  </div><br>

  <table id="tableoficios" ></table>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

  oficio = $('#catOficios').val();
  depen = $('#catDependencias').val();
  encar = $('#catEncargados').val();

  if (oficio == null || depen == null || encar == null) {
    $('#btnAgregar').disabled(true);
  }


  /**********************************************************************routeEncargado
  *** Declaración de rutas a usar de los campos en el formulario ********
  ***********************************************************************/
  
  var routepivoteoficios = '{!! route('configuraciones.index') !!}';
  var routeDependencia = '{!! route('dependencia.index') !!}';
  var routeEncargado = '{!! route('encargado.index') !!}';
  var routeIndex = '{!! route('consultas.index') !!}';
  var table = $('#tableoficios');

  /**********************************************************************
  *** Se agrega columna de acción "EDITAR" Y la tabla de oficios ********
  ***********************************************************************/

  var formatTableActions = function(value, row, index) {        
      btn = '<button class="btn btn-dark btn-xs edit" id="editRelacion">EDITAR</button>';
      return [btn].join('');
    };

    table.bootstrapTable({        
      url: routeIndex+'/get_oficios/',
      columns: [{         
        field: 'oficio',
        title: 'Oficio',        
      }, {          
        field: 'dependencia',
        title: 'Dependencia',
      }, {          
        field: 'nombre',
        title: 'Encargado',
      }, {
        title: 'Acciones',
        formatter: formatTableActions,
        //events: operateEvents
      }]        
    }); 

  //Muestra modal para agregar una dependencia
  $("#newDepen").click(function(event) {
   $("#modal_ConfigDepend").modal();
  });

  //Muestra modal para agregar un encargado
  $("#newEncar").click(function(event) {
   $("#modal_ConfigEncargado").modal();
  });

  
  /**********************************************************************
  ********** opción para el metódo store de la relación *****************
  ***********************************************************************/
  $('#btnAgregar').click(function(){

    var dataString = {
      oficio : $('#catOficios').val(),
      depen : $('#catDependencias').val(),
      encar : $('#catEncargados').val()
    }
    console.log(dataString);
    $.ajax({
      type: 'POST',
      url:  routepivoteoficios,
      data: dataString,
      dataType: 'json',
      success: function(data){
        table.bootstrapTable('refresh');
      }
    });
  });

  /**********************************************************************
  ********** opción para el metodo store de una dependencia *************
  ***********************************************************************/
  $('#btnDepend').click(function(){
    var dataString = {
      nombre : $('#nombreDependencia').val()
    }
    $.ajax({
      type: 'POST',
      url:  routeDependencia,
      data: dataString,
      dataType: 'json',
      success: function(data){
        $('#nombreDependencia').val('');
        $('#modal_ConfigDepend').modal('hide');
      }
    });
  });

  /**********************************************************************
  ********** opción para el metódo store de un encargado ****************
  ***********************************************************************/
  $('#btnEncargado').click(function(){
    var dataString = {
      nombres : $('#nombres').val(),
      primerAp : $('#primerAp').val(),
      segundoAp : $('#segundoAp').val(),
      cargo : $('#cargo').val()
    }
    $.ajax({
      type: 'POST',
      url:  routeEncargado,
      data: dataString,
      dataType: 'json',
      success: function(data){
        $('#nombres').val('');
        $('#primerAp').val('');
        $('#segundoAp').val('');
        $('#cargo').val('');
        $('#modal_ConfigEncargado').modal('hide');
      }
    });

  });

});
</script>
@endsection