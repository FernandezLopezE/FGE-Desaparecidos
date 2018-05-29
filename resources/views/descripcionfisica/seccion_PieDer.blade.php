<div class="pieDer" id="formPieDer" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Pie derecho
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<!-- Sección tobillo  -->
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('infoTobilloDer','Información de tobillo') !!}
					{!! Form::select('infoTobilloDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoTobilloDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partTobilloDer','Particularidades') !!}
					{!! Form::select('partTobilloDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partTobilloDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modTobilloDer','Modificaciones') !!}
					{!! Form::select('modTobilloDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modTobilloDer'] ) !!}
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

			<!-- Sección talon  -->
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('infoTalonDer','Información del talón') !!}
					{!! Form::select('infoTalonDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoTalonDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partTalonDer','Particularidades') !!}
					{!! Form::select('partTalonDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partTalonDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modTalonDer','Modificaciones') !!}
					{!! Form::select('modTalonDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modTalonDer'] ) !!}
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

			<!-- Sección pie  -->
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('infoPieDer','Información del pie') !!}
					{!! Form::select('infoPieDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoPieDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partPieDer','Particularidades') !!}
					{!! Form::select('partPieDer', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partPieDer'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modPieDer','Modificaciones') !!}
					{!! Form::select('modPieDer', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modPieDer'] ) !!}
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
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarPieDer">GUARDAR</button>
		</div> 
	</div>
</div>