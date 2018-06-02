$(document).ready(function(){

    $('g').click(function(){
        
        parteCuerpo = $(this).attr("data-cuerpo");

        parteCuerpo = (parteCuerpo === undefined) ? null : parteCuerpo;             
        $.ajax({
            type: 'GET',
            url: routeConsul+'/json_partes_cuerpo/'+parteCuerpo,            
            dataType: 'json',
            success: function(data) {
                $('#formulario').empty();          
                if(data.partes.length > 1){
                    contenido = '<div class="form-group">';
                    contenido = contenido+'<h4><code>'+data.padre.nombre+'</code></h4>';
                    contenido = contenido+'<select type="select" class="form-control" id="idPartecuerpo">'
                    contenido =contenido+'<option value="">[Seleccione una opción]</option>';
                    $.each(data.partes, function(key, value){                        
                        contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    contenido = contenido+'</select>';
                    contenido = contenido+'</div>';
                    contenido = contenido+'<div class="form-group" id="contenidoForm">';
                    contenido = contenido +'</div>';
                    $('#formulario').append(contenido);
                }else{
                    if(data.partes.length > 0){
                        var v= data.partes[0]['id'];
                        var campo = $('#formulario');
                        $('#formulario').empty();
                        contenido = '<div class="form-group">';
                        contenido = contenido+'<h4><code>'+data.padre.nombre+'</code></h4>';
                        contenido = contenido+'</div>';
                        campo.append(contenido);

                        formulario = pintar_formulario(v, campo);
                    } else {
                        $('#formulario').empty();
                        $('#formulario').append('<h5>No se encuentran registros</h5>');
                    }
                }          
            },
            error: function(data) {
            }
        });
    });

    $(document).on("change", "#idPartecuerpo", function(){
        var v= $("#idPartecuerpo").val();
        var campo = $('#contenidoForm');
        $('#contenidoForm').empty();
        formulario = pintar_formulario(v, campo);
    });

    function pintar_formulario(idParteCuerpo, campo){            
        $.ajax({
            type: 'GET',
            url: routeConsul+'/json_subparte_cuerpo/'+idParteCuerpo,            
            dataType: 'json',
            success: function(data) {                
                reglas = $.parseJSON(data.parte.reglas);
                html="";
                if(parseInt(reglas.posicion)){
                html = html+'<div class="form-group">';
                html = html+'<label for="idPosicion">Posición:</label>';
                html = html+'<select type="select" class="form-control" id="idPosicion">';
                html = html+'<option value="1">NO APLICA</option>';
                html = html+'<option value="2">AMBOS</option>';
                html = html+'<option value="3">IZQUIERDA</option>';
                html = html+'<option value="4">DERECHA</option>';
                html = html+'</select>';
                html = html+'</div>';
                }
                if(parseInt(reglas.tipo)){
                    html = html+'<div class="form-group">';
                    html = html+'<label for="idTipo">Tipo:</label>';
                    html = html+'<select type="select" class="form-control" id="idTipo">'
                    $.each(data.tipos, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.color)){
                    html = html+'<div class="form-group">';
                    html = html+'<label for="idColor">Color:</label>';
                    html = html+'<select type="select" class="form-control" id="idColor">'
                    $.each(data.colores, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.tamano)){
                    html = html+'<div class="form-group">';
                    html = html+'<label for="idTamano">Tamaño:</label>';
                    html = html+'<select type="select" class="form-control" id="idTamano">'
                    $.each(data.tamanos, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.particularidades)){
                    html = html+'<div class="form-group">';
                    html = html+'<label for="idParticularidad">Particularidades:</label>';
                    html = html+'<select type="select" class="form-control" multiple data-live-search="true" id="idParticularidad">'
                    $.each(data.particularidades, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.modificaciones)){
                    html = html+'<div class="form-group">';
                    html = html+'<label for="idModificacion">Modificaciones:</label>';
                    html = html+'<select type="select" class="form-control" multiple data-live-search="true" id="idModificacion">'
                    $.each(data.modificaciones, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                html = html+'<div class="form-group">';
                html = html+'<label for="observaciones">Observaciones:</label>';
                html = html+'<textarea type="text" class="form-control" id="observaciones"></textarea>';
                html = html+'</div>';

                html = html+'<button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>';
                
                campo.append(html);

                $('#idParticularidad').selectpicker();
                $('#idModificacion').selectpicker();  
            },
            error: function(data) {
            }
        });
    }

    $('#formulario').on('click', '#btnGuardar', function(){
			
        var dataString = {
            idPosicion : ($("#idPosicion").val() === undefined) ? null : $("#idPosicion").val(),
            idTipo : ($("#idTipo").val() === undefined) ? null : $("#idTipo").val(),
            idColor : ($("#idColor").val() === undefined) ? null : $("#idColor").val(),
            idTamano : ($("#idTamano").val() === undefined) ? null : $("#idTamano").val(),
            idParticularidad : ($("#idParticularidad").val() === undefined) ? null : $("#idParticularidad").val(),
            idModificacion : ($("#idModificacion").val() === undefined) ? null : $("#idModificacion").val(),
            observaciones : ($("#observaciones").val() === undefined) ? null : $("#observaciones").val()          
        };
        console.log(dataString);

        $.ajax({
            type: 'POST',
            url: routeSenas,
            data: dataString,
            dataType: 'json',
            success: function(data) {
                console.log('El dato es:'+data);
                modalFamiliar.modal('hide');
                table.bootstrapTable('refresh');
            },
            error: function(data) {
                var errors = data.responseJSON;	
                $('.modal-body div.has-danger').removeClass('has-danger');
                $('.form-control-feedback').empty();
                $.each(errors.errors, function(key, value){			
                    $('#div_'+key).addClass('has-danger');
                    $('input#'+key).addClass('form-control-danger');
                    $('#error_'+key).append(value);						
                });
            }
        });
    })

});