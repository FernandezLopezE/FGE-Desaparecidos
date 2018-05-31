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

</style>
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'desaparecido'))

<div class="card border-primary">
        <div class="card border-success">
          <div class="card-header"> 
              <h5>DATOS DE LA PERSONA NO LOCALIZADA
              	<a href="{{route('extraviado.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
					Editar
				</a>   
              </h5>
          </div>
        </div>
<div class="card-body bg-white">
	<div class="row">
		<div class="col-10">
			<dl class="row">
				<dt class="col-sm-4">Nombres:</dt>
				<dd class="col-sm-8">
					{!! $desaparecido->persona->nombres !!} 
					{!! $desaparecido->persona->primerAp !!} 
					{!! $desaparecido->persona->segundoAp !!} 
				</dd>
				<dt class="col-sm-4">Apodo:</dt>
				<dd class="col-sm-8">
					{!! $desaparecido->apodo !!}
				</dd>
				<dt class="col-sm-4">Género:</dt>
				<dd class="col-sm-8">
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
				<dt class="col-sm-4">Nacionalidad:</dt>
				<dd class="col-sm-8">{!! $desaparecido->persona->nacionalidad->nombre !!} </dd>
				<dt class="col-sm-4">Estado natal:</dt>
				<dd class="col-sm-8">{!! $desaparecido->persona->estado->nombre !!} </dd>
				<dt class="col-sm-4">Fecha nacimiento:</dt>
				<dd class="col-sm-8">{!! Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!} </dd>
				<dt class="col-sm-4">Edad de extravio:</dt>
				<dd class="col-sm-8">{!! $desaparecido->edadExtravio !!} </dd>
				<dt class="col-sm-4">Edad aparente:</dt>
				<dd class="col-sm-8">{!! $desaparecido->edadAparente !!} </dd>
				<dt class="col-sm-4">CURP:</dt>
				<dd class="col-sm-8">{!! $desaparecido->persona->curp !!} </dd>
				<dt class="col-sm-4">Escolaridad:</dt>
				<dd class="col-sm-8">{!! $desaparecido->escolaridad->nombre !!} </dd>
				<dt class="col-sm-4">Ocupación:</dt>
				<dd class="col-sm-8">{!! $desaparecido->ocupacion->nombre !!}</dd>
				<dt class="col-sm-4">Identificación:</dt>
				<dd class="col-sm-8">{!! $desaparecido->documento->nombre !!}</dd>
				@if ($desaparecido->idDocumentoIdentidad === '7')
					<dt class="col-sm-4">Otra identificación:</dt>
					<dd class="col-sm-8">{!! $desaparecido->otroDocIdentidad !!}</dd>
				@endif
				<dt class="col-sm-4">Número de identificación:</dt>
				<dd class="col-sm-8">{!! $desaparecido->numDocIdentidad !!}</dd>
				<dt class="col-sm-4">Estado civil:</dt>
				<dd class="col-sm-8">{!! $desaparecido->edocivil->nombre !!} </dd>
				@if ($desaparecido->persona->sexo === 'M')
					<dt class="col-sm-4">Embarazada:</dt>
					<dd class="col-sm-8">{!! $desaparecido->embarazo !!}</dd>
					<dt class="col-sm-4">Periodo:</dt>
					<dd class="col-sm-8">{!! $desaparecido->numGestacion !!} {!! $desaparecido->tipoGestacion !!}</dd>
					<dt class="col-sm-4">Por menores:</dt>
					<dd class="col-sm-8">{!! $desaparecido->pormenores !!}</dd>
				@endif

			</dl>
		</div>
		<div class="col-2">
			{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}	
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
                        <a id="fancybox" class="fancybox" rel="ligthbox" href="{{ asset($image->ruta) }}">                
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


</script>

@endsection