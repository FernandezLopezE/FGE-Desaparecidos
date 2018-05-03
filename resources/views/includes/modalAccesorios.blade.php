<!-- Modal de vestimenta-->
  <div class="modal fade" id="modalAccesorios" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            {{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}
          {{ Form::hidden('idAccesorio','', array('id' => 'idAccesorio')) }} 
           <div class="row">
            <div class="col">
              {!! Form::label ('elijaAccesoriosObjetos','Elija los accesorios y objetos que tenía el desaparecido:') !!}
              {!! Form::select('accesoriosObjetos[]', $accesoriosObjetos, null, ['class' => 'form-control',     'id'=>'accesoriosObjetos']) !!}
            </div>
          </div><hr>        
        
          <div id="FormularioCalzado" >
            <div class="row">
            <div class="col">
              {!! Form::label ('nombreMaterial','Material:') !!}
              {!! Form::text ('accesorioMaterial',old('Material'), ['class' => 'form-control mayuscula', 'id' => 'accesorioMaterial', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el material', 'placeholder' => 'Material de la prenda'] )!!}
            </div>
            <div class="col">
              {!! Form::label ('nombreColor','Color:') !!}
              {!! Form::select ('accesorioColor[]',$colores,'', ['class' => 'form-control', 'id' => 'accesorioColor' ] )!!}
            </div>
          </div><br>
         <div class="row">
          <div class="col-lg-6" style="display:none" id="otroColorAcc">
              {!! Form::label ('colorPrenda','Otro:') !!}
              {!! Form::text ('accesorioColor',old('Otro color'),['class' => 'form-control mayuscula','id' => 'accesorioColorOtro', 'placeholder' => 'Ingresa una descripción de los colores de la prenda. Ejemplo: cuadros rojos con azul marino'] )!!}
          </div>
          <div class="col">
            {!! Form::label ('nombreMarca','Marca y origen:') !!}
            {!! Form::text ('accesorioMarcaOrigen',old('Marca y origen'), ['class' => 'form-control mayuscula', 'id' => 'accesorioMarcaOrigen', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la marca y origen', 'placeholder' => 'Marca y origen'] )!!}
          </div>
         </div>
            
          </div>

          

          <!-- Fin del Contenido del formulario-->
        </div>
        
        <div class="modal-footer">
         <button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
          <button type="button" class="btn btn-success" id="btnAccesorio">GUARDAR</button>
           <button type="button" class="btn btn-warning" id="btnActualizarA">ACTUALIZAR</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de vestimenta-->