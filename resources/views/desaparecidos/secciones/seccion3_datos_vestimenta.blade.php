<hr>
<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos de la vestimenta
		<!--<button type="button" id="btnAddDomicilio" class="btn btn-primary float-right">Agregar otro domicilio</button>-->
		</h5>
		
		
	</div>
	<div class="card-body">	
		<div class="row">
			<div class="col">
				{!! Form::label ('elijaVestimenta','Elija el tipo de vestimenta que el desaparecido tenía:') !!}
				{!! Form::select('vestimenta[]', $vestimenta, null, ['class' => 'form-control', 'multiple' => 'multiple' ,'id'=>'vestimenta']) !!}
			</div>
			
		</div>	
	</br>
	</br>

		<div class="row">
			<div class="col-3">
				<h5 class="card-title">Descripción de la vestimenta:</h5>
				
			</div>
			<div class="col-9">
				<button type="button"  id="btnAddPrenda" class="btn btn-primary float-right">Agregar otra prenda</button>	
			</div>
			
		</div>
	</br>
		<div class="card-body" id="catalogoVestimenta" >	
			<div class="row"> 
				<div class="col-2">
					{!! Form::label ('nombres','Nombre de la prenda') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombres','Material') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombres','Color') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombres','Dibujo/Bordado/Frajas') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombres','Marca y origen') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombres','Talla') !!}
				</div>				
			</div>	
			<div class="row"> 
				<div class="col-2">
					{!! Form::text ('nombrePrenda',old('Nombre de la prenda'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa el nombre de la prenda'] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('material',old('Material'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa el material'] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('color',old('Color'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa el color'] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('dibujo',old('Dibujo/Bordado/Franjas'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa una descripcion'] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('marca',old('Marca y origen'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa alguna marca y origen'] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('talla',old('Talla'), ['class' => 'form-control mayuscula', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa Talla'] )!!}
				</div>
				
			</div>	
		</div>
		<div class="row">
				<br/>		
		</div>	
	</br>
		<div class="row">
				<div class="col">
					<h5 class="card-title">Descripción del calzado:</h5>
				</div>
		</div>
	</br>
		<div class="row">
			<div class="form-group col-4">
				{!! Form::label ('idTipo','Tipo:') !!}
				{!! Form::select ('idTipo[]',$tiposCalzados,'', ['class' => 'form-control js-example-responsive', 'id' => 'idTipo', 'style'=> 'width: 50%'] )!!}
			</div>
			<div class="form-group col-4">
				{!! Form::label ('idMarca','Marca:') !!}
				{!! Form::select ('idMarca[]',$marcasCalzados,'', ['class' => 'form-control', 'id' => 'idMarca'] )!!}
			</div>
			<div class="form-group col-4">
				{!! Form::label ('idColor','Color:') !!}
				{!! Form::select ('idColor[]',$estados,'', ['class' => 'form-control', 'id' => 'idColor' ] )!!}
				{{--{!! Form::text ('talla',old('Talla'), ['class' => 'form-control mayuscula color', 'id' => 'primerAp', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Ingresa Talla' ,'value'='#B6BD79'] )!!}--}}
				
			</div>
			
		</div>	
		<div class="row">
			<div class="form-group col-4">
				
			</div>
			<div class="form-group col-4">
				{!! Form::label ('idTalla','Talla:') !!}
				{!! Form::select ('idTalla[]',$estados,'', ['class' => 'form-control', 'id' => 'idTalla'] )!!}
			</div>
		</div>
		</br>
		<div class="row">
			<div class="col">
				{!! Form::label ('elijaAccesoriosObjetos','Elija los accesorios y objetos que tenía el desaparecido:') !!}
				{!! Form::select('accesoriosObjetos[]', $accesoriosObjetos, null, ['class' => 'form-control', 'multiple' => 'multiple' ,'id'=>'accesoriosObjetos']) !!}
			</div>
			
		</div>
		<div class="row">
			<div class="col">
				<h5 class="card-title">Observaciones:</h5>
			
				{!! Form::textarea  ('descripcionHecho',old('Descripcion del hecho'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp','size' => '30x4'])!!}
			</div>
		</div>
		
		
		<hr class="my-4">		
	</div>

</div>
