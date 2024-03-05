@extends('layouts.admin')
@section('title','サイト選択')
@section('content')
    <h1>サイト選択</h1>
    <ul>
    <li><a href={{ route('lineup')}}><img src="{{ secure_asset('image/map_haven_a.png')}}">Aサイト</a></li><!--top画面の選択によって転移先のUrlを変更させること-->
    <li><a href={{ route('lineup')}}><img src="{{ secure_asset('image/map_haven_b.png')}}">Bサイト</a></li>
    <li><a href={{ route('lineup')}}><img src="{{ secure_asset('image/map_haven_c.png')}}">Cサイト</a></li>
    </ul>
@endsection

