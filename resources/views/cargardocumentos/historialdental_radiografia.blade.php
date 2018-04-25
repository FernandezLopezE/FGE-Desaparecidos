@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}


</style>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
	
@endsection
@section('content')
<hr>
  {{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}

	  	<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">	
					<h5>Historial clínico
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Historial Clínico dental de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idHistorialDental[]', $option, null, ['class' => 'form-control pull-right','id'=>'idHistorialDental']) !!}
					</div>
				</div>
				<div class="col-lg-4" style="display: block" id="divHistorialClinicoDental">
					<body class="bg-danger">
					    <div class="container">
					        <div class="row">
					            <div class="col-lg-8 col-sm-12 col-11 main-section">
					                <h5 class="text-center text-danger">Cargar fotografías del historial clínico dental</h5><br>
					                
					                    {!! csrf_field() !!}
					                    <div class="form-group">
					                        <div class="file-loading">
					                            <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
					                        </div>
					                    </div>
					                
					            </div>
					        </div>
					    </div>
					</body>			
	  		</div>		
		</div>



		<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">
					<h5>Radiografías
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>

				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Radiografías de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idRadiografias[]', $option, null, ['class' => 'form-control pull-right','id'=>'idRadiografias']) !!}
					</div>
				</div>
				<div class="col-lg-4" style="display: none" id="divRadiografia">
					
				</div>			
	  		</div>		
		</div>



		<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">
					<h5>Modelo de estudio
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Modelo de estudio de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idModeloEstudio[]', $option, null, ['class' => 'form-control pull-right','id'=>'idModeloEstudio']) !!}
					</div>
				</div>
				<div class="col-lg-4" style="display: none" id="divModeloEstudio">
					
				</div>			
	  		</div>		
		</div>



		<div class="card border-primary">
	  		<div class="card border-success">
	  			<div class="card-header">
					<h5>Fotografía
					<button type="submit" class="btn btn-dark pull-right"  id="btnAgregarInformante">	GUARDAR		
					</button>		
					</h5>
				</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="row">				
					<div class="col">
						{!! Form::label ('otraIdentificacion','Historial Clínico dental de la persona:') !!}			
					</div>
					<div class="col-3">					
						{!! Form::select('idFotografias[]', $option, null, ['class' => 'form-control pull-right','id'=>'idFotografias']) !!}
					</div>
				</div>
				<div class="col-lg-4" style="display: none" id="divHistorialClinicoDental">
					
				</div>			
	  		</div>		
		</div>

 

	
	</br>
	</br>

<div>
	<input type="button" name="btnAOS" id="btnAOS" value="AGREGAR" class="btn btn-dark pull-right">
	<a href="/desaparecido/correo" class='btn btn-large btn-primary openbutton'>corrreo</a>
</div>



@endsection
@section('scripts')


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>


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