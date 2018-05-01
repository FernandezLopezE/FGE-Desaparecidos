@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
  .human-body {
    width: 207px;
    position: relative;
    padding-top: 240px;
    height: 260px;
    display: block;
    margin: 40px auto;
}
.human-body svg:hover {
    cursor: pointer;

}
.human-body svg:hover path {
    fill: #ff7d16;
}
.human-body svg {
    position: absolute;
    left: 50%;
    fill: #57c9d5;
}

.human-body svg.cabello {
    margin-left: -28.5px;
    top: -6px;
}

.human-body svg.cabeza {
    margin-left: -23.5px;
    top: 10px;
}

.human-body svg.cuello {
    margin-left: -13.5px;
    top: 65px;
}


.human-body svg.shoulder {
    margin-left: -53.5px;
    top: 69px;
}
.human-body svg.arm {
    margin-left: -78px;
    top: 112px;
}
.human-body svg.cheast {
    margin-left: -43.5px;
    top: 88px;
}
.human-body svg.stomach {
    margin-left: -37.5px;
    top: 130px;
}
.human-body svg.legs {
    margin-left: -46.5px;
    top: 205px;
    z-index: 9999;
}
.human-body svg.hands {
    margin-left: -102.5px;
    top: 224px;
}
#area {
    display: block;
    width: 100%;
    clear: both;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    font-family: Courier New;
    color: #a5a5a5;
}

#area #data {
    color: black;
}
</style>
@endsection

@section('content')

<div id="area">
  Area: <span id="data"></span>
  @include('includes.modal_tipoSonrisa')
</div>
<div class="human-body">
<!-- Parte Cabello -->
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   class="cabello"
   viewBox="0 0 56.601999 39.058739"
   width="56.602001"
   height="39.058739"
   data-position="cabello"
   version="1.1"
   id="svg33"
   sodipodi:docname="01 cabello.svg"
   inkscape:version="0.92.3 (2405546, 2018-03-11)">
  <metadata
     id="metadata39">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs37" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="1366"
     inkscape:window-height="705"
     id="namedview35"
     showgrid="false"
     inkscape:zoom="4.9668004"
     inkscape:cx="55.100319"
     inkscape:cy="-5.7846928"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     inkscape:current-layer="svg33"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0" />
  <path
     d="m 38.95618,39.058353 c -19.126667,6.65e-4 -9.563333,3.33e-4 0,0 z M 30.242,38.861016 c -20.162667,-0.002 -10.081333,-10e-4 0,0 z M 6.043,38.885 5.786,25.065 28.224,11.9 51.842,27.655 51.626,38.025 56.602,20.94 42.554,2.376 25.488,0 10.801,3.673 0,24.415 Z"
     id="path31"
     inkscape:connector-curvature="0"
     sodipodi:nodetypes="ccccccccccccccc" />
  <g
     inkscape:groupmode="layer"
     id="layer1"
     inkscape:label="cabeza"
     style="display:inline"
     transform="translate(-0.002)" />
  <g
     inkscape:groupmode="layer"
     id="layer2"
     inkscape:label="cabeza 1"
     transform="translate(-0.002)" />
</svg>

<!-- Parte Cabeza -->
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   class="cabeza"
   viewBox="0 0 47.632998 60.387002"
   width="47.632999"
   height="60.387001"
   data-position="cabeza"
   version="1.1"
   id="svg66"
   sodipodi:docname="02 cabeza.svg"
   inkscape:version="0.92.3 (2405546, 2018-03-11)">
  <metadata
     id="metadata72">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs70" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="1366"
     inkscape:window-height="705"
     id="namedview68"
     showgrid="false"
     inkscape:zoom="7.0241165"
     inkscape:cx="18.785624"
     inkscape:cy="53.630352"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     inkscape:current-layer="svg66"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0" />
  <path
     d="m 23.84,60.178834 c -19.1266667,6.65e-4 -9.563333,3.33e-4 0,0 z m 2.265833,0.004 c -20.1626667,-0.002 -10.081333,-10e-4 0,0 z M 44.28,26.517 44.388,14.742 23.228,0 3.273,11.925 3.24,25.982 0,26.197 l 1.462,9.732 5.208,1.81 2.36,11.63 9.72,11.018 10.856,-0.324 9.56,-10.37 1.918,-11.952 5.207,-1.81 1.342,-9.517 z"
     id="path64"
     inkscape:connector-curvature="0"
     sodipodi:nodetypes="cccccccccccccccccccc" />
</svg>

<!-- parte Cuello -->
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   class="cuello"
   viewBox="0 0 29.745381 26.534001"
   width="29.745382"
   height="26.534"
   data-position="cuello"
   version="1.1"
   id="svg314"
   sodipodi:docname="03 cuello.svg"
   inkscape:version="0.92.3 (2405546, 2018-03-11)">
  <metadata
     id="metadata320">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs318" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="1366"
     inkscape:window-height="705"
     id="namedview316"
     showgrid="false"
     inkscape:zoom="7.0241165"
     inkscape:cx="15.915631"
     inkscape:cy="-7.8384672"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     inkscape:current-layer="svg314"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0" />
  <path
     d="m 1.5453815,0 8.7999995,12.546 3.97,13.984 L 5.0613815,19.15 0.43938145,3.302 Z m 18.2999995,12.546 -3.976,13.988 9.254,-7.38 4.622,-15.848 c -1.010749,-8.450062 -7.56873,5.91635 -9.9,9.24 z M 5.3424145,7.89 c -9.253333,20.969332 -4.62666705,10.484666 0,0 z"
     id="path312"
     inkscape:connector-curvature="0"
     sodipodi:nodetypes="ccccccccccccc" />
