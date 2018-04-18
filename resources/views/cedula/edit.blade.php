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
		<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">
			@isset($cedula->id)
				<i class="fa fa-plus"></i> EDITAR
			@else
				<i class="fa fa-plus"></i> GUARDAR
			@endisset
		</button>
		<a href="{{route('cedula.edit', ['id' => $cedula->id])}}">login here</a>
		</h4>
	</div>
	<div class="card-body bg-white">
		<div class="row">
			<div class="col-8">
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
				</dl>
			</div>
			<div class="col-2">
				{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
			</div>		
		</div>		
		@include('cedula.form_cedula')
		

			

	</div>
</div>	
{!! Form::close() !!}
@endsection