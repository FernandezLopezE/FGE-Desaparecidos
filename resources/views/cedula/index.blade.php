@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
<div class="card">
	<div class="card-header">
		<h4>Cedulas
	</div>
	<div class="card-body bg-white">
		<table class="table font-weight-light">
			<thead>
				<th>#</th>
				<th>Nombre de la pesona</th>				
				<th>Entrevistador</th>
				<th>Fecha creación</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@forelse ($cedulas as $cedula)
					<tr>
						<th>{!! $cedula->idCedula !!}</th>
						<th>
							@if (isset($cedula->nombres))	
								{!! $cedula->nombres !!} 
								{!! $cedula->primerAp !!} 
								{!! $cedula->segundoAp !!}
							@endif
						</th>
						<th>							
							{!! $cedula->entrevistadorNombres !!} 
							{!! $cedula->entrevistadorPrimerAp !!} 
							{!! $cedula->entrevistadorSegundoAp !!} 
						</th>
						<th>
							{!! \Carbon\Carbon::parse($cedula->created_at )->format('d/m/Y H:m')!!}
						</th>
						<th>
							<a class="btn btn-secondary" href="{{route('cedula.show', ['id' => $cedula->idCedula])}}">
								DETALLE
							</a>

							<a class="btn btn-secondary" href="{{route('boletin.show', ['id' => $cedula->idCedula])}}">

								BOLETIN
							</a>
						</th>
					</tr>					
				@empty
					<tr>
						<th colspan="4">No hay resultados</th>
					</tr>
				@endforelse				
			</tbody>
			
		</table>

	</div>
</div>

@endsection