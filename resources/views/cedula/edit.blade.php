@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
{!! Form::model($cedula,
				['method' => 'PATCH',
				'route' => ['cedula.update',
							 $cedula->id
							]
				]) !!}
@include('navs.navs_datos',array('activar' => 'entrevista'))

<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	
		<i class="fa fa-plus"></i> GUARDAR			
</button>
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
			</dl>
		</div>
		<div class="col-2">
			{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
		</div>		
	</div>		
	@include('cedula.form_cedula')
</div>	
{!! Form::close() !!}
@endsection