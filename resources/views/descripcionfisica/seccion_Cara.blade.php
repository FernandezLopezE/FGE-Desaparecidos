<form id="formCara">
<div class="card-header">
	<h5 class="card-title">Rostro
		<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
		<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
		<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
	</h5>
</div>

<div class="card-body"  id="datosCara"> 
	<div class="row">
		<div class="col-6">
			{!! Form::label ('colorCejas','¿Tiene información de las cejas?') !!}
			{!! Form::select('tieneCabello', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneCabello'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('posCejas','Posición') !!}
			{!! Form::select('posCejas',  $cejasParte, '', ['class' => 'form-control', 'id' => 'posCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoCeja','Tipo') !!}
			{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
		</div>
	</div><br>

	<div class="row">
		
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div><br>

	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>

	<!--Sección ojos-->
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información de los ojos?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('posCejas','Posición') !!}
			{!! Form::select('posCejas',  $cejasParte, '', ['class' => 'form-control', 'id' => 'posCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoCeja','Color') !!}
			{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('colorCejas','Tamaño') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col-3">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>	

	<!--Sección nariz-->	
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información de la nariz?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoCeja','Tipo') !!}
			{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>
		
	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>	

	<!--Sección boca-->
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información de la boca?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoCeja','Tamaño') !!}
			{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>
		
	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>	

	<!--Sección orejas-->
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información de las orejas?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('posCejas','Posición') !!}
			{!! Form::select('posCejas',  $cejasParte, '', ['class' => 'form-control', 'id' => 'posCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoCeja','Tipo') !!}
			{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>

	<!--Sección frente-->
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información de la frente?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>
		
	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>	

	<!--Sección mejillas-->
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información de los cachetes?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>
		
	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div><hr>

	<!--Sección menton-->
	<div class="form-group row">
		<div class="col-6">
			{!! Form::label ('infoOjos','¿Tiene información del mentón?') !!}
			{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
		</div>
		
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('colorCejas','Particularidades') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('colorCejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorCejas'] ) !!}
		</div>
	</div>
		
	<div class="form-group row">
		<div class="col">
			{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		</div>
	</div>	
</div>
</form>















<script src="personal/js/avatar/cara.js"></script>