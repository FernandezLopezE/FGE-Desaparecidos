

<div class="form-group row " id ="divAgregarDomicilio"><!--Este es el grupo para el boton "Agregar domicilio" -->
		<button type = "button" id="agregarDomicilio" class="btn btn-primary">Agregar domicilio
		</button>
</div>
		

<div class="form-group row " id ="divAgregarDomicilio">
		<div class="form-group col-4">
		        {!! Form::label ('lblTipoDireccion','Tipo de domicilio') !!}
		        {!! Form::select ('tipoDireccion',$option,'', ['class' => 'form-control'] )!!}
		</div>
		<div class="form-group col-4">
		        {!! Form::text ('telefono',old('Numero telefonico'), ['class' => 'form-control' 'placeholder' => 'Telefono'] )!!}
		</div>
</div>
<div class="form-group row " id ="divAgregarDomicilio">
		<div class="form-group col-4">
		        {!! Form::text ('calle',old('Calle'), ['class' => 'form-control' 'placeholder' => 'Calle'] )!!}
		</div>
		<div class="form-group col-2">
		        {!! Form::text ('numExterior',old('Numero Exterior'), ['class' => 'form-control' 'placeholder' => 'Num. Ext.'] )!!}
		</div>
		<div class="form-group col-2">
		        {!! Form::text ('numInterior',old('Numero Interior'), ['class' => 'form-control' 'placeholder' => 'Num. Int.'] )!!}
		</div>
</div>
<div class="form-group row " id ="divAgregarDomicilio">
		<div class="form-group col-2">
		        {!! Form::select ('codigoPostal',$municipios->codigoPostal,'', ['class' => 'form-control'] )!!}
		</div>
		<div class="form-group col-3">
		        {!! Form::select ('municipios',$municipios,'', ['class' => 'form-control'] )!!}
		</div>
		<div class="form-group col-3">
		        {!! Form::select ('localidades',$localidades,'', ['class' => 'form-control'] )!!}
		</div>
		<div class="form-group col-3">
		        {!! Form::select ('colonias',$colonias,'', ['class' => 'form-control'] )!!}
		</div>
</div>

<div class="form-group row " id ="guardarDomicilio"><!--Este es el grupo para el boton "Agregar domicilio" -->
		<button type = "button" id="guardar" class="btn btn-primary">Guardar
		</button>
</div>

<div>
		<h2> Listado de direcciones

		</h2>

		<table class "table table-hover table-striped">
			<thead>
				<th width ="20px"> ID</th>
				<th>Tipo</th>
				<th>Telefono</th>
				<th>Calle</th>
				<th>No.Ext.</th>
				<th>No.Int</th>
				<th>C.P.</th>
				<th>Municipio</th>
				<th>Localidad</th>
				<th>Colonia</th>
			</thead>
			<tbody>
				@foreach($direccion as $direccion)
					<tr>
						<td>{{$direccion ->id}}</td>
						<td>{{$direccion ->tipoMunicipio}}</td>
						<td>{{$direccion ->telefono}}</td>
						<td>{{$direccion ->calle}}</td>
						<td>{{$direccion ->numeroExterior}}</td>
						<td>{{$direccion ->numeroInterior}}</td>
						<td>{{$direccion ->municipios->codigoPostal}}</td>
						<td>{{$direccion ->idMunicipio}}</td>
						<td>{{$direccion ->idLocalidad}}</td>
						<td>{{$direccion ->idColonia}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $direccion ->render() !!}
</div>