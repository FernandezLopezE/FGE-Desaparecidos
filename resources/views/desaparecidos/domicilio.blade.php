

<div class="form-group row " id ="divAgregarDomicilio"><!--Este es el grupo para el boton "Agregar domicilio" -->
		<button type = "button" id="agregarDomicilio" class="btn btn-primary">Agregar domicilio
		</button>
</div>
		

<div class="form-group row " id ="divAgregarDomicilio">
		<div class="form-group col-4">
		        {!! Form::label ('lblTipoDireccion','Tipo de domicilio') !!}
		        {!! Form::select ('tipoDireccion',$option,'', ['class' => 'form-control', 'id' => 'tipo'] )!!}
		</div>
		<div class="form-group col-4">
		        {!! Form::text ('telefono',old('Numero telefonico'), ['class' => 'form-control', 'placeholder' => 'Telefono'] )!!}
		</div>
</div>
<div class="form-group row " id ="divAgregarDomicilio">
		<div class="form-group col-4">
		        {!! Form::text ('calle',old('Calle'), ['class' => 'form-control', 'placeholder' => 'Calle'] )!!}
		</div>
		<div class="form-group col-2">
		        {!! Form::text ('numExterior',old('Numero Exterior'), ['class' => 'form-control', 'placeholder' => 'Num. Ext.'] )!!}
		</div>
		<div class="form-group col-2">
		        {!! Form::text ('numInterior',old('Numero Interior'), ['class' => 'form-control', 'placeholder' => 'Num. Int.'] )!!}
		</div>
</div>
<div class="form-group row " id ="divAgregarDomicilio">
		<div class="form-group col-2">
		        {!! Form::select ('codigoPostal',$codigos,'', ['class' => 'form-control', 'id' => 'codigo'] )!!}
		</div>
		<div class="form-group col-3">
		        {!! Form::select ('municipios',$municipios,'', ['class' => 'form-control', 'id' => 'municipio'] )!!}
		</div>
		<div class="form-group col-3">
		        {!! Form::select ('localidades',$localidades,'', ['class' => 'form-control', 'id' => 'localidad'] )!!}
		</div>
		<div class="form-group col-3">
		        {!! Form::select ('colonias',$colonias,'', ['class' => 'form-control', 'id' => 'colonia'] )!!}
		</div>
</div>

<div class="form-group row " id ="guardarDomicilio"><!--Este es el grupo para el boton "Agregar domicilio" -->
		<button type = "button" id="guardar" class="btn btn-primary">Guardar
		</button>
</div>

<div>
		<h2> Listado de direcciones

		</h2>

		
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('#tipo').select2({
			width : "100%",
		});

		$('#codigo').select2({
			width : "100%",
		});

		$('#municipio').select2({
			width : "100%",
		});

		$('#localidad').select2({
			width : "100%",
		});

		$('#colonia').select2({
			width : "100%",
		});
	});
</script>