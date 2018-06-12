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
	//console.log('ID de la persona desaparecida: {!! $desaparecido->id !!}');

	/*************************************************************
	********* función para los toltip's de tratamientos **********S
	**************************************************************/
$(document).ready(function(){
	//var datosDental = "{{$denta->idTamanoDiente}}";
	var datosDental = @JSON("{{$denta}}");
	$.each(JSON.parse(datosDental), function(key,value){

	})
	function mostrarDatos(){
		//alert(datosDental);
		$('#dienteTamano').val(datosDental);
	}
	mostrarDatos();

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
	$('#dentistahr').hide();
	$('#upDiente').hide();

    

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

	// $('#btnAgregarAnexo').click (function(){  
	// modalAnexos.modal('show');
	// });

	// $('#cerrarModal').click (function(){
	// 	location.reload();
	// });

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
	var auxTrata = new Array();
	var auxEnfer = new Array();
	var auxHabBuc = new Array();

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
	********** función para guardar los datos de tratamientos ***************
	************************************************************************/

	$('#verdatosdentista').click(function(e){
    	$('#modalDentista').modal('show');
	}); 

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
			//tratamiento : $("input[name='trata[]']").map(function(){return $(this).is(':checked');}).get(),
			tratamiento : auxTrata,
			//enfermedad : $("input[name='enfermedad[]']").map(function(){return $(this).is(':checked');}).get(),
			enfermedad : auxEnfer,
			//malhabitos : $("input[name='malhabito[]']").map(function(){return $(this).is(':checked');}).get(),
			malhabitos : auxHabBuc,
			especifiqhabito : $("#escpecifiquehabito").val(),
			valorPerfil : $valorPerfil,
			valormordida : $valorMordida,
			valorsonrisa : $valorSonrisa,
			idDesaparecido: '{!! $desaparecido->id !!}'
		}
		console.log(dataString);
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
                		location.reload();
                			}
                		},
            		}
        		});

			},
			error: function(data){
			}
		});
	});
});
</script>
@endsection