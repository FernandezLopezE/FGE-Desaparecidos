@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link" href="#" aria-selected="true">
				Entrevista
			</a>
			<a class="nav-item nav-link" href="{{route('informante.show',['id' => $desaparecido->idCedula])}}" aria-selected="false">
				Informantes
			</a>
			<a class="nav-item nav-link active" href="#" aria-selected="false">
				Desaparecido
			</a>
			<a class="nav-item nav-link" href="{{route('familiar.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Familiares
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Domicilios
			</a>
			<a class="nav-item nav-link" href="#" aria-selected="false">
				Antecedentes
			</a>				
	</div>
</nav>
<a href="{{route('extraviado.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
	EDITAR
</a> 

<div class="card-body bg-white">
	<div class="row">
		<div class="col-10">
			<dl class="row">
				<dt class="col-sm-4">Nombres:</dt>
				<dd class="col-sm-8">
					{!! $desaparecido->persona->nombres !!} 
					{!! $desaparecido->persona->primerAp !!} 
					{!! $desaparecido->persona->segundoAp !!} 
				</dd>
				<dt class="col-sm-4">Apodo:</dt>
				<dd class="col-sm-8">
					{!! $desaparecido->apodo !!}
				</dd>
				<dt class="col-sm-4">Género:</dt>
				<dd class="col-sm-8">
					@switch($desaparecido->persona->sexo)
						@case('M')
							MUJER
							@break
						@case('H')
							HOMBRE
							@break
						@default
							NO DEFINIDO
					@endswitch
				</dd>
				<dt class="col-sm-4">Nacionalildad:</dt>
				<dd class="col-sm-8">{!! $desaparecido->persona->nacionalidad->nombre !!} </dd>
				<dt class="col-sm-4">Estado natal:</dt>
				<dd class="col-sm-8">{!! $desaparecido->persona->estado->nombre !!} </dd>
				<dt class="col-sm-4">Fecha nacimiento:</dt>
				<dd class="col-sm-8">{!! Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!} </dd>
				<dt class="col-sm-4">Edad de extravio:</dt>
				<dd class="col-sm-8">{!! $desaparecido->edadExtravio !!} </dd>
				<dt class="col-sm-4">Edad aparente:</dt>
				<dd class="col-sm-8">{!! $desaparecido->edadAparente !!} </dd>
				<dt class="col-sm-4">CURP:</dt>
				<dd class="col-sm-8">{!! $desaparecido->persona->curp !!} </dd>
				<dt class="col-sm-4">Escolaridad:</dt>
				<dd class="col-sm-8">{!! $desaparecido->escolaridad->nombre !!} </dd>
				<dt class="col-sm-4">Ocupacion:</dt>
				<dd class="col-sm-8">{!! $desaparecido->ocupacion->nombre !!}</dd>
				<dt class="col-sm-4">Identificación:</dt>
				<dd class="col-sm-8">{!! $desaparecido->documento->nombre !!}</dd>
				@if ($desaparecido->idDocumentoIdentidad === '7')
					<dt class="col-sm-4">Otra identificación:</dt>
					<dd class="col-sm-8">{!! $desaparecido->otroDocIdentidad !!}</dd>
				@endif
				<dt class="col-sm-4">Número de identificación:</dt>
				<dd class="col-sm-8">{!! $desaparecido->numDocIdentidad !!}</dd>
				<dt class="col-sm-4">Estado civil:</dt>
				<dd class="col-sm-8">{!! $desaparecido->edocivil->nombre !!} </dd>
				@if ($desaparecido->persona->sexo === 'M')
					<dt class="col-sm-4">Embarazada:</dt>
					<dd class="col-sm-8">{!! $desaparecido->embarazo !!}</dd>
					<dt class="col-sm-4">Periodo:</dt>
					<dd class="col-sm-8">{!! $desaparecido->numGestacion !!} {!! $desaparecido->tipoGestacion !!}</dd>
					<dt class="col-sm-4">Por menores:</dt>
					<dd class="col-sm-8">{!! $desaparecido->pormenores !!}</dd>
				@endif

			</dl>
		</div>
		<div class="col-2">
			{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
		</div>		
	</div>
</div>	
@endsection