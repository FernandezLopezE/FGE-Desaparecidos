@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'desaparicion'))
<div class="card border-primary">
        <div class="card border-success">
          <div class="card-header"> 
                <h5>Descripción de los hechos
                 <a href="{{route('desaparicion.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
						Editar </a>   
                </h5>
          </div>
        </div>

<div class="card-body bg-white">
	<div class="row">
		<div class="col">
			
			<dl class="row">
					<dt class="col-sm-8">ÚLTIMA FECHA QUE VIERON A LA PERSONA:</dt>
			</dl>
			<dl class="row">
				<dt class="col-sm-4">Día:</dt>
				<dd class="col-sm-8">
					{!!  $datosDesaparicion->desaparicionFecha !!} 
					
				</dd>
				<dt class="col-sm-4">Hora:</dt>
				<dd class="col-sm-8">
					{!!  $datosDesaparicion->desaparicionHora !!} 
					
				</dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-8">ÚLTIMA DIRECCIÓN EN DONDE SE VIO:</dt>
			</dl>
			<dl class="row">
				<dt class="col-sm-4">Calle:</dt>
				<dd class="col-sm-8">
					{!!  $domicilio->calle !!} , {!!  $domicilio->numExterno !!}					
				</dd>
				<dt class="col-sm-4">Colonia:</dt>
				<dd class="col-sm-8">
					{!!  $domicilio->colonia->nombre !!} , CP:{!!  $domicilio->colonia->codigoPostal !!}			
				</dd>
				<dt class="col-sm-4">Código postal:</dt>
				<dd class="col-sm-8">
					{!!  $domicilio->colonia->codigoPostal !!}					
				</dd>
				<dt class="col-sm-4">Lugar:</dt>
				<dd class="col-sm-8">
					{!!  $domicilio->localidad->nombre !!},  {!!  $domicilio->municipio->nombre !!},  {!!  $domicilio->Estado->nombre !!},  					
				</dd>
				<dt class="col-sm-4">Referencia:</dt>
				<dd class="col-sm-8">
					{!!  $desaparecido->cedula->desaparicionRef !!}
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
						{!!  $desaparecido->cedula->nombresAvisto !!} 
						{!!   $desaparecido->cedula->primerApAvisto !!} 
						{!!  $desaparecido->cedula->segundoApAvisto !!}  
					</dd>
					<dt class="col-sm-2">Parentesco:</dt>
					<dd class="col-sm-2">
						{!!  $datosDesaparicion->parentesco !!} 
					</dd>
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">
				<dl class="row">
					<dt class="col-sm-8">DESCRIPCIÓN DE LA DESAPARICIÓN:</dt>
				</dl>
				<dl class="row">
					<dd class="col-sm-12">
						{!!  $datosDesaparicion->desaparicionObservaciones !!} 
					</dd>
					
				</dl>
		</div>
	</div>
	 @if(is_null($desaparecido->cedula->vehiculoPlacas))
			
	@else
			<div class="row">
				<div class="col">
						<dl class="row">
							<dt class="col-sm-8">DESCRIPCIÓN DEL AUTOMÓVIL:</dt>
						</dl>
						<dl class="row">
							<dt class="col-sm-2">Placas:</dt>
							<dd class="col-sm-3">
								{!!  $desaparecido->cedula->vehiculoPlacas !!} 
							</dd>
							<dt class="col-sm-2">Descripción:</dt>
							<dd class="col-sm-5">
								{!!  $datosDesaparicion->vehiculoDescripcion !!} 
							</dd>

							
						</dl>
				</div>
			</div>
	@endif
</div>	
</div>
@endsection