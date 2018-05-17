<div class="cabello" style="display:none;" id="acordion">
<div class="card border-success" >
    <div class="card-header" id="headingOne">
        <h5 class="card-title">Cabello y vello facial
        	<i class="fa fa-pencil pull-right" id="btnEditarC"></i>
        	<i class="fa fa-times-circle" style="float: right; margin-left: 10px;" id="cerrar"></i>
        	<i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="colapsar"></i>
        	
        </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"> 
    	{{ Form::hidden('idExtraviado', $desaparecido->id, array('id' => 'idExtraviado')) }}   
    <div class="card-body"  id="datosCabello"> 
        <div class="row" id="cabello">
        	<div class="col-3">
		        {!! Form::label ('tieneCabello','¿Tenía cabello?') !!}
		        {!! Form::select('tieneCabello', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneCabello'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoCabello1">
                {!! Form::label ('tipoCabello','Tipo') !!}
                {!! Form::select('tipoCabello', $tipoCabello, '', ['class' => 'form-control', 'id' => 'tipoCabello'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoCabello2">
                {!! Form::label ('colorCabello','Color') !!}
                {!! Form::select('colorCabello', $coloresCabello, '', ['class' => 'form-control', 'id' => 'colorCabello'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoCabello3">
                {!! Form::label ('partiCabello','Particularidad') !!}
                {!! Form::select('partiCabello',$partiCabello, '', ['class' => 'form-control', 'id' => 'partiCabello','multiple' => 'multiple'] ) !!}
		    </div>
		</div>

		<div class="form-group row" id="cabello">
		    <div class="col" style="display:none;" id="a">
                {!! Form::text('otroTipoC', '', ['class' => 'form-control', 'id' => 'otroTipoC', 'placeholder' => 'Especifique'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="b">
                {!! Form::text('otroColorC', '', ['class' => 'form-control', 'id' => 'otroColorC', 'placeholder' => 'Especifique'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="c">
                {!! Form::text('otroPartiC', '', ['class' => 'form-control', 'id' => 'otroPartiC', 'placeholder' => 'Especifique'] ) !!}
		    </div>
		</div>

		<div class="row">
			<div class="col" style="display:none;" id="infoCabello4">
		        {!! Form::label ('tamanoCabello','Tamaño') !!}
		        {!! Form::select('tamanoCabello', $tamanoCabello, '', ['class' => 'form-control', 'id' => 'tamanoCabello'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="infoCabello5">
                {!! Form::label ('modiCabello','Modificación') !!}
                {!! Form::select('modiCabello', $modiCabello, '', ['class' => 'form-control', 'id' => 'modiCabello','multiple' => 'multiple'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="d">
		    	{!! Form::label ('Especifique','Especifique') !!}
		    	{!! Form::text('otroModificacionC', '', ['class' => 'form-control', 'id' => 'otroModificacionC', 'placeholder' => 'Especifique'] ) !!}
		    </div>
		</div>

		<div class="form-group row" style="display:none;" id="infoCabello6">
			<div class="col">
                {!! Form::label ('observacionesCabello','Observaciones') !!}
                {!! Form::textarea('observacionesCabello', '', ['class' => 'form-control', 'id' => 'observacionesCabello', 'rows' => '1'] ) !!}
		    </div>
		</div><hr>

		<div class="row">
			<div class="col-3">
		        {!! Form::label ('tieneBarba','¿Tenía barba?') !!}
		        {!! Form::select('tieneBarba', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneBarba'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoBarba1">
		        {!! Form::label ('tipoBarba','Tipo') !!}
		        {!! Form::select('tipoBarba', $tipoBarba, '', ['class' => 'form-control', 'id' => 'tipoBarba'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoBarba2">
                {!! Form::label ('colorBarba','Color') !!}
                {!! Form::select('colorBarba', $coloresBarba, '', ['class' => 'form-control', 'id' => 'colorBarba'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoBarba3">
                {!! Form::label ('modiBarba','Estilo') !!}
                {!! Form::select('modiBarba', $modiBarba, '', ['class' => 'form-control', 'id' => 'modiBarba','multiple' => 'multiple'] ) !!}
		    </div>
		</div>

		<div class="form-group row">
			<div class="col" style="display:none;" id="e">
                {!! Form::text('otroTipoBar', '', ['class' => 'form-control', 'id' => 'otroTipoBar', 'placeholder' => 'Especifique otro tipo'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="f">
                {!! Form::text('otroColorBar', '', ['class' => 'form-control', 'id' => 'otroColorBar', 'placeholder' => 'Especifique otro color'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="g">
                {!! Form::text('otroPartiBar', '', ['class' => 'form-control', 'id' => 'otroPartiBar', 'placeholder' => 'Especifique otro estilo'] ) !!}
		    </div>
		</div>

		<div class="form-group row" style="display:none;" id="infoBarba4">
			<div class="col" >
                {!! Form::label ('observacionesBarba','Observaciones') !!}
                {!! Form::textarea('observacionesBarba', '', ['class' => 'form-control', 'id' => 'observacionesBarba', 'rows' => '1'] ) !!}
		    </div>
		</div><hr>
		
		<div class="row">
			<div class="col-3">
		        {!! Form::label ('tieneBigote','¿Tenía bigote?') !!}
		        {!! Form::select('tieneBigote', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneBigote'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;"  id="infoBigote1">
		        {!! Form::label ('tipoBigote','Tipo') !!}
		        {!! Form::select('tipoBigote', $tipoBigote, '', ['class' => 'form-control', 'id' => 'tipoBigote'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoBigote2">
                {!! Form::label ('colorBigote','Color') !!}
                {!! Form::select('colorBigote', $coloresBigote, '', ['class' => 'form-control', 'id' => 'colorBigote'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoBigote3">
                {!! Form::label ('modiBigote','Estilo') !!}
                {!! Form::select('modiBigote', $modiBigote, '', ['class' => 'form-control', 'id' => 'modiBigote','multiple' => 'multiple'] ) !!}
		    </div>
		</div>

		<div class="row">

			<div class="col" style="display:none;" id="h">
                {!! Form::text('otroTipoBig', '', ['class' => 'form-control', 'id' => 'otroTipoBig', 'placeholder' => 'Especifique otro tipo'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="i">
                {{!! Form::text('otroColorBig', '', ['class' => 'form-control', 'id' => 'otroColorBig', 'placeholder' => 'Especifique otro color'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="j">
                {!! Form::text('otroPartiBig', '', ['class' => 'form-control', 'id' => 'otroPartiBig', 'placeholder' => 'Especifique otro estilo'] ) !!}
		    </div>
		</div>
		<div class="form-group row" style="display:none;" id="infoBigote4">
			<div class="col">
                {!! Form::label ('observacionesBigote','Observaciones') !!}
                {!! Form::textarea('observacionesBigote', '', ['class' => 'form-control', 'id' => 'observacionesBigote', 'rows' => '1'] ) !!}
		    </div>
		</div><hr>

		<div class="form-group row">
			<div class="col-3">
		        {!! Form::label ('tienePatilla','¿Tenía patillas?') !!}
		        {!! Form::select('tienePatilla', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tienePatilla'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoPatilla1">
		        {!! Form::label ('tipoPatilla','Tipo') !!}
		        {!! Form::select('tipoPatilla', $tipoPatilla, '', ['class' => 'form-control', 'id' => 'tipoPatilla'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoPatilla2">
                {!! Form::label ('colorPatilla','Color') !!}
                {!! Form::select('colorPatilla', $coloresPatilla, '', ['class' => 'form-control', 'id' => 'colorPatilla'] ) !!}
		    </div>
		    <div class="col-3" style="display:none;" id="infoPatilla3">
                {!! Form::label ('modiPatilla','Estilo') !!}
                {!! Form::select('modiPatilla', $modiPatilla, '', ['class' => 'form-control', 'id' => 'modiPatilla','multiple' => 'multiple'] ) !!}
		    </div>
		</div>

		<div class="row">
			<div class="col" style="display:none;" id="k">
                {!! Form::text('otroTipoPat', '', ['class' => 'form-control', 'id' => 'otroTipoPat', 'placeholder' => 'Especifique otro tipo'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="l">
                {!! Form::text('otroColorPat', '', ['class' => 'form-control', 'id' => 'otroColorPat', 'placeholder' => 'Especifique otro color'] ) !!}
		    </div>
		    <div class="col" style="display:none;" id="m">
                {!! Form::text('otroPartiPat', '', ['class' => 'form-control', 'id' => 'otroPartiPat', 'placeholder' => 'Especifique otro estilo'] ) !!}
		    </div>
		</div>

		<div class="form-group row" style="display:none;" id="infoPatilla4">
			<div class="col">
                {!! Form::label ('observacionesPatilla','Observaciones') !!}
                {!! Form::textarea('observacionesPatilla', '', ['class' => 'form-control', 'id' => 'observacionesPatilla', 'rows' => '1', 'placeholder' => 'Observaciones'] ) !!}
		    </div>
		</div>
		<button type="button" class="btn btn-primary" style="float: right;" id="btnGuardarC">GUARDAR</button>
    </div>
    @include('descripcionfisica.show_cabello')
</div>
</div>
</div>