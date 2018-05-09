@extends('layouts.app_uipj')
@section('css')
<style type="text/css">
    .human-body {
        width: 207px;
        position: relative;
        margin-left: 40px;
        /*padding-top: 240px;*/
        /*height: 260px;*/
        display: block;
        /*margin: 40px auto;*/
    }
    .human-body svg:hover {
        cursor: pointer;
        transition: transform .2s;
        transform: scale(1.5);

    }
    .human-body g:hover path {
        fill: #17a4da;
    }
    /*.human-body svg {
        position: absolute;
        left: 50%;
        fill: #57c9d5;
    }*/


    .human-body svg g path{
        position: absolute;
        left: 50%;
        fill: #a8a8a8;
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

    #cerrar:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    #colapsar:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

</style>
@endsection

@section('content')
@include('includes.partesCuerpo.01Talla')
<div class="card border-success">
    <div class="card-header">
        <h5 class="card-title">Descripción física y señas particulares</h5>
    </div>
    <div class="card-body"> 
        <div class="row">
            <div class="col-3">
            @include('descripcionfisica.avatar')
            </div>

            <div class="col-9">
             @include('descripcionfisica.seccion_Cabello')
            </div>
        </div>
    </div>
</div>

@endsection 

@section('scripts')
<script type="text/javascript">
$("#cerrar").click(function(event) {
    $(".cabello").toggle();
    });

    window.onload = function () {
        const pieces = document.getElementsByTagName('g');
        console.log(pieces);
        for (var i = 0; pieces.length; i++) {
            let _piece = pieces[i];
            _piece.onclick = function(t) {
                if (t.target.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.getAttribute('id');
                if (t.target.parentElement.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');

                var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
                if(temp == "cabello"){
                  $(".cabello").toggle();
                }
            }
        }
    }
</script>



@endsection