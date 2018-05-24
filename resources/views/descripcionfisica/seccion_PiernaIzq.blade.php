<div class="piernaIzq" id="formPiernaIzq" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Pierna izquierda
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<!-- Sección rodilla  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoPiernaIzq','Información de rodilla') !!}
					{!! Form::select('infoPiernaIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoPiernaIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partRodillaIzq','Particularidades') !!}
					{!! Form::select('partRodillaIzq', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partRodillaIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modRodillaIzq','Modificaciones') !!}
					{!! Form::select('modRodillaIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modRodillaIzq'] ) !!}
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

			<!-- Sección espinilla  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoEspinillaIzq','Información de espinilla') !!}
					{!! Form::select('infoEspinillaIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoEspinillaIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('partEspinillaIzq','Particularidades') !!}
					{!! Form::select('partEspinillaIzq', $tipoCeja, '', ['class' => 'form-control', 'id' => 'partEspinillaIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('modEspinillaIzq','Modificaciones') !!}
					{!! Form::select('modEspinillaIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'modEspinillaIzq'] ) !!}
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
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarPiernaIzq">GUARDAR</button>
		</div> 
	</div>
</div>