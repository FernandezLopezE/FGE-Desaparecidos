<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>

<style type="text/css">


@page { margin: 1px; }
/* font css */
      html,body,p,div{font-size: 10px;}
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
     section{
            outline: 1px;
            border-top: 1px solid #000;
            border-left: 1px solid #000;
            border-bottom: 1px solid #000;
            border-right: 1px solid #000;
        }
     /* table css */
        *, ::after, ::before {
        box-sizing: border-box;
        }
        table {
            border-collapse: collapse;
        }
        table {
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
        }
        .thfeg-report, .thfeg-report>td, .thfeg-report>th {
        background-color: #424242;
        color: white;
        }
        .ths{
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
    	
        <table  >
            <thead>
                <tr> 
                    <th scope="col" >
                    	<br><br><br>
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
                    <th rowspan="16"><img src="personal/img/person.jpg" alt="" style="width: 200px;"></th>
                </tr>
                <tr >
                    <td><strong>CARPETA DE INVESTIGACIÓN:</strong> FEADPD/ZCX/00/2018-00</td>
                </tr >
                <tr>
                    <td><strong>FECHA DE EXTRAVÍO:</strong> 4 DE JULIO 2017</td>
                </tr>
                <tr>
                    <td><strong>SEXO:</strong>{!! $desaparecido->persona->sexo !!}</td>
                </tr>
                <tr>
                    <td><strong>EDAD:</strong> {!! $desaparecido->edadExtravio !!}</td>
                </tr>
                <tr>
                    <td><strong>NACIONALIDAD:</strong>{!! $desaparecido->persona->nacionalidad->nombre !!}</td>
                </tr>
                <tr>
                    <td><strong>ORIGINARIO:</strong>  VERACRUZ</td>
                </tr>
                <tr>
                    <td><strong>ESCOLARIDAD:</strong> {!! $desaparecido->escolaridad->nombre !!}</td>
                </tr>
                <tr>
                    <td><strong>ESTATURA:</strong> 1.70 METROS</td>
                </tr>
                <tr>
                    <td><strong>PESO:</strong> 80 KG.</td>
                </tr>
                <tr>
                    <td><strong>COMPLEXIÓN:</strong> DELGADO</td>
                </tr>
                <tr>
                    <td><strong>CABELLO:</strong> NEGRO, CORTO</td>
                </tr>
                <tr>
                    <td><strong>LABIOS:</strong> GRUESOS</td>
                </tr>
                <tr>
                    <td><strong>NARIZ:</strong> ROMANA</td>
                </tr>
                <tr>
                    <td><strong>OJOS:</strong> CAFE CLARO</td>
                </tr>
                <tr>
                    <td><strong>COLOR DE PIEL:</strong> MORENO CLARO</td>
                </tr>
                <tr>
                  <td  class="text-sm-center">
                    <h2>{!! $desaparecido->persona->nombres !!} 
						{!! $desaparecido->persona->primerAp !!} 
						{!! $desaparecido->persona->segundoAp !!}
					</h2>
                    <p class="h4">¡AYUDALO A REGRESAR!</p>
                  </td>
                  <td><strong>SEÑAS PARTICULARES:</strong> Tiene un lunar en medio de la frente, y un tatuaje en el brazo (mandala), cabello largo de color negro, tiene marcas de quemaduras en el brazo derecho y a lo largo del cuello.</td>
                </tr>
                <tr>
                  <td colspan="2"><strong>DESCRIPCIÓN DE LOS HECHOS:</strong> Refiere la entrevistada que el día 2 de enero del 2017, a las 9 de la noche aproximadamente su hija Briseida le dijo que saldría a lavar un poco de ropa al patio exterior de la casa, y pasado unos 20 o 30 minutos salió a verla pero ya no la encontró, buscándola por toda la colonia donde vive junto con su esposo, siendo avisados eso de las 11 de la noche por un sujeto de nombre Omar X que la menor se había ido a México con Luis Fernando vecino de la colonia..</td>
                </tr>
                <tr  class="thm thfeg-report">
                    <td colspan="2" class="text-sm-center">
                      <p class="h5">LA INFORMACIÓN QUE SE OFREZCA SERÁ CONFIDENCIAL Y ANÓNIMA Y SERÁ RECIBIDA POR LOS MEDIOS SIGUIENTES:</p>
                      <p class="h4"><strong>personasdesaparecidas@fiscaliaveracruz.gob.mx</strong></p>
                    </td>
                </tr>
                <tr class="thfeg-report">                        
                    <td>Fiscalía Especializada para la Atención de Denuncias por Personas Desaparecidas, zona centro Xalapa:<br><strong>(01) 228 812 0818 y 812 0841</strong>
                    <p></p></td>
                    <td>Fiscalía de Investigaciones Ministeriales:<br><strong>(01) 228 812 0818 Ext. 3538 y 3539</strong>
                    <p></p>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>


</body>

</html>


