@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
{!! Html::style('personal/css/bootstrap-toggle.min.css') !!}
{!! Html::style('personal/css/jquery-confirm.min.css') !!}
{!! Html::style('personal/css/alertify.min.css') !!}
{!! Html::style('personal/css/sweetalert.css') !!}
{!! Html::style('personal/css/datos_dentales/dentaduraAdult.css') !!}
{!! Html::style('personal/css/datos_dentales/datosDentales.css') !!}
<!-- <link href="../plugins/bootstrap_fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'dentadura'))


<div class="card" id="preDientes">
	<div class="card-header">
		<h5>Datos, tratamientos, higiene & hábitos dentales de la persona desaparecida
			<!-- <a id="mostrarFormulario" class="btn btn-dark pull-right">Editar</a> -->
      <a href="{{route('datos_dentales.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
            Editar </a>    
		</h5>
	</div>
	<div class="card-body">
		<div class="form-group row">
			<div class="col-lg-4 dentadura">
				@if($edad[0] > 14)
              		@include('datosdentales.dentadura_adult')
            	@endif

            	@if($edad[0] <= 6)
              		@include('datosdentales.dentadura_child')
            	@endif

            	@if($edad[0] > 6 && $edad[0] <=14 )
               		@include('datosdentales.dentadura_mixto')
            	@endif
  			</div>
  			<div class="col">
  				<div class="row">
  					<div class="col">
  						<div class="row">
  							<div class="col">
  								<dt>Tamaño de dientes:</dt>
  							</div>
  							<div class="col">
  								<dd id="tamDiente">{!! $denta->cattamanodiente->nombreTamano !!}</dd>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col">
  								<dt>Tipo de perfil:</dt>
  							</div>
  							<div class="col">
  								<dd>{!! $denta->cattipoperfil->nombrePerfil !!}</dd>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col">
  								<dt>Tipo de mordida:</dt>
  							</div>
  							<div class="col">
  								<dd>{!! $denta->cattipomordida->nombreTipoMordida !!}</dd>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col">
  								<dt>Tipo de sonrisa:</dt>
  							</div>
  							<div class="col">
  								<dd>{!! $denta->cattiposonrisa->nombreTipoSonrisa !!}</dd>
  							</div>
  						</div>
              <div class="row">
                <div class="col">
                  <dt>Tratamientos dentales:</dt>
                </div>
                <div class="col">
                    <dd id="tratDientes"></dd>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <dt>Hábitos bucales:</dt>
                </div>
                <div class="col">
                  <dd id="MalosDientes"></dd>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <dt>Higiene bucal:</dt>
                </div>
                <div class="col">
                  <dd id="enfDientes"></dd>
                </div>
              </div>
  					</div>

  					<div class="col">
  						<div class="col">
	  						<dt>Datos del dentista:</dt>
	  					</div><br>
	  					<div class="col">
	  						<p>NOMBRE: {!! $denta->nombres !!} {!! $denta->primerAp !!} {!! $denta->segundoAp !!}</p> 
	  						<p>EMPRESA: {!! $denta->empresa !!}</p> 
	  						<p>TELÉFONO: {!! $denta->telefono !!}</p> 
	  						<p>DIRECCIÓN: {!! $denta->direccion !!}</p>
	  					</div>
  					</div>
  					
  					
  				</div>
  			<hr>
  			<div class="row">
  				<div class="col">
	  				<dt>Dientes perdidos</dt>
	  				<br>
	  				@foreach($dientesPerdidos as $dientePerdido)
	  					<p>{{$dientePerdido->nombreDiente}}</p>

	  				@endforeach
	  			</div>
	  			<div class="col">
	  				<dt>Causa perdida</dt>
	  				<br>
	  				@foreach($dientesPerdidos as $dientePerdido)
	  					<p>{{$dientePerdido->causaPerdida}}</p>

	  				@endforeach
	  			</div>
  			</div>
  				
  			</div>
  			
  			
  			
  		</div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
   var dientes = @JSON("$dientesPerdidos");
    console.log(dientes);
      $.each(JSON.parse(dientes), function(key,value){
        console.log(value.id);
        $('g[data-diente="'+value.id+'"] path').css({"fill":"#17a4da","stroke":"#ffffff","stroke-width":"2-"});
      });

      //asignar tratamiento a una variable
      var trataDient = @JSON($denta);
      var trata = JSON.parse(trataDient.tratamientos);

      var verTrata = "";
      $.each(trata, function(key, value) {
        verTrata = value+", "+verTrata;
      });
      verTrata = verTrata.substring(0, verTrata.length-2);  
     $("#tratDientes").html(verTrata);

     //asignar enfermedades en una variable
     var enf = @JSON($denta);
     var enfDen = JSON.parse(enf.enfermedades);

     var verEnfer = "";
     $.each(enfDen, function(key, value) {
        verEnfer = value+", "+verEnfer;
      });
      verEnfer = verEnfer.substring(0,verEnfer.length-2);
     $("#enfDientes").html(verEnfer);

     //asignar malos habitos en una variable
     var malHab = @JSON($denta);
     var malosHab = JSON.parse(malHab.arraymaloshabitos);

     var verMalosHab = "";
     $.each(malosHab, function(key, value) {
        verMalosHab = value+", "+verMalosHab;
      });
      verMalosHab = verMalosHab.substring(0,verMalosHab.length-2)
     $("#MalosDientes").html(verMalosHab);

	
</script>
@endsection