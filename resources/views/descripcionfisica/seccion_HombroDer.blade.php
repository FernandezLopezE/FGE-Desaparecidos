
<div class="hombroDer" id="formHombroDer" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Hombro derecho
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('partHombroDer','Particularidades') !!}
					{!! Form::select('partHombroDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partHombroDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modHombroDer','Modificaciones') !!}
					{!! Form::select('modHombroDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modHombroDer'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="hombroDer1">
					{!! Form::text('otraPartHombroDer', '', ['class' => 'form-control', 'id' => 'otraPartHombroDer', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="hombroDer2">
					{!! Form::text('otraModHombroDer', '', ['class' => 'form-control', 'id' => 'otraModHombroDer', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('obseHombroDer', '', ['class' => 'form-control', 'id' => 'obseHombroDer', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div>
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarHombroDer">GUARDAR</button>
		</div> 
	</div>
</div>