@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}
@endsection

@section('titulo', 'Reporte de investigación de una persona desaparecida')

@section('content')

{{ Form::model($cedula, ['action' => 'CedulaController@store']) }}
<div class="card">
	<div class="card-header">
		<h4>Datos de la entrevista
		<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	<i class="fa fa-plus"></i> GUARDAR		
		</button>		
		</h4>
	</div>
	<div class="card-body bg-white">
		<div class="row">
			<div class="col-10">
				<h5>Datos del fiscal</h5>
				<dl class="row">
					<dt class="col-sm-4">Nombre:</dt>
					<dd class="col-sm-8">
						{!! $cedula->entrevistadorNombres !!} 
						{!! $cedula->entrevistadorPrimerAp !!} 
						{!! $cedula->entrevistadorSegundoAp !!} 
					</dd>
					<dt class="col-sm-4">Cargo:</dt>
					<dd class="col-sm-8">
						{!! $cedula->entrevistadorCargo !!}
					</dd>
					@isset($cedula->id)
						<dt class="col-sm-4">Dialecto:</dt>
						<dd class="col-sm-8">
							{!! $cedula->idDialecto !!}
						</dd>
						@if ($cedula->idDialecto == 2)
							<dt class="col-sm-4">Dialecto:</dt>
							<dd class="col-sm-8">
								{!! $cedula->otroDialecto !!}
							</dd>
							<dt class="col-sm-4">Interprete:</dt>
							<dd class="col-sm-8">
								{!! $cedula->interpreteNombres !!} 
								{!! $cedula->interpretePrimerAp !!} 
								{!! $cedula->interpreteSegundoAp !!} 
							</dd>
							<dt class="col-sm-4">Organización o institución:</dt>
							<dd class="col-sm-8">
								{!! $cedula->interpreteOrganizacion !!}
							</dd>
						@endif
						<dt class="col-sm-4">Primera vez que visita el servicio:</dt>
						<dd class="col-sm-8">
							{!! $cedula->entrevistadorPrimeraVez !!}
								@if ($cedula->entrevistadorPrimeraVez == 'NO')
										<strong>(</strong>{!! $cedula->fechaVisita !!}<strong>)</strong>									
								@endif 
						</dd>

					@endisset
				</dl>
			</div>
			<div class="col-2">
				{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
			</div>		
		</div>
		@if (!isset($cedula->id))
			@include('cedula.form_cedula')
		@endif

			

	</div>
</div>	
{!! Form::close() !!}
@endsection