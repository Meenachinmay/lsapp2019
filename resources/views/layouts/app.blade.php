<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP2019')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container" id="mainContainer"> 
            @yield('content')
        </div>
    </body>
</html>
