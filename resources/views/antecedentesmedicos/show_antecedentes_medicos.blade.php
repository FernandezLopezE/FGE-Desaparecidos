@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

 <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>-->


<link href="../plugins/bootstrap_fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<!--<style type="text/css">
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
    </style>-->
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
        <div class="card border-success">
          <div class="card-header"> 
                <h5>Antecedentes médicos
                 <a href="{{route('antecedentesmedicos.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
						Editar </a>   
                </h5>
          </div>
        </div>
 			

<div class="card-body bg-white">
	
				

	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Enfermedades:</dt>
					<dd class="col-sm-5">
						{!!  $enfermedades !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Adicciones:</dt>
					<dd class="col-sm-5">
						{!!  $adicciones !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Intervenciones quirúrgicas:</dt>
					<dd class="col-sm-5">
						{!!  $iq !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Implantes:</dt>
					<dd class="col-sm-5">
						{!!  $implantes !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Observaciones:</dt>
					<dd class="col-sm-5">
						{!!  $observaciones !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Medicamentos que toma:</dt>
					<dd class="col-sm-5">
						{!!  $medicamentosToma !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	


	 {{--@if(is_null($desaparecido->cedula->vehiculoPlacas))
			
	@else
			<div class="row">
				<div class="col">
						<dl class="row">
							<dt class="col-sm-8">DESCRIPCIÓN DEL AUTOMÓVIL:</dt>
						</dl>
						<dl class="row">
							<dt class="col-sm-2">Placas:</dt>
							<dd class="col-sm-3">
								{!!  placas !!} 
							</dd>
							<dt class="col-sm-2">Descripcion:</dt>
							<dd class="col-sm-5">
								{!!  descripcion!!} 
							</dd>

							
						</dl>
				</div>
			</div>
	@endif--}}
</div>	
</div>

{{--<dl class="row">
		<dt class="col-sm-8">ÚLTIMA PERSONA QUE LO VIO:</dt>
	</dl>--}}

{{--LO SIGUIENTE ES EL FILE INPUT PARA CARGAR IMAGEN DE RADIOGRAFIAS--}}
 
<div class="card border-primary">
        <div class="card border-success">
          <div class="card-header"> 
              <h5>AGREGAR ANEXOS
              <button type="submit" class="btn btn-dark pull-right"  id="btnAgregarAnexo"> AGREGAR   
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
                         <a id="fancybox" class="fancybox" rel="ligthbox" href="{{asset($image->ruta) }}" target="_blank">              
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
                        <a id="fancybox" class="fancybox" rel="ligthbox" href="{{asset($image->ruta) }}">                
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
  
  $(document).ready(function(){
 
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
 
 });

   

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