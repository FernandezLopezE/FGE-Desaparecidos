<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>

<style type="text/css">

    /* font css */
    html,body,p,div{
        font-size: 14px;
    }
    body, p{
        /*background-color: #f1f1f1;*/
        font-family: 'neosanspro-regular';
        font-weight: normal;
        font-style: normal;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    h1, h2, h3, h4, h5, h6 div {
        font-family: 'neosanspro-bold';
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    h1, .h1 {
        font-size: 2.5rem;
    }
    h2, .h2 {
        font-size: 2rem;
    }
    h3, .h3 {
        font-size: 1.75rem;
        
    }
    h4, .h4 {
        font-size: 1.5rem;
        
    }
    h5, .h5 {
        font-size: 1.25rem;
    }
    h6, .h6 {
        font-size: 1rem;
    }
     /* section */
    /*section{
        outline: 1px;
        border-top: 1px solid #000;
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
    }*/
    /* table css */
    *, ::after, ::before {
        box-sizing: border-box;
    }
    table {
        border-collapse: collapse;
    }
    /*table {
        display: table;
        border-collapse: separate;
        border-spacing: 0px;
        border-color: grey;
    }
    .table {
        width: 100%;
        max-width: 100%;
        background-color: transparent;
    }
    thead {
        display: table-header-group;
        vertical-align: middle;
        border-color: inherit;
    }
    tr {
        display: table-row;
        vertical-align: inherit;
        border-color: inherit;
    }
    .table thead th {
        vertical-align: middle;
        border-bottom: 0px;
    }
    .table-sm td, .table-sm th {
        padding: .3rem;
    }*/
    .thfeg-report, .thfeg-report, .thfeg-report>th {
        background-color: #424242;
        color: white;
    }
    /*.ths{
        font-family: 'neosanspro-bold';
        background-color: #bdbdbd;
    }
    .thm{
        font-family: 'neosanspro-italic';
    }
    .thm td {
        border-top: 2px solid #bdbdbd;
    }
    .tbt{
        border-top: 2px solid #bdbdbd;
    }*/
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
            <thead>
                <tr>
                    <th class="text-sm-center">
                        <img src="personal/img/fge-logo-color-png.png" alt="Fiscalía General" style="height:110px">
                        <img src="personal/img/FEADPD.jpg" alt="FEADPD" style="height:110px">
                    </th>
                    <th  class="text-sm-left">
                        <p class="h3">Fiscalía Especializada para la Atención de Denuncias por Personas Desaparecidas</p>
                        <p class="h4">Zona Centro-Xalapa.</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-sm-center" >
                    <th rowspan="16"><img src="{!! $desaparecido->fotoDesaparecido !!}" alt="" style="width: 200px;"></th>
                </tr>
                <tr>
                    <td><strong>CARPETA DE INVESTIGACIÓN: </strong>FEADPD/ZCX/00/2018-00</td>
                </tr>
                <tr>
                    <td><strong>FECHA DE EXTRAVÍO: </strong>{!! $desaparecido->cedula->desaparicionFecha !!}</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><strong>SEXO: </strong>@if(($desaparecido->persona)!=null){!! $desaparecido->persona->sexo !!} @else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td><strong>EDAD: </strong>@if(($desaparecido->edadExtravio)!=null){!! $desaparecido->edadExtravio !!} @else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td><strong>NACIONALIDAD: </strong>@if(($desaparecido->persona->nacionalidad)!=null){!! $desaparecido->persona->nacionalidad->nombre !!} @else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td><strong>ORIGINARIO: </strong>@if(($desaparecido->persona->estado)!=null){!! $desaparecido->persona->estado->nombre !!} @else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td><strong>ESCOLARIDAD: </strong>@if(($desaparecido->escolaridad)!=null){!! $desaparecido->escolaridad->nombre !!} @else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td>
                        <strong>ESTATURA: </strong>@if(($desaparecido->estatura)!=null){!! $desaparecido->estatura !!} CM. @else SIN INFORMACIÓN. @endif         
                        <strong>       PESO: </strong>@if(($desaparecido->peso)!=null){!! $desaparecido->peso !!} KG. @else SIN INFORMACIÓN. @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>COMPLEXIÓN: </strong>@if(($desaparecido->complexion)!=null){{ $desaparecido->complexion->nombre }}@else SIN INFORMACIÓN. @endif</td>
                </tr>
                <tr>
                    <td><strong>CABELLO: </strong>
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
                    <td><strong>LABIOS: </strong>
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
                    <td><strong>NARIZ: </strong>
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
                    <td class="text-sm-center">
                        <h2>
                            {!! $desaparecido->persona->nombres !!} 
                            {!! $desaparecido->persona->primerAp !!} 
                            {!! $desaparecido->persona->segundoAp !!}
                        </h2>
                        <p class="h4">¡AYUDALO A REGRESAR!</p>
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


