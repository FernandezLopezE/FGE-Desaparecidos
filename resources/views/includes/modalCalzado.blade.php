<!-- Modal de vestimenta-->
  <div class="modal fade" id="modalCalzado" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DESCRIPCIÓN DEL CALZADO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del formulario-->
          
           <div class="row">
            <div class="col">
              {!! Form::label ('elijaCalzado','Tipo de calzado:') !!}
             {!! Form::select ('idTipo[]',$tiposCalzados,'', ['class' => 'form-control js-example-responsive', 'id' => 'idTipo'] )!!}
            </div>
            <div class="col"  style="display:none" id="otroZapato">
              {!! Form::label ('elijaCalzado','Otro tipo de calzado:') !!}
             {!! Form::text ('otroCalzado[]','', ['class' => 'form-control js-example-responsive', 'id' => 'otroCalzado'] )!!}
            </div>
          </div><hr>        
        
          <div id="FormularioCalzado" style="display:none">
          <div class="row">
            <div class="col">
              {!! Form::label ('idColor','Color:') !!}
              {!! Form::select ('idColor[]',$colores,'', ['class' => 'form-control', 'id' => 'idColor' ] )!!}
            </div>
            <div class="col" style="display:none" id="otroColor2">
              {!! Form::label ('otroColor','Otro:') !!}
              {!! Form::text ('otroColorCalzado',old('Otro color'),['class' => 'form-control mayuscula','id' => 'otroColorCalzado', 'placeholder' => 'Ingresa una descripción de los colores de la prenda'] )!!}
            </div>
          </div>

          <div class="row">
            <div class="col">
              {!! Form::label ('modeloCalzado','Modelo del calzado:') !!}
              {!! Form::text ('modeloCalzado',old('Modelo del zapato'),['class' => 'form-control mayuscula','id' => 'modeloCalzado','data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el modelo del calzado'] )!!}
            </div>
          </div>
          
          <div class="row">
            <div class="col">
              {!! Form::label ('idMarca','Marca:') !!}
              {!! Form::select ('idMarca[]',$marcasCalzados,'', ['class' => 'form-control', 'id' => 'idMarca'] )!!}
            </div>
            <div class="col" style="display:none" id="otraPrenda">
              {!! Form::label ('otraMarca','Otra marca:') !!}
              {!! Form::text ('otraMarca',old('Otro color'),['class' => 'form-control mayuscula','id' => 'otraMarca', 'placeholder' => 'Ingresa una descripción de la marca'] )!!}
            </div>
            <div class="col-lg-2">
              {!! Form::label ('calzadoTalla','Talla:') !!}
              {!! Form::text ('prendaTipo',old('Nombre de la prenda'),['class' => 'form-control mayuscula','id' => 'calzadoTalla','data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la prenda'] )!!}
            </div>
          </div>
          </div>

          

          <!-- Fin del Contenido del formulario-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btnCalzado">GUARDAR</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de vestimenta-->