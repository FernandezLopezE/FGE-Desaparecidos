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
    function pintar_cabeceras(idParteCuerpo, campo){
        $.ajax({
            type: 'GET',
            url: routeConsul+'/json_cabecera_partes/'+idParteCuerpo,            
            dataType: 'json',
            success: function(data) {
              
                contenido = '<div class="form-group">';
                $.each(data.padre, function(key, value){ 
                contenido = contenido+'<h4><code>'+value.partep+' - '+data.hijo.nombre+'</code></h4>';
                });
                contenido = contenido+'<div class="form-group" id="contenidoForm">';
                contenido = contenido +'</div>';
                contenido = contenido +'</div>';
                /*reglas = $.parseJSON(data.parte.reglas);
                html="<input type='hidden' id='idParteCuerpo' value='"+idParteCuerpo+"' \>";
                if(parseInt(reglas.posicion)){
                html = html+'<div class="form-group" id="div_idPosicion">';
                html = html+'<label for="idPosicion">Posición:</label>';
                html = html+'<select type="select" class="form-control" id="idPosicion">';
                html = html+'<option value="NO APLICA">NO APLICA</option>';
                html = html+'<option value="AMBOS(AS)">AMBOS(AS)</option>';
                html = html+'<option value="IZQUIERDO(A)">IZQUIERDO(A)</option>';
                html = html+'<option value="DERECHO(A)">DERECHO(A)</option>';
                html = html+'</select>';
                html = html+'</div>';
                }
                
                
                campo.append(html);

                $('#idParticularidad').selectpicker();
                $('#idModificacion').selectpicker();  */
                campo.append(contenido);
            },
            error: function(data) {
            }
        });
    }
    function pintar_formulario(idParteCuerpo, campo, method = 'POST'){            
        $.ajax({
            type: 'GET',
            url: routeConsul+'/json_subparte_cuerpo/'+idParteCuerpo,            
            dataType: 'json',
            success: function(data) {                
                reglas = $.parseJSON(data.parte.reglas);
                html="<input type='hidden' id='idParteCuerpo' value='"+idParteCuerpo+"' \>";
                if(parseInt(reglas.posicion)){
                html = html+'<div class="form-group" id="div_idPosicion">';
                html = html+'<label for="idPosicion">Posición:</label>';
                html = html+'<select type="select" class="form-control" id="idPosicion">';
                html = html+'<option value="NO APLICA">NO APLICA</option>';
                html = html+'<option value="AMBOS(AS)">AMBOS(AS)</option>';
                html = html+'<option value="IZQUIERDO(A)">IZQUIERDO(A)</option>';
                html = html+'<option value="DERECHO(A)">DERECHO(A)</option>';
                html = html+'</select>';
                html = html+'</div>';
                }
                if(parseInt(reglas.tipo)){
                    html = html+'<div class="form-group" id="div_idTipo">';
                    html = html+'<label for="idTipo">Tipo:</label>';
                    html = html+'<select type="select" class="form-control" id="idTipo">'
                    $.each(data.tipos, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.color)){
                    html = html+'<div class="form-group" id="div_idColor">';
                    html = html+'<label for="idColor">Color:</label>';
                    html = html+'<select type="select" class="form-control" id="idColor">'
                    $.each(data.colores, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.tamano)){
                    html = html+'<div class="form-group" id="div_idTamano">';
                    html = html+'<label for="idTamano">Tamaño:</label>';
                    html = html+'<select type="select" class="form-control" id="idTamano">'
                    $.each(data.tamanos, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.particularidades)){
                    html = html+'<div class="form-group" id="div_idParticularidad">';
                    html = html+'<label for="idParticularidad">Particularidades:</label>';
                    html = html+'<select type="select" class="form-control" multiple data-live-search="true" id="idParticularidad">'
                    $.each(data.particularidades, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                if(parseInt(reglas.modificaciones)){
                    html = html+'<div class="form-group" id="div_idModificacion">';
                    html = html+'<label for="idModificacion">Modificaciones:</label>';
                    html = html+'<select type="select" class="form-control" multiple data-live-search="true" id="idModificacion">'
                    $.each(data.modificaciones, function(key, value){
                        html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    html = html+'</select>';
                    html = html+'</div>';
                }
                html = html+'<div class="form-group">';
                html = html+'<label for="archivo">Seleccione archivo:</label>';
                html = html+'<input type="file" class="form-control-file" id="archivo">';
                html = html+'</div>';
                html = html+'<div class="form-group" id="div_observaciones">';
                html = html+'<label for="observaciones">Observaciones:</label>';
                html = html+'<textarea type="text" class="form-control mayusculas" id="observaciones"></textarea>';
                html = html+'</div>';

                html = html+'<button type="submit" id="btnCancelar" class="btn btn-secondary">Cancelar</button>';
                html = html+'<button type="submit" id="btnGuardar"  value="'+method+'" class="btn btn-primary float-right">Guardar</button>';
                
                campo.append(html);

                $('#idParticularidad').selectpicker();
                $('#idModificacion').selectpicker();  
            },
            error: function(data) {
            }
        });
    }

    $('#formulario').on('click', '#btnCancelar', function(){
        location.reload();
    })

    $('#formulario').on('click', '#btnEditar', function(){
        var v = $(this).val();
        var campo = $('#formulario');
        
        $('#formulario').empty();
        pintar_cabeceras(v,campo);
        formulario = pintar_formulario(v, campo,"PUT");
        

        //$("#div_observaciones").after('<button type="submit" id="btnGuardar"  value="PUT" class="btn btn-primary">Guardar</button>');

        $.getJSON( routeConsul+'/get_cat_partes_cuerpo/'+idDesaparecido+'/'+v, function(data) {
            $("#idTipo").val(data.idtipo).trigger("change");
            $("#idColor").val(data.idcolor).trigger("change");
            $("#idTamano").val(data.idtamano);
            $("#idPosicion").val(data.posicion);
            $("#idParticularidad").val(data.particularidades).trigger("change");
            $("#idModificacion").val(data.modificaciones).trigger("change");
            $("#observaciones").val(data.observaciones);
            $("#otroidColor").val(data.otroColor);
            $("#otroidParticularidad").val(data.otraP);
            $("#otroidModificacion").val(data.otraM);
            $("#otroidTipo").val(data.otroTi);

            $("#formulario").append('<input type="hidden" id="idCedulaParteCuerpo" value="'+data.idCedulaParteCuerpo+'"/>');
            /*$("#archivo").val(data.rutaimagen).trigger("change");
            $("#btnGuardar").attr("value","PUT");*/
        });
    })

    $('#formulario').on('click', '#btnEliminar', function(){
        idCedulaParteCuerpo = $(this).val();
        $.ajax({
            type: 'DELETE',
            url: routeSenas+'/'+idCedulaParteCuerpo,
            dataType: 'json',
            success: function(data) {						
                location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    })

    $('#formulario').on('click', '#btnGuardar', function(){
			
        var fileToUpload = $('#archivo')[0].files[0];
        if (fileToUpload == 'undefined') { fileToUpload = null }

        var formData = new FormData();
        formData.append("archivo",fileToUpload);
        formData.append('idPosicion', ($("#idPosicion").val() === undefined) ? 'NO APLICA' : $("#idPosicion").val());
        formData.append('idTipo', ($("#idTipo").val() === undefined) ? null : $("#idTipo").val());
        formData.append('idColor', ($("#idColor").val() === undefined) ? null : $("#idColor").val());
        formData.append('idTamano', ($("#idTamano").val() === undefined) ? null : $("#idTamano").val());
        formData.append('idParticularidad', ($("#idParticularidad").val() === undefined) ? null : $("#idParticularidad").val());
        formData.append('idModificacion', ($("#idModificacion").val() === undefined) ? null : $("#idModificacion").val());
        formData.append('observaciones', ($("#observaciones").val() === undefined) ? null : $("#observaciones").val());
        formData.append('otroidParticularidad', ($("#otroidParticularidad").val() === undefined) ? null : $("#otroidParticularidad").val());
        formData.append('otroidModificacion', ($("#otroidModificacion").val() === undefined) ? null : $("#otroidModificacion").val());
        formData.append('otroTipo', ($("#otroidTipo").val() === undefined) ? null : $("#otroidTipo").val());
        formData.append('otroColor', ($("#otroidColor").val() === undefined) ? null : $("#otroidColor").val());
        formData.append('idParteCuerpo', ($("#idParteCuerpo").val() === undefined) ? null : $("#idParteCuerpo").val());
        formData.append('idDesaparecido', idDesaparecido);
        formData.append('idCedulaParteCuerpo', ($("#idCedulaParteCuerpo").val() === undefined) ? null : $("#idCedulaParteCuerpo").val());
        //console.log(formData);

        $.ajax({
            type: 'POST',
            url: routeSenas,				
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(data) {						
                location.reload();
                /*table.bootstrapTable('refresh');
                $("#modalVestimenta").modal("hide");*/
            },
            error: function(data) {
                console.log(data);
                /*var errors = data.responseJSON;	
                $('.modal-body div.has-danger').removeClass('has-danger');
                $('.form-control-feedback').empty();
                $.each(errors.errors, function(key, value){					
                    $('#div_'+key).addClass('has-danger');
                    $('input#'+key).addClass('form-control-danger');
                    $('#error_'+key).append(value);						
                });*/
            }
        });
    })

    //Arreglos de ids de opción otro
    idOtroPati = [10,21,24,33,41,52,64,70,76,87,97,107,117,127,137,147,157,167,176,185,194,203,211,219,230,241,251,261,271,281,291,301,311,321,331,341,351,360,368,376,385,394,400,409,418,425,432,439,446,457,468,477,483,489,496,503,509,515,521,530,539];
    idOtraModificacion = [10,14,20,24,33,41,49,57,63,70,77,83,88,93,99,105,112,119,125,131,135,139,143,147,153,159,166,173,180,187,194,201,208,215,222,229,236,243,249,255,261,265,269,273,279,283,287,291,295,299,303,307,311,317,321,325,329,333,337,341,345,349,353];
    idOtroColor = [8,17,25,33,41];
    idOtroTipo = [7,15,21,26,31,36,41,46,52];
    idSinInfoPar = [1,11,22,25,34,42,53,65,71,77,88,98,108,118,128,138,148,158,168,177,186,195,204,212,220,231,242,252,262,272,282,292,302,312,322,332,342,352,361,369,377,386,395,401,410,419,426,433,440,447,458,469,478,484,490,497,504,510,516,522,531];
    idSinInfoMod = [1,11,15,21,25,34,42,50,58,64,71,78,84,89,94,100,106,113,120,126,132,136,140,144,148,154,160,167,174,181,188,195,202,209,216,223,230,237,244,250,256,262,266,270,274,280,284,288,292,296,300,304,308,312,318,322,326,330,334,338,342,346,350];
    
    function pintar_otro_campo(campo,id){
        otro = '<div class="form-group" id="otro_'+id+'">';
        otro = otro+'<label for="otro">Otro:</label>';
        otro = otro+'<input type="text" class="form-control" id="otro'+id +'"></input>';
        otro = otro+'</div>';

        if(id == 'idTipo')
            arreglo = idOtroTipo;
        if(id == 'idColor')
            arreglo = idOtroColor;
        if(id == 'idParticularidad')
            arreglo = idOtroPati; arreglo2 = idSinInfoPar;
        if(id == 'idModificacion')
            arreglo = idOtraModificacion; arreglo2 = idSinInfoMod;

        if(id == 'idParticularidad' || id == 'idModificacion'){
            pym =campo.val();            
            //var aux = new Array();
            for(var j=0;j<pym.length;j++){
                
                for(var i=0;i<arreglo.length;i++){
                    //if para mostrar campo otro
                    if(pym[j] == arreglo[i]){
                        //formulario = pintar_otro_campo(campo);
                        $("#div_"+id).after(otro);
                        
                        break;
                    }else{
                        $("#otro_"+id).remove();
                        
                    }//fin if para mostrar campo otro
                }
            }
                
        }else{
            for(var i=0;i<arreglo.length;i++){
                if(campo.val() == arreglo[i]){
                    //formulario = pintar_otro_campo(campo);
                    $("#div_"+id).after(otro);
                    
                    break;
                }else{
                    $("#otro_"+id).remove();
                    
                }
            }
        }

    }


    var arrayOfInputs = ['#idTipo', '#idColor', '#idParticularidad', '#idModificacion'];
    $(document).on("change", arrayOfInputs.join(","), function(){
        var campo = $('#'+$(this).attr("id"));
        var id = $(this).attr("id");
       
        pym =campo.val();
        var aux = new Array();

        if(id == 'idParticularidad')
            arreglo2 = idSinInfoPar;
        if(id == 'idModificacion')
            arreglo2 = idSinInfoMod;

        if(id == 'idParticularidad' || id == 'idModificacion'){
            for(var j=0;j<pym.length;j++){
                for(var i=0;i<arreglo2.length;i++){
                    if( pym.length <=1 && pym == arreglo2[i]){
                        aux = pym;
                    }else{
                        if(pym[j] == arreglo2[i]){
                            delete pym[j];
                            campo.val(pym).trigger("change");
                            break;
                        }
                    }
                }
            }
        }
    
        //$('#contenidoForm').empty();
        formulario = pintar_otro_campo(campo, id);
        //campo.val(pym).trigger("change");
    });

    var cargar_elementos_seleccionados = function(idDesaparecido){
        alert(idDesaparecido);
        $.getJSON( routeConsul+'/get_cat_partes_cuerpo/'+idDesaparecido, function(data) {
            head = '<ul class="nav nav-tabs" id="myTab" role="tablist">';
            body = '<div class="tab-content" id="myTabContent">';
            $.each(data, function(key, value){
                
                head = head+'<li class="nav-item">';
                head = head+'<a class="nav-link" id="nav-'+value.id+'-tab" data-toggle="tab" href="#parte-'+value.id+'" role="tab" aria-controls="nav-'+value.id+'" aria-selected="true">'+value.nombre+'</a>';
                head = head+'</li>';

                body = body+'<div class="tab-pane fade" id="parte-'+value.id+'" role="tabpanel" aria-labelledby="nav-'+value.id+'-tab">';
                body = body+value.nombre;
                body = body+'</div>';
            });
            head = head+'</ul>';  
            body = body+'</div>';

            $('#formulario').append(head);
            $('#formulario').append(body);            
        });        


        
        
        
    }

});