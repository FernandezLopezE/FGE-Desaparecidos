@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}
@endsection

@section('titulo', 'Reporte de investigación de una persona desaparecida')

@section('content')
<div class="card">
	<div class="card-header">
		<h4>Cedulas
	</div>
	<div class="card-body bg-white">
		<table class="table">
			<thead>
				<th>No Cedula</th>
				<th>Entrevistador</th>
				<th>Fecha creación</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@forelse ($cedulas as $cedula)
					<tr>
						<th>{!! $cedula->id !!}</th>
						<th>
							{!! $cedula->entrevistadorNombres !!} 
							{!! $cedula->entrevistadorPrimerAp !!} 
							{!! $cedula->entrevistadorSegundoAp !!} 
						</th>
						<th>
							{!! $cedula->created_at !!}
						</th>
						<th>
							<a href="{{route('cedula.show', ['id' => $cedula->id])}}">
								DETALLE
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