@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
{!! Html::style('personal/css/bootstrap-toggle.min.css') !!}
{!! Html::style('personal/css/jquery-confirm.min.css') !!}
{!! Html::style('personal/css/alertify.min.css') !!}
{!! Html::style('personal/css/sweetalert.css') !!}
{!! Html::style('personal/css/datos_dentales/dentaduraAdult.css') !!}
{!! Html::style('personal/css/datos_dentales/datosDentales.css') !!}
<link href="../plugins/bootstrap_fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
@endsection


@section('content')
@include('navs.navs_datos',array('activar' => 'dentadura'))
<nav>
	<div class="card-body bg-white">
		<h5 class="card-title">Datos, tratamientos, higiene & hábitos dentales de la persona desaparecida
			<button type="button" class="btn btn-dark pull-right" id="agregaInformacion">Guardar</button>
			<button type="button" class="btn btn-dark pull-right" id="editarInformacion">Editar</button>
			<button type="button" class="btn btn-dark pull-right" id="updateInformacion">Actualizar</button>
		</h5>
		<div id="primeraseccion">
		<hr>
		<div class="form-group row">
			<div class="col-2">
				{!! Form::label ('dienteTamano','Tamaño de dientes:') !!}
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
		<div class="form-group row">
        	<div class="col-4">
        		<h5>Tipo de perfil</h5>	
        	</div>
        	<div class="col-4">
        		<h5>Tipo de mordida</56>
        	</div>
        	<div class="col-4">
        		<h5>Tipo de sonrisa</56>
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
	                	{!! Form::text ('perfilselec',old('perfilselec'), ['class' => 'form-control mayuscula, fa', 'id' => 'valorPerfil'] )!!}
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
	                	{!! Form::text ('mordidaselec',old('mordidaselec'), ['class' => 'form-control mayuscula', 'id' => 'valormordida'] )!!}
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
	                	{!! Form::text ('sonrisaselec',old('sonrisaselec'), ['class' => 'form-control mayuscula', 'id' => 'dientes_girados'] )!!}
	            	</div>
	            	<div>
	            		{{ Form::hidden('idsonrisaselec','', array('id' => 'idsonrisaselec')) }}
	            	</div>
	        	</div>
	        </div>
	        <hr>
	        <div class="form-group row">
	        	<div>
	                <h5>Tratamientos dentales
	                	<button type="button" class="btn btn-dark pull-right" id="PRUEBA">Guardar</button>
	                </h5>
	            </div>
	            <div class="col" align="right" >
	                {!! Form::label ('direccion','Activar ayuda visual') !!}
	                <input id="toggle-event" type="checkbox" data-toggle="toggle" data-on="SÍ" data-off="NO" data-size="small" onchange="myFunction()">
	            </div>
	        </div>
	        <div class="form-group row">
	            <div class="col">
	                <!--{!! Form::checkbox('AMALGAMA', '2') !!}-->
	                <input class="form-check-input" name="trata[]" type="checkbox" id="AMALGAMA" value="AMALGAMA" style="margin-top: 5px; margin-left: 0px">
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
	                <a  rel="popover" data-img="{{ URL::to('/images/Dientes/corona.jpg') }}"><b>CARILLA</b></a>
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
    	<div>
			<h5 class="card-title">Hábitos bucales</h5><br>
		</div>
		<div class="form-group row">
            <div class="col">
                {!! Form::checkbox('higieneBucal[]', 'higieneBucal') !!}
                {!! Form::label ('higieneBuc','MALA HIGIENE') !!}
                <!-- {!! Form::label ('higieneBuc','Presenta buena higiene bucal') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'higieneBucal'] ) !!} -->
            </div>
            <div class="col" >
                {!! Form::checkbox('higieneBucal[]', 'tieneCaries') !!}
                {!! Form::label ('CARIES','CARIES') !!}
                <!-- {!! Form::label ('tieneCarie','¿Tiene caries?') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneCaries'] ) !!} -->
            </div>
            <div class="col">
                {!! Form::checkbox('higieneBucal[]', 'nombreAbceso') !!}
                {!! Form::label ('nombreAbcesos','ABSCESOS') !!}
                <!-- {!! Form::label ('nombreAbcesos','¿Tiene abscesos?') !!}
                {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreAbceso'] ) !!} -->
            </div>
            <div class="col">
                {!! Form::checkbox('enfermedad[]', 'SARRO') !!}
                {!! Form::label ('SARRO','SARRO') !!}
            </div>
            <div class="col">
                {!! Form::checkbox('enfermedad[]', 'GINGIVITIS') !!}
                {!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
            </div>
        </div>
        <div class="form-group row">
        	<div class="col">
                {!! Form::checkbox('enfermedad[]', 'PERIODONTITIS') !!}
                {!! Form::label ('PERIODONTITIS','PERIODONTITIS') !!}
            </div>
            <div class="col" style="margin-left: -29px;">
                {!! Form::checkbox('malhabito[]', 'MORDERSE LAS UÑAS') !!}
                {!! Form::label ('MORDERSE LAS UÑAS','MORDERSE LAS UÑAS') !!}
            </div>
            <div class="col" style="margin-left: -29px;">
                {!! Form::checkbox('malhabito[]', 'MORDER ALGÚN OBJETO') !!}
                {!! Form::label ('MORDER ALGÚN OBJETO','MORDER ALGÚN OBJETO') !!}
            </div>
            <div class="col" style="margin-left: 0px;">
                <input class="form-check-input" type="checkbox" id="OTROH" value="OTRO" name="malhabito[]">
                {!! Form::label ('OTRO','OTRO') !!}
            </div>
            <div class="col" style="margin-top: -10px;margin-left: -70px;">
                {!! Form::text ('otro',old('otro'), ['class' => 'form-control mayuscula', 'id' => 'escpecifiquehabito', 'placeholder' => 'ESPECIFIQUE'] )!!}
            </div>
        </div>
	</div>
	</div>
	
	<div class="card border-primary">
		<div class="card-body bg-whithe" id="formularioDientes">
			<h5 class="card-title">Dientes perdidos de la persona desaparecida
				<button type="button" class="btn btn-dark pull-right" id="btnDiente">Guardar</button>
				
				<hr>
			</h5>
			<div id="cardDientes">
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
									<div id="formDiente">
										
									</div>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	          	</div>
	        </div>
		</div>
	
  	<div class="card border-primary" id="anexos">
        <div class="card border-success">
          <div class="card-header"> 
              <h5>AGREGAR ANEXOS
              <button type="submit" class="btn btn-dark pull-right"  id="btnAgregarAnexo"> Agregar  
              </button>   
              </h5>
          </div>
        </div>        
         @include('datosdentales.modals.modal_cargar_documento')
 
       <div class="container page-top">
        <div class="row">
            @if($images->count())
                @foreach($images as $image)
                <div class='col-md-2 thumb' >
                   @if(substr ($image->ruta, -3) == "pdf")
                    <a id ="div_tamano">
                         <a id="fancybox" class="fancybox" rel="ligthbox" href="{{ $image->ruta }}" target="_blank">              
                           <center>
                            <img class="img-responsive zoom img-fluid" alt="" src="../images/documentopdf.png" width="150" height="220"  align="center" />
                          </center>
                              
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->name }}</small>
                            </div> 
                        </a>
                      </a>
                    @else
                       <a id ="div_tamano">
                        <a id="fancybox" class="fancybox" rel="ligthbox" href="{{ $image->ruta }}">                
                           <img class="img-responsive zoom img-fluid" alt="" src="..{{ $image->ruta }}" />
                              
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->name }}</small>
                            </div> 
                        </a>
                        <a id ="div_tamano">
                    @endif
                    <form action="{{ url('imagenAntecedentesM',$image->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    {!! csrf_field() !!}
                    <button type="submit" class="close-icon btn btn-danger"><i class="fa fa-window-close"></i></button>
                    </form>
                </div> 
                @endforeach
            @endif
        </div> 
    </div>
    <br>
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

