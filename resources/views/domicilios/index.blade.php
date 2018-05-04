@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
	.gi-3x{font-size: 2.5em;}
</style>
	
@endsection

@section('titulo', 'Registro único de personas desaparecidas')

@section('content')
@include('navs.navs_datos',array('activar' => 'domicilio'))
<button type="button" class="btn btn-dark pull-right"  id="btnAgregarDomicilio">
	Agregar
</button>

<div class="card-body bg-white">
	<table id="tableDomicilios" ></table>
	@include('domicilios.modals.modal_domicilio')
</div>



@endsection

@section('scripts')
{!! HTML::script('personal/js/sisyphus.min.js') !!}
{!! HTML::script('personal/js/sisyphus.js') !!}
<script type="text/javascript">
	$(function (){
		var table = $('#tableDomicilios');
		var routeIndex = '{!! route('consultas.index') !!}';
		var routeDomicilio = '{!! route('domicilios.index') !!}';
		var btnAgregar = $('#btnAgregarDomicilio');
		var btnGuardar = $('#btnGuardarDomicilio');
		var modal = $('#modalDomicilio');
		var form = $('#formDesaparecido');
		var modalFooter = $('.modal-footer');
		var idDesaparecido = '{!! $desaparecido->id !!}'
        var btnLimpiar = $('#btnLimpiar');
        var municipio = $('#idMunicipio');
		var localidad = $("#idLocalidad");
		var colonia = $("#idColonia");
		var cp = $("#idCodigoPostal");

        var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark pull-left" id="editDomicilio">Editar</button>';	
			
			return [btn].join('');
		};
        window.operateEvents = {
			'click #editDomicilio': function (e, value, row, index) {					
				console.log(row);
                
                
                $('#idDesparecido').val(row.id);
                $("#tipoDireccion").val(row.tipoD);
                $("#calle").val(row.calle);
				$("#numExterno").val(row.nExt);
				$("#numInterno").val(row.nInt);
				$('select#idEstado option[value="'+row.idEstado+'"]').attr("selected",true);

				$.getJSON(routeIndex+'/get_municipios/'+row.idEstado)
				.done(function(data){					
					idSelect = row.idMunicipio;
					selectedGeneral = $('#idMunicipio');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});
				$.getJSON(routeIndex+'/get_localidades/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idLocalidad;
					selectedGeneral = $('#idLocalidad');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idColonia;
					selectedGeneral = $('#idColonia');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
						selectedGeneral.append(optionselect);
					});
				});

				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
				.done(function(data){					
					idSelect = row.idCodigoPostal;
					selectedGeneral = $('#idCodigoPostal');
					selectedGeneral.select2();
					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
					$.each(data, function(key, value){						
						optionSelect = '<option';
						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
						optionselect = optionSelect+' value='+value.id+'>'+value.codigoPostal+'</option>';
						selectedGeneral.append(optionselect);
					});
				});
                
                telefonos = $.parseJSON(row.telefono)
                var etiqueta2 = 0;
                console.log("Aqui los telefonos:");
				//console.log(telefonos.length);
                
                informanteTele2 = $("input[name='telefonos']");


                var informanteTele = $("input[name='telefonos']");
                var informanteExt = $("input[name='ext']");
				$.each(telefonos, function(key, value){
                    //console.log(row.lenght);
					console.log(value.telefono);
                    informanteTele[etiqueta2].value = value.telefono;
                    informanteExt[etiqueta2].value = value.ext;
                    etiqueta2 = etiqueta2 +1;
                    
                    
				})
			
                $("#btnActualizarD").show();
				$("#btnGuardarDomicilio").hide();
				$("#modalDomicilio").modal("show");    
                
                $("#btnActualizarD").val(idDesaparecido);
                
			}
		}
		table.bootstrapTable({				
			url: routeIndex+'/get_domicilios/{!! $desaparecido->id !!}',
			columns: [{					
				field: 'tipoD',
				title: 'Tipo',
			}, {					
				field: 'calle',
				title: 'Calle',
			}, {					
				field: 'nExt',
				title: 'No externo',
			}, {				
				field: 'estado',
				title: 'Estado',
			}, {				
				field: 'municipio',
				title: 'Municipio',
			}, {				
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]			
		})

		btnAgregar.click(function(e){
			modal.modal('show');
			$('#btnActualizarD').hide();
			$('#btnGuardarDomicilio').show();
            
		  $( "#modalDomicilio" ).sisyphus( {
	           excludeFields: $('input[name=_token]')
            });
            $("input[name='telefonos']").mask('(000) 000 0000');
		})
        
        btnLimpiar.click(function(){
          $('#modalDomicilio').find('form')[0].reset();
          $('#modalDomicilio').removeData('modal');
            municipio.empty();
            localidad.empty();
            colonia.empty();
            cp.empty();
             })
            
		btnGuardar.click (function(){
			
			var dataString = {
				tipoDireccion : $("#tipoDireccion").val(),
				calle: $("#calle").val(),
				numExterno : $("#numExterno").val(),
				numInterno : $("#numInterno").val(),
				idEstado : $("#idEstado").val(),
				idMunicipio : $("#idMunicipio").val(),
				idLocalidad : $("#idLocalidad").val(),
				idColonia : $("#idColonia").val(),
				idCodigoPostal : $("#idCodigoPostal").val(),
				telefonos : $("#telefonos").val(),
				ext : $("#ext").val(),
                idDesaparecido,
			};

			$.ajax({
				type: 'POST',
				url: routeDomicilio,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					console.log(data);
                    modal.find('form')[0].reset();
                    modal.removeData('modal');
                    municipio.empty();
                    localidad.empty();
                    colonia.empty();
                    cp.empty();
					modal.modal('hide');
					table.bootstrapTable('refresh');
                    
				},
				error: function(data) {
					console.log(data);
				}
			});
		})
        
        
         $('.modal-footer').on('click','#btnActualizarD', function(){
		//alert("hola");
		var dataString = {
			//prendaTipo: $('#idVestimenta').val(),
			
            
            tipoDireccion : $("#tipoDireccion").val(),
				calle: $("#calle").val(),
				numExterno : $("#numExterno").val(),
				numInterno : $("#numInterno").val(),
				idEstado : $("#idEstado").val(),
				idMunicipio : $("#idMunicipio").val(),
				idLocalidad : $("#idLocalidad").val(),
				idColonia : $("#idColonia").val(),
				idCodigoPostal : $("#idCodigoPostal").val(),
				telefonos : $("#telefonos").val(),
				ext : $("#ext").val(),
				
            

		};
             idDesaparecido2 = $("#btnActualizarD").val();
		console.log(dataString);
		$.ajax({
			type: 'PUT',
			url: routeDomicilio+'/'+idDesaparecido2,
			data: dataString,
			dataType: 'json',
			success: function(data) {						
				console.log(data);
				table.bootstrapTable('refresh');
                     modal.find('form')[0].reset();
                    modal.removeData('modal');
                    municipio.empty();
                    localidad.empty();
                    colonia.empty();
                    cp.empty();

				$("#modalDomicilio").modal("hide");	
				
												
			},
			error: function(data) {
				console.log(data);
			}
		});
	});

	})

</script>
@endsection