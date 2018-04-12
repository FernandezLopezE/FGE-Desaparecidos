<!-- Modal de vestimenta-->
  <div class="modal fade" id="modalVestimenta" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DATOS DE LA VESTIMENTA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del formulario-->
          <div class="row">
            <div class="col">
              {!! Form::label ('elijaVestimenta','Tipo de vestimenta:') !!}
              {!! Form::select('idVestimenta[]', $vestimenta, null, ['class' => 'form-control' ,'id'=>'idVestimenta']) !!}
            </div>
          </div><br>

          <div class="row">
            <div class="col-4">
              {!! Form::label ('nombrePrenda','Nombre de la prenda:') !!}
              {!! Form::text ('prendaTipo',old('Nombre de la prenda'), ['class' => 'form-control mayuscula', 'id' => 'prendaTipo', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la prenda', 'placeholder' => 'Nombre de la prenda'] )!!}
            </div>
            <div class="col-4">
              {!! Form::label ('nombreMaterial','Material:') !!}
              {!! Form::text ('prendaMaterial',old('Material'), ['class' => 'form-control mayuscula', 'id' => 'prendaMaterial', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el material', 'placeholder' => 'Material de la prenda'] )!!}
            </div>
            <div class="col-4">
              {!! Form::label ('nombreColor','Color:') !!}
              {!! Form::select ('idColor[]',$colores,'', ['class' => 'form-control', 'id' => 'idColor' ] )!!}
            </div>
          </div>

         <div class="row" style="display:none" id="otroColor">
           <div class="col">
              {!! Form::label ('otroColor','Otro:') !!}
              {!! Form::text ('otroColor',old('Otro color'),['class' => 'form-control mayuscula','id' => 'otroColor', 'placeholder' => 'Ingresa una descripción de los colores de la prenda. Ejemplo: cuadros rojos con azul marino'] )!!}
            </div>
         </div>

         <div class="row">
          <div class="col-4">
            {!! Form::label ('nombreDibujoBordado','Dibujo/Bordado/Franjas:') !!}
            {!! Form::text ('prendaDibujoBordadoFranjas',old('Dibujo/Bordado/Franjas'), ['class' => 'form-control mayuscula', 'id' => 'prendaDibujoBordadoFranjas', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese el bordado, dibujo o franja', 'placeholder' => 'Bordado, dibujo o franja'] )!!}
          </div>
          <div class="col-4">
            {!! Form::label ('nombreMarca','Marca y origen:') !!}
            {!! Form::text ('prendaMarcaOrigen',old('Marca y origen'), ['class' => 'form-control mayuscula', 'id' => 'prendaMarcaOrigen', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la marca y origen', 'placeholder' => 'Marca y origen'] )!!}
          </div>
          <div class="col-4">
            {!! Form::label ('nombreTalla','Talla:') !!}
            {!! Form::text ('prendaTalla',old('Talla'), ['class' => 'form-control mayuscula', 'id' => 'prendaTalla', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la talla', 'placeholder' => 'Talla'] )!!}
          </div>
         </div><hr>

          <div class="row">
            <div class="col">
              {!! Form::label ('elijaCalzado','Tipo de calzado:') !!}
             {!! Form::select ('idTipo[]',$tiposCalzados,'', ['class' => 'form-control js-example-responsive', 'id' => 'idTipo'] )!!}
            </div>
          </div><br>        
        
          <div class="row">
            <div class="col">
              {!! Form::label ('idColor','Color:') !!}
              {!! Form::select ('idColor[]',$colores,'', ['class' => 'form-control', 'id' => 'idColor2' ] )!!}
            </div>
            <div class="col" style="display:none" id="otroColor2">
              {!! Form::label ('otroColor','Otro:') !!}
              {!! Form::text ('otroColor',old('Otro color'),['class' => 'form-control mayuscula','id' => 'otroColor', 'placeholder' => 'Ingresa una descripción de los colores de la prenda'] )!!}
            </div>
            
          </div>
          
          <div class="row">
            <div class="col">
              {!! Form::label ('idMarca','Marca:') !!}
              {!! Form::select ('idMarca[]',$marcasCalzados,'', ['class' => 'form-control', 'id' => 'idMarca'] )!!}
            </div>
            <div class="col" style="display:none" id="otraPrenda">
              {!! Form::label ('otroColor','Otra marca:') !!}
              {!! Form::text ('otroColor',old('Otro color'),['class' => 'form-control mayuscula','id' => '', 'placeholder' => 'Ingresa una descripción de la marca'] )!!}
            </div>
            <div class="col-lg-2">
              {!! Form::label ('calzadoTalla','Talla:') !!}
              {!! Form::text ('prendaTipo',old('Nombre de la prenda'),['class' => 'form-control mayuscula','id' => 'prendaTipo','data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la prenda'] )!!}
            </div>
          </div>

          <div class="row">
            <div class="col">
              {!! Form::label ('elijaAccesoriosObjetos','Elija los accesorios y objetos que tenía el desaparecido:') !!}
              {!! Form::select('accesoriosObjetos[]', $accesoriosObjetos, null, ['class' => 'form-control', 'multiple' => 'multiple' ,'id'=>'accesoriosObjetos']) !!}
            </div>
          </div>

          <div class="row">
            <div class="col">
              <h5 class="card-title">Observaciones:</h5>    
              {!! Form::textarea  ('descripcionVestimenta',old('Descripción vestimenta'), ['class' => 'form-control mayuscula', 'id' => 'descripcionVestimenta','size' => '30x4', 'data-validation' =>'required','data-validation-error-msg-required' =>'Ingrese las observaciones de la vestimenta'])!!}
            </div>
          </div>
          <!-- Fin del Contenido del formulario-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btnAdddInformante">GUARDAR</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin de Modal de vestimenta-->