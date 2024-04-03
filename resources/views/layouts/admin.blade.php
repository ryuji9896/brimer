<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            @include('parts/nav')
        </header>
        <p><a href="{{ route('mapIndex')}}">DB入力ページ</a></p>
        @yield('content')
    </body>
</html>