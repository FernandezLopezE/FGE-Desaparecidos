@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('content')
<div class="card">
	<div class="card-header">
		<h4>Datos de la persona desaparecida
			<a href="{{route('informante.show',['id' => $desaparecido->idCedula])}}" class="btn btn-dark pull-right">
				<i class="fa fa-pencil-square-o"></i> ATRAS
			</a>		
		</h4>
	</div>
	<div class="card-body bg-white">
		<div class="row">
			<div class="col-10">
				<dl class="row">
					<dt class="col-sm-4">Nombre:</dt>
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
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Nacionalildad:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Estado natal:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Fecha nacimiento:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Edad de extravio:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Edad aparente:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">CURP</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Escolaridad</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Ocupacion</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Identificación:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Número de identificación:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Otra identificación:</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Embarazada</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Rumores</dt>
					<dd class="col-sm-8"></dd>
					<dt class="col-sm-4">Estado civil:</dt>
					<dd class="col-sm-8"></dd>
				</dl>
			</div>
			<div class="col-2">
				{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
			</div>		
		</div>
	</div>
</div>	
@endsection