@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
  
@media (min-width: 580px) {
  div.form {
    display: table;

  }
  div.form .checkbox {
    width: 25%;
    display: inline-table;
    margin: 5px 0;
  }
  div.form .checkbox:nth-child(odd) {
  }
  div.form .checkbox:nth-child(even) {
    float: right;
  }
}
    @media (min-width: 580px) {
  div.form2 {
    display: table;

  }
  div.form2 .checkbox2 {
    width: 25%;
    display: inline-table;
    margin: 5px 0 0 0;
  }
  div.form2 .checkbox:nth-child(odd) {
  }
  div.form2 .checkbox:nth-child(even) {
    float: right;
  }
}
</style>

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
	<div class="card-body bg-white">
		<h5 class="card-title">Datos, tratamientos, higiene & hábitos dentales de la persona desaparecida
			<button type="button" class="btn btn-dark pull-right" id="agregaInformacion">Guardar</button>
			<button type="button" class="btn btn-dark pull-right" id="editarInformacion">Editar</button>
			<button type="button" class="btn btn-dark pull-right" id="updateInformacion">Actualizar</button>
		</h5>
		<div id="primeraseccion"><hr> <br>

		<div class="form-group row">
			<div class="col-lg-2">
				{!! Form::label ('dienteTamano','Tamaño de dientes:') !!}
				{!! Form::select ('nombreTamano',$dienteTamano, '', ['class' => 'form-control', 'id' => 'dienteTamano'])!!}	
			</div>
			<div class="col-lg-2">
				{!! Form::label ('atencionOdonto','Asistió al dentista:') !!}
				{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SI' => 'SI', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
			</div>
			<div id="infoDen" class="col-lg-4">
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
	    	
	    	<div class="col-lg-4 row" style="margin-left:7.5px" >
	    	<div class="col" align="center" > <h5>Tipo de perfil</h5></div> <br>
        	<div class="row" >
	    		<div class="col" id="tipoperfil">
	    			{!! Form::label ('selectperfil','Seleccionar perfil') !!}
	           		{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectPerfil']) !!}
	           		@include('includes.modal_perfilDiente')
	        	</div>
	    		<div class="col" id="perfilseleccionado">
	    			{!! Form::label ('perfilselec','Perfil seleccionado') !!}
	            	{!! Form::text ('perfilselec',old('perfilselec'), ['class' => 'form-control mayuscula', 'id' => 'valorPerfil'] )!!}
	        	</div>
	        	</div>
	        	<div>
	        		{{ Form::hidden('idperfilselec','', array('id' => 'idperfilselec')) }}
	        	</div>
	    	</div>
            
        	<div class="col-lg-4 row" style="margin-left:7.5px"> 
        	<div class="col" align="center" > <h5>Tipo de mordida</h5> </div> <br>
        	<div class="row" >  
        		<div class="col"  id="tipomordida">
        			{!! Form::label ('selectMordida','Seleccionar mordida') !!}
                	{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectMordida']) !!}
                	@include('includes.modal_tipoMordida')
            	</div>
        		<div class="col"  id="mordidaseleccionada">
        			{!! Form::label ('mordidaselec','Mordida seleccionada') !!}
                	{!! Form::text ('mordidaselec',old('mordidaselec'), ['class' => 'form-control mayuscula', 'id' => 'valormordida'] )!!}
            	</div>
            	</div>
            	<div>
            		{{ Form::hidden('idmordidaselec','', array('id' => 'idmordidaselec')) }}
            	</div>
        	</div>

        	<div class="col-lg-4 row" style="margin-left:7.5px">
        	<div class="col" align="center" > <h5>Tipo de sonrisa</h5> </div> <br>
        	<div class="row" >
        		<div class="col"  id="selecsonrisa">
        			{!! Form::label ('selectSonrisa','Seleccionar sonrisa') !!}
                	{!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectSonrisa']) !!}
                	@include('includes.modal_tipoSonrisa')
            	</div>
        		<div class="col"  id="sonrisaseleccionada">
        			{!! Form::label ('sonrisaselec','Sonrisa seleccionada') !!}
                	{!! Form::text ('sonrisaselec',old('sonrisaselec'), ['class' => 'form-control mayuscula', 'id' => 'dientes_girados'] )!!}
            	</div>
                </div>
            	<div>
            		{{ Form::hidden('idsonrisaselec','', array('id' => 'idsonrisaselec')) }}
            	</div>
        	</div>
	    </div><hr>

        <div class="form-group row">
        	<div>
                <h5>Tratamientos dentales</h5>
            </div>
            <div class="col" align="right" >
                {!! Form::label ('direccion','Activar ayuda visual') !!}
                <input id="toggle-event" type="checkbox" data-toggle="toggle" data-on="SÍ" data-off="NO" data-size="small">
                
            </div>
        </div>

      
         <div class="container">
            <div class="row">

            <div class="col-sm-12">
              <div class="form">
            <div class="checkbox">
                <!--{!! Form::checkbox('AMALGAMA', '2') !!}-->
                <input class="" name="trata[]" type="checkbox" id="AMALGAMA" value="AMALGAMA" >
                <label for="AMALGAMA"><a rel="popover"  data-img="{{ URL::to('/images/Dientes/amalgama.jpg')}}">&nbsp;<B>AMALGAMA</B></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('BLANQUEAMIENTO DENTAL', '3') !!}-->
                <input class="" name="trata[]"  type="checkbox" id="BLANQUEAMIENTO_DENTAL" value="BLANQUEAMIENTO_DENTAL">
                <label for="BLANQUEAMIENTO_DENTAL"><a  rel="popover" data-img="{{ URL::to('/images/Dientes/blanqueamiento_dental.jpg')}}">&nbsp;<B>BLANQUEAMIENTO DENTAL</B></a></label>
                <!--{!! Form::label ('BLANQUEAMIENTO DENTAL','BLANQUEAMIENTO DENTAL') !!}-->
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('BRACKETS', '4') !!}-->
                <input class="" name="trata[]"  type="checkbox" id="BRACKETS" value="BRACKETS">
                <label for="BRACKETS"><a  rel="popover" data-img="{{ URL::to('/images/Dientes/brackets.jpg') }}">&nbsp;<b>BRACKETS</b></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('CARILLA', '5') !!}-->
                <input class="" name="trata[]"  type="checkbox" id="CARILLA" value="CARILLA">
                <label for="CARILLA"><a  rel="popover" data-img="{{ URL::to('/images/Dientes/corona.jpg') }}">&nbsp;<b>CARILLA</b></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('CORONA ESTETICA', '6') !!}-->
                <input class="" name="trata[]"  type="checkbox" id="CORONA_ESTETICA" value="CORONA_ESTETICA">
                <label for="CORONA_ESTETICA"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/corona.jpg') }}">&nbsp;<b>CORONA ESTETICA</b></a></label>
            </div>



            <div class="checkbox">
                <!--{!! Form::checkbox('ENDODONCIA', '7') !!}-->
                <input class="" name="trata[]"  type="checkbox" id="ENDODONCIA" value="ENDODONCIA">
                <label for="ENDODONCIA"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/endodoncia.jpg') }}">&nbsp;<b>ENDODONCIA</b></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('IMPLANTE', '8') !!}-->
                <input class="" name="trata[]" type="checkbox" id="IMPLANTE" value="IMPLANTE">
                <label for="IMPLANTE"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/implante.jpg') }}">&nbsp;<b>IMPLANTE</b></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('OBTURACIÓN TEMPORAL', '9') !!}-->
                <!--{!! Form::label ('OBTURACIÓN TEMPORAL','OBTURACIÓN TEMPORAL') !!}-->
                <input class="" name="trata[]" type="checkbox" id="OBTURACION_TEMPORAL" value="OBTURACION_TEMPORAL">
                <label for="OBTURACION_TEMPORAL"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/implante.jpg') }}">&nbsp;<b>OBTURACIÓN TEMPORAL</b></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('PROTESIS FIJA', '10') !!}-->
                <!--{!! Form::label ('PROTESIS FIJA','PROTESIS FIJA') !!}-->
                <input class="" name="trata[]" type="checkbox" id="PROTESIS_FIJA" value="PROTESIS_FIJA">
                <label for="PROTESIS_FIJA"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/protesis_fija.jpg') }}">&nbsp;<b>PROTESIS FIJA</b></a></label>
            </div>
            <div class="checkbox">
                <!--{!! Form::checkbox('PROTESIS REMOVIBLE', '11') !!}-->
                <!--{!! Form::label ('PROTESIS REMOVIBLE','PROTESIS REMOVIBLE') !!}-->
                <input class="" name="trata[]" type="checkbox" id="PROTESIS_REMOVIBLE" value="PROTESIS_REMOVIBLE">
                <label for="PROTESIS_REMOVIBLE"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/resina.jpg') }}">&nbsp;<b>PROTESIS REMOVIBLE</b></a></label>
            </div>



	        <div class="checkbox">
	            <!--{!! Form::checkbox('PROTESIS TOTAL', '12') !!}-->
	            <!--{!! Form::label ('PROTESIS TOTAL','PROTESIS TOTAL') !!}-->
	            <input class="" name="trata[]"  type="checkbox" id="PROTESIS_TOTAL" value="PROTESIS_TOTAL">
	            <label for="PROTESIS_TOTAL"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/protesis_total.jpg') }}">&nbsp;<b>PROTESIS TOTAL</b></a></label>
	        </div>
	        <div class="checkbox">
	            <!--{!! Form::checkbox('RESINA', '13') !!}-->
	            <input class="" name="trata[]" type="checkbox" id="RESINA" value="RESINA">
	            <label for="RESINA"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/resina.jpg') }}">&nbsp;<b>RESINA</b></a></label>
	        </div>
	        <div class="checkbox">
	            <!--{!! Form::checkbox('RETENEDOR', '14') !!}-->
	            <!--{!! Form::label ('RETENEDOR','RETENEDOR') !!}-->
	            <input class="" name="trata[]" type="checkbox" id="RETENEDOR" value="RETENEDOR">
	            <label for="RETENEDOR"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/retenedores.jpg') }}">&nbsp;<b>RETENEDOR</b></a></label>
	        </div>
	        <div class="checkbox">
	            <!--{!! Form::checkbox('SELLADOR FS', '15') !!}-->
	            <!--{!! Form::label ('SELLADOR FS','SELLADOR FS') !!}-->
	            <input class="" name="trata[]" type="checkbox" id="SELLADOR" value="SELLADOR">
	            <label for="SELLADOR"><a  rel="popover"  data-img="{{ URL::to('/images/Dientes/sellador_fs.jpg') }}">&nbsp;<b>SELLADOR FS</b></a></label>
	        </div>
	        <div class="checkbox">
	            <!--{!! Form::checkbox('OTRO', '16') !!}-->
	            <!--{!! Form::label ('OTRO','OTRO') !!}-->
	            <!--<input class="form-check-input" name="trata[]" type="checkbox" id="OTRO" value=16>
	            {!! Form::label ('OTRO','OTRO') !!}-->
	            <!--<a  rel="popover" style="margin-top: -8px;"><b>OTRO</b></a>-->
	        </div>
		</div>
  </div>

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
		<div class="container">
            <div class="row">

            <div class="col-sm-12">
              <div class="form2">
               <div class="checkbox2">
                <input class="" name="enfermedad[]"  type="checkbox" id="MALA_HIGIENE" value="MALA_HIGIENE">
                <label id="higieneBuc" >&nbsp;MALA HIGIENE</label>
                
            </div>
            <div class="checkbox2" >
                <input class="" name="enfermedad[]"  type="checkbox" id="CARIES" value="CARIES">
                &nbsp;{!! Form::label ('CARIES','CARIES') !!}
            </div>
            <div class="checkbox2">
                <input class="" name="enfermedad[]"  type="checkbox" id="ABSCESOS" value="ABSCESOS">
                &nbsp;{!! Form::label ('nombreAbcesos','ABSCESOS') !!}
            </div>
            <div class="checkbox2">
            	<input class="" name="enfermedad[]"  type="checkbox" id="SARRO" value="SARRO">
                &nbsp;{!! Form::label ('SARRO','SARRO') !!}
            </div>
            <div class="checkbox2">
                <input class="" name="enfermedad[]"  type="checkbox" id="GINGIVITIS" value="GINGIVITIS">
                &nbsp;{!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
            </div>
     

       
        	<div class="checkbox2">
                <input class="" name="enfermedad[]"  type="checkbox" id="PERIODONTITIS" value="PERIODONTITIS" >
                <label id="PERIODONTITIS" >&nbsp;PERIODONTITIS</label>
            </div>
            <div class="checkbox2" >
                <input class="" name="malhabito[]"  type="checkbox" id="MORDERSE_LAS_UNAS" value="MORDERSE_LAS_UNAS">
                &nbsp;{!! Form::label ('MORDERSE LAS UÑAS','MORDERSE LAS UÑAS') !!}
            </div>
            <div class="checkbox2" >
                <input class="" name="malhabito[]"  type="checkbox" id="MORDER_ALGUN_OBJETO" value="MORDER_ALGUN_OBJETO">
                &nbsp;{!! Form::label ('MORDER ALGÚN OBJETO','MORDER OBJETOS') !!}
           </div>
           
           
		</div>
      </div>

      </div>
   </div>
            <!--<div class="col">
            	<input class="form-check-input" name="malhabito[]"  type="checkbox" id="OTROH" value="OTROH">
                {!! Form::label ('OTRO','OTRO') !!}
            </div>
            <div class="col">
                {!! Form::text ('otro',old('otro'), ['class' => 'form-control mayuscula', 'id' => 'escpecifiquehabito', 'placeholder' => 'ESPECIFIQUE'] )!!}
            </div>-->
  
         <hr>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">¿Tenía su dentadura completa?</h5>
                    <br>
                </div>
                
                    
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <select type="select" class="form-control" id="idDentaCompleta">
                        <option value="SÍ">SÍ</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
            </div>
            
        </div>
    </div>
</div>    

    <div class="card border-primary">
		<div class="card-body bg-whithe" id="formularioDientes">
			<h5 class="card-title">Dientes perdidos de la persona desaparecida
				<!--<button type="button" class="btn btn-dark pull-right" id="btnDiente">Guardar</button>-->
				
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
                                    <div class="col" align="center"><label >Diente seleccionado</label> </div>
			                    	<div class="col" align="center"><label >Causa de pérdida</label> </div>	
	                    				
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
	

  	<!-- <div class="card border-primary" id="anexos">
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

 -->


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

<!-- <script src="../plugins/bootstrap_fileinput/js/popper.min.js" type="text/javascript"></script>
<script src="../plugins/bootstrap_fileinput/js/bootstrap.min.js" type="text/javascript"></script> -->
<!-- the main fileinput plugin file -->
<!-- <script src="../plugins/bootstrap_fileinput/js/fileinput.js"></script> -->
<!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
<!-- <script src="../plugins/bootstrap_fileinput/js/theme.js"></script> -->
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<!-- <script src="../plugins/bootstrap_fileinput/js/es.js"></script> -->
<!-- para la galeria de imagenes fancybox -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 -->

<script type="text/javascript">
	//console.log('ID de la persona desaparecida: {!! $desaparecido->id !!}');

	/*************************************************************
	********* función para los toltip's de tratamientos **********S
	**************************************************************/
$(document).ready(function(){
	$('#toggle-dien').click();
    $(function() {
        

        $('#toggle-event').change(function(){
            console.log($(this).val());
            if($(this).val() == 'on'){
                $('a[rel=popover]').popover({
                    html: true,
                    trigger: 'hover',
                    placement: 'bottom',
                    content: function() {
                        return '<img src="' + $(this).data('img') + '" />';
                    }
                });
                $("a[rel=popover]").popover('enable');
                $(this).attr('value','off');
            }else{
                //$("a[rel=popover]").popover('hide');
                $("a[rel=popover]").popover('disable');
                $(this).attr('value','on');
            }
        });
    })

    
    /*function myFunction() {
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
    }*/

    function myFunctionTeeth() {
        var checkBox = document.getElementById("toggle-teeth");
        if (checkBox.checked == true) {
        	swal("NOTA:", "Dar un click en el diente para seleccionarlo; un segundo click para eliminarlo; click en el botón de GUARDAR cuando se haya terminado de seleccionar todos los dientes correspondientes.");
        }
    }
/*
	$(".fancybox").fancybox({
		openEffect: "none",
    	closeEffect: "none"
    });*/

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

	/*var routeIndex = '{!! route('anexoscontroller.index') !!}';
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
      });*/

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
		}else{

            var valor = $(this).attr("value");
            auxTrata = jQuery.grep(auxTrata, function(value) {
              return value != valor;
            });

            console.log(auxTrata);
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
		}else{
            var valor = $(this).attr("value");
            auxEnfer = jQuery.grep(auxEnfer, function(value) {
              return value != valor;
            });

            console.log(auxEnfer);
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
		}else{
            var valor = $(this).attr("value");
            auxHabBuc = jQuery.grep(auxHabBuc, function(value) {
              return value != valor;
            });

            console.log(auxHabBuc);
        }
	});

	/************************************************************************
	******** función para guardar datos de todo el formulario ***************
	************************************************************************/
    $("#idDentaCompleta").change(function(){
        if($(this).val() == 'NO'){
            $('#cardDientes').show();
        }else{
            $('#cardDientes').hide();
        }
    });

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
            dentaCompleta: $("#idDentaCompleta").val(),
			idDesaparecido: '{!! $desaparecido->id !!}',

            idDiente     : $("input[name='dienteselec[]']").map(function(){return $(this).val();}).get(),
            causaPerdida : $("input[name='perdio[]']").map(function(){return $(this).val();}).get(),

            //idDesaparecido: '{!! $desaparecido->id !!}'



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
                
                    location.reload();
                
				
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

        //dientes perdidos
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

	/*$('#btnDiente').click(function(){
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
	});*/
});
</script>
@endsection