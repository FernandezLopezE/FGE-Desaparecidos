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
			{!! Form::label ('infocejas','¿Tiene información de las cejas?') !!}
			{!! Form::select('infocejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infocejas'] ) !!}
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
			{!! Form::select('idSubParticularidades', $tipoCeja, '', ['class' => 'form-control', 'id' => 'idSubParticularidades'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorCejas','Modificaciones') !!}
			{!! Form::select('idSubModificaciones', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idSubModificaciones'] ) !!}
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
			{!! Form::label ('posOjos','Posición') !!}
			{!! Form::select('posOjos',  $ojosParte, '', ['class' => 'form-control', 'id' => 'posOjos'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('colorOjos','Color') !!}
			{!! Form::select('colorOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorOjos'] ) !!}
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
			{!! Form::label ('tamanoOjos','Tamaño') !!}
			{!! Form::select('tamanoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamanoOjos'] ) !!}
		</div>
		<div class="col-3">
			{!! Form::label ('idPartiOjos','Particularidades') !!}
			{!! Form::select('idPartiOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiOjos'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiOjos','Modificaciones') !!}
			{!! Form::select('idModiOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiOjos'] ) !!}
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
			{!! Form::label ('infoNariz','¿Tiene información de la nariz?') !!}
			{!! Form::select('infoNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoNariz'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoNariz','Tipo') !!}
			{!! Form::select('tipoNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tipoNariz'] ) !!}
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('idPartiNariz','Particularidades') !!}
			{!! Form::select('idPartiNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiNariz'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiNariz','Modificaciones') !!}
			{!! Form::select('idModiNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiNariz'] ) !!}
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
			{!! Form::label ('infoBoca','¿Tiene información de la boca?') !!}
			{!! Form::select('infoBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoBoca'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('posBoca','Posición') !!}
			{!! Form::select('posBoca',  $bocaParte, '', ['class' => 'form-control', 'id' => 'posBoca'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tamanoBoca','Tamaño') !!}
			{!! Form::select('tamanoBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamanoBoca'] ) !!}
		</div>
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('idPartiBoca','Particularidades') !!}
			{!! Form::select('idPartiBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiBoca'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiBoca','Modificaciones') !!}
			{!! Form::select('idModiBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiBoca'] ) !!}
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
			{!! Form::label ('infoOrejas','¿Tiene información de las orejas?') !!}
			{!! Form::select('infoOrejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOrejas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('posOreja','Posición') !!}
			{!! Form::select('posOreja',  $orejasParte, '', ['class' => 'form-control', 'id' => 'posOreja'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('tipoOreja','Tipo') !!}
			{!! Form::select('tipoOreja', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tipoOreja'] ) !!}
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			{!! Form::label ('idPartiOreja','Particularidades') !!}
			{!! Form::select('idPartiOreja', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiOreja'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiOreja','Modificaciones') !!}
			{!! Form::select('idModiOreja', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiOreja'] ) !!}
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
			{!! Form::label ('infoFrente','¿Tiene información de la frente?') !!}
			{!! Form::select('infoFrente', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoFrente'] ) !!}
		</div>
		
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('idPartiFrente','Particularidades') !!}
			{!! Form::select('idPartiFrente', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiFrente'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiFrente','Modificaciones') !!}
			{!! Form::select('idModiFrente', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiFrente'] ) !!}
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
			{!! Form::label ('infoMejillas','¿Tiene información de los cachetes?') !!}
			{!! Form::select('infoMejillas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoMejillas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('posMejilla','Posición') !!}
			{!! Form::select('posMejilla',  $mejillasParte, '', ['class' => 'form-control', 'id' => 'posMejilla'] ) !!}
		</div>
		
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('idPartiMejillas','Particularidades') !!}
			{!! Form::select('idPartiMejillas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiMejillas'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiMejillas','Modificaciones') !!}
			{!! Form::select('idModiMejillas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiMejillas'] ) !!}
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
			{!! Form::label ('infoMenton','¿Tiene información del mentón?') !!}
			{!! Form::select('infoMenton', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoMenton'] ) !!}
		</div>
		
	</div>
	
	<div class="form-group row">
		<div class="col">
			{!! Form::label ('idPartiMenton','Particularidades') !!}
			{!! Form::select('idPartiMenton', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiMenton'] ) !!}
		</div>
		<div class="col">
			{!! Form::label ('idModiMenton','Modificaciones') !!}
			{!! Form::select('idModiMenton', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiMenton'] ) !!}
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