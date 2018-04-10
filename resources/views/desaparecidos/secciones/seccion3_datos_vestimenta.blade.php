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
				{!! Form::select('idVestimenta[]',
								$vestimenta,
								null,
								['class' => 'form-control',
											'id'=>'idVestimenta'
								]) !!}
			</div>
			
		</div>	
	</br>
	</br>

		<div class="row">
			<div class="col-3">
				<h5 class="card-title">Descripción de la vestimenta</h5>
				
			</div>
			<div class="col-9">
				<button type="button"  id="btnAddPrenda" class="btn btn-primary float-right">Agregar otra prenda</button>	
			</div>
			
		</div>
	</br>
		<div class="card-body" id="catalogoVestimenta" >	
			<div class="row"> 
				<div class="col-2">
					{!! Form::label ('nombrePrenda','Nombre de la prenda:') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombreMaterial','Material:') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombreColor','Color:') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombreDibujoBordado','Dibujo/Bordado/Franjas:') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombreMarca','Marca y origen:') !!}
				</div>
				<div class="col-2">
					{!! Form::label ('nombreTalla','Talla:') !!}
				</div>				
			</div>	
			<div class="row"> 
				<div class="col-2">
					{!! Form::text ('prendaTipo',
									old('Nombre de la prenda'),
									['class' => 'form-control mayuscula',
												'id' => 'prendaTipo',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese la prenda'
									] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('prendaMaterial',
									old('Material'),
									['class' => 'form-control mayuscula',
												'id' => 'prendaMaterial',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese el material'
									] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('prendaColor',
									old('Color'),
									['class' => 'form-control mayuscula',
												'id' => 'prendaColor',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese el color'
									] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('prendaDibujoBordadoFranjas',
									old('Dibujo/Bordado/Franjas'),
									['class' => 'form-control mayuscula',
												'id' => 'prendaDibujoBordadoFranjas',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese el bordado, dibujo o franja'
									] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('prendaMarcaOrigen',
									old('Marca y origen'),
									['class' => 'form-control mayuscula',
												'id' => 'prendaMarcaOrigen',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese la marca y origen'
									] )!!}
				</div>
				<div class="col-2">
					{!! Form::text ('prendaTalla',
									old('Talla'),
									['class' => 'form-control mayuscula',
												'id' => 'prendaTalla',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese la talla'
									] )!!}
				</div>
				
			</div>	
		</div>
		<div class="row">
				<br/>		
		</div>	
	</br>
		<div class="row">
				<div class="col">
					<h5 class="card-title">Descripción del calzado</h5>
				</div>
		</div>
	</br>
		<div class="row">
			<div class="form-group col-4">

				{!! Form::label ('idTipo','Tipo:') !!}
				{!! Form::select ('idTipo[]',
									$tiposCalzados,
									'',
									['class' => 'form-control js-example-responsive',
												'id' => 'idTipo',
												'style'=> 'width: 50%'
									] )!!}
			</div>
			<div class="form-group col-4">
				{!! Form::label ('idMarca','Marca:') !!}
				{!! Form::select ('idMarca[]',
									$marcasCalzados,
									'',
									['class' => 'form-control',
												'id' => 'idMarca'
									] )!!}
			</div>
			<div class="form-group col-4">
				{!! Form::label ('idColor','Color:') !!}
				{!! Form::select ('idColor[]',
									$estados,
									'',
									['class' => 'form-control',
												'id' => 'idColor'
									] )!!}
				{{--{!! Form::text ('talla',
									old('Talla'),
									['class' => 'form-control mayuscula color',
												'id' => 'primerAp',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => '* Ingresa Talla' ,
												'value'='#B6BD79'
									] )!!}--}}
				
			</div>
			
		</div>	
		<div class="row">
			<div class="form-group col-4">
				{!! Form::label ('calzadoTalla','Talla:') !!}
				{!! Form::select ('idCalzadoTalla[]',
									$estados,
									'',
									['class' => 'form-control',
												'id' => 'idCalzadoTalla'
									] )!!}
			</div>
		</div>
		</br>
		<div class="row">
			<div class="col">
				{!! Form::label ('elijaAccesoriosObjetos','Elija los accesorios y objetos que tenía el desaparecido:') !!}
				{!! Form::select('accesoriosObjetos[]',
									$accesoriosObjetos,
									null,
									['class' => 'form-control',
												'multiple' => 'multiple' ,
												'id'=>'accesoriosObjetos'
									]) !!}
			</div>
			
		</div>
		<div class="row">
			<div class="col">
				<h5 class="card-title">Observaciones:</h5>		
				{!! Form::textarea('descripcionVestimenta',
									old('Descripción vestimenta'),
									['class' => 'form-control mayuscula',
												'id' => 'descripcionVestimenta',
												'size' => '30x4',
												'data-validation' =>'required',
												'data-validation-error-msg-required' =>'Ingrese las observaciones de la vestimenta'
									])!!}
			</div>
		</div>
		
		
		<hr class="my-4">		
	</div>

</div>
