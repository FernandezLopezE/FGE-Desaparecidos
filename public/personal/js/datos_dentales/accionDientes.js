$(document).ready(function(){
    var parteDiente, pintar;
    //Cargar dentadura
    window.onload = function () {
        const pieces = document.getElementsByTagName('g');
        console.log(pieces);
        for (var i = 0; pieces.length; i++) {
            let _piece = pieces[i];
            _piece.onclick = function(t) {
                if (t.target.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.getAttribute('id');
                if (t.target.parentElement.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');

                var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
                
            }
        }
    }


    //Generar formualrio 
     $('g').click(function(){
        parteDiente = $(this).attr("data-diente");
        id = $("#"+$(this).attr("id"));
        if ($('#diente_'+parteDiente).length) {
          $('#diente_'+parteDiente).remove();
          $(pintar).css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});

        } else {
          $.ajax({
            type: 'GET',
            url: routeIndex+'/get_diente/'+parteDiente,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                //$('#formDiente').empty();                
                $.each(data, function(key, value){
                    contenido = '<div class="form-group row" id="diente_'+value.id+'">';
                });
                contenido = contenido+ '<div class="col">';
                $.each(data, function(key, value){
                    contenido = contenido+'<input type="text" class="form-control" name="" value="'+value.nombreDiente+'" disabled>';
                });
                contenido = contenido+'</div>'
        
                contenido = contenido+'<div class="col">';
                contenido = contenido+'<input type="text" class="form-control mayuscula" name="perdio[]" placeholder="ACCIDENTE, EXTRACCIÓN, NATURAL, ETC">';
                $.each(data, function(key, value){
                    contenido = contenido+'<input type="hidden" name="dienteselec[]" value="'+value.id+'">';
                });
                contenido = contenido+'</div>';

                contenido = contenido+'<div class="col-1" id="borrar">';
                $.each(data, function(key, value){
                contenido = contenido+'<i class="fa fa-trash" style="font-size:20px; margin-top: 10px" id="'+value.id+'" value="prueba"></i>';
                pintar = "#path"+value.id;
                });
                contenido = contenido+'</div>';

                contenido = contenido+'</div>';

                $('#formDiente').append(contenido);
                
                
                $(pintar).css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
                //console.log("Aqui se debe pintar el diente: "+ pintar);

            }
        });
        }  
       
    }); 

    $("#formDiente").on('click', 'i', function(){
            var deletCamp = ($(this).attr("id"));
            //alert('diente_'+deletCamp);

            if ($('#diente_'+deletCamp).length) {
                    $('#diente_'+deletCamp).remove();
                    $("#path"+deletCamp).css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
                    //console.log("#path"+deletCamp);
    
            }

    });


});  
  
