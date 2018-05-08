<form class="cabello" style="display:none;">
<div class="card border-success" >
    <div class="card-header">
        <h5 class="card-title">Cabello, barba, bigote y patillas</h5>
    </div>
    <div class="card-body"> 
        <div class="form-group row" id="cabello">
		    <div class="col-3">
		        {!! Form::label ('perdio','Tamaño') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Tipo') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Color') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Particularidad') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		</div>

		<div class="form-group row">
		    <div class="col-3">
                {!! Form::label ('perdio','Modificación') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col">
                {!! Form::label ('perdio','Observaciones') !!}
                {!! Form::textarea('size', '', ['class' => 'form-control', 'id' => 'dientePerdido', 'rows' => '1'] ) !!}
		    </div>
		</div><hr>

		<div class="form-group row">
			<div class="col-3">
		        {!! Form::label ('perdio','¿Tenía barba?') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
		        {!! Form::label ('perdio','Tipo') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Color') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Estilo') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		</div>
		<div class="form-group row">
			<div class="col">
                {!! Form::label ('perdio','Observaciones') !!}
                {!! Form::textarea('size', '', ['class' => 'form-control', 'id' => 'dientePerdido', 'rows' => '1'] ) !!}
		    </div>
		</div><hr>
		
		<div class="form-group row">
			<div class="col-3">
		        {!! Form::label ('perdio','¿Tenía bigote?') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
		        {!! Form::label ('perdio','Tipo') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Color') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Estilo') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		</div>
		<div class="form-group row">
			<div class="col">
                {!! Form::label ('perdio','Observaciones') !!}
                {!! Form::textarea('size', '', ['class' => 'form-control', 'id' => 'dientePerdido', 'rows' => '1'] ) !!}
		    </div>
		</div><hr>

		<div class="form-group row">
			<div class="col-3">
		        {!! Form::label ('perdio','¿Tenía patillas?') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
		        {!! Form::label ('perdio','Tipo') !!}
		        {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Color') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		    <div class="col-3">
                {!! Form::label ('perdio','Estilo') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
		    </div>
		</div>
		<div class="form-group row">
			<div class="col">
                {!! Form::label ('perdio','Observaciones') !!}
                {!! Form::textarea('size', '', ['class' => 'form-control', 'id' => 'dientePerdido', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		    </div>
		</div>
    </div>
</div>
</form>