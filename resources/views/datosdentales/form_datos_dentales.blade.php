@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
{!! Html::style('personal/css/bootstrap-toggle.min.css') !!}
{!! Html::style('personal/css/jquery-confirm.min.css') !!}
{!! Html::style('personal/css/alertify.min.css') !!}
{!! Html::style('personal/css/sweetalert.css') !!}
{!! Html::style('personal/css/datos_dentales/dentaduraAdult.css') !!}
{!! Html::style('personal/css/datos_dentales/datosDentales.css') !!}
@endsection


@section('content')
@include('navs.navs_datos',array('activar' => 'dentadura'))
<nav>
	<div class="card border-primary">
		<div class="card-header">	
			<h5>DATOS RELEVANTES
				<button type="button" class="btn btn-dark pull-right" id="agregaInformacion" data-toggle="collapse" href="#primeraseccion">AGREGAR</button>
				<button type="button" class="btn btn-dark pull-right" id="editarInformacion">EDITAR</button>
				<button type="button" class="btn btn-dark pull-right" id="updateInformacion">ACTUALIZAR</button>
			</h5>
		</div>
		<div class="card-body" id="primeraseccion">
		<h5>Su familiar tiene sus dientes:</h5>
		<div class="form-group row">
			<div class="col-2">
				{!! Form::label ('dienteTamano','Tamaño:') !!}
				{!! Form::select ('nombreTamano',$dienteTamano, '', ['class' => 'form-control', 'id' => 'dienteTamano'])!!}	
			</div>
			<div class="col-2">
				{!! Form::label ('atencionOdonto','Asistió al dentista:') !!}
				{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
			</div>
			<div id="infoDen" class="col-4">
				{!! Form::label ('infoDentista','Tiene información del dentista:') !!}
				{!! Form::submit('Agregar datos dentista', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'datosdentista']) !!}
			</div>
			<div id="verinfodentista">
				{!! Form::label ('infoDentista','Tiene información del dentista:') !!}
				{!! Form::submit('Ver datos dentista', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'verdatosdentista']) !!}
			</div>
			<div>
				@include('includes.modal_datos_dentista')
			</div>
		</div>
		<hr>
		<div class="form-group row">
        	<div class="col-4">
        		<h5>Tipo de perfil</h5>	
        	</div>
        	<div class="col-4">
        		<h5>Tipo de mordida</h5>
        	</div>
        	<div class="col-4">
        		<h5>Tipo de sonrisa</h5>
        	</div>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                {!! Form::label ('tipoperfil','¿Conoce qué tipo de perfil tiene su familiar?') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'perfil'] ) !!}
            </div>
             <div class="col-md-4">
                {!! Form::label ('tipomordida','¿Conoce qué tipo de mordida tiene su familiar?') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tipmordida'] ) !!}
            </div>
            <div class="col-md-4">
                {!! Form::label ('tiposonrisa','¿Conoce qué tipo de sonrisa tiene su familiar?') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tiposonrisa'] ) !!}
            </div>
        </div>
        <div class="form-group row">
        	<div class="col-md-4 row" >
        		<div class="col" id="tipoperfil">
        			{!! Form::label ('selectperfil','Seleccionar perfil') !!}
               		{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectPerfil']) !!}
               		@include('includes.modal_perfilDiente')
            	</div>
        		<div class="col" style="margin-left: -2%;margin-right: -15px" id="perfilseleccionado">
        			{!! Form::label ('perfilselec','Perfil seleccionado') !!}
                	{!! Form::text ('perfilselec',old('perfilselec'), ['class' => 'form-control mayuscula', 'id' => 'valorPerfil', 'readonly' => 'readonly'] )!!}
            	</div>
            	<div>
            		{{ Form::hidden('idperfilselec','', array('id' => 'idperfilselec')) }}
            	</div>
        	</div>
        	<div class="col-md-4 row">
        		<div class="col" style="margin-right: -10px;margin-left: 4%;" id="tipomordida">
        			{!! Form::label ('selectMordida','Seleccionar mordida') !!}
                	{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectMordida']) !!}
                	@include('includes.modal_tipoMordida')
            	</div>
        		<div class="col" style="margin-right: -22px;" id="mordidaseleccionada">
        			{!! Form::label ('mordidaselec','Mordida seleccionada') !!}
                	{!! Form::text ('mordidaselec',old('mordidaselec'), ['class' => 'form-control mayuscula', 'id' => 'valormordida', 'readonly' => 'readonly'] )!!}
            	</div>
            	<div>
            		{{ Form::hidden('idmordidaselec','', array('id' => 'idmordidaselec')) }}
            	</div>
        	</div>
        	<div class="col-md-4 row">
        		<div class="col" style="margin-left: 35px; margin-right: -10%;" id="selecsonrisa">
        			{!! Form::label ('selectSonrisa','Seleccionar sonrisa') !!}
                	{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectSonrisa']) !!}
                	@include('includes.modal_tipoSonrisa')
            	</div>
        		<div class="col" style="margin-left: 37px; margin-right: -11%;" id="sonrisaseleccionada">
        			{!! Form::label ('sonrisaselec','Sonrisa seleccionada') !!}
                	{!! Form::text ('sonrisaselec',old('sonrisaselec'), ['class' => 'form-control mayuscula', 'id' => 'dientes_girados', 'readonly' => 'readonly'] )!!}
            	</div>
            	<div>
            		{{ Form::hidden('idsonrisaselec','', array('id' => 'idsonrisaselec')) }}
            	</div>
        	</div>
        </div>
		</div>
	</div>
	
	<div class="card border-primary" id="cardTratamientos">
		<div class="card-header">
			<h5>TRATAMIENTOS, HIGIENE & HÁBITOS DENTALES DE LA PERSONA DESAPARECIDA
				<button type="button" class="btn btn-dark pull-right" id="agregaSegInformacion" data-toggle="collapse" href="#segundaseccion">GUARDAR</button>
				<button type="button" class="btn btn-dark pull-right" id="editarSegInformacion">EDITAR</button>
				<button type="button" class="btn btn-dark pull-right" id="updateSegInformacion">ACTUALIZAR</button>
			</h5>	
		</div>
		<div class="card-body" id="segundaseccion">
			<div class="form-group row">
            	<div>
            		{!! Form::label ('TRATA','Marque la casilla si su familiar tuvo algún tratamiento dental') !!}
            	</div>
            	<div class="col" align="right" >
                    {!! Form::label ('direccion','Activar ayuda visual') !!}
                    <input id="toggle-event" type="checkbox" data-toggle="toggle" data-on="SÍ" data-off="NO" data-size="small" onchange="myFunction()">
                </div>
			</div>
			<div class="form-group row">
				<div class="col">
					<!--{!! Form::checkbox('AMALGAMA', '2') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="AMALGAMA" value=2 style="margin-top: 5px; margin-left: 0px">
					<a rel="popover" style="margin-left: 20px" data-img="{{ URL::to('/images/Dientes/amalgama.jpg')}}"><B>AMALGAMA</B></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('BLANQUEAMIENTO DENTAL', '3') !!}-->
					<input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="BLANQUEAMIENTO_DENTAL" value=3>
					<a  rel="popover" data-img="{{ URL::to('/images/Dientes/amalgama.jpg')}}"><B>BLANQUEAMIENTO DENTAL</B></a>
					<!--{!! Form::label ('BLANQUEAMIENTO DENTAL','BLANQUEAMIENTO DENTAL') !!}-->
				</div>
				<div class="col">
					<!--{!! Form::checkbox('BRACKETS', '4') !!}-->
					<input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="BRACKETS" value=4>
					<a  rel="popover" data-img="{{ URL::to('/images/Dientes/brackets.jpg') }}"><b>BRACKETS</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('CARILLA', '5') !!}-->
					<input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="CARILLA" value=5>
					<a  rel="popover" data-img="{{ URL::to('/images/Dientes/carillas.jpg') }}"><b>CARILLA</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('CORONA ESTETICA', '6') !!}-->
					<input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="CORONA_ESTETICA" value=6>
					<a  rel="popover" style="margin-left: -2px" data-img="{{ URL::to('/images/Dientes/corona.jpg') }}"><b>CORONA ESTETICA</b></a>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<!--{!! Form::checkbox('ENDODONCIA', '7') !!}-->
					<input class="form-check-input" name="trata[]" style="margin-left: 0px" type="checkbox" id="ENDODONCIA" value=7>
					<a  rel="popover" style="margin-top: -8px; margin-left: 20px;" data-img="{{ URL::to('/images/Dientes/endodoncia.jpg') }}"><b>ENDODONCIA</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('IMPLANTE', '8') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="IMPLANTE" value=8>
					<a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/implante.jpg') }}"><b>IMPLANTE</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('OBTURACIÓN TEMPORAL', '9') !!}-->
					<!--{!! Form::label ('OBTURACIÓN TEMPORAL','OBTURACIÓN TEMPORAL') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="OBTURACION_TEMPORAL" value=9>
					<a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/implante.jpg') }}"><b>OBTURACIÓN TEMPORAL</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('PROTESIS FIJA', '10') !!}-->
					<!--{!! Form::label ('PROTESIS FIJA','PROTESIS FIJA') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="PROTESIS_FIJA" value=10>
					<a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/implante.jpg') }}"><b>PROTESIS FIJA</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('PROTESIS REMOVIBLE', '11') !!}-->
					<!--{!! Form::label ('PROTESIS REMOVIBLE','PROTESIS REMOVIBLE') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="PROTESIS_REMOVIBLE" value=11>
					<a  rel="popover" style="margin-top: -10px; margin-left: 0px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>PROTESIS REMOVIBLE</b></a>
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					<!--{!! Form::checkbox('PROTESIS TOTAL', '12') !!}-->
					<!--{!! Form::label ('PROTESIS TOTAL','PROTESIS TOTAL') !!}-->
					<input class="form-check-input" name="trata[]" style="margin-left: -0px;" type="checkbox" id="PROTESIS_TOTAL" value=12>
					<a  rel="popover" style="margin-top: -8px; margin-left: 20px" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>PROTESIS TOTAL</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('RESINA', '13') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="RESINA" value=13>
					<a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>RESINA</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('RETENEDOR', '14') !!}-->
					<!--{!! Form::label ('RETENEDOR','RETENEDOR') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="RETENEDOR" value=14>
					<a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>RETENEDOR</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('SELLADOR FS', '15') !!}-->
					<!--{!! Form::label ('SELLADOR FS','SELLADOR FS') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="SELLADOR" value=15>
					<a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>SELLADOR FS</b></a>
				</div>
				<div class="col">
					<!--{!! Form::checkbox('OTRO', '16') !!}-->
					<!--{!! Form::label ('OTRO','OTRO') !!}-->
					<input class="form-check-input" name="trata[]" type="checkbox" id="OTRO" value=16>
					{!! Form::label ('OTRO','OTRO') !!}
					<!--<a  rel="popover" style="margin-top: -8px;"><b>OTRO</b></a>-->
				</div>
			</div>
			<div id="otroTrata" class="form-group row">
				<div class="col-md-12" >
					{!! Form::label ('especifique','Especifique:') !!}
					{!! Form::text ('tratamiento',old('tratamiento'), ['class' => 'form-control mayuscula', 'id' => 'otroTratamiento'] )!!}
				</div>
			</div><hr>

			<div class="form-group row">
                <div class="col-4">
                    <h5></h5>
                </div>
            </div>
			<h5>Sabe usted si su familiar:</h5>
			<div class="form-group row">
				<div class="col-md-3">
					{!! Form::checkbox('higieneBucal[]', 'higieneBucal') !!}
					{!! Form::label ('higieneBuc','MALA HIGIENE') !!}
					<!-- {!! Form::label ('higieneBuc','Presenta buena higiene bucal') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'higieneBucal'] ) !!} -->
				</div>
				<div class="col-md-3">
					{!! Form::checkbox('higieneBucal[]', 'tieneCaries') !!}
					{!! Form::label ('CARIES','CARIES') !!}
					<!-- {!! Form::label ('tieneCarie','¿Tiene caries?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneCaries'] ) !!} -->
				</div>
				<div class="col-md-3">
					{!! Form::checkbox('higieneBucal[]', 'nombreAbceso') !!}
					{!! Form::label ('nombreAbcesos','ABSCESOS') !!}
					<!-- {!! Form::label ('nombreAbcesos','¿Tiene abscesos?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreAbceso'] ) !!} -->
				</div>
				<div class="col-md-3">
					{!! Form::checkbox('enfermedad[]', 'SARRO') !!}
					{!! Form::label ('SARRO','SARRO') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::text ('describaHB',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'describahb', 'placeholder' => 'Describa porque?'] )!!}
				</div>
				<div class="col-md-4">
					{!! Form::text ('tieneCarie',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'DescribaCaries', 'placeholder' => 'Describa en donde tiene caries'] )!!}
				</div>
				<div class="col-md-4">
					{!! Form::text ('describaAbceso',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'describeAbceso', 'placeholder' => 'Describe donde tiene abcesos'] )!!}
				</div>
			</div>

			<div class="form-group row">				
				<div class="col-md-3">
					{!! Form::checkbox('enfermedad[]', 'GINGIVITIS') !!}
					{!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
				</div>
				<div class="col-md-3">
					{!! Form::checkbox('enfermedad[]', 'PERIODONTITIS') !!}
					{!! Form::label ('PERIODONTITIS','PERIODONTITIS') !!}
				</div>
				<div class="col-md-3">
                	{!! Form::checkbox('malhabito[]', 'MORDERSE LAS UÑAS') !!}
                    {!! Form::label ('MORDERSE LAS UÑAS','MORDERSE LAS UÑAS') !!}
                </div>
                <div class="col-md-3">
    	            {!! Form::checkbox('malhabito[]', 'MORDER ALGÚN OBJETO') !!}
	                {!! Form::label ('MORDER ALGÚN OBJETO','MORDER ALGÚN OBJETO') !!}
                </div>
			</div>

			
            <div class="form-group row">
            	<div class="col-1" style="margin-left: 20px;">
            		<input class="form-check-input" type="checkbox" id="OTROH" value="OTRO" name="malhabito[]">
                    {!! Form::label ('OTRO','OTRO') !!}
            	</div>
            	<div class="col-5" id="especifiquehabito">
                    {!! Form::text ('otro',old('otro'), ['class' => 'form-control mayuscula', 'id' => 'escpecifiquehabito', 'placeholder' => 'ESPECIFIQUE'] )!!}
                </div>
            </div><hr>
		</div>
	</div>

	<div class="card border-primary" id="cardDientes">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="card-title">DIENTES PERDIDOS DE LA PERSONA DESAPARECIDA</h5>	
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<div class="col-md-4 dentadura">
		            @if($edadExtraviado[0] > 14)
		              @include('datosdentales.dentadura_adult')
		            @endif
		            
		            @if($edadExtraviado[0] <= 6)
		              @include('datosdentales.dentadura_child')
		            @endif

		            @if($edadExtraviado[0] > 6 && $edadExtraviado[0] <=14 )
		               @include('datosdentales.dentadura_mixto')
		            @endif
          		</div>
          		<div class="col-md-8">
          			<div class="row">
          				<div class="col-md-12">
          					<div class="form-group two-fields">
          						<div class="input-group">
		                    		<label style="margin-left: 15%">Diente seleccionado</label>
                    				<label style="margin-left: 27%">Causa de pérdida</label>
                    			</div>

                    			<!--Inicia dientes superiores (Izquierda a derecha)-->
                    			<div class="input-group" id="TMSDD"> 
                    				{!! Form::text ('TMSD',old('TMSD'), ['class' => 'form-control mayuscula', 'id' => 'TMSD', 'disabled'])!!}
                    				{!! Form::text ('perdio[]',old('TMSDP'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'TMSDP',] )!!}
                    				{{ Form::hidden('dienteselec[]','18', array('id' => 'dienteselec18')) }}
                  				</div>
                  				<div class="input-group" style="margin-top: 10px" id="SMSDD">
				                    {!! Form::text ('SMSD',old('SMSD'), ['class' => 'form-control mayuscula', 'id' => 'SMSD','disabled'] )!!}
				                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'SMSDP',] )!!}
				                    {{ Form::hidden('dienteselec[]','17', array('id' => 'dienteselec17')) }}
				                </div>
				                <div class="input-group" style="margin-top: 10px" id="PMSDD">
				                    {!! Form::text ('PMSD',old('PMSD'), ['class' => 'form-control mayuscula', 'id' => 'PMSD', 'disabled'] )!!}
				                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'PMSDP',] )!!}
				                    {{ Form::hidden('dienteselec[]','16', array('id' => 'dienteselec16')) }}
				                </div>
				                <div class="input-group" style="margin-top: 10px" id="SPSDD">
                    				{!! Form::text ('SPSD',old('SPSD'), ['class' => 'form-control mayuscula', 'id' => 'SPSD', 'disabled'] )!!}
                    				{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'SPSDP',] )!!}
                    				{{ Form::hidden('dienteselec[]','15', array('id' => 'dienteselec15')) }}
                  				</div>
                  				<div class="input-group" style="margin-top: 10px" id="PPSDD">
				                    {!! Form::text ('PPSD',old('PPSD'), ['class' => 'form-control mayuscula', 'id' => 'PPSD', 'disabled'] )!!}
				                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'PPSDP',] )!!}
				                    {{ Form::hidden('dienteselec[]','14', array('id' => 'dienteselec14')) }}
				                </div>
				                <div class="input-group" style="margin-top: 10px" id="CSDD">
				                    {!! Form::text ('CSD',old('CSD'), ['class' => 'form-control mayuscula', 'id' => 'CSD', 'disabled'] )!!}
				                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'CSDP',] )!!}
				                    {{ Form::hidden('dienteselec[]','13', array('id' => 'dienteselec13')) }}
				                </div>
				                <div class="input-group" style="margin-top: 10px" id="ILSDD">
			                    	{!! Form::text ('ILSD',old('ILSD'), ['class' => 'form-control mayuscula', 'id' => 'ILSD', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ILSDP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','12', array('id' => 'dienteselec12')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="ICSDD">
			                    	{!! Form::text ('ICSD',old('ICSD'), ['class' => 'form-control mayuscula', 'id' => 'ICSD', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ICSDDP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','11', array('id' => 'dienteselec11')) }}
			                  	</div>

			                  	<div class="input-group" style="margin-top: 10px" id="ICSID">
			                    	{!! Form::text ('ICSI',old('ICSI'), ['class' => 'form-control mayuscula', 'id' => 'ICSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ICSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','21', array('id' => 'dienteselec21')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="ILSID">
			                    	{!! Form::text ('ILSI',old('ILSI'), ['class' => 'form-control mayuscula', 'id' => 'ILSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ILSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','22', array('id' => 'dienteselec22')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="CSID">
			                    	{!! Form::text ('CSI',old('CSI'), ['class' => 'form-control mayuscula', 'id' => 'CSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'CSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','23', array('id' => 'dienteselec23')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="PPSID">
			                    	{!! Form::text ('PPSI',old('PPSI'), ['class' => 'form-control mayuscula', 'id' => 'PPSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'PPSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','24', array('id' => 'dienteselec24')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="SPSID">
			                    	{!! Form::text ('SPSI',old('SPSI'), ['class' => 'form-control mayuscula', 'id' => 'SPSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'SPSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','25', array('id' => 'dienteselec25')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="PMSID">
			                    	{!! Form::text ('PMSI',old('PMSI'), ['class' => 'form-control mayuscula', 'id' => 'PMSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'PMSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','26', array('id' => 'dienteselec26')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="SMSID">
			                    	{!! Form::text ('SMSI',old('SMSI'), ['class' => 'form-control mayuscula', 'id' => 'SMSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'SMSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','27', array('id' => 'dienteselec27')) }}
			                  	</div>
			                  	<div class="input-group" style="margin-top: 10px" id="TMSID">
			                    	{!! Form::text ('TMSI',old('TMSI'), ['class' => 'form-control mayuscula', 'id' => 'TMSI', 'disabled'] )!!}
			                    	{!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'TMSIP',] )!!}
			                    	{{ Form::hidden('dienteselec[]','28', array('id' => 'dienteselec28')) }}
			                  	</div>
                  				
			                  	<button type="button" class="btn btn-warning" id="upDiente" onclick="ConfirmDemo()">EDITAR</button>
        						<button type="button" class="btn btn-success pull-right" id="btnDiente" style="margin-top: 15px;">GUARDAR</button>
                    		</div>
                    	</div>
                    </div>
                </div>
          	</div>
		</div>
	</div>


	


  </div>

</div>
</nav>
@endsection

@section('scripts')
{!! Html::script('personal/js/bootstrap-toggle.min.js') !!}
{!! Html::script('personal/js/jquery.mapify.js') !!}
{!! Html::script('personal/js/jquery-confirm.min.js') !!}
{!! Html::script('personal/js/alertify.min.js') !!}
{!! Html::script('personal/js/sweetalert.min.js') !!}
{!! Html::script('personal/js/functions.js') !!}
{!! Html::script('personal/js/datos_dentales/accionDientes.js') !!}
{!! Html::script('personal/js/datos_dentales/sliders_dentales.js') !!}
{!! Html::script('personal/js/datos_dentales/dentadura_adulto.js') !!}

<script type="text/javascript">
	console.log('ID de la persona desaparecida: {!! $desaparecido->id !!}');

	$(function() {
        $('#toggle-event').change(function() {
            $('a[rel=popover]').popover({
                html: true,
                trigger: 'hover',
                placement: 'bottom',
                content: function() {
                    return '<img src="' + $(this).data('img') + '" />';
                }
            });
        })
    })

    function myFunction() {
        var checkBox = document.getElementById("toggle-event");
        if (checkBox.checked == true) {
            $("a[rel=popover]").popover('enable');
            $('a[rel=popover]').popover({
                html: true,
                trigger: 'hover',
                placement: 'bottom',
                content: function() {
                    return '<img src="' + $(this).data('img') + '" />';
                }

            });
        } else {
            $("a[rel=popover]").popover('hide');
            $("a[rel=popover]").popover('disable');
        }
    }

    function myFunctionTeeth() {
        var checkBox = document.getElementById("toggle-teeth");
        if (checkBox.checked == true) {
        	swal("NOTA:", "Dar un click en el diente para seleccionarlo; un segundo click para eliminarlo; click en el botón de GUARDAR cuando se haya terminado de seleccionar todos los dientes correspondientes.");
        }
    }

	$(document).ready(function()
	{
	/**********************************************************************
	*** Declaración de rutas a usar de los campos en el formulario ****
	***********************************************************************/
	
	var routedatosDentales = '{!! route('datos_dentales.index') !!}';
	var routedientesPerdidos = '{!! route('datos_dentales_dientes_perdidos.index') !!}';

	/**********************************************************************
	*** Inicia segmento para ocultar y/o mostrar campos en el formulario***
	**********************************************************************/
		
		//$('#agregardatodental').prop('disabled', true);
		//$('#dientePerdido').prop('disabled', true);
		$('#editarInformacion').hide();
		$('#updateInformacion').hide();
		$('#verinfodentista').hide();
		$('#cardTratamientos').hide();
		$('#updatedatodental').hide();
		$('#infoDen').hide();
		$('#targetDentista').hide();
		$('#describahb').hide();
		$('#DescribaCaries').hide();
		$('#describeAbceso').hide();
		$('#dientesPerdidos').hide();
		$('#otroTrata').hide();
		$('#dientesSelec').hide();
		$('#morderuna').hide();
		$('#morderobjeto').hide();
		$('#otrohabito').hide();
		$('#escpecifiquehabito').hide();
		$('#tipoperfil').hide();
		$('#perfilseleccionado').hide();
		$('#tipomordida').hide();
		$('#mordidaseleccionada').hide();
		$('#selecsonrisa').hide();
		$('#sonrisaseleccionada').hide();
		$('#dentistahr').hide();
		$('#upDiente').hide();

		

		$('#atencionOdonto').change(function() {
			atencion = $('#atencionOdonto').val();
			if (atencion == 'SI') {
				$('#infoDen').show();
			}else{
				//$('#infoDentista').prop('selectedIndex',0);
				$('#nombres').val('');
				$('#primerAp').val('');
				$('#segundoAp').val('');
				$('#empresa').val('');
				$('#telefono').val('');
				$('#direccion').val('');
				$('#infoDen').hide();
				$('#targetDentista').hide();
				$('#infoDen').hide();
				$('#verinfodentista').hide();
			}
		});

		$('#OTRO').change(function () {
			if (this.checked) {
				$('#otroTrata').show();
				$('#otroTratamiento').focus();
			}else{
				$('#otroTrata').hide();	
			}
		});

		$('#OTROH').change(function () {
			if (this.checked) {
				$('#escpecifiquehabito').show();
				$('#escpecifiquehabito').focus();
			}else{
				$('#escpecifiquehabito').val('');
				$('#escpecifiquehabito').hide();	
			}
		});

		$('#infoDentista').change(function() {
			ifoden = $('#infoDentista').val();
			if (ifoden == 'SI') {
				$('#targetDentista').show();
				$('#dentistahr').show();
				$('#nombres').focus();
			}else{
				$('#targetDentista').hide();
				$('#dentistahr').hide();
			}
		});

		$('#higieneBucal').change(function(){
			higieneB = $('#higieneBucal').val();
			if (higieneB == 'NO') {
				$('#describahb').show();
				$('#describahb').focus();
			}else{
				$('#describahb').val('');
				$('#describahb').hide();
			}
		});

		$('#tieneCaries').change(function(){
			cariesB = $('#tieneCaries').val();
			if (cariesB == 'NO' || cariesB == 'SIN INFORMACIÓN') {
				$('#DescribaCaries').val('');
				$('#DescribaCaries').hide();
			}else{
				$('#DescribaCaries').show();
				$('#DescribaCaries').focus();
			}
		});

		$('#nombreAbceso').change(function(){
			cariesB = $('#nombreAbceso').val();
			if (cariesB == 'NO' || cariesB == 'SIN INFORMACIÓN') {
				$('#describeAbceso').val('');
				$('#describeAbceso').hide();
			}else{
				$('#describeAbceso').show();
				$('#describeAbceso').focus();
			}
		});

		$('#dienteCompleto').change(function(){
			dienteCompleto = $('#dienteCompleto').val();
			if (dienteCompleto == 'NO' || dienteCompleto == 'SIN INFORMACIÓN') {
				$('#dientesPerdidos').hide();
				$('#dientesSelec').hide();
			}else{
				$('#dientesPerdidos').show();
				$('#dientesPerdidos').show();
			}
		});

		$('#malosHabitos').change(function(){
			malosHabitos = $('#malosHabitos').val();
			if (malosHabitos == 'NO' || malosHabitos == 'SIN INFORMACIÓN') {
				$('#morderuna').hide();
				$('#morderobjeto').hide();
				$('#otrohabito').hide();
				$('#escpecifiquehabito').hide();
			}else{
				$('#morderuna').show();
				$('#morderobjeto').show();
				$('#otrohabito').show();
			}
		});

        

   		$('#upDiente').click(function() {
   			alertify.confirm('Está seguro de editar esta sección?', 'Esta acción borrará los datos capturados anteriormente', 
   				function(){ 
   					$('#btnDiente').show();
					$('#upDiente').hide();
					$('#dientes').attr('usemap', '#dientes');
					$('#PMSIP').prop('disabled', false);
					$('#SPSIP').prop('disabled', false);
					$('#PPSIP').prop('disabled', false);
					$('#CSIP').prop('disabled', false);
					$('#ILSIP').prop('disabled', false);
					$('#ICSIP').prop('disabled', false);
					$('#ICSDP').prop('disabled', false);
				},
				function(){ 
				});
   		});

   		

   		/************************************************************************
		**** Variables y función Click para los dientes inferiores **************
		************************************************************************/

		var diente36, diente37, diente34, diente33, diente32, diente31, diente41, 
			diente42, diente43, diente44, diente45,diente46;

		diente36 = $('#diente36').attr("value");
		$('#diente36').click(function(event) {
			$("#mostrar").val(diente36);
		});    

		diente37 = $('#diente37').attr("value");
		$('#diente37').click(function(event) {
			$("#mostrar").val(diente37);
		});    

		diente34 = $('#diente34').attr("value");
		$('#diente34').click(function(event) {
			$("#mostrar").val(diente34);
		});    

		diente33 = $('#diente33').attr("value");
		$('#diente33').click(function(event) {
			$("#mostrar").val(diente33);
		});    

		diente32 = $('#diente32').attr("value");
		$('#diente32').click(function(event) {
			$("#mostrar").val(diente32);
		});    

		diente31 = $('#diente31').attr("value");
		$('#diente31').click(function(event) {
			$("#mostrar").val(diente31);
		});    

		diente41 = $('#diente41').attr("value");
		$('#diente41').click(function(event) {
			$("#mostrar").val(diente41);
		});    

		diente42 = $('#diente42').attr("value");
		$('#diente42').click(function(event) {
			$("#mostrar").val(diente42);
		});    

		diente43 = $('#diente43').attr("value");
		$('#diente43').click(function(event) {
			$("#mostrar").val(diente43);
		});    

		diente44 = $('#diente44').attr("value");
		$('#diente44').click(function(event) {
			$("#mostrar").val(diente44);
		});    

		diente45 = $('#diente45').attr("value");
		$('#diente45').click(function(event) {
			$("#mostrar").val(diente45);
		});    

		diente46 = $('#diente46').attr("value");
		$('#diente46').click(function(event) {
			$("#mostrar").val(diente46);
		});

		/************************************************************************
		*** función que limpia campos al dar CANCELAR en modal datos dentista ***
		************************************************************************/
		$('#cancelardentista').click(function(event) {
				$("#nombres").val('');
				$("#primerAp").val('');
				$("#segundoAp").val('');
				$("#empresa").val('');
				$("#telefono").val('');
				$("#direccion").val('');
		});		

		/************************************************************************
		*** función que muestra el botón de VER DATOS DENTISTA al agregar ***
		************************************************************************/
		$('#agregaDentista').click(function(event) {
			$('#infoDen').hide();
			$('#verinfodentista').show();
		});	

		/************************************************************************
		*** función que muestra modal datos dentista para capturar datos ********
		************************************************************************/

    	$('#datosdentista').click(function(e){
        	$('#modalDentista').modal('show');
        	$('#nombres').focus();
    	}); 

		/************************************************************************
		** función que muestra el modal con los datos capturados anteriormente **
		************************************************************************/

		$('#verdatosdentista').click(function(e){
        	$('#modalDentista').modal('show');
    	}); 

		/************************************************************************
		**** función para guardar los datos del form de dientes seleccionados ***
		************************************************************************/

		$('#btnDiente').click(function()
		{
			var dataString = {
				idDiente 	 : $("input[name='dienteselec[]']").map(function(){return $(this).val();}).get(),
				causaPerdida : $("input[name='perdio[]']").map(function(){return $(this).val();}).get(),
				idDesaparecido: '{!! $desaparecido->id !!}'
			}
			$.ajax({
				type: 'POST',
				url:  routedientesPerdidos,
				data: dataString,
				dataType: 'json',
				success: function(data){
					$('#btnDiente').hide();
					$('#upDiente').show();
					$('#dientes').attr('usemap', '');
					$('#PMSIP').prop('disabled', true);
					$('#SPSIP').prop('disabled', true);
					$('#PPSIP').prop('disabled', true);
					$('#CSIP').prop('disabled', true);
					$('#ILSIP').prop('disabled', true);
					$('#ICSIP').prop('disabled', true);
					$('#ICSDP').prop('disabled', true);
					$.confirm({
            		title: 'Datos guardados!',
            		content: 'Dientes perdidos guardados exitosamente.',
            		type: 'dark',
            		typeAnimated: true,
            		buttons: {
            			tryAgain: {
                    	text: 'Aceptar',
                    	btnClass: 'btn-dark',
                    	action: function(){
                    			}
                    		},
                		}
            		});
				},
				error: function(data){

				}
			});
		});

		/************************************************************************
		** función para guardar los datos del formulario de la primera sección***
		************************************************************************/

		$('#agregaInformacion').click(function(){
			$.confirm({
        		title: 'Datos',
        		content: 'Guardados exitosamente.',
        		type: 'dark',
        		typeAnimated: true,
        		buttons: {
        			tryAgain: {
                	text: 'Aceptar',
                	btnClass: 'btn-dark',
                	action: function(){
                			}
                		},
            		}
        		});
			$('#primeraseccion').hide();
			$('#agregaInformacion').hide();
			$('#editarInformacion').show();
			$('#cardTratamientos').show();
			$('#editarSegInformacion').hide();
			$('#updateSegInformacion').hide();
		});

		$('#editarInformacion').click(function(){
			$('#primeraseccion').show();
			$('#agregaInformacion').hide();
			$('#updateInformacion').show();
			$('#editarInformacion').hide();
		});

		$('#updateInformacion').click(function(){
			$.confirm({
        		title: 'Datos',
        		content: 'Actualizados exitosamente.',
        		type: 'dark',
        		typeAnimated: true,
        		buttons: {
        			tryAgain: {
                	text: 'Aceptar',
                	btnClass: 'btn-dark',
                	action: function(){
                			}
                		},
            		}
        		});
			$('#primeraseccion').hide();
			$('#agregaInformacion').hide();
			$('#updateInformacion').hide();
			$('#editarInformacion').show();
		});

		$('#agregardatodental').click(function()
		{

			// var stringenfermedad = '';
			// $(":checkbox[name=enfermedad]").each(function(){
			// 	if (this.checked) {
			// 		if (stringenfermedad == true) {
			// 			stringenfermedad += $(this).val()+', ';
			// 		}
			// 	}
			// }); 

			// console.log(stringenfermedad);
			var dataString = {
				dienteTamano : $("#dienteTamano").val(),
				dienteCompleto : $("#dienteCompleto").val(),
				atencionOdonto : $("#atencionOdonto").val(),
				infoDentista : $("#infoDentista").val(),
				nombres : $("#nombres").val(),
				primerAp : $("#primerAp").val(),
				segundoAp : $("#segundoAp").val(),
				empresa : $("#empresa").val(),
				telefono : $("#telefono").val(),
				direccion : $("#direccion").val(),
				//tratamiento : $('#SININFORMACION').val(),
				//tratamiento : $("input[name='trata[]']").map(function(){return $(this).val();}).get(),
				tratamiento : $("input[name='trata[]']").map(function(){return $(this).is(':checked');}).get(),
				describatrata : $("#otroTratamiento").val(),
				perdiodiente : $("#dientePerdido").val(),
				higieneBucal : $("#higieneBucal").val(),
				describahb : $("#describahb").val(),
				tieneCaries : $("#tieneCaries").val(),
				DescribaCaries : $("#DescribaCaries").val(),
				nombreAbceso : $("#nombreAbceso").val(),
				describeAbceso : $("#describeAbceso").val(),
				//enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).val();}).get(),
				enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).is(':checked');}).get(),
				malosHabitos : $("#malosHabitos").val(),
				//malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).val();}).get(),
				malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).is(':checked');}).get(),
				especifiqhabito : $("#escpecifiquehabito").val(),
				valorPerfil : $("#idperfilselec").val(),
				valormordida : $("#idmordidaselec").val(),
				valorsonrisa : $("#idsonrisaselec").val(),
				idDesaparecido: '{!! $desaparecido->id !!}'
			}
			$.ajax({
				type: 'POST',
				url: routedatosDentales,
				data: dataString,
				dataType: 'json',
				success: function(data){
					$('#dientePerdido').prop('disabled', false);
					$('#agregardatodental').hide();
					$('#updatedatodental').show();
					$.confirm({
            		title: 'Datos dentales',
            		content: 'Guardados exitosamente.',
            		type: 'dark',
            		typeAnimated: true,
            		buttons: {
            			tryAgain: {
                    	text: 'Aceptar',
                    	btnClass: 'btn-dark',
                    	action: function(){
                    			}
                    		},
                		}
            		});
				},
				error: function(data){
					
				}
			});
		});


		// $('#mapDientes').on('click', '#diente', function(){
		// 	console.log('Estas dando click en la imagen');
		// 	console.log('El ID_diente es: '+$(this).attr('value')+' nombre del diente: '+$(this).attr('alt'));
		// 	cont1 = cont1 + 1;
		// 	if (cont1 == 1) {
		// 		$('#nombreDiente'+$(this).attr('value')).show();
		// 		$('#observacionesDiente'+$(this).attr('value')).show();
		// 		$('#nombreDiente'+$(this).attr('value')).value($(this).attr('alt'));
		// 		$("input[id*='14']" ).name("PRIMER MOLAR SUPERIOR IZQUIERDO");
		// 	}else{
		// 		cont1 = 0;
		// 		$('#PMSID').hide();
		// 		$('#PMSIPDP').hide();
		// 		$("#PMSI").val('');
		// 	}

		// })
	});
 //este si va dentro de un DocumentReady
 
//  $(".fancybox").fancybox({
//         openEffect: "none",
//         closeEffect: "none"
//     });
    
//     $(".zoom").hover(function(){
    
//     $(this).addClass('transition');
//   }, function(){
        
//     $(this).removeClass('transition');
//   });
  
  
//   //este puede ir afuera xd
  
  
//   $('#cerrarModal').click (function(){

//     location.reload();

// })

// $("#fileImagenes").fileinput({
//                   language:'es',
//                   theme: 'fa',
//                   uploadUrl: "/imagenAntecedentesD",

//                   uploadExtraData: function() {
                   
//                       return {

//                           _token: $("input[name='_token']").val(),
//                           idDesaparecido:'{!! $desaparecido->id!!}',
//                           tipoAnexo: 'antecedentesdentales',

//                       };
//                   },
//                   allowedFileExtensions: ['jpg', 'png', 'gif'],
//                   overwriteInitial: false,
//                   maxFileSize:2000,
//                   maxFilesNum: 10,

                  
//                   slugCallback: function (filename) {
//                     /*$desaparecido = ('{!! $desaparecido->id!!}');
//                     console.log ( $desaparecido+"desaparecido");*/
//                     $nombre = $desaparecido+"_ant_medicos_"+filename.replace('(', '_').replace(']', '_');

//                     console.log($nombre);

//                       return  filename.replace('(', '_').replace(']', '_');
//                   }



//               });
</script>
@endsection