@extends('layouts.app2')

@section('content')
	<h1>Persona desaparecida</h1>
<div class="card flex-md-row mb-4 box-shadow h-md-250">
	<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="/personal/img/avatar.png" data-holder-rendered="true">

	<div class="card-body d-flex flex-column align-items-start">		
		<h3 class="mb-0">
			<a class="text-dark" href="#">
				{!! $desaparecido->persona->nombres !!} 
				{!! $desaparecido->persona->primerAp !!} 
				{!! $desaparecido->persona->segundoAp !!}
			</a>
		</h3>
		<strong class="d-inline-block mb-2 text-primary"><code>Apodo:</code> {!! $desaparecido->apodo !!} </strong>
		<div class="mb-1 text-muted"><code>Genero:</code> {!! $desaparecido->persona->sexo !!}</div>
		<div class="mb-1 text-muted"><code>Edad de extravio:</code>{!! $desaparecido->edadExtravio !!}</div>
		<div class="mb-1 text-muted"><code>Edad aparente:</code>{!! $desaparecido->edadAparente !!}</div>
		<div class="mb-1 text-muted"><code>Fecha de nacimiento:</code>{!! \Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!}</div>
		<div class="mb-1 text-muted"><code>Estado civil: </code>{!! $desaparecido->edocivil->nombre !!}</div>
		<div class="mb-1 text-muted"><code>Nacionalidad: </code>{!! $desaparecido->persona->nacionalidad->nombre !!}</div>
		<div class="mb-1 text-muted"><code>Escolaridad: </code>{!! $desaparecido->escolaridad->nombre !!}</div>
		<div class="mb-1 text-muted"><code>Ocupación: </code>{!! $desaparecido->ocupacion->nombre !!}</div>
		@foreach ($desaparecido->documentos as $documento)
			<div class="mb-1 text-muted"><code>Documento de identidad: </code>{!! $documento->identificacion !!} {!! $documento->otraIdentificacion !!}</div>
			<div class="mb-1 text-muted"><code>No Identificación: </code>{!! $documento->numIdentificacion !!}</div>
		@endforeach

	</div>

</div>

<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">Familiares:</h5>		
	</div>
	<div class="card-body">
		<table class="table">			
			<thead>
				<tr>
					<th>Parentesco</th>
					<th>Nombre completo</th>
					<th>Edad</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($desaparecido->familiares as $familiar)
					<tr>
						<td>
							{!! $familiar->parentesco !!}
						</td>
						<td>
							{!! $familiar->nombres !!} 
							{!! $familiar->primerAp !!} 
							{!! $familiar->segundoAp !!}
						</td>
						<td>
							{!! $familiar->edad !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>

<hr class="my-4">

<div class="card border-primary">
	<div class="card-header">
		<h5 class="card-title">Domicilios:</h5>		
	</div>
	<div class="card-body">

		<table class="table">			
			<thead>
				<tr>
					<th>Tipo</th>
					<th>Dirección</th>
					<th>Estado</th>
					<th>Municipio</th>
					<th>Localidad</th>
					<th>Colonia</th>
					<th>CP</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($desaparecido->domicilios as $domicilio)
					<tr>
						<td>
							{!! $domicilio->tipodireccion !!}
						</td>
						<td>
							{!! $domicilio->calle !!} 
							{!! $domicilio->numExterno !!} 
							{!! $domicilio->numInterno !!}
						</td>
						<td>
							{!! $domicilio->estado->nombre !!}
						</td>
						<td>
							{!! $domicilio->municipio->nombre !!}
						</td>
						<td>
							{!! $domicilio->localidad->nombre !!}
						</td>
						<td>
							{!! $domicilio->colonia->nombre !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<hr class="my-4">

@endsection