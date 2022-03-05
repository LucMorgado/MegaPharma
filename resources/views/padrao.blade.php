<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MegaPharma</title>

         <!-- Styles -->
         <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        @include('elementos.menu')

        @include('elementos.header')
        
        @include('elementos.banner')

        @include('elementos.busca')



    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
