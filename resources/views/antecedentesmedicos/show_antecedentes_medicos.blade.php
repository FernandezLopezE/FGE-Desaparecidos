@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))
<div class="card border-primary">
<div class="card-body bg-white">
	<div class="row">
		<div class="col">
			<div> 
            	<a href="{{route('desaparicion.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">Editar </a>   
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<dl class="row">
				<dt class="col-sm-4">ENFERMEDADES:</dt>
			
				<dt class="col-sm-4">ADICCIONES:</dt>
			
				<dt class="col-sm-4">INTERVENCIONES QUIRÚRGICAS:</dt>
			</dl>
			<dl class="row">
				<dt class="col-sm-4">ANEXOS:</dt>
			</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">
				<dl class="row">
					<dt class="col-sm-8">ÚLTIMA PERSONA QUE LO VIO:</dt>
				</dl>
				<dl class="row">
					<dt class="col-sm-3">Nombre:</dt>
					<dd class="col-sm-5">
						
					</dd>
					<dt class="col-sm-2">Parentesco:</dt>
					<dd class="col-sm-2">
						
					</dd>
				</dl>
		</div>
	</div>
</div>	
</div>
@endsection