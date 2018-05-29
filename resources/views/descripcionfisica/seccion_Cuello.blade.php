
<div class="cuello" id="formCuello" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Cuello
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('idPartCuello','Particularidades') !!}
					{!! Form::select('idPartCuello', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idPartCuello'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idModCuello','Modificaciones') !!}
					{!! Form::select('idModCuello', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idModCuello'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="cuello1">
					{!! Form::text('otraPartCuello', '', ['class' => 'form-control', 'id' => 'otraPartCuello', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="cuello2">
					{!! Form::text('otraModCuello', '', ['class' => 'form-control', 'id' => 'otraModCuello', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('observacionesCuello', '', ['class' => 'form-control', 'id' => 'observacionesCuello', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div>
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarCuello">GUARDAR</button>
		</div> 
	</div>
</div>

