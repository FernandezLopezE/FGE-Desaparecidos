@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
{!! Html::style('personal/css/bootstrap-toggle.min.css') !!}
{!! Html::style('personal/css/jquery-confirm.min.css') !!}
{!! Html::style('personal/css/alertify.min.css') !!}
{!! Html::style('personal/css/sweetalert.css') !!}
<style type="text/css">
    .modal-lg {
    	max-width: 80%; /*Se ajusta el ancho del model a un buen tamaño*/
    }
    .carousel-inner img { /*se utiliza para el carrusel de los slider*/
    	width: 90%;
    	max-height: 450px;
    }
</style>
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
@include('navs.navs_datos',array('activar' => 'dentadura'))

<nav>
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="card-title">DATOS DENTALES DE LA PERSONA DESAPARECIDA</h5>	
				</div>
				<div class="form-group">
					<div class="col">
					<button type="button" class="btn btn-dark pull-right" id="updatedatodental" style="position:fixed; right: 25px; margin-top: -7px;z-index: 1;">EDITAR</button>
				</div>
				<div class="col">
					<button type="button" class="btn btn-dark pull-right" id="agregardatodental" style="position:fixed; right: 25px; margin-top: -7px;z-index: 1;">GUARDAR</button>
				</div>	
				</div>
			</div>
		</div>

		<div class="card-body">
			<h5>Su familiar tiene sus dientes:</h5>
			<div class="form-group row">
				<div class="col-2">
					{!! Form::label ('dienteTamano','Tamaño:') !!}
					{!! Form::select ('nombreTamano',$dienteTamano, '', ['class' => 'form-control', 'id' => 'dienteTamano'])!!}	
				</div>
				<div class="col-2">
					{!! Form::label ('dienteCompleto','Dientes completos:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dienteCompleto'] ) !!}
				</div>
				<div class="col-4">
					{!! Form::label ('atencionOdonto','Alguna vez asistió al dentista:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
				</div>
				<div id="infoDen" class="col-4">
					{!! Form::label ('infoDentista','Tiene información del dentista:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoDentista'] ) !!}
				</div>
			</div>
			<hr>
			
			<div id="targetDentista" class="form-group row">
				<div class="col-md-12">
					<h5>Datos del dentista</h5>	
				</div>
				<div class="col-md-4">
					{!! Form::label ('nombres','Nombre del dentista:') !!}
					{!! Form::text ('nombres',old('nombres'), ['class' => 'form-control mayuscula', 'id' => 'nombres',] )!!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('primerAp','Primer apellido:') !!}
					{!! Form::text ('primerAp',old('primerAp'), ['class' => 'form-control mayuscula', 'id' => 'primerAp',] )!!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('segundoAp','Segundo apellido:') !!}
					{!! Form::text ('segundoAp',old('segundoAp'), ['class' => 'form-control mayuscula', 'id' => 'segundoAp',] )!!}
				</div>
				<div class="col-md-8">
					{!! Form::label ('empresa','Empresa  ó institución:') !!}
					{!! Form::text ('empresa',old('empresa'), ['class' => 'form-control mayuscula', 'id' => 'empresa',] )!!}
				</div>	
				<div class="col">
					{!! Form::label ('telefono','Teléfono de contacto:') !!}
					{!! Form::text ('telefono',old('telefono'), ['class' => 'form-control mayuscula', 'id' => 'telefono',] )!!}
				</div>
				<div class="col-md-12">
					{!! Form::label ('direccion','Dirección/referencias de la empresa ó institución:') !!}
					{!! Form::textarea ('direccion',old('direccion'), ['class' => 'form-control mayuscula', 'id' => 'direccion', 'rows' => '3'] )!!}
				</div>
			</div><hr id="dentistahr" style="visibility: none">
			<div class="form-group row">
                <div class="col-4">
                    <h5>¿Tuvo algún tratamiento en los dientes?</h5>
                </div>
                <div class="col" align="right" >
                    {!! Form::label ('direccion','Activar ayuda visual') !!}
                    <input id="toggle-event" type="checkbox" data-toggle="toggle" data-on="SÍ" data-off="NO" data-size="small" onchange="myFunction()">
                </div>
            </div>
            <div class="form-group row">
            	<div class="col" style="margin-left: 20px;">
                	<input class="form-check-input" type="checkbox" id="SININFORMACION" value=1 style="margin-top: 6px; margin-left: -20px" checked="true">
                	{!! Form::label ('SIN','SIN INFORMACIÓN') !!}
                </div>
            </div>
			<div class="form-group row" id="trata1">
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
			<div class="form-group row" id="trata2">
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
			<div class="form-group row" id="trata3">
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

			<h5>Sabe usted si su familiar:</h5>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('higieneBuc','Presenta buena higiene bucal') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'higieneBucal'] ) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('tieneCarie','¿Tiene caries?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneCaries'] ) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label ('nombreAbcesos','¿Tiene abscesos?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreAbceso'] ) !!}
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
			</div><hr>

			<h5>El desaparecido presentaba:</h5></br>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::checkbox('enfermedad[]', 'SARRO') !!}
					{!! Form::label ('SARRO','SARRO') !!}
				</div>
				<div class="col-md-4" style="margin-left: -22%;">
					{!! Form::checkbox('enfermedad[]', 'GINGIVITIS') !!}
					{!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
				</div>
				<div class="col-md-4" style="margin-left: -20%;">
					{!! Form::checkbox('enfermedad[]', 'PERIODONTITIS') !!}
					{!! Form::label ('PERIODONTITIS','PERIODONTITIS') !!}
				</div>
			</div><hr>

			<h5>Malos hábitos</h5>
            <div class="form-group row">
                <div class="col-md-4">
                    {!! Form::label ('habitos','¿Su familiar tenía malos hábitos?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'malosHabitos'] ) !!}
                </div><br>
                <div class="col-md-4">
                	<div id="morderuna">
                		{!! Form::checkbox('malhabito[]', 'MORDERSE LAS UÑAS') !!}
                    	{!! Form::label ('MORDERSE LAS UÑAS','MORDERSE LAS UÑAS') !!}
                	</div>
                	<div id="morderobjeto">
    	            	{!! Form::checkbox('malhabito[]', 'MORDER ALGÚN OBJETO') !!}
	                    {!! Form::label ('MORDER ALGÚN OBJETO','MORDER ALGÚN OBJETO') !!}
                	</div>
                </div>
                <div class="col-md-4">
                	<div class="col" id="otrohabito">
                		<!--{!! Form::checkbox('malhabito[]', 'OTRO') !!}-->
                		<input class="form-check-input" type="checkbox" id="OTROH" value="OTRO" name="malhabito[]">
                    	{!! Form::label ('OTRO','OTRO') !!}
                	</div>
                	<div class="col" id="especifiquehabito">
                    	{!! Form::text ('otro',old('otro'), ['class' => 'form-control mayuscula', 'id' => 'escpecifiquehabito', 'placeholder' => 'ESPECIFIQUE'] )!!}
                	</div>
                </div>
            </div><hr>
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
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="card-title">DIENTES PERDIDOS DE LA PERSONA DESAPARECIDA</h5>	
				</div>
			</div>
		</div>
		<div class="card-body">
			<h5>Sabe usted si su familiar:</h5>
			<div class="form-group row">
                <div class="col-md-2">
                    {!! Form::label ('perdio','¿Perdio algún diente?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
                </div>
                	<div class="col-md-2" id="dientesPerdidos">
                    	{!! Form::label ('nombreDiente','Seleccionar dientes') !!}
                    	{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectDiente']) !!}
                	</div>
                	<div class="col-md-4" id="dientesSelec">
                    	{!! Form::label ('selecDiente','Perfil seleccionado') !!}
                    	{!! Form::text ('nombresDientes',old('nombresDientes'), ['class' => 'form-control mayuscula', 'id' => 'selecDiente',] )!!}
                	</div>
                	<div>
	                    @include('includes.modal_dentadura')
    	            </div>
            </div><hr>
		</div>
	</div>
<body>
@endsection

@section('scripts')
{!! Html::script('personal/js/bootstrap-toggle.min.js') !!}
{!! Html::script('personal/js/jquery.mapify.js') !!}
{!! Html::script('personal/js/jquery-confirm.min.js') !!}
{!! Html::script('personal/js/alertify.min.js') !!}
{!! Html::script('personal/js/sweetalert.min.js') !!}
{!! Html::script('personal/js/functions.js') !!}

<script type="text/javascript">

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
	*** Declaración de variables a usar de los campos en el formulario ****
	***********************************************************************/

		var atencion,infoden,higieneB, cariesB, dientePerdido, malosHabitos,
			 perfil, tipmordida, tiposonrisa;

		var routedatosDentales = '{!! route('datos_dentales.index') !!}';
		var routedientesPerdidos = '{!! route('datos_dentales_dientes_perdidos.index') !!}';

	/**********************************************************************
	*** Inicia segmento para ocultar y/o mostrar campos en el formulario***
	**********************************************************************/
		
		//$('#agregardatodental').prop('disabled', true);
		$('#dientePerdido').prop('disabled', true);
		$('#trata1 :input').attr('disabled', true);
		$('#trata2 :input').attr('disabled', true);
		$('#trata3 :input').attr('disabled', true);
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
		$('#PMSID').hide();
		$('#SPSID').hide();
		$('#PPSID').hide();
		$('#CSID').hide();
		$('#ILSID').hide();
		$('#ICSID').hide();
		$('#ICSDD').hide();

		$('#atencionOdonto').change(function() {
			atencion = $('#atencionOdonto').val();
			if (atencion == 'SI') {
				$('#infoDen').show();
			}else{
				$('#infoDentista').prop('selectedIndex',0);
				$('#nombres').val('');
				$('#primerAp').val('');
				$('#segundoAp').val('');
				$('#empresa').val('');
				$('#telefono').val('');
				$('#direccion').val('');
				$('#infoDen').hide();
				$('#targetDentista').hide();

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

		$('#dientePerdido').change(function(){
			dientePerdido = $('#dientePerdido').val();
			if (dientePerdido == 'NO' || dientePerdido == 'SIN INFORMACIÓN') {
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

		$('#perfil').change(function(){
			perfil = $('#perfil').val();
			if (perfil == 'NO' || perfil == 'SIN INFORMACIÓN') {
				$('#valorPerfil').val('');
				$('#tipoperfil').hide();
				$('#perfilseleccionado').hide();
			}else{
				$('#tipoperfil').show();
				$('#perfilseleccionado').show();
				
			}
		});

		$('#tipmordida').change(function(){
			tipmordida = $('#tipmordida').val();
			if (tipmordida == 'NO' || tipmordida == 'SIN INFORMACIÓN') {
				$('#valormordida').val('');
				$('#tipomordida').hide();
				$('#mordidaseleccionada').hide();
			}else{
				$('#tipomordida').show();
				$('#mordidaseleccionada').show();
			}
		});

		$('#tiposonrisa').change(function(){
			tiposonrisa = $('#tiposonrisa').val();
			if (tiposonrisa == 'NO' || tiposonrisa == 'SIN INFORMACIÓN') {
				$('#valorsonrisa').val('');
				$('#selecsonrisa').hide();
				$('#sonrisaseleccionada').hide();
			}else{
				$('#selecsonrisa').show();
				$('#sonrisaseleccionada').show();
			}
		});

		$("#SININFORMACION").change(function() {
			SININFO = this.checked;
			if (SININFO) {
				$('#trata1 :input').attr('disabled', true);
				$('#trata2 :input').attr('disabled', true);
				$('#trata3 :input').attr('disabled', true);
			}
			else{
				$('#trata1 :input').removeAttr('disabled');
				$('#trata2 :input').removeAttr('disabled');
				$('#trata3 :input').removeAttr('disabled');
			}
		});

		/**********************************************************************
		*** Segmento para mostrar los modales a usar en el formulario *********
		**********************************************************************/
		
		$('#selectDiente').click(function(e){
            $('#modalDientes').modal('show');
        });

        $('#selectPerfil').click(function(e){
            $('#modalPerfil').modal('show');
        });

        $('#selectMordida').click(function(e){
            $('#modalMordida').modal('show');
        });

        $('#selectSonrisa').click(function(e){
            $('#modalSonrisa').modal('show');
        });    

        /************************************************************************
		**** Variables y función Click para los dientes superiores **************
		************************************************************************/
		var diente26, diente25, diente24, diente23, diente22, diente21, diente11, 
			diente12, diente13, diente14, diente15, diente16, 
			cont1, cont2, cont3, cont4, cont5, cont6, cont7, cont8, 
			cont9, cont10, cont11, cont12, cont13, cont14, cont15, 
			cont16,

				
		diente26 = $('#diente26').attr('value');
		cont1 = 0;
		$('#diente26').click(function(event) {
			cont1 = cont1 + 1;
			if (cont1 == 1) {
				$('#PMSID').show();
				$("#PMSI").val(diente26);
				$('#PMSIP').focus();
			}else{
				cont1 = 0;
				$('#PMSID').hide();
				$("#PMSI").val('');
				$("#PMSIP").val('');
			}
		});  

		diente25 = $('#diente25').attr("value");
		cont2 = 0;
		$('#diente25').click(function(event) {
			cont2 = cont2 + 1;
			if (cont2 == 1) {
				$('#SPSID').show();
				$("#SPSI").val(diente25);
				$("#SPSIP").focus();
			}else{
				cont2 = 0;
				$('#SPSID').hide();
				$("#SPSI").val('');
				$("#SPSIP").val('');
			}
		});    

		diente24 = $('#diente24').attr("value");
		cont3 = 0;
		$('#diente24').click(function(event) {
			cont3 = cont3 + 1;
			if (cont3 == 1) {
				$('#PPSID').show();
   				$("#PPSI").val(diente24);
   				$("#PPSIP").focus();
			}else{
				cont3 = 0;
				$('#PPSID').hide();
   				$("#PPSI").val('');
   				$("#PPSIP").val('');
			}
   		});    

   		diente23 = $('#diente23').attr("value");
   		cont4 = 0;
   		$('#diente23').click(function(event) {
   			cont4 = cont4 + 1;
   			if (cont4 == 1) {
   				$('#CSID').show();
   				$("#CSI").val(diente23);
   				$("#CSIP").focus();
   			}else{
   				cont4 = 0;
   				$('#CSID').hide();
   				$("#CSI").val('');
   				$("#CSIP").val('');
   			}
   		});    

   		diente22 = $('#diente22').attr("value");
   		cont5 = 0;
   		$('#diente22').click(function(event) {
   			cont5 = cont5 + 1;
   			if (cont5 == 1) {
   				$('#ILSID').show();
   				$("#ILSI").val(diente22);
   				$("#ILSIP").focus();
   			}else{
   				cont5 = 0;
   				$('#ILSID').hide();
   				$("#ILSI").val('');
   				$("#ILSIP").val('');
   			}
   		});    

   		diente21 = $('#diente21').attr("value");
   		cont6 = 0;
   		$('#diente21').click(function(event) {
   			cont6 = cont6 + 1;
   			if (cont6 == 1) {
   				$('#ICSID').show();
   				$("#ICSI").val(diente21);
   				$("#ICSIP").focus();
   			}else{
   				cont6 = 0;
   				$('#ICSID').hide();
   				$("#ICSI").val('');
   				$("#ICSIP").val('');
   			}
   		});    

   		diente11 = $('#diente11').attr("value");
   		cont7 = 0;
   		$('#diente11').click(function(event) {
   			cont7 = cont7 +1;
   			if (cont7 == 1) {
   				$('#ICSDD').show();
   				$("#ICSD").val(diente11);	
   				$("#ICSDP").focus();
   			}else{
   				cont7 = 0;
   				$('#ICSDD').hide();
   				$("#ICSD").val('');
   				$("#ICSDP").val('');
   			}
   		});    

   		diente12 = $('#diente12').attr("value");
   		cont8 = 0;
   		$('#diente12').click(function(event) {
   			$("#mostrar").val(diente12);
   		});    

   		diente13 = $('#diente13').attr("value");
   		cont9 = 0;
   		$('#diente13').click(function(event) {
   			$("#mostrar").val(diente13);
   		});    

   		diente14 = $('#diente14').attr("value");
   		cont10 = 0;
   		$('#diente14').click(function(event) {
   			$("#mostrar").val(diente14);
   		});    

   		diente15 = $('#diente15').attr("value");
   		cont11 = 0;
   		$('#diente15').click(function(event) {
   			$("#mostrar").val(diente15);
   		});    

   		diente16 = $('#diente16').attr("value");
   		cont12 = 0;
   		$('#diente16').click(function(event) {
   			$("#mostrar").val(diente16);
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
		**** funciones para los slider's de Tipo de perfil **********************
		************************************************************************/

		tipoperfilrecto = $('#perfilRecto').attr("value");
		tipoperfilrec = $('#perfilRecto').attr("alt");
		$('#perfilRecto').click(function(){
			$('#idperfilselec').val(tipoperfilrecto);
			$('#valorPerfil').val(tipoperfilrec);
			$("#modalPerfil").modal('hide');
		});

		tipoperfilconcavo = $('#perfilConcavo').attr("value");
		tipoperfilconca = $('#perfilConcavo').attr("alt");
		$('#perfilConcavo').click(function(){
			$('#idperfilselec').val(tipoperfilconcavo);
			$('#valorPerfil').val(tipoperfilconca);
			$("#modalPerfil").modal('hide');
		});

		tipoperfilconvexo = $('#perfilConvexo').attr("value");
		tipoperfilconvex = $('#perfilConvexo').attr("alt");
		$('#perfilConvexo').click(function(){
			$('#idperfilselec').val(tipoperfilconvexo);
			$('#valorPerfil').val(tipoperfilconvex);
			$("#modalPerfil").modal('hide');
		});

		/************************************************************************
		**** funciones para los slider's de Tipo de mordida *********************
		************************************************************************/

		tipomordidaAbierta = $('#mordidaAbierta').attr("value");
		tipomordidaAbi = $('#mordidaAbierta').attr("alt");
		$('#mordidaAbierta').click(function(){
			$('#idmordidaselec').val(tipomordidaAbierta);
			$('#valormordida').val(tipomordidaAbi);
			$("#modalMordida").modal('hide');
		});

		tipomordidaCerrada = $('#mordidaCerrada').attr("value");
		tipomordidaCerra = $('#mordidaCerrada').attr("alt");
		$('#mordidaCerrada').click(function(){
			$('#idmordidaselec').val(tipomordidaCerrada);
			$('#valormordida').val(tipomordidaCerra);
			$("#modalMordida").modal('hide');
		});

		tipomordidaCruzada = $('#mordidaCruzada').attr("value");
		tipomordidaCruz = $('#mordidaCruzada').attr("alt");
		$('#mordidaCruzada').click(function(){
			$('#idmordidaselec').val(tipomordidaCruzada);
			$('#valormordida').val(tipomordidaCruz);
			$("#modalMordida").modal('hide');
		});

		/************************************************************************
		**** funciones para los slider's de Tipo de sonrisa *********************
		************************************************************************/

		tipodienteSeparado = $('#DientesSeparados').attr("value");
		tipodienteSepa = $('#DientesSeparados').attr("alt");
		$('#DientesSeparados').click(function(){
			$('#idsonrisaselec').val(tipodienteSeparado);
			$('#dientes_girados').val(tipodienteSepa);
			$("#modalSonrisa").modal('hide');
		});

		tipodienteGirados = $('#DientesGirados').attr("value");
		tipodienteGira = $('#DientesGirados').attr("alt");
		$('#DientesGirados').click(function(){
			$('#idsonrisaselec').val(tipodienteGirados);
			$('#dientes_girados').val(tipodienteGira);
			$("#modalSonrisa").modal('hide');
		});

		tipodienteApinado = $('#DientesApinados').attr("value");
		tipodienteApi = $('#DientesApinados').attr("alt");
		$('#DientesApinados').click(function(){
			$('#idsonrisaselec').val(tipodienteApinado);
			$('#dientes_girados').val(tipodienteApi);
			$("#modalSonrisa").modal('hide');
		});



		/************************************************************************
		**** función para guardar los datos del form de dientes seleccionados ***
		************************************************************************/

		$('#btnDiente').click(function()
		{
			var dataString = {
				idDiente 	 : $("input[name='dienteselec[]']").map(function(){return $(this).val();}).get(),
				causaPerdida : $("input[name='perdio[]']").map(function(){return $(this).val();}).get(),
				idDentadura  : 1,
			}
			console.log(dataString);
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
		**** función para guardar los datos del formulario **********************
		************************************************************************/

		$('#updatedatodental').click(function(){

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
			}

			// var selected = [];
			// $(":checkbox[name=enfermedad]").each(function(){
			// 	if (this.checked){
			// 		selected.array_push($(this).val());
			// 	}
			// });

			 console.log(dataString);
			 // console.log(tratamiento);

			// var string = '';
			// $(":checkbox[name=enfermedad]").each(function(){
			// 	if (this.checked) {
			// 		string += $(this).val()+', ';
			// 	}
			// }); 

			// var dataString = data + string;
			//array_push($dataString,$selectedenfer);
			//console.log(dataString);
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
</script>
@endsection