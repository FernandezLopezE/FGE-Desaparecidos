@extends('layouts.app_uipj')

@section('content')
	@include('desaparecidos.secciones.seccion3_datos_desaparicion')
	@include('desaparecidos.secciones.seccion3_datos_vestimenta')
	<a href="/desaparecido/desaparecido" class='btn btn-large btn-primary openbutton'>Atras</a>
@endsection