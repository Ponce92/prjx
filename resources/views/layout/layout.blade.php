<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
    <head>
        <title>Demware :: @yield('title')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('layout.nav')
        @yield('cuerpo')

        <script src="{{asset('JQuery/JQuery.js')}}" ></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" ></script>

    </body>
</html>
