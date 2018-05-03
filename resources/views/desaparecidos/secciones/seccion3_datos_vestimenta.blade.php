@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
</style>
	
@endsection
@section('content')
@include('navs.navs_datos',array('activar' => 'vestimenta'))

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
</div><hr>

<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">Datos del calzado
		<button type="button" class="btn btn-dark pull-right"  id="nuevoZapato"><i class="fa fa-plus"></i> AGREGAR CALZADO</button>
		</h5>
	</div>
	<div class="card-body">	
		@include('includes.modalCalzado')
		<table id="tableCalzado" ></table>
	</div>
</div><hr>

<div class="card border-success">
	<div class="card-header">
		<h5 class="card-title">ACCESORIOS Y OBJETOS
		    <button type="button" class="btn btn-dark pull-right"  id="nuevoAccesorio"><i class="fa fa-plus"></i> AGREGAR ACCESORIO</button>
		</h5>
	</div>
	<div class="card-body">
	<div class="card-body">	
		@include('includes.modalAccesorios')
		<table id="tableAccesorios" ></table>
	</div>
	<div class="row">
                <div class="col">
                  <h5 class="card-title">Observaciones:</h5>    
                  {!! Form::textarea  ('descripcionVestimenta',old('Descripción vestimenta'), ['class' => 'form-control mayuscula', 'id' => 'descripcionVestimenta','size' => '30x4', 'data-validation' =>'required','data-validation-error-msg-required' =>'Ingrese las observaciones de la vestimenta'])!!}
                </div>
              </div>
	
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		var otroC;
		var otraP;
		var tipoV;
		var tipoCal;
		var otroTipoZ;
		var otroCo;
	//Vista de datos de la vestimenta
		$('#nuevaPrenda').click(function(e){
			$('#modalVestimenta').modal('show');
			$('#btnActualizarP').hide();
			$('#btnPrenda').show();
		});
		$("#prendaColor").change(function() {
			otroC = $('#prendaColor').val();
			//alert(otroC);
			if (otroC==15) {
				$("#otroColor").show();
			}else{
				$("#otroColor").hide();
			}
		});
		$("#idColor").change(function() {
			otroCo = $('#idColor').val();
			//alert(otroC);
			if (otroCo==15) {
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
		/*$("#idVestimenta").change(function() {
			tipoV = $('#idVestimenta').val();
			if (tipoV==9) {
				$("#FormularioVestimenta").hide();
			}else{
				$("#FormularioVestimenta").show();
			}
		});*/
		var table = $('#tableInformantes');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editPrenda"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
		window.operateEvents = {
			'click #editPrenda': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idPrenda').val(row.id);
				$('#nombrePrenda').val(row.tipo);
				$('#prendaMaterial').val(row.material);
				$('#prendaColor').val(row.pColor);
				$('#colorPrenda').val(row.otroC);
				$('#prendaDibujoBordadoFranjas').val(row.dibujo);
				$('#prendaMarcaOrigen').val(row.marca);
				$('#prendaTalla').val(row.talla);
				$("#btnActualizarP").show();
				$("#btnPrenda").hide();
				$("#modalVestimenta").modal("show");
			}
		}
		$('#nuevoInformante').click(function(e){
			$('#modalGeneral').modal('show');
		})
		table.bootstrapTable({				
			url: routeIndex+'/get_prendas/{{$id}}',
			columns: [{					
				field: 'id',
				title: 'ID',
			}, {					
				field: 'tipo',
				title: 'Nombre',
			}, {					
				field: 'color',
				title: 'Color',
			}, {					
				field: 'material',
				title: 'Material',
			}, {					
				field: 'dibujo',
				title: 'Dibujo/Bordado/Franjas',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
		
	//Fin de Vista de datos de la vestimenta
	//Vista de datos de calzado
		$('#nuevoZapato').click(function(e){
			$('#modalCalzado').modal('show');
		});
		$("#idTipo").change(function() {
			tipoCal = $('#idTipo').val();
			if (tipoCal==1) {
				$("#FormularioCalzado").hide();
			}else{
				$("#FormularioCalzado").show();
			}
		});
		$("#idTipo").change(function() {
			otroTipoZ = $('#idTipo').val();
			if (otroTipoZ==8) {
				$("#otroZapato").show();
				
			}else{
				$("#otroZapato").hide();
			}
		});
		var table2 = $('#tableCalzado');
		var routeIndex = '{!! route('consultas.index') !!}';	
		
		var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editCalzado"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
		window.operateEvents = {
			'click #editCalzado': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idTipo').val(row.cTipo);
				$('#otroCalzado').val(row.oCalzado);
				$('#idColor').val(row.cColor);
				$('#otroColorCalzado').val(row.ocCalzado);
				$('#modeloCalzado').val(row.modelo);
				$('#idMarca').val(row.cMarca);
				$('#otraMarca').val(row.oMarca);
				$('#calzadoTalla').val(row.talla);
				$("#modalCalzado").modal("show");
			}
		}
		$('#nuevoInformante').click(function(e){
			$('#modalGeneral').modal('show');
		})
		table2.bootstrapTable({				
			url: routeIndex+'/get_calzado/{{$id}}',
			columns: [{					
				field: 'nombretipo',
				title: 'Tipo calzado',
			}, {					
				field: 'nombremarca',
				title: 'Marca',
			}, {					
				field: 'modelo',
				title: 'Modelo',
			}, {					
				field: 'nombrecolor',
				title: 'Color',
			}, {					
				field: 'talla',
				title: 'talla',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
	//Fin de vista de datos de calzado
	//----
        
	//Vista de datos de accesorios
        
        var table3 = $('#tableAccesorios');
		var routeIndex3 = '{!! route('consultas.index') !!}';
        
        var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-info btn-xs edit" id="editAccesorio"><i class="fa fa-edit"></i>&nbsp;Editar</button>';	
			
			return [btn].join('');
		};
        window.operateEvents = {
			'click #editAccesorio': function (e, value, row, index) {					
				console.log(row);
				//bodyModal.empty();
				$('#idAccesorio').val(row.id);
				$('#accesoriosObjetos').val(row.tipo);
				$('#accesorioMaterial').val(row.material);
				$('#accesorioColor').val(row.pColor);
				$('#accesorioColorOtro').val(row.otroC);
				$('#accesorioMarcaOrigen').val(row.marca);
				$("#btnActualizarA").show();
				$("#btnAccesorio").hide();
				$("#modalAccesorios").modal("show");
			}
		}
        
		$('#nuevoAccesorio').click(function(e){
			$('#modalAccesorios').modal('show');
			$('#btnActualizarA').hide();
			$('#btnAccesorio').show();
		});  
        
        $('#btnAccesorio').click (function(){
		//alert("hola");
		var dataString = {
			
			//prendaTipo: $('#idVestimenta').val(),
            accesoriosObjetos: $('#accesoriosObjetos').val(),
            accesorioMaterial: $('#accesorioMaterial').val(),
            accesorioColor: $('#accesorioColor').val(),
            accesorioColorOtro: $('#accesorioColorOtro').val(),
            accesorioMarcaOrigen: $('#accesorioMarcaOrigen').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/store_accesorios',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table3.bootstrapTable('refresh');
				$("#modalAccesorios").modal("hide");
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
        $('.modal-footer').on('click','#btnActualizarA', function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			accesoriosObjetos: $('#accesoriosObjetos').val(),
            accesorioMaterial: $('#accesorioMaterial').val(),
            accesorioColor: $('#accesorioColor').val(),
            accesorioColorOtro: $('#accesorioColorOtro').val(),
            accesorioMarcaOrigen: $('#accesorioMarcaOrigen').val(),
			idCedula: $("#idCedula").val(),
			idAccesorio: $("#idAccesorio").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_accesorios',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table3.bootstrapTable('refresh');
				$("#modalAccesorios").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
        
       		table3.bootstrapTable({				
			url: routeIndex3+'/get_accesorios/{{$id}}',
			columns: [{					
				field: 'id',
				title: 'ID',
			}, {					
				field: 'tipo',
				title: 'Nombre',
			}, {					
				field: 'color',
				title: 'Color',
			}, {					
				field: 'material',
				title: 'Material',
			},{					
				field: 'marca',
				title: 'Marca',
			}, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		}) 
        
        
        
    //FIN DEL APARTADO DE ACCESORIOS
        
        
		$('#btnPrenda').click (function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			nombrePrenda: $('#nombrePrenda').val(),
			prendaMaterial: $('#prendaMaterial').val(),
			prendaColor: $('#prendaColor').val(),
			otroColor: $('#colorPrenda').val(),
			prendaDibujoBordadoFranjas: $('#prendaDibujoBordadoFranjas').val(),
			prendaMarcaOrigen: $('#prendaMarcaOrigen').val(),
			prendaTalla: $('#prendaTalla').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/store_vestimenta',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table.bootstrapTable('refresh');
				$("#modalVestimenta").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
		//----
		//----
		$('.modal-footer').on('click','#btnActualizarP', function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			nombrePrenda: $('#nombrePrenda').val(),
			prendaMaterial: $('#prendaMaterial').val(),
			prendaColor: $('#prendaColor').val(),
			otroColor: $('#colorPrenda').val(),
			prendaDibujoBordadoFranjas: $('#prendaDibujoBordadoFranjas').val(),
			prendaMarcaOrigen: $('#prendaMarcaOrigen').val(),
			prendaTalla: $('#prendaTalla').val(),
			idCedula: $("#idCedula").val(),
			idPrenda: $("#idPrenda").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_vestimenta',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table.bootstrapTable('refresh');
				$("#modalVestimenta").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
		//----
		//----
		$('#btnCalzado').click (function(){
		//alert("hola");
		var dataString = {
			
			//prendaTipo: $('#idVestimenta').val(),
			idTipo: $('#idTipo').val(),
			calzadoTalla: $('#calzadoTalla').val(),
			idColor: $('#idColor').val(),
			idMarca: $('#idMarca').val(),
			modeloCalzado: $('#modeloCalzado').val(),
			//descripcionVestimenta: $('#descripcionVestimenta').val(),
			//accesoriosObjetos: $('#accesoriosObjetos').val(),
			otroColorCalzado: $('#otroColorCalzado').val(),
			otroCalzado: $('#otroCalzado').val(),
			otraMarca: $('#otraMarca').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_calzado',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table2.bootstrapTable('refresh');
				$("#modalCalzado").modal("hide");
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
	$('#btnAOS').click (function(){
		//alert("hola");
		var dataString = {
			descripcionVestimenta: $('#descripcionVestimenta').val(),
			accesoriosObjetos: $('#accesoriosObjetos').val(),
			idCedula: $("#idCedula").val()
		};
		console.log(dataString);
		$.ajax({
			type: 'POST',
			url: '/desaparecido/update_accesorios',
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
		//----
	});
</script>
@endsection