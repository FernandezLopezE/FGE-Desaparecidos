@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
<div class="card">
	<div class="card-header">
		<h4>Cedulas
	</div>
	<div class="card-body bg-white">
		<table class="table font-weight-light">
			<thead>
				<th>#</th>				
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
							{!! \Carbon\Carbon::parse($cedula->created_at )->format('d/m/Y H:m')!!}
						</th>
						<th>
							<a class="btn btn-secondary" href="{{route('cedula.show', ['id' => $cedula->id])}}">
								DETALLE
							</a>

							<a class="btn btn-secondary" href="{{route('boletin.show', ['id' => $cedula->id])}}">

								BOLETIN
							</a>
							<a class="btn btn-secondary" href="{{route('mail.enviar', ['id' => $cedula->id])}}">

								CORREO
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