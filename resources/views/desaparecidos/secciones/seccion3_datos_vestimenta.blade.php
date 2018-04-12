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
	</div>
</div>

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		var otroC;
		var otraP;
		$('#nuevaPrenda').click(function(e){
			$('#modalVestimenta').modal('show');
		});

		$("#idColor").change(function() {
			otroC = $('#idColor').val();
			//alert(otroC);

			if (otroC==14) {
				$("#otroColor").show();
			}else{
				$("#otroColor").hide();
			}
		});

		$("#idColor2").change(function() {
			otroCo = $('#idColor2').val();
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

	});
</script>
@endsection