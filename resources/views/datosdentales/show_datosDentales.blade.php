@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'dentadura'))

<div class="card" id="preDientes">
	<div class="card-header">
	<h5>
		Datos, tratamientos, higiene & hábitos dentales de la persona desaparecida
		<a href="#" class="btn btn-dark pull-right">Editar</a>   
	</h5>
	</div>

	<div class="card-body">
		<div class="row">
			<dt class="col-sm-2">Tamaño de dientes:</dt>
			<dd class="col-sm-10" id="tamDiente">{!! $denta->cattamanodiente->nombreTamano !!}</dd>
			<dt class="col-sm-2">Datos del dentista</dt>
			<dd class="col-sm-10" id="datosDent">{!! $denta->nombres !!} {!! $denta->primerAp !!} {!! $denta->segundoAp !!}, EMPRESA {!! $denta->empresa !!}, TELÉFONO {!! $denta->telefono !!}, DIRECCIÓN {!! $denta->direccion !!}</dd>

			<dt class="col-sm-2">Tipo de perfil:</dt>
			<dd class="col-sm-10" id="tPerfil">{!! $denta->cattipoperfil->nombrePerfil !!}</dd>
			<dt class="col-sm-2">Tipo de mordida:</dt>
			<dd class="col-sm-10" id="tMordida">{!! $denta->cattipomordida->nombreTipoMordida !!}</dd>
			<dt class="col-sm-2">Tipo de sonrisa:</dt>
			<dd class="col-sm-10" id="tSonrisa">{!! $denta->cattiposonrisa->nombreTipoSonrisa !!}</dd>
		</div>

		<div class="row">
			<dt class="col-sm-2">Tratamientos dentales:</dt>
			<dd class="col-sm-10" id="tDentales"></dd>
			<dt class="col-sm-2">Hábitos bucales:</dt>
			<dd class="col-sm-10" id="habBucales">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. DISTINCTIO DOLOREMQUE DOLORES</dd>
		</div>

	</div>
</div>
@endsection 