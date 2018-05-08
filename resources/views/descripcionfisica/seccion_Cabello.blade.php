<div class="card border-success" id="cabello">
    <div class="card-header">
        <h5 class="card-title">Cabello</h5>
    </div>
    <div class="card-body"> 
        <div class="form-group row" id="cabello">
		    <div class="col-4">
		        {!! Form::label ('perdio','¿Tamaño?') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-4">
                {!! Form::label ('perdio','Tipo') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-4">
                {!! Form::label ('perdio','Color') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-4">
                {!! Form::label ('perdio','Particularidad') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-4">
                {!! Form::label ('perdio','Modificación') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		</div>
		<div class="form-group row">
			<div class="col">
                {!! Form::label ('perdio','Observaciones') !!}
                {!! Form::textarea('size', '', ['class' => 'form-control', 'id' => 'dientePerdido', 'rows' => '3'] ) !!}
		    </div>
		</div>
    </div>
</div>