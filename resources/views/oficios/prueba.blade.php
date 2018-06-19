<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset ('css/oficio.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <oficio tipo="probando 1" url="{{url("oficioprueba")}}" id="1"></oficio>
    </div>
</body>
</html>
<script src="{{asset ('js/jquery-3.2.1.min.js')}}">  </script>
<script src="{{asset ('js/oficio.js')}}">  </script>