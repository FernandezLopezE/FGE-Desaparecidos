
//-------------SECCION INFORMANTE----------------------------

$(document).ready(function() {
    $('#informanteidNacionalidad').change(function(){
        console.log('Cambiando clave del país');
        var n=$('#informanteidNacionalidad').val();
        console.log(n);
        $.ajax({
                url: '/lada/'+n,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        console.log("hola");
                        $("input[name='lada[]']").val("("+data.lada+")-");
                        //$('#lada').val("("+data.lada+")-");

                    

                }
        });
            
    });
});

//------------------SECCION DESAPARECIDOS----------------------------


$(document).ready(function() {
    $('#idNacionalidad').change(function(){
        console.log("hola");
        var n=$('#idNacionalidad').val();
        console.log(n);
        $.ajax({
                url: '/lada/'+n,
                type:"GET",
                dataType:"json",

                success:function(data) {
                        console.log("hola");
                        $("input[name='lada[]']").val("("+data.lada+")-");
                        //$('#lada').val("("+data.lada+")-");

                    

                }
        });
            
    });
});




