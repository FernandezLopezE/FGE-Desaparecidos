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
			<button type="button" class="btn btn-dark pull-right" id="updateInformacion">Actualizar</button>
			<button type="button" class="btn btn-dark pull-right" id="editarInformacion">Editar</button>
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
	                	{!! Form::text ('perfilselec','', ['class' => 'form-control mayuscula', 'id' => 'valorPerfil'] )!!}
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
	                <h5>Tratamientos dentales</h5>
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
	                <input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="BLANQUEAMIENTO_DENTAL" value="BLANQUEAMIENTO_DENTAL">
	                <a  rel="popover" data-img="{{ URL::to('/images/Dientes/blanqueamiento_dental.jpg')}}"><B>BLANQUEAMIENTO DENTAL</B></a>
	                <!--{!! Form::label ('BLANQUEAMIENTO DENTAL','BLANQUEAMIENTO DENTAL') !!}-->
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('BRACKETS', '4') !!}-->
	                <input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="BRACKETS" value="BRACKETS">
	                <a  rel="popover" data-img="{{ URL::to('/images/Dientes/brackets.jpg') }}"><b>BRACKETS</b></a>
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('CARILLA', '5') !!}-->
	                <input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="CARILLA" value="CARILLA">
	                <a  rel="popover" data-img="{{ URL::to('/images/Dientes/corona.jpg') }}"><b>CARILLA</b></a>
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('CORONA ESTETICA', '6') !!}-->
	                <input class="form-check-input" name="trata[]" style="margin-top: 6px" type="checkbox" id="CORONA_ESTETICA" value="CORONA_ESTETICA">
	                <a  rel="popover" style="margin-left: -2px" data-img="{{ URL::to('/images/Dientes/corona.jpg') }}"><b>CORONA ESTETICA</b></a>
	            </div>
	        </div>
        	<div class="form-group row">
                <div class="col">
                    <!--{!! Form::checkbox('ENDODONCIA', '7') !!}-->
                    <input class="form-check-input" name="trata[]" style="margin-left: 0px" type="checkbox" id="ENDODONCIA" value="ENDODONCIA">
                    <a  rel="popover" style="margin-top: -8px; margin-left: 20px;" data-img="{{ URL::to('/images/Dientes/endodoncia.jpg') }}"><b>ENDODONCIA</b></a>
                </div>
                <div class="col">
                    <!--{!! Form::checkbox('IMPLANTE', '8') !!}-->
                    <input class="form-check-input" name="trata[]" type="checkbox" id="IMPLANTE" value="IMPLANTE">
                    <a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/implante.jpg') }}"><b>IMPLANTE</b></a>
                </div>
                <div class="col">
                    <!--{!! Form::checkbox('OBTURACIÓN TEMPORAL', '9') !!}-->
                    <!--{!! Form::label ('OBTURACIÓN TEMPORAL','OBTURACIÓN TEMPORAL') !!}-->
                    <input class="form-check-input" name="trata[]" type="checkbox" id="OBTURACION_TEMPORAL" value="OBTURACION_TEMPORAL">
                    <a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/implante.jpg') }}"><b>OBTURACIÓN TEMPORAL</b></a>
                </div>
                <div class="col">
                    <!--{!! Form::checkbox('PROTESIS FIJA', '10') !!}-->
                    <!--{!! Form::label ('PROTESIS FIJA','PROTESIS FIJA') !!}-->
                    <input class="form-check-input" name="trata[]" type="checkbox" id="PROTESIS_FIJA" value="PROTESIS_FIJA">
                    <a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/protesis_fija.jpg') }}"><b>PROTESIS FIJA</b></a>
                </div>
                <div class="col">
                    <!--{!! Form::checkbox('PROTESIS REMOVIBLE', '11') !!}-->
                    <!--{!! Form::label ('PROTESIS REMOVIBLE','PROTESIS REMOVIBLE') !!}-->
                    <input class="form-check-input" name="trata[]" type="checkbox" id="PROTESIS_REMOVIBLE" value="PROTESIS_REMOVIBLE">
                    <a  rel="popover" style="margin-top: -10px; margin-left: 0px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>PROTESIS REMOVIBLE</b></a>
                </div>
	        </div>
	        <div class="form-group row">
	            <div class="col">
	                <!--{!! Form::checkbox('PROTESIS TOTAL', '12') !!}-->
	                <!--{!! Form::label ('PROTESIS TOTAL','PROTESIS TOTAL') !!}-->
	                <input class="form-check-input" name="trata[]" style="margin-left: -0px;" type="checkbox" id="PROTESIS_TOTAL" value="PROTESIS_TOTAL">
	                <a  rel="popover" style="margin-top: -8px; margin-left: 20px" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>PROTESIS TOTAL</b></a>
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('RESINA', '13') !!}-->
	                <input class="form-check-input" name="trata[]" type="checkbox" id="RESINA" value="RESINA">
	                <a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>RESINA</b></a>
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('RETENEDOR', '14') !!}-->
	                <!--{!! Form::label ('RETENEDOR','RETENEDOR') !!}-->
	                <input class="form-check-input" name="trata[]" type="checkbox" id="RETENEDOR" value="RETENEDOR">
	                <a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/resina.jpg') }}"><b>RETENEDOR</b></a>
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('SELLADOR FS', '15') !!}-->
	                <!--{!! Form::label ('SELLADOR FS','SELLADOR FS') !!}-->
	                <input class="form-check-input" name="trata[]" type="checkbox" id="SELLADOR" value="SELLADOR">
	                <a  rel="popover" style="margin-top: -8px;" data-img="{{ URL::to('/images/Dientes/sellador_fs.jpg') }}"><b>SELLADOR FS</b></a>
	            </div>
	            <div class="col">
	                <!--{!! Form::checkbox('OTRO', '16') !!}-->
	                <!--{!! Form::label ('OTRO','OTRO') !!}-->
	                <input class="form-check-input" name="trata[]" type="checkbox" id="OTRO" value="OTRO">
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
                <input class="form-check-input" name="enfermedad[]"  type="checkbox" id="MALA_HIGIENE" value="MALA_HIGIENE" style="margin-top: 5px; margin-left: 0px">
                <label id="higieneBuc" style="margin-left: 20px">MALA HIGIENE</label>
                
            </div>
            <div class="col" >
                <input class="form-check-input" name="enfermedad[]"  type="checkbox" id="CARIES" value="CARIES">
                {!! Form::label ('CARIES','CARIES') !!}
            </div>
            <div class="col">
                <input class="form-check-input" name="enfermedad[]"  type="checkbox" id="ABSCESOS" value="ABSCESOS">
                {!! Form::label ('nombreAbcesos','ABSCESOS') !!}
            </div>
            <div class="col">
            	<input class="form-check-input" name="enfermedad[]"  type="checkbox" id="SARRO" value="SARRO">
                {!! Form::label ('SARRO','SARRO') !!}
            </div>
            <div class="col">
                <input class="form-check-input" name="enfermedad[]"  type="checkbox" id="GINGIVITIS" value="GINGIVITIS">
                {!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
            </div>
        </div>

        <div class="form-group row">
        	<div class="col">
                <input class="form-check-input" name="enfermedad[]"  type="checkbox" id="PERIODONTITIS" value="PERIODONTITIS" style="margin-top: 5px; margin-left: 0px">
                <label id="PERIODONTITIS" style="margin-left: 20px">PERIODONTITIS</label>
            </div>
            <div class="col" >
                <input class="form-check-input" name="malhabito[]"  type="checkbox" id="MORDERSE_LAS_UNAS" value="MORDERSE_LAS_UNAS">
                {!! Form::label ('MORDERSE LAS UÑAS','MORDERSE LAS UÑAS') !!}
            </div>
            <div class="col" >
                <input class="form-check-input" name="malhabito[]"  type="checkbox" id="MORDER_ALGUN_OBJETO" value="MORDER_ALGUN_OBJETO">
                {!! Form::label ('MORDER ALGÚN OBJETO','MORDER ALGÚN OBJETO') !!}
            </div>
            <div class="col">
            	<input class="form-check-input" name="malhabito[]"  type="checkbox" id="OTROH" value="OTROH">
                {!! Form::label ('OTRO','OTRO') !!}
            </div>
            <div class="col">
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
//Toltips de ayuda visual
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
});

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

