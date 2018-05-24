<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="BrazoIzq" id="formBrazoIzq" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Brazo izquierdo
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<!-- Sección brazo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoBrazoIzq','Información de brazo') !!}
					{!! Form::select('infoBrazoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoBrazoIzq'] ) !!}
				</div>
				<div class="col" style="display:none;" id="brazo1">
					{!! Form::label ('partBrazoIzq','Particularidades') !!}
					{!! Form::select('partBrazoIzq', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partBrazoIzq'] ) !!}
				</div>
				<div class="col" style="display:none;" id="brazo2">
					{!! Form::label ('modBrazoIzq','Modificaciones') !!}
					{!! Form::select('modBrazoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modBrazoIzq'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="brazo3">
					{!! Form::text('otraPartBrazoIzq', '', ['class' => 'form-control', 'id' => 'otraPartBrazoIzq', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="brazo4">
					{!! Form::text('otraModBrazoIzq', '', ['class' => 'form-control', 'id' => 'otraModBrazoIzq', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row" style="display:none;" id="brazo5">
				<div class="col">
					{!! Form::textarea('obseBrazoIzq', '', ['class' => 'form-control', 'id' => 'obseBrazoIzq', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div><hr>

			<!-- Sección codo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoCodoIzq','Información de codo') !!}
					{!! Form::select('infoCodoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoCodoIzq'] ) !!}
				</div>
				<div class="col" style="display:none;" id="codo1">
					{!! Form::label ('partCodoIzq','Particularidades') !!}
					{!! Form::select('partCodoIzq', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partCodoIzq'] ) !!}
				</div>
				<div class="col" style="display:none;" id="codo2">
					{!! Form::label ('modCodoIzq','Modificaciones') !!}
					{!! Form::select('modCodoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modCodoIzq'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="codo3">
					{!! Form::text('otraPartCodIzq', '', ['class' => 'form-control', 'id' => 'otraPartCodIzq', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="codo4">
					{!! Form::text('otraModCodIzq', '', ['class' => 'form-control', 'id' => 'otraModCodIzq', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row" style="display:none;" id="codo5">
				<div class="col">
					{!! Form::textarea('obseCodoIzq', '', ['class' => 'form-control', 'id' => 'obseCodoIzq', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div><hr>

			<!-- Sección antebrazo  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoCodoIzq','Información de antebrazo') !!}
					{!! Form::select('infoCodoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoCodoIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partAntebrazoIzq','Particularidades') !!}
					{!! Form::select('partAntebrazoIzq', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partAntebrazoIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modAntebrazoIzq','Modificaciones') !!}
					{!! Form::select('modAntebrazoIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modAntebrazoIzq'] ) !!}
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
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarBrazoIzq">GUARDAR</button>
		</div> 
	</div>
</div>