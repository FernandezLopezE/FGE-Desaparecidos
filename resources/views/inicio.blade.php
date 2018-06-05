@extends('layouts.app_uipj')

@section('css')
	{!! Html::style('') !!}
@endsection

@section('content')
	
	<div style="width:85%; margin: 0 auto;">
	    {!! $chartjs->render() !!}
	</div>
	
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
@endsection