<div class="abdomen" id="formAbdomen" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Abdomen
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('partAbdomen','Particularidades') !!}
					{!! Form::select('partAbdomen', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partAbdomen'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modAbdomen','Modificaciones') !!}
					{!! Form::select('modAbdomen', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modAbdomen'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col" style="display:none;" id="abdomen1">
					{!! Form::text('otraPartAbdomen', '', ['class' => 'form-control', 'id' => 'otraPartAbdomen', 'placeholder' => 'Especifique otra particularidad'] ) !!}
				</div>
				<div class="col" style="display:none;" id="abdomen2">
					{!! Form::text('otraModAbdomen', '', ['class' => 'form-control', 'id' => 'otraModAbdomen', 'placeholder' => 'Especifique otra modificación'] ) !!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col">
					{!! Form::textarea('obseAbdomen', '', ['class' => 'form-control', 'id' => 'obseAbdomen', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
				</div>
			</div>
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarAbdomen">GUARDAR</button>
		</div> 
	</div>
</div>