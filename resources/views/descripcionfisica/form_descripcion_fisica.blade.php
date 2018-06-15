@extends('layouts.app_uipj')
@section('css')
{!! Html::style('personal/css/avatar/avatar.css') !!}
@endsection

@section('content')
@include('navs.navs_datos',array('activar' => 'desc_fisica'))
@include('includes.partesCuerpo.01Talla')
<div class="card border-success">
    <div class="card-body"> 
        <!--@include('descripcionfisica.seccion_Estatura')-->
        <div class="form-group" id="fomularioPrin2">
                <h6><b>Selecciona la parte del cuerpo</b></h6>
        </div>
        <div class="row" id="fomularioPrin" >
            <div class="col">
              <!-- Card de datos físicos-->
                <div class="card-transparent" style="max-width: 18rem;height: -70%;">
                  <div class="card-header-transparent">
                    <i class="fa fa-address-card" id="datosFis" style="font-size:40px;" data-toggle="tooltip" data-target="#card" data-placement="right" title="Editar datos físicos"></i>       
                  </div>
                  <div class="card-body" id="card" style="margin-top: 7px;border: 1px solid #BDBDBD;border-radius: 5px;z-index: 10; position: absolute; background: #ffffff; width: 80%;">
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Estatura:</b></h6>
                          </div>
                          <div class="col-7" style="margin-left: 0%;">
                              <input type="text" id="estatura" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Peso:</b></h6>
                          </div>
                          <div class="col-7">
                              <input type="text" id="peso" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div>   
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Complexión:</b></h6>
                          </div>
                          <div class="col-7">
                              <input type="text" id="complexion" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div> 
                       <div class="row">
                          <div class="col-5">
                              <h6><b>Color de piel:</b></h6>
                          </div>
                          <div class="col-6">
                              <input type="text" id="piel" style="border: 0px;width: 110%;background: transparent;" disabled>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col" style="margin-left:-350px; margin-top:-20px;">
              <img src="{{asset('/images/cuerpo2.gif')}}" class="img-fluid" alt="" width="27" height="57" style="float: right;" data-toggle="tooltip" title="Atrás" data-placement="bottom" id="btnTras">
              <img src="{{asset('/images/cuerpo1.gif')}}" class="img-fluid" alt="" width="27" height="57" style="float: right; display:none;" data-toggle="tooltip" title="Frente" data-placement="bottom" id="btnFrente">

              @include('descripcionfisica.avatar')
              @include('descripcionfisica.avatarTras')
            </div>
            <div class="col-8" id='formulario'>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $i = 0; ?>
                    @foreach ($dataPartes as $key => $parte)
                        <li class="nav-item">
                            <a class="nav-link @if ($i < 1) active @endif" id="nav-{!! $parte['idPadre'] !!}-tab" data-toggle="tab" href="#parte-{!! $parte['idPadre'] !!}" role="tab" aria-controls="nav-{!! $parte['idPadre'] !!}" aria-selected="true">{!! $key !!}</a>
                        </li>
                        <?php $i++; ?>
                    @endforeach
                </ul> 
                
                <div class="tab-content" id="myTabContent">
                    <?php $x = 0; ?>
                    @foreach ($dataPartes as $key => $parte)
                        <div class="tab-pane fade @if ($x < 1) show active @endif" id="parte-{!! $parte['idPadre'] !!}" role="tabpanel" aria-labelledby="nav-{!! $parte['idPadre'] !!}-tab">
                            <div class="row">
                                @foreach ($parte['hijos'] as $value)
                                    <section>
                                    <div class="container">    
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="card-block">
                                                            <code class="card-title">{!! $value->parteh !!}</code>
                                                            <br>
                                                          @foreach (json_decode($value->reglas) as $ket => $regla)                                            
                                                          @switch($ket)
                                                            @case('tipo')
                                                              @if($regla == 1)          
                                                                <p><strong>Tipo: </strong>{!! $value->tipo !!}</p>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif
                                                              
                                                            @case('tamano')
                                                              @if($regla == 1)          
                                                                <p><strong>Tamaño: </strong>{!! $value->tamano !!}</p>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif

                                                            @case('color')
                                                              @if($regla == 1)          
                                                                <p><strong>Color: </strong>{!! $value->color !!}</p>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif

                                                            @case('posicion')
                                                              @if($regla == 1)          
                                                                <p><strong>Posición: </strong>{!! $value->posicion !!}</p>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif

                                                            @case('modificaciones')
                                                              @if($regla == 1)          
                                                                <label for="">Modificaciones:</label>
                                                                @foreach ($value->modificaciones as $modificacion)
                                                                    {!! $modificacion !!}, 
                                                                @endforeach
                                                                <br>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif

                                                            @case('particularidades')
                                                              @if($regla == 1)          
                                                                <label for="">Particularidades:</label>
                                                                @foreach ($value->particularidades as $particularidad)
                                                                    {!! $particularidad !!}, 
                                                                @endforeach
                                                                <br>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif

                                                            @case('observaciones')
                                                              @if($regla == 1)          
                                                                <label for="">Observaciones:</label>
                                                                {!! $value->observaciones !!}
                                                                <br>
                                                                @break
                                                              @else
                                                                  @break
                                                              @endif
                                                          @endswitch
                                                            
                                                            
                                                            
                                                          @endforeach
                                                            <button class="btn btn-dark" id="btnEditar" value='{!! $value->idParteh !!}'>Editar</button>
                                                            <button class="btn btn-dark pull-right" id="btnEliminar" value='{!! $value->idParteCuerpo !!}'>Eliminar</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="card-block">
                                                            <img class="card-img-left" style="width: 100%;" src="{{asset($value->imagen)}}" alt="Card image cap"/>
                                                        </div>
                                                </div>
                                                    
                                            </div>                                                                                                

                                        </div>
                                    </div>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <?php $x++; ?>
                    @endforeach
                </div>           

            </div>
        </div>
    </div>
