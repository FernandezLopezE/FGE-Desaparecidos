<div class="modal fade" id="modalDentista" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height: 40px; background-color: #E6E6E6">
        <h5 class="modal-title" style="margin-left: 30%; margin-top: -10px;" id="exampleModalLabel">DATOS DEL DENTISTA</h5>
        <button  type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
        <div>
          {!! Form::label ('nombres','Nombre del dentista:') !!}
          {!! Form::text ('nombres',old('nombres'), ['class' => 'form-control mayuscula', 'id' => 'nombres', 'placeholder' => 'Ingrese el nombre'] )!!}
        </div>
        <div class="form-group row">
          <div class="col">
            {!! Form::label ('primerAp','Primer apellido:') !!}
            {!! Form::text ('primerAp',old('primerAp'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'placeholder' => 'Ingrese el primer apellido'] )!!}
          </div>
          <div class="col">
            {!! Form::label ('segundoAp','Segundo apellido:') !!}
            {!! Form::text ('segundoAp',old('segundoAp'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp', 'placeholder' => 'Ingrese el segundo apellido'] )!!}
          </div>  
        </div>
        <div >
          {!! Form::label ('empresa','Empresa  ó institución:') !!}
          {!! Form::text ('empresa',old('empresa'), ['class' => 'form-control mayuscula', 'id' => 'empresa', 'placeholder' => 'Ingrese el nombre de la empresa o institución'] )!!}
        </div>  
        <div >
          {!! Form::label ('telefono','Teléfono de contacto:') !!}
          {!! Form::text ('telefono',old('telefono'), ['class' => 'form-control mayuscula', 'id' => 'telefono', 'placeholder' => 'Ingrese el número telefónico'] )!!}
        </div>
        <div>
          {!! Form::label ('direccion','Dirección/referencias de la empresa ó institución:') !!}
          {!! Form::textarea ('direccion',old('direccion'), ['class' => 'form-control mayuscula', 'id' => 'direccion', 'rows' => '3', 'placeholder' => 'Ingrese la dirección'] )!!}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="agregaDentista" >AGREGAR</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelardentista">CANCELAR</button>
      </div>
    </div>
  </div>
</div>