<script src="../plugins/bootstrap_fileinput/js/popper.min.js" type="text/javascript"></script>
<script src="../plugins/bootstrap_fileinput/js/bootstrap.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="../plugins/bootstrap_fileinput/js/fileinput.js"></script>
<!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
<script src="../plugins/bootstrap_fileinput/js/theme.js"></script>
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="../plugins/bootstrap_fileinput/js/es.js"></script>
<!-- para la galeria de imagenes fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	//console.log('ID de la persona desaparecida: {!! $desaparecido->id !!}');

	/*************************************************************
	********* función para los toltip's de tratamientos **********S
	**************************************************************/
$(document).ready(function(){
	$.ajax({
		url: routedatosDentales+'/get_datosDentales/'+idDesaparecido,
		type: 'GET',
		dataType: 'json',
		data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});


	
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

    

    	$(".fancybox").fancybox({
			openEffect: "none",
        	closeEffect: "none"
        });
    
    	$(".zoom").hover(function(){
    		$(this).addClass('transition');
    	}, function(){
    		$(this).removeClass('transition');
    	});

	/**********************************************************************
	*** Inicia segmento para ocultar y/o mostrar campos en el formulario***
	**********************************************************************/
		$('#cardDientes').hide();
		$('#anexos').hide();
		$('#btnDiente').hide();
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
		$('#escpecifiquehabito').prop('disabled','true');
		// $('#tipoperfil').hide();
		// $('#perfilseleccionado').hide();
		// $('#tipomordida').hide();
		// $('#mordidaseleccionada').hide();
		// $('#selecsonrisa').hide();
		// $('#sonrisaseleccionada').hide();
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
				$('#escpecifiquehabito').removeAttr('disabled');
				$('#escpecifiquehabito').focus();
			}else{
				$('#escpecifiquehabito').val('');
				$('#escpecifiquehabito').prop('disabled','true');	
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

   		$desaparecido = ('{!! $desaparecido->id!!}');
   		var modalAnexos = $('#modalAnexosDatosDentales');

   		$('#btnAgregarAnexo').click (function(){  
			modalAnexos.modal('show');
		});

   		$('#cerrarModal').click (function(){
  			location.reload();
  		});
		var routeIndex = '{!! route('anexoscontroller.index') !!}';
		$("#fileImagenes").fileinput({
			language:'es',
			theme: 'fa',
            uploadUrl:routeIndex + '/imagenAntecedentesD',
            uploadExtraData: function() {
            	return {
            		_token: $("input[name='_token']").val(),
            		idDesaparecido:'{!! $desaparecido->id!!}',
            		tipoAnexo: 'antecedentesdentales',
            	};
            },
            allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf'],
          	overwriteInitial: false,
          	maxFileSize:2000,
          	maxFilesNum: 10,

          	slugCallback: function (filename) {
          		$nombre = $desaparecido+"_ant_dentales_"+filename.replace('(', '_').replace(']', '_');
          		console.log($nombre);
          		return  filename.replace('(', '_').replace(']', '_');
          	}
          });

   	/**********************************************************************
	*** Declaración de rutas a usar de los campos en el formulario ********
	***********************************************************************/
	
	var routedatosDentales = '{!! route('datos_dentales.index') !!}';
	var routedientesPerdidos = '{!! route('datos_dentales_dientes_perdidos.index') !!}';
	var idDesaparecido = '{!! $desaparecido->id !!}'

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
	******** función para guardar datos de todo el formulario ***************
	************************************************************************/

	$('#agregaInformacion').click(function()
	{
		if ($("#idperfilselec").val() == '') {
			$valorPerfil = 1;
		}else{
			$valorPerfil = $("#idperfilselec").val();
		}

		if ($("#idmordidaselec").val() == '') {
			$valorMordida = 1;
		}else{
			$valorMordida = $("#idmordidaselec").val();
		}

		if ($("#idsonrisaselec").val() == '') {
			$valorSonrisa = 1;
		}else{
			$valorSonrisa = $("#idsonrisaselec").val();
		}
		var dataString = {
			dienteTamano : $("#dienteTamano").val(),
			dienteCompleto : $("#dienteCompleto").val(),
			nombres : $("#nombres").val(),
			primerAp : $("#primerAp").val(),
			segundoAp : $("#segundoAp").val(),
			empresa : $("#empresa").val(),
			telefono : $("#telefono").val(),
			direccion : $("#direccion").val(),
			tratamiento : $("input[name='trata[]']").map(function(){return $(this).is(':checked');}).get(),
			enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).is(':checked');}).get(),
			malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).is(':checked');}).get(),
			especifiqhabito : $("#escpecifiquehabito").val(),
			valorPerfil : $valorPerfil,
			valormordida : $valorMordida,
			valorsonrisa : $valorSonrisa,
			idDesaparecido: '{!! $desaparecido->id !!}'
		}
		$.ajax({
			type: 'POST',
			url: routedatosDentales,
			data: dataString,
			dataType: 'json',
			success: function(data){
				
				$('#agregaInformacion').hide();
				$('#editarInformacion').show();
				$('#primeraseccion').hide();
				$('#cardDientes').show();
				$('#btnDiente').show();
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

	/************************************************************************
	********** función para habilitar los datos para editar *****************
	************************************************************************/

	$('#editarInformacion').click(function(){
		$('#editarInformacion').hide();
		$('#cardDientes').hide();
		$('#primeraseccion').show();
		$('#updateInformacion').show();
	});

	/************************************************************************
	********** función para habilitar los datos para editar *****************
	************************************************************************/

	$('#updateInformacion').click(function(){

		var dataString = {
			dienteTamano : $("#dienteTamano").val(),
			dienteCompleto : $("#dienteCompleto").val(),
			nombres : $("#nombres").val(),
			primerAp : $("#primerAp").val(),
			segundoAp : $("#segundoAp").val(),
			empresa : $("#empresa").val(),
			telefono : $("#telefono").val(),
			direccion : $("#direccion").val(),
			tratamiento : $("input[name='trata[]']").map(function(){return $(this).is(':checked');}).get(),
			enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).is(':checked');}).get(),
			malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).is(':checked');}).get(),
			especifiqhabito : $("#escpecifiquehabito").val(),
			valorPerfil : $("#idperfilselec").val(),
			valormordida : $("#idmordidaselec").val(),
			valorsonrisa : $("#idsonrisaselec").val(),
			idDesaparecido: '{!! $desaparecido->id !!}'
		}

		$.ajax({
			type: 'PUT',
			url: routedatosDentales+'/'+idDesaparecido,
			data: dataString,
			dataType: 'json',
			success: function(data){
				console.log(data);
				$('#agregaInformacion').hide();
				$('#updateInformacion').hide();
				$('#editarInformacion').show();
				$('#primeraseccion').hide();
				$('#cardDientes').show();
				$.confirm({
        		title: 'Datos dentales',
        		content: 'actualizados exitosamente.',
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
	******* función para mostrar los datos de todo el formulario ************
	************************************************************************/


	/**}**********************************************************************
	**** función para guardar los datos del form de dientes seleccionados ***
	************************************************************************/

	$('#btnDiente').click(function(){
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
				//$('#btnDiente').hide();
				$('#upDiente').show();
				$('#anexos').show();
				$('#cardDientes').hide();
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
	** función para guardar los datos del formulario de la segunda sección***
	************************************************************************/

	$('#updateSegInformacion').click(function(){
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
		$('#editarSegInformacion').show();
		$('#segundaseccion').hide();
		$('#updateSegInformacion').hide();
	});
});
</script>
@endsection