</svg>

<!-- -->






      <!--<svg data-position="cabello" class="cabello" xmlns="http://www.w3.org/2000/svg" width="55.102319" height="50.18757" viewBox="0 0 56.594 95.031"><path
     d="m 28.69,95.03 c -19.1266667,6.65e-4 -9.563333,3.33e-4 0,0 z m 1.554,0.004 c -20.162667,-0.002 -10.081333,-0.001 0,0 z M 6.045,38.885 5.788,25.065 28.226,11.9 51.844,27.655 51.628,38.025 56.604,20.94 42.556,2.376 25.49,0 10.803,3.673 0.002,24.415 Z"/>

      </svg>-->



      <!-- Datos head-->
     <!--   
        <svg data-position="arm" class="arm" xmlns="http://www.w3.org/2000/svg" width="156.344" height="119.25" viewBox="0 0 156.344 119.25"><path d="M21.12 56.5a1.678 1.678 0 0 1-.427.33l.935 8.224 12.977-13.89 1.2-8.958A168.2 168.2 0 0 0 21.12 56.5zm1.387 12.522l-18.07 48.91 5.757 1.333 19.125-39.44 3.518-22.047zm-5.278-18.96l2.638 18.74-17.2 46.023L.01 113.05l6.644-35.518zm118.015 6.44a1.678 1.678 0 0 0 .426.33l-.934 8.222-12.977-13.89-1.2-8.958A168.2 168.2 0 0 1 135.24 56.5zm-1.39 12.52l18.073 48.91-5.758 1.333-19.132-39.44-3.52-22.05zm5.28-18.96l-2.64 18.74 17.2 46.023 2.658-1.775-6.643-35.518zm-103.1-12.323a1.78 1.78 0 0 1 .407-.24l3.666-27.345L33.07.015l-7.258 10.58-6.16 37.04.566 4.973a151.447 151.447 0 0 1 15.808-14.87zm84.3 0a1.824 1.824 0 0 0-.407-.24l-3.666-27.345L123.3.015l7.258 10.58 6.16 37.04-.566 4.973a151.447 151.447 0 0 0-15.822-14.87zM22.288 8.832l-3.3 35.276-2.2-26.238zm111.79 0l3.3 35.276 2.2-26.238z"/></svg>
        <svg data-position="cheast" class="cheast" xmlns="http://www.w3.org/2000/svg" width="86.594" height="45.063" viewBox="0 0 86.594 45.063"><path d="M19.32 0l-9.225 16.488-10.1 5.056 6.15 4.836 4.832 14.07 11.2 4.616 17.85-8.828-4.452-34.7zm47.934 0l9.225 16.488 10.1 5.056-6.15 4.836-4.833 14.07-11.2 4.616-17.844-8.828 4.45-34.7z"/></svg>
        <svg data-position="stomach" class="stomach" xmlns="http://www.w3.org/2000/svg" width="75.25" height="107.594" viewBox="0 0 75.25 107.594"><path d="M19.25 7.49l16.6-7.5-.5 12.16-14.943 7.662zm-10.322 8.9l6.9 3.848-.8-9.116zm5.617-8.732L1.32 2.15 6.3 15.6zm-8.17 9.267l9.015 5.514 1.54 11.028-8.795-5.735zm15.53 5.89l.332 8.662 12.286-2.665.664-11.826zm14.61 84.783L33.28 76.062l-.08-20.53-11.654-5.736-1.32 37.5zM22.735 35.64L22.57 46.3l11.787 3.166.166-16.657zm-14.16-5.255L16.49 35.9l1.1 11.25-8.8-7.06zm8.79 22.74l-9.673-7.28-.84 9.78L-.006 68.29l10.564 14.594 5.5.883 1.98-20.735zM56 7.488l-16.6-7.5.5 12.16 14.942 7.66zm10.32 8.9l-6.9 3.847.8-9.116zm-5.617-8.733L73.93 2.148l-4.98 13.447zm8.17 9.267l-9.015 5.514-1.54 11.03 8.8-5.736zm-15.53 5.89l-.332 8.662-12.285-2.665-.664-11.827zm-14.61 84.783l3.234-31.536.082-20.532 11.65-5.735 1.32 37.5zm13.78-71.957l.166 10.66-11.786 3.168-.166-16.657zm14.16-5.256l-7.915 5.514-1.1 11.25 8.794-7.06zm-8.79 22.743l9.673-7.28.84 9.78 6.862 12.66-10.564 14.597-5.5.883-1.975-20.74z"/></svg>
        <svg data-position="legs" class="legs" xmlns="http://www.w3.org/2000/svg" width="93.626" height="286.625" viewBox="0 0 93.626 286.625"><path d="M17.143 138.643l-.664 5.99 4.647 5.77 1.55 9.1 3.1 1.33 2.655-13.755 1.77-4.88-1.55-3.107zm20.582.444l-3.32 9.318-7.082 13.755 1.77 12.647 5.09-14.2 4.205-7.982zm-26.557-12.645l5.09 27.29-3.32-1.777-2.656 8.875zm22.795 42.374l-1.55 4.88-3.32 20.634-.442 27.51 4.65 26.847-.223-34.39 4.87-13.754.663-15.087zM23.34 181.24l1.106 41.267 8.853 33.28-9.628-4.55-16.045-57.8 5.533-36.384zm15.934 80.536l-.664 18.415-1.55 6.435h-4.647l-1.327-4.437-1.55-.222.332 4.437-5.864-1.778-1.55-.887-6.64-1.442-.22-5.214 6.418-10.87 4.426-5.548 10.844-4.437zM13.63 3.076v22.476l15.71 31.073 9.923 30.85L38.23 66.1zm25.49 30.248l.118-.148-.793-2.024L21.9 12.992l-1.242-.44L31.642 40.93zM32.865 44.09l6.812 17.6 2.274-21.596-1.344-3.43zM6.395 61.91l.827 25.34 12.816 35.257-3.928 10.136L3.5 88.133zM30.96 74.69l.345.826 6.47 15.48-4.177 38.342-6.594-3.526 5.715-35.7zm45.5 63.953l.663 5.99-4.647 5.77-1.55 9.1-3.1 1.33-2.655-13.755-1.77-4.88 1.55-3.107zm-20.582.444l3.32 9.318 7.08 13.755-1.77 12.647-5.09-14.2-4.2-7.987zm3.762 29.73l1.55 4.88 3.32 20.633.442 27.51-4.648 26.847.22-34.39-4.867-13.754-.67-15.087zm10.623 12.424l-1.107 41.267-8.852 33.28 9.627-4.55 16.046-57.8-5.533-36.384zM54.33 261.777l.663 18.415 1.546 6.435h4.648l1.328-4.437 1.55-.222-.333 4.437 5.863-1.778 1.55-.887 6.638-1.442.222-5.214-6.418-10.868-4.426-5.547-10.844-4.437zm25.643-258.7v22.476L64.26 56.625l-9.923 30.85L55.37 66.1zM54.48 33.326l-.118-.15.793-2.023L71.7 12.993l1.24-.44L61.96 40.93zm6.255 10.764l-6.812 17.6-2.274-21.595 1.344-3.43zm26.47 17.82l-.827 25.342-12.816 35.256 3.927 10.136 12.61-44.51zM62.64 74.693l-.346.825-6.47 15.48 4.178 38.342 6.594-3.527-5.715-35.7zm19.792 51.75l-5.09 27.29 3.32-1.776 2.655 8.875zM9.495-.007l.827 21.373-7.028 42.308-3.306-34.155zm2.068 27.323L26.24 59.707l3.307 26-6.2 36.58L9.91 85.046l-.827-38.342zM84.103-.01l-.826 21.375 7.03 42.308 3.306-34.155zm-2.066 27.325L67.36 59.707l-3.308 26 6.2 36.58 13.436-37.24.827-38.34z"/></svg>
        <svg data-position="hands" class="hands" xmlns="http://www.w3.org/2000/svg" width="205" height="38.938" viewBox="0 0 205 38.938"><path d="M21.255-.002l2.88 6.9 8.412 1.335.664 12.458-4.427 17.8-2.878-.22 2.8-11.847-2.99-.084-4.676 12.6-3.544-.446 4.4-12.736-3.072-.584-5.978 13.543-4.428-.445 6.088-14.1-2.1-1.25-7.528 12.012-3.764-.445L12.4 12.9l-1.107-1.78L.665 15.57 0 13.124l8.635-7.786zm162.49 0l-2.88 6.9-8.412 1.335-.664 12.458 4.427 17.8 2.878-.22-2.8-11.847 2.99-.084 4.676 12.6 3.544-.446-4.4-12.736 3.072-.584 5.978 13.543 4.428-.445-6.088-14.1 2.1-1.25 7.528 12.012 3.764-.445L192.6 12.9l1.107-1.78 10.628 4.45.665-2.447-8.635-7.786z"/></svg>
        -->
    </div>



@endsection 

@section('scripts')
<script type="text/javascript">
  window.onload = function () {
    const pieces = document.getElementsByTagName('svg');
    for (var i = 0; pieces.length; i++) {
        let _piece = pieces[i];
        _piece.onclick = function(t) {
            if (t.target.getAttribute('data-position') != null) document.getElementById('data').innerHTML = t.target.getAttribute('data-position');
            if (t.target.parentElement.getAttribute('data-position') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('data-position');

            var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('data-position');
            if(temp == "cabello"){
              alert("Hola mundo");
              $("#modalSonrisa").modal("show");
            }
        }
    }
}
</script>



@endsection