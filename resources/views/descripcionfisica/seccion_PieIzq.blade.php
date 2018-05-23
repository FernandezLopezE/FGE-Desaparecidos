<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="PieIzq" id="formPieIzq">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Pie izquierdo
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<!-- Sección tobillo  -->
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('infoTobilloIzq','Información de tobillo') !!}
					{!! Form::select('infoTobilloIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoTobilloIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubParticularidades','Particularidades') !!}
					{!! Form::select('idSubParticularidades', $tipoCeja, '', ['class' => 'form-control', 'id' => 'idSubParticularidades'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubModificaciones','Modificaciones') !!}
					{!! Form::select('idSubModificaciones', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idSubModificaciones'] ) !!}
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
					{!! Form::label ('infoTalonIzq','Información del talón') !!}
					{!! Form::select('infoTalonIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoTalonIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubParticularidades','Particularidades') !!}
					{!! Form::select('idSubParticularidades', $tipoCeja, '', ['class' => 'form-control', 'id' => 'idSubParticularidades'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubModificaciones','Modificaciones') !!}
					{!! Form::select('idSubModificaciones', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idSubModificaciones'] ) !!}
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
					{!! Form::label ('infoPieIzq','Información del pie') !!}
					{!! Form::select('infoPieIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoPieIzq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubParticularidades','Particularidades') !!}
					{!! Form::select('idSubParticularidades', $tipoCeja, '', ['class' => 'form-control', 'id' => 'idSubParticularidades'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubModificaciones','Modificaciones') !!}
					{!! Form::select('idSubModificaciones', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idSubModificaciones'] ) !!}
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
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarPieIzq">GUARDAR</button>
		</div> 
	</div>
</div>

{!! Html::script('personal/js/avatar/cuello-pecho.js') !!}