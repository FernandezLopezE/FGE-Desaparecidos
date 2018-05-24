
<div class="cara" id="formCara" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Cara
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

	<div class="card-body"  id="datosCara"> 
		<div class="form-group row">
			<div class="col-6" id="cejas1">
				{!! Form::label ('infocejas','¿Tiene información de las cejas?') !!}
				{!! Form::select('infocejas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infocejas'] ) !!}
			</div>
			<div class="col" id="cejas2" style="display:none;">
				{!! Form::label ('posCejas','Posición') !!}
				{!! Form::select('posCejas',  $cejasParte, '', ['class' => 'form-control', 'id' => 'posCejas'] ) !!}
			</div>
			<div class="col" id="cejas3" style="display:none;">
				{!! Form::label ('tipoCeja','Tipo') !!}
				{!! Form::select('tipoCeja', $tipoCeja, '', ['class' => 'form-control', 'id' => 'tipoCeja'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="cejas4" style="display:none;">
			<div class="col">
				{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otro tipo de cejas'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="cejas5" style="display:none;">
			
			<div class="col">
				{!! Form::label ('idSubParticularidades','Particularidades') !!}
				{!! Form::select('idSubParticularidades', $tipoCeja, '', ['class' => 'form-control', 'id' => 'idSubParticularidades'] ) !!}
			</div>
			<div class="col">
				{!! Form::label ('idSubModificaciones','Modificaciones') !!}
				{!! Form::select('idSubModificaciones', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idSubModificaciones'] ) !!}
			</div>
		</div>

		<div class="form-group row" >
			<div class="col" id="cejas6" style="display:none;">
				{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="cejas7" style="display:none;">
				{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra modificación'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="cejas8" style="display:none;">
			<div class="col">
				{!! Form::textarea('observacionesCejas', '', ['class' => 'form-control', 'id' => 'observacionesCejas', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
			</div>
		</div><hr>

		<!--Sección ojos-->
		<div class="form-group row">
			<div class="col-6" >
				{!! Form::label ('infoOjos','¿Tiene información de los ojos?') !!}
				{!! Form::select('infoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoOjos'] ) !!}
			</div>
			<div class="col"  id="ojos1" style="display:none;">
				{!! Form::label ('posOjos','Posición') !!}
				{!! Form::select('posOjos',  $ojosParte, '', ['class' => 'form-control', 'id' => 'posOjos'] ) !!}
			</div>
			<div class="col" id="ojos2" style="display:none;">
				{!! Form::label ('colorOjos','Color') !!}
				{!! Form::select('colorOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'colorOjos'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="ojos3" style="display:none;">
			<div class="col">
				{!! Form::text('otroColorOjo', '', ['class' => 'form-control', 'id' => 'otroColorOjo', 'placeholder' => 'Especifique otro color de ojo(s)'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col-3" id="ojos4" style="display:none;">
				{!! Form::label ('tamanoOjos','Tamaño') !!}
				{!! Form::select('tamanoOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamanoOjos'] ) !!}
			</div>
			<div class="col-3" id="ojos5" style="display:none;">
				{!! Form::label ('idPartiOjos','Particularidades') !!}
				{!! Form::select('idPartiOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiOjos'] ) !!}
			</div>
			<div class="col" id="ojos6" style="display:none;">
				{!! Form::label ('idModiOjos','Modificaciones') !!}
				{!! Form::select('idModiOjos', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiOjos'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="ojos7" style="display:none;">
				{!! Form::text('otraPartOjo', '', ['class' => 'form-control', 'id' => 'otraPartOjo', 'placeholder' => 'Especifique otra particularidad de ojo(s)'] ) !!}
			</div>
			<div class="col" id="ojos8" style="display:none;">
				{!! Form::text('otraModOjo', '', ['class' => 'form-control', 'id' => 'otraModOjo', 'placeholder' => 'Especifique otra modificación en el ojo(s)'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="ojos9" style="display:none;">
			<div class="col">
				{!! Form::textarea('observacionesOjos', '', ['class' => 'form-control', 'id' => 'observacionesOjos', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
			</div>
		</div><hr>

		<!--Sección nariz-->	
		<div class="form-group row">
			<div class="col-6">
				{!! Form::label ('infoNariz','¿Tiene información de la nariz?') !!}
				{!! Form::select('infoNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoNariz'] ) !!}
			</div>
			<div class="col" id="nariz1" style="display:none;">
				{!! Form::label ('tipoNariz','Tipo') !!}
				{!! Form::select('tipoNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tipoNariz'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="nariz2" style="display:none;">
			<div class="col">
				{!! Form::text('otroTipNar', '', ['class' => 'form-control', 'id' => 'otroTipNar', 'placeholder' => 'Especifique otro tipo de nariz'] ) !!}
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col" id="nariz3" style="display:none;">
				{!! Form::label ('idPartiNariz','Particularidades') !!}
				{!! Form::select('idPartiNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiNariz'] ) !!}
			</div>
			<div class="col" id="nariz4" style="display:none;">
				{!! Form::label ('idModiNariz','Modificaciones') !!}
				{!! Form::select('idModiNariz', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiNariz'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="nariz5" style="display:none;">
				{!! Form::text('otraPartNariz', '', ['class' => 'form-control', 'id' => 'otraPartNariz', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="nariz6" style="display:none;">
				{!! Form::text('otraPartNariz', '', ['class' => 'form-control', 'id' => 'otraPartNariz', 'placeholder' => 'Especifique otra modificación'] ) !!}
			</div>
		</div>
			
		<div class="form-group row" id="nariz7" style="display:none;">
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
			<div class="col" id="boca1" style="display:none;">
				{!! Form::label ('posBoca','Posición') !!}
				{!! Form::select('posBoca',  $bocaParte, '', ['class' => 'form-control', 'id' => 'posBoca'] ) !!}
			</div>
			<div class="col" id="boca2" style="display:none;">
				{!! Form::label ('tamanoBoca','Tamaño') !!}
				{!! Form::select('tamanoBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tamanoBoca'] ) !!}
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col" id="boca3" style="display:none;">
				{!! Form::label ('idPartiBoca','Particularidades') !!}
				{!! Form::select('idPartiBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiBoca'] ) !!}
			</div>
			<div class="col" id="boca4" style="display:none;">
				{!! Form::label ('idModiBoca','Modificaciones') !!}
				{!! Form::select('idModiBoca', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiBoca'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="boca5" style="display:none;">
				{!! Form::text('otraPartBoca', '', ['class' => 'form-control', 'id' => 'otraPartBoca', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="boca6" style="display:none;">
				{!! Form::text('otraPartNariz', '', ['class' => 'form-control', 'id' => 'otraPartNariz', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
		</div>
			
		<div class="form-group row" id="boca7" style="display:none;">
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
			<div class="col" id="oreja1" style="display:none;">
				{!! Form::label ('posOreja','Posición') !!}
				{!! Form::select('posOreja',  $orejasParte, '', ['class' => 'form-control', 'id' => 'posOreja'] ) !!}
			</div>
			<div class="col" id="oreja2" style="display:none;">
				{!! Form::label ('tipoOreja','Tipo') !!}
				{!! Form::select('tipoOreja', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tipoOreja'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="oreja3" style="display:none;">
				{!! Form::text('otroTipoOreja', '', ['class' => 'form-control', 'id' => 'otroTipoOreja', 'placeholder' => 'Especifique otro tipo de oreja(s)'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="oreja4" style="display:none;">
				{!! Form::label ('idPartiOreja','Particularidades') !!}
				{!! Form::select('idPartiOreja', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiOreja'] ) !!}
			</div>
			<div class="col" id="oreja5" style="display:none;">
				{!! Form::label ('idModiOreja','Modificaciones') !!}
				{!! Form::select('idModiOreja', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiOreja'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="oreja6" style="display:none;">
				{!! Form::text('otraPartOreja', '', ['class' => 'form-control', 'id' => 'otraPartOreja', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="oreja7" style="display:none;">
				{!! Form::text('otraModOreja', '', ['class' => 'form-control', 'id' => 'otraModOreja', 'placeholder' => 'Especifique otra modificación'] ) !!}
			</div>
		</div>

		<div class="form-group row" id="oreja8" style="display:none;">
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
			<div class="col" id="frente1" style="display:none;">
				{!! Form::label ('idPartiFrente','Particularidades') !!}
				{!! Form::select('idPartiFrente', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartiFrente'] ) !!}
			</div>
			<div class="col" id="frente2" style="display:none;">
				{!! Form::label ('idModiFrente','Modificaciones') !!}
				{!! Form::select('idModiFrente', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModiFrente'] ) !!}
			</div>
		</div>

		<div class="form-group row">
			<div class="col" id="frente3" style="display:none;">
				{!! Form::text('otraPartFrente', '', ['class' => 'form-control', 'id' => 'otraPartFrente', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="frente4" style="display:none;">
				{!! Form::text('otraModFrente', '', ['class' => 'form-control', 'id' => 'otraModFrente', 'placeholder' => 'Especifique otra modificación'] ) !!}
			</div>
		</div>
			
		<div class="form-group row" id="frente5" style="display:none;">
			<div class="col">
				{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
			</div>
		</div><hr>	

		<!--Sección mejillas-->
		<div class="form-group row">
			<div class="col-6">
				{!! Form::label ('infoMejillas','¿Tiene información de las mejillas?') !!}
				{!! Form::select('infoMejillas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoMejillas'] ) !!}
			</div>
			<div class="col" id="mejilla1" style="display:none;">
				{!! Form::label ('posMejilla','Posición') !!}
				{!! Form::select('posMejilla',  $mejillasParte, '', ['class' => 'form-control', 'id' => 'posMejilla'] ) !!}
			</div>
			
		</div>
		
		<div class="form-group row"  id="mejilla2" style="display:none;">
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
			<div class="col" id="mejilla3" style="display:none;">
				{!! Form::text('otraPartMejilla', '', ['class' => 'form-control', 'id' => 'otraPartMejilla', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="mejilla4" style="display:none;">
				{!! Form::text('otraModMejilla', '', ['class' => 'form-control', 'id' => 'otraModMejilla', 'placeholder' => 'Especifique otra modificación'] ) !!}
			</div>
		</div>
			
		<div class="form-group row" id="mejilla5" style="display:none;">
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
		
		<div class="form-group row" id="menton1" style="display:none;">
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
			<div class="col" id="menton2" style="display:none;">
				{!! Form::text('otraPartMenton', '', ['class' => 'form-control', 'id' => 'otraPartMenton', 'placeholder' => 'Especifique otra particularidad'] ) !!}
			</div>
			<div class="col" id="menton3" style="display:none;">
				{!! Form::text('otraModMenton', '', ['class' => 'form-control', 'id' => 'otraModMenton', 'placeholder' => 'Especifique otra modificación'] ) !!}
			</div>
		</div>
			
		<div class="form-group row" id="menton4" style="display:none;">
			<div class="col">
				{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
			</div>
		</div><hr>
		<button type="button" class="btn btn-primary" style="float: right;" id="guardarCara">GUARDAR</button>
	</div>
</div>
</div>
{!! Html::script('personal/js/avatar/cara.js') !!}
