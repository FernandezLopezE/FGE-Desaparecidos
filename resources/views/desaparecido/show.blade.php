@extends('layouts.app_uipj')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link href="../plugins/bootstrap_fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
{!! Html::style('') !!}
<style type="text/css">
    a.fancybox img {
     width: 200px;
height:150px;
    }
    a.div_tamano{


    }
    a.fancybox{
 margin:10px auto;
  width:180px;
  height:180px;
}

    
.gallery
    {
        display: inline-block;
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .close-icon{
      border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
     .transition {
          -webkit-transform: scale(1.2); 
          -moz-transform: scale(1.2);
          -o-transform: scale(1.2);
          transform: scale(1.2);
      }
      img.zoom {
      
          
          -webkit-transition: all .3s ease-in-out;
          -moz-transition: all .3s ease-in-out;
          -o-transition: all .3s ease-in-out;
          -ms-transition: all .3s ease-in-out;
      }
      .close-icon{
      border-radius: 10%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 1px 5px;
    }

    #camara:hover {
    transform: scale(1.5);
    }



</style>
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'desaparecido'))

<div class="card" >
  <div class="card-header"> 
    <h5>Datos de la persona no localizada
      <a href="{{route('extraviado.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
        Editar
      </a>   
    </h5>
  </div>
  FOTO:{!! $desaparecido->fotoDesaparecido !!}
  <div class="card-body">
    <div class="form-group row">
      <div class="col-4" style="width: 18rem; margin: 0 auto;">
        @if(empty($desaparecido->fotoDesaparecido))
        <center>{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => '','style' => "width: 80%;")) }}</center>
          @else
            <center>{{ HTML::image(asset($desaparecido->fotoDesaparecido), 'Fiscal', array('class' => '', 'style' => "width: 80%;")) }}</center>
        @endif
        <div class="form-group col-md" id="div_archivo">
          <!--{!! Form::label ('archivo','Foto:',['class' => 'form-control-label']) !!}-->
          {!! Form::file('archivo', ['class' => 'form-control', 'style' => 'display:none']) !!}
          <center><i class="fa fa-camera" id="camara" style="font-size:40px; margin-top: 4px;" data-toggle="tooltip" title="Subir foto" data-placement="right"></i></center>
          <div class="form-control-feedback" id="error_archivo"></div>
        </div>  
      </div>
      

      <div class="col">
        <div class="row">
          <div class="col-3">
            <dt>Nombres:</dt>
          </div>
          <div class="col">
            <dd>
            {!! $desaparecido->persona->nombres !!} 
            {!! $desaparecido->persona->primerAp !!} 
            {!! $desaparecido->persona->segundoAp !!} 
          </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Apodo:</dt>
          </div>
          <div class="col">
            <dd>
              {!! $desaparecido->apodo !!}
            </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Género:</dt>
          </div>
          <div class="col">
            <dd>
              @switch($desaparecido->persona->sexo)
                @case('M')
                  MUJER
                  @break
                @case('H')
                  HOMBRE
                  @break
                @default
                  NO DEFINIDO
              @endswitch
            </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Nacionalidad:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->persona->nacionalidad->nombre !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Estado natal:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->persona->estado->nombre !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Fecha nacimiento:</dt>
          </div>
          <div class="col">
            <dd>{!! Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Edad de extravio:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->edadExtravio !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Edad aparente:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->edadAparente !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>CURP:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->persona->curp !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Escolaridad:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->escolaridad->nombre !!} </dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Ocupación:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->ocupacion->nombre !!}</dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Identificación:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->documento->nombre !!}</dd>
              @if ($desaparecido->idDocumentoIdentidad === '7')
                <dt class="col-sm">Otra identificación:</dt>
                <dd class="col-sm-9">{!! $desaparecido->otroDocIdentidad !!}</dd>
              @endif
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Número de identificación:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->numDocIdentidad !!}</dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Estado civil:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->edocivil->nombre !!} </dd>
              @if ($desaparecido->persona->sexo === 'M')
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Embarazada:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->embarazo !!}</dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Periodo:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->numGestacion !!} {!! $desaparecido->tipoGestacion !!}</dd>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <dt>Por menores:</dt>
          </div>
          <div class="col">
            <dd>{!! $desaparecido->pormenores !!}</dd>
            @endif
          </div>
        </div>
      </div>
        
    </div>
  </div>
      
</div>
  



{{--LO SIGUIENTE ES EL FILE INPUT PARA CARGAR IMAGEN DE RADIOGRAFIAS--}}
 
