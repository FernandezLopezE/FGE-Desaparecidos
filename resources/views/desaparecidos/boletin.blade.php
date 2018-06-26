<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>

<style type="text/css">

    table {
        border-collapse: collapse;
    }
    .thfeg-report, .thfeg-report, .thfeg-report>th {
        background-color: #424242;
        color: white;
    }
    .text-center{
        text-align: center;
    }
    .pull-lftmes {
        padding-left: 30px;
        float: left !important;
    }
    .pull-rghtmes {
        padding-right: 30px;
        float: right !important;
    }
    .text-sm-left {
        text-align: left!important;
    }
    .text-sm-center {
        text-align: center!important;
    }
    .text-sm-justify{
        text-align: justify!important;
    }
    .text-muted {
        color: #8d8d8d !important;
    }
    strong{
        font-family: 'neosanspro-bold';
    }
</style>
</head>
<body>
    <section>
        <table>
            <tbody>
                <tr>
                    <td class="text-sm-center" colspan="1">
                        <p>
                            <img src="personal/img/fge-logo-color-png.png" alt="Fiscalía General" style="height:110px">
                            <img src="personal/img/FEADPD.jpg" alt="FEADPD" style="height:100px">
                        </p>
                    </td>
                    <td class="text-sm-left" colspan="1">
                        <p>
                            <h2>Fiscalía Especializada para la Atención de Denuncias por Personas Desaparecidas</h2>
                        </p>
                        <p>
                            <h2>Zona Centro-Xalapa.</h2>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="15" class="text-sm-center" colspan="1">
                        <img src="{!! $desaparecido->fotoDesaparecido !!}" style="width: 250px;">
                    </td>
                </tr>
                <tr>
                    <td rowspan="1" colspan="1">
                        <strong>CARPETA DE INVESTIGACIÓN: </strong>FEADPD/ZCX/00/2018-00
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>FECHA DE EXTRAVÍO: </strong>{!! $desaparecido->cedula->desaparicionFecha !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>SEXO: </strong>@if(($desaparecido->persona)!=null){!! $desaparecido->persona->sexo !!} @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>EDAD: </strong>@if(($desaparecido->edadExtravio)!=null){!! $desaparecido->edadExtravio !!} @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>NACIONALIDAD: </strong>@if(($desaparecido->persona->nacionalidad)!=null){!! $desaparecido->persona->nacionalidad->nombre !!} @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>ORIGINARIO: </strong>@if(($desaparecido->persona->estado)!=null){!! $desaparecido->persona->estado->nombre !!} @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>ESCOLARIDAD: </strong>@if(($desaparecido->escolaridad)!=null){!! $desaparecido->escolaridad->nombre !!} @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>ESTATURA: </strong>@if(($desaparecido->estatura)!=null){!! $desaparecido->estatura !!} CM. @else SIN INFORMACIÓN. @endif         
                        <strong>PESO: </strong>@if(($desaparecido->peso)!=null){!! $desaparecido->peso !!} KG. @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>COMPLEXIÓN: </strong>@if(($desaparecido->complexion)!=null){{ $desaparecido->complexion->nombre }}@else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td>
                        <strong>CABELLO: </strong>
                        @foreach($desaparecido->partescuerpo as $partecuerpo) 
                            @if(($partecuerpo->idPartesCuerpo==2))
                                @if( (($partecuerpo->idTamanoCuerpo)==null)&&(($partecuerpo->idTipoCuerpo)==null)&&(($partecuerpo->idColoresCuerpo)==null) )
                                    SIN INFORMACIÓN.
                                @else
                                    @if(($partecuerpo->idTamanoCuerpo)!=null){{ $partecuerpo->catTamanoCuerpo->nombre }}@endif @if(($partecuerpo->idTipoCuerpo)!=null) {{ $partecuerpo->catTipoCuerpo->nombre }}@endif @if(($partecuerpo->idColoresCuerpo)!=null) {{ $partecuerpo->catColoresCuerpo->nombre }}@endif
                                @endif
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>LABIOS: </strong>
                        @foreach($desaparecido->partescuerpo as $partecuerpo)
                            @if($partecuerpo->idPartesCuerpo==14)
                                @if( (($partecuerpo->idTamanoCuerpo)==null)&&(($partecuerpo->idTipoCuerpo)==null)&&(($partecuerpo->idColoresCuerpo)==null) )
                                    SIN INFORMACIÓN.
                                @else
                                    @if(($partecuerpo->idTamanoCuerpo)!=null){{ $partecuerpo->catTamanoCuerpo->nombre }}@endif @if(($partecuerpo->idTipoCuerpo)!=null) {{ $partecuerpo->catTipoCuerpo->nombre }}@endif @if(($partecuerpo->idColoresCuerpo)!=null) {{ $partecuerpo->catColoresCuerpo->nombre }}@endif
                                @endif
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>NARIZ: </strong>
                        @foreach($desaparecido->partescuerpo as $partecuerpo) 
                            @if(($partecuerpo->idPartesCuerpo)==10)
                                @if( (($partecuerpo->idTamanoCuerpo)==null)&&(($partecuerpo->idTipoCuerpo)==null)&&(($partecuerpo->idColoresCuerpo)==null) )
                                    SIN INFORMACIÓN.
                                @else
                                    @if(($partecuerpo->idTamanoCuerpo)!=null){{ $partecuerpo->catTamanoCuerpo->nombre }}@endif @if(($partecuerpo->idTipoCuerpo)!=null) {{ $partecuerpo->catTipoCuerpo->nombre }}@endif @if(($partecuerpo->idColoresCuerpo)!=null) {{ $partecuerpo->catColoresCuerpo->nombre }}@endif
                                @endif
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td><strong>OJOS: </strong>
                        @foreach($desaparecido->partescuerpo as $partecuerpo) 
                            @if($partecuerpo->idPartesCuerpo==9)
                                @if( (($partecuerpo->idTamanoCuerpo)==null)&&(($partecuerpo->idTipoCuerpo)==null)&&(($partecuerpo->idColoresCuerpo)==null) )
                                    SIN INFORMACIÓN.
                                @else
                                    @if(($partecuerpo->idTamanoCuerpo)!=null){{ $partecuerpo->catTamanoCuerpo->nombre }}@endif @if(($partecuerpo->idTipoCuerpo)!=null) {{ $partecuerpo->catTipoCuerpo->nombre }}@endif @if(($partecuerpo->idColoresCuerpo)!=null) {{ $partecuerpo->catColoresCuerpo->nombre }}@endif
                                @endif
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td><strong>COLOR DE PIEL: </strong>@if(($desaparecido->colorpiel)!=null){!! $desaparecido->colorpiel->nombre !!} @else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td class="text-sm-center" colspan="1">
                        <h2>
                            {!! $desaparecido->persona->nombres !!} 
                            {!! $desaparecido->persona->primerAp !!} 
                            {!! $desaparecido->persona->segundoAp !!}
                        </h2>
                        <p><h3>¡AYUDALO A REGRESAR!</h3></p>
                    </td>
                    <td class="text-sm-justify"><strong>SEÑAS PARTICULARES:</strong> Tiene un lunar en medio de la frente, y un tatuaje en el brazo (mandala), cabello largo de color negro, tiene marcas de quemaduras en el brazo derecho y a lo largo del cuello.</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-sm-justify"><strong>DESCRIPCIÓN DE LOS HECHOS:</strong> {!! $desaparecido->cedula->desaparicionObservaciones !!} </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tfoot>
                <tr class="thm thfeg-report">
                    <td colspan="2" class="text-sm-center">
                        <p class="h5">LA INFORMACIÓN QUE SE OFREZCA SERÁ CONFIDENCIAL Y ANÓNIMA Y SERÁ RECIBIDA POR LOS MEDIOS SIGUIENTES:</p>
                        <p class="h4"><strong>personasdesaparecidas@fiscaliaveracruz.gob.mx</strong></p>
                    </td>
                </tr>
                <tr class="thfeg-report">                        
                    <td class="text-sm-center">Fiscalía Especializada para la Atención de Denuncias por Personas Desaparecidas, zona centro Xalapa:<br><strong>(01) 228 812 0818 y 812 0841</strong>
                    </td>
                    <td class="text-sm-center">Fiscalía de Investigaciones Ministeriales:<br><strong>(01) 228 812 0818 Ext. 3538 y 3539</strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </section>
</body>
</html>


