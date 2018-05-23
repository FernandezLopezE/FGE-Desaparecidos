@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'desaparecido'))
<a href="{{route('extraviado.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
	EDITAR
</a> 

<div class="card-body bg-white">
	<div class="row">
		<div class="col-10">
			<dl class="row">
				<dt class="col-sm-4">Ultima Fecha Vista:</dt>
				<dd class="col-sm-8">
					{!!  $datosDesaparicion->desaparicionFecha !!} 
					
				</dd>
				<dt class="col-sm-4">Última persona que lo vio:</dt>
				<dd class="col-sm-8">
					{!!  $desaparecido->cedula->nombresAvisto !!} 
					{!!   $desaparecido->cedula->primerApAvisto !!} 
					{!!  $desaparecido->cedula->segundoApAvisto !!}  
				</dd>
				

			</dl>
		</div>
		<div class="col-2">
			{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
		</div>		
	</div>
</div>	
@endsection