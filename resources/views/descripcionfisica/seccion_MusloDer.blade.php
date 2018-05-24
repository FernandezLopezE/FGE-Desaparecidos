<div class="musloDer" id="formMusloDer" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Muslo derecho
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('partMusloDer','Particularidades') !!}
					{!! Form::select('partMusloDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partMusloDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modMusloDer','Modificaciones') !!}
					{!! Form::select('modMusloDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modMusloDer'] ) !!}
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
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarMusloDer">GUARDAR</button>
		</div> 
	</div>
</div>