$(document).ready(function(){

	$('#otroTrata').hide();
	$('#cardDientes').hide();
	$('#btnDiente').hide();
	$('#editarInformacion').hide();
	
	var datoperfil = @JSON($nombrePerfil);
	var datomordida = @JSON($nombreMordida);
	var datosonrisa = @JSON($nombreSonrisa);
	var datosDental = @JSON($denta);
	
	function mostrarDatos(){
		$('#dienteTamano').val(datosDental.idTamanoDiente);
		var nameDent = datosDental.nombres;
		if (nameDent == null ) {
			$("#infoDen").show();
			$("#verinfodentista").hide();
		}else{
			$("#atencionOdonto").val("SI");
			$("#verinfodentista").show();
			$("#infoDen").hide();
			$('#nombres').val(datosDental.nombres);
			$('#primerAp').val(datosDental.primerAp);
			$('#segundoAp').val(datosDental.segundoAp);
			$('#empresa').val(datosDental.empresa);
			$('#telefono').val(datosDental.telefono);
			$('#direccion').val(datosDental.direccion);

		}

		$.each(datoperfil,function(key,value){
			$("#valorPerfil").val(value.nombrePerfil);
		});

		$.each(datomordida,function(key,value){
			$("#valormordida").val(value.nombreTipoMordida);
		});

		$.each(datosonrisa,function(key,value){
			$("#dientes_girados").val(value.nombreTipoSonrisa);
		});


		var dientes = @JSON("$dientesPerdidos");
	    //alert(dientes);
	      $.each(JSON.parse(dientes), function(key,value){
	        //console.log(value.id);
	        $('g[data-diente="'+value.id+'"] path').css({"fill":"#17a4da","stroke":"#ffffff","stroke-width":"2-"});
	        //$('g[data-diente="'+value.id+'"]').click();
	        
	        contenido = '<div class="form-group row" id="diente_'+value.id+'">';
				contenido = contenido+ '<div class="col">';
				contenido = contenido+'<input type="text" class="form-control" name="" value="'+value.nombreDiente+'" disabled>';
				contenido = contenido+'</div>'
				contenido = contenido+'<div class="col">';
				contenido = contenido+'<input type="text" class="form-control" name="perdio[]" value="'+value.causaPerdida+'">';
				contenido = contenido+'<input type="hidden" name="dienteselec[]" value="'+value.id+'">';
				contenido = contenido+'</div>';
				contenido = contenido+'<div class="col-1" id="borrar">';
				contenido = contenido+'<i class="fa fa-trash" style="font-size:20px; margin-top: 10px" id="'+value.id+'" value="prueba"></i>';
				pintar = "#path"+value.id;
				contenido = contenido+'</div>';
				contenido = contenido+'</div>';

				$('#formDiente').append(contenido);

	      });

	    

		//Recuperamos el arreglo de tratamientos para poblar en el edit
		var arreTrata = datosDental.tratamientos;
		var mostrarTrata = JSON.parse(arreTrata);
		var arrayTrata = ['AMALGAMA', 'BLANQUEAMIENTO_DENTAL', 'BRACKETS', 'CARILLA','CORONA_ESTETICA', 'ENDODONCIA', 'IMPLANTE', 'OBTURACION_TEMPORAL','PROTESIS_FIJA', 'PROTESIS_REMOVIBLE', 'PROTESIS_TOTAL', 'RESINA','RETENEDOR','SELLADOR'];
		for (var i = 0; i < mostrarTrata.length; i++) {
			for (var j = 0; j < arrayTrata.length; j++) {
				if (mostrarTrata[i] == arrayTrata[j]) {
					$("#"+mostrarTrata[i]).prop('checked', true);

				} else {
					
				}
			}
		}

		//Recuperamos el arreglo de enfermedades para poblar en el edit
		var arreEnfer = datosDental.enfermedades;
		var mostrarEnfer = JSON.parse(arreEnfer);
		var arrayEnfer = ['MALA_HIGIENE', 'CARIES', 'ABSCESOS', 'PERIODONTITIS','SARRO', 'GINGIVITIS'];
		for (var i = 0; i < mostrarEnfer.length; i++) {
			for (var j = 0; j < arrayEnfer.length; j++) {
				if (mostrarEnfer[i] == arrayEnfer[j]) {
					$("#"+mostrarEnfer[i]).prop('checked', true);
				} else {
					
				}
			}
		}

		//Recuperamos el arreglo de malos habitos para poblar en el edit
		var arreMalosH = datosDental.arraymaloshabitos;
		var mostrarHabitos = JSON.parse(arreMalosH);
		var arrayHabBuc = ['MORDERSE_LAS_UNAS', 'MORDER_ALGUN_OBJETO', 'OTROH'];
		for (var i = 0; i < mostrarHabitos.length; i++) {
			for (var j = 0; j < arrayHabBuc.length; j++) {
				if (mostrarHabitos[i] == arrayHabBuc[j]) {
					$("#"+mostrarHabitos[i]).prop('checked', true);
				} else {
					
				}
			}
		}

	}

	//llamado de función para poblar el formulario para editar
	mostrarDatos();

	//Mostrar-ocultar modal datos dentista
	$("#datosdentista").click(function(event) {
		$('#modalDentista').modal('show');
    	$('#nombres').focus();
	});

	$('#verdatosdentista').click(function(e){
    	$('#modalDentista').modal('show');
	}); 

	$('#atencionOdonto').change(function() {
    	atencion = $('#atencionOdonto').val();
    	if (atencion == 'SI') {
    		$('#infoDen').show();
		}else{
			$('#nombres').val('');
			$('#primerAp').val('');
			$('#segundoAp').val('');
			$('#empresa').val('');
			$('#telefono').val('');
			$('#direccion').val('');
			$('#infoDen').hide();
			$('#verinfodentista').hide();
		}
	});
});

	/**********************************************************************
	*** Declaración de rutas a usar de los campos en el formulario ********
	***********************************************************************/
	
	var routedatosDentales = '{!! route('datos_dentales.index') !!}';
	var routedientesPerdidos = '{!! route('datos_dentales_dientes_perdidos.index') !!}';
	var idDesaparecido = '{!! $desaparecido->id !!}';
	var auxTrata = new Array();
	var auxEnfer = new Array();
	var auxHabBuc = new Array();

	/************************************************************************
	********** función para guardar los datos de tratamientos ***************
	************************************************************************/

	var arrayOfInputsTrata = ['#AMALGAMA', '#BLANQUEAMIENTO_DENTAL', '#BRACKETS', '#CARILLA','#CORONA_ESTETICA', '#ENDODONCIA', '#IMPLANTE', '#OBTURACION_TEMPORAL',
						'#PROTESIS_FIJA', '#PROTESIS_REMOVIBLE', '#PROTESIS_TOTAL', '#RESINA','#RETENEDOR','#SELLADOR'];
	
	$(document).on("change", arrayOfInputsTrata.join(","), function(){
		if ($(this).is(":checked")) {
			var id = $(this).attr("id");
			var valor = $(this).attr("value");
			auxTrata.push(valor);
		}
	});

	/************************************************************************
	********** función para guardar los datos de enfermedades ***************
	************************************************************************/

	var arrayOfInputsEnfer = ['#MALA_HIGIENE', '#CARIES', '#ABSCESOS', '#PERIODONTITIS','#SARRO', '#GINGIVITIS'];
	
	$(document).on("change", arrayOfInputsEnfer.join(","), function(){
		if ($(this).is(":checked")) {
			var id = $(this).attr("id");
			var valor = $(this).attr("value");
			auxEnfer.push(valor);
		}
	});

	/************************************************************************
	******* función para guardar los datos de habitos bucales ***************
	************************************************************************/

	var arrayOfInputsHabBuc = ['#MORDERSE_LAS_UNAS', '#MORDER_ALGUN_OBJETO', '#OTROH'];
	
	$(document).on("change", arrayOfInputsHabBuc.join(","), function(){
		if ($(this).is(":checked")) {
			var id = $(this).attr("id");
			var valor = $(this).attr("value");
			auxHabBuc.push(valor);
		}
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
				//$('#anexos').show();
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
                		window.location.href = routedatosDentales+"/"+idDesaparecido;
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

	$('#updateInformacion').click(function(){
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
			tratamiento : auxTrata,
			enfermedad : auxEnfer,
			malhabitos : auxHabBuc,
			especifiqhabito : $("#escpecifiquehabito").val(),
			valorPerfil : $valorPerfil,
			valormordida : $valorMordida,
			valorsonrisa : $valorSonrisa,
			idDesaparecido: '{!! $desaparecido->id !!}'
		}

		$.ajax({
			type: 'PUT',
			url: routedatosDentales+'/'+idDesaparecido,
			data: dataString,
			dataType: 'json',
			success: function(data){
				console.log(data);
				$('#cardDientes').show();
				$('#btnDiente').show();
				$('#primeraseccion').hide();
				$('#updateInformacion').hide();
				$('#editarInformacion').show();
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

	$('#OTRO').change(function () {
		if (this.checked) {
			$('#otroTrata').show();
			$('#otroTratamiento').focus();
		}else{
			$('#otroTrata').hide();	
		}
	});
</script>
@endsection