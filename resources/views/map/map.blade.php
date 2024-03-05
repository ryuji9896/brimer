@extends('layouts.admin')
@section('title','マップ選択')
@section('content')
    <h1>マップ選択</h1>
    <ul>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_icebox.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_ascent.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_sunset.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_split.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_bind.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_pearl.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_fracture.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_breeze.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_haven.png')}}"></a></li>
        <li><a href="{{ route('site')}}"><img src="{{ secure_asset('image/map_lotus.png')}}"></a></li>
    </ul>
@endsection