@extends('layouts.app2')

@section('content')
	<h1>Persona desaparecida</h1>
<div class="card flex-md-row mb-4 box-shadow h-md-250">
	<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="/personal/img/avatar.png" data-holder-rendered="true">

	<div class="card-body d-flex flex-column align-items-start">		
		<h3 class="mb-0">
			<a class="text-dark" href="#">
				{!! nombres !!} 
				{!! primerAp !!} 
				{!! segundoAp !!}
			</a>
		</h3>
		<strong class="d-inline-block mb-2 text-primary"><code>Apodo:</code> {!! apodo !!} </strong>
		<div class="mb-1 text-muted"><code>Genero:</code> {!! sexo !!}</div>
		<div class="mb-1 text-muted"><code>Edad de extravio:</code>{!! edadExtravio !!}</div>
		<div class="mb-1 text-muted"><code>Edad aparente:</code>{!! edadAparente !!}</div>
		<div class="mb-1 text-muted"><code>Fecha de nacimiento:</code>{!! \Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!}</div>
	</div>

</div>



<hr class="my-4">



<hr class="my-4">

@endsection