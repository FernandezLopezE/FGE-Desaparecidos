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
				<div class="col" style="display:none;" id="brazoder1">
					{!! Form::label ('partBrazoDer','Particularidades') !!}
					{!! Form::select('partBrazoDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partBrazoDer'] ) !!}
				</div>
				<div class="col" style="display:none;" id="brazoder2">
					{!! Form::label ('modBrazoDer','Modificaciones') !!}
					{!! Form::select('modBrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modBrazoDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="brazoder3">
					{!! Form::text('otraPartBrazoDer', '', ['class' => 'form-control', 'id' => 'otraPartBrazoDer', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="brazoder4">
					{!! Form::text('otroModBrazoDer', '', ['class' => 'form-control', 'id' => 'otroModBrazoDer', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row" style="display:none;" id="brazoder5">
				<div class="col">
					{!! Form::textarea('obseBrazoDer', '', ['class' => 'form-control', 'id' => 'obseBrazoDer', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div><hr>
			<!-- Sección codo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoCodoDer','Información de codo') !!}
					{!! Form::select('infoCodoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoCodoDer'] ) !!}
				</div>
				<div class="col" style="display:none;" id="codoDer1">
					{!! Form::label ('partCodoDer','Particularidades') !!}
					{!! Form::select('partCodoDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partCodoDer'] ) !!}
				</div>
				<div class="col" style="display:none;" id="codoDer2">
					{!! Form::label ('modCodoDer','Modificaciones') !!}
					{!! Form::select('modCodoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modCodoDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="codoDer3">
					{!! Form::text('otroPartCodoDer', '', ['class' => 'form-control', 'id' => 'otroPartCodoDer', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="codoDer4">
					{!! Form::text('otroModCodoDer', '', ['class' => 'form-control', 'id' => 'otroModCodoDer', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="codoDer5">
					{!! Form::textarea('obseCodoDer', '', ['class' => 'form-control', 'id' => 'obseCodoDer', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div><hr>

			<!-- Sección antebrazo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoAntebrazoDer','Información de antebrazo') !!}
					{!! Form::select('infoAntebrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoAntebrazoDer'] ) !!}
				</div>
				<div class="col" style="display:none;" id="antebrazoDer1">
					{!! Form::label ('partAntebrazoDer','Particularidades') !!}
					{!! Form::select('partAntebrazoDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partAntebrazoDer'] ) !!}
				</div>
				<div class="col" style="display:none;" id="antebrazoDer2">
					{!! Form::label ('modAntebrazoDer','Modificaciones') !!}
					{!! Form::select('modAntebrazoDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modAntebrazoDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="antebrazoDer3">
					{!! Form::text('otraPartAnteDer', '', ['class' => 'form-control', 'id' => 'otraPartAnteDer', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="antebrazoDer4">
					{!! Form::text('otraModAnteDer', '', ['class' => 'form-control', 'id' => 'otraModAnteDer', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row" style="display:none;" id="antebrazoDer5">
				<div class="col">
					{!! Form::textarea('obseAnteDer', '', ['class' => 'form-control', 'id' => 'obseAnteDer', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div>
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarBrazoDer">GUARDAR</button>
		</div> 
	</div>
</div>
