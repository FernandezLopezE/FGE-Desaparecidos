@section('css')
<style type="text/css">
    .modal-lg {
    	max-width: 80%;
    }
    .carousel-inner img {
    	width: 90%;
    	max-height: 450px;
    }
</style>
@endsection

@extends('layouts.app_uipj')

@section('content')
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link" href="#" aria-selected="true">
        Entrevista
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Informantes
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Desaparecido
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Familiares
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Contacto
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Domicilios
      </a>
      <a class="nav-item nav-link " href="#" aria-selected="false">
        Antecedentes
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Vestimenta
      </a>
      <a class="nav-item nav-link" href="#" aria-selected="false">
        Descripción física
      </a>
      <a class="nav-item nav-link" href="{{route('antecedentesmedicos.show',['id' => $desaparecido->id])}}" aria-selected="false">
        Antecedentes medicos
      </a>
      <a class="nav-item nav-link" href="{{route('senas_particulares.show',['id' => $desaparecido->id])}}" aria-selected="false">
        Señas particulares
      </a>
      <a class="nav-item nav-link active"" href="#" aria-selected="false">
        Datos dentales
      </a>        
  </div>
	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="card-title">DATOS DENTALES DE LA PERSONA DESAPARECIDA</h5>	
				</div>
				<div class="col">
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
					{!! Form::label ('dienteComplet','Dientes completos:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dienteCompleto'] ) !!}
				</div>
				<div class="col-4">
					{!! Form::label ('atencionOdonto','Alguna vez asistió al dentista:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'atencionOdonto'] ) !!}
				</div>
				<div id="infoDen" class="col-4">
					{!! Form::label ('infoDentista','Tiene información del dentista:') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'infoDentista'] ) !!}
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
				<div class="col-md-12">
					<h5>¿Tuvo algún tratamiento en los dientes?:</h5>
				</div>
				<div class="col">
					{!! Form::checkbox('AMALGAMA', '2') !!}
					{!! Form::label ('AMALGAMA','AMALGAMA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('BLANQUEAMIENTO DENTAL', '3') !!}
					{!! Form::label ('BLANQUEAMIENTO DENTAL','BLANQUEAMIENTO DENTAL') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('BRACKETS', '4') !!}
					{!! Form::label ('BRACKETS','BRACKETS') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('CARILLA', '5') !!}
					{!! Form::label ('CARILLA','CARILLA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('CORONA ESTETICA', '6') !!}
					{!! Form::label ('CORONA ESTETICA','CORONA ESTETICA') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					{!! Form::checkbox('ENDODONCIA', '7') !!}
					{!! Form::label ('ENDODONCIA','ENDODONCIA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('IMPLANTE', '8') !!}
					{!! Form::label ('IMPLANTE','IMPLANTE') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('OBTURACIÓN TEMPORAL', '9') !!}
					{!! Form::label ('OBTURACIÓN TEMPORAL','OBTURACIÓN TEMPORAL') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('PROTESIS FIJA', '10') !!}
					{!! Form::label ('PROTESIS FIJA','PROTESIS FIJA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('PROTESIS REMOVIBLE', '11') !!}
					{!! Form::label ('PROTESIS REMOVIBLE','PROTESIS REMOVIBLE') !!}
				</div>
			</div>
			<div class="form-group row">
				<div class="col">
					{!! Form::checkbox('PROTESIS TOTAL', '12') !!}
					{!! Form::label ('PROTESIS TOTAL','PROTESIS TOTAL') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('RESINA', '13') !!}
					{!! Form::label ('RESINA','RESINA') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('RETENEDOR', '14') !!}
					{!! Form::label ('RETENEDOR','RETENEDOR') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('SELLADOR FS', '15') !!}
					{!! Form::label ('SELLADOR FS','SELLADOR FS') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('OTRO', '1', '16') !!}
					{!! Form::label ('OTRO','OTRO') !!}
				</div>
			</div>
			<div id="otroTrata" class="form-group row">
				<div class="col-md-12" >
					{!! Form::label ('especifique','Especifique:') !!}
					{!! Form::text ('tratamiento',old('tratamiento'), ['class' => 'form-control mayuscula', 'id' => 'otroTratamiento',] )!!}
				</div>
			</div><hr>
			
			<h5>Sabe usted si su familiar:</h5>
			<div class="form-group row">
                <div class="col-md-2">
                    {!! Form::label ('perdio','¿Perdio algún diente?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'dientePerdido'] ) !!}
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
			
			<h5>Sabe usted si su familiar:</h5>
			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('higieneBuc','Presenta buena higiene bucal') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'higieneBucal'] ) !!}
				</div>
				<div id="Describa1" class="col">
					{!! Form::label ('higieneBu','Describa') !!}
					{!! Form::text ('describaHB',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'describahb',] )!!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('tieneCarie','¿Tiene caries?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tieneCaries'] ) !!}
				</div>
				<div id="Describa2" class="col">
					{!! Form::label ('nombreDiente','¿En dónde? Describa') !!}
					{!! Form::text ('tieneCarie',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'DescribaCaries',] )!!}
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-4">
					{!! Form::label ('nombreAbcesos','¿Tiene abscesos?') !!}
					{!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'nombreAbceso'] ) !!}
				</div>
				<div id="Describa3" class="col">
					{!! Form::label ('descAbcesos','¿En dónde? Describa') !!}
					{!! Form::text ('describaAbceso',old('Describa'), ['class' => 'form-control mayuscula', 'id' => 'describeAbceso',] )!!}
				</div>
			</div>

			<div class="form-group">
				<div>
					{!! Form::label ('duda','El desaparecido presentaba:') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('SARRO', 'SARRO') !!}
					{!! Form::label ('SARRO','SARRO') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('GINGIVITIS', 'GINGIVITIS') !!}
					{!! Form::label ('GINGIVITIS','GINGIVITIS') !!}
				</div>
				<div class="col">
					{!! Form::checkbox('PERIODONTITIS', 'PERIODONTITIS') !!}
					{!! Form::label ('PERIODONTITIS','PERIODONTITIS') !!}
				</div>
			</div><hr>

			<h5>Malos hábitos</h5>
            <div class="form-group row">
                <div class="col-md-4">
                    {!! Form::label ('habitos','¿Su familiar tenía malos hábitos?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'malosHabitos'] ) !!}
                </div><br>
                <div class="col-md-2" id="morderuna">
                	{!! Form::checkbox('MORDERSE LAS UÑAS', 'MORDERSE LAS UÑAS') !!}
                    {!! Form::label ('MORDERSE LAS UÑAS','MORDERSE LAS UÑAS') !!}
                </div>
                <div class="col-md-2" id="morderobjeto">
                	{!! Form::checkbox('MORDER ALGÚN OBJETO', 'MORDER ALGÚN OBJETO') !!}
                    {!! Form::label ('MORDER ALGÚN OBJETO','MORDER ALGÚN OBJETO') !!}
                </div>
                <div class="col-md-1" id="otrohabito">
                	{!! Form::checkbox('OTRO', 'OTRO') !!}
                    {!! Form::label ('OTRO','OTRO') !!}
                </div>
                <div class="col-md-3" id="especifiquehabito">
                    {!! Form::text ('otro',old('otro'), ['class' => 'form-control mayuscula', 'id' => 'escpecifiquehabito', 'placeholder' => 'ESPECIFIQUE'] )!!}
                </div>
            </div><hr>

            <h5>Tipo de perfil</h5>
            <div class="form-group row">
                <div class="col-md-4">
                    {!! Form::label ('perdio','¿Conoce qué tipo de perfil tiene su familiar?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'perfil'] ) !!}
                </div>
                <div class="col-md-2" id="tipoperfil">
                    {!! Form::label ('selectperfil','Seleccionar perfil') !!}
                    {!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectPerfil']) !!}
                    @include('includes.modal_perfilDiente')
                </div>
                <div class="col-md-6" id="perfilseleccionado">
                    {!! Form::label ('nombreDiente','Perfil seleccionado') !!}
                    {!! Form::text ('nombres',old('nombres'), ['class' => 'form-control mayuscula', 'id' => 'nombres',] )!!}
                </div>
            </div><hr>

            <h5>Tipo de mordida</h5>
            <div class="form-group row">
                <div class="col-md-4">
                    {!! Form::label ('perdio','¿Conoce qué tipo de mordida tiene su familiar?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tipmordida'] ) !!}
                </div>
                <div class="col-md-2" id="tipomordida">
                    {!! Form::label ('selectMordida','Seleccionar mordida') !!}
                    {!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectMordida']) !!}
                    @include('includes.modal_tipoMordida')
                </div>
                <div class="col-md-6" id="mordidaseleccionada">
                    {!! Form::label ('nombreDiente','Tipo de mordida seleccionada') !!}
                    {!! Form::text ('nombres',old('nombres'), ['class' => 'form-control mayuscula', 'id' => 'nombres',] )!!}
                </div>
            </div><hr>            

            <h5>Tipo de sonrisa</h5>
            <div class="form-group row">
                <div class="col-md-4">
                    {!! Form::label ('perdio','¿Conoce qué tipo de sonrisa tiene su familiar?') !!}
                    {!! Form::select('size', array('SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'SÍ' => 'SÍ', 'NO' => 'NO'), '', ['class' => 'form-control', 'id' => 'tiposonrisa'] ) !!}
                </div>
                <div class="col-md-2" id="selecsonrisa">
                    {!! Form::label ('selectSonrisa','Seleccionar sonrisa') !!}
                    {!! Form::submit('Click aquí', ['class' => 'form-control btn btn-outline-secondary', 'id' => 'selectSonrisa']) !!}
                    @include('includes.modal_tipoSonrisa')
                </div>
                <div class="col-md-6" id="sonrisaseleccionada">
                    {!! Form::label ('nombreDiente','Tipo de sonrisa seleccionada') !!}
                    {!! Form::text ('nombres',old('nombres'), ['class' => 'form-control mayuscula', 'id' => 'nombres',] )!!}
                </div>
            </div><hr>
		</div>
	</div>
<body>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function()
	{

	/**********************************************************************
	*** Declaración de variables a usar de los campos en el formulario ****
	***********************************************************************/

		var atencion,infoden,higieneB, cariesB, dientePerdido, malosHabitos,
			 perfil, tipmordida, tiposonrisa;

	/**********************************************************************
	*** Inicia segmento para ocultar y/o mostrar campos en el formulario***
	**********************************************************************/
		
		$('#infoDen').hide();
		$('#targetDentista').hide();
		$('#Describa1').hide();
		$('#Describa2').hide();
		$('#Describa3').hide();
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

		$('#atencionOdonto').change(function() {
			atencion = $('#atencionOdonto').val();
			if (atencion == 'SÍ') {
				$('#infoDen').show();
			}else{
				$('#infoDen').hide();
				$('#targetDentista').hide();
			}
		});

		$('#infoDentista').change(function() {
			ifoden = $('#infoDentista').val();
			if (ifoden == 'SÍ') {
				$('#targetDentista').show();
				$('#dentistahr').show();
			}else{
				$('#targetDentista').hide();
				$('#dentistahr').hide();
			}
		});

		$('#higieneBucal').change(function(){
			higieneB = $('#higieneBucal').val();
			if (higieneB == 'NO') {
				$('#Describa1').show();
			}else{
				$('#Describa1').hide();
			}
		});

		$('#tieneCaries').change(function(){
			cariesB = $('#tieneCaries').val();
			if (cariesB == 'NO' || cariesB == 'SIN INFORMACIÓN') {
				$('#Describa2').hide();
			}else{
				$('#Describa2').show();
			}
		});

		$('#nombreAbceso').change(function(){
			cariesB = $('#nombreAbceso').val();
			if (cariesB == 'NO' || cariesB == 'SIN INFORMACIÓN') {
				$('#Describa3').hide();
			}else{
				$('#Describa3').show();
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
				$('#selecsonrisa').hide();
				$('#sonrisaseleccionada').hide();
			}else{
				$('#selecsonrisa').show();
				$('#sonrisaseleccionada').show();
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

		diente26 = $('#diente26').attr("value");
		$('#diente26').click(function(event) {  
			$("#mostrar").val(diente26);
		});    

		diente25 = $('#diente25').attr("value");
		$('#diente25').click(function(event) {
			$("#mostrar").val(diente25);
		});    

		diente24 = $('#diente24').attr("value");
		$('#diente24').click(function(event) {
   			$("#mostrar").val(diente24);
   		});    

   		diente23 = $('#diente23').attr("value");
   		$('#diente23').click(function(event) {
   			$("#mostrar").val(diente23);
   		});    

   		diente22 = $('#diente22').attr("value");
   		$('#diente22').click(function(event) {
   			$("#mostrar").val(diente22);
   		});    

   		diente21 = $('#diente21').attr("value");
   		$('#diente21').click(function(event) {
   			$("#mostrar").val(diente21);
   		});    

   		diente11 = $('#diente11').attr("value");
   		$('#diente11').click(function(event) {
   			$("#mostrar").val(diente11);
   		});    

   		diente12 = $('#diente12').attr("value");
   		$('#diente12').click(function(event) {
   			$("#mostrar").val(diente12);
   		});    

   		diente13 = $('#diente13').attr("value");
   		$('#diente13').click(function(event) {
   			$("#mostrar").val(diente13);
   		});    

   		diente14 = $('#diente14').attr("value");
   		$('#diente14').click(function(event) {
   			$("#mostrar").val(diente14);
   		});    

   		diente15 = $('#diente15').attr("value");
   		$('#diente15').click(function(event) {
   			$("#mostrar").val(diente15);
   		});    

   		diente16 = $('#diente16').attr("value");
   		$('#diente16').click(function(event) {
   			$("#mostrar").val(diente16);
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
		**** función para guardar los datos del formulario **********************
		************************************************************************/
		datosDentales.click(function()
		{
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
				dienteTamano : $("#dienteTamano").val(),
			};
			$.ajax({
				type: 'POST',
				url: 'desaparecido/store_datos_dentales',
				data: dataString,
				dataType: 'json',
				success: function(data){

				},
				error: function(data){
					
				}
			});
		});
	});
</script>
@endsection