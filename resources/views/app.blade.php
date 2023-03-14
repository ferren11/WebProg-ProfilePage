<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kelompok-1 || {{$title}} </title>

        {{-- using bulma --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>

    <body class="antialiased">
        @yield('header')
        @yield('content')
        @yield('footer')
    </body>
</html>
