<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf_token" content="{{ csrf_token() }}">
        
        <title>Brimer</title>
    </head>
    <body>
        <h1>@yield('title')</h1>
    </body>
</html>