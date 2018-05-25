@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))


 <div class="card-header"> 
                <h5>ANTECEDENTES MÉDICOS
                 <a href="{{route('desaparicion.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
						EDITAR </a>   
                </h5>
          </div>

<div class="card-body bg-white">
	
				
	
	<div class="row">
		<div class="col">
				<dl class="row">
					<dt class="col-sm-8">ÚLTIMA PERSONA QUE LO VIO:</dt>
				</dl>
				<dl class="row">
					<dt class="col-sm-3">Nombre:</dt>
					<dd class="col-sm-5">
						{!!  NOMBRE !!} 
						{!!   NOMBRE !!} 
						{!!  NOMBRE !!}  
					</dd>
					<dt class="col-sm-2">Parentesco:</dt>
					<dd class="col-sm-2">
						{!!  $datosDesaparicion->parentesco !!} 
					</dd>
				</dl>
		</div>
	</div>
	
	 {{--@if(is_null($desaparecido->cedula->vehiculoPlacas))
			
	@else
			<div class="row">
				<div class="col">
						<dl class="row">
							<dt class="col-sm-8">DESCRIPCIÓN DEL AUTOMÓVIL:</dt>
						</dl>
						<dl class="row">
							<dt class="col-sm-2">Placas:</dt>
							<dd class="col-sm-3">
								{!!  placas !!} 
							</dd>
							<dt class="col-sm-2">Descripcion:</dt>
							<dd class="col-sm-5">
								{!!  descripcion!!} 
							</dd>

							
						</dl>
				</div>
			</div>
	@endif--}}
</div>	
@endsection