</div>

@endsection 

@section('scripts')
<script type="text/javascript">
  var aux ="{{$aux}}";
  var idDesaparecido = "{{$desaparecido->id}}";
  var routeDescrip ="{!! route('descripcionfisica.index') !!}";
  var routeSenas ="{!! route('senas_particulares.index') !!}";
  var routeConsul ="{!! route('consultas.index') !!}";  
  var showCabello2 = "{{$showCabello}}";
  var partesCuerpo = @json($dataPartes);
  
  $.each(partesCuerpo, function(key, value){	
    console.log(value.idPadre);
    $('g[data-cuerpo="'+value.idPadre+'"] path').css({"fill":"#17a4da", "stroke":"#626362","stroke-width":"2-"});
  })
  

  
  //input[name='ext[]']
  //Boton frente
  $("#btnTras").click(function(event) {
    $("#AvatarFront").hide();
    $("#btnFrente").show();
    $("#btnTras").hide();
    $("#avatarBack").show();
  });

  //Boton tras
  $("#btnFrente").click(function(event) {
    $("#AvatarFront").show();
    $("#btnFrente").hide();
    $("#btnTras").show();
    $("#avatarBack").hide();
  });

  
</script>

{!! Html::script('personal/js/avatar/accionAvatar.js') !!}

{!! Html::script('personal/js/avatar/datos_fisicos.js') !!}
{!! Html::script('personal/js/avatar/cabello.js') !!}

{!! Html::script('personal/js/avatar/cuello_pecho.js') !!}
{!! Html::script('personal/js/avatar/hombros.js') !!}
{!! Html::script('personal/js/avatar/brazos.js') !!}
{!! Html::script('personal/js/avatar/manos.js') !!}
{!! Html::script('personal/js/avatar/abdomen.js') !!}
{!! Html::script('personal/js/avatar/muslos.js') !!}
{!! Html::script('personal/js/avatar/piernas.js') !!}
{!! Html::script('personal/js/avatar/pies.js') !!}
@endsection