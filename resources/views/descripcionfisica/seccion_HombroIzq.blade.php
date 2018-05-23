
<div class="hombroIzq" id="formHombroIzq" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Hombro izquierdo
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('partHombroIzq','Particularidades') !!}
					{!! Form::select('partHombroIzq', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partHombroIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modHombroIzq','Modificaciones') !!}
					{!! Form::select('modHombroIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modHombroIzq'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::text('otraPartHombroIzq', '', ['class' => 'form-control', 'id' => 'otraPartHombroIzq', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col">
					{!! Form::text('otraModHombroIzq', '', ['class' => 'form-control', 'id' => 'otraModHombroIzq', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('obseHombroIzq', '', ['class' => 'form-control', 'id' => 'obseHombroIzq', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div>
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarHombroIzq">GUARDAR</button>
		</div> 
	</div>
</div>