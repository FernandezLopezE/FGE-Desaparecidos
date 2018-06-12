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
	//var datosDental = "{{$denta->idTamanoDiente}}";
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

		var arreTrata = datosDental.tratamientos;
		var mostrarTrata = JSON.parse(arreTrata);
		if (mostrarTrata = 'AMALGAMA' || 'BLANQUEAMIENTO_DENTAL') {
			$("#AMALGAMA").prop('checked', true);
			$("#BLANQUEAMIENTO_DENTAL").prop('checked', true);
		}
		
	}
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
			
			$('#infoDen').hide();
			$('#verinfodentista').hide();
		}
	});



});
</script>
@endsection