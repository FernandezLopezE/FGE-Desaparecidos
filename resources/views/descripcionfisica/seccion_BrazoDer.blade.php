<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="BrazoDer" id="formBrazoDer" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Brazo derecho
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<!-- Sección brazo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoBrazoDer','Información de brazo') !!}
					{!! Form::select('infoBrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoBrazoDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partBrazoDer','Particularidades') !!}
					{!! Form::select('partBrazoDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partBrazoDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modBrazoDer','Modificaciones') !!}
					{!! Form::select('modBrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modBrazoDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col">
					{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div><hr>
			<!-- Sección codo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoCodoIzq','Información de codo') !!}
					{!! Form::select('infoCodoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoCodoIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partCodoDer','Particularidades') !!}
					{!! Form::select('partCodoDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partCodoDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modCodoDer','Modificaciones') !!}
					{!! Form::select('modCodoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modCodoDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col">
					{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div><hr>

			<!-- Sección antebrazo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoAntebrazoDer','Información de antebrazo') !!}
					{!! Form::select('infoAntebrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoAntebrazoDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partAntebrazoDer','Particularidades') !!}
					{!! Form::select('partAntebrazoDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partAntebrazoDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modAntebrazoDer','Modificaciones') !!}
					{!! Form::select('modAntebrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modAntebrazoDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col">
					{!! Form::text('otroTipoCeja', '', ['class' => 'form-control', 'id' => 'otroTipoCeja', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div>
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarBrazoDer">GUARDAR</button>
		</div> 
	</div>
</div>
