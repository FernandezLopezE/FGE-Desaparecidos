@extends('layouts.app_uipj')


@section('content')
<div id="detallehead" class="card-header">

	<div id="tabscarpeta">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active show" data-toggle="tab" href="#tseccion1">Entrevistador</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tseccion2">Desaparecido</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tseccion3">Desaparicion</a>
			</li>
		</ul>
	</div>
	<div class="tab-content" id="contenidotabs">
	    <div class="tab-pane container active show" id="tseccion1">
	    	@include('desaparecidos.seccion1')
	    </div>
	    <div class="tab-pane container" id="tseccion2">
	    	
	    </div>
	    <div class="tab-pane container" id="tseccion3">
	    	@include('desaparecidos.seccion3')
	    </div>
	</div>
</div>

	{{--!! Form::model($desaparecido, ['action' => 'DesaparecidoController@store']) !!}
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

		@include('desaparecidos.seccion1')
		@include('desaparecidos.seccion2')

		@include('desaparecidos.seccion3')
		{!! Form::submit('Agregar datos', ['class' => 'btn btn-large btn-primary openbutton']); !!}
	{!! Form::close() !!--}}

@endsection
