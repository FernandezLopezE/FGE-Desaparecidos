@extends('layouts.app_uipj')

@section('css')
  
<link href="../plugins/bootstrap_fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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
</style>
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))
<div class="card border-primary">
<div class="card-body bg-white">
	<div class="row">
		<div class="col">
			<div> 
            	<a href="{{route('antecedentesmedicos.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
            Editar </a>    
			</div>
		</div>
	</div>
	<div class="row">
        <div class="col-lg-6 col-xs-12"> 
               <div class="row">
                    <dt class="col-sm-4">ENFERMEDADES:</dt>
                    <dd class="col-sm-8"> 
                        @if($enfermedades->isEmpty())
                      SIN INFORMACIÓN
                       @endif
                        @foreach($enfermedades as $enfermedades2)
                            {{$enfermedades2->nombre}},

                        @endforeach
                    </dd>
				</div>
				<div class="row">
                    <dt class="col-sm-4">ADICCIONES:</dt>
                    <dd class="col-sm-8"> 
                        @if($adicciones->isEmpty())
                      SIN INFORMACIÓN
                       @endif
                        @foreach($adicciones as $adicciones2)
	  					    {{$adicciones2->nombre}},

	  				    @endforeach
                    </dd>
				</div>
				<div class="row">
                    <dt class="col-sm-4">INTERVENCIONES QUIRÚRGICAS:</dt>
                    <dd class="col-sm-8"> 
                        @if($iQuirurgicas->isEmpty())
                      SIN INFORMACIÓN
                       @endif
                        @foreach($iQuirurgicas as $iQuirurgicas2)
                            {{$iQuirurgicas2->nombre}},

                        @endforeach
                    </dd>
				</div>
				
				
        </div>
        <div class="col-lg-6 col-xs-12" >
             <div class="row">
                    <dt class="col-sm-4">IMPLANTES:</dt>
                    <dd class="col-sm-8"> 
                      @if($implantes->isEmpty())
                      SIN INFORMACIÓN
                       @endif
                       
                        @foreach($implantes as $implantes2)
                            {{$implantes2->nombre}},

                        @endforeach
                    </dd>
				</div>
				<div class="row">
                    <dt class="col-sm-4">MEDICAMENTOS QUE TOMA:</dt>
                    <dd class="col-sm-8"> 
                       @if($anteMedic->medicamentosToma=="")
                      SIN INFORMACIÓN
                       @endif
                       {!! $anteMedic->medicamentosToma !!} 
                    </dd>
				</div>
				<div class="row">
                    <dt class="col-sm-4">OBSERVACIONES:</dt>
                    <dd class="col-sm-8"> 
                         @if($anteMedic->observaciones=="")
                      SIN INFORMACIÓN
                       @endif
                       {!! $anteMedic->observaciones !!}
                    </dd>
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
        
         @include('antecedentesmedicos.modals.modal_cargar_documento')  
 
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

  </div>
  <br>
</div>
   
			
</div>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript">
  
	$

   //los siguientes metodos los empleo en la galeria
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
    
    $(this).addClass('transition');
  }, function(){
        
    $(this).removeClass('transition');
  });
        //aqui terminan los metodos de la galería


  var modalAnexos = $('#modalAnexosAntecedentesMedicos');
$('#btnAgregarAnexo').click (function(){


  modalAnexos.modal('show');


})
var hola= "hola wey";
$desaparecido = ('{!! $desaparecido->id!!}');
var rutas = [];
 /** METODO PARA HACER PUSH A UN
 if (rutas.indexOf($nombre) === -1) {
                                rutas.push($nombre);
                                //console.log('La nueva colección de vegetales es: ' + $nombre);
                            } else if (rutas.indexOf($nombre) > -1) {
                                //console.log($nombre + ' ya existe en la colección de verduras.');
                            }*/
var routeIndex = '{!! route('anexoscontroller.index') !!}';
$("#fileImagenes").fileinput({
                  language:'es',
                  theme: 'fa',
                  uploadUrl: routeIndex + '/imagenAntecedentesM',

                  uploadExtraData: function() {
                   
                      return {

                          _token: $("input[name='_token']").val(),
                          idDesaparecido:'{!! $desaparecido->id!!}',
                          tipoAnexo: 'antecedentesMedicos',

                      };
                  },
                  allowedFileExtensions: ['jpg', 'png', 'gif', 'pdf'],
                  overwriteInitial: false,
                  maxFileSize:2000,
                  maxFilesNum: 10,

                  
                  slugCallback: function (filename) {
                    /*$desaparecido = ('{!! $desaparecido->id!!}');
                    console.log ( $desaparecido+"desaparecido");*/
                    $nombre = $desaparecido+"_ant_medicos_"+filename.replace('(', '_').replace(']', '_');

                    console.log($nombre);

                      return  filename.replace('(', '_').replace(']', '_');
                  }



              });

  $('#cerrarModal').click (function(){

   location.reload();

})


	</script>
@endsection