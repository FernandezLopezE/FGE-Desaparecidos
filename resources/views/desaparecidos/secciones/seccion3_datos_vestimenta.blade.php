@section('css')
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
	
@endsection
<hr>
<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos de la vestimenta
		<button type="button" class="btn btn-dark pull-right"  id="nuevaPrenda"><i class="fa fa-plus"></i> AGREGAR PRENDA</button>
		</h5>
	</div>
	<div class="card-body">	
	@include('includes.modalVestimenta')
	<table id="tableInformantes" ></table>
	</div>
</div>

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		var otroC;
		var otraP;
		var tipoV;
		var tipoCal;
		$('#nuevaPrenda').click(function(e){
			$('#modalVestimenta').modal('show');
		});

		$("#prendaColor").change(function() {
			otroC = $('#prendaColor').val();
			//alert(otroC);

			if (otroC==14) {
				$("#otroColor").show();
			}else{
				$("#otroColor").hide();
			}
		});

		$("#idColor").change(function() {
			otroCo = $('#idColor').val();
			//alert(otroC);

			if (otroCo==14) {
				$("#otroColor2").show();
			}else{
				$("#otroColor2").hide();
			}
		});

		$("#idMarca").change(function() {
			otraP = $('#idMarca').val();
			
			if (otraP==26) {
				$("#otraPrenda").show();
			}else{
				$("#otraPrenda").hide();
			}
		});

		$("#idVestimenta").change(function() {
			tipoV = $('#idVestimenta').val();

			if (tipoV==9) {
				$("#FormularioVestimenta").hide();
			}else{
				$("#FormularioVestimenta").show();
			}
		});

		$("#idTipo").change(function() {
			tipoCal = $('#idTipo').val();
			if (tipoCal==1) {
				$("#FormularioCalzado").hide();
			}else{
				$("#FormularioCalzado").show();
			}
		});

	});
</script>
@endsection