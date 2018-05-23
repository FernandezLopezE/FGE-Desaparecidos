
<div class="ManoIzq" id="formManoIzq" style="display:none;">
	<div class="card border-success" >
		<div class="card-header">
			<h5 class="card-title">Mano izquierda
				<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
				<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
				<i class="fa fa-minus-square" style="float: right;" id="minCara"></i>
			</h5>
		</div>

		<div class="card-body">
			<!-- Sección muñeca  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoMuñecaIzq','Información de la muñeca') !!}
					{!! Form::select('infoMuñecaIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoMuñecaIzq'] ) !!}
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

			<!-- Sección palma  -->
			<div class="form-group row">
				<div class="col-4">
					{!! Form::label ('infoPalmaIzq','Información de la palma') !!}
					{!! Form::select('infoPalmaIzq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoPalmaIzq'] ) !!}
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

			<!-- Sección dedos  -->
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('infoDedosIZq','Información de los dedos') !!}
					{!! Form::select('infoDedosIZq', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoDedosIZq'] ) !!}
				</div>
				<div class="col">
					{!! Form::label ('idSubModificaciones','Ubicación') !!}
					{!! Form::select('idSubModificaciones', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'idSubModificaciones'] ) !!}
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

			<!-- Sección uñas  -->
			<div class="form-group row">
				<div class="col">
					{!! Form::label ('infoUñas','Información de las uñas') !!}
					{!! Form::select('infoUñas', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoUñas'] ) !!}
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
			<button type="button" class="btn btn-primary" style="float: right;" id="guardarManoIzq">GUARDAR</button>
		</div> 
	</div>
</div>

{!! Html::script('personal/js/avatar/cuello-pecho.js') !!}