<div class="card border-primary">
        <div class="card border-success">
          <div class="card-header"> 
              <h5>AGREGAR ANEXOS
              <button type="submit" class="btn btn-dark pull-right"  id="btnAgregarAnexo"> Agregar   
              </button>   
              </h5>
          </div>
        </div>
        
         @include('desaparecido.modals.modal_cargar_documento_desaparecido')
 
       <div class="container page-top">
        <div class="row">
           


            @if($images->count())
                @foreach($images as $image)
                <div class='col-md-2 thumb' >
                   @if(substr ($image->ruta, -3) == "pdf")
                    <a id ="div_tamano">
                         <a id="fancybox" class="fancybox" rel="ligthbox" href="{{ $image->ruta }}" target="_blank">              
                           <center>
                            <img class="img-responsive zoom img-fluid" alt="" src="../images/documentopdf.png" width="150" height="220"  align="center" />
                          </center>
                              
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->name }}</small>
                            </div> <!-- text-center / end -->
                        </a>
                      </a>
                    @else
                       <a id ="div_tamano">
                        <a id="fancybox" class="fancybox" rel="ligthbox" href="{{ $image->ruta }}">                
                           <img class="img-responsive zoom img-fluid" alt="" src="..{{ $image->ruta }}" />
                              
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->name }}</small>
                            </div> <!-- text-center / end -->
                        </a>
                        <a id ="div_tamano">
                    @endif
                    <form action="{{ url('imagenAntecedentesM',$image->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    {!! csrf_field() !!}
                    <button type="submit" class="close-icon btn btn-danger"><i class="fa fa-window-close"></i></button>
                    </form>
                </div> <!-- col-6 / end -->
                @endforeach
            @endif


           <!-- list-group / end -->
    </div> <!--termina el row-->
    <br>
  </div>
</div>
</div>
</div>
{{--LO SIGUIENTE ES EL FILE INPUT PARA CARGAR IMAGEN DE RADIOGRAFIAS--}}
@endsection

@section('scripts')
<script src="../plugins/bootstrap_fileinput/js/popper.min.js" type="text/javascript"></script>

<script src="../plugins/bootstrap_fileinput/js/bootstrap.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="../plugins/bootstrap_fileinput/js/fileinput.js"></script>
<!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
 <script src="../plugins/bootstrap_fileinput/js/theme.js"></script>
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="../plugins/bootstrap_fileinput/js/es.js"></script>
<!-- para la galeria de imagenes fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
			$(".fancybox").fancybox({
		        openEffect: "none",
		        closeEffect: "none"
		    });
		    
		    $(".zoom").hover(function(){
		    
				    $(this).addClass('transition');
				  }, function(){
				        
				    $(this).removeClass('transition');
		  	});

	})


	var modalAnexos = $('#modalAnexosDesaparecido');
	$('#btnAgregarAnexo').click (function(){
  			modalAnexos.modal('show');})


	$desaparecido = ('{!! $desaparecido->id!!}');
	var routeIndex = '{!! route('anexoscontroller.index') !!}';

	console.log(routeIndex);
	$("#fileImagenes").fileinput({
                  language:'es',
                  theme: 'fa',
                  uploadUrl: routeIndex+'/imagenDesaparecido',

                  uploadExtraData: function() {
                   
                      return {

                          _token: $("input[name='_token']").val(),
                          idDesaparecido:'{!! $desaparecido->id!!}',
                          tipoAnexo: 'desaparecido',

                      };
                  },
                  allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf'],
                  overwriteInitial: false,
                  maxFileSize:2000,
                  maxFilesNum: 10,

                  
                  slugCallback: function (filename) {
                    /*$desaparecido = ('{!! $desaparecido->id!!}');
                    console.log ( $desaparecido+"desaparecido");*/
                    $nombre = $desaparecido+"_desaparecido_"+filename.replace('(', '_').replace(']', '_');

                    console.log($nombre);

                      return  filename.replace('(', '_').replace(']', '_');
                  }



              });

	$('#cerrarModal').click (function(){

	    location.reload();

	})

  var routeDesaparecido = '{!! route('extraviado.index') !!}';
  var idDesaparecido = '{{ $desaparecido->id }}';
  var idCedula = '{{ $desaparecido->idCedula }}';
  //var btnPrendaGuardar = $('#btnGuardarPrenda');
  $("#archivo").change(function(){
    //alert("cambio");
    var fileToUpload = $('#archivo')[0].files[0];
    if (fileToUpload == 'undefined') { fileToUpload = null }

    var formData = new FormData();
    formData.append("archivo",fileToUpload);
    formData.append("idDesaparecido",idDesaparecido);

    $.ajax({
      type: 'POST',
      url: routeDesaparecido+"/cargarfoto",       
      data: formData,
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function(data) {           
        console.log(data);

        /*table.bootstrapTable('refresh');
        $("#modalVestimenta").modal("hide");*/
      },
      error: function(data) {
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
    window.location.replace(routeDesaparecido+'/'+idCedula);
    //location.reload();

  });

  $("#camara").click(function(){
    $("#archivo").click();
  });


</script>